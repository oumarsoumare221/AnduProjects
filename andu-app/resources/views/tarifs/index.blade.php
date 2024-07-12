<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tarifs</title>
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .Tarifs {
            margin: 40px 0;
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
        }

        .TarifContainer {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .TarifAdvantagesContainer {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .TarifAdvantagesContainer svg {
            margin-right: 10px;
            fill: #419488;
            /* Couleur SVG */
        }

        .prixOption {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .prixOption>div {
            flex: 1;
            min-width: 200px;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .buttonPrix {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            background-color: #419488;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .buttonPrix:hover {
            background-color: #367e72;
        }

        .buttonPrix h5 {
            margin: 0;
            margin-right: 10px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        h2 {
            color: #419488;
            margin-bottom: 10px;
        }

        h3 {
            color: #333;
            margin-bottom: 10px;
        }

        h4 {
            color: #555;
            margin-bottom: 10px;
        }

        .alert-success {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
        <a href="{{ route('tarifs.create') }}" class="btn btn-primary mb-3">Ajouter un tarif</a>
    <div class="container mt-5">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="Tarifs" id="pricing">
            <h1>Tarifs</h1>
            <div class="TarifContainer">
                <div class="TarifAdvantage">
                    @foreach($tarifs as $tarif)
                    <div class="TarifAdvantagesContainer">
                        <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>{{ $tarif->description }}</h4>
                    </div>
                    <div class="TarifAdvantagesContainer">
                        <svg width="20" height="24.4" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 15.2254L10.5 27.4508L23 3" stroke="#419488" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>{{ $tarif->advantage }}</h4>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="prixOption">
                <div class="OptionUn">
                    <h3>
                        {{ $tarif->type }}: 
                    </h3>
                    <h2>
                        {{ $tarif->price }}
                    </h2>
        
                    <button class="buttonPrix">
                        <h5>Voir les courses</h5> <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7992 9.92417C27.5314 9.19194 28.7186 9.19194 29.4508 9.92417L40.7008 21.1742C41.4331 21.9064 41.4331 23.0936 40.7008 23.8258L29.4508 35.0758C28.7186 35.8081 27.5314 35.8081 26.7992 35.0758C26.0669 34.3436 26.0669 33.1564 26.7992 32.4242L34.8483 24.375H5.625C4.58947 24.375 3.75 23.5355 3.75 22.5C3.75 21.4645 4.58947 20.625 5.625 20.625H34.8483L26.7992 12.5758C26.0669 11.8436 26.0669 10.6564 26.7992 9.92417Z" fill="black" />
                        </svg>
                    </button>
        
                </div>
                <div class="OptionDeux">
                    <h3>
                        {{ $tarif->type }}: 
                    </h3>
                    <h2>
                        {{ $tarif->price }}
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
             @endforeach
            </div>
    
</body>

</html>