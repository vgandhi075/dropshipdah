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

    public function showNewOrders(){
        return view('supplier.orders.newOrders');
    }

    public function showOngoingOrders(){
        return view('supplier.orders.ongoingOrders');
    }

    public function showFinishedOrders(){
        return view('supplier.orders.finishedOrders');
    }

    public function showReturnRequests(){
        return view('supplier.orders.returnRequests');
    }

    public function showCancellationRequests(){
        return view('supplier.orders.cancellationRequests');
    }

    public function showProducts(){
        return view('supplier.supplierProducts');
    }
}
