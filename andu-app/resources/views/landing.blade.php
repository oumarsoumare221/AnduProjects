<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDU - Landing Page</title>

    <style>
        /* CSS de base */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #f8f9fa;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav .logo {
            width: 50px;
            height: 50px;
        }

        header nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        header nav .btn-login {
            background-color: #419488;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background: linear-gradient(135deg, #419488, white);
            color: white;
        }

        .hero-content {
            max-width: 50%;
        }

        .hero-content h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .cta-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .cta-buttons .btn {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-secondary {
            background-color: #28a745;
        }

        .newsletter-signup {
            display: flex;
            align-items: center;
        }

        .newsletter-signup input[type="email"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            width: 300px;
        }

        .newsletter-signup button {
            padding: 10px;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 0 5px 5px 0;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
        }

        #features {
            padding: 50px;
            background-color: #f8f9fa;
            display: flex;
            justify-content: space-around;
        }

        .feature {
            text-align: center;
            max-width: 30%;
        }

        .feature h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .feature p {
            font-size: 1em;
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer form {
            margin-bottom: 20px;
        }

        footer form input,
        footer form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        footer form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }

        footer p,
        footer a {
            color: white;
        }

        footer a {
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('../logoAndu.jpg') }}" alt="ANDU Logo" class="logo">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Qui Sommes-Nous</a></li>
                <li><a href="#products">Nos Produits</a></li>
                <li><a href="#cases">Études de cas</a></li>
                <li><a href="#pricing">Tarifs</a></li>
            </ul>
            <a href="#login" class="btn btn-login">Se Connecter</a>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h1>Favoriser l'apprentissage, n'importe quand, n’importe où !</h1>
                <p>L'un des systèmes de gestion de l'apprentissage les plus innovants, un outil facile qui enrichira et facilitera la vie des éducateurs et des étudiants, améliorant ainsi leur expérience et apportant des changements positifs.</p>
                <div class="cta-buttons">
                    <a href="#demo" class="btn btn-primary">Voir une démo</a>
                    <a href="#appointment" class="btn btn-secondary">Prenez rendez-vous</a>
                </div>
                <div class="newsletter-signup">
                    <input type="email" placeholder="Veuillez entrer votre adresse e-mail pour vous inscrire..." required>
                    <button type="submit">→</button>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('../apprendImage.jpg') }}" alt="Apprentissage en ligne">
            </div>
        </div>
    </header>

    <section id="features">
        <div class="feature">
            <i class="icon personalization"></i>
            <h2>Apprentissage personnalisé</h2>
            <p>Des exercices et quiz basés sur l'IA pour une acquisition ciblée et une progression efficace.</p>
        </div>
        <div class="feature">
            <i class="icon evaluation"></i>
            <h2>Évaluation et feedback</h2>
            <p>Correction automatique, feedback détaillé, forum de discussion et des contenus de révision pour combler les lacunes.</p>
        </div>
        <div class="feature">
            <i class="icon communication"></i>
            <h2>Suivi et communication</h2>
            <p>Partage des performances avec les admins, professeurs, l'établissement et les parents pour un suivi transparent.</p>
        </div>
    </section>

    <!-- Autres sections comme Avantages, Études de cas, Tarifs, FAQ, etc. -->

    <footer>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Prénom et Nom" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Numéro de téléphone">
            <input type="text" name="subject" placeholder="Objet de contact" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <form action="{{ route('newsletter.subscribe') }}" method="POST">
            @csrf
            <input type="email" name="newsletter_email" placeholder="Votre email pour la newsletter" required>
            <button type="submit">S'abonner</button>
        </form>
        <p>Contactez-nous : +221 77 497 52 39 | Mady SANKHON</p>
        <a href="https://www.facebook.com/anduelearning">Facebook</a>
        <!-- Autres liens vers les réseaux sociaux -->
    </footer>
</body>

</html>