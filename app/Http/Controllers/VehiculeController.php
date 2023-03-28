<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Vehicule;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreVehiculeRequest;
use App\Http\Requests\UpdateVehiculeRequest;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicules = Vehicule::all();

        return view('dashboard.vehicules.index', [
            'vehicules' => $vehicules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.vehicules.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculeRequest $request)
    {
        $vehicule = new Vehicule();
        $vehicule->nom = $request->name;
        $vehicule->marque = $request->marque;
        $vehicule->description = $request->description;
        $vehicule->prix = $request->prix;
        $name = $vehicule->nom . '_image.' . $request->image->extension();
        $vehicule->image = $request->image->storeAs('vehicule', $name, 'public');
        $vehicule->save();
        Alert::toast('Le véhicule a été enrégistré', 'success');
        return redirect()->route('vehicules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicule $vehicule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicule $vehicule)
    {
        return view('dashboard.vehicules.edit', [
            'vehicule' => $vehicule
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculeRequest $request, Vehicule $vehicule)
    {
        $vehicule->nom = $request->name;
        $vehicule->marque = $request->marque;
        $vehicule->description = $request->description;
        $vehicule->prix = $request->prix;
        if($request->image) {
            $name = $vehicule->nom . '_image.' . $request->image->extension();
            $vehicule->image = $request->image->storeAs('vehicule', $name, 'public');
        }
        $vehicule->save();
        Alert::toast('Le véhicule a été modifié', 'success');
        return redirect()->route('vehicules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicule $vehicule)
    {
        try {
            $vehicule->delete();
                Alert::toast("Suppression effectuée", 'success');
                return redirect()->route('vehicules.index');
        }
        catch (Exception $e) {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back();
        }
    }
}
