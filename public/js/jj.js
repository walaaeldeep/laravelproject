function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginBottom = "250px";
 }
  

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }

            
    var app = angular.module('myApp', []);
app.controller('formCtrl', function($scope) {
    $scope.username = "username";
});

$(document).ready(function(){
  $(".fa-times").click(function(){
       $(".form").hide(1000);
 });

})

