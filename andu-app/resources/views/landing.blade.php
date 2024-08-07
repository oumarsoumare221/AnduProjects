<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDU - Landing Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <!-- Inclure la bibliothèque Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style>
        /* Ajouter des styles si nécessaire */
        #animated-text {
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body class="bg">

    <div id="sidebar">
        <div class="greenblock">
            <button id="btn" class="close close-sidebar" type="button" onClick="toggle();">
            </button>
        </div>
        <br>

        <div class="sidebar-links">
            <a href="http://127.0.0.1:8000/"  id="btn" onClick="toggle();"> Home</a>
            <a href="#about" id="btn" onClick="toggle();">Qui Sommes-Nous</a>
            <a href="#products" id="btn" onClick="toggle();">Nos Produits</a>
            <a href="#cases">Études de cas</a>
            <a href="#pricing">Tarifs</a>
        </div>
    </div>
    <div class="NavBarContainer">
        <img id="AnduLogo" class = "img-responsive" src="{{ asset('../logoAndu.jpg') }}" alt="ANDU Logo" sizes="(max-width: 600px) 480px,
            800px">

        <div class="NavLinks">
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="#about">Qui Sommes-Nous</a>
            <a href="#products">Nos Produits</a>
            <a href="#cases">Études de cas</a>
            <a href="#pricing">Tarifs</a>
        </div>
        <div class="button-Rendez">
            <p>Prenez rendez-vous</p>
        </div>
        <button id="btn" class="toggleSidebar" type="button" onClick="toggle();">
        <svg width="24" height="24" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H24V2.66667H0V0ZM0 6.66667H24V9.33333H0V6.66667ZM0 13.3333H24V16H0V13.3333Z" fill="#353840" />
        </svg>
        </button>
    </div>
    
    <main class="w-100 d-flex flex-column ">
    <div class="hero">
        <div 
        data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1500"
     
     class="ImagesContainer">
            <img id="heroImg" src="{{ asset('../apprendImage.jpg') }}" alt="Apprentissage en ligne">

            <img id="Rocket" src="{{ asset('../5143537-removebg-preview 1.png') }}" alt="Rocket">
        </div>

        <div class="Circle"><svg width="301" height="301" viewBox="0 0 301 301" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M119.821 297.582C118.801 297.367 117.781 297.141 116.763 296.904L24.9823 232.639C24.4117 231.763 23.8508 230.882 23.2997 229.997L119.821 297.582Z" fill="black" />
                <path d="M145.168 300.691C144.424 300.663 143.681 300.63 142.937 300.592L12.5652 209.305C12.2746 208.619 11.9893 207.931 11.7091 207.242L145.168 300.691Z" fill="black" />
                <path d="M165.218 300.091C164.602 300.15 163.985 300.206 163.367 300.258L5.89091 189.992C5.72869 189.394 5.57018 188.795 5.41538 188.195L165.218 300.091Z" fill="black" />
                <path d="M182.333 297.435C181.797 297.55 181.26 297.662 180.723 297.772L2.29195 172.833C2.21075 172.291 2.13249 171.748 2.05721 171.205L182.333 297.435Z" fill="black" />
                <path d="M197.43 293.367C196.953 293.523 196.474 293.676 195.996 293.827L0.775196 157.132C0.753151 156.63 0.733599 156.129 0.716566 155.627L197.43 293.367Z" fill="black" />
                <path d="M210.979 288.215C210.548 288.403 210.117 288.589 209.685 288.773L0.84243 142.54C0.867407 142.071 0.894601 141.602 0.924007 141.133L210.979 288.215Z" fill="black" />
                <path d="M223.255 282.172C222.864 282.387 222.472 282.601 222.079 282.812L2.20409 128.854C2.26866 128.413 2.33521 127.971 2.40377 127.53L223.255 282.172Z" fill="black" />
                <path d="M234.435 275.361C234.079 275.6 233.721 275.838 233.363 276.074L4.67684 115.946C4.77609 115.529 4.87718 115.112 4.98012 114.695L234.435 275.361Z" fill="black" />
                <path d="M244.636 267.865C244.311 268.126 243.985 268.385 243.658 268.643L8.13834 103.731C8.26896 103.335 8.4013 102.94 8.53538 102.545L244.636 267.865Z" fill="black" />
                <path d="M253.939 259.74C253.643 260.021 253.346 260.301 253.048 260.579L12.5046 92.1491C12.6643 91.7737 12.8256 91.3987 12.9886 91.0241L253.939 259.74Z" fill="black" />
                <path d="M262.401 251.025C262.132 251.326 261.862 251.625 261.591 251.922L17.7174 81.16C17.9046 80.8037 18.0933 80.4479 18.2836 80.0926L262.401 251.025Z" fill="black" />
                <path d="M270.058 241.748C269.816 242.067 269.572 242.384 269.328 242.7L23.7371 70.7359C23.9506 70.3979 24.1657 70.0605 24.3823 69.7237L270.058 241.748Z" fill="black" />
                <path d="M276.937 231.925C276.72 232.261 276.503 232.597 276.283 232.932L30.5379 60.8587C30.7777 60.5381 31.0185 60.2188 31.2605 59.9007L276.937 231.925Z" fill="black" />
                <path d="M283.035 221.556C282.845 221.911 282.654 222.265 282.461 222.618L38.1167 51.5262C38.3828 51.224 38.65 50.9231 38.9181 50.6235L283.035 221.556Z" fill="black" />
                <path d="M288.33 210.625C288.168 210.998 288.004 211.371 287.838 211.744L46.4961 42.7544C46.7896 42.4712 47.084 42.1894 47.3794 41.909L288.33 210.625Z" fill="black" />
                <path d="M292.783 199.104C292.65 199.497 292.514 199.89 292.377 200.283L55.7129 34.5689C56.0351 34.3057 56.3583 34.0441 56.6825 33.7839L292.783 199.104Z" fill="black" />
                <path d="M296.339 186.954C296.236 187.369 296.132 187.784 296.026 188.199L65.821 27.0075C66.1743 26.7659 66.5285 26.5259 66.8835 26.2876L296.339 186.954Z" fill="black" />
                <path d="M298.915 174.119C298.847 174.558 298.777 174.996 298.704 175.435L76.8985 20.1249C77.286 19.907 77.6743 19.691 78.0635 19.4767L298.915 174.119Z" fill="black" />
                <path d="M300.395 160.516C300.366 160.982 300.334 161.448 300.301 161.914L89.0586 14.0004C89.485 13.8094 89.9121 13.6206 90.3401 13.4337L300.395 160.516Z" fill="black" />
                <path d="M300.602 146.022C300.619 146.52 300.634 147.018 300.646 147.516L102.47 8.75193C102.942 8.59276 103.415 8.43598 103.889 8.28156L300.602 146.022Z" fill="black" />
                <path d="M299.262 130.444C299.336 130.982 299.408 131.52 299.476 132.058L117.395 4.56363C117.925 4.44402 118.455 4.32727 118.986 4.2134L299.262 130.444Z" fill="black" />
                <path d="M295.903 113.453C296.056 114.045 296.205 114.637 296.35 115.23L134.278 1.74558C134.885 1.67936 135.492 1.61679 136.1 1.55792L295.903 113.453Z" fill="black" />
                <path d="M289.61 94.4071C289.884 95.0817 290.153 95.7581 290.417 96.4362L153.968 0.893532C154.695 0.909715 155.423 0.931192 156.15 0.957961L289.61 94.4071Z" fill="black" />
                <path d="M278.019 71.6522C278.545 72.4978 279.062 73.348 279.571 74.2026L178.57 3.48105C179.547 3.66642 180.523 3.86168 181.497 4.06688L278.019 71.6522Z" fill="black" />
                <path d="M220.324 18.0786C225.895 21.0131 231.344 24.3304 236.636 28.0365C241.929 31.7426 246.91 35.728 251.573 39.959L220.324 18.0786Z" fill="black" />
            </svg>
        </div>
        <div data-aos="fade-zoom-in"
        data-aos-easing="ease-in"
        data-aos-duration="1500"
        data-aos-offset="0"
         class="hero-text-container">
            <div class="heroText">
                @if (!empty($dynamicContents->first()))
                <h1>{{ $dynamicContents->first()->title }}</h1>
                <h3>{{ $dynamicContents->first()->content }}</h3>
                @else
                <h1>Favoriser l'apprentissage, n'importe quand, n`importe où !</h1>
                <h3>L'un des systèmes de gestion de l'apprentissage les plus innovants, un outil facile qui enrichira et facilitera la vie des éducateurs et des étudiants, améliorant ainsi leur expérience et apportant des changements positifs.</h3>
                @endif
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const successMessage = "{{ session('success') }}";
                    const errorMessage = "{{ session('error') }}";

                    if (successMessage) {
                        swal({
                            icon: 'success',
                            title: 'Succès!',
                            text: successMessage,
                        });
                    }

                    if (errorMessage) {
                        swal({
                            icon: 'error',
                            title: 'Erreur!',
                            text: errorMessage,
                        });
                    }
                });
            </script>
            <div class="hero-button-container">

                <form action="{{ route('subscribe') }}" method="POST" class="send-email">
                    @csrf
                    <input id="email-input" name="email" type="email" placeholder="Veuillez entrer votre adresse e-mail pour vous inscrire..." required>
                    <button type="submit" id="send-email-button" class="send-email-button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3L22 12L2 21V14L16 12L2 10V3Z" fill="currentColor" />
                        </svg>
                    </button>
                </form>
                <button class="DemoButton">Voir un Demo</button>
            </div>
        </div>

    </div>


    <!-- landing.blade.php -->
    <div class="aboutus">
    <div class="aboutTitle" id="about">
    @if(isset($about))
      {{ $about->title }}
        <div 
        data-aos="fade-up"
    data-aos-duration="3000"
    class="aboutParagraph">
            {{ $about->content }}
        </div>
        @else
        <p>Aucun contenu disponible pour le moment.</p>
        @endif
    </div>
</div>
        
    {{-- <div class="historyContainer">
        <div class="HistoryLine">
            @foreach($histories as $history)
            <div class="historyPoints" data-year="{{ $history->year }}"></div>
            @endforeach
        </div>
        <table class="HistoryTable">
            <thead>
                <tr>
                    @foreach($bufferTimelines as $timeline)
                    <th class="mois">
                        <p>{{ $timeline->year }}</p>
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr class="TableInfo">
                    @foreach($histories as $history)
                    <td>
                        <strong>{{ $history->month }}</strong><br>
                        {{ $history->event }}<br>
                        <a href="#">Read more</a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div> --}}
    <div 
    data-aos="fade-up"
    data-aos-duration="3000"
    class="historyContainer">
        <div class="HistoryLine">
            <div class="historyPoints"></div>
            <div class="historyPoints"></div>
            <div class="historyPoints"></div>
            <div class="historyPoints"></div>
            <div class="historyPoints"></div>
            <div class="historyPoints"></div>
            <div class="historyPoints" style="background-color: transparent;"></div>
        </div>
        <table class="HistoryTable">
            <thead>
                @if(isset($histories) && isset($bufferTimelines))
                @foreach($histories as $history)
                <th class="mois" scope="col"> <p>{{ $history->month }}</p></th>
                    @endforeach
            
               
                 
                </thead>
                <tr class="TableInfo">
             
                    @foreach($histories as $history)
                    <td>
                        {{ $history->event }}<br>
                        <a href="#">Read more</a>
                    </td>
                    @endforeach
                    @else
                    <p>Aucune donnée d'historique disponible pour le moment.</p>
                    @endif
                </tr>

                
                <tr class="TableInfo">
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td class="dotted">dsfn</td>
                    <td></td>
                    <td></td>
                  </tr>

                  @if(isset($histories2) && isset($bufferTimelines))
                  @foreach($histories2 as $history2s)
                  <th class="mois" scope="col"> <p>{{ $history2s->month }}</p></th>
                  @endforeach
                  <tr class="TableInfo">
             
                    @foreach($histories2 as $history2s)
                    <td>
                        {{ $history2s->event }}<br>
                        <a href="#">Read more</a>
                    </td>
                    @endforeach
                </tr>
                @endif
                 
              
            </table>
              
        
        
    </div>

    <div class="container h-75 border-0">
        <div class="row border-0">
        <div class="col-md-12 border-0">
        <div class="card border-0 bg">
        <div class="card-body border-0 bg">
        <div id="content">


            @if(isset($histories) && isset($bufferTimelines))
            <ul class="timeline">
                @foreach($bufferTimelines as $timeline)
                    {{-- Assuming $histories and $bufferTimelines are of equal length --}}
                    @if(isset($histories[$loop->index])) {{-- Check if $histories[$loop->index] exists --}}
                        @php
                            $history = $histories[$loop->index];
                        @endphp
                        <li class="event" data-date="{{ $timeline->year }}">
                            <h3><div class="mois" scope="col"><p>{{ $history->month }}</p></div></h3>
                            <br>
                                {{ $history->event }}<br>
                                <a href="#">Read more</a>
                            
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
        
     
            
        </li>
    
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
</div> 
<div class="gap-between"></div>

    <!-- resources/views/case-studies/index.blade.php -->

    {{-- @extends('layouts.app')

    @section('content')
    <div class="Casestudy" id="cases">
        <div class="CasTitle">Études de cas</div>
        @foreach($caseStudies as $caseStudy)
        <div class="case-study-item">
            <img class="ImgCompany" src="{{ asset('storage/' . $caseStudy->image) }}" alt="Image de l'étude de cas">
            <div class="CasTextContainer">
                <h4>{{ $caseStudy->title }}</h4>
                <p>{{ $caseStudy->description }}</p>
            </div>
            <div class="infoGrid">
                <!-- Utiliser les détails de l'étude de cas pour remplir ces sections -->
                <div class="one">
                    <h1>+5</h1>
                    <p>modules de formation ont été intégrés dans un système de gestion de l'apprentissage (LMS) par ANDU, où ils ont mis l'accent sur l'importance des Soft Skills pour réussir professionnellement, trouver un emploi et s'intégrer durablement dans le milieu du travail.</p>
                </div>
                <div class="two">
                    <h1>+5</h1>
                    <p>Années d`expériences</p>
                </div>
                <div class="three">
                    <h1>+100</h1>
                    <p>de utilisateurs qui ont utilisé LMS</p>
                </div>
                <div class="four">
                    <p>Avec Defaru, l'un des défis rencontrés a été la standardisation du SCORM. Cela a impliqué de s'assurer que le contenu éducatif était compatible avec divers systèmes de gestion de l'apprentissage (LMS), permettant une interopérabilité et un suivi cohérent des progrès des apprenants.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection --}}

    @php
    $product1 = null;
    $product2 = null;
