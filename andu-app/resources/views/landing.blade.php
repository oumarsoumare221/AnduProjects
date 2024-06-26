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
                <li><a href="#home"><i class="fas fa-home icon"></i> Home</a></li>
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
                <button type="submit">→</button>
            </div>
        </div>
        <div class="hero-image">
            <img id="heroImg" src="{{ asset('../apprendImage.jpg') }}" alt="Apprentissage en ligne">
        </div>
    </div>

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

    <section id="timeline">
        <h2>Timeline</h2>
        <div class="timeline">
            <div class="timeline-item">
                <img src="{{ asset('../timeline1.jpg') }}" alt="Timeline Image 1">
                <p>Phase 1: Recherche</p>
            </div>
            <div class="timeline-item">
                <img src="{{ asset('../timeline2.jpg') }}" alt="Timeline Image 2">
                <p>Phase 2: Développement</p>
            </div>
            <div class="timeline-item">
                <img src="{{ asset('../timeline3.jpg') }}" alt="Timeline Image 3">
                <p>Phase 3: Test</p>
            </div>
            <div class="timeline-item">
                <img src="{{ asset('../timeline4.jpg') }}" alt="Timeline Image 4">
                <p>Phase 4: Lancement</p>
            </div>
            <div class="timeline-item">
                <img src="{{ asset('../timeline5.jpg') }}" alt="Timeline Image 5">
                <p>Phase 5: Support</p>
            </div>
        </div>
    </section>

    <section id="reviews">
        <h2>Ce que disent nos utilisateurs</h2>
        <div class="review">
            <p>"Une plateforme incroyable qui a révolutionné notre manière d'apprendre!"</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="review">
            <p>"Les outils et les fonctionnalités sont très intuitifs et faciles à utiliser."</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="review">
            <p>"Un excellent support client, toujours prêt à aider."</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
    </section>

    <section id="pricing">
        <h2>Nos Tarifs</h2>
        <div class="pricing">
            <div class="pricing-plan">
                <h3>Plan Basique</h3>
                <p>Idéal pour les étudiants individuels.</p>
                <div class="price">5€/mois</div>
                <p>Accès à toutes les fonctionnalités de base.</p>
            </div>
            <div class="pricing-plan">
                <h3>Plan Pro</h3>
                <p>Pour les groupes et les petites équipes.</p>
                <div class="price">15€/mois</div>
                <p>Fonctionnalités avancées et support prioritaire.</p>
            </div>
            <div class="pricing-plan">
                <h3>Plan Entreprise</h3>
                <p>Pour les grandes organisations.</p>
                <div class="price">100€/mois</div>
                <p>Solutions personnalisées et support dédié.</p>
            </div>
        </div>
    </section>

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
        <a href="https://www.facebook.com/anduelearning"><i class="fab fa-facebook-f"></i> Facebook</a>
        <!-- Autres liens vers les réseaux sociaux -->
    </footer>

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