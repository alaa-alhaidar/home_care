
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patienten Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>
</head>

<body class="bg02">

    <div class="container-fluid " id="home"">
        <div class=" col" id=" home"">
        <p class=" navbar-brand" href="../login.html">
        <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 500;"
            class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;"> Für Ihre Gesundheit da. <b style="font-size: 30px; color: rgb(230,230,250); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;">Sie sind angemeldet als Administrator: <b
                        style="color: red ; font-size: 40px;">
                    </b></b> </b></h2>
        </p>


        <div class="container-fluid bg-secondary" id="navbarSupportedContent">

            <div class="col" style="display: inline-block;">
                <button style="background-color: red; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;" onclick="window.location.href='/home'"";
                                            id=" login-button" type="submit" class="btn btn-primary"><b>Ausloggen</b>
                </button>
            </div>
         
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
        <div class="bs-border-color col">
            <div class="">
                <div class="container-fluid bg-white tm-block">

                    <div class="col-lg-12" style="background-color:darkgrey">

                        <p class="text-center"
                            style="display: flex;justify-content: center; font-size: 40px; color:darkred; 
                            font-family: 'Times New Roman', Times, serif;padding-top: 0px;">
                            Dekubitusrisiko einschaetzen</p>

                    </div>
                    <div style=" background-color:gainsboro;">
                        <br>
                        <div class="container-fluid">
                            <div style=" background-color:white; height:60px">


                                <form id="risiko"
                                    action="add-dekubitus-check-datenbank.php?versicherungsnummer="
                                    method="post" class="tm-edit-product-form">
                                    <p class="text-center" style="display: flex;justify-content: center; font-size: 40px; color:darkred; 
                                font-family: 'Times New Roman', Times, serif;padding-top: 10px;">
                                        Sensorisches Empfindungsvermögen 
                                            &nbsp;Fähigkeit, adäquat auf druckbedingte Beschwerden zur eagieren 
                                    </p>

                            </div>
                            <br>
                            <div class="form-check form-check-inline radio">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox" id="gridRadios3"
                                        value="1" onclick="selectOnlyThis(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">fehlt
                                                • keine Reaktion auf schmerzhafte Stimuli
                                                mögliche Gründe: Bewusstlosigkeit,
                                                Sedierung
                                                oder
                                                • Störung der Schmerzempfindung durch
                                                Lähmungen, die den größten Teil des
                                                Körpers betreffen (z.B. hoher
                                                Querschnitt)
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox" id="gridRadios3"
                                        value="2" onclick="selectOnlyThis(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                stark eingeschränkt
                                                • eine Reaktion erfolgt nur auf starke
                                                Schmerzreize
                                                • Beschwerden können kaum geäußert
                                                werden (z.B. durch Stöhnen oder
                                                Unruhe)
                                                oder
                                                • Störung der Schmerzempfindung durch
                                                Lähmung, wovon die Hälfte des Körpers
                                                betroffen ist
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox" id="gridRadios3"
                                        value="3" onclick="selectOnlyThis(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                leicht eingeschränkt
                                                • Reaktion auf Ansprache oder
                                                Kommandos
                                                • Beschwerden können aber nicht immer
                                                ausgedrückt werden (z.B. dass die
                                                Position geändert werden soll)
                                                oder
                                                • Störung der Schmerzempfindung durch
                                                Lähmung, wovon eine oder zwei
                                                Extremitäten betroffen sind
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox" id="gridRadios3"
                                        value="4" onclick="selectOnlyThis(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                vorhanden
                                                • Reaktion auf Ansprache, Beschwerden
                                                können geäußert werden
                                                oder
                                                • keine Störung der Schmerzempfindung
                                            </b>

                                        </label>
                                    </span>
                                </div>

                            </div>

                            <br>
                            <!-- 2 -->
                            <div style=" background-color:white; height:50px">
                                <p class="text-center" style="display: flex;justify-content: center; font-size: 40px; color:darkred; 
                                        font-family: 'Times New Roman', Times, serif;padding-top: 0px;">
                                    Feuchtigkeit
                                        Ausmaß, in dem die Haut
                                        Feuchtigkeit ausgesetzt ist
                                    
                                  
                                </p>
                               
                            </div>
                            <br>
                            
                            <div class="form-check form-check-inline radio">

                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox2" id="gridRadios3"
                                        value="1" onclick="selectOnlyThis2(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">ständig feucht
                                                • die Haut ist ständig feucht durch Urin,
                                                Schweiß oder Kot
                                                • immer wenn der Patient gedreht wird,
                                                liegt er im Nassen
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox2" id="gridRadios3"
                                        value="2" onclick="selectOnlyThis2(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                oft feucht
                                                • die Haut ist oft feucht, aber nicht immer
                                                • Bettzeug oder Wäsche muss
                                                mindestens einmal pro Schicht
                                                gewechselt werden
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox2" id="gridRadios3"
                                        value="3" onclick="selectOnlyThis2(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                manchmal feucht
                                                • die Haut ist manchmal feucht, und etwa
                                                einmal pro Tag wird neue Wäsche
                                                benötigt
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox2" id="gridRadios3"
                                        value="4" onclick="selectOnlyThis2(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                selten feucht
                                                • die Haut ist meist trocken
                                                • neue Wäsche wird selten benötigt
                                            </b>

                                        </label>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- 3 -->
                            <div style=" background-color:white; height:50px">
                                <p class="text-center" style="display: flex;justify-content: center; font-size: 40px; color:darkred; 
            font-family: 'Times New Roman', Times, serif;padding-top: 0px;">
                                   Aktivität
                                        Ausmaß der physischen Aktivität
                                   
                                </p>

                            </div>
                            <br>
                            <div class="form-check form-check-inline radio">

                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox3" id="gridRadios3"
                                        value="1" onclick="selectOnlyThis3(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">

                                                bettlägerig
                                                • ans Bett gebunden
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox3" id="gridRadios3"
                                        value="2" onclick="selectOnlyThis3(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                sitzt auf
                                                • kann mit Hilfe etwas laufen
                                                • kann das eigene Gewicht nicht allein
                                                tragen
                                                • braucht Hilfe, um aufzusitzen (Bett,
                                                Stuhl, Rollstuhl
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox3" id="gridRadios3"
                                        value="3" onclick="selectOnlyThis3(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                geht wenig
                                                • geht am Tag allein, aber selten und nur
                                                kurze Distanzen
                                                • braucht für längere Strecken Hilfe
                                                • verbringt die meiste Zeit im Bett oder im
                                                Stuhl
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox3" id="gridRadios3"
                                        value="4" onclick="selectOnlyThis3(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                geht regelmäßig
                                                • geht regelmäßig 2-3 mal pro Schicht
                                                • bewegt sich regelmäßig
                                            </b>

                                        </label>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- 4 -->
                            <div style=" background-color:white; height:50px">
                                <p class="text-center" style="display: flex;justify-content: center; font-size: 40px; color:darkred; 
                                        font-family: 'Times New Roman', Times, serif;padding-top: 0px;">
                                    Mobilität
                                        Fähigkeit, die Position zu wechseln
                                        und zu halten
                                    
                                </p>

                            </div>
                            <br>
                            <div class="form-check form-check-inline radio">

                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox4" id="gridRadios3"
                                        value="1" onclick="selectOnlyThis4(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                komplett immobil
                                                • kann auch keinen geringfügigen
                                                Positionswechsel ohne Hilfe ausführen
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox4" id="gridRadios3"
                                        value="2" onclick="selectOnlyThis4(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                Mobilität stark eingeschränkt
                                                • bewegt sich manchmal geringfügig
                                                (Körper oder Extremitäten)
                                                • kann sich aber nicht regelmäßig allein
                                                ausreichend umlagern
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox4" id="gridRadios3"
                                        value="3" onclick="selectOnlyThis4(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                Mobilität gering eingeschränkt
                                                • macht regelmäßig kleine
                                                Positionswechsel des Körpers und der
                                                Extremitäten
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox4" id="gridRadios3"
                                        value="4" onclick="selectOnlyThis4(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                mobil
                                                • kann allein seine Position umfassend
                                                verändern
                                            </b>

                                        </label>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- 5 -->
                            <div style=" background-color:white; height:50px">
                                <p class="text-center" style="display: flex;justify-content: center; font-size: 40px; color:darkred; 
                                        font-family: 'Times New Roman', Times, serif;padding-top: 0px;">
                                    Ernährung
                                        Ernährungsgewohnheiten
                                    
                                </p>

                            </div>
                            <br>
                            <div class="form-check form-check-inline radio">

                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox5" id="gridRadios3"
                                        value="1" onclick="selectOnlyThis5(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">sehr schlechte Ernährung
                                                • isst kleine Portionen nie auf, sondern
                                                nur 2/3
                                                • isst nur 2 oder weniger Eiweißportionen
                                                (Milchprodukte, Fisch, Fleisch)
                                                • trinkt zu wenig
                                                • nimmt keine Ergänzungskost zu sich
                                                oder
                                                • darf oral keine Kost zu sich nehmen
                                                oder
                                                • nur klare Flüssigkeiten
                                                oder
                                                • erhält Infusionen länger als 5 Tage
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox5" id="gridRadios3"
                                        value="2" onclick="selectOnlyThis5(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                mäßige Ernährung
                                                • isst selten eine normale Essensportion
                                                auf, isst aber im allgemeinen etwa die
                                                Hälfte der angebotenen Nahrung
                                                • isst etwa 3 Eiweißportionen
                                                • nimmt regelmäßig Ergänzungskost zu
                                                sich
                                                oder
                                                • erhält zu wenig Nährstoffe über
                                                Sondenkost oder Infusionen
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox5" id="gridRadios3"
                                        value="3" onclick="selectOnlyThis5(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                adäquate Ernährung
                                                • isst mehr als die Hälfte der normalen
                                                Essensportionen
                                                • nimmt 4 Eiweißportionen zu sich
                                                • verweigert gelegentlich eine Mahlzeit,
                                                nimmt aber Ergänzungskost zu sich
                                                oder
                                                • kann über Sonde oder Infusionen die
                                                meisten Nährstoffe zu sich nehmen
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox5" id="gridRadios3"
                                        value="4" onclick="selectOnlyThis5(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                gute Ernährung
                                                • isst immer die gebotenen Mahlzeiten
                                                auf
                                                • nimmt 4 oder mehr Eiweißportionen zu
                                                sich
                                                • isst auch manchmal zwischen den
                                                Mahlzeiten
                                                • braucht keine Ergänzungskost
                                            </b>

                                        </label>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- 6 -->
                            <div style=" background-color:white; height:50px">
                                <p class="text-center" style="display: flex;justify-content: center; font-size: 40px; color:darkred; 
                                        font-family: 'Times New Roman', Times, serif;padding-top: 0px;">
                                    Reibung und Scherkräfte
                                
                                </p>

                            </div>
                            <br>
                            <div class="form-check form-check-inline radio">

                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox6" id="gridRadios3"
                                        value="1" onclick="selectOnlyThis6(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">Problem
                                                • braucht viel bis massive Unterstützung
                                                bei Lagewechsel
                                                • Anheben ist ohne Schleifen über die
                                                Laken nicht möglich
                                                • rutscht ständig im Bett oder im Roll-/
                                                Stuhl herunter, muss immer wieder
                                                hochgezogen werden
                                                • hat spastische Kontrakturen oder
                                                • ist sehr unruhig (scheuert auf den
                                                Laken)
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox6" id="gridRadios3"
                                        value="2" onclick="selectOnlyThis6(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                potentielles Problem
                                                • bewegt sich etwas allein oder braucht
                                                wenig Hilfe
                                                • beim Hochziehen schleift die Haut nur
                                                wenig über die Laken (kann sich etwas
                                                anheben)
                                                • kann sich über längere Zeit in einer
                                                Lage halten (Stuhl, Rollstuhl)
                                                • rutscht nur selten herunter
                                            </b>

                                        </label>
                                    </span>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="myCheckbox6" id="gridRadios3"
                                        value="3" onclick="selectOnlyThis6(this)">

                                    <span class="ms-3">
                                        <label class="form-check-label" for="gridRadios3">
                                            <b class="text-center fs-5">
                                                kein Problem zur Zeit
                                                • bewegt sich in Bett und Stuhl allein
                                                • hat genügend Kraft, sich anzuheben
                                                • kann eine Position über lange Zeit
                                                halten, ohne herunterzurutschen
                                            </b>

                                        </label>
                                    </span>
                                </div>

                            </div>
                            <br>
                            <div class="d-grid gap-2">
                                <button style="background-color: dodgerblue; color: white"
                                    type="submit" class="btn btn-primary"><b style="font-size: 25px;">Dekubitusrisiko einschaetzen</b> </button>
                            </div>

                            </form>
                            <script>
                                function selectOnlyThis(id) {
                                    var myCheckbox = document.getElementsByName("myCheckbox");
                                    Array.prototype.forEach.call(myCheckbox, function (el) {
                                        el.checked = false;
                                    });
                                    id.checked = true;
                                }

                                function selectOnlyThis2(id) {
                                    var myCheckbox = document.getElementsByName("myCheckbox2");
                                    Array.prototype.forEach.call(myCheckbox, function (el) {
                                        el.checked = false;
                                    });
                                    id.checked = true;
                                }
                                function selectOnlyThis3(id) {
                                    var myCheckbox = document.getElementsByName("myCheckbox3");
                                    Array.prototype.forEach.call(myCheckbox, function (el) {
                                        el.checked = false;
                                    });
                                    id.checked = true;
                                }
                                function selectOnlyThis4(id) {
                                    var myCheckbox = document.getElementsByName("myCheckbox4");
                                    Array.prototype.forEach.call(myCheckbox, function (el) {
                                        el.checked = false;
                                    });
                                    id.checked = true;
                                }
                                function selectOnlyThis5(id) {
                                    var myCheckbox = document.getElementsByName("myCheckbox5");
                                    Array.prototype.forEach.call(myCheckbox, function (el) {
                                        el.checked = false;
                                    });
                                    id.checked = true;
                                }
                                function selectOnlyThis6(id) {
                                    var myCheckbox = document.getElementsByName("myCheckbox6");
                                    Array.prototype.forEach.call(myCheckbox, function (el) {
                                        el.checked = false;
                                    });
                                    id.checked = true;
                                }

                            </script>
                            <br>


                        </div>
                    </div>
                </div>
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