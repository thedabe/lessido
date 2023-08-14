<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\lessidos;
use App\Models\commande;


class clientcontroller extends Controller
{
    public function commander_ajouter(Request $request){
      $request->validate([
        'prenom'=> 'required',
        'poids'=> 'required',
        'lieu'=> 'required',
        'contact_client'=> 'required',
      ]);
      $elementRecherche = 'contact_client';
      $elementTrouve = client::where('contact_client', $elementRecherche)->exists();
      if( $elementTrouve){
      $commande = new commande();
      $commande->poids = $request->poids;
      $commande->contact_client = $request->contact_client;
      $commande->lieu = $request->lieu;  
      $commande->save();
      return redirect('dashboardclient')->with('status1','commande effectuer. Bienvenue sur votre compte');
      }
      else{
        $clients = new client();
      $clients->prenom_client = $request->prenom;
      $clients->contact_client = $request->contact_client;
      $clients->save();

      $commande = new commande();
      $commande->poids = $request->poids;
      $commande->contact_client = $request->contact_client; 
      $commande->lieu = $request->lieu; 
      $commande->save();
      return redirect('dashboardclient')->with('status1','commande effectuer. Bienvenue sur votre compte');
      
      }
      
    }

    public function candidater(Request $request){
        $request->validate([
          'nom_lessidos'=> 'required',
          'prenom_lessidos'=> 'required',
          'datenaissance'=> 'required',
          'lieu_habitation'=> 'required',
          'contact_lessidos'=> 'required',
          'pieceIDrecto'=> 'required|file',
          'pieceIDverso'=> 'required|file',
        ]);
        if ($request->hasFile('pieceIDrecto') && $request->hasFile('pieceIDverso')) {
          $imagePath1 = $request->file('pieceIDrecto')->store('images', 'public');
          $imagePath2 = $request->file('pieceIDverso')->store('images', 'public');

        $lessidos = new lessidos();
        $lessidos->prenom_lessidos = $request->prenom_lessidos;
        $lessidos->nom_lessidos = $request->nom_lessidos;
        $lessidos->lieu_habitation = $request->lieu_habitation;
        $lessidos->contact_lessidos = $request->contact_lessidos;
        $lessidos->datenaissance = $request->datenaissance;
        $lessidos->image_path_1 = $imagePath1;
        $lessidos->image_path_2 = $imagePath2;
        $lessidos->save();
        }
        return redirect('index')->with('status2','veuillez patienté le temps d\analyser votre dossier.');
        
      }
}
