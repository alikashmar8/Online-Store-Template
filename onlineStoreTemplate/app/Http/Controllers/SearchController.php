<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchAgent(Request $request)
    {
        $searched = $request->name;
        $results = User::where('role', '=', 1)->where('name', 'like', '%' . $request->name . '%')->get();
        $type = $request->type;


        return view('searchResults', compact('searched', 'results', 'type'));

    }
}
