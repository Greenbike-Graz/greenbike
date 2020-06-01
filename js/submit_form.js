//check form befor submit

window.onload = function () {
  const okButton = document.getElementById('send-form');
  const vorname = document.getElementById('inputVorname');
  const nachname = document.getElementById('inputNachname');
  const adresse = document.getElementById('inputAdresse');
  const plz = document.getElementById('inputPlz');
  const ort = document.getElementById('inputOrt');
  const telefon = document.getElementById('inputTelefon');
  const email = document.getElementById('email');
  const checkbox = document.getElementById('dsgvo');

  okButton.addEventListener('click', function (event) {
    isValidVorname = vorname.checkValidity();
    isValidNachname = nachname.checkValidity();
    isValidAdresse = adresse.checkValidity();
    isValidPlz = plz.checkValidity();
    isValidOrt = ort.checkValidity();
    isValidTelefon = telefon.checkValidity();
    isValidEmail = email.checkValidity();
    isValidCheckbox = checkbox.checkValidity();


    if (isValidEmail && isValidNachname && isValidVorname && isValidAdresse && isValidPlz && isValidOrt && isValidTelefon && isValidEmail && isValidCheckbox) {
      mail_url = 'mailto:greenbike.graz@gmail.com?Subject=' + 'Anfrage' + '&Body=' + $('#form-textarea').val() + '%0D%0A' + '%0D%0A' + $('#inputVorname').val() + ' ' + $('#inputNachname').val() + '%0D%0A' + $('#inputAdresse').val() + ', ' + $('#inputPlz').val() + ' ' + $('#inputOrt').val() + '%0D%0A' + $('#inputTelefon').val() + '%0D%0A' + $('#email').val()
      window.location = mail_url
      kontakt.submit();
    } 
    else {
      return false;
    }
  });
}