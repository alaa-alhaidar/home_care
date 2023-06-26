
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
        <div class="col" id=" home"">
        <p class="navbar-brand" href="../login.html">      
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 500;"
            class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;"> Für Ihre Gesundheit da. <b style="font-size: 30px; color: rgb(230,230,250); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;">Sie sind angemeldet als Administrator: <b style= "color: red ; font-size: 40px;"><?=$username;?></b></b> </b></h2>
            </p>


        <div class="container-fluid bg-secondary" id="navbarSupportedContent">

            <div class="col" style="display: inline-block;">
                <button style="background-color: red; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;" onclick="window.location.href='/home'";
                                            id=" login-button" type="submit" class="btn btn-primary"><b>Ausloggen</b>
                </button>
            </div>
          
            <div class="col" style="display: inline-block;">
                <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;" onclick="window.location.href='/'"";
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
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;"
                        onclick="window.location.href='patientencheck.php?versicherungsnummer'"";
                                            id=" login-button" type="submit"
                        class="btn btn-primary"><b>Vitalzeichen</b>
                    </button>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;"
                        onclick="window.location.href='medikamente.php?versicherungsnummer'"";
                                        
                                        
                                        id=" login-button" type="submit" class="btn btn-primary"> <b>Medikamente</b>
                    </button>
                </div>

           
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;"
                        onclick="window.location.href='report.php?versicherungsnummer'"";
                                            id=" login-button" type="submit" class="btn btn-primary"> <b>Berichte</b>
                    </button>
                </div>
                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('braden',['vers' => $pat->versicherungsnummer,'patinfo' => $pat->versicherungsnummer]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >Massnahmen
                        </button>
                    </form>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;"
                        onclick="window.location.href='view-diagnosen.php?versicherungsnummer'"";
                                            id=" login-button" type="submit" class="btn btn-primary"> <b>Diagnosen</b>
                    </button>
                </div>
               
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;"
                        onclick="window.location.href='#.php?versicherungsnummer'"";
                                            id=" login-button" type="submit" class="btn btn-primary"> <b>Termine</b>
                    </button>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                        writing-mode: horizontal-tb;"
                        onclick="window.location.href='view.php?versicherungsnummer'"";
                                            id=" login-button" type="submit" class="btn btn-primary"> <b>Übersicht</b>
                    </button>

                </div>

            </div>

            <br>


        </div>
        <br>
    <!-- row -->
    <div class="bs-border-color col">
        <div class="">
            <div class="bg-white tm-block">
           
                <div class="" style="background-color:darkgrey">

                    <p class="text-center"
                        style="display: flex;justify-content: center; font-size: 40px; color:darkred; font-family: 'Times New Roman', Times, serif;padding-top: 10px;">
                        Thrombosemaßnahmen hinzufügen</p>

                </div>
                <div style="background-color:gainsboro;">
                    <div class="row">
                        <div class="">
                            <form id="form" action="add-dekubitus-prophylaxe-db.php?versicherungsnummer=<?=$versicherungsnummer;?>&vorname=<?=$vorname;?>&nachname=<?=$nachname;?>&geschlecht=<?=$geschlecht;?>&geburtstag=<?=$geburtstag;?>" 
                            method="post" class="tm-edit-product-form">
                          
                                <br>
                              
                                
                                <div class="input-group mb-2 " style="height: 200px;">
                                    <label style="padding-left: 20px;" for="description"
                                        class="col-form-label col-xl-1">Massnahmen
                                        </label>

                                    <textarea type="text" placeholder="Maßnahme:." id="massnahmen" name="massnahmen"
                                        type="text"" class="col text-break" style="height: 200px;margin-right: 30px" required> </textarea>

                                </div>
                                <div class="input-group mb-2 " style="height: 200px;">
                                    <label style="padding-left: 20px;" for="description"
                                        class="col-form-label col-xl-1">Hinweise
                                        </label>

                                    <textarea type="text" placeholder="Hinweise:." id="hinweis" name="hinweis"
                                        type="text"" class="col text-break" style="height: 50px;margin-right: 30px" required> </textarea>

                                </div>
                                <div class="d-grid gap-2">
                                    <button style="margin-left: 30px;margin-right: 30px;background-color: dodgerblue;"
                                        type="submit" class="btn btn-primary">Hinzufügen</button>
                                </div>
                                <br>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="row tm-mt-big">
        <div class="col-12 font-weight-light">

        </div>
    </footer>


</body>

</html>