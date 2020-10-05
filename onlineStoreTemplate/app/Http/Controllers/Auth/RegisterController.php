<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\PropertyImage;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:190'],
            'bio' => ['nullable','string', 'max:190'],
            'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
            'phoneNumber' => ['required', 'string', 'max:25','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $nb = $data['phoneNumberCode'].'!'.$data['phoneNumber'];
        $fileNameToStore = 'profileImage.png';
        $bio = NULL;
        if (isset($data['profileImg'])) {
            $image = $data['profileImg'];
            // Get filename with the extension
            $filenameWithExt = $image->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $image->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $image->storeAs('public/user_profile_images', $fileNameToStore);
        }

        if(isset($data['bio'])){
            $bio = $data['bio'];
        }
        $user = User::create([
            'name' => $data['name'],
            'bio' => $bio,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phoneNumber' => $nb,
            'profileImg' => $fileNameToStore,
            'role' => $data['role'],

        ]);
        if ($data['role'] == 1) {
            $company = new Company;
            $company->name = $data['comp_name'];
            $company->licenseNumber = $data['license'];
            $company->AgentId = $user->id;
            $company->save();
        }
        return $user;
    }
}
