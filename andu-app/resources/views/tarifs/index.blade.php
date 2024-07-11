<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tarifs</title>
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
        <a href="{{ route('tarifs.create') }}" class="btn btn-primary mb-3">Ajouter un tarif</a>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        
      
            <div class="Tarifs" id="pricing">
                <h1>
                    Tarifs
                </h1>
                <div class="TarifContainer">
                <h4>
                    Lorem ipsum dolor sit amet consectetur. Ultrices quisque magna sit orci porttitor turpis. Dignissim sagittis bibendum turpis urna non enim tempor bibendum phasellus
                </h4>
                <div class="TarifAdvantage">
        
                    
                    <div class="t1">
                        <svg width="24" height="28.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                
                        Lorem ipsum dolor
                    </div>
                    <div class="t2">
                        <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>    
                        Lorem ipsum dolor
                    </div>
                    <div class="t3">
                        <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>    
                        Lorem ipsum dolor
                    </div>
          
                    
                    <div class="t4">
                        <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>    
                        Lorem ipsum dolor
                    </div>
                    <div class="t5">
                        <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>    
                        Lorem ipsum dolor
                    </div>
                    <div class="t6">
                        <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>    
                        Lorem ipsum dolor
                    </div>
                    </div>
           
            </div>
            <div class="prixOption">
                <div class="OptionUn">
                    <h3>
                        @foreach($tarifs as $tarif)
                        {{ $tarif->type }}: 
                        @endforeach
                    </h3>
                    <h2>
                    </h2>
        
                    <button class="buttonPrix">
                        <h5>Voir les courses</h5> <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7992 9.92417C27.5314 9.19194 28.7186 9.19194 29.4508 9.92417L40.7008 21.1742C41.4331 21.9064 41.4331 23.0936 40.7008 23.8258L29.4508 35.0758C28.7186 35.8081 27.5314 35.8081 26.7992 35.0758C26.0669 34.3436 26.0669 33.1564 26.7992 32.4242L34.8483 24.375H5.625C4.58947 24.375 3.75 23.5355 3.75 22.5C3.75 21.4645 4.58947 20.625 5.625 20.625H34.8483L26.7992 12.5758C26.0669 11.8436 26.0669 10.6564 26.7992 9.92417Z" fill="black" />
                        </svg>
                    </button>
        
                </div>
                <div class="OptionDeux">
                    <h3>
                    </h3>
                    <h2>
                    </h2>
        
                    <button class="buttonPrix">
                        <h5>Prenez rendez-vous</h5> <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7992 9.92417C27.5314 9.19194 28.7186 9.19194 29.4508 9.92417L40.7008 21.1742C41.4331 21.9064 41.4331 23.0936 40.7008 23.8258L29.4508 35.0758C28.7186 35.8081 27.5314 35.8081 26.7992 35.0758C26.0669 34.3436 26.0669 33.1564 26.7992 32.4242L34.8483 24.375H5.625C4.58947 24.375 3.75 23.5355 3.75 22.5C3.75 21.4645 4.58947 20.625 5.625 20.625H34.8483L26.7992 12.5758C26.0669 11.8436 26.0669 10.6564 26.7992 9.92417Z" fill="black" />
                        </svg>
                    </button>
                </div>
                <div class="OptionTrois">
                    <h3>
                        Établissement Privés
                    </h3>
                    <h2>
                        100,000 XOF
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
    
</body>

</html>