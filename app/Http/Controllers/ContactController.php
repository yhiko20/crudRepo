<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ContactController extends Controller
{
    public function aboutUs()
    {   
        return view('aboutUs');
    }

    public function ContactUs()
    {   
        return view('ContactUs');
    }

    
}
