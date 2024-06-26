<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validation des données reçues du formulaire
        $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);

        // Logique d'inscription à la newsletter (par exemple, enregistrement en base de données)
        Newsletter::create([
            'email' => $request->email,
            // Autres champs éventuels
        ]);

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Vous avez été inscrit à notre newsletter avec succès!');
    }
}
