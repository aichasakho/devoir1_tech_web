<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index()
    {
        $afficher = Apprenant::all();
        return view('apprenants',compact('afficher'));
    }
    public function ajouter_etudiant()
    {
        return view('ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
        ]);

        $apprenant = new Apprenant();
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->save();

        return redirect('/ajouter')->with('status','L\'apprenant a été ajouté avec succès.');

    }
    public function modifier_apprenant($id) {
        $changer = Apprenant::find($id);

        return view('modifier',compact('changer'));
    }
    public function modifier_apprenant_traitement(Request $request){
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
        ]);

        
        $apprenant = Apprenant::find($request->id);
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->update();

        return redirect('/apprenants')->with('status','L\'apprenant a été modifié avec succès.');

    }
    public function supprimer_apprenant($id){
        $enlever = Apprenant::find($id);
        $enlever-> delete();
        
        return redirect('/apprenants')->with('status','L\'apprenant a bien été supprimé.');
    }




}