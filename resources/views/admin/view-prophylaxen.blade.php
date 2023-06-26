
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
            'Times New Roman', Times, serif; font-weight: 200;">Sie sind angemeldet als Administrator: <b style= "color: red ; font-size: 40px;"></b></b> </b></h2>
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
                    <div class="bg-white  tm-block h-100">
                    <div class="row">
                          
                          <div class=" container-fluid bs-border-color col" id="navbarSupportedContent">
                                
                                  
                               
                                  <div class="col" style="display: inline-block;" >  
                                      <button style="background-color: lightgrey; border-block-end-width: thick; 
                                      writing-mode: horizontal-tb;" onclick="window.location.href='dekubitus.php?versicherungsnummer'"";
                                          id=" login-button" type="submit"
                                          class="btn btn-primary"> <b>Dekubitus Übersicht</b> 
                                      </button>
                                  </div>
                                  <div class="col" style="display: inline-block;" >  
                                      <button style="background-color: lightgrey; border-block-end-width: thick; 
                                      writing-mode: horizontal-tb;" onclick="window.location.href='thrombose.php?versicherungsnummer'"";
                                          id=" login-button" type="submit"
                                          class="btn btn-primary"> <b>Thromboserisiko Übersicht</b> 
                                      </button>
                                  </div>
                                  
                                 
                                 
                          </div>
                      </div>
                      
                        <br>
                        <div class="table-responsive fs-5">
                        
                            <table id="medikamente-table" class="container-fluid  table table-hover bg-secondary border-bottom border-white">
                                <caption> <b>Prophylaxen</b></caption>
                            <thead>
                            <tr class="tm-bg-gray bg-warning">
                            <th scope="col" class="text-center">Id</th>
                                        <th scope="col" class="text-center">Dekubitus</th>
                                        <th scope="col" class="text-center">Thrombose</th>
                                        <th scope="col" class="text-center">Sturz</th>
                                        <th scope="col" class="text-center">Intertrigo</th>
                                        <th scope="col" class="text-center">Kontrakturen</th>
                                        <th scope="col" class="text-center">Pneumonie</th>
                                        <th scope="col" class="text-center">Dehydratation</th>
                                        <th scope="col" class="text-center">Datum</th>
                                        <th scope="col" class="text-center">Operationen</th>
                              
                            </tr>
                            </thead>
                                
                            
                                </table>
                        </div>

                        
                    </div>
                </div>

                </div>

            </div>
      
    </div>
    
  
    
</body>

</html>