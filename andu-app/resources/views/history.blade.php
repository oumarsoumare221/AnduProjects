<!DOCTYPE html>
<html>

<head>
    <title>History and Buffer Timelines</title>
    <link rel="stylesheet" href="{{ url('CSS/landingpage.css') }}">

</head>

<body>
    <div class="container">
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
            
                    <th class="mois" scope="col"><p><</p></th>
                    <th class="mois" scope="col"><p>January</p></th>
                    <th class="mois" scope="col"><p>August</p></th>
                    <th class="mois"  scope="col"><p>December</p></th>
                    <th class="mois" scope="col"><p>December</p></th>
                </thead>
                <tbody>
                    <tr class="TableInfo">
                 
                        @foreach($histories as $history)
                        <td>
                            {{ $history->event }}<br>
                            <a href="#">Read more</a>
                        </td>
                        @endforeach
        
                        <td>
                            @foreach($histories as $history)
                            <td>
                                {{ $history->event }}<br>
                                <a href="#">Read more</a>
                            </td>
                            @endforeach
                            <div class="dotted">dbfb</div>
                        </td>
                        <td>
                            Our founders had visa
                            troubles and started
                            traveling while growing
                            Buffer, the team grew to
                            7 people by August  <br>
                            <a href="">Read more</a>
                        </td>
                        <td>
                            Buffer's first all-company
                            retreat took place in
                            Lake Tahoe  <br>
                            <a href="">Read more</a>
                            <div class="dotted">dbfb</div>
                            <div class="dotted">dbfb</div>
                        </td>
                        <td>
                            We raised $3.5M in
                            Series A funding  <br>
                            <a href="">Read more</a>
                        </td>
                        <td>
                            We acquired Respondly  <br>
                            <a href="">Read more</a>
                        </td>
                      </tr>\\
                      
                      <div class="movein">
                      <tr class="TableInfo">
                        <th scope="row"></th>
                        <td class="mois"><p>December</p></td>
                        <td></td>
                        <td class="mois"><p>December</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </div>
                      <tr class="TableInfo">
                        <th scope="row"></th>
                        <td >Buffer raised a small
                            seed round of $330,000,
                            to bring total funding to
                            $450,000 <br>
                        <a href="">Read more</a>
                    </td>
                        <td></td>
                        <td>
                            We reached 1 Million
                            users <br>
                            <a href="">Read more</a>
                            <div class="dotted">dbfb</div>
                            <div class="dotted">dbfb</div>
                        </td>
                      </tr>
        
                      <tr class="TableInfo Tdsmaller">
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td class="mois"><p>December</p></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr class="TableInfo">
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>
                            We published the whole companies salaries
                            <br> 
                            <a href="">Read more</a>
                        </td>
                        <td></td>
                        <td></td>
                      </tr>
        
                </tbody>
            </table>
        
            <div class="rotatedtable" role="region" tabindex="0">
                <table>
                    <thead>
                        <tr class="TableInfo">
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="TableInfo upper">
                            <td class="mois"><p>November</p></td>
                        </tr>
                        <tr class="TableInfo longer">
                            <td>  Buffer was created as
                                part of a Startup Sprint <br>
                            <a href="">Read more</a></td>
                        </tr>
                        <tr class="spacer">
                            <!-- Spacer row without content -->
                        </tr>
                        <tr class="TableInfo upper">
                            <td class="mois"><p>August</p></td>
                        </tr>
                        <tr class="TableInfo longer">
                            <td>
                                Buffer was accepted into
                                AngelPad startup
                                accelerator, with initial
                                $120,000 investment <br>
                                <a href="">Read more</a>
                            </td>
                        </tr>
                        <tr class="spacer">
                            <!-- Spacer row without content -->
                        </tr>
                        <tr class="TableInfo up">
                            <td class="mois"><p>January</p></td>
                        </tr>
                        <tr class="TableInfo">
                            <td>
                                Our founders had visa troubles
                                 and started traveling while growing 
                                 Buffer, the team grew to 
                                 7 people by August
                                <br>
                                <a href="">Read more</a>
                            </td>
                        </tr>
                        <tr class="spacer">
                            <!-- Spacer row without content -->
                        </tr>
                        <tr class="TableInfo up">
                            <td class="mois"><p>August</p></td>
                        </tr>
                        <tr class="TableInfo uppers">
                            <td>
                                Buffer's first all-company 
                                retreat took place in Lake Tahoe
                                <br>
                                <a href="">Read more</a>
                            </td>
                        </tr>
                        <tr class="TableInfo">
                            <td class="mois"><p>December</p></td>
                        </tr>
                        <tr class="TableInfo">
                            <td>
                                We raised $3.5M in Series A funding
        
                                <br>
                                <a href="">Read more</a>
                            </td>
                        </tr>
                        <tr class="spacer">
                            <!-- Spacer row without content -->
                        </tr>
                        <tr class="TableInfo down">
                            <td class="mois"><p>December</p></td>
                        </tr>
                        <tr class="TableInfo">
                            <td class="downer" >
                                <br>
                                We acquired Respondly
        
                                <br>
                                <a href="">Read more</a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                </div>
        </div>        
        @else
        <p>Aucune donnée d'historique disponible pour le moment.</p>
        @endif
    </div>
</body>

</html>