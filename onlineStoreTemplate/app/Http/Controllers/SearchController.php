<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchAgent(Request $request)
    {

        $searched = $request->name;
        $results = User::where('role', '=', 1)->where('name', 'like', '%' . $request->name . '%')->get();
        $type = $request->type;


        return view('searchResults', compact('searched', 'results', 'type'));

    }

    public function searchProperties(Request $request)
    {

//        dd($request);
        if ($request->type != -1) {
            $properties = Property::where('accepted', '=', 1)->where('categoryId', '=', $request->type);
        } else {
            $properties = Property::where('accepted', '=', 1);
        }
        $properties = $properties->where('price', '>', $request->minPrice)->where('price', '<', $request->maxPrice);

        if ($request->bedroomsNumber != -1) {
            $properties = $properties->where('bedroomsNumber', '=', $request->bedroomsNumber);
        }
        $properties = $properties->get();

        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }
        $searched = $request->location;
        $type = "properties";

        return view('Properties.index', compact('searched', 'properties', 'type'));
    }
}
