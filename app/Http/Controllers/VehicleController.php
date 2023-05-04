<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'genre'=> 'required|string',
        'manufacturer'=> 'required|string',
        'chassis'=> 'required|string',
        'bodywork'=> 'required|string',
        'serialNumber'=> 'required|string',
        'bodyworkNumber'=> 'required|string',
        'energy'=> 'required|string',
        'sitePlace'=> 'required|integer',
        'vin'=> 'required|string',
        'type'=> 'required|string',
        'usageState'=> 'required|string',
        'power'=> 'required|string',
        'registrationDate'=> 'required|date',
        'circulationDate'=> 'required|date',
        'firstUseDate'=> 'required|date',
        'glassType'=> 'required|string',
        'frontShape'=> 'required|string',
        'backShape'=> 'required|string',
        ]);

        $vehicle = Vehicle::create($request);

        return redirect()->route('vehicles.index')->with('success', 'Vehicles enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.detail', compact('vehicle', ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $this->validate($request,[
        'genre'=> 'required|string',
        'manufacturer'=> 'required|string',
        'chassis'=> 'required|string',
        'bodywork'=> 'required|string',
        'serialNumber'=> 'required|string',
        'bodyworkNumber'=> 'required|string',
        'energy'=> 'required|string',
        'sitePlace'=> 'required|integer',
        'vin'=> 'required|string',
        'usageState'=> 'required|string',
        'power'=> 'required|string',
        'registrationDate'=> 'required|date',
        'firstUseDate'=> 'required|date',
        'circulationDate'=> 'required|date',
        'glassType'=> 'required|string',
        'frontShape'=> 'required|string',
        'backShape'=> 'required|string',
        ]);

        $vehicle = Vehicle::find($id);

        $vehicle->update($request);
        return redirect()->route('vehicles.index')->with('success', 'Vehicles enregistrée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle supprimée avec succès');
    }
}
