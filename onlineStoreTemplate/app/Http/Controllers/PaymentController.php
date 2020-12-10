<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        if (!Auth::guest() && Auth::user()->role != 0){
            $id= Auth::user()->id;
            $payment = Payment::where('user_id', '=', $id)->get();
            return view('Packages.userPayments')->with('payment' , $payment);
        }else{
            $payment = Payment::all();
            return view('Packages.adminPayments')->with('payment' , $payment);
        }

    }
    public function create()
    {

        return view('User.show');
    }
    public function destroy($id)
    {
        $this->delete($id);
        if (Auth::user()->role == 0) {
            return redirect('/acceptCommercials')->with('message', 'Property Deleted!');
        } else {
            return redirect('/myCommercial')->with('message', 'Property Deleted!');
        }
    }


    public function store(Request $request)
    {

        $id = Auth::user()->id;
        $pay = new Payment();
        $pay->user_id = $id;
        $pay->payment_method = $request->payment_method;
        $pay->package = $request->package;
        $pay->amount = $request->amount;



        $pay->save();

        //$mail = Auth::user()->email;
        //Mail::to('ozpropertymarket@gmail.com')->send(new NewPropertyMail());
        //Mail::to($mail)->send(new PropertyCreated());

        return redirect('/users/'.$id)->with('message', 'You have registered successfully!');
    }
}
