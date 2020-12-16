<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePictureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit() 
    {
         return view('profile.picture');
    }
    public function update()
    {
        $data = request()->validate([
            'img' => 'required',
        ]);
        Auth::user()->update($data);
        return redirect('profile.event');
    }
}
