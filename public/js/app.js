/*$('.owl-carousel').owlCarousel({
  
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
           items:
        }
    }
})
*/
$(function () {
    $('.floating-wpp').floatingWhatsApp({
        phone: '00000000',
        popupMessage: 'Welcome to iamrohit.in',
        showPopup: true,
        position: 'right', // left or right
        autoOpen: true, // true or false
        autoOpenTimer: 4000,
        message: 'Hello how are you my name is rohit',
    
        headerColor: 'orange', // enable to change msg box color
        headerTitle: 'Whatsapp Message Box',
   });
});
$(document).ready(function(){
    $(".form-control").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".card").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > +1)
      })
    })
  })


