@foreach ($patinfo as $pat)
@endforeach




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PflegePro Vital values</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
</head>


<body class="bg02">


    <div class="" id="home">
        <div class=" col" id=" home">
            <p class=" navbar-brand" href="../login.html">
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:arial ; font-weight: 500;"
                class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:arial  
            ; font-weight: 200;"> Ihre digitale Helfer. <b style="font-size: 30px; color: rgb(230,230,250); font-family: arial 
            
            ; font-weight: 200;">Sie sind angemeldet als Administrator: <b
                            style="color: red ; font-size: 40px;">{{$pat->f_code}}</b></b> </b></h2>
            </p>


            <div class="container-fluid bg-secondary" id="" style="height: 4vh;">
                <div class="col" style="display: inline-block;">
                    <button class="btn btn-primary" style="background-color: red; border-block-end-width: thick; 
                   writing-mode: horizontal-tb;" onclick="window.location.href='/home'" ; id=" login-button"
                        type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2" style="color:white">
                            logout
                        </span><b>Ausloggen</b>
                    </button>

                </div>
                <div class="col " style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="window.location.href='/patinfo'" ;
                        id=" login-button" type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2">
                            import_contacts
                        </span><b>Patienteninfo</b>
                    </button>
                    <br>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="back()" ; id=" login-button"
                        type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2">
                            arrow_back
                        </span>

                    </button>
                    <br>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="forward()" ; id=" login-button"
                        type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2">
                            arrow_forward
                        </span>
                    </button>
                    <br>

                </div>
                <div class=" col align-middle text-center text-wrap" style="display: inline-block;color:white;">
                    <span class="material-symbols-outlined align-middle text-center text-wra fs-1"
                        style=" padding-left:1500px  ;display: inline-block">
                        calendar_month
                    </span>
                    <p class="align-middle text-center text-wrap fs-1 "
                        style=" padding-left:10px ;display: inline-block" id="date"></p>

                    <b>
                        <span class="material-symbols-outlined align-middle text-center text-wra fs-1">
                            schedule

                        </span>
                        <p class="align-middle text-center text-wrap fs-1 "
                            style="padding-left:10px ;display: inline-block" id="time"></p>
                    </b>


                </div>

            </div>



            <!-- row -->



            <div class=" bg-white tm-block" style="height: 55vh">
                <h2 style=" font-size: 50px; color: rgb(235, 27, 27); font-family:sans-serif; font-weight: 500;"
                    class="tm-block-title mt-3">
                    <b>Patienten: Name. {{$pat->nachname}}, Vorname. {{$pat->vorname}}, Geb. {{$pat->geburtstag}},
                        f.
                        Code.
                        {{$pat->f_code}}.</b>

                </h2>
                <div class="col" style="display: inline-block;">
                        <form class='d-inline ' action="{{ route('vz', ['f_code' => $pat->f_code]) }}" method="post">

                            @csrf
                            <button class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'> <span class="material-symbols-outlined align-middle fs-3">
                                    vital_signs
                                </span> Vitalzeichen
                            </button>
                        </form>
                    </div>
                    <div class="col" style="display: inline-block;">
                        <form class='d-inline' action="{{ route('med',['f_code' => $pat->f_code]) }}" method='post'>
                            @csrf
                            <button class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'><span class="material-symbols-outlined align-middle fs-3">
                                    pill
                                </span> Medikamente
                            </button>
                        </form>
                    </div>

                    <div class="col" style="display: inline-block;">
                        <form class='d-inline' action="{{ route('report',['f_code' => $pat->f_code]) }}" method='post'>
                            @csrf
                            <button class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'>
                                <span class="material-symbols-outlined align-middle fs-3">
                                    topic
                                </span> Bericht
                            </button>
                        </form>
                    </div>
                    <div class="col" style="display: inline-block;">
                        <form class='d-inline' action="{{ route('allProph',['f_code' => $pat->f_code]) }}" method='post'>
                            @csrf
                            <button class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'>
                                <span class="material-symbols-outlined align-middle fs-3">
                                    medical_information
                                </span> Massnahmen
                            </button>
                        </form>
                    </div>

                <div class="  bs-border-color col" id="navbarSupportedContent">
                    <br>
                 
                    <div class=" table-responsive" style="background-color:white;overflow-y:scroll; height:800px;"style="font-size: 25px;">
                        <br>
                        <table id="patient-table"
                            class="table table-hover bg-secondary border-bottom border-white" style="font-size: 25px;">
                            <caption> <b>Patientendaten</b></caption>
                            <thead>
                                <tr class="bg-warning fw-normal">

                                    <th scope="col" class="text-center text-wrap">id</th>
                                  
                                    <th scope="col" class="text-center text-wrap">Geschlecht</th>
                                    <th scope="col" class="text-center text-wrap">Name</th>
                                    <th scope="col" class="text-center text-wrap">Vorname</th>
                                    <th scope="col" class="text-center text-wrap">Geburtstag</th>
                                    <th scope="col" class="text-center text-wrap">Alter</th>
                                 
                                    <th scope="col" class="text-center text-wrap">Pflegegrad</th>
                                    <th scope="col" class="text-center text-wrap">Grosse</th>
                                    <th scope="col" class="text-center text-wrap">Adresse</th>
                                    <th scope="col" class="text-center text-wrap">Auf.Datum</th>
                                    <th scope="col" class="text-center text-wrap">Operationen</th>

                                </tr>
                            </thead>
                           @php
                            $i=1;
                           @endphp

                            <tbody class="fw-normal">
                                @foreach ($patinfo as $item)
                                @php
                                $dob = new DateTime($item->geburtstag);
		                        $today   = new DateTime('today');
                                $alter = $dob->diff($today)->y;
                               
                                @endphp
                                <tr class='text-center text-white align-middle'>
                                <td>{{$i++}}</td>
                                <td>{{$item->geschlecht}}</td>
                                <td>{{$item->nachname}}</td>
                                <td>{{$item->vorname}}</td>
                                <td>{{$item->geburtstag}}</td>
                                <td>{{$alter}}</td>
                                <td>{{$item->pflegegrad}}</td>
                                <td>{{$item->grosse}}</td>
                                <td>{{$item->adresse}}</td>
                                <td>{{$item->aufnahmedatum}}</td>
                                <td> 
                                  
                                    <form class= 'd-inline' action="{{ route('pat_info',['f_code' => $item->f_code,'patinfo' => $item->f_code]) }}" method='get'>
                                        @csrf
                                        <button  class='d-inline btn btn-info btn-sm' type='submit' value='med-requset'
                                            style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                                            id='btn' >
                                            <span class="material-symbols-outlined">
                                            person
                                            </span>
                                        </button>
                                    </form>
                                    <form class='d-inline'
                                            action="{{ route('add-med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                                            method='post'>
                                            @csrf
                                            <button class='d-inline btn btn-success btn-sm' type='submit'
                                                value='med-requset'
                                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                                id='btn'>
                                                <span class="material-symbols-outlined" style="color: white">
                                                    edit
                                                </span>
                                            </button>
                                        </form>
                                        <form class='d-inline'
                                            action="{{ route('delete-med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code ,'id' => $item->id]) }}"
                                            method='post'>
                                            @csrf
                                            <button class='d-inline btn btn-danger btn-sm' type='submit'
                                                value='med-requset'
                                                style='background-color:red;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                                id=''>
                                                <span class="material-symbols-outlined" style="color: white">
                                                    delete
                                                </span>
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
 
   
    </div>



    <br>
    <div class="row fs-4" style="height:20vh;">

        <div class="col">

            <div class="bg-white tm-block">
            <center>
              <b>Pflegegrad</b>
              </center>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

              <canvas id="pflegegrad" style="width:100%;max-width:100%"></canvas>
              @php
                    $g1 = 0;
                    $g2 = 0;
                    $g3 = 0;
                    $g4 = 0;
                    $g5 = 0;
                @endphp

                @foreach ($patinfo as $item)
                 
                    @if ($item->pflegegrad == '1')
                        @php
                            $g1++;
                        @endphp
                    @elseif ($item->pflegegrad == '2')
                        @php
                            $g2++;
                        @endphp
                    @elseif ($item->pflegegrad == '3')
                        @php
                            $g3++;
                        @endphp
                        @elseif ($item->pflegegrad == '4')
                        @php
                            $g4++;
                        @endphp
                        @elseif ($item->pflegegrad == '5')
                        @php
                            $g5++;
                        @endphp
                      
                @endif
                @endforeach

                <script>
                    const data1 = ['G1', 'G2', 'G3', 'G4', 'G5'];
                    var barColor2 = ["green", "blue", "grey", "black", "red"];
                    var yValues2 = [{{ $g1 }}, {{ $g2 }}, {{ $g3 }}, {{ $g4 }}, {{ $g5 }}];
                    new Chart("pflegegrad", {
                        type: "bar",
                        data: {
                            labels: data1,
                            datasets: [{
                                backgroundColor: barColor2,
                                data: yValues2
                            }]
                        },
                        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        fontSize: 30 // Adjust the font size as needed
                    }
                }],
                yAxes: [{
                    ticks: {
                        fontSize: 30 // Adjust the font size as needed
                    }
                }]
            },
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
          <div class="col">

              <div class="bg-white tm-block">
              <center>
              <b>Gender</b>
              </center>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

                          <canvas id="gender" style="width:100%;max-width:100%"></canvas>
                          @php
                                $herrCount = 0;
                                $frauCount = 0;
                                $dritteCount = 0;
                            @endphp

                            @foreach ($patinfo as $item)
                            
                                @if ($item->geschlecht == 'Mann')
                                    @php
                                        $herrCount++;
                                    @endphp
                                @elseif ($item->geschlecht == 'Frau')
                                    @php
                                        $frauCount++;
                                    @endphp
                                    @else ($item->geschlecht == 'Dritte')
                                    @php
                                        $dritteCount++;
                                    @endphp
                                @endif
                            @endforeach

                            <script>
    const data2 = ['Mann', 'Frau', 'Dritte'];
    var barColor2 = ["blue", "pink", "yellow"];
    var yValues2 = [{{ $herrCount }}, {{ $frauCount }}, {{ $dritteCount }}];

    new Chart("gender", {
        type: "bar",
        data: {
            labels: data2,
            datasets: [{
                backgroundColor: barColor2,
                data: yValues2
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        fontSize: 30 // Adjust the font size as needed
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true, // Make sure the Y axis starts from 0
                        min: 0,            // Explicitly set the minimum value to 0
                        fontSize: 30       // Adjust the font size as needed
                    }
                }]
            },
            legend: { display: false },
            title: {
                display: true,
                text: "Gender Distribution"
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

              <canvas id="alter" style="width:100%;max-width:100%"></canvas>
              @php
                    $grosser80 = 0;
                    $grosser60 = 0;
                    $grosser20 = 0;
                @endphp

                @foreach ($patinfo as $item)
                    @php
                        $dob = new DateTime($item->geburtstag);
                        $today = new DateTime('today');
                        $alter = $dob->diff($today)->y;
                    @endphp
                    @if ($alter >=80)
                        @php
                             $grosser80++;
                        @endphp
                    @elseif ($alter >=60 && $alter <80)
                        @php
                            $grosser60++;
                        @endphp
                    @elseif($alter >=20 && $alter <60)
                        @php
                            $grosser20++;
                        @endphp
                    @endif
                @endforeach

                <script>
                    const data3 = ['20 bis 59 J', '60 bis 79 J', 'alter als 79 J'];
                    var barColor2 = ["green", "blue", "red"];
                    var yValues2 = [{{ $grosser20 }}, {{ $grosser60 }}, {{ $grosser80 }}];
                    new Chart("alter", {
                        type: "bar",
                        data: {
                            labels: data3,
                            datasets: [{
                                backgroundColor: barColor2,
                                data: yValues2
                            }]
                        },
                        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        fontSize: 30 // Adjust the font size as needed
                    }
                }],
                yAxes: [{
                    ticks: {
                        fontSize: 30 // Adjust the font size as needed
                    }
                }]
            },
            legend: { display: false },
            title: {
                display: true,
                text: ""
            }
        }
                    });
                </script>

    </div>

   
</body>




</html>