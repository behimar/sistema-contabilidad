<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Auth extends Controller
{
    public function getIndex()
    {
        return view('auth.login');
    }

    public function getAbout()
    {
        return view('auth.acercade');
    }

    public function getContact()
    {
        return view('auth.contacto');
    }
}
