<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Alert;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('layouts.faqs-list', compact('faqs'));
    }


    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function home()
    {
        $faqs = Faq::all();
        return view('layouts.index', compact('faqs'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
        'quiz'=> 'required|string',
        'answer'=> 'required|string',
        ]);


        try {
            $faq = Faq::create($data);
            $faqs = Faq::all();
            toast("Question enrégistrée avec succès", 'success');
            return redirect()->route('faqs')->with(["faq"=>$faqs])->with("success", "FAQ sauvégarder avec succès");
        } catch (\Throwable $th) {
            toast("Une erreur s'est produite", 'error');
            redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($param)
    {
        $faq = Faq::find($param);
        return view('layouts.faq', compact('faq'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Faq $faq)
    {
        $data = $request->validate([
            'quiz'=> 'string',
            'answer'=> 'string',
            ]);
        try {
            $faq->quiz =$data['quiz'];
            $faq->answer =$data['answer'];
            $faq->save();
            $faqs = Faq::all();
            toast("Question mise à jour avec succès", 'success');
            return redirect()->route('faqs')->with(["faq"=>$faqs]);
        } catch (\Throwable $th) {
            toast("Une erreur s'est produite", 'error');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        toast("Question supprimée avec succès", 'success');
        return redirect()->back();
    }
}
