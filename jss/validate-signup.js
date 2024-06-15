
function validateForm() {
    //  to check form validity
    isValid = form.checkValidity();
    // If the form isn't valid
    if (!isValid) {
      
      alert ('Please fill out all fields.');  
      return;
    }
    // Check to see if both password fields match
    if (passwordOne.value === password.value) {
   
      passwordsMatch = true;
      password.style.borderColor = 'green';
    } else {
  
      passwordsMatch = false;
      alert( 'Enter the correct password.');
      password.style.borderColor = 'red';
      return;
    }
    // If form is valid 
}  
  function storeFormData() {
    const user = {
      email: form.email.value,
      password: form.password.value,
    };
  } 
  function processFormData(e) {
    // Validate Form
     validateForm();
    // Submit Form if Valid
    if (isValid && passwordsMatch) {
      storeFormData();
    }
  }
  
  // Event Listener
  form.addEventListener('submit', processFormData);
  