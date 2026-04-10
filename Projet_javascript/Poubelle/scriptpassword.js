const f = document.querySelector('#confirm-password-form');
const password = document.getElementById('password');
const password_confirmed = document.getElementById('password_confirmed');
const error_text = document.getElementById('error-password-not-same');





f.addEventListener("submit", function(event){

  if (password.value !== password_confirmed.value) {
    
    error_text.classList.add('titanic');

  }
  else{
    error_text.classList.remove('titanic');
  }
});