<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest() || (!Auth::guest() && Auth::user()->role != 0)) {
            $categories = Category::all();
            return view('welcome', compact('categories'));
        } else {
            if (!Auth::guest()) {
                if (Auth::user()->role == 0) {
                    $notAcceptedProperties = Property::where('accepted', '=', 0)->get();
                    $recentUsers = User::where('created_at', '>=', new DateTime('today'))->get();
                    return view("welcome", compact('notAcceptedProperties', 'recentUsers'));
                }
            }
        }
        return view('welcome');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function accept(Request $request){
//        dd($request['id']);
        $property =  Property::findOrFail($request['id']);
        $property->accepted = 1;
        $property->contactInfo = $request['contactInfo'];
        $property->save();
        return redirect('/acceptProperties');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'price' => 'required',
            'type' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);
        $property = new Property();
        $property->price = $request->price;
        $property->description = $request->description;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        if(isset($request->showPrice)) $property->showPrice = $request->showPrice; else $property->showPrice = 0;
        $property->bedroomsNumber = $request->bedroomsNumber;
        $property->accepted = 0;
        $property->userId = Auth::user()->id;
        $property->categoryId = $request->type;

        $property->save();
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
                $image->propertyId = $property->id;
                $image->url = $fileNameToStore;
                $image->save();
            }
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);
        $property->agent = User::findOrFail($property->userId);
        $property->images = PropertyImage::where('propertyId', $property->id)->get();

        return view("Properties.show")->with('property', $property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.edit', compact('property'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $imags = PropertyImage::where('propertyId', '=', $property->id);
        $images = $imags->get();
        foreach ($images as $image) {
            Storage::delete('public/properties_image/' . $image->url);
            $path = public_path() . '\storage\properties_images\\' . $image->url;
            unlink($path);
        }

        $imags->delete();
        $property->delete();
        return redirect('/');

        if ($property->accepted == 0) {
            $imags->delete();
            $property->delete();
            return redirect('/acceptProperties');
        } else {
            $imags->delete();
            $property->delete();
            return redirect('/acceptedProperties');
        }
    }

    public function buyIndex()
    {
        $properties = Property::where('categoryId', '=', 0)->where('accepted','=',1)->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }
        return view("Properties.index", compact('properties'));
    }

    public function rentIndex()
    {
        $properties = Property::where('categoryId', '=', 1)->where('accepted','=',1)->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }
        return view("Properties.index", compact('properties'));
    }

    public function viewNotAcceptedProperties(){
        if (Auth::user()->role == 0) {
            $notAcceptedProperties = Property::where('accepted', '=', 0)->get();
            foreach ($notAcceptedProperties as $property) {
                $property->images = PropertyImage::where('propertyId', $property->id)->get();
                $property->agent = User::find($property->userId);
            }
            return view("AdminPages.acceptProperties", compact('notAcceptedProperties'));
        }
    }

    public function allAcceptedProperties(){
        $properties = Property::where('accepted', '=', 1)->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
            $property->agent = User::find($property->userId);
        }
        return view('AdminPages.allProperties',compact('properties'));
    }

    public function myProperties(){

        $properties = Property::where('userId','=',Auth::id())->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }
        return view("Properties.myProperties", compact('properties'));
    }

    public function acceptProperty($request,$id)
    {
        dd($request);
    }
}
