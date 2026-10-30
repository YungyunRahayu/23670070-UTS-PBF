<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialElementController extends Controller
{
    public function index()
    {
        return view('landing.testimonial-element');
    }
}
