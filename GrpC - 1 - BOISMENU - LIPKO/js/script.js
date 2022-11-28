$(document).ready(function(){
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('.carousel').carousel({fullWidth: true});
    $('.modal').modal();

    $('video').on('ended', function(){
      $('#video').addClass("hide");
    });
});
var state = 0;
$('#test span').html(state);
$(document).keydown(function(e){
  if(e.which == 83 &&(state == 0 || state == 2)){
    state++;
  }
  else if(e.which == 85 && state == 1){
    state++;
  }
  else{
    state = 0;
  }

  if(state == 3){
    window.location.href = "warning/warningus/bewarus/i_am_serius/warning_very_sus/imposter.html";
  }
})
$("#trigger1").on('click', function() {
   $('#video').removeClass("hide");
   $('video').get(0).play();
   $("html, body").animate({scrollTop:$("#video").offset().top}, 0);
});

$("#trigger2").on('click', function() {
   $('#video').removeClass("hide");
   $('video').get(0).play();
   $("html, body").animate({scrollTop:$("#video").offset().top}, 0);
});

$("#trigger3").on('click', function() {
   $('#video').removeClass("hide");
   $('video').get(0).play();
   $("html, body").animate({scrollTop:$("#video").offset().top}, 0);
});
