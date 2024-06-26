<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDU - Learning Management System</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <style>
        /* CSS de base */
        @import url('https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap');

        body {

            font-family: "Inter", sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            height: 100vh;
            width: 100vw;
            background-color: #EEEEEE;
            display: block;
        }

        header {
            background-color: #EEEEEE;
            position: absolute;
            top: 0;
            padding-top: 25px;
            left: 95px;

        }

        header nav {
            display: flex;
            align-items: center;
        }

        header nav .logo {
            height: 50px;
            left: 95px;
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
            color: #000000;
            font-weight: bold;
            font-family: "Inter", sans-serif;
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;


            width: 46.98%;
            height: 13.15%;
            bottom: 40%;
            position: relative;
            margin: 10px;
            flex: none;
            order: 1;
            flex-grow: 0;
        }


        header ul {
            position: relative;
            left: 32.5%;
        }



        .btn-login {
            position: absolute;
            width: 296px;
            height: 65px;
            top: 16px;
            left: 82.5%;

            /* Main Green */
            background: #419488;
            box-shadow: 0px 20px 42px rgba(0, 0, 0, 0.35);
            border-radius: 15px;
            text-decoration: none;


        }

        .button-text-nav {
            /*text*/
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
            text-align: center;
            text-decoration: none;
            position: relative;
            color: #FFFFFF;
            top: 15px;
        }


        .hero {
            position: absolute;
            width: 92.8%;
            display: block;
            height: 80.16%;
            top: 13%;
            left: 5%;
        }

        #heroImg {
            position: absolute;
            width: 36.81%;
            height: 59.29%;
            right: 0;
            border-radius: 5px;

        }

        #Rocket {
            position: absolute;
            width: 332.47px;
            height: 355.09px;
            left: 82.5%;
            top: 38%;

            animation: zigzack 3s linear infinite alternate-reverse;
        }

        @keyframes zigzack {
            0% {
                left: 82.5%;
                top: 38%;
            }

            100% {
                left: 85.5%;
                top: 41%;
            }
        }


        .heroText h1 {
            /* Favoriser l'apprentissage, n'importe quand, n’importe où ! */
            font-family: "Inter", sans-serif;

            font-style: normal;
            font-weight: 700;
            font-size: 80px;
            line-height: 97px;
            color: #000000;
            text-align: left;
            position: relative;
            top: 0;



        }

        .heroText h3 {
            font-family: "Inter", sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 39px;

            color: #000000;
            top: 10%;
            text-align: left;

        }



        .hero-text-container {
            position: relative;
            width: 57.91%;
            height: 50%;
            bottom: 70px;
        }


        .send-email {
            position: relative;
            width: 65%;
            height: 79px;
            left: 0;
            top: 20%;

            /* Main Green */
            background: #419488;
            box-shadow: 0px 20px 30px -10px rgba(0, 0, 0, 0.5);
            border-radius: 20px;

            input {
                /* Veuillez entrer votre adresse e-mail pour vous inscrire... */

                position: relative;
                height: 65%;
                width: 80%;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 500;
                font-size: 20px;
                line-height: 29px;
                left: 2%;
                /* identical to box height */

                color: #D9D9D9;
                top: 15%;
                background-color: transparent;
                border: none;
                text-decoration: none;


            }

            input::placeholder {
                color: #D9D9D9;
            }


        }

        .send-email-button {
            /* Rectangle 25 */

            width: 10%;
            height: 79px;
            left: 90%;
            position: absolute;

            background: #D9D9D9;
            border-radius: 0px 20px 20px 0px;
            z-index: 2;
            border: none;
            cursor: pointer;
        }

        .buttonContainer {
            position: absolute;
            width: 60%;
            height: 15%;
            left: 70%;
            top: 620px;

        }


        .DemoButton,
        .RendezVousButton {
            position: relative;
            width: 48%;
            height: 100%;
            display: inline;

            background: #419488;
            box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.35);
            border-radius: 10px;


            margin-left: 1%;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;

            color: #FFFFFF;
            text-align: center;
            border: none;
            cursor: pointer;


        }


        .Circle {


            position: absolute;
            left: 60%;
            top: 35%;

            background: #EEEEEE;
            transform: rotate(-145deg);
            z-index: -1;

        }


        .aboutTitle {
            /* Dans les coulisees de ANDU */

            top: 1030px;
            position: relative;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 48px;
            line-height: 58px;
            text-align: center;
            color: #000000;


        }

        .aboutParagraph {
            position: relative;
            width: 80%;
            height: 355px;
            text-align: center;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 44px;
            margin: auto;

            color: #000000;

        }
    .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    }

    .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('logoAndu.jpg') }}" alt="ANDU Logo" class="logo">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Qui Sommes-Nous</a></li>
                <li><a href="#products">Nos Produits</a></li>
                <li><a href="#cases">Études de cas</a></li>
                <li><a href="#pricing">Tarifs</a></li>
            </ul>
        </nav>
    </header>
    <a href="#login" class="btn btn-login">
        <div class="button-text-nav">Se Connecter</div>
    </a>
    <div class="hero">
        <img id="heroImg" src="{{ asset('apprendImage.jpg') }}" alt="Apprentissage en ligne">
        <div class="hero-text-container">
            <div class="heroText">
                <h1>Favoriser l'apprentissage, n'importe quand, n'importe où !</h1>
                <h3>L'un des systèmes de gestion de l'apprentissage les plus innovants, un outil facile qui enrichira et facilitera la vie des éducateurs et des étudiants, améliorant ainsi leur expérience et apportant des changements positifs.</h3>
            </div>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="send-email-wrapper">
                <form action="{{ route('subscribe') }}" method="POST" class="send-email">
                    @csrf
                    <input id="email-input" name="email" type="email" placeholder="Veuillez entrer votre adresse e-mail pour vous inscrire..." required>
                    <button type="submit" id="send-email-button" class="send-email-button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3L22 12L2 21V14L16 12L2 10V3Z" fill="currentColor" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>