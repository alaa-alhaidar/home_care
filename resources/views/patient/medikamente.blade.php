@foreach ($patinfo as $pat)
@endforeach
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patienten Profile</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFilePat.js') }}"></script>

</head>


<body class="bg02">
    

    <div class="container-fluid " id="home"">
        <div class="col" id=" home"">
        <p class="navbar-brand" href="../login.html">      
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 500;"
            class="tm-block-title mt-3">Home Care,
            <b style="font-size: 30px; color: rgb(235, 20, 20); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;"> Für Ihre Gesundheit da. <b style="font-size: 30px; color: rgb(230,230,250); font-family:Georgia, 
            'Times New Roman', Times, serif; font-weight: 200;">Sie sind angemeldet als Administrator: {{$pat->f_code}}
            <b style= "color: red ; font-size: 40px;"></b></b> </b></h2>
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
            </div>
        <br>
        <div class="bg-white" id="navbarSupportedContent">
            <br>
            <div class="container-fluid" id=" home"">
               
                <h2 style=" font-size: 50px; color: rgb(235, 27, 27); font-family:'Gill Sans', 'Gill Sans MT' ,
                Calibri, 'Trebuchet MS' , sans-serif; font-weight: 500;" class="tm-block-title mt-3">
                <b>Patienten: {{$pat->geschlecht}}. Geb. {{$pat->geburtstag}}, Vers. {{$pat->f_code}}.</b>
              
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
                    <form class= 'd-inline' action="{{ route('medPat',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
                        @csrf
                        <button  class='btn btn-warning btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' ><span class="material-symbols-outlined align-middle fs-3">
                            pill
                            </span>Medikamente
                        </button>
                    </form>
                </div>

                <div class="col" style="display: inline-block;">
                    <form class= 'd-inline' action="{{ route('vz',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
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
                        <button  class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                        style= 'background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;' 
                        id='btn' > 
                        <span class="material-symbols-outlined align-middle fs-3">
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
                          
                            <div class=" container-fluid bs-border-color col" id="">
                                <form class= 'd-inline' action="{{ route('add-med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"  method='post'>
                                    @csrf
                                    <button  class='d-inline btn btn-warning btn-sm' type='submit' value='med-requset'
                                    style= '' 
                                    id='btn' >
                                    <span class="material-symbols-outlined align-middle fs-1">
                                        person
                                        </span><b class= 'align-middle fs-3'>Profile</b>
                                    </button>
                                </form>
                               
                                    <button style= ''
                                        writing-mode: horizontal-tb;"";
                                            id="question" type="submit" 
                                            class="d-inline btn btn-warning btn-sm"> <b class= 'fs-3' style="color: blue">KI / Wechselwirkung prüfen</b> 
                                        </button>
                                
                                
                                    <button style= '' 
                                        writing-mode: horizontal-tb;"";
                                            id="question2" type="submit" 
                                            class="d-inline btn btn-warning btn-sm"> <b class= 'fs-3' style="color: green">KI / Nebenwirkung prüfen</b> 
                                        </button>
                               
                                    
                                  
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive fs-5">
                          
                            <table id="medikamente-table" class="table table-hover bg-secondary table-bordered border-light-subtle">
                             
                                <caption> <b>Medikamente </b></caption>
                             
                            <thead>
                            <tr class="tm-bg-gray bg-warning">
                               
                                                    <th scope="col" class="text-center">Id</th>
                                                    <th scope="col" class="text-center">Vers.</th>
                                                    <th scope="col" class="text-center">Name</th>
                                                    <th scope="col" class="text-center">Applikationsform</th>
                                                    <th scope="col" class="text-center">morgen</th>
                                                    <th scope="col" class="text-center">nachmittag</th>
                                                    <th scope="col" class="text-center">abend</th>
                                                    <th scope="col" class="text-center">nacht</th>
                                                    <th scope="col" class="text-center">Hinweis</th>
                                                    <th scope="col" class="text-center">Haupt/Bedarf</th>
                                                    <th scope="col" class="text-center">Personal</th>
                                                    <th scope="col" class="text-center">Operationen</th>
                               
                              
                            </tr>
                            </thead>
                            @php
                            $i=1;
                            $med="";
                       
                            @endphp
                          
                            <tbody class="fw-normal">
                                @foreach ($medi as $item)
                                @php
                                $med .=$item->name.", "
            
                                @endphp
                                
                                <tr class='text-center text-white align-middle'>
                              
                                <td>{{$i++}}</td>
                                <td>{{$item->f_code}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->applikationsform}}</td>
                                <td>{{$item->morgen}}</td>
                              
                                <td>{{$item->nachmittag}}</td>
                                <td>{{$item->abend}}</td>
                                <td>{{$item->nachts}}</td>
                                <td>{{$item->hinweis}}</td>
                                <td>{{$item->Haupt_Bedarf}}</td>
                                <td>{{$item->personal}}</td>
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
                
                </div>

            </div>
      <br>
         
   <div id="chat-container" class="container-fluid bg-secondary " >
  
       <h1 class="text-center text-white align-middle" style="color: white">Die Künstliche Intelligenz unterstützt bei der Durchsuchung von Millionen von Quellen und liefert Ihnen eine Antwort. Es ist jedoch wichtig, 
        sich immer mit einem Arzt oder einer Ärztin zu beraten, um sich umfassend zu informieren.</h1>
       <h2 class="fs-1 text-center align-middle" style="color: blue" >Bitte fragen Sie Ihrem Arzt oder Apotheke.</h1>
       <div class="fs-2" id="chat-log" style="background-color:white;overflow-y:scroll; height:400px;"></div>
   </div>
   <script>
