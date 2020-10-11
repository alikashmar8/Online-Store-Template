<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Http\Request;
use function Sodium\add;

class SearchController extends Controller
{
    public function searchAgent(Request $request)
    {
        $searched = $request->name;
        $searchBy = $request->searchBy;
        $results = [];
        if ($searchBy == 'name') {
            $results = User::where('role', '=', 1)->where('name', 'like', '%' . $searched . '%')->get();
        }
        if ($searchBy == 'companyName') {
            $companies = Company::where('name', 'like', '%' . $searched . '%')->get();
            foreach ($companies as $company) {
                $user = User::findOrFail($company->AgentId);
                $user->company = $company;
                $results[$user->id] = $user;
            }
        }

//        if ($type == 'location'){
//
//        }
        $type = $request->type;


        return view('searchResults', compact('searched', 'results', 'type'));

    }

    public function searchProperties(Request $request)
    {
//        dd($request);
        $properties = Property::where('accepted', '=', 1);
        if ($request->type != -1) {
            $properties = $properties->where('typeId', '=', $request->type);
        }
        if ($request->category != -1) {
            $properties = $properties->where('categoryId', '=', $request->category);
        }
        $minPrice = $request->minPrice;
        $maxPrice = $request->maxPrice;
        $properties = $properties->where('price', '>', $request->minPrice)->where('price', '<', $request->maxPrice);

        $bedroomsNumber = -1;
        if ($request->bedroomsNumber != -1) {
            $bedroomsNumber = $request->bedroomsNumber;
            $properties = $properties->where('bedroomsNumber', '=', $request->bedroomsNumber);
        }
        $properties = $properties->get();

        foreach ($properties as $property) {
            $property->images = PropertyImage::where('propertyId', $property->id)->get();
        }
        $searched = $request->location;
        $type = "properties";
        $categories = Category::all();
        $types = PropertyType::all();
        $category = $request->category;


        return view('Properties.index', compact('searched', 'properties', 'type', 'categories', 'minPrice', 'maxPrice', 'bedroomsNumber', 'types', 'category'));
    }
}
