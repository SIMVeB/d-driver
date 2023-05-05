<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('layouts.drivers-list', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
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
            'email'=> 'required|email',
            'phoneNumber'=> 'required|string',
            'passport'=> 'required|string',
            'zip'=> 'required|string',
            'nif'=> 'required|string',
            'address'=> 'required|string',
            'district'=> 'required|string',
            'village'=> 'required|string',
            'commune'=> 'required|string',
            'region'=> 'required|string',
            'permis'=> 'required|string',
            'vehicle_id'=> 'required|numeric|min:1',
            'owner_id'=> 'required|numeric|min:1'


        ]);

        $vehicle = Vehicle::find($data["vehicle_id"]);

        $driver = Driver::create($data);

        $vehicle->driver_id = $driver->id ;

        $vehicle->save();

        Alert::success('Succès', "Conducteur du véhicule enrégistré avec succès")->autoClose(2000);


        return redirect()->route('home')->with('success', 'Les informations sont enrégistrées avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('drivers.detail', compact('driver', ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $data= $request->validate([
        'name'=> 'required|string',
        'gender'=> 'required|boolean',
        'birthDate'=> 'required|date',
        'birthPlace'=> 'required|string',
        'email'=> 'required|email',
        'phoneNumber'=> 'required|string',
        'passport'=> 'required|string',
        'zip'=> 'required|string',
        'nif'=> 'required|string',
        'address'=> 'required|string',
        'district'=> 'required|string',
        'village'=> 'required|string',
        'commune'=> 'required|string',
        'region'=> 'required|string',
        'permis'=> 'required|string',

        ]);

        $vehicle = Vehicle::find($data["vehicle_id"]);

        $owner = Owner::create($data);

        $vehicle->owner_id = $owner->id ;

        $vehicle->save();

        $driver = Driver::find($id);

        $driver->update($request);

        return redirect()->route('drivers.index')->with('success', 'Drivers enregistrée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('drivers.index')->with('success', 'Driver supprimée avec succès');
    }
}
