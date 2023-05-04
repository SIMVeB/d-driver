<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

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
        return view('owners.index', compact('owners'));
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
        $this->validate($request,
        [
        'name'=> 'required|string',
        'gender'=> 'required|boolean',
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

        ]);

        $owner = Owner::create($request);

        return redirect()->route('owners.index')->with('success', 'Owners enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return view('owners.detail', compact('owner', ));
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
    public function update(Request $request, Owner $owner)
    {
        $this->validate($request,[
        'name'=> 'required|string',
        'gender'=> 'required|boolean',
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
        ]);


        $owner->update($request);

        return redirect()->route('owners.index')->with('success', 'Owners enregistrée avec succès');
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
