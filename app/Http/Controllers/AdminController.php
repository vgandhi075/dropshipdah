<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function showIndex(){
    //     return redirect()->route('admin.adminShowUsers');
    // }
    public function showIndex(){
        return view('admin.adminIndex');
    }
    public function showLogin(){
        return view('admin.adminLogin');
    }
    // public function showProfile(){
    //     return view('dropshipperProfile');
    // }
    // public function showEditProfile(){
    //     return view('dropshipperEditProfile');
    // }
}
