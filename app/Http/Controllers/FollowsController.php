<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{

    //  Login is necessary
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(User $user){

        return auth()->user()->following()->toggle($user->profile);
    }
}
