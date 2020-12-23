<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Histories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    public function propertiesIndex()
    {
        $properties = History::whereNotNull('propertyId')->distinct()->select('propertyId')->get();
//            History::->distinct()->select('propertyId','post_description')->get();
        return view('Histories.propertiesIndex', compact('properties'));
    }

    public function commercialsIndex()
    {
        $commercials = History::where('commercialId', '!=', null)->groupBy('commercialId')->get();
        return view('Histories.commercialsIndex', compact('commercials'));
    }

    public function usersIndex()
    {
        $users = History::where('userId', '!=', null)->groupBy('userId')->get();
        return view('Histories.usersIndex', compact('users'));
    }

    public function propertyShow($id)
    {
        $properties = History::where('propertyId', '=', $id)->orderBy('created_at')->get();
        $type = "property";
        return view("Histories.show", compact('properties', 'type'));
    }


}
