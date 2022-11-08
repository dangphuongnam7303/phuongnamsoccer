$("#login-button").click(function(event){
  event.preventDefault();

$('form').fadeOut(500);
$('.wrapper').addClass('form-success');
});


function toggle() {
  var blur=document.getElementById('layout');
  blur.classList.toggle('active');
  var popup = document.getElementById('wrapper');
  popup.classList.toggle('active');
}