@endphp

@isset($products)
    @foreach($products as $product)
        @php
            if (!$product1) {
                $product1 = $product;
            } elseif (!$product2) {
                $product2 = $product;
            }
        @endphp
    @endforeach

    @php
        $imagePath3 = $product1 ? 'storage/' . $product1->image : '';
        $imagePath4 = $product2 ? 'storage/' . $product2->image : '';
    @endphp
@endisset

<div class="ProduitContainer">
    <div 
    data-aos="fade-down"
    data-aos-duration="3000"
     class="NosProduits" id="products"> Nos Produits</div>
    @if ($product1)
        <div class="ProduitResContainer">
            <div
            data-aos="fade-right"
            data-aos-duration="3000" 
            class="ProduitIcon">
                <img id="svgIconProduit" src="{{ asset($imagePath3) }}" alt="Rocket">
                <div 
                class="ProduitIconTitle">{{ $product1->name }}</div>
            </div>
            <div 
            data-aos="fade-left"
            data-aos-duration="3000" 
            class="IconPoints">
                <ul>
                    <li>{{ $product1->description }}</li>
                    <br>
                    <li>{{ $product1->description2 }}</li>
                    <br>
                    <li>{{ $product1->description3 }}</li>
                </ul>
            </div>
        </div>
    @endif

    @if ($product2)
        <div class="ProduitResContainerTwo">
            <div
            
            data-aos="fade-left"
            data-aos-duration="3000" 
            class="ProduitIconTwo">
                <img id="svgIconProduit" src="{{ asset($imagePath4) }}" alt="Rocket">
                <div class="ProduitIconTitle">{{ $product2->name }}</div>
            </div>
            <div 
            data-aos="fade-right"
            data-aos-duration="3000" 
            class="IconPointsTwo">
                <ul>
                    <li>{{ $product2->description }}</li>
                    <br>
                    <li>{{ $product2->description2 }}</li>
                    <br>
                    <li>{{ $product2->description3 }}</li>
                </ul>
            </div>
        </div>
    @endif
