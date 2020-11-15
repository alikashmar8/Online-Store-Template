<?php

namespace App\Http\Controllers;
use App\Models\commercial;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return redirect('/commercial')->with('message', 'Commercial Property Created Successfully!');

       /* $this->validate($request, [
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
        $com->lang = $request->long;
        $com->lan = $request->lat;
        $com->location = $request ->location;

        if (isset($request->showPrice)) $com->showPrice = $request->showPrice; else $com->showPrice = 0;

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
}