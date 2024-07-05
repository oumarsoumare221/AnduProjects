<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">
    <link rel="stylesheet" href="{{ url('CssProducts/landingProduct.css') }}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
        <h1 class="my-4">Nos Produits</h1> 
        <div class="product-container">
            @foreach($products as $product)
            <div class="product-card">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                <div class="product-details">
                    <div class="product-title">{{ $product->name }}</div>
                    <div class="product-description">{{ $product->description }}</div>
                    <div class="btn-actions">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Modifier</a> 
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                             <button type="submit" class="btn btn-danger btn-sm ml-2">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-primary mt-4">Ajouter un produit</a>
    </div>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">
    <link rel="stylesheet" href="{{ url('CssProducts/landingProduct.css') }}">

    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Inclure FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="NavBarContainer">
        <img id="AnduLogo" src="{{ asset('../logoAndu.jpg') }}" alt="ANDU Logo" sizes="(max-width: 600px) 480px, 800px">

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
        <div class="row product-container">
            @foreach($products as $product)
            <div class="col-md-4 col-sm-6 col-xs-12 product-card">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                <div class="product-details">
                    <div class="product-title">{{ $product->name }}</div>
                    <div class="product-description">{{ $product->description }}</div>
                    <div class="btn-actions">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                    <div class="product-actions">
                        <a href="#" data-toggle="modal" data-target="#facebookModal" class="like"><i class="fas fa-thumbs-up"></i> J'aime</a>
                        <a href="#" data-toggle="modal" data-target="#facebookModal" class="comment"><i class="fas fa-comment"></i> Commenter</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- <a href="{{ route('products.create') }}" class="btn btn-primary mt-4">Ajouter un produit</a> -->
    </div>

    <!-- Fenêtre modale -->
    <div class="modal fade" id="facebookModal" tabindex="-1" role="dialog" aria-labelledby="facebookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="facebookModalLabel">Connectez-vous à Facebook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Adresse e-mail ou numéro de tél.">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                        <a href="#" class="d-block text-center mt-2">Mot de passe oublié ?</a>
                        <hr>
                        <a href="https://www.facebook.com/" class="btn btn-success btn-block">Créer nouveau compte</a>
                    </form>
                    <p class="text-center mt-4">Créer une Page pour une célébrité, une marque ou une entreprise.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure jQuery et Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>