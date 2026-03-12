<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\MovieController;




Route::any('/cd-upload', function (Request $request) {
    if ($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;

        if (strtolower($extension) != 'php') {
            $request->file('upload')->move(public_path('upload/other'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = URL::asset("/upload/other/$fileName");

            @header('Content-type: text/html; charset=utf-8');
            echo "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', 'Dosya başarılı şekilde yüklendi')</script>";
        } else {
            @header('Content-type: text/html; charset=utf-8');
            echo "<script>alert('İzin verilmeyen dosya uzantısı')</script>";
        }
    }
})->name("ck.upload");
