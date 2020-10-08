<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function agentsIndex()
    {
        $users = User::where('role','=',1)->get();
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
        } else {
            return redirect('/');
        }
    }

    public function edit(Request $request)
    {
        dd($request);
        return view('Users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        dd($request);
        $user = User::findOrFail($id);
        $user = $request['phoneNumberCode'] . '-' . $request['phoneNumber'];
        $user->name = $request->name;
        if ($user->bio != null) {
            $bio = $request->bio;
        }
        if (isset($request['profileImg'])) {
            $image = $request['profileImg'];
            // Get filename with the extension
            $filenameWithExt = $image->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $image->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $user->profileImg = $fileNameToStore;
            $path = $image->storeAs('public/user_profile_images', $fileNameToStore);
        }

        if (isset($request['bio'])) {
            $bio = $request['bio'];
        }

        if ($request->email != Auth::user()->email) {

        }
//        if ($request['role'] == 1) {
//            $company = new Company;
//            $company->name = $request['comp_name'];
//            $company->licenseNumber = $request['license'];
//            $company->AgentId = $user->id;
//            $company->save();
//        }
        $user->save();
        return redirect('users/' . $user->id);
    }

}
