<?php

namespace App\Http\Controllers;

use App\Parametre;
use Illuminate\Http\Request;

class AdminParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametres = Parametre::All();
        return view('backend.parametre.index',compact('parametres'))->with('i', (request()->input('page', 1) - 1) * 5); //
    }
     public function listimpact()
    {
        $parametres = Parametre::All();
        return view('backend.parametre.index',compact('parametres'))->with('i', (request()->input('page', 1) - 1) * 5); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       return view('backend.parametre.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);
       
        Parametre::create($request->All());
        return redirect()->route('parametre.index')
                          ->with('success','Parametre created successfully.'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function show(Parametre $parametre)
    {
       return view('backend.parametre.show', compact('parametre'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function edit(Parametre $parametre)
    {//
        return view('backend.parametre.edit', compact('parametre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parametre $parametre)
    {
       
         $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);
        $parametre->update($request->All());
        return redirect()->route('parametre.index')
                          ->with('success','Parametre created successfully.'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parametre $parametre)
    {
       $parametre->Delete();

       return redirect()->route('parametre.index')->with('success', 'Parametre supprimé avec succès'); //
    }
}
