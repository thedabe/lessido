<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\lessidos;
use App\Models\commande;
use Illuminate\Support\Facades\Auth;

class authcontroller extends Controller
{
    public function passwordclient(Request $request)
    {
        if (Auth::check()) {
            $clients = Auth::user();

            // Maintenant vous pouvez accéder aux propriétés de l'utilisateur
            $contact = $clients->contact_client;
            $request->validate([
                'password' => 'required|min:8|confirmed',
                'repass' => 'required|min:8|confirmed',
            ]);
            $nouveaucode = $request->input('password'); // Utiliser la valeur du champ password
            $confirmcode = $request->input('repass');   // Utiliser la valeur du champ repass
            if ($nouveaucode == $confirmcode) {
                Client::where('contact_client', $contact)->update(['code' => bcrypt($nouveaucode)]);
                return redirect('dashboardclient')->with('status3', 'Retenez bien ce code pour vous connecter.');
            } else {
                return redirect('passconnexion')->with('status4', 'mot de passe différent.');
            }
        } else {
            return view('pageconnexion');
        }
    }
}
