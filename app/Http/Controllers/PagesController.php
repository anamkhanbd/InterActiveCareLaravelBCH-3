<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }

    //Contact Pages 
    public function contact(){
        return view('pages.contact');
    }

    public function design(){
        return view('pages.webDesign');
    }

    public function development(){
        return view('pages.webDevelopment');
    }

    public function application(){
        return view('pages.webApplication');
    }

// registration 
public function singup(){
    return view('pages.singup');
}
public function login(){
    return view('pages.login');
}






 }
