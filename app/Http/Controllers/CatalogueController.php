<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function showCatalogue(){
        return view('dropshipperShowCatalogue');
    }
}
