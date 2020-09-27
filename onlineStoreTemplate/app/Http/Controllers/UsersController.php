<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all()->except(Auth::user()->id);
        return view('AdminPages.users', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('Users.show', compact('user'));
    }

    public function registerAgent()
    {
        return view('auth.registerAgent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->profileImg != 'profileImage.png') {
            Storage::delete('public/user_profile_images/' . $user->profileImg);
        }
        $properties = Property::where('userId', '=', $user->id)->get();
        foreach ($properties as $property) {
            app('\App\Http\Controllers\PropertiesController')->destroy($property->id);
        }
        if ($user->role == 1) {
            $company = Company::where('agentId', '=', $user->id);
            $company->delete();
        }
        $user->delete();
        if (Auth::user()->role == 0) {
            return redirect('/users');
        }
        else{
            return redirect('/');
        }
    }

}
