<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchAgent(Request $request)
    {
        $users = User::where('role', '=', 1)->where('name', 'like', '%' . $request->name . '%')->get();
        dd($users);

    }
}