</div>

    @php
    $caseStudy1 = null;
    $caseStudy2 = null;
@endphp

@isset($caseStudies)
    @foreach ($caseStudies as $caseStudy)
        @php
            if ($caseStudy->id == 1) {
                $caseStudy1 = $caseStudy;
            } elseif ($caseStudy->id == 2) {
                $caseStudy2 = $caseStudy;
            }

            $imagePath = $caseStudy1 ? 'storage/' . $caseStudy1->image : '';
            $imagePath2 = $caseStudy2 ? 'storage/' . $caseStudy2->image : '';

        @endphp
    @endforeach
@endisset



    <div class="Casestudy" id="cases">
        <div class="CasTitle">Études de cas</div>
        <img class="ImgCompany" src="{{ asset($imagePath) }}" alt="Image de l'étude de cas">
        <br>
        <div class="CasTextContainer">


            <h4>
                @if ($caseStudy1)
                {{ $caseStudy1->title }}
                @endif
            </h4>
            <p>
                @if ($caseStudy1)
                {{ $caseStudy1->description }}
                @endif
                </p>
        </div>

        <div class="infoGrid">
            <div class="one">
                <h1>
                    +5
                </h1>
                <p>
                    @if ($caseStudy1)
                    {{ $caseStudy1->details }}
                    @endif
                </p>
            </div>
            <div class="two">
                <h1>
                    @if ($caseStudy1)
                    + {{ $caseStudy1->years_of_experience }}
                    @endif
                </h1>
                <p >
                    Années d`expériences
                </p>
            </div>
            <div class="three">
                <h1>
                    @if ($caseStudy1)
                    +{{ $caseStudy1->users_using_lms }}
                    @endif
                </h1>
                <p>
                    de utilisateurs qui ont utiliser LMS
                </p>
            </div>
            <div class="four">
                <p>
                    @if ($caseStudy1)
                    {{ $caseStudy1->challenge }}
                    @endif
                </p>
            </div>
        </div>
        <div class="BakeliSection">
            <img class="imgBakeli" src="{{ asset($imagePath2) }}" alt="Image de l'étude de cas">
            <br>
            <div class="CasTextContainer">
                <h4>     @if ($caseStudy2)
                    {{ $caseStudy2->title }}
                    @endif
                </h4>
                <p> <br>      @if ($caseStudy2)
                    {{ $caseStudy2->description }}
                    @endif
                </p>
            </div>

          
            <div class="infoGrid">
                <div class="one" style="background-color: black;">
                    <h1 id="text-color-white">
                        + 5
                    </h1>
                    <p id="text-color-white">
                        @if ($caseStudy2)
                    {{ $caseStudy2->details }}
                    @endif
                    </p>
                </div>
                <div class="two" style="background: #94C0D4;">
                    <h1 id="text-color-black">
                        @if ($caseStudy2)
                    + {{ $caseStudy2->years_of_experience }}
                    @endif
                    </h1>
                    <p id="text-color-black">
                        Années d`expériences
                    </p>

                </div>
                <div class="three" style="background: #048ECB;">
                    <h1>
                        @if ($caseStudy2)
                    + {{ $caseStudy2->years_of_experience }}
                    @endif
                    </h1>
                    <p>
                        de utilisateurs qui ont utiliser LMS
                    </p>
                </div>
                <div class="four">
                    <p>
                        @if ($caseStudy2)
                        {{ $caseStudy2->challenge }}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @php
    $tarif1 = null;
    $tarif2 = null;
    $tarif3 = null;
    $tarif4 = null;
    $tarif5 = null;
    $tarif6 = null;
    $tarif7 = null;
    $tarif8 = null;
    $tarif9 = null;

    foreach ($tarifs as $tarif) {
        if ($tarif->id == 7) {
            $tarif1 = $tarif;
        } elseif ($tarif->id == 8) {
            $tarif2 = $tarif;
        } elseif ($tarif->id == 9) {
            $tarif3 = $tarif;
        } elseif ($tarif->id == 4) {
            $tarif4 = $tarif;
        } elseif ($tarif->id == 5) {
            $tarif5 = $tarif;
        } elseif ($tarif->id == 6) {
            $tarif6 = $tarif;
        } elseif ($tarif->id == 7) {
            $tarif7 = $tarif;
        } elseif ($tarif->id == 8) {
            $tarif8 = $tarif;
        } elseif ($tarif->id == 9) {
            $tarif9 = $tarif;
        } 
    }
    @endphp



    <div class="Tarifs" id="pricing">
    <h1>
        Tarifs
    </h1>
    <div class="TarifContainer">
        <h4>
            @if ($tarif1)
            {{ $tarif1->description }}
            @endif
        </h4>
        <div class="TarifAdvantage">
            
            
            <div class="t1">
                <svg width="24" height="28.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                
                @if ($tarif1)
                {{ $tarif1->advantage }}
                @endif
            </div>
            <div class="t2">
                <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                @if ($tarif2)
                {{ $tarif2->advantage }}
                @endif
            </div>
            <div class="t3">
                <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                @if ($tarif3)
                {{ $tarif3->advantage }}
                @endif
            </div>
            
            
            <div class="t4">
                <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                @if ($tarif4)
                {{ $tarif4->advantage }}
                @endif
            </div>
            <div class="t5">
                <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                @if ($tarif5)
                {{ $tarif5->advantage }}
                @endif
            </div>
            <div class="t6">
                <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                @if ($tarif6)
                {{ $tarif6->advantage }}
                @endif
            </div>
        </div>
        
    </div>
    <div class="prixOption">
        <div class="OptionUn">
            <h3>
                @if ($tarif1)
                {{ $tarif1->type }}
                @endif
            </h3>
            <h2>
                @if ($tarif1)
                {{ $tarif1->price }}
                @endif
            </h2>
            
        <button class="buttonPrix">
            <h5>Voir les courses</h5> 
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7992 9.92417C27.5314 9.19194 28.7186 9.19194 29.4508 9.92417L40.7008 21.1742C41.4331 21.9064 41.4331 23.0936 40.7008 23.8258L29.4508 35.0758C28.7186 35.8081 27.5314 35.8081 26.7992 35.0758C26.0669 34.3436 26.0669 33.1564 26.7992 32.4242L34.8483 24.375H5.625C4.58947 24.375 3.75 23.5355 3.75 22.5C3.75 21.4645 4.58947 20.625 5.625 20.625H34.8483L26.7992 12.5758C26.0669 11.8436 26.0669 10.6564 26.7992 9.92417Z" fill="black" />
            </svg>
        </button>

    </div>
    <div class="OptionDeux">
        <h3>
            @if ($tarif2)
            {{ $tarif2->type }}
            @endif
        </h3>
        <h2>
            @if ($tarif2)
            {{ $tarif2-> price }}
            @endif
        </h2>

        <button class="buttonPrix">
            <h5>Prenez rendez-vous</h5> <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7992 9.92417C27.5314 9.19194 28.7186 9.19194 29.4508 9.92417L40.7008 21.1742C41.4331 21.9064 41.4331 23.0936 40.7008 23.8258L29.4508 35.0758C28.7186 35.8081 27.5314 35.8081 26.7992 35.0758C26.0669 34.3436 26.0669 33.1564 26.7992 32.4242L34.8483 24.375H5.625C4.58947 24.375 3.75 23.5355 3.75 22.5C3.75 21.4645 4.58947 20.625 5.625 20.625H34.8483L26.7992 12.5758C26.0669 11.8436 26.0669 10.6564 26.7992 9.92417Z" fill="black" />
            </svg>
        </button>
    </div>
    <div class="OptionTrois">
        <h3>
            @if ($tarif3)
            {{ $tarif3->type }}
            @endif
        </h3>
        <h2>
            @if ($tarif3)
            {{ $tarif3-> price }}
            @endif
        </h2>

        <button class="buttonPrix">
            <h5>Prenez rendez-vous</h5> <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7992 9.92417C27.5314 9.19194 28.7186 9.19194 29.4508 9.92417L40.7008 21.1742C41.4331 21.9064 41.4331 23.0936 40.7008 23.8258L29.4508 35.0758C28.7186 35.8081 27.5314 35.8081 26.7992 35.0758C26.0669 34.3436 26.0669 33.1564 26.7992 32.4242L34.8483 24.375H5.625C4.58947 24.375 3.75 23.5355 3.75 22.5C3.75 21.4645 4.58947 20.625 5.625 20.625H34.8483L26.7992 12.5758C26.0669 11.8436 26.0669 10.6564 26.7992 9.92417Z" fill="black" />
            </svg>
        </button>
    </div>
    </div>

    </div>

</div>
</main>
    <footer class="footer">
        <img id="footer-logo" src="{{ asset('../storage/images/Screenshot 2024-06-214 at 16.25.21 2.png') }}" alt="ANDU Logo">

        <div class="footer-links">
            <a href="http://127.0.0.1:8000/"> Home</a>
            <a href="#about">Qui Sommes-Nous</a>
            <a href="#products">Nos Produits</a>
            <a href="#cases">Études de cas</a>
            <a href="#pricing">Tarifs</a>
        </div>  
        <div class="footer-p">
            Lörem ipsum od ohet dilogi. 
            Bell trabel, samuligt, ohöbel utom diska. 
            Jinesade bel när feras redorade i belogi. 
            FAR paratyp i muvåning, och pesask vyfisat. 
            Viktiga poddradio har un mad och inde. 
        </div>
        <div class="footer-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
              </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
              </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
              </svg>


            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>

        </div>
    </footer>
    <div class="form">
        
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        function toggle() {
    var nav = document.querySelector("#sidebar"),
        btn = document.querySelector("#btn");
    
    nav.classList.toggle("open");
    btn.classList.toggle("is-active");
   

}

    </script>
    <script>
      AOS.init({
  disable: function() {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  }
});
    </script>
</body>

</html>