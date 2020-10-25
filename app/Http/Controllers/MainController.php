<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function showLogin()
    {
     return view('login');
    }

    function about()
    {
     return view('about');
    }

    function courses()
    {
     return view('courses');
    }

    function events()
    {
     return view('events');
    }

    function pricing()
    {
     return view('pricing');
    }

    function lecturers()
    {
     return view('lecturers');
    }

    function contact()
    {
     return view('contact');
    }

    function dashboard()
    {
     return view('dashboard');
    }
}
