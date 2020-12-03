<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{
    //
    public function index(){
        return view('login.login');
    }
    public function blog(){
        return view('blog.blog');
    }
    public function informacion(){
        return view('informacion.informacion');
    }
}
