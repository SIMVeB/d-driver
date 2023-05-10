<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Vehicle;

use Illuminate\Http\Request;
use Session;



class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view('layouts.owner-list', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owners.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'name'=> 'required|string',
            'gender'=> 'required|string',
            'birthDate'=> 'required|date',
            'birthPlace'=> 'required|string',
            'profession'=> 'required|string',
            'personality'=> 'required|string',
            'email'=> 'required|email',
            'phoneNumber'=> 'required|string',
            'passport'=> 'required|string',
            'zip'=> 'required|string',
            'nif'=> 'required|string',
            'address'=> 'required|string',
            'village'=> 'required|string',
            'commune'=> 'required|string',
            'region'=> 'required|string',
            'district'=> 'required|string',
            'vehicle_id'=> 'required|numeric|min:1'

        ]);

        $vehicle = Vehicle::find($data["vehicle_id"]);

        $owner = Owner::create($data);

        $vehicle->owner_id = $owner->id ;
        $vehicle->save();

        Session::forget('vehicle');
        Session::forget('owner');

        toast('Propriétaire enrégistré avec succès','success');
        return redirect()->route('driver')->with(['vehicle' => $vehicle, 'owner' => $owner]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $owner = Owner::find($id);
        $vehicles= Vehicle::where("owner_id", $owner->id)->get();

        return view('layouts.owner-info', compact('owner', 'vehicles'));

    }


    /**
    * Display the specified resource.
    *
    * @param \App\Models\Owner $owner
    * @return \Illuminate\Http\Response
    */
    public function back( $id)
    {
        $owner = Owner::find($id);
        $vehicle = Session::get('vehicle');
        dd($vehicle);
        return view('layouts.owner', compact('owner', 'vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('owners.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= $request->validate([
        'name'=> 'required|string',
        'gender'=> 'required|string',
        'birthDate'=> 'required|date',
        'birthPlace'=> 'required|string',
        'profession'=> 'required|string',
        'personality'=> 'required|string',
        'email'=> 'required|email',
        'phoneNumber'=> 'required|string',
        'passport'=> 'required|string',
        'zip'=> 'required|string',
        'nif'=> 'required|string',
        'address'=> 'required|string',
        'village'=> 'required|string',
        'commune'=> 'required|string',
        'region'=> 'required|string',
        'district'=> 'required|string',
        'vehicle_id'=> 'required|numeric|min:1'
        ]);


        $owner = Owner::find($id);

        $owner->update($data);

        $vehicle =  Session::get('vehicle');
        Session::put('owner', $owner);

        toast('Propriétaire mise à jour avec succès','success');
        return redirect()->route('owner')->with(['vehicle' => $vehicle, 'owner' => $owner]);

    }

    public function modify(Request $request, $id)
    {
    $data= $request->validate([
    'name'=> 'required|string',
    'gender'=> 'required|string',
    'birthDate'=> 'required|date',
    'birthPlace'=> 'required|string',
    'profession'=> 'required|string',
    'personality'=> 'required|string',
    'email'=> 'required|email',
    'phoneNumber'=> 'required|string',
    'passport'=> 'required|string',
    'zip'=> 'required|string',
    'nif'=> 'required|string',
    'address'=> 'required|string',
    'village'=> 'required|string',
    'commune'=> 'required|string',
    'region'=> 'required|string',
    'district'=> 'required|string'
    ]);


    $owner = Owner::find($id);

    $owner->update($data);

    toast('Propriétaire mise à jour avec succès','success');
    return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return redirect()->route('owners.index')->with('success', 'Owner supprimée avec succès');
    }
}
