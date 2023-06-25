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
  