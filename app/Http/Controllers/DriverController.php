<?php

namespace App\Http\Controllers;

use App\Models\Driver;
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
        return view('drivers.index', compact('drivers'));
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
        $this->validate($request,
        [
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

        $driver = Driver::create($request);

        return redirect()->route('drivers.index')->with('success', 'Drivers enregistrée avec succès');
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
        $this->validate($request,[
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
