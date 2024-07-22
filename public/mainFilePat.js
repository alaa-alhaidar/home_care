"use-strict";

window.addEventListener("load", function() {
    showPopup();
  });
  
  function showPopup() {
    document.getElementById("popup").style.display = "block";
    document.getElementById("overlay").style.display = "block";
    document.body.style.overflow = "hidden";
  }
  
  function hidePopup() {
    document.getElementById("popup").style.display = "none";
    document.getElementById("overlay").style.display = "none";
    document.body.style.overflow = "auto";
  }
function back(){
  window.history.back();
}
function forward(){
  window.history.forward();
}

function displayTime() {
  var date = new Date();
  var time = date.toLocaleTimeString(); 
  document.getElementById("time").innerHTML = time;

  var currentDateElement = document.getElementById("date");
  var currentDate = new Date().toLocaleDateString();
  currentDateElement.textContent = currentDate;
}

setInterval(displayTime, 1000);

//logout after 10 min automatic 
setTimeout(function() {
  window.location.href = '/logout';
}, 1 * 60 * 1000); 