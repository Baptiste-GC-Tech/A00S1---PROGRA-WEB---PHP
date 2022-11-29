$(document).ready(function(){
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('.carousel').carousel({fullWidth: true});
    $('.modal').modal();
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