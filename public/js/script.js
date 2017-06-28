$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });

  //mobile
  $('#show_icon').click(function() {
    $('.mid_header').slideToggle();
  });

  //login
    $(".loginlink").click(function( event ){
        event.preventDefault();
        $(".overlay").fadeToggle("fast");
    });
    
    
    
    $(".close").click(function(){
        $(".overlay").fadeToggle("fast");
    });
    
   $("div.alert").delay(3000).slideUp();
});


//category loadmore
  $("#list").loadMore({
      selector: 'li',
      loadBtn: '#btn',
      limit: 4,
      load: 2,
      animate: true,
      animateIn: 'fadeInDown'
  });

