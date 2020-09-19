<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
        $users = User::all()->except(Auth::user()->id);
        return view('AdminPages.users',compact('users'));
    }
}
