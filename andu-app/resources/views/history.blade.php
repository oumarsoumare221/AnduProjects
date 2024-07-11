<!DOCTYPE html>
<html>

<head>
    <title>History and Buffer Timelines</title>
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">

</head>

<body>
        @if(isset($histories) && isset($bufferTimelines))
        {{-- <div class="historyContainer">
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
        </div> --}}
        <div class="historyContainer">
            <div class="HistoryLine">
                <div class="historyPoints"></div>
                <div class="historyPoints"></div>
                <div class="historyPoints"></div>
                <div class="historyPoints"></div>
                <div class="historyPoints"></div>
                <div class="historyPoints"></div>
                <div class="historyPoints" style="background-color: transparent;"></div>
            </div>
            <div class="spaceBetween"></div>
            <table class="HistoryTable">
                <thead>
                    @foreach($histories as $history)
                    <th class="mois" scope="col"> <p>{{ $history->month }}</p></th>
                    @endforeach
            
               
                 
                </thead>
                <tr class="TableInfo">
             
                    @foreach($histories as $history)
                    <td>
                        {{ $history->event }}<br>
                        <a href="#">Read more</a>
                    </td>
                    @endforeach
                </tr>

                
                <tr class="TableInfo">
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td class="dotted">dsfn</td>
                    <td></td>
                    <td></td>
                  </tr>
                 
              
            </table>
        
            <div class="rotatedtable" role="region" tabindex="0">
                <table>
                    <thead>
                        <tr class="TableInfo">
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($histories as $history)
                        <tr class="TableInfo upper">
                            <td class="mois"> <p>{{ $history->month }}</p></td>
                           
                        </tr>
                        <tr class="TableInfo">
                            <td>
                            {{ $history->event }}<br>
                            <a href="#">Read more</a>
                        </td>
                        </tr>
                        <tr class="space">
                            <td class="spacing"></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                </div>
        </div>        
        @else
        <p>Aucune donnée d'historique disponible pour le moment.</p>
        @endif
</body>

</html>