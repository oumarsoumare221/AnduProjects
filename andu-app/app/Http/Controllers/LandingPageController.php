<?php

namespace App\Http\Controllers;

use App\Models\DynamicContent;
use App\Models\AboutUs; // Ajout du modèle AboutUs
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // Méthode existante pour récupérer DynamicContent
    public function index()
    {
        $dynamicContents = DynamicContent::all();

        return view('landing', [
            'dynamicContents' => $dynamicContents,
        ]);
    }
    public function aboutUs()
    {
        $about = AboutUs::first(); // Récupère le premier enregistrement de la table AboutUs

        // Ajoutez ceci pour déboguer
        dd($about);

        return view('landing', compact('about'));
    }

}
