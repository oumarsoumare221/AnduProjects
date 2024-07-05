<?php

// app/Http/Controllers/CaseStudyController.php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = CaseStudy::all();
        return view('case-studies.index', compact('caseStudies'));
    }
 }
// @extends('layouts.app')

// @section('content')
// <div class="Casestudy" id="cases">
//     <div class="CasTitle">Études de cas</div>
//     @foreach($caseStudies as $caseStudy)
//     <div class="case-study-item">
//         <img class="ImgCompany" src="{{ asset('storage/' . $caseStudy->image) }}" alt="Image de l'étude de cas">
//         <div class="CasTextContainer">
//             <h4>{{ $caseStudy->title }}</h4>
//             <p>{{ $caseStudy->description }}</p>
//         </div>
//         <div class="infoGrid">
//             <!-- Utiliser les détails de l'étude de cas pour remplir ces sections -->
//             <div class="one">
//                 <h1>+5</h1>
//                 <p>modules de formation ont été intégrés dans un système de gestion de l'apprentissage (LMS) par ANDU, où ils ont mis l'accent sur l'importance des Soft Skills pour réussir professionnellement, trouver un emploi et s'intégrer durablement dans le milieu du travail.</p>
//             </div>
//             <div class="two">
//                 <h1>+5</h1>
//                 <p>Années d`expériences</p>
//             </div>
//             <div class="three">
//                 <h1>+100</h1>
//                 <p>de utilisateurs qui ont utilisé LMS</p>
//             </div>
//             <div class="four">
//                 <p>Avec Defaru, l'un des défis rencontrés a été la standardisation du SCORM. Cela a impliqué de s'assurer que le contenu éducatif était compatible avec divers systèmes de gestion de l'apprentissage (LMS), permettant une interopérabilité et un suivi cohérent des progrès des apprenants.</p>
//             </div>
//         </div>
//     </div>
//     @endforeach
// // </div>
// @endsection