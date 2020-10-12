<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\CountryCode;
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
        if ($user->role == 1) {
            $user->company = Company::where('AgentId', $user->id)->first();
        }

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
        $var = ltrim($request['phoneNumber'], '0');
        $request['phoneNumber'] = $var;
//        dd($request);

        $country = CountryCode::where('iso', '=', $request['phoneNumberCode'])->get();
        $code = $country[0]->phonecode;

        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:190'],
            'bio' => ['nullable', 'string', 'max:190'],
        ]);

        if ($request->email != Auth::user()->email) {
            $validatedData = $request->validate([
                'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
            ]);
            $user->email = $request->email;
        }

        if ($request->phoneNumber != Auth::user()->phoneNumber || $code != Auth::user()->phoneNumberCode) {
            $validatedData = $request->validate([
                'phoneNumber' => ['unique:users', 'phone:phoneNumberCode'],
                'phoneNumberCode' => 'required_with:phoneNumber',
            ]);
        }


//        dd($request);
        $user->phoneNumber = $request['phoneNumber'];
        $user->phoneNumberCode = $code;
        $user->name = $request->name;
        $user->bio = $request->bio;

        if ($request['profileImg'] != null) {
            if ($user->profileImg != 'profileImage.png') {
                Storage::delete('public/user_profile_images/' . $user->profileImg);
            }
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
        } else {
            $user->profileImg = 'profileImage.png';
        }



        if ($request->email != Auth::user()->email) {
            $user->email_verified_at = null;
        }
        $user->save();
        return redirect('users/' . $user->id);
    }

}
