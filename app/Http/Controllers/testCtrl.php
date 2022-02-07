<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testCtrl extends Controller
{
    public function showLogin(){
        
        return view('supplier.supplierLogin');
    }
}
