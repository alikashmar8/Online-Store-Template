<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Payment;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\Facade as PDF;

class PaymentController extends Controller
{
    public function index()
    {
        if (!Auth::guest() && Auth::user()->role != 0){
            $id= Auth::user()->id;
            $payment = Payment::where('user_id', '=', $id)->where('status', '!=', 'pending')->get();
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
            $amount = $request->amount;
            $pay->status = 'pending';
            if( $request->apply == 1 ){
                $pay->status = 'sponsorship';
            }


            $pay->save();


        //$mail = Auth::user()->email;
        //Mail::to('ozpropertymarket@gmail.com')->send(new NewPropertyMail());
        //Mail::to($mail)->send(new PropertyCreated());
        if ($request->payment_method == 'stripe'){
            return redirect('/Stripe/' . $amount .'/'.$pay->id);
        }

        return redirect('/users/'.$id)->with('message', 'You have registered successfully!');
    }

    //Stripe
    public function Stripe($amount, $id)
    {
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51HywjtC3KTL075dcARHpuSgf8trC3awdHpWBgHYmfInB7nbYTSYNnHBlLRaOPFOffMODwAvpkjZB1kzjuRrFumxv00H2p0JX7t');



        //$amount = $request->amount ;
        $amount *= 100;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([

            'amount' => $amount,
            'currency' => 'AUD',
            'description' => 'Payment From OZ Property Market Provided by WebSide',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;

        return view('Packages.stripe',compact('intent' , 'amount', 'id'));

    }

    public function afterStripe(Request $request)
    {

        $pay = Payment::findOrFail($request->payid);
        $pay->status = 'paid';


        $pay->save();
        return redirect('/userPayments');


    }

    //paypal

    //invoice
    public function getInvoice($id){
        $pay = \App\Models\Payment::findOrFail($id);
        if(Auth::user()->role == 1 )
            $pay->company =  Company::where('AgentId', Auth::user()->id)->first();

        $pdf = PDF::loadView('pdf.invoice' , compact('pay'));

        return $pdf->download('invoice.pdf');

    }

}
