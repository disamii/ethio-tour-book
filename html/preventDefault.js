// preventDefault();
console.log("hello");
const error = document.querySelector('#error');
const error1 = document.querySelector('#error1');
const succes = document.querySelector('success');


error.innerHTML='';
const loginForm = document.getElementById('login-form');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');
console.log(loginForm);
loginForm.addEventListener('submit', (event) => {
event.preventDefault();
if (emailInput.value.trim() === '') {
    error.innerHTML='Please enter your email address.';
// emailInput.focus();
return false;
}
if (passwordInput.value.trim() === '') {
    error1.innerHTML='Please enter your password.';
// passwordInput.focus();
return false;
}
succes.innerHTML= 'Login successful!';


});