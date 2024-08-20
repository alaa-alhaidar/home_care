document.addEventListener('DOMContentLoaded', function () {
  
    function clearCookies() {
        document.cookie.split(";").forEach(function (c) {
            document.cookie = c.trim().split("=")[0] + "=;expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
        });
    }
    window.onload = function() {
        clearCookies();
    };

    const startBtn = document.getElementById('start-btn');
    const stopBtn = document.getElementById('stop-btn');
  
    const resultElem = document.getElementById('result');
    const form = document.getElementById('form');
    const textInput = form.querySelector('input[name="text"]');
    const languageSelect = document.getElementById('language-select');
    const reportAdd = document.getElementById('submit-button');

    let recognition;
    let isRecording = false;

    if ('webkitSpeechRecognition' in window) {
        recognition = new webkitSpeechRecognition();
    } else if ('SpeechRecognition' in window) {
        recognition = new SpeechRecognition();
    } else {
        alert('Speech Recognition API not supported in this browser.');
        return;
    }

    recognition.continuous = true;
    recognition.interimResults = false;

    recognition.onresult = function (event) {
        const transcript = event.results[event.resultIndex][0].transcript + ',';
        resultElem.textContent += transcript;
        textInput.value += transcript;
    
        // Convert the content of resultElem to lowercase for checking "stop"
        const resultTextLower = resultElem.textContent.toLowerCase().trim();
    
        if (resultTextLower.endsWith('stop,')) {
            const stopBtn = document.getElementById('stop-btn');
            if (stopBtn) {
                stopBtn.style.backgroundColor = 'red';
                recognition.stop();
                startBtn.classList.remove('recording');
                reportAdd.style.backgroundColor ='green'
                 // Revert the color back to its original state after 3 seconds
                 setTimeout(() => {
                    reportAdd.click();
                }, 2000);
    
                // Remove the word "stop" and the trailing comma from the end of the result text
                resultElem.textContent = resultElem.textContent.replace(/stop,\s*$/i, '').trim();
                textInput.value = resultElem.textContent; // Update the input value as well
                
                // Revert the color back to its original state after 3 seconds
                setTimeout(() => {
                    stopBtn.style.backgroundColor = ''; // Reset to original color
                }, 2000);
                reportAdd.style.backgroundColor ='red'
            }
        }
    };
    
    

    recognition.onstart = function () {
        isRecording = true;
        startBtn.disabled = true;
        stopBtn.disabled = false;
      
    };

    recognition.onend = function () {
        isRecording = false;
        startBtn.disabled = false;
        stopBtn.disabled = false;
      
    };

    recognition.onerror = function (event) {
        console.error('Speech recognition error:', event.error);
        startBtn.disabled = false;
        stopBtn.disabled = true;
     
    };

    startBtn.addEventListener('click', function () {
        recognition.lang = languageSelect.value;
        recognition.start();
        resultElem.textContent = '';
        textInput.value = '';
        startBtn.classList.add('recording');
    });

    stopBtn.addEventListener('click', function () {
        recognition.stop();
        textInput.value = textInput.value.slice(0, -1) + '.';
        startBtn.classList.remove('recording');
    });

    saveBtn.addEventListener('click', function () {
        textInput.value = resultElem.textContent.trim();
        startBtn.classList.remove('recording');
    });
});
