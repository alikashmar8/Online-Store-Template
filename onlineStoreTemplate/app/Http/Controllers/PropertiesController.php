<?php

namespace App\Http\Controllers;

use App\Mail\NewPropertyMail;
use App\Mail\PropertyAcceptedMail;
use App\Mail\PropertyCreated;
use App\Mail\PropertyUpdated;
use App\Models\Category;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\PropertyType;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
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
            $types = PropertyType::all();
            $properties = Property::where('accepted', '=', 1)->orderBy('updated_at')->take(6)->get();;
            /*$properties = Property::all();where('accepted', '=', 1);*/
            /*
            $properties->images = PropertyImage::all()->where('propertyId' , $properties->id)->take(1);
            */
            foreach ($properties as $property) {
                $property->images = PropertyImage::all()->where('propertyId', $property->id)->take(1);
            }



            return view('welcome') -> with('properties' , $properties) -> with( 'categories' , $categories ) -> with( 'types' , $types);

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
    public function accept(Request $request)
    {
//        dd($request['id']);
        $property = Property::findOrFail($request['id']);
        $property->accepted = 1;
        $property->contactInfo = $request['contactInfo'];
        $property->save();
        $user = User::findOrFail($property->userId);
        Mail::to($user->email)->send(new PropertyAcceptedMail());
        return redirect('/acceptProperties')->with('message', 'Property Accepted');
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
//        dd($request);
        $this->validate($request, [
            'description' => 'required',
            'price' => 'required',
            'type' => 'required',
            'locationDescription' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);
        $property = new Property();
        $property->price = $request->price;
        $property->description = $request->description;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        $property->locationDescription = $request ->locationDescription;

        if (isset($request->showPrice)) $property->showPrice = $request->showPrice; else $property->showPrice = 0;

        if ($request->bedroomsNumber != -1) {
            $property->bedroomsNumber = $request->bedroomsNumber;
        }
        if ($request->bathroomsNumber != -1) {
            $property->bathroomsNumber = $request->bathroomsNumber;
        }
        if ($request->parkingNumber != -1) {
            $property->parkingNumber = $request->parkingNumber;
        }
        $property->accepted = 0;
        $property->userId = Auth::user()->id;
        $property->categoryId = $request->category;
        $property->typeId = $request->type;

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
        $mail = Auth::user()->email;
        Mail::to('ozpropertymarket@gmail.com')->send(new NewPropertyMail());
        Mail::to($mail)->send(new PropertyCreated());

        return redirect('/properties/myProperties')->with('message', 'Property Created Successfully!');
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
//        dd($request);
        $this->validate($request, [
            'description' => 'required',
            'price' => 'required',
        ]);
        $property = Property::findOrFail($id);
        $property->price = $request->price;
        $property->description = $request->description;
        if (isset($request->showPrice)) $property->showPrice = $request->showPrice; else $property->showPrice = 0;

        if ($request->bedroomsNumber != -1) {
            $property->bedroomsNumber = $request->bedroomsNumber;
        }
        if ($request->bathroomsNumber != -1) {
            $property->bathroomsNumber = $request->bathroomsNumber;
        }
        if ($request->parkingNumber != -1) {
            $property->parkingNumber = $request->parkingNumber;
        }
        $property->accepted = 0;
        $property->categoryId = $request->category;
        $property->typeId = $request->type;
        $property->contactInfo = null;

        $property->save();
        // Handle File Upload
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
        Mail::to('ozpropertymarket@gmail.com')->send(new PropertyUpdated());
        return redirect('/properties/' . $property->id)->with('message', 'Property Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->delete($id);
        if (Auth::user()->role == 0) {
            return redirect('/acceptProperties')->with('message', 'Property Deleted!');
        } else {
            return redirect('properties/myProperties')->with('message', 'Property Deleted!');
        }
    }

    public function delete($id)
    {
        $property = Property::findOrFail($id);

        $this->deleteImages($property->id);

        $property->delete();
    }

    public function deleteImages($id)
    {
        $imags = PropertyImage::where('propertyId', '=', $id);
        $images = $imags->get();
        foreach ($images as $image) {
            Storage::delete('public/properties_image/' . $image->url);
            $path = public_path() . '\storage\properties_images\\' . $image->url;
            unlink($path);
        }
        $imags->delete();
    }

    public function buyIndex(Request $request)
    {

        $category = Category::where('title', '=', 'Buy')->first();
        $properties = Property::where('categoryId', '=', $category->id)->where('accepted', '=', 1);
        if (isset($request->sort) && $request->sort != -1) {
            switch ($request->sort) {
                case 'priceHighToLow':
                    $properties = $properties->orderBy('price', 'Desc');
                    break;

                case 'updated_at':
                    $properties = $properties->orderBy('updated_at', 'Desc');
                    break;
                case 'priceLowToHigh':
                    $properties = $properties->orderBy('price');
                    break;
            }
        }
        $properties = $properties->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }


        return view("Properties.index", compact('properties'));
    }

    public function rentIndex(Request $request)
    {
//        $category = Category::where('title', '=', 'Rent')->orWhere('title', '=', 'Share')->get();
        $properties = Property::whereIn('categoryId', [2, 3])->where('accepted', '=', 1);
        if (isset($request->sort) && $request->sort != -1) {
            switch ($request->sort) {
                case 'priceHighToLow':
                    $properties = $properties->orderBy('price', 'Desc');
                    break;

                case 'updated_at':
                    $properties = $properties->orderBy('updated_at', 'Desc');
                    break;
                case 'priceLowToHigh':
                    $properties = $properties->orderBy('price');
                    break;
            }
        }
        $properties = $properties->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }
        return view("Properties.index", compact('properties'));
    }

    public function viewNotAcceptedProperties()
    {
        if (Auth::user()->role == 0) {
            $notAcceptedProperties = Property::where('accepted', '=', 0)->get();
            foreach ($notAcceptedProperties as $property) {
                $property->images = PropertyImage::where('propertyId', $property->id)->get();
                $property->agent = User::find($property->userId);
            }
            return view("AdminPages.acceptProperties", compact('notAcceptedProperties'));
        }
    }

    public function allAcceptedProperties()
    {
        $properties = Property::where('accepted', '=', 1)->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
            $property->agent = User::find($property->userId);
        }
        return view('AdminPages.allProperties', compact('properties'));
    }

    public function myProperties()
    {

        $properties = Property::where('userId', '=', Auth::id())->get();
        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }
        return view("Properties.myProperties", compact('properties'));
    }

}
