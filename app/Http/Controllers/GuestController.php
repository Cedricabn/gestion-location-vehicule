<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Location;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class GuestController extends Controller
{
    //
    public function welcome() {
        return view('guest.index');
    }

    public function contact() {
        return view('guest.contact');
    }

    public function cars() {
        return view('guest.cars', [
            'vehicules' => Vehicule::paginate(12)
        ]);
    }

    public function reservation($name){
        $vehicule = Vehicule::firstWhere('nom', $name);
        return view('guest.reservation.reservation', [
            'vehicule' => $vehicule,
            'nom_client'=> Auth::user()->name
        ]);
    }

    public function sendReservation(Request $request)
    {

        $location = new Location();
        $vehicule_id = Vehicule::firstWhere('nom', $request->nom_vehicule)->id;
        $client_id = User::firstWhere('name', $request->nom_client)->id;

        $location->vehicule_id = $vehicule_id;
        $location->user_id = $client_id;
        $location->dateDebut = $request->date_debut;
        $location->dateFin = $request->date_fin;
        $location->save();
        Alert::success('Demande effectuée', 'Votre demande a été soumis aux administrateurs');
        return redirect()->route('welcome');
        // return redirect()->route('client.location');
    }

    public function userLocations(){
        $locations = Location::where('user_id', Auth::id())->get();
        return view('guest.locations', ['locations' => $locations]);
    }


    public function test() {
        dd('Okkkkk 1');
    }
}
