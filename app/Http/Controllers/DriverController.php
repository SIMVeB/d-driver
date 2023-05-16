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
        $drivers = Driver::sortable()->paginate(3);
        return view('layouts.drivers-list', compact('drivers'));
    }


    public function indexFiltering(Request $request)
    {
        $filter = $request->query('filter');


        if (!empty($filter)) {
            $drivers = Driver::sortable()
            ->where('name', 'like', '%'.$filter.'%')
            ->orWhere('birthDate', 'like', '%'.$filter.'%')
            ->orWhere('birthPlace', 'like', '%'.$filter.'%')
            ->orWhere('phoneNumber', 'like', '%'.$filter.'%')
            ->orWhere('permis', 'like', '%'.$filter.'%')
            ->orWhere('created_at', 'like', '%'.$filter.'%')
            ->paginate(3);
        } else {
            $drivers = Driver::sortable()->paginate(3);
        }

        return view('layouts.drivers-list', compact('drivers', 'filter'));
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

        toast( "Conducteur du véhicule enrégistré avec succès", 'success');


        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $driver = Driver::find($id);
        $vehicles= Vehicle::where("driver_id", $driver->id)->get();

        return view('layouts.driver-info', compact('driver', 'vehicles'));

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
    public function update(Request $request, $id)
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
        'permis'=> 'required|string'
        ]);

        $driver = Driver::find($id);

        $driver->update($data);
                toast( "Conducteur mise à jour avec succès", 'success');

        return redirect()->back();
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
