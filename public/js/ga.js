$(document).ready(function(){
    $(".fa-times").click(function(){
         $(".form").hide(1000);
   });
  
  })
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
