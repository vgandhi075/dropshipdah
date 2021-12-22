<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropshipperController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function showRegister(){
        return view('login');
    }
}
?>
