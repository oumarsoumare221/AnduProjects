<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDU - Landing Page</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-2Bb8e8lP5q4gAnj/FS9bR3I8tPxupq3cM8lXhO7R49ORyO4p2MnHlZ2j6Qk0kFJ2+ILPmGv6r8XfDbXESlklzw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        header nav ul li {
            position: relative;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        header nav ul li a .icon {
            margin-right: 5px;
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

        #timeline {
            padding: 50px;
            background-color: #f8f9fa;
        }

        #timeline h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .timeline {
            display: flex;
            justify-content: space-around;
        }

        .timeline-item {
            text-align: center;
            max-width: 20%;
        }

        .timeline-item img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        #reviews {
            padding: 50px;
            background-color: #fff;
        }

        #reviews h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .review {
            text-align: center;
            max-width: 30%;
            margin: 0 auto;
        }

        .review p {
            font-size: 1em;
            margin-bottom: 10px;
        }

        .review .rating {
            color: #ffc107;
        }

        #pricing {
            padding: 50px;
            background-color: #f8f9fa;
        }

        #pricing h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .pricing {
            display: flex;
            justify-content: space-around;
        }

        .pricing-plan {
            text-align: center;
            max-width: 30%;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .pricing-plan h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .pricing-plan p {
            font-size: 1em;
            margin-bottom: 20px;
        }

        .pricing-plan .price {
            font-size: 2em;
            margin-bottom: 20px;
            color: #28a745;
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
                <li><a href="/"><i class="fas fa-home icon"></i> Accueil</a></li>
                <li><a href="#about"><i class="fas fa-info-circle icon"></i> Qui Sommes-Nous</a></li>
                <li><a href="#products"><i class="fas fa-box icon"></i> Nos Produits</a></li>
                <li><a href="#cases"><i class="fas fa-folder-open icon"></i> Études de cas</a></li>
                <li><a href="#pricing"><i class="fas fa-dollar-sign icon"></i> Tarifs</a></li>
            </ul>
            <a href="#login" class="btn btn-login">Se Connecter</a>
        </nav>
    </header>

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
                <button type="submit">S'abonner</button>
            </div>
        </div>
        <div class="hero-image">
            <img id="heroImg" src="{{ asset('../apprendImage.jpg') }}" alt="Apprentissage en ligne">
        </div>
    </div>

    <section id="features">
        <div class="feature">
            <h2>Personnalisation</h2>
            <p>Offrez une expérience d'apprentissage personnalisée avec des parcours d'apprentissage adaptés aux besoins individuels.</p>
        </div>
        <div class="feature">
            <h2>Évaluation et Feedback</h2>
            <p>Permettez aux enseignants de suivre les progrès des étudiants et de fournir un feedback instantané pour améliorer l'apprentissage.</p>
        </div>
        <div class="feature">
            <h2>Communication Facilitée</h2>
            <p>Facilitez la communication entre étudiants et enseignants grâce à des outils intégrés de messagerie et de discussion en ligne.</p>
        </div>
    </section>

    <section id="timeline">
        <h2>Notre Parcours</h2>
        <div class="timeline">
            <div class="timeline-item">
                <img src="{{ asset('../timeline1.jpg') }}" alt="Timeline Item">
                <p>2010 - Fondation d'ANDU</p>
            </div>
            <div class="timeline-item">
                <img src="{{ asset('../timeline2.jpg') }}" alt="Timeline Item">
                <p>2015 - Lancement de la première version de notre plateforme</p>
            </div>
            <div class="timeline-item">
                <img src="{{ asset('../timeline3.jpg') }}" alt="Timeline Item">
                <p>2020 - Expansion internationale</p>
            </div>
            <div class="timeline-item">
                <img src="{{ asset('../timeline4.jpg') }}" alt="Timeline Item">
                <p>2023 - Intégration de nouvelles fonctionnalités</p>
            </div>
        </div>
    </section>

    <section id="reviews">
        <h2>Témoignages</h2>
        <div class="review">
            <p>"ANDU a transformé notre approche de l'éducation. Les fonctionnalités avancées nous permettent de fournir une expérience d'apprentissage enrichissante."</p>
            <p class="rating">★★★★★</p>
        </div>
        <div class="review">
            <p>"Nous sommes très satisfaits des résultats obtenus grâce à ANDU. La plateforme est intuitive et facile à utiliser pour nos enseignants et nos étudiants."</p>
            <p class="rating">★★★★☆</p>
        </div>
        <div class="review">
            <p>"Excellent service client et support technique rapide. Nous recommandons vivement ANDU à toute institution éducative."</p>
            <p class="rating">★★★★★</p>
        </div>
    </section>

    <section id="pricing">
        <h2>Nos Tarifs</h2>
        <div class="pricing">
            <div class="pricing-plan">
                <h3>Plan de Base</h3>
                <p>Accès limité aux fonctionnalités principales</p>
                <p class="price">19,99€/mois</p>
                <a href="#signup" class="btn btn-primary">S'inscrire</a>
            </div>
            <div class="pricing-plan">
                <h3>Plan Premium</h3>
                <p>Accès complet à toutes les fonctionnalités</p>
                <p class="price">39,99€/mois</p>
                <a href="#signup" class="btn btn-primary">S'inscrire</a>
            </div>
            <div class="pricing-plan">
                <h3>Plan Entreprise</h3>
                <p>Personnalisation avancée et support dédié</p>
                <p class="price">Contactez-nous</p>
                <a href="#contact" class="btn btn-primary">Nous Contacter</a>
            </div>
        </div>
    </section>

    <footer>
        <form action="#">
            <input type="email" placeholder="Votre adresse e-mail" required>
            <textarea placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <p>&copy; 2024 ANDU - Tous droits réservés</p>
        <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <!-- FontAwesome Script -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-SPHpBj+7Lkl4N9BlPq91kXZ9H0rGQHHnH2WrS3Bf2m2GRh2nbz8Sg6GF0YIjXsLe5c/GlGHr1FrR3U6N4z4h6w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script>
        // JavaScript for changing the image every second
        const images = [
            "{{ asset('../apprendImage.jpg') }}",
            "{{ asset('../image2.jpg') }}",
        ];

        let currentIndex = 0;
        const heroImg = document.getElementById('heroImg');

        function changeImage() {
            currentIndex = (currentIndex + 1) % images.length;
            heroImg.src = images[currentIndex];
        }

        setInterval(changeImage, 1000); // Change image every 1000 milliseconds (1 second)
    </script>
</body>

</html>