<?php

namespace App\Http\Controllers;

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
        Storage::delete('public/user_profile_images/' . $user->profileImg);
//        $path = public_path() . '\storage\user_profile_images\\' . $user->profileImg;
//        unlink($path);
        $user->delete();
        return redirect('/users');
    }

}
