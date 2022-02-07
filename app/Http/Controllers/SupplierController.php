<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function showLogin(){
        return view('supplier.supplierLogin');
    }

    public function index(){
        return view('supplier.supplierIndex');
    }

    public function showProfile(){
        return view('supplier.supplierProfile');
    }

    public function showEditProfile(){
        return view('supplier.supplierEditProfile');
    }

}
