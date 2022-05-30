<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Entreprise::latest()->paginate(5);

        return view('entreprises.index',compact('entreprises'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.create');
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


        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'password' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'description' => 'required',
            'doamine' => 'required',


        ]);

        Entreprise::create($request->all());

        return redirect()->route('entreprises.index')
                        ->with('success','entreprise cré avex succés !!.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show',compact('entreprise'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit',compact('entreprise'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'password' => 'required',
            'contact' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'description' => 'required',
            'doamine' => 'required',
            'partenariat' => 'required',
        ]);

        $entreprise->update($request->all());

        return redirect()->route('entreprises.index')
                        ->with('success','entreprise modifiée avec succés !!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();

        return redirect()->route('entreprises.index')
                        ->with('success','entreprise supprimée avec succés !!');
        //
    }
}
