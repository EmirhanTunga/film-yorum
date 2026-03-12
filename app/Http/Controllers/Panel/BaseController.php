<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use View, Validator, Storage, Cache;

class BaseController extends Controller
{
	public function __construct()
	{
		$container = (object)array(
			'title' => $this->title,
			'page' => $this->page,
			'model' => $this->model,
			'upload' => $this->upload,
			'view' => $this->view
		);
		View::share('container', $container);
	}

	/*** CRUD ***/
	public function list(Request $request)
	{
		if ($request->has('datatable')) {
			$select = (isset($this->listQuery) ? $this->listQuery : $this->model::select());
			$obj = datatables()->of($select);

			if (method_exists($this, 'datatableHook')) {
				$obj = $this->datatableHook($obj);
			}
			$obj = $obj
				->editColumn('created_at', function ($item) {
					return (!is_null($item->created_at) ? $item->created_at->format('d.m.Y H:i') : '-');
				})
				->editColumn('updated_at', function ($item) {
					return (!is_null($item->updated_at) ? $item->updated_at->format('d.m.Y H:i') : '-');
				})
				->editColumn('deleted_at', function ($item) {
					return (!is_null($item->deleted_at) ? $item->deleted_at->format('d.m.Y H:i') : '-');
				})
				->editColumn('last_login', function ($item) {
					return (!is_null($item->last_login) ? $item->last_login->format('d.m.Y H:i') : '-');
				})
				->editColumn('image', function ($item) {
					return !is_null($item->image) ? $item->image : NULL;
				})
				->editColumn('is_active', function ($item) {
					return $item->is_active == 1 ? 'Aktif' : 'Pasif';
				})
				->editColumn('created_by', function ($item) {
					return $item->createdBy->name ?? null;
				});

			$obj = $obj->addIndexColumn()->make(true);

			return $obj;
		}

		return view("panel.$this->page.list");
	}

	public function form(Request $request, $unique = NULL)
	{
		if (!is_null($unique)) {
			$item = $this->model::find((int)$unique);
			if (method_exists($this, 'formHook')) {
				$item = $this->formHook($item);
			}

			if (is_null($item))
				return redirect()->back()->with('error', 'Kayıt bulunamadı');
		} else {
			$item = new $this->model;
		}

		return view("panel.$this->page.form", compact('item'));
	}

