<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Str;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->get();
        return view('panel.movies.index', compact('movies'));
    }
    public function create()
    {
        return view('panel.movies.create');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->back()->with('success', 'Film başarıyla silindi.');
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        $movie = new Movie();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->category_id = $request->category_id;
        $movie->director = $request->director;
        $movie->release_date = $request->release_date;


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/movies'), $imageName);
            $movie->image = $imageName;
        }

        $movie->save();


        return redirect()->route('panel.movies.create')->with('success', 'Film başarıyla eklendi.');
    }
}
