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
        $contexts = [
            'colors' => ['blue','red','green'],
            'fruits' => ['apple','banana','orange'],

        //end     
        ];
        return view('pages.webDesign', [
            'colors' => $contexts['colors'],
            'fruits' => $contexts['fruits']
        ]);
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

//POST Method for Singup
public function dataSingUp(Request $request){
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    dd($request->all());
    // return redirect()->route(route: 'login');
}






 }
