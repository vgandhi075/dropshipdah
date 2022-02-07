<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function supplierShowNewOrders(){
        return view('supplier.orders.newOrders');
    }

    public function supplierShowOngoingOrders(){
        return view('supplier.orders.ongoingOrders');
    }

    public function supplierShowFinishedOrders(){
        return view('supplier.orders.finishedOrders');
    }

    public function supplierShowReturnRequests(){
        return view('supplier.orders.returnRequests');
    }

    public function supplierShowCancellationRequests(){
        return view('supplier.orders.cancellationRequests');
    }
}
