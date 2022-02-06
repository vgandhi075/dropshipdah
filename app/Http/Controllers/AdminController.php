<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showIndex(){
        return view('admin.adminIndex');
    }
    public function showLogin(){
        return view('admin.adminLogin');
    }
    public function showUsers(){
        return view('admin.adminShowUsers');
    }
    public function showOngoingOrders(){
        return view('admin.orders.ongoingOrders');
    }
    public function showFinishedOrders(){
        return view('admin.orders.finishedOrders');
    }
    public function showReturnRequests(){
        return view('admin.orders.returnRequests');
    }
    public function showCancellationRequests(){
        return view('admin.orders.cancellationRequests');
    }
}