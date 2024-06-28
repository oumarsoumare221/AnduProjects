<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDU - Landing Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
            height: 1200px;

            .histoire {
                /* Notre Histoire */
                position: absolute;
                left: 5%;
                top: 40%;

                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-size: 40px;
                line-height: 48px;
                display: flex;
                align-items: center;

                color: #000000;

            }




        }

        .aboutParagraph {
            position: relative;
            width: 80%;
            text-align: center;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 44px;
            margin: auto;

            color: #000000;
            top: 55px;

        }

        /* “ANDU” vise à motiver les élèves, étudiants, educators et employés en rendant la révision plus interactive et en fournissant des retours immédiats, tout en intégrant des formats de leçons variés, des QCM générés automatiquement et un suivi de la progression, Elle cherche à résoudre ces problèmes et à améliorer l’expérience d’apprentissage pour tous les acteurs impliqués. */

        /* Horizontal Divider */

        .HistoryLine {
            position: absolute;
            height: 2px;
            left: 0px;
            right: 0px;
            top: 47px;
            width: 80%;
            margin: auto;
            top: 700px;

            background: #636363;

            .historyPoints {
                /* Background */

                position: absolute;
                width: 15px;
                height: 15px;
                left: 0px;
                top: -6.5px;

                background: #000000;
                border-radius: 10px;

                h5 {
                    /* Heading 3 → 2010 */

                    position: absolute;
                    width: 41.24px;
                    height: 27px;
                    left: 0px;
                    bottom: 20px;

                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 24px;
                    line-height: 27px;
                    /* identical to box height, or 150% */

                    color: #000000;


                }

            }

        }

        /* Background */
        .mois {
            position: absolute;
            width: 180;
            height: 420px;
            left: 0px;
            top: -50px;

            background: #D5EBFF;
            border-radius: 4px;

            .moisLayer {
                /* Background */
                position: absolute;
                width: 81.06px;
                height: 24px;
                left: 0px;
                top: 70px;

                background: #D5EBFF;
                border-radius: 4px;

                /* November */

                h5 {
                    position: relative;
                    left: 8px;

                    text-align: center;

                    font-family: 'Roboto';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 14px;


                    color: #124366;

                }

            }

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
        </nav>
    </header>
    <a href="#login" class="btn btn-login">
        <div class="button-text-nav">Prenez rendez-vous</div>
    </a>
    <div class="hero">
        <img id="heroImg" src="{{ asset('../apprendImage.jpg') }}" alt="Apprentissage en ligne">
        <img id="Rocket" src="{{ asset('../5143537-removebg-preview 1.png') }}" alt="Rocket">
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
        <div class="hero-text-container">
            <div class="heroText">
                <h1>Favoriser l'apprentissage, n'importe quand, n`importe où !</h1>
                <h3> L'un des systèmes de gestion de l'apprentissage les plus innovants, un outil facile qui enrichira et facilitera la vie des éducateurs et des étudiants, améliorant ainsi leur expérience et apportant des changements positifs.</h3>
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
                <div class="buttonContainer">
                    <button class="DemoButton">Voir un Demo</button>
                </div>
            </div>
        </div>
    </div>
    <a href="#login" class="btn btn-login">
        <div class="button-text-nav">Prenez rendez-vous</div>
    </a>
    <div class="hero">
        <img id="heroImg" src="{{ asset('../apprendImage.jpg') }}" alt="Apprentissage en ligne">
        <img id="Rocket" src="{{ asset('../5143537-removebg-preview 1.png') }}" alt="Rocket">
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
    </div>
    <div class="aboutTitle">Dans les coulisses de ANDU,
        <div class="aboutParagraph">“ANDU” vise à motiver les élèves, étudiants, educators et employés en rendant la révision plus interactive et en fournissant des retours immédiats, tout en intégrant des formats de leçons variés, des QCM générés automatiquement et un suivi de la progression, Elle cherche à résoudre ces problèmes et à améliorer l`expérience d`apprentissage pour tous les acteurs impliqués.</div>
        <div class="histoire">
            Notre Histoire
        </div>
        <div class="HistoryLine">
            <div class=" historyPoints">
                <h5>201X</h5>
                <div class="mois">
                    <div class="moisLayer">
                        <h5>November</h5>
                    </div>
                </div>
            </div>
            <div style="margin-left: 16.6%;" class=" historyPoints">
                <h5>2018</h5>
            </div>
            <div style="margin-left: 33.2%;" class=" historyPoints">
                <h5>2019</h5>
            </div>
            <div style="margin-left: 49.8%;" class=" historyPoints">
                <h5>2020</h5>
            </div>
            <div style="margin-left: 66.4%;" class=" historyPoints">
                <h5>2022</h5>
            </div>
            <div style="margin-left: 83%;" class=" historyPoints">
                <h5>2024</h5>
            </div>
        </div>
    </div>


    <!-- Autres sections comme Avantages, Études de cas, Tarifs, FAQ, etc. -->


</body>

</html>