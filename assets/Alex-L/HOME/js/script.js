$('.toggle-show .toggle-show-btn').click(function(){
  $('#payment .card').toggleClass('flip');
  var inp = $('.input input');
  if (inp.attr('type') == 'password') {
    setTimeout(function(){
        inp.attr('type','text');      
    },250);

    } else {
      setTimeout(function(){
        inp.attr('type','password');;
      },250);        
    }
  $(this).toggleClass('changeit');
});

document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});