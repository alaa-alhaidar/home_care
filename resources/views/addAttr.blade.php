<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ML-Visual</title>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    
        <script src="https://d3js.org/d3.v7.min.js"></script>
        <script src="{{ asset('main.js') }}"></script>
        <script src="{{ asset('fileProcess.js') }}"></script>
        <script src="{{ asset('d3.js') }}"></script>
        <script src="{{ asset('d3-selection-multi.js') }}"></script>
    </head>

<body class="bg02">

    <div class="container-fluid " id="home"">
        <div class="col" id=" home"">
    <br>
      
        <div class="bg-white" id="navbarSupportedContent">
            <br>
            <div class="container-fluid" id=" home"">
               
                <div class="col fs-1" style="display: inline-block;">
                    <button  onclick="window.location.href='home'" 
                    id="home_page" class='btn btn-warning btn-lg'>Home
                    </button>
                </div>
                <div class="col fs-1" style="display: inline-block;">
                    <button  
                    id="save-button" class='btn btn-warning btn-lg'>update graph
                    </button>
                </div>
                <div class="col fs-1" style="display: inline-block;">
                    <button  
                    id="load-button" class='btn btn-warning btn-lg'> add attribute to node
                    </button>
                </div>
              
            </div>

            <br>

        </div>
        <br>
  
        <!-- row -->
        <div class="row no-gutters" >
            <div class="col">

                <div class="bg-white tm-block">
                    <div class="row">

                        <div style="background-color:white; 
                        height:1000px;"">
                            <div class="row fs-3 table-responsive" id="chart" 
                            style="background-color:white;; 
                            height:1000px; ">
                                
                               
                            </div>
                
                        </div>
                        
                        <div class="col print-content d-inline" style="display: inline-block;">
                            <button class="btn fs-3" style="display: inline-block; background-color: blue;
                            color:white" onclick="printJSON()"><span class="material-symbols-outlined align-middle fs-1">
                                print
                                </span>Ausdrücken
                            </button>
                            <button class="btn fs-3" style="display: inline-block;background-color: green;
                            color:white" onclick="saveJSON()"> <span class="material-symbols-outlined align-middle fs-1">
                                download
                                </span>
                                Speichern
                            </button>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="bg-white tm-block">
                    
                    <div style="background-color:gainsboro;">
                        <div class="col-lg-12 fs-1" style="background-color:darkgrey">

                            <p class="text-center"
                                style="display: flex;justify-content: center;  color:darkred; font-family: 'Times New Roman', Times, serif;padding-top: 10px;">
                                add attributes to node</p>
    
                            </div>
                        <div class="row fs-5" ">
                           
                                <br>
                            <div class=" col-lg-10" style="height:400px">
                               <br>
                                <form  id="add_attr" action="{{ route('save-json') }}" method="post">
                                    @csrf

                                    <div class="input-group mb-2">
                                        <label style="padding-left: 20px;" for="operation"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Node name

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="n_name" aria-describedby="inputGroup-sizing-sm" placeholder="node"
                                            required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="operation"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">attribute

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="attribute" aria-describedby="inputGroup-sizing-sm" placeholder="attribute"
                                            required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="input"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Value

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="attr_value" aria-describedby="inputGroup-sizing-sm" placeholder="attr_value"
                                            required>
                                    </div>

                       
                                    
                                    <div class="d-grid gap-2 ">
                                        <button id="add-button" 
                                            style="margin-left: 30px; margin-bottom: 20px;background-color: dodgerblue;"
                                            type="submit" class="btn btn-primary">
                                            <span class="material-symbols-outlined  align-middle" 
                                            style="color: black; font-size: 30px;">
                                                add
                                                </span></b>
                                        </button>
                                    </div>
                                    
                                </form>
                                
                            </div>
                            
                            <br>
                            <div class="col-lg-12 fs-1" style="background-color:darkgrey">

                                <p class="text-center"
                                    style="display: flex;justify-content: center;  color:darkred; font-family: 'Times New Roman', Times, serif;padding-top: 10px;">
                                    remove attributes of node</p>
        
                                </div>
                            <div class=" col-lg-10" style="height:250px">
                               <br>
                                <form  id="rmv_attr" action="{{ route('save-json') }}" method="post">
                                    @csrf

                                   
                                    <div class="input-group mb-2">
                                        <label style="padding-left: 20px;" for="operation"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Node name

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="n_name_rmv" aria-describedby="inputGroup-sizing-sm" placeholder="node"
                                            required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="operation"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">attribute

                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="attribute_rmv" aria-describedby="inputGroup-sizing-sm" placeholder="attribute"
                                            required>
                                    </div>
                      
                                    
                                    <div class="d-grid gap-2 ">
                                        <button id="rmv-button" 
                                            style="margin-left: 30px; margin-bottom: 20px;background-color: dodgerblue;"
                                            type="submit" class="btn btn-primary">
                                            <span class="material-symbols-outlined  align-middle" 
                                            style="color: black; font-size: 30px;">
                                                remove
                                                </span></b>
                                        </button>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                       
                    
                   
                        
                        <div id="info_div" class=" col-lg-10 fs-3" 
                        style="height:300px;background-color:;">
                       
        
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