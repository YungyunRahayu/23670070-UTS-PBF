<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsElementsController extends Controller
{
    public function index()
    {
        return view('admin.forms-elements');
    }
}
