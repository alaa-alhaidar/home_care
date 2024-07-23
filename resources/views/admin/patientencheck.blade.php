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
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
</head>


<body class="bg02">


    <div class="container-fluid " id="home">
        <div class=" col" id=" home">
            <p class=" navbar-brand" href="../login.html">
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:arial ; font-weight: 500;"
                class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:arial  
            ; font-weight: 200;"> Ihre digitale Helfer. <b style="font-size: 30px; color: rgb(230,230,250); font-family: arial 
            
            ; font-weight: 200;">Sie sind angemeldet als Administrator: <b
                            style="color: red ; font-size: 40px;">{{$pat->f_code}}</b></b> </b></h2>
            </p>


            <div class="container-fluid bg-secondary" id="">
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
                        style=" padding-left:1250px ;display: inline-block">
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

            <div class="bg-white" id="navbarSupportedContent">
                <br>
                <div class="container-fluid" id=" home"">
               
                 <h2 style=" font-size: 50px; color: rgb(235, 27, 27); font-family:sans-serif; font-weight: 500;"
                    class="tm-block-title mt-3">
                    <b>Patienten: Name. {{$pat->nachname}}, Vorname. {{$pat->vorname}}, Geb. {{$pat->geburtstag}}, f.
                        Code.
                        {{$pat->f_code}}.</b>

                    </h2>

                    <div class="col" style="display: inline-block;">
                        <form class='d-inline '
                            action="{{ route('vz',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                            method='post'>
                            @csrf
                            <button class='btn btn-warning btn-lg' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 30px;'
                                id='btn'> <span class="material-symbols-outlined align-middle fs-1">
                                    vital_signs
                                </span> Vitalzeichen
                            </button>
                        </form>
                    </div>
                    <div class="col" style="display: inline-block;">
                        <form class='d-inline'
                            action="{{ route('med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                            method='post'>
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
                        <form class='d-inline'
                            action="{{ route('report',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                            method='post'>
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
                        <form class='d-inline' action="{{ route('allProph',['f_code' => $pat->f_code]) }}"
                            method='post'>
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

                                <form class='d-inline'
                                    action="{{ route('pat_info',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                                    method='get'>
                                    @csrf
                                    <button class='d-inline btn btn-warning btn-sm' type='submit' value='med-requset'
                                        style='' id='btn'>
                                        <span class="material-symbols-outlined align-middle fs-1">
                                            person
                                        </span><b class='align-middle fs-3'>Profile</b>
                                    </button>
                                </form>

                                <div class="col print-content d-inline" style="display: inline-block;">
                                    <button class="btn fs-3" style="display: inline-block; background-color: blue;
                            color:white" onclick="printJSON()"><span
                                            class="material-symbols-outlined align-middle fs-1">
                                            print
                                        </span>
                                    </button>
                                    <button class="btn fs-3" style="display: inline-block;background-color: green;
                            color:white" onclick="saveJSON()"> <span
                                            class="material-symbols-outlined align-middle fs-1">
                                            download
                                        </span>

                                    </button>
                                    <button class="btn fs-3" style="display: inline-block;background-color: blue;
                            color:white" onclick="generateAndSendPDF()"> <span
                                            class="material-symbols-outlined align-middle fs-1">
                                            send
                                        </span>

                                    </button>
                                </div>

                            </div>
                            <div style="background-color:white;overflow-y:scroll; height:675px;">
                                <div class="row fs-3">

                                    <div class=" col-lg-12">
                                        <br>

                                        <div class="table-responsive">

                                            <table id="patient-table"
                                                class="container-fluid table table-hover bg-secondary border-bottom border-white">
                                                <caption> <b>Patientencheck</b></caption>
                                                <thead>
                                                    <tr class="container-fluid tm-bg-gray bg-warning">

                                                        <th scope="col" class="text-center">id</th>

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
                                                @php
                                                $i=1;
                                                @endphp
                                                <tbody class="">

                                                    @foreach ($vital as $item)
                                                    @php
                                                    $systolischArray = $vital->pluck('rr_systolisch')->toArray();
                                                    $diastolischArray = $vital->pluck('rr_diastolisch')->toArray();
                                                    $createdTimeArray = $vital->pluck('createdTime')->toArray();
                                                    $gewichtArray = $vital->pluck('gewicht')->toArray();
                                                    $pulsArray = $vital->pluck('puls')->toArray();

                                                    // Provide default values if arrays are empty
                                                    if (empty($systolischArray)) {
                                                    $systolischArray = [0];
                                                    }
                                                    if (empty($diastolischArray)) {
                                                    $diastolischArray = [0];
                                                    }
                                                    if (empty($createdTimeArray)) {
                                                    $createdTimeArray = [now()->toDateString()]; // Set to today's date
                                                    }
                                                    if (empty($gewichtArray)) {
                                                    $gewichtArray = [0];
                                                    }
                                                    if (empty($pulsArray)) {
                                                    $pulsArray = [0];
                                                    }
                                                    @endphp


                                                    <tr class='text-center text-white align-middle'>
                                                        <td>{{$i++}}</td>

                                                        <td>{{$item->rr_systolisch}}</td>
                                                        <td>{{$item->rr_diastolisch}}</td>
                                                        <td>{{$item->puls}}</td>

                                                        <td>{{$item->temp}}</td>
                                                        <td>{{$item->gewicht}}</td>
                                                        <td>{{$item->bmi}}</td>
                                                        <td>{{$item->created_time}}</td>
                                                        <td>
                                                            <form class='d-inline'
                                                                action="{{ route('delete-med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code ,'id' => $item->id]) }}"
                                                                method='post'>
                                                                @csrf
                                                                <button class='d-inline btn btn-danger btn-sm'
                                                                    type='submit' value='med-requset'
                                                                    style='background-color:red;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                                                    id=''>
                                                                    <span class="material-symbols-outlined"
                                                                        style="color: white">
                                                                        delete
                                                                    </span>
                                                                </button>
                                                            </form>
                                                            <form class='d-inline'
                                                                action="{{ route('add-med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                                                                method='post'>
                                                                @csrf
                                                                <button class='d-inline btn btn-success btn-sm'
                                                                    type='submit' value='med-requset'
                                                                    style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                                                    id='btn'>
                                                                    <span class="material-symbols-outlined"
                                                                        style="color: white">
                                                                        edit
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

                                <div class=" col-lg-11" style="height:657px">
                                    <br>
                                    <form id="form"
                                        action="{{ route('insert-check',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                                        method="post">
                                        @csrf

                                        <br>

                                        <div class="input-group mb-3">
                                            <label style="padding-left: 20px;" for="name"
                                                class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Plutdruck/Systolisch

                                            </label>

                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                name="rr_systolisch" aria-describedby="inputGroup-sizing-sm"
                                                placeholder="Gebe Blutdruck systolisch ein" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <label style="padding-left: 20px;" for="name"
                                                class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Plutdruck/Diastolisch

                                            </label>

                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                name="rr_diastolisch" aria-describedby="inputGroup-sizing-sm"
                                                placeholder="Gebe Blutdruck diastolisch ein" required>
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

                                            <input type="text" placeholder="Temperatur (xx.x)" id="puls" name="temp"
                                                type="text" class="form-control" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <label style="padding-left: 20px;" for="category"
                                                class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Gewicht
                                            </label>
                                            <input placeholder="Gebe Gewicht ein" id="gewicht" name="gewicht"
                                                type="text" class="form-control" required>
                                        </div>

                                        <br>
                                        <div class="d-grid gap-2 ">
                                            <button
                                                style="margin-left: 30px; margin-bottom: 20px;background-color: dodgerblue;"
                                                type="submit" class="btn btn-primary">
                                                <span class="material-symbols-outlined  align-middle"
                                                    style="color: black; font-size: 60px;">
                                                    add
                                                </span></b>
                                            </button>

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
                        @php
                        $systolischArray = $vital->pluck('rr_systolisch')->toArray();
                        $diastolischArray = $vital->pluck('rr_diastolisch')->toArray();
                        $createdTimeArray = $vital->pluck('created_time')->toArray();
                        $gewichtArray = $vital->pluck('gewicht')->toArray();
                        $pulsArray = $vital->pluck('puls')->toArray();

                        // Provide default values if arrays are empty
                        if (empty($systolischArray)) {
                        $systolischArray = [0];
                        }
                        if (empty($diastolischArray)) {
                        $diastolischArray = [0];
                        }
                        if (empty($createdTimeArray)) {
                        $createdTimeArray = [now()->toDateString()]; // Set to today's date
                        }
                        if (empty($gewichtArray)) {
                        $gewichtArray = [0];
                        }
                        if (empty($pulsArray)) {
                        $pulsArray = [0];
                        }
                        @endphp
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
                                        backgroundColor: 'rgba(255, 255, 255, 0.3)', // White background
                                        borderColor: 'rgba(0, 123, 255, 1)',
                                        pointBackgroundColor: 'rgba(0, 123, 255, 1)', // Filled circles
                                        pointStyle: 'circle',
                                        pointRadius: 10, // Adjust the radius as needed
                                        pointHoverRadius: 15, // Adjust the hover radius as needed
                                        fill: false,
                                        borderWidth: 3
                                    }, {
                                        label: 'Diastolisch',
                                        data: @json($diastolischArray),
                                        backgroundColor: 'rgba(255, 255, 255, 0.3)', // White background
                                        borderColor: 'rgba(255, 99, 132, 1)', // Corrected color value
                                        pointBackgroundColor: 'rgba(255, 99, 132, 1)', // Filled circles
                                        pointStyle: 'circle',
                                        pointRadius: 10, // Adjust the radius as needed
                                        pointHoverRadius: 15, // Adjust the hover radius as needed
                                        fill: false,
                                        borderWidth: 3
                                    }]
                                },
                                options: {
                                    scales: {
                                        xAxes: [{
                                            type: 'category', // Use 'category' if labels are categorical (dates or other discrete values)
                                            position: 'bottom',
                                            ticks: {
                                                fontSize: 15 // Increase x-axis labels font size
                                            },
                                            scaleLabel: {
                                                display: true,
                                                labelString: '[ Check Datum ]',
                                                fontSize: 30 // Increase x-axis title font size
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true,
                                                fontSize: 15 // Increase y-axis labels font size
                                            },
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Diast./Syst. [mmHg]',
                                                fontSize: 30 // Increase y-axis title font size
                                            }
                                        }]
                                    },
                                    legend: {
                                        labels: {
                                            fontSize: 18 // Increase legend font size
                                        }
                                    },

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
                                        pointBackgroundColor: 'rgba(0, 123, 255, 1)', // Filled circles
                                        pointStyle: 'circle',
                                        pointRadius: 10, // Adjust the radius as needed
                                        pointHoverRadius: 15, // Adjust the hover radius as needed
                                        fill: false,
                                        borderWidth: 3
                                    }]
                                },
                                options: {
                                    scales: {
                                        xAxes: [{
                                            type: 'category', // Use 'category' if labels are categorical (dates or other discrete values)
                                            position: 'bottom',
                                            ticks: {
                                                fontSize: 15 // Increase x-axis labels font size
                                            },
                                            scaleLabel: {
                                                display: true,
                                                labelString: '[ Check Datum ]',
                                                fontSize: 30 // Increase x-axis title font size
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true,
                                                fontSize: 15 // Increase y-axis labels font size
                                            },
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Puls',
                                                fontSize: 30 // Increase y-axis title font size
                                            }
                                        }]
                                    },
                                    legend: {
                                        labels: {
                                            fontSize: 20 // Increase legend font size
                                        }
                                    },

                                }
                            });
                        });
                        </script>
                        <script>

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
                        document.addEventListener("DOMContentLoaded", function() {
                            var ctx = document.getElementById('myChart3').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: @json($createdTimeArray),
                                    datasets: [{
                                        label: 'Gewicht',
                                        data: @json($gewichtArray),
                                        backgroundColor: 'rgba(0, 123, 255, 0.3)',
                                        borderColor: 'rgba(0, 123, 255, 1)',
                                        pointBackgroundColor: 'rgba(0, 123, 255, 1)', // Filled circles
                                        pointStyle: 'circle',
                                        pointRadius: 10, // Adjust the radius as needed
                                        pointHoverRadius: 15, // Adjust the hover radius as needed
                                        fill: false,
                                        borderWidth: 3
                                    }]
                                },
                                options: {
                                    scales: {
                                        xAxes: [{
                                            type: 'category', // Use 'category' if labels are categorical (dates or other discrete values)
                                            position: 'bottom',
                                            ticks: {
                                                fontSize: 15 // Increase x-axis labels font size
                                            },
                                            scaleLabel: {
                                                display: true,
                                                labelString: '[ Check Datum ]',
                                                fontSize: 30 // Increase x-axis title font size
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true,
                                                fontSize: 15 // Increase y-axis labels font size
                                            },
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Gewicht',
                                                fontSize: 30 // Increase y-axis title font size
                                            }
                                        }]
                                    },
                                    legend: {
                                        labels: {
                                            fontSize: 20 // Increase legend font size
                                        }
                                    },

                                }
                            });
                        });
                        </script>
                        <script>

                        </script>

                    </div>

                </div>

                <script>
                async function saveJSON() {
                    const {
                        jsPDF
                    } = window.jspdf;

                    var data = @json($vital); // Blade syntax to pass PHP variable to JavaScript
                    var jsonData = JSON.stringify(data, null, 2);

                    const doc = new jsPDF();

                    doc.setFontSize(12);
                    doc.text("Vital Data", 10, 10);

                    var margin = 10;
                    var pageHeight = doc.internal.pageSize.height;
                    var yPosition = 20;
                    var lineHeight = 10;

                    // Split text into lines that fit the page width
                    var lines = doc.splitTextToSize(jsonData, 190); // 190 is the width considering margins

                    lines.forEach((line, index) => {
                        if (yPosition + lineHeight > pageHeight - margin) {
                            doc.addPage(); // Add a new page if the content exceeds the page height
                            yPosition = margin;
                        }
                        doc.text(line, margin, yPosition);
                        yPosition += lineHeight;
                    });

                    var filename = "yourVitalzeichens.pdf";
                    doc.save(filename);
                }
                </script>
                <script>
                function printJSON() {
                    var v = document.getElementById("patient-table").cloneNode(true);
                    var operationsColumn = v.querySelectorAll("td:nth-last-child(1), th:nth-last-child(1)");
                    operationsColumn.forEach(function(column) {
                        column.remove();
                    });
                    var printWindow = window.open();

                    printWindow.document.write(
                        '<h4 style="font-size: 20px; color: rgb(235, 27, 27); font-family:\'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif; font-weight: 500;" class="tm-block-title mt-3"><b>Patienten:  Geb. {{$pat->geburtstag}}. Freischalter Code. {{$pat->f_code}}</b></h4>'
                    );

                    printWindow.document.write('<html><head><title>Patientinfor.</title></head><body>');
                    printWindow.document.write(v.outerHTML);
                    printWindow.document.write('</body></html>');
                    printWindow.print();
                    printWindow.close();
                }
                </script>
                <script type="text/javascript">
                emailjs.init('ALAA'); // Replace 'YOUR_USER_ID' with your actual EmailJS user ID

                async function generateAndSendPDF() {
                    const {
                        jsPDF
                    } = window.jspdf;

                    var data = @json($vital); // Blade syntax to pass PHP variable to JavaScript
                    var jsonData = JSON.stringify(data, null, 2);

                    const doc = new jsPDF();

                    doc.setFontSize(12);
                    doc.text("Vital Data", 10, 10);

                    var margin = 10;
                    var pageHeight = doc.internal.pageSize.height;
                    var yPosition = 20;
                    var lineHeight = 10;

                    // Split text into lines that fit the page width
                    var lines = doc.splitTextToSize(jsonData, 190); // 190 is the width considering margins

                    lines.forEach((line, index) => {
                        if (yPosition + lineHeight > pageHeight - margin) {
                            doc.addPage(); // Add a new page if the content exceeds the page height
                            yPosition = margin;
                        }
                        doc.text(line, margin, yPosition);
                        yPosition += lineHeight;
                    });

                    var pdfBlob = doc.output('blob');

                    var formData = new FormData();
                    formData.append('file', pdfBlob, 'yourVitalzeichens.pdf');

                    emailjs.send('ALAA', 'ALAA', {
                            to_email: 'alaa.alhaidar@hotmail.com', // Replace with the recipient's email address
                            message: 'Please find attached your vital data PDF.'
                        }, 'ALAA')
                        .then(function(response) {
                            console.log('SUCCESS!', response.status, response.text);
                            alert('PDF sent successfully!');
                        }, function(error) {
                            console.log('FAILED...', error);
                            alert('Failed to send the PDF: ' + error);
                        });
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