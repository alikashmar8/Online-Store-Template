<?php

namespace App\Http\Controllers;

use App\Mail\EvaluateFormMail;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function submitEvaluationForm(Request $request)
    {
        $var = ltrim($request['phoneNumber'], '0');
        $request['phoneNumber'] = $var;

        $this->validate($request, [
            'phoneNumber' => ['phone:phoneNumberCode'],
            'phoneNumberCode' => 'required_with:phoneNumber',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumberCode' => $request->phoneNumberCode,
            'phoneNumber' => $request->phoneNumber,
            'location' => $request->location,
            'description' => $request->description,
            'bedroomsNumber' => $request->num_bed,
            'owner' => $request->owner,
        );
        Mail::to('ozpropertymarket@gmail.com')->send( new EvaluateFormMail($data));

        return redirect('/');
    }

}
