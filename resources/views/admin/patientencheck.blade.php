

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
                                        writing-mode: horizontal-tb;" onclick="window.location.href='patient-info.php'"";
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
                <b>Patienten: {{$pat->geschlecht}} {{$pat->nachname}}, {{$pat->vorname}}. Geb. {{$pat->geburtstag}}, Vers. {{$pat->versicherungsnummer}}.</b>
              
                </h2>

                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline ' action="{{ route('vz',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-secondary btn-lg' type='submit' value='med-requset'
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
                                                    <th scope="col" class="text-center">Vers.</th>
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
                                                <td>{{$item->created_at}}</td>
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
                            <div class="print-content" >
                                <button class="btn fs-3" style="background-color: blue;color:white" onclick="printJSON()">Ausdrücken</button>
                              
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
                                <form id="form"
                                    action="add-patientencheck-datenbank.php?versicherungsnummer="
                                    method="post" class="tm-edit-product-form">

                                    <br>
                                  
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="name"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Plutdruck/Systolisch

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="rr" aria-describedby="inputGroup-sizing-sm" placeholder="Gebe rr systolisch ein"
                                            required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="name"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Plutdruck/Diastolisch

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="rr_diastolisch" aria-describedby="inputGroup-sizing-sm" placeholder="Gebe rr_diastolisch ein"
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
                <b>Puls</b>
                </center>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                       
                            <canvas id="myChart" style="width:100%;max-width:90%"></canvas>

                            <script>
                                
                               
                    
                                new Chart("myChart", {
                                    type: "line",
                                    data: {
                                        labels: dataY,// y achse
                                        datasets: [{  // x achse
                                            fill: false,
                                            lineTension: 0,
                                            backgroundColor: "rgba(0,0,255,1.0)",
                                            borderColor: "rgba(0,0,255,0.1)",
                                            data: dataX
                                        }]
                                    },
                                    options: {
                                      
                                        scales: { 
                                            yAxes: [{ ticks: { min: 50, max: 100 } }],
                                        },
                                        legend: { display: false,
                                           
                                         },
                                       
                                       
                                    }
                                });
                            </script>
                   

                </div>
            </div>
           
            
            
            <div class="col">

                <div class="bg-white tm-block">
                <center>
                <b>Blutdruck</b>
                </center>
              
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                       
                            <canvas id="myChart4" style="width:100%;max-width:90%"></canvas>

                            <script>
                                
                              
                    
                                new Chart("myChart4", {
                                    type: "line",
                                    data: {
                                        labels: dataY4,// y achse
                                        datasets: [{  // x achse
                                            fill: false,
                                            lineTension: 0,
                                            backgroundColor: "rgba(0,0,255,1.0)",
                                            borderColor: "rgba(0,0,255,0.1)",
                                            data: dataX4
                                        }]
                                    },
                                    options: {
                                      
                                      scales: { 
                                          yAxes: [{ ticks: { min: 50, max: 200 } }],
                                      },
                                      legend: { display: false,
                                         
                                       },
                                     
                                     
                                  }
                                });
                            </script>
                   

                </div>
                
            </div>
            <div class="col">

                <div class="bg-white tm-block">
                <center>
                <b>Gewicht</b>
                </center>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                            <canvas id="myChart2" style="width:100%;max-width:90%"></canvas>

                            <script>
                                
                               
                    
                                new Chart("myChart2", {
                                    type: "line",
                                    data: {
                                        labels: dataY2,// y achse
                                        datasets: [{  // x achse
                                            fill: false,
                                            lineTension: 0,
                                            backgroundColor: "rgba(0,0,255,1.0)",
                                            borderColor: "rgba(0,0,255,0.1)",
                                            data: dataX2
                                        }]
                                    },
                                    options: {
                                      
                                      scales: { 
                                          yAxes: [{ ticks: { min: 50, max: 100 } }],
                                      },
                                      legend: { display: false,
                                         
                                       },
                                     
                                     
                                  }
                                });
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
</body>

<footer>

</footer>

</html>