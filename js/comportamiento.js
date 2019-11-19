"use strict"

$('.carousel').carousel({
    interval: 2000
  })
/*  let edit = document.getElementById("btnEdit");
 edit.addEventListener("click",openForm); */

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }


