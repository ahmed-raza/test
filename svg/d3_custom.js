$(document).ready(function(){
  $('text').hide();
  $('g').each(function(){
    $(this).hover(function(){
      $('#tool-tip').text($(this).find('text').text());
      var top = $(this).offset().top;
      var left = $(this).offset().left;
      console.log(top);
      if (top > 480 && top < 490) {
        if ($(this).find('text').text() == "Hear Care") {
          $('#tool-tip').css({
            'display': 'block',
            'top': top - 65 +'px',
            'left': left + 60  +'px'
          });
        }else{
          $('#tool-tip').css({
            'display': 'block',
            'top': top + 403 +'px',
            'left': left + 130  +'px'
          });
        }
      }else if(top > 528 && top < 530) {
        $('#tool-tip').css({
          'display': 'block',
          'top': top - 65 +'px',
          'left': left + 10 +'px'
        });
      }else if(top > 531 && top < 533) {
        $('#tool-tip').css({
          'display': 'block',
          'top': top - 67 +'px',
          'left': left +'px'
        });
      }else if(top > 532 && top < 534) {
        $('#tool-tip').css({
          'display': 'block',
          'top': top - 67 +'px',
          'left': left - 50 +'px'
        });
      }else if(top > 529 && top < 531) {
        $('#tool-tip').css({
          'display': 'block',
          'top': top - 67 +'px',
          'left': left +'px'
        });
      }else if(top > 596 && top < 598) {
        $('#tool-tip').css({
          'display': 'block',
          'top': top - 63 +'px',
          'left': left - 45 +'px'
        });
      }else if(top > 665 && top < 667){
        $('#tool-tip').css({
          'display': 'block',
          'top': top - 62 +'px',
          'left': left - 30 +'px'
        });
      }else if(top > 660 && top < 670){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 135 +'px'
        });
      }else if(top > 630 && top < 640){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 135 +'px'
        });
      }else if(top > 600 && top < 610){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 135 +'px'
        });
      }else if(top > 490 && top < 495){
        if ($(this).find('text').text() == "Maxi Mart") {
          $('#tool-tip').css({
            'display': 'block',
            'top': top + 20 +'px',
            'left': left + 162 +'px'
          });
        }else{
          $('#tool-tip').css({
            'display': 'block',
            'top': top + 112 +'px',
            'left': left + 190 +'px'
          });
        }
      }else if(top > 778 && top < 780){
        $('#tool-tip').css({
          'display': 'block',
          'top': top + 112 +'px',
          'left': left +'px'
        });
      }else if(top > 763 && top < 765){
        $('#tool-tip').css({
          'display': 'block',
          'top': top - 65 +'px',
          'left': left +'px'
        });
      }else if(top > 785 && top < 786){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 30 +'px'
        });
      }else if(top > 841 && top < 843){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 30 +'px'
        });
      }else if(top > 990 && top < 992){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 177 +'px'
        });
      }else if(top > 1032 && top < 1034){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 176 +'px'
        });
      }else if(top > 1064 && top < 1066){
        $('#tool-tip').css({
          'display': 'block',
          'top': top +'px',
          'left': left + 176 +'px'
        });
      }else{
        $('#tool-tip').css({
          'display': 'block',
          'top': top  +'px',
          'left': left +'px'
        });
      }
      $(this).find('polygon').css('fill', '#35617a');
      $(this).find('rect').css('fill', '#35617a');
    }, function(){
      $('#tool-tip').hide();
      $(this).find('polygon').css('fill', '');
      $(this).find('rect').css('fill', '');
    });
  });
});
