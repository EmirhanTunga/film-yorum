<?php

namespace App\Http\Controllers\Panel;   
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Hash;
use Validator,View; 

class AdminController extends BaseController
{
    use BasePattern;

    public function __construct()
    {
        $this->title = 'Yöneticiler';
        $this->page = 'admin';
        $this->model = new Admin;

        $this->view = (object)array(
            'breadcrumb' => array(
                'Ayarlar' => '#',
                'Yöneticiler' => route('panel.admin_list'),
            ),
        );
        
        parent::__construct();
    }   

    public function save(Request $request, $unique = NULL)
	{
        Validator::make($request->all(),
        [
            'email' => ['required','email','min:10','max:191','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'title' => 'required|min:3',
            'name' => 'required|min:2|max:80',
            'phone' => 'required|max:15|min:15',
            'tc' => 'required|min:11|max:11|regex:/^[0-9]+$/u',
            'birthday' => 'required',
            'is_active' =>'in:0,1',
        ],
        [
            'email.required' => 'Email adresi girilmesi gerekiyor',
            'email.email'    => 'Email formatında girmeniz gerekiyor.',
            'email.min'    => 'Email 10 karakterden fazla olmalıdır.',
            'email.email'    => 'Email formatında girmeniz gerekiyor.',
            'email.regex'    => 'Email formatında girmeniz gerekiyor.',
            'name.required' => 'Ad adresi girilmesi gerekiyor',
            'name.min' => 'Ad 2 karakterden fazla olmalıdır.',
            'name.max' => 'Ad maximum 80 karakter olmalıdır.',
            'title.required' => 'Ünvan adresi girilmesi gerekiyor',
            'title.min' => 'Ünvan 3 karakterden fazla olmalıdır.',
            'phone.min' => 'Telefon numarası hatalı',
            'phone.max' => 'Telefon numarası hatalı',
            'tc.required' => 'Tc Kimliğin girilmesi gerekiyor',
            'birthday.required' => 'Doğum tarihi zorunludur.',
            'tc.min' => 'Tc Kimlik 11 karakter olmalıdır.',
            'tc.max' => 'Tc Kimlik 11 karakter olmalıdır.',
            'tc.regex' => 'Tc Kimlik 11 karakterli ve rakam olmalıdır.',
            'is_active' => 'Aktif veya Pasif Seçiniz.',

        ])->validate(); 
       
		$params = $request->all();
        $params['type'] = 3;

        if(is_null($unique))
        {
            Validator::make($request->all(),
            [
                'password' =>'required|min:6|max:12',
                'email' => 'required|email|min:10|max:50'
            ],
            [
                'email.required' => 'Email zorunludur.',
                'email.email' => 'Email adresinizi kontrol ediniz',
                'email.min'    => 'Email 10 karakterden fazla olmalıdır.',
                'email.max' => 'Email maximum 50 karakter olabilir.',
                'password.required' => 'Şifre girmelisiniz',
                'password.min' => 'Şifre en az 6 karakter olabilir.',
                'password.max' => 'Şifre en fazla 12 karaktergirmelisiniz',

            ])->validate();
  
            $check_tc = Admin::where('tc', $request->tc)->first();
            if(!is_null($check_tc)){
                return back()->with('warning', 'Bu T.C No zaten kayıtlı')->withInput();
            }  

            $check_email = Admin::where('email', $request->email)->first();
            if(!is_null($check_email)){
                return back()->with('warning', 'Bu e posta zaten kayıtlı')->withInput();
            }   
 
            $params['password'] = Hash::make($params['password']);
            $obj = $this->model::create($params);
        }
        else
        {  $check_tc = Admin::where('tc', $request->tc)->where('id', '<>', (int)$unique)->first();             
            if(!is_null($check_tc)){
                return back()->with('warning', 'Bu T.C No zaten kayıtlı')->withInput();
            }  

            $check_email = Admin::where('email', $request->email)->where('id', '<>', (int)$unique)->first();             
            if(!is_null($check_email)){
                return back()->with('warning', 'Bu eposta hesabı zaten kayıtlı')->withInput();
            }                

            if(!is_null($params['password']) && $params['password'] != '')
            {
                $params['password'] = Hash::make($params['password']);
            } else {
                unset($params['password']);
            } 

            $obj = $this->model::find((int)$unique);
            $obj->update($params);
        }

		return redirect()->route("panel.admin_list")->with('success', 'Kayıt başarıyla şekilde işlendi');
	} 

    public function profile(Request $request)
    {
        $item = Admin::find(Auth::user()->id);
        return view('panel.admin.profile', compact('item'));
    }

    public function profile_save(Request $request)
    {
        $user = Admin::find(Auth::user()->id);
        $params = $request->all();
        $request->validate([
                'name'=>'required|min:2|max:80',
                'email'=>'required|email|min:10|max:191|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'phone'=>'required', 
                'new_password'=>'required|min:6|max:191',
                'new_password2'=>'required|min:6|max:191|same:new_password',
            ],
            [
                'name.required'=>'Ad boş geçilemez',
                'name.min'=>'Ad minimum 2 karakter olmalıdır.',
                'name.max'=>'Ad maksimum 80 karakter olmalıdır.',                
                'email.required'=>'E-mail boş geçilemez',
                'email.min'=>'E-mail minimum 10 karakter olmalıdır.',
                'email.max'=>'E-mail maksimum 191 karakter olmalıdır.',
                'email.email'=>'E-mail adresini kontrol ediniz.',
                'phone.required'=>'Telefon boş geçilemez',
                'new_password2.required'=>'Şifre boş geçilemez',
                'new_password2.min'=>'Şifre minimum 6 karakter olmalıdır.',
                'new_password2.max'=>'Şifre maksimum 191 karakter olmalıdır.',
                'new_password.required'=>'Şifre boş geçilemez',
                'new_password.min'=>'Şifre minimum 6 karakter olmalıdır.',
                'new_password.max'=>'Şifre maksimum 191 karakter olmalıdır.',
                'new_password2.same'=>'Şifre tekrarı uyuşmuyor',
            ]
        );

        $user->update([ 
            'new_password' => $params['new_password'],
            'password' => Hash::make($params['new_password']),
        ]);

        return redirect()->route("panel.profile")->with('success', 'Profil bilgileriniz kaydedildi');
    }


    public function delete(Request $request)
	{ 
        $all_user =  $this->model::where('is_active', 1)->count();
        if($all_user <= 1){
            return response()->json(['status' => false, 'message' => 'Son kayıt silinemez']);
        } 

		$exits = $this->model::find((int)$request->post('id'));

		if(!is_null($exits))
		{
			$obj = $this->model::find($exits->id);
            $obj->update([
                'is_active' => 0, 
            ]); 

		} else {
			return response()->json(['status' => false, 'message' => 'Kayıt bulunamadı']);
		}
		 
		return response()->json(['status' => true]);
	}

}
