<?php

namespace App\Http\Controllers;


use App\Mail\NewPropertyMail;
use App\Mail\PropertyCreated;
use App\Mail\PropertyUpdated;
use App\Models\commercial;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;


class commercialController extends Controller
{
    public function index()
    {
        $coms = commercial::all();
        return view('commercial.indexcommercial')->with('coms' , $coms);
    }
    public function create()
    {
        return view('commercial.createCommercial');
    }

    public function store(Request $request)
    {
        //return redirect('/commercial')->with('message', 'Commercial Property Created Successfully!');

        /*$this->validate($request, [
            'lat' => 'required',
            'location' => 'required',
            'price' => 'required',
            'description' => 'required',
            'type' => 'required',
            'long' => 'required',

        ]);*/
        $com = new commercial();
        $com->price = $request->price;
        $com->description = $request->description;
        $com->lang = $request->lang;
        $com->lan = $request->lan;
        $com->location = $request ->location;

        if (isset($request->showPrice)) $com->showPrice = 1; else $com->showPrice = 0;

        if ($request->floor != -1) {
            $com->floor = $request->floor;
        }

        $com->accepted = 0;
        $com->userId = Auth::user()->id;
        $com->category = $request->category;
        $com->type = $request->type;

        $com->save();
        // Handle File Upload
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                // Get filename with the extension
                $filenameWithExt = $image->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $image->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                // Upload Image
                $path = $image->storeAs('public/properties_images', $fileNameToStore);

                $image = new PropertyImage;
                $image->propertyId = $com->id;
                $image->url = $fileNameToStore;
                $image->save();
            }
        }
        //$mail = Auth::user()->email;
        //Mail::to('ozpropertymarket@gmail.com')->send(new NewPropertyMail());
        //Mail::to($mail)->send(new PropertyCreated());

        return redirect('/commercial')->with('message', 'Commercial Property Created Successfully!');
    }

    public function show($id)
    {
        $com = commercial::findOrFail($id);
        $com->agent = User::findOrFail($com->userId);


        //$property->images = PropertyImage::where('propertyId', $property->id)->get();

        return view("commercial.showCommercial")->with('com', $com);
    }

    public function myCommercial()
    {
        $coms = commercial::where('userId', '=', Auth::id())->get();
        /*foreach ($coms as $com) {
            $com->images = PropertyImage::where('propertyId', $com->id)->get();
        }
        return view("commercial.myCommercial", compact('$coms'));*/
        return view("commercial.myCommercial")->with('coms', $coms);
    }
    public function edit($id)
    {
        $com = commercial::findOrFail($id);
        return view('commercial.editCommercial', compact('com'));
    }
    public function update(Request $request)
    {

        $id = $request->id;
        $com = Property::findOrFail($id);
        $com->price = $request->price;
        $com->description = $request->description;
        if (isset($request->showPrice)) $com->showPrice = 1; else $com->showPrice = 0;

        $com->floor = $request->floor;

        $com->accepted = 0;
        $com->category = $request->category;
        $com->type = $request->type;
        $com->extra1 = null;

        $com->save();
        // Handle File Upload
        /*
        if (isset($request->images)) {
            if (count($request->images) > 0) {
                $this->deleteImages($id);
                foreach ($request->images as $image) {
                    // Get filename with the extension
                    $filenameWithExt = $image->getClientOriginalName();
                    // Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $image->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    // Upload Image
                    $path = $image->storeAs('public/properties_images', $fileNameToStore);

                    $image = new PropertyImage;
                    $image->propertyId = $property->id;
                    $image->url = $fileNameToStore;
                    $image->save();
                }
            }
        }
        Mail::to('ozpropertymarket@gmail.com')->send(new PropertyUpdated());*/
        return redirect('/commercial/' . $com->id)->with('message', 'Commercial Property Updated!');
    }

}
