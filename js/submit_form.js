//check form befor submit

//open default mail program
$(document).ready(function(){
    $('#send-form').click(function(e) {
      e.preventDefault();
      mail_url = 'mailto:office@greenbike.at?Subject=' + 'Anfrage' + '&Body=' + $('#exampleFormControlTextarea1').val() + '%0D%0A' + '%0D%0A' +$('#inputVorname').val() + '%0D%0A' + $('#inputNachname').val() + '%0D%0A' + $('#inputAdresse').val() + '%0D%0A' + $('#inputPlz').val() + '%0D%0A' + $('#inputOrt').val() + '%0D%0A' + $('#inputTelefon').val() + '%0D%0A' + $('#email').val()
      window.location = mail_url
  });
});



