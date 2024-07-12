<?php

namespace App\Http\Controllers;

use App\Models\DynamicContent;
use App\Models\AboutUs;
use App\Models\History;
use App\Models\History2;
use App\Models\History3;
use App\Models\Tarif;
use App\Models\BufferTimeline;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // Méthode existante pour récupérer DynamicContent
    public function index()
    {
        $dynamicContents = DynamicContent::all();
        $bufferTimelines = BufferTimeline::orderBy('year')->get();
        $histories = History::with('bufferTimeline')->get();
        $histories = History::with('bufferTimeline')->get();
        $tarifs = Tarif::all();
        $about = AboutUs::first();
        $histories2 = History2::with('bufferTimeline')->get();
        $histories3 = History3::with('bufferTimeline')->get();
        
        return view('landing', [
            'dynamicContents' => $dynamicContents,
            'histories' => $histories,
            'histories2' => $histories2,
            'histories3' => $histories3,
            'bufferTimelines' => $bufferTimelines,
            'tarifs' => $tarifs,
            'about' => $about
            
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
        $tarifs = Tarif::all();
        $histories = History::with('bufferTimeline')->get();
        $histories2 = History2::with('bufferTimeline')->get();
        $histories3 = History3::with('bufferTimeline')->get();

        return view('landing', 
        compact('bufferTimelines', 'histories'),
        compact('bufferTimelines', 'histories2'),
        compact('bufferTimelines', 'histories3'));
    }

   
}
