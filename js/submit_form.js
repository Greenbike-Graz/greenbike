
$(document).ready(function(){
    $('#send-form').click(function(e) {
      e.preventDefault();
      mail_url = 'mailto:office@greenbike.at?Subject=' + 'Anfrage' + '&Body=' + $('#exampleFormControlTextarea1').val()
      window.location = mail_url
  });
});



