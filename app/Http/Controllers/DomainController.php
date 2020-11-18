<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains = Domain::All();//->paginate(5);
        //dump($domains);die();

        return view('backend.domain.index',compact('domains'))
            ->with('i', (request()->input('page', 1) - 1) * 5);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.domain.create'); //
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
        ]);

        Domain::create($request->all());

        return redirect()->route('domains.index')
                        ->with('success','Domain created successfully.');//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        return view('backend.domain.show',compact('domain')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit(Domain $domain)
    {
         return view('backend.domain.edit',compact('domain'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domain $domain)
    {
       $request->validate([
            'libelle' => 'required',
            'description' => 'required',
        ]);

        $domain->update($request->all());

        return redirect()->route('domains.index')
                        ->with('success','Domain updated successfully'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domain $domain)
    {
         $domain->delete();

        return redirect()->route('domains.index')
                        ->with('success','domains deleted successfully');//
    }
}
