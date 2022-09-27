<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index(\App\Models\User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(\App\Models\User $user){

    }

}
