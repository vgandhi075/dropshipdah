<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts(){
        return view('dropshipperProduct');
    }

    public function supplierShowProducts(){
        return view('supplier.supplierProducts');
    }
}
