$(document).ready(function(){
  $('#files').change(function(){
    var files = $(this)[0].files;
    var li = {};
    for (var i = files.length - 1; i >= 0; i--) {
      $('ol.items').append('<li>'+files[i].name+'</li>');
    }
    $('#nums').html(files.length);
  });
  $('#browse').click(function(e){
    e.preventDefault();
    $('#files').trigger('click');
  });
  $('#file-uploader #upload').click(function(e){
    e.preventDefault();
    var files = $('#files').val();
    alert(files);
    return false;
  });

});
