<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDU - Landing Page</title>

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
            background-color:#EEEEEE; 
            display: block;
        }

        header {
            background-color: #EEEEEE;
            position: absolute;
            top:0;
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
            bottom:40%;
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
            top:15px;
        }

    
        .hero {
            position: absolute;
            width: 92.8%;
            display: block;
            height:80.16%;
            top:13%;
            left: 5%;
        }

        #heroImg {
        position: absolute;
        width: 36.81%;
        height: 59.29%;
        right:0;
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
            top:15%;
            background-color: transparent;
            border: none;
            text-decoration: none;


            }

            input::placeholder{
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


        .DemoButton, .RendezVousButton  {
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
        left:60%;
        top:35%;

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
            top:40%;

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
        top:55px;

        }
        
        /* “ANDU” vise à motiver les élèves, étudiants, educators et employés en rendant la révision plus interactive et en fournissant des retours immédiats, tout en intégrant des formats de leçons variés, des QCM générés automatiquement et un suivi de la progression, Elle cherche à résoudre ces problèmes et à améliorer l’expérience d’apprentissage pour tous les acteurs impliqués. */
        
    
       



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
    <a href="#login" class="btn btn-login"><div class="button-text-nav">Prenez rendez-vous</div></a>
    <div class="hero">
        <img id="heroImg" src="{{ asset('../apprendImage.jpg') }}" alt="Apprentissage en ligne">
        <img id="Rocket" src="{{ asset('../5143537-removebg-preview 1.png') }}" alt="Rocket">
       <div class="Circle"><svg width="301" height="301" viewBox="0 0 301 301" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M119.821 297.582C118.801 297.367 117.781 297.141 116.763 296.904L24.9823 232.639C24.4117 231.763 23.8508 230.882 23.2997 229.997L119.821 297.582Z" fill="black"/>
        <path d="M145.168 300.691C144.424 300.663 143.681 300.63 142.937 300.592L12.5652 209.305C12.2746 208.619 11.9893 207.931 11.7091 207.242L145.168 300.691Z" fill="black"/>
        <path d="M165.218 300.091C164.602 300.15 163.985 300.206 163.367 300.258L5.89091 189.992C5.72869 189.394 5.57018 188.795 5.41538 188.195L165.218 300.091Z" fill="black"/>
        <path d="M182.333 297.435C181.797 297.55 181.26 297.662 180.723 297.772L2.29195 172.833C2.21075 172.291 2.13249 171.748 2.05721 171.205L182.333 297.435Z" fill="black"/>
        <path d="M197.43 293.367C196.953 293.523 196.474 293.676 195.996 293.827L0.775196 157.132C0.753151 156.63 0.733599 156.129 0.716566 155.627L197.43 293.367Z" fill="black"/>
        <path d="M210.979 288.215C210.548 288.403 210.117 288.589 209.685 288.773L0.84243 142.54C0.867407 142.071 0.894601 141.602 0.924007 141.133L210.979 288.215Z" fill="black"/>
        <path d="M223.255 282.172C222.864 282.387 222.472 282.601 222.079 282.812L2.20409 128.854C2.26866 128.413 2.33521 127.971 2.40377 127.53L223.255 282.172Z" fill="black"/>
        <path d="M234.435 275.361C234.079 275.6 233.721 275.838 233.363 276.074L4.67684 115.946C4.77609 115.529 4.87718 115.112 4.98012 114.695L234.435 275.361Z" fill="black"/>
        <path d="M244.636 267.865C244.311 268.126 243.985 268.385 243.658 268.643L8.13834 103.731C8.26896 103.335 8.4013 102.94 8.53538 102.545L244.636 267.865Z" fill="black"/>
        <path d="M253.939 259.74C253.643 260.021 253.346 260.301 253.048 260.579L12.5046 92.1491C12.6643 91.7737 12.8256 91.3987 12.9886 91.0241L253.939 259.74Z" fill="black"/>
        <path d="M262.401 251.025C262.132 251.326 261.862 251.625 261.591 251.922L17.7174 81.16C17.9046 80.8037 18.0933 80.4479 18.2836 80.0926L262.401 251.025Z" fill="black"/>
        <path d="M270.058 241.748C269.816 242.067 269.572 242.384 269.328 242.7L23.7371 70.7359C23.9506 70.3979 24.1657 70.0605 24.3823 69.7237L270.058 241.748Z" fill="black"/>
        <path d="M276.937 231.925C276.72 232.261 276.503 232.597 276.283 232.932L30.5379 60.8587C30.7777 60.5381 31.0185 60.2188 31.2605 59.9007L276.937 231.925Z" fill="black"/>
        <path d="M283.035 221.556C282.845 221.911 282.654 222.265 282.461 222.618L38.1167 51.5262C38.3828 51.224 38.65 50.9231 38.9181 50.6235L283.035 221.556Z" fill="black"/>
        <path d="M288.33 210.625C288.168 210.998 288.004 211.371 287.838 211.744L46.4961 42.7544C46.7896 42.4712 47.084 42.1894 47.3794 41.909L288.33 210.625Z" fill="black"/>
        <path d="M292.783 199.104C292.65 199.497 292.514 199.89 292.377 200.283L55.7129 34.5689C56.0351 34.3057 56.3583 34.0441 56.6825 33.7839L292.783 199.104Z" fill="black"/>
        <path d="M296.339 186.954C296.236 187.369 296.132 187.784 296.026 188.199L65.821 27.0075C66.1743 26.7659 66.5285 26.5259 66.8835 26.2876L296.339 186.954Z" fill="black"/>
        <path d="M298.915 174.119C298.847 174.558 298.777 174.996 298.704 175.435L76.8985 20.1249C77.286 19.907 77.6743 19.691 78.0635 19.4767L298.915 174.119Z" fill="black"/>
        <path d="M300.395 160.516C300.366 160.982 300.334 161.448 300.301 161.914L89.0586 14.0004C89.485 13.8094 89.9121 13.6206 90.3401 13.4337L300.395 160.516Z" fill="black"/>
        <path d="M300.602 146.022C300.619 146.52 300.634 147.018 300.646 147.516L102.47 8.75193C102.942 8.59276 103.415 8.43598 103.889 8.28156L300.602 146.022Z" fill="black"/>
        <path d="M299.262 130.444C299.336 130.982 299.408 131.52 299.476 132.058L117.395 4.56363C117.925 4.44402 118.455 4.32727 118.986 4.2134L299.262 130.444Z" fill="black"/>
        <path d="M295.903 113.453C296.056 114.045 296.205 114.637 296.35 115.23L134.278 1.74558C134.885 1.67936 135.492 1.61679 136.1 1.55792L295.903 113.453Z" fill="black"/>
        <path d="M289.61 94.4071C289.884 95.0817 290.153 95.7581 290.417 96.4362L153.968 0.893532C154.695 0.909715 155.423 0.931192 156.15 0.957961L289.61 94.4071Z" fill="black"/>
        <path d="M278.019 71.6522C278.545 72.4978 279.062 73.348 279.571 74.2026L178.57 3.48105C179.547 3.66642 180.523 3.86168 181.497 4.06688L278.019 71.6522Z" fill="black"/>
        <path d="M220.324 18.0786C225.895 21.0131 231.344 24.3304 236.636 28.0365C241.929 31.7426 246.91 35.728 251.573 39.959L220.324 18.0786Z" fill="black"/>
        </svg>
        </div>
        <div class="hero-text-container">
        <div class="heroText">
            <h1>Favoriser l'apprentissage, n'importe quand, n`importe où !</h1>
            <h3> L'un des systèmes de gestion de l'apprentissage les plus innovants, un outil facile qui enrichira et facilitera la vie des éducateurs et des étudiants, améliorant ainsi leur expérience et apportant des changements positifs.</h3>
        </div>
        <div class="send-email">
            <input placeholder="Veuillez entrer votre adresse e-mail pour vous inscrire..." type="text">
            <button class="send-email-button">
                <svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="41.1429" height="40" fill="url(#pattern0_49_379)"/>
                <defs>
                <pattern id="pattern0_49_379" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_49_379" transform="matrix(0.00195312 0 0 0.00200893 0 -0.0142857)"/>
                </pattern>
                <image id="image0_49_379" width="512" height="512" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAACAKADAAQAAAABAAACAAAAAAAL+LWFAAAoU0lEQVR4Ae3dWcxtZXkA4AIC1VpBETwHGY7MCooV59IiWJzqcGGb1Ismxt6Ypjbxor3oRS862F40MY1JUy9MjJemSYMah1pNbE0VrYiKs8DhMBwQRwTEkb4fuMjuzz+stf/17fUNz05e9v73v/Za3/us78v7rrXPOfzar3kQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAAAECBAgQIECAwMICxyx8fIcnQIDAqsCZ8cPLI86JOBhx4FfP6fVjIu6MOLryfFu8/ljEDREeBAgQIECAQCUCx8Y4XxjxdxHXRzy4ZhyOz70j4mURJ0R4ECBAgAABAgUKHB9j+rOIOyLWLfo7fe6e2OfbIk6O8CBAgAABAgQKEEhfO74h4saInQr4XO9/L47xFxGPjfAgQIAAAQIEFhK4Io57XcRcBX7sftKfE3hjhAcBAgQIECCwYYG3xvF+HjG2aOfY7l1xfH8+YMMn3uEIECBAoE+BEyPtd0fkKOjr7POTMZbTIjwIECBAgACBTALpr+59KmKdQp3zM7fEmJ6dKWe7JUCAAAECXQucG9kfichZ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"/>
                </defs>
                </svg>
                </button>
        </div>
       
       
       
       
        <div class="buttonContainer"><button class="DemoButton">Voir un Demo</button>
        </div>
    </div>
    </div>
    <div class="aboutTitle">Dans les coulisses de ANDU,
        <div class="aboutParagraph">“ANDU” vise à motiver les élèves, étudiants, educators et employés en rendant la révision plus interactive et en fournissant des retours immédiats, tout en intégrant des formats de leçons variés, des QCM générés automatiquement et un suivi de la progression, Elle cherche à résoudre ces problèmes et à améliorer l`expérience d`apprentissage pour tous les acteurs impliqués.</div>
        <div class="histoire">
            Notre Histoire
        </div>
    </div>
 

    <!-- Autres sections comme Avantages, Études de cas, Tarifs, FAQ, etc. -->

    {{-- <footer>
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
    </footer> --}}
</body>

</html>