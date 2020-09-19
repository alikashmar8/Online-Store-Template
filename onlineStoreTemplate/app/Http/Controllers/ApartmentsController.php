<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\ApartmentImage;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\Part\Multipart\AlternativePart;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::guest()) {
            if (Auth::user()->role == 0) {
                $notAcceptedApartments = Apartment::where('accepted', '=', 0)->get();
                $recentUsers = User::where('created_at', '>=', new DateTime('today'))->get();
                return view("welcome", compact('notAcceptedApartments', 'recentUsers'));
            }
        }
        return view('welcome');
    }

    public function buyIndex()
    {
        $apartments = Apartment::all()->where('categoryId', '=', 0);
        foreach ($apartments as $apartment) {
            $apartment->images = ApartmentImage::where('apartmentId', $apartment->id)->get();
        }
        return view("Apartments.index", compact('apartments'));
    }

    public function rentIndex()
    {
        $apartments = Apartment::where('categoryId', '=', 1);
        foreach ($apartments as $apartment) {
            $apartment->images = ApartmentImage::where('apartmentId', $apartment->id)->get();
        }
        return view("Apartments.index", compact('apartments'));
    }
    public function viewNotAcceptedApartments(){
        if (Auth::user()->role == 0) {
            $notAcceptedApartments = Apartment::where('accepted', '=', 0)->get();
            return view("AdminPages.acceptApartments", compact('notAcceptedApartments'));
        }
    }
    public function allAcceptedApartments(){
        $apartments = Apartment::where('accepted', '=', 1)->get();
        return view('AdminPages.allApartments',compact('apartments'));
    }

/* @param int $id */
    public function accept($id){
       $apartment =  Apartment::find($id);
       $apartment->accepted = 1;
       $apartment->save();
       return redirect('/acceptApartments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Apartments.create');
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
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'type' => 'required',
            'location' => 'required'
        ]);
        $apartment = new Apartment;
        $apartment->title = $request->title;
        $apartment->description = $request->description;
        $apartment->price = $request->price;
        $apartment->accepted = 0;
        $apartment->userId = Auth::user()->id;
        $apartment->categoryId = $request->type;
        $apartment->location = $request->location;

        $apartment->save();
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
                $path = $image->storeAs('public/cover_images', $fileNameToStore);

                $image = new ApartmentImage;
                $image->apartmentId = $apartment->id;
                $image->url = $fileNameToStore;
                $image->save();
            }
        }
        return redirect('/apartments');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartment = Apartment::find($id);
        $apartment->agent = User::find($apartment->userId);
        $apartment->images = ApartmentImage::where('apartmentId', $apartment->id)->get();

        return view("Apartments.show")->with('apartment', $apartment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $category = Apartment::find($id);
        $category->delete();
        return redirect('/acceptApartments');
    }
}
