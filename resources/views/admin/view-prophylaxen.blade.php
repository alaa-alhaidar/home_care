<script>
    setTimeout(function() {
    location.reload();
  }, 60000);
</script>
@foreach ($patinfo as $pat)
@endforeach
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medikamente</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>

</head>


<body class="bg02">
    

    <div class="container-fluid " id="home"">
        <div class="col" id=" home"">
        <p class="navbar-brand" href="../login.html">      
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:arial ; font-weight: 500;"
            class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:arial  
            ; font-weight: 200;"> Ihre digitale Helfer. <b style="font-size: 30px; color: rgb(230,230,250); font-family: arial 
            ; font-weight: 200;">Sie sind angemeldet als Administrator: <b style= "color: red ; font-size: 40px;">{{$pat->f_code}}</b></b> </b></h2>
            </p>


            <div class="container-fluid bg-secondary" id="">
                <div class="col" style="display: inline-block;">
                    <button class="btn btn-primary" style="background-color: red; border-block-end-width: thick; 
                   writing-mode: horizontal-tb;" onclick="window.location.href='/home'";
                       id=" login-button" type="submit" class="btn btn-primary">
                       <span class="material-symbols-outlined align-middle fs-1">
                        logout
                        </span><b>Ausloggen</b>
                    </button>
                    
                </div>
                <div class="col " style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="window.location.href='/patinfo'";
                                                id=" login-button" type="submit" class="btn btn-primary">
                                                <span class="material-symbols-outlined align-middle fs-1">
                                                    import_contacts
                                                    </span><b>Patienteninfo</b>
                    </button>
                    <br>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="back()";
                                                id=" login-button" type="submit" class="btn btn-primary">
                                                <span class="material-symbols-outlined align-middle fs-1">
                                                    arrow_back
                                                    </span>
                        
                    </button>
                    <br>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="forward()";
                                                id=" login-button" type="submit" class="btn btn-primary">
                                                <span class="material-symbols-outlined align-middle fs-1">
                                                    arrow_forward
                                                    </span>
                    </button>
                    <br>
                </div>
                <div class=" col align-middle text-center text-wrap" style="display: inline-block;color:white;">
                    <span class="material-symbols-outlined align-middle text-center text-wra fs-1" style=" padding-left:1250px ;display: inline-block">
                        calendar_month
                        </span>
                        <p class="align-middle text-center text-wrap fs-1 " style=" padding-left:10px ;display: inline-block" id="date" ></p>
                    
                    <b>
                        <span class="material-symbols-outlined align-middle text-center text-wra fs-1">
                        schedule  
    
                        </span>
                        <p class="align-middle text-center text-wrap fs-1 " style="padding-left:10px ;display: inline-block" id="time" ></p>
                    </b>
                    
                  
                </div>
            </div>
     
        <div class="bg-white" id="navbarSupportedContent">
            <br>
            <div class="container-fluid" id=" home"">
               
                <h2 style=" font-size: 50px; color: rgb(235, 27, 27); font-family:sans-serif; font-weight: 500;" class="tm-block-title mt-3">
                <b>Patienten: Geb. {{$pat->geburtstag}}, f. Code. {{$pat->f_code}}.</b>
              
                </h2>

                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline ' action="{{ route('vz',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' > <span class="material-symbols-outlined align-middle fs-3">
                            vital_signs
                            </span>Vitalzeichen
                        </button>
                    </form>
                </div>
                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' ><span class="material-symbols-outlined align-middle fs-3">
                            pill
                            </span>Medikamente
                        </button>
                    </form>
                </div>

                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('report',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
                        @csrf
                        <button  class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' >
                        <span class="material-symbols-outlined align-middle fs-3">
                            topic
                            </span>Bericht
                        </button>
                    </form>
                </div>
                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('allProph',['f_code' => $pat->f_code]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-warning btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 30px;' 
                        id='btn' > 
                        <span class="material-symbols-outlined align-middle fs-1">
                            medical_information
                            </span>Massnahmen
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
                                
                                  
                               
                            <div class="col" style="display: inline-block;">
                                <form class= 'd-inline' action="{{ route('deku',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
                                    @csrf
                                    <button  class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                                    style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                                    id='btn' >Dekubitus
                                    </button>
                                </form>
                            </div>
                            <div class="col" style="display: inline-block;">
                                <form class= 'd-inline' action="{{ route('vz',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
                                    @csrf
                                    <button  class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                                    style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                                    id='btn' >Thrombose
                                    </button>
                                </form>
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
    <footer>
        <br>
        <div class="bg-white fs-3">
            <b style="text-align: center;color:red;">Alaa Al Haidar TU Berlin Abschlussarbeit Fakultaet IV</b>
        </div>
        
    </footer>
</body>

</html>