var med = '<?php echo $med; ?>';
const chatForm = document.getElementById('question');
const chatForm2 = document.getElementById('question2');
const userMessageInput= "1+1";
//const userMessageInput = "Was sind die Wechselwirkungen der folgenden Medikamente: " + med + "Bitte detailierte Informationen liefern. ";
//const userMessageInput2 = "Was sind die Nebenwirkungen der folgenden Medikamente: " + med + "Bitte detailierte Informationen liefern. ";
const chatLog = document.getElementById('chat-log');
const apiUrl = 'https://api.openai.com/v1/chat/completions';
const apikey = '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';
  
chatForm.addEventListener('click', async (e) => {
    e.preventDefault();
  
    const userMessage = userMessageInput;
    if (userMessage === '') return;
  
    const requestBody = {
      model: 'gpt-3.5-turbo',
      messages: [{ role: 'system', content: 'You are a helpful assistant.' }, 
      { role: 'user', content: userMessage }]
    };
  
    const response = await fetch(apiUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${apikey}`
      },
      body: JSON.stringify(requestBody)
    });
  
    const { choices } = await response.json();
    const assistantReply = choices[0].message.content;
  
    // Display user message and assistant reply in the chat log
    appendMessage('Sie', userMessage);
    appendMessage('Ihre Assistant', assistantReply);
  
    // Clear the user message input field
    userMessageInput.value = '';
  });

  chatForm2.addEventListener('click', async (e) => {
    e.preventDefault();
  
    const userMessage = userMessageInput2;
    if (userMessage === '') return;
  
    const requestBody = {
      model: 'gpt-3.5-turbo',
      messages: [{ role: 'system', content: 'You are a helpful assistant.' }, 
      { role: 'user', content: userMessage }]
    };
  
    const response = await fetch(apiUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${apikey}`
      },
      body: JSON.stringify(requestBody)
    });
  
    const { choices } = await response.json();
    const assistantReply = choices[0].message.content;
  
    // Display user message and assistant reply in the chat log
    appendMessage('Sie', userMessage);
    appendMessage('Ihre Assistant', assistantReply);
  
    // Clear the user message input field
    userMessageInput.value = '';
  });
  
  function appendMessage(sender, message) {
    const messageElement = document.createElement('div');
    messageElement.innerHTML = `<strong style='color: red'>${sender}:</strong> ${message}`;
    chatLog.appendChild(messageElement);
  } 
 
    
</script>
    @php
    $medplan="";
    $timezone = new DateTimeZone('Europe/Berlin');
    $date = new DateTime('now', $timezone);
    $timeNow = intval($date->format('H'));

    if ($timeNow >= 6 && $timeNow <= 9) {
       
        $medplan .= DB::table('medikaments')
    ->where('f_code', $pat->f_code)
    ->where('morgen', '>', 0)
    ->get(['name','morgen']);

    }else if ($timeNow > 9 && $timeNow <= 18) {
        $medplan .= DB::table('medikaments')
    ->where('f_code', $pat->f_code)
    ->where('nachmittag', '>', 0)
    ->get(['name','nachmittag']);

    }else if ($timeNow > 18 && $timeNow <= 21) {
        $medplan .= DB::table('medikaments')
    ->where('f_code', $pat->f_code)
    ->where('abend', '>', 0)
    ->get(['name','abend']);

    }else if ($timeNow > 21 && $timeNow <= 24) {
        $medplan .= DB::table('medikaments')
    ->where('f_code', $pat->f_code)
    ->where('nachts', '>', 0)
    ->get(['name','nachts']);
    }

    @endphp
   
    </div>

<div id="overlay"></div>
<div id="overlay" class="text-center align-middle"></div>

<div id="popup" class="popup alert alert-warning alert-dismissible fade show fs-2 text-center align-middle" onclick="hidePopup()">
  <div class="popup-message text-center align-middle">
    <span class="close" onclick="event.stopPropagation(); hidePopup()"></span>
    
    <p style="text-align: center;">
        
    <b><br>Medikamente sollten rechtzeitig eingenommen werden.</b><br>
  
    <b class="fs-1 text-center align-middle" style="color:red"><br>{{$medplan}}</b><br>
    
        <b><br>Bei Fragen, wenden Sie sich an ihrem Arzt</b>
       
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