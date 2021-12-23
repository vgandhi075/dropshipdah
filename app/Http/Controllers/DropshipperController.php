<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropshipperController extends Controller
{
    public function showLogin(){
        return view('dropshipperLogin');
    }
    public function showRegister(){
        return view('dropshipperLogin');
    }
    public function showProfile(){
        return view('dropshipperProfile');
    }
    public function showEditProfile(){
        return view('dropshipperEditProfile');
    }
}
