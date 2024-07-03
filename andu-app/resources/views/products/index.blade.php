<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">

    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS personnalisé */
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 2rem;
            background-color: #EEEEEE;
        }

        .product-card {
            width: 300px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            background-color: #fff;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.1);
            /* Zoom sur l'image au survol */
        }

        .product-details {
            padding: 1rem;
        }

        .product-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .product-description {
            font-size: 0.9rem;
            color: #666;
        }

        .btn-actions {
            margin-top: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="NavBarContainer">
        <img id="AnduLogo" src="{{ asset('../logoAndu.jpg') }}" alt="ANDU Logo" sizes="(max-width: 600px) 480px,
            800px">

        <div class="NavLinks">
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="#about">Qui Sommes-Nous</a>
            <a href="/products">Nos Produits</a>
            <a href="#cases">Études de cas</a>
            <a href="#pricing">Tarifs</a>
        </div>
        <div class="button-Rendez">
            <p>Prenez rendez-vous</p>
        </div>
        <svg class="toggleSidebar" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H24V2.66667H0V0ZM0 6.66667H24V9.33333H0V6.66667ZM0 13.3333H24V16H0V13.3333Z" fill="#353840" />
        </svg>
    </div>
    <div class="container">
        <!-- <h1 class="my-4">Nos Produits</h1> -->
        <div class="product-container">
            @foreach($products as $product)
            <div class="product-card">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                <div class="product-details">
                    <div class="product-title">{{ $product->name }}</div>
                    <div class="product-description">{{ $product->description }}</div>
                    <div class="btn-actions">
                        <!-- <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Modifier</a> -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <!-- <button type="submit" class="btn btn-danger btn-sm ml-2">Supprimer</button> -->
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- <a href="{{ route('products.create') }}" class="btn btn-primary mt-4">Ajouter un produit</a> -->
    </div>
    <!-- Inclure Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>