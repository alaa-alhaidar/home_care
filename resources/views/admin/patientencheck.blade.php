

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitalzeichens</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>
<style>
      @media print {
            .print-content {
                display: none;
            }
        }
</style>


</head>

<body class="bg02">

    <div class="container-fluid" id=""">
        <div class="col" id=" "">
        <p class="navbar-brand" href="../login.html">      
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 500;"
            class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;"> Für Ihre Gesundheit da. <b style="font-size: 30px; color: rgb(230,230,250); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;">Sie sind angemeldet als Administrator: <b style= "color: red ; font-size: 40px;"></b></b> </b></h2>
            </p>


        <div class="container-fluid bg-secondary" id="">

            <button style="background-color: lightgrey; border-block-end-width: thick; 
            writing-mode: horizontal-tb;" onclick="window.location.href='/home'";
                id=" login-button" type="submit" class="btn btn-primary"><b>Ausloggen</b>
            </button>
         
            <div class="col" style="display: inline-block;">
                <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;" onclick="window.location.href='/patinfo'"";
                                            id=" login-button" type="submit" class="btn btn-primary">
                    <b>Patienteninfo</b>
                </button>
                <br>
            </div>
            <br>
        </div>
        <br>
        <div class="bg-white" id="navbarSupportedContent">
            <br>
            <div class="container-fluid" id=" home"">
                @foreach ($patinfo as $pat)
                @endforeach
                <h2 style=" font-size: 50px; color: rgb(235, 27, 27); font-family:'Gill Sans', 'Gill Sans MT' ,
                Calibri, 'Trebuchet MS' , sans-serif; font-weight: 500;" class="tm-block-title mt-3">
                <b>Pflegebedürftig: Geb. {{$pat->geburtstag}}, Freisch. Code. {{$pat->versicherungsnummer}}.</b>
              
                </h2>

                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline ' action="{{ route('vz',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-warning btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >Vitalzeichen
                        </button>
                    </form>
                </div>
                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('med',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >Medikamente
                        </button>
                    </form>
                </div>

                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('vz',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >Bericht
                        </button>
                    </form>
                </div>
                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('allProph',['vers' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >Massnahmen
                        </button>
                    </form>
                </div>
                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('vz',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >Diagnosen
                        </button>
                    </form>
                </div>
             
                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('vz',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >Übersicht
                        </button>
                    </form>
                </div>

            </div>

            <br>


        </div>
        <br>

        <!-- row -->
        <div class="row no-gutters">
            <div class="col">

                <div class="bg-white tm-block">
                    <div class="row">

                        <div class=" container-fluid bs-border-color col" id="navbarSupportedContent">

                            <div class="col" style="display: inline-block;">
                                <button style="background-color: lightgrey; border-block-end-width: thick; 
                                                    writing-mode: horizontal-tb;"
                                    onclick="window.location.href='patienten-profile.php?versicherungsnummer='"";
                                                        id=" login-button" type="submit"
                                    class="btn btn-primary"><b>Profile</b>
                                </button>
                            </div>
                            <div class="col" style="display: inline-block;">
                                <button style="background-color: lightgrey; border-block-end-width: thick; 
                                                    writing-mode: horizontal-tb;" onclick="window.location.href='#p'"";
                                                        id=" login-button" type="submit" class="btn btn-primary">
                                    <b>#</b>
                                </button>
                            </div>
                         
                        </div>
                        <div style="background-color:white;overflow-y:scroll; height:750px;">
                            <div class="row fs-5">
                                <br>
                                <div class=" col-lg-12" >
                                    <br>
                                  
                                    <div class="table-responsive" >

                                        <table id="patient-table"
                                          
                                            class="container-fluid table table-hover bg-secondary border-bottom border-white">
                                            <caption> <b>Patientencheck</b></caption>
                                            <thead>
                                                <tr class="container-fluid tm-bg-gray bg-warning">

                                                    <th scope="col" class="text-center">id</th>
                                                    <th scope="col" class="text-center">F. Code</th>
                                                    <th scope="col" class="text-center">RR-Systolisch</th>
                                                    <th scope="col" class="text-center">RR-Diastolisch</th>
                                                    <th scope="col" class="text-center">Puls</th>
                                                    <th scope="col" class="text-center">Temperatur</th>
                                                    <th scope="col" class="text-center">Gewicht</th>
                                                    <th scope="col" class="text-center">BMI</th>
                                                    <th scope="col" class="text-center">Checkdatum</th>
                                                    <th scope="col" class="text-center">Operations</th>
                                                </tr>
                                            </thead>

                                            <tbody class="">
                                               
                                                @foreach ($vital as $item)
                                                @php
                                               
                                                $systolischArray = $vital->pluck('rr_systolisch')->toArray();
                                                $diastolischArray = $vital->pluck('rr_diastolisch')->toArray();
                                                $createdTimeArray = $vital->pluck('createdTime')->toArray();
                                                $gewichtArray = $vital->pluck('gewicht')->toArray();
                                                $pulsArray = $vital->pluck('puls')->toArray();
                                                if(empty($createdTimeArray)){
                                                    $createdTimeArray=[0];
                                                }
                                                @endphp
                                            
                                                <tr class='text-center text-white align-middle'>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->versicherungsnummer}}</td>
                                                <td>{{$item->rr_systolisch}}</td>
                                                <td>{{$item->rr_diastolisch}}</td>
                                                <td>{{$item->puls}}</td>
                                              
                                                <td>{{$item->temp}}</td>
                                                <td>{{$item->gewicht}}</td>
                                                <td>{{$item->bmi}}</td>
                                                <td>{{$item->createdTime}}</td>
                                                <td> 
                                                 
                                                    <form class= 'd-inline' action='' method='post'>
                
                                                        <button  class='d-inline btn btn-success btn-sm' type='submit' value='med-requset'
                                                                style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                                                                id='btn' >Ändern.
                                                        </button>
                                                    </form>
                                                    <form class= 'd-inline' action='' method='post'>
                
                                                        <button  class='d-inline btn btn-dark btn-sm' type='submit' value='med-requset'
                                                                    style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                                                                    id='btn' >Löschen.
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                                @endforeach
       
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            @foreach ($patinfo as $pat)
                            @endforeach
                            <div class="row"></div>
                            <div class="col print-content" style="display: inline-block;">
                                <button class="btn fs-3" style="display: inline-block; background-color: blue;
                                color:white" onclick="printJSON()">Ausdrücken</button>
                              
                            </div>
                            <div class="col" style="display: inline-block;">
                                <button class="btn fs-3" style="display: inline-block;background-color: green;
                                color:white" onclick="saveJSON()">Speichern</button>
                              </div>
                              
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="bg-white tm-block">
                    <div style="background-color:gainsboro;">
                    <div class="col-lg-12 fs-1" style="background-color:darkgrey">

                        <p class="text-center"
                            style="display: flex;justify-content: center;  color:darkred; font-family: 'Times New Roman', Times, serif;padding-top: 10px;">
                            Vitalzeichen hinzufügen</p>

                        </div>
                        <div class="row fs-5">
                           
                            <div class=" col-lg-11" style="height:715px">
                                <br>
                                <form  id="form" action="{{ route('insert-check',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}" method="post">
                                    @csrf

                                    <br>
                                  
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="name"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Plutdruck/Systolisch

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="rr_systolisch" aria-describedby="inputGroup-sizing-sm" placeholder="Gebe Blutdruck systolisch ein"
                                            required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="name"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Plutdruck/Diastolisch

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="rr_diastolisch" aria-describedby="inputGroup-sizing-sm" placeholder="Gebe Blutdruck diastolisch ein"
                                            required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="description"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Puls
                                        </label>

                                        <input type="text" placeholder="Puls" id="puls" name="puls" type="text"
                                            class="form-control" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="description"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Temperatur
                                        </label>

                                        <input type="text" placeholder="Temperatur (xx.x)" id="puls" name="temp" type="text"
                                            class="form-control" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="category"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Gewicht
                                        </label>
                                        <input placeholder="Gebe Gewicht ein" id="gewicht" name="gewicht" type="text"
                                            class="form-control" required>
                                    </div>


                                    <div class="d-grid gap-2 ">
                                        <button
                                            style="margin-left: 30px; margin-bottom: 20px;background-color: dodgerblue;"
                                            type="submit" class="btn btn-primary">Vitalzeichens hinzufügen</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>




        </div>
        <div>
            <br>
        </div>
       
        <div class="row fs-4">
          
            <div class="col">

                <div class="bg-white tm-block">
                <center>
                <b>Plutdruck</b>
                </center>
                <canvas id="myChart1" style="width:100%;max-width:90%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                <script type="text/javascript">
                  document.addEventListener("DOMContentLoaded", function() {
                    var ctx = document.getElementById('myChart1').getContext('2d');
                    
                    var myChart = new Chart(ctx, {
                      type: 'line',
                      data: {
                        labels: @json($createdTimeArray),
                        datasets: [{
                          label: 'Systolisch',
                          data: @json($systolischArray),
                          backgroundColor: 'rgba(0, 123, 255, 0.3)',
                          borderColor: 'rgba(0, 123, 255, 1)',
                          pointStyle: 'circle',
                          pointRadius: 10,
                          pointHoverRadius: 15,
                            borderWidth: 1
                        }, {
                          label: 'Diastolisch',
                          data: @json($diastolischArray),
                          backgroundColor: 'rgba(255, 99, 132, 0.3)',
                          borderColor: 'rgba(255, 99, 132, 1)',
                          pointStyle: 'circle',
                                pointRadius: 10,
                                pointHoverRadius: 15,
                          borderWidth: 1
                        }]
                      },
                      options: {
                      
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero: true
                            }
                          }]
                        }
                      }
                    });
                  });
                </script>

                </div>
            </div>
           
            
            
            <div class="col">
                <div class="bg-white tm-block">
                    <center>
                      <b>Puls</b>
                    </center>
                    <canvas id="myChart2" style="width:100%;max-width:90%"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                    <script type="text/javascript">
                      document.addEventListener("DOMContentLoaded", function() {
                        var ctx = document.getElementById('myChart2').getContext('2d');
                        var myChart = new Chart(ctx, {
                          type: 'line',
                          data: {
                            labels: @json($createdTimeArray),
                            datasets: [{
                              label: 'Puls',
                              data: @json($pulsArray),
                              backgroundColor: 'rgba(0, 123, 255, 0.3)',
                              borderColor: 'rgba(0, 123, 255, 1)',
                              pointStyle: 'circle',
                              pointRadius: 10,
                              pointHoverRadius: 15,
                              borderWidth: 1
                            }]
                          },
                          options: {
                           
                            scales: {
                              yAxes: [{
                                ticks: {
                                  beginAtZero: true
                                }
                              }]
                            }
                          }
                        });
                      });
                    </script>
                    <script>
                    function saveJSON() {
                        var data = {!! json_encode($vital) !!};
                        var jsonData = JSON.stringify(data, null, 2);
                        var filename = "yourVitalzeichens.json";
                        var blob = new Blob([jsonData], { type: "application/json" });
                        if (window.navigator.msSaveOrOpenBlob) {
                            // For IE and Edge browsers
                            window.navigator.msSaveOrOpenBlob(blob, filename);
                        } else {
                            // For other modern browsers
                            var link = document.createElement("a");
                            link.href = URL.createObjectURL(blob);
                            link.download = filename;
                            link.click();
                            URL.revokeObjectURL(link.href);
                        }
                    }
                    </script>

                  </div>
                  
            </div>
            <div class="col">

                <div class="bg-white tm-block">
                <center>
                <b>Gewicht</b>
                </center>
                <canvas id="myChart3" style="width:100%;max-width:90%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                <script type="text/javascript">
                    const data = {
                        labels: @json($createdTimeArray),
                        datasets: [
                            {
                                label: 'Gewicht',
                                data: @json($gewichtArray),
                                borderColor: '',
                                backgroundColor: 'rgba(0, 123, 255, 0.3)',
                                pointStyle: 'circle',
                                pointRadius: 10,
                                pointHoverRadius: 15
                            }
                        ]
                    };

                    const config = {
                        type: 'line',
                        data: data,
                        options: {
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: (ctx) => 'Point Style: ' + ctx.chart.data.datasets[0].pointStyle
                                }
                            }
                        }
                    };

                    // Initialize the chart
                    new Chart('myChart3', config);
                </script>


                   <script>
                function printJSON() {
                var v = document.getElementById("patient-table").cloneNode(true);
                var operationsColumn = v.querySelectorAll("td:nth-last-child(1), th:nth-last-child(1)");
                    operationsColumn.forEach(function(column) {
                        column.remove();
                    });
                var printWindow = window.open();

                printWindow.document.write('<h4 style="font-size: 20px; color: rgb(235, 27, 27); font-family:\'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif; font-weight: 500;" class="tm-block-title mt-3"><b>Patienten: {{$pat->geschlecht}} {{$pat->nachname}}, {{$pat->vorname}}, Geb. {{$pat->geburtstag}}. Vers. {{$pat->versicherungsnummer}}</b></h4>');

                printWindow.document.write('<html><head><title>Patientinfor.</title></head><body>');
                printWindow.document.write(v.outerHTML);
                printWindow.document.write('</body></html>');
                printWindow.print();
                printWindow.close();
                }
                   </script>

                </div>
                
            </div>
        </div>
        <footer>
            <br>
            <div class="bg-white fs-3">
                <b style="text-align: center;color:red;">Alaa Al Haidar TU Berlin Abschlussarbeit Fakultaet IV</b>
            </div>
            
        </footer>
</body>



</html>