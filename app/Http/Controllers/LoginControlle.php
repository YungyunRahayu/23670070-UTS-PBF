<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControlle extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
}
