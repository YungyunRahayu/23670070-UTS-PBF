<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SweetalertsController extends Controller
{
    public function index()
    {
        return view('admin.ui-sweetalerts');
    }
}
