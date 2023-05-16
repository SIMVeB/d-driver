<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Alert;
use Session;



class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::sortable()->paginate(3);
        return view('layouts.vehicle-list', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=    $request->validate([
        'genre'=> 'required|string',
        'manufacturer'=> 'required|string',
        'chassis'=> 'required|string',
        'bodywork'=> 'required|string',
        'serialNumber'=> 'required|string',
        'bodyworkColor'=> 'required|string',
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
        'airConditioner'=> 'required|string',
        ]);

        $vehicle = Vehicle::create($data);
        Session::put('vehicle', $vehicle);
        toast('Véhicule enrégistré avec succès','success');
        return redirect()->route('owner')->with(['vehicle' => $vehicle]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $vehicle = Vehicle::find($id);
        return view('layouts.vehicle-info', compact('vehicle', ));
    }


    /**
    * Display the specified resource.
    *
    * @param \App\Models\Vehicle $vehicle
    * @return \Illuminate\Http\Response
    */
    public function back( $id)
    {
        $vehicle = Vehicle::find($id);
        return view('layouts.register', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
                $vehicle = Vehicle::find($id);

        return view('layouts.vehicle-info', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data= $request->validate([
        'genre'=> 'required|string',
        'manufacturer'=> 'required|string',
        'chassis'=> 'required|string',
        'bodywork'=> 'required|string',
        'serialNumber'=> 'required|string',
        'bodyworkColor'=> 'required|string',
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
        'airConditioner'=> 'required|string',
        ]);

        $vehicle = Vehicle::find($id);
        $vehicle->update($data);

        toast('Véhicule mise à jour avec succès','success');
        $result = ['vehicle' => $vehicle];

        if($vehicle->owner){
            $result["owner"]= $vehicle->owner;
        }
        Session::put('vehicle', $vehicle);
        return redirect()->route('owner')->with($result);
    }

    public function modify(Request $request, $id)
    {
        $data= $request->validate([
        'genre'=> 'required|string',
        'manufacturer'=> 'required|string',
        'chassis'=> 'required|string',
        'bodywork'=> 'required|string',
        'serialNumber'=> 'required|string',
        'bodyworkColor'=> 'required|string',
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
        'airConditioner'=> 'required|string',
        ]);

        $vehicle = Vehicle::find($id);
        $vehicle->update($data);

        toast('Véhicule mise à jour avec succès','success');

        return redirect()->back();
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