	public function save(Request $request, $unique = NULL)
	{
		if (isset($this->validation) && is_array($this->validation) && count($this->validation) > 0) {
			if ($unique != null) {
				$validationType = array(
					'image', 'logo', 'icon', 'banner'
				);
				foreach ($validationType as $key => $value) {
					if (isset($this->validation[0][$value]))
						$this->validation[0][$value]  =  'image|max:2048|mimes:jpeg,png,jpg';
				}

				$validationDate = array(
					'published_at', 'start_date'
				);
				foreach ($validationDate as $key => $value) {
					if (isset($this->validation[0][$value]))
						$this->validation[0][$value]  =  'required|date';
				}

				$validationvideo = array(
					'video'
				);
				foreach ($validationvideo as $key => $value) {
					if (isset($this->validation[0][$value]))
						$this->validation[0][$value]  =  'max:51200|mimes:mp4,ogx,oga,ogv,ogg,webm,mov';
				}
			}

			$validator = Validator::make($request->all(), $this->validation[0], $this->validation[1]);

			if (isset($this->validation[1]))
				$validator->setAttributeNames($this->validation[1]);

			if ($validator->fails())
				// return redirect()->back()->with('form.error', Helpers::validationArray($validator->errors()));
				return redirect()->back()->withErrors($validator)->withInput();
		}

		$params = $request->all();
		if (method_exists($this, 'saveHook')) {
			$params = $this->saveHook($request);
		}

		if ($request->hasFile('image')) {
			$file = $request->file('image');

			if (number_format($file->getSize() / 1048576, 1) > 11)
				return redirect()->back()->with('error', 'Dosya formatı 10MB büyük olamaz.')->withInput();

			if (strtolower($file->getClientOriginalExtension()) == "php" || strtolower($file->getClientOriginalExtension()) == "js" || strtolower($file->getClientOriginalExtension()) == "py")
				return redirect()->back()->with('error', 'Dosya yüklenemedi.')->withInput();

			$image = md5(rand(1, 999999) . date('ymdhis')) . '.' . strtolower($file->getClientOriginalExtension());

			$file->move("upload/$this->upload", $image);

			$params['image'] = $image;
		}

		if ($request->hasFile('logo')) {
			$file = $request->file('logo');

			if (number_format($file->getSize() / 1048576, 1) > 11)
				return redirect()->back()->with('error', 'Dosya formatı 10MB büyük olamaz.')->withInput();

			if (strtolower($file->getClientOriginalExtension()) == "php" || strtolower($file->getClientOriginalExtension()) == "js" || strtolower($file->getClientOriginalExtension()) == "py")
				return redirect()->back()->with('error', 'Dosya yüklenemedi.')->withInput();

			$logo = md5(rand(1, 999999) . date('ymdhis')) . '.' . strtolower($file->getClientOriginalExtension());


			$file->move("upload/$this->upload", $logo);

			$params['logo'] = $logo;
		}

		if ($request->hasFile('icon')) {
			$file = $request->file('icon');

			if (number_format($file->getSize() / 1048576, 1) > 11)
				return redirect()->back()->with('error', 'Dosya formatı 10MB büyük olamaz.')->withInput();

			if (strtolower($file->getClientOriginalExtension()) == "php" || strtolower($file->getClientOriginalExtension()) == "js" || strtolower($file->getClientOriginalExtension()) == "py")
				return redirect()->back()->with('error', 'Dosya yüklenemedi.')->withInput();

			$icon = md5(rand(1, 999999) . date('ymdhis')) . '.' . strtolower($file->getClientOriginalExtension());


			$file->move("upload/$this->upload", $icon);

			$params['icon'] = $icon;
		}

		if ($request->hasFile('banner')) {
			$file = $request->file('banner');

			if (number_format($file->getSize() / 1048576, 1) > 11)
				return redirect()->back()->with('error', 'Dosya formatı 10MB büyük olamaz.')->withInput();

			if (strtolower($file->getClientOriginalExtension()) == "php" || strtolower($file->getClientOriginalExtension()) == "js" || strtolower($file->getClientOriginalExtension()) == "py")
				return redirect()->back()->with('error', 'Dosya yüklenemedi.')->withInput();

			$banner = md5(rand(1, 999999) . date('ymdhis')) . '.' . strtolower($file->getClientOriginalExtension());

			$file->move("upload/$this->upload", $banner);

			$params['banner'] = $banner;
		}

		if ($request->hasFile('video')) {

			$file = $request->file('video');

			if (strtolower($file->getClientOriginalExtension()) == "php" || strtolower($file->getClientOriginalExtension()) == "js" || strtolower($file->getClientOriginalExtension()) == "py")
				return redirect()->back()->with('error', 'Dosya yüklenemedi.')->withInput();


			$video = md5(rand(1, 999999) . date('ymdhis')) . '.' . strtolower($file->getClientOriginalExtension());

			$file->move("upload/$this->upload", $video);

			$params['video'] = $video;
		}

		if (is_null($unique)) {
			$obj = $this->model::create($params);
		} else {
			$obj = $this->model::find((int)$unique);
			$obj->update($params);
		}

		Cache::flush();
		if (method_exists($this, 'saveBack')) {
			return $this->saveBack($obj);
		}

		return redirect()->route("panel." . $this->page . "_list")->with('success', 'Kayıt başarılı şekilde işlendi');
	}

	public function delete(Request $request)
	{
		$exits = $this->model::find((int)$request->post('id'));

		if (!is_null($exits)) {
			$obj = $this->model::find($exits->id);

			$obj->delete();

			if (method_exists($this, 'deleteBack')) {
				return $this->deleteBack($obj);
			}
		} else {
			return response()->json(['status' => false, 'message' => 'Kayıt bulunamadı']);
		}

		Cache::flush();
		return response()->json(['status' => true]);
	}
}

trait BasePattern
{
	protected $title;
	protected $page;
	protected $model;
	protected $upload;
	protected $validation;
	protected $view;
}
