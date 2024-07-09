<!DOCTYPE html>
<html>

<head>
    <title>History and Buffer Timelines</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1000px;
            padding: 20px;
            margin: 20px;
        }

        .historyContainer {
            padding: 20px 0;
        }

        .HistoryLine {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 2px;
            background: #636363;
            position: relative;
        }

        .historyPoints {
            width: 15px;
            height: 15px;
            background: #000;
            border-radius: 50%;
            position: relative;
        }

        .historyPoints::after {
            content: attr(data-year);
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            color: #333;
        }

        .HistoryTable {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .HistoryTable th,
        .HistoryTable td {
            padding: 10px;
            text-align: left;
        }

        .HistoryTable th {
            background: #124366;
            color: #fff;
            font-weight: normal;
        }

        .HistoryTable td {
            background: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }

        .HistoryTable .mois p {
            background: #D5EBFF;
            border-radius: 4px;
            text-align: center;
            padding: 5px 10px;
        }

        .TableInfo a {
            color: #2C4BFF;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        @if(isset($histories) && isset($bufferTimelines))
        <div class="historyContainer">
            <div class="HistoryLine">
                @foreach($histories as $history)
                <div class="historyPoints" data-year="{{ $history->year }}"></div>
                @endforeach
            </div>
            <table class="HistoryTable">
                <thead>
                    <tr>
                        @foreach($bufferTimelines as $timeline)
                        <th class="mois">
                            <p>{{ $timeline->year }}</p>
                        </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr class="TableInfo">
                        @foreach($histories as $history)
                        <td>
                            <strong>{{ $history->month }}</strong><br>
                            {{ $history->event }}<br>
                            <a href="#">Read more</a>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        @else
        <p>Aucune donnée d'historique disponible pour le moment.</p>
        @endif
    </div>
</body>

</html>