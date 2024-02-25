<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('');
    }

    public function loadRegister(){
        return view('frontend.pages.registration.registration');
    }
    
    public function register(){
        
    }
  
    public function loadLogin(){
        return view('frontend.pages.login.login');
    }

    public function login(){
        
    }

}