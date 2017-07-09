$(document).ready(function(){
  $('form#help').submit(function(){
    var name = $('#name').val();
    var phone = $('#phone').val();
    var message = $('#message').val();
      $.ajax({
        url: 'scripts/php/send.php',
        data: { name: name, phone: phone, message: message },
        success: function(data){
          alert(data);
        }
      });
    return false;
  });
});
