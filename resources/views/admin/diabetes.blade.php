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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>

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

            <div class=" container-fluid bg-white" id="navbarSupportedContent" style="height:80vh">

                <div class="bg-white  tm-block h-100" >
                    <h2 style=" font-size: 50px; color: rgb(235, 27, 27); font-family:sans-serif; font-weight: 500;"
                        class="tm-block-title mt-3">
                        <b>Patienten: Name. {{$pat->nachname}}, Vorname. {{$pat->vorname}}, Geb. {{$pat->geburtstag}},
                            f. Code. {{$pat->f_code}}.
                        </b>
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
                        <form class='d-inline' action="{{ route('allDiagnosis',['f_code' => $pat->f_code]) }}" method='post'>
                            @csrf
                            <button class='btn btn-secondary btn-sm' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'><span class="material-symbols-outlined align-middle fs-3">
                                diagnosis
                                </span> Diagnosen
                            </button>
                        </form>
                    </div>
                    <div class="col" style="display: inline-block;">
                        <form class='d-inline' action="{{ route('med',['f_code' => $pat->f_code]) }}" method='post'>
                            @csrf
                            <button class='d-inline btn btn-secondary btn-sm' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'>
                                <span class="material-symbols-outlined align-middle fs-3">
                                    pill
                                </span> Medikamente
                            </button>
                        </form>
                    </div>
                    <div class="col" style="display: inline-block;">
                        <form class='d-inline' action="{{ route('showDiabetes',['f_code' => $pat->f_code]) }}" method='post'>
                            @csrf
                            <button class='btn btn-warning btn-lg' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'><span class="material-symbols-outlined align-middle fs-1">
                                    glucose
                                </span> Diabetes Mellitus
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
                    <div class="col" style="display: inline-block;">
                        <form class='d-inline' action="{{ route('allTermine',['f_code' => $pat->f_code]) }}" method='post'>
                            @csrf
                            <button class='btn btn-secondary btn-lg' type='submit' value='med-requset'
                                style='background-color:;--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem;'
                                id='btn'>
                                <span class="material-symbols-outlined align-middle fs-3">
                                <span class="material-symbols-outlined">
                                calendar_month
                                </span>
                                </span> termine
                            </button>
                        </form>
                    </div>

                    <div class="row">

                        <div class=" container-fluid bs-border-color col" id="">
                            <br>
                            <form class='d-inline'
                                action="{{ route('pat_info',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                                method='get'>
                                @csrf
                                <button class='d-inline btn btn-warning btn-sm' type='submit' value='med-requset'
                                    style='' id='btn'>
                                    <span class="material-symbols-outlined align-middle fs-1">
                                        person
                                    </span><b class='align-middle fs-3'></b>
                                </button>
                            </form>
                            <form class='d-inline'
                                action="{{ route('add-med',['f_code' => $pat->f_code,'patinfo' => $pat->f_code]) }}"
                                method='post'>
                                @csrf
                                <button class='d-inline btn btn-warning btn-sm' type='submit' value='med-requset'
                                    style='' id='btn'><b class='fs-3'>
                                        <span class="material-symbols-outlined  align-middle fs-1"
                                            style="color: black;">
                                            add
                                        </span></b>
                                </button>
                            </form>
                        



                        </div>
                    </div>
                    <br>
                    <div style="overflow-y:scroll; height:1000px;">
                        <div class="table-responsive fs-4">

                        <table id="diabetes-table" class="table table-hover bg-secondary table-bordered border-light-subtle">
                             
                             <caption> <b>Medikamente </b></caption>
                          
                         <thead>
                         <tr class="tm-bg-gray bg-warning">
                            
                                                 <th scope="col" class="text-center">Id</th>
                                             
                                                 <th scope="col" class="text-center">F-Code</th>
                                                 <th scope="col" class="text-center">MMOL/L</th>
                                                 <th scope="col" class="text-center">Insulin IE</th>
                                                 <th scope="col" class="text-center">Hinweise</th>
                                                 <th scope="col" class="text-center">Date</th>
                                                 
                                                 <th scope="col" class="text-center">Operationen</th>
                            
                           
                         </tr>
                         </thead>
                         @php
                         $i=1;
                         $med="";
                    
                         @endphp
                       
                         <tbody class="fw-normal">
                             @foreach ($diagnosen as $item)
                             @php
                            
         
                             @endphp
                             
                             <tr class='text-center text-white align-middle'>
                           
                             <td>{{$i++}}</td>
                             <td>{{$item->f_code}}</td>
                             <td>{{$item->mmol_l}}</td>
                             <td>{{$item->insulin}}</td>
                             <td>{{$item->hinweise}}</td>
                           
                             <td>{{$item->created_time}}</td>
                        
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

        <!-- 
    <div id="chat-container" class="container-fluid bg-secondary ">

        <h1 class="text-center text-white align-middle" style="color: white">Die Künstliche Intelligenz unterstützt bei
            der Durchsuchung von Millionen von Quellen und liefert Ihnen eine Antwort. Es ist jedoch wichtig,
            sich immer mit einem Arzt oder einer Ärztin zu beraten, um sich umfassend zu informieren.</h1>
        <h2 class="fs-1 text-center align-middle" style="color: blue">Bitte fragen Sie Ihrem Arzt oder Apotheke.</h1>
            <div class="fs-2" id="chat-log" style="background-color:white;overflow-y:scroll; height:100px;"></div>
    </div>
    -->
        <script>
        const chatForm = document.getElementById('question');
        const chatForm2 = document.getElementById('question2');
        const chatLog = document.getElementById('chat-log');
        const apiUrl = 'https://api.openai.com/v1/chat/completions';
        const apikey =
            ''; // Replace with your OpenAI API key

        chatForm.addEventListener('click', async (e) => {
            e.preventDefault();

            const userMessageInput = "1+1"; // Example user input
            if (userMessageInput === '') return;

            const requestBody = {
                model: 'gpt-3.5-turbo',
                messages: [{
                        role: 'system',
                        content: 'You are a helpful assistant.'
                    },
                    {
                        role: 'user',
                        content: userMessageInput
                    }
                ]
            };

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${apikey}`
                    },
                    body: JSON.stringify(requestBody)
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const {
                    choices
                } = await response.json();
                const assistantReply = choices[0].message.content;

                // Display user message and assistant reply in the chat log
                appendMessage('You', userMessageInput);
                appendMessage('Your Assistant', assistantReply);

            } catch (error) {
                console.error('Error:', error);
            }
        });

        chatForm2.addEventListener('click', async (e) => {
            e.preventDefault();

            const userMessageInput = "2+2"; // Example user input for question 2
            if (userMessageInput === '') return;

            const requestBody = {
                model: 'gpt-3.5-turbo',
                messages: [{
                        role: 'system',
                        content: 'You are a helpful assistant.'
                    },
                    {
                        role: 'user',
                        content: userMessageInput
                    }
                ]
            };

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${apikey}`
                    },
                    body: JSON.stringify(requestBody)
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const {
                    choices
                } = await response.json();
                const assistantReply = choices[0].message.content;

                // Display user message and assistant reply in the chat log
                appendMessage('You', userMessageInput);
                appendMessage('Your Assistant', assistantReply);

            } catch (error) {
                console.error('Error:', error);
            }
        });

        function appendMessage(sender, message) {
            const messageElement = document.createElement('div');
            messageElement.innerHTML = `<strong style='color: red'>${sender}:</strong> ${message}`;
            chatLog.appendChild(messageElement);
        }
        </script>
       
    </div>

    

    <br>
    <footer class="bg-white fs-3 text-center py-3">
        <b style="color:red;">Health Software developed by Alaa Al Haidar</b>
    </footer>
</body>

</html>