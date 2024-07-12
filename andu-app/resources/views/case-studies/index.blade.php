<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Études de cas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            margin: 0;
            padding: 0;
            color: #333;
        }

        .Casestudy {
            width: 80%;
            max-width: 1000px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .CasTitle {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .case-study-item {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        /** */
        .case-study-item h4 {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .ImgCompany {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px 0 0 10px;
        }

        .CasTextContainer {
            padding: 20px;
            flex: 1;
        }

        .CasTextContainer h4 {
            font-size: 20px;
            margin: 0 0 10px 0;
            color: #124366;

        }

        .CasTextContainer p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
        }

        .infoGrid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .infoGrid .one,
        .infoGrid .two,
        .infoGrid .three,
        .infoGrid .four {
            flex: 1 1 45%;
            margin-bottom: 20px;
            padding: 10px;
            background: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .infoGrid h1 {
            font-size: 24px;
            color: #124366;
            margin: 0 0 10px 0;
        }

        .infoGrid p {
            font-size: 14px;
            line-height: 1.5;
            margin: 0;
        }

        @media (max-width: 768px) {
            .case-study-item {
                flex-direction: column;
            }

            .ImgCompany {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="Casestudy" id="cases">
        <div class="CasTitle">Études de cas</div>
        @foreach($caseStudies as $caseStudy)
        <div class="case-study-item">
            <img class="ImgCompany" src="{{ asset('storage/' . $caseStudy->image) }}" alt="Image de l'étude de cas">
            <div class="CasTextContainer">
                <h4>{{ $caseStudy->title }}</h4>
                <p>{{ $caseStudy->description }}</p>
            </div>
            <div class="infoGrid">
                <!-- Utiliser les détails de l'étude de cas pour remplir ces sections -->
                <div class="one">
                    <h1>+{{ $caseStudy->years_of_experience }}</h1>
                    <p>{{ $caseStudy->details }}</p>
                </div>
                <div class="two">
                    <h1>+{{ $caseStudy->years_of_experience }}</h1>
                    <p>Années d'expériences</p>
                </div>
                <div class="three">
                    <h1>+{{ $caseStudy->users_using_lms }}</h1>
                    <p>Utilisateurs qui ont utilisé LMS</p>
                </div>

                <div class="four">
                    <!-- <p>Avec {{ $caseStudy->client }}, l'un des défis rencontrés a été {{ $caseStudy->challenge }}. Cela a impliqué {{ $caseStudy->solution }}.</p> -->
                    <p>{{ $caseStudy->challenge }}</p>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>