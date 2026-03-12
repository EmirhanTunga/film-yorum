<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class GeneralController extends Controller
{

    public function index(Request $request)
    {
        return view('panel.dashboard.member');
    }
}
