<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function showIndex(){
    //     return redirect()->route('dropshipperShowProducts');
    // }
    public function showLogin(){
        return view('adminLogin');
    }
    public function showRegister(){
        return view('adminLogin');
    }
    // public function showProfile(){
    //     return view('dropshipperProfile');
    // }
    // public function showEditProfile(){
    //     return view('dropshipperEditProfile');
    // }
}
