

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patienteninfo</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
    
    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>


</head>

<body id="reportsPage" class="bg02"">

   
    <div class="container-fluid" id="home">
        <div class="">

        <p class="navbar-brand" href="../login.html">      
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 500;"
            class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;"> Für Ihre Gesundheit da. <b style="font-size: 30px; color: rgb(230,230,250); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;">Sie sind angemeldet als Administrator: <b style= "color: red ; font-size: 40px;"></b></b> </b></h2>
            </p>
         
          
            <div class="container-fluid bg-secondary" id="">
                <div class="col" style="display: inline-block;">
                    <button class="btn btn-primary" style="background-color: red; border-block-end-width: thick; 
                   writing-mode: horizontal-tb;" onclick="window.location.href='/home'";
                       id=" login-button" type="submit" class="btn btn-primary"><b>Ausloggen</b>
                    </button>
                </div>
             
            </div>


        </div>
        <br>
        <!-- row -->
        <div class="col">
            <div class="col">
                <div class="col bg-white  tm-block">
                    <div class="row">

                        <div class=" container-fluid bs-border-color col" id="navbarSupportedContent">
                            <div class="col" style="display: inline-block;">
                                <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;" onclick="window.location.href='add-patient-info-form.php'"";
                                            id=" login-button" type="submit" class="btn btn-primary"><b>Patient hinzufügen</b>
                                </button>
                            </div>
                       


                        </div>
                    </div>
                    <br>
                   
                    <div style="overflow-y:scroll; height:850px;">
                    <div class="table-responsive fs-4">

                        <table id="patient-table"
                            class="table table-hover bg-secondary border-bottom border-white">
                            <caption> <b>Patientendaten</b></caption>
                            <thead>
                                <tr class="bg-warning fw-normal">

                                    <th scope="col" class="text-center text-wrap">id</th>
                                    <th scope="col" class="text-center text-wrap">Vorname</th>
                                    <th scope="col" class="text-center text-wrap">Nachname</th>
                                    <th scope="col" class="text-center text-wrap">Geschlecht</th>
                                    <th scope="col" class="text-center text-wrap">Geburtstag</th>
                                    <th scope="col" class="text-center text-wrap">Alter</th>
                                    <th scope="col" class="text-center text-wrap">Adresse</th>
                                    <th scope="col" class="text-center text-wrap">Pflegegrad</th>
                                    <th scope="col" class="text-center text-wrap">Grosse</th>
                                    <th scope="col" class="text-center text-wrap">Ver. Nr.</th>
                                    <th scope="col" class="text-center text-wrap">Kontakt</th>
                                    <th scope="col" class="text-center text-wrap">Auf.Datum</th>
                                    <th scope="col" class="text-center text-wrap">Operationen</th>

                                </tr>
                            </thead>
                           

                            <tbody class="fw-normal">
                                @foreach ($data as $item)
                                @php
                                $dob = new DateTime($item->geburtstag);
		                        $today   = new DateTime('today');
                                $alter = $dob->diff($today)->y;
                                @endphp
                                <tr class='text-center text-white align-middle'>
                                <td>{{$item->id}}</td>
                                <td>{{$item->vorname}}</td>
                                <td>{{$item->nachname}}</td>
                                <td>{{$item->geschlecht}}</td>
                                <td>{{$item->geburtstag}}</td>
                                <td>{{$alter}}</td>
                                <td>{{$item->adresse}}</td>
                                <td>{{$item->pflegegrad}}</td>
                                <td>{{$item->grosse}}</td>
                                <td>{{$item->versicherungsnummer}}</td>
                                <td>{{$item->kontakt}}</td>
                                <td>{{$item->aufnahmedatum}}</td>
                                <td> 
                                    <form class= 'd-inline' action="{{ route('med',['vers' => $item->versicherungsnummer,'patinfo' => $item->versicherungsnummer]) }}"  method='post'>
                                        @csrf
                                        <button  class='d-inline btn btn-warning btn-sm' type='submit' value='med-requset'
                                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                                        id='btn' >Med.
                                        </button>
                                    </form>
                                    <form class= 'd-inline' action='' method='post'>

                                        <button  class='d-inline btn btn-light btn-sm' type='submit' value='med-requset'
                                            style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                                            id='btn' >Profile.
                                        </button>
                                    </form>
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
            </div>

        </div>
        <br>
        <div class="row fs-5">
          
          <div class="col">

              <div class="bg-white tm-block">
              <center>
              <b>Pflegegrad</b>
              </center>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                     
                          <canvas id="myChart" style="width:100%;max-width:100%"></canvas>

                          <script>
                            var g1=0;
                            var g2=0;
                            var g3=0;
                            var g4=0;
                            var g5=0;
                            
                           // const dataX = ;
                            for(let i = 0 ; i < dataX.length; i++) {
                                if (dataX[i]== 1) {
                                    g1++;
                                }else if (dataX[i]== 2) {
                                    g2++;
                                }else if (dataX[i]== 3) {
                                    g3++;
                                }
                                else if (dataX[i]== 4) {
                                    g4++;
                                }
                                else if (dataX[i]== 5) {
                                    g5++;
                                }

                            };
                            var barColors = ["green", "blue","orange","brown","grey"];
                            const dataXpflegegrad = [1,2,3,4, 5]; // 
                            var yValues = [g1, g2,g3,g4,g5];
                            new Chart("myChart", {
                                type: "bar",
                                data: {
                                    labels: dataXpflegegrad,
                                    datasets: [{
                                        backgroundColor: barColors,
                                    data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    title: {
                                    display: true,
                                    text: ""
                                    }
                                }
                                });
                          </script>
                 

              </div>
          </div>
          <div class="col">

              <div class="bg-white tm-block">
              <center>
              <b>Gender</b>
              </center>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                     
                          <canvas id="myChart2" style="width:100%;max-width:100%"></canvas>
                          @php
                                $herrCount = 0;
                                $frauCount = 0;
                                $dritteCount = 0;
                            @endphp

                            @foreach ($data as $item)
                                @php
                                    $dob = new DateTime($item->geburtstag);
                                    $today = new DateTime('today');
                                    $alter = $dob->diff($today)->y;
                                @endphp
                                @if ($item->geschlecht == 'Herr')
                                    @php
                                        $herrCount++;
                                    @endphp
                                @elseif ($item->geschlecht == 'Frau')
                                    @php
                                        $frauCount++;
                                    @endphp
                                @else
                                    @php
                                        $dritteCount++;
                                    @endphp
                                @endif
                            @endforeach

                            <script>
                                const dataXgeschlecht2 = ['Man', 'Frau', 'Dritte'];
                                var barColor2 = ["blue", "blue", "blue"];
                                var yValues2 = [{{ $herrCount }}, {{ $frauCount }}, {{ $dritteCount }}];
                                new Chart("myChart2", {
                                    type: "bar",
                                    data: {
                                        labels: dataXgeschlecht2,
                                        datasets: [{
                                            backgroundColor: barColor2,
                                            data: yValues2
                                        }]
                                    },
                                    options: {
                                        legend: { display: false },
                                        title: {
                                            display: true,
                                            text: ""
                                        }
                                    }
                                });
                            </script>

                 

              </div>
              
          </div>
          <div class="col fs-5">

              <div class="bg-white tm-block">
              <center>
              <b>Alter</b>
              </center>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                     
                          <canvas id="myChart3" style="width:100%;max-width:100%"></canvas>

                          <script>
                            var a =0;
                            var b =0;
                            var c =0;

                            const dataXAlter;
                            
                            const age_arr=[];
                           
                            function calculate_age(dob) { 
                                    var diff_ms = Date.now() - dob.getTime();
                                    var age_dt = new Date(diff_ms); 
                                
                                    return Math.abs(age_dt.getUTCFullYear() - 1970);
                                };
                            
                            for(let i = 0 ; i < dataXAlter.length; i++) {
                                age_arr[i]=  calculate_age(new Date(dataXAlter[i]));
                            };

                            for (let k = 0; k < age_arr.sort().length; k++) {
                            if (age_arr[k]<50) {
                                    a++;
                                }else if (age_arr[k]>=50 && age_arr[k]<=75) {
                                    b++;
                                }else if (age_arr[k]>75) {
                                   c++;
                                }
                            
                           }

                           const dataX_alter_gruppen = ['<50', '50 bis 75','> 75']; 
                            var barColor3 = ["green","orange","grey"];
                            var yValuesAlters = [a, b , c];
                            new Chart("myChart3", {
                                type: "bar",
                                data: {
                                    labels: dataX_alter_gruppen,
                                    datasets: [{
                                    backgroundColor: barColor3,
                                    data: yValuesAlters
                                    }]
                                },
                                options: {
                                      
                                      scales: { 
                                          yAxes: [{ ticks: { min: 1, max: 10 } }],
                                      },
                                      legend: { display: false,
                                         
                                       },
                                     
                                     
                                  }
                                });
                          </script>
                 

              </div>
          </div>
    </div>
    <footer class="row tm-mt-small">
       
    </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->

</body>

</html>
