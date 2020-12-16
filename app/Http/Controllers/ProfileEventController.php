<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileEventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.event');
    }
}
