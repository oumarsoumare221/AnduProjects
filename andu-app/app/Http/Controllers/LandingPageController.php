<?php

namespace App\Http\Controllers;

use App\Models\DynamicContent;
use App\Models\AboutUs;
use App\Models\History;
use App\Models\BufferTimeline;
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
        $about = AboutUs::first();

        // Ajoutez ceci pour déboguer
        // dd($about);

        return view('landing', compact('about'));
    }

    // Nouvelle méthode pour gérer l'affichage des données historiques
    public function historys()
    {
        $bufferTimelines = BufferTimeline::orderBy('year')->get();
        $histories = History::with('bufferTimeline')->get();

        return view('landing', compact('bufferTimelines', 'histories'));
    }

   
}
