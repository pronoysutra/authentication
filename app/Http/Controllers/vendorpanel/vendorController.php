<?php

namespace App\Http\Controllers\vendorpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    public function index(){
        return view('vendor.dashboard');
    }
}
