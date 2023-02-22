<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        #code untuk memanggil dashboard
        return view('admin/admin');
    }
}
