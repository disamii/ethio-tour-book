var n,h,d,p,e,d_in,d_out,hw;
// document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('form input');
    const containers = document.querySelectorAll('form');
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener('input', function(e) { 
        const idd= containers[i].querySelector('input').id; 
        vvalidateForm(idd); 
        document.write(values);
      });
    }
//for name
function namee() {
    let x = document.getElementById("name").value;
    let y = document.getElementById("warning1");
    let inputField = document.getElementById("name");
    inputField.classList.remove("error", "success");
    y.classList.remove("empty", "not-a-number", "large-number");
    if (!/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/.test(x)) {
        y.textContent = "invalid form of  full name";
        y.classList.add("large-number");
        inputField.classList.add("error");
       n= false;
        
    }
    else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
        n= true;

    }
}
// for destinaton
function destinationn() {
    let x = document.getElementById("destination").value;
    let y = document.getElementById("warning2");
    let inputField = document.getElementById("destination");
    inputField.classList.remove("error", "success");
    y.classList.remove("empty", "not-a-number", "large-number");
    if (trim(x)) {
        y.textContent = "invalid form of  destination name";
        y.classList.add("large-number");
        inputField.classList.add("error");
        d=false;
    }
    else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
        d=true
          
    }
}
// for hotel
function hotell() {
    let x = document.getElementById("hotel").value;
    let y = document.getElementById("warning3");
    let inputField = document.getElementById("hotel");
    inputField.classList.remove("error", "success");
    y.classList.remove("empty", "not-a-number", "large-number");
   
    if (!/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/.test(x)) {
        y.textContent = "invalid form of  hotel name";
        y.classList.add("large-number");
        inputField.classList.add("error");
        h=false;
    }
    else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
        h=true;
        
    }
}
// for email
function emaill() {
    let x = document.getElementById("email").value;
    let y = document.getElementById("warning4");
    let inputField = document.getElementById("email");
    inputField.classList.remove("error", "success");
    y.classList.remove("empty", "not-a-number", "large-number");

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(x)) {
        y.textContent = "invalid form of  email adderes";
        y.classList.add("large-number");
        inputField.classList.add("error");
        e=false;
    }
    else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
          e=true;
    }
}
// for  phone
function phonee() {
    let x = document.getElementById("phone").value;
    let y = document.getElementById("warning5");
    let inputField = document.getElementById("phone");
    inputField.classList.remove("error", "success");
    y.classList.remove("empty", "not-a-number", "large-number");
    if (!/^\d{9}$/.test(x)) {
        y.textContent = "invalid form of phone number";
        y.classList.add("large-number");
        inputField.classList.add("error");
        p=false;
    }
    else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
        p=true;
          
    }
}
// for check date in
function date_in() {
    
    let x = document.getElementById("check-in").value;
    let y = document.getElementById("warning6");
    let inputField = document.getElementById("check-in");
    inputField.classList.remove("error", "success");
    let today = new Date();
    let enteredDate = new Date(x);
    let regex = new RegExp(`^${(today.getMonth() + 1).toString().padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')}/${today.getFullYear()}$`);
    y.classList.remove("empty", "not-a-number", "large-number");

    if (enteredDate< today) {        
        y.textContent = "date is in the past";
        y.classList.add("large-number");
        inputField.classList.add("error");
        d_in=false;
    }
    else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
        d_in=true;
          
    }
}
// for check date out
function date_out() {
    let x = document.getElementById("check-out").value;
    let y = document.getElementById("warning7");
    let inputField = document.getElementById("check-out");
    inputField.classList.remove("error", "success");
    let today = new Date();
    let enteredDate = new Date(x);
    let regex = new RegExp(`^${(today.getMonth() + 1).toString().padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')}/${today.getFullYear()}$`);
    y.classList.remove("empty", "not-a-number", "large-number");
    if (enteredDate< today) {        
        y.textContent = "date is in the past";
        y.classList.add("large-number");
        inputField.classList.add("error");
        d_out=false;

    }
    else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
        d_out=true;
          
    }
}
// room type
function guest() {
    let x = document.getElementById("guests").value;
    let y = document.getElementById("warning9");
    let inputField = document.getElementById("guests");
    inputField.classList.remove("error", "success");
    y.classList.remove("empty", "not-a-number", "large-number");
    if (x.trim() == "") {
        y.textContent = "empty";
        y.classList.add("empty");
        inputField.classList.add("error");
        hw=false;
    } else if (isNaN(x)) {
        y.textContent = "not a number";
        y.classList.add("not-a-number");
        inputField.classList.add("error");
        hw=false;
    } else if (x > 100 || x < 1) {
        y.textContent = "large number!";
        y.classList.add("large-number");
        inputField.classList.add("error");
        hw=false;
    } else {
        y.textContent = ("\u2713");
        y.classList.add("success");
        inputField.classList.add("success");
        hw=true  
    }
}
    // exipary date
    function exipary_datee() {
        let x = document.getElementById("expiry-date").value;
        let y = document.getElementById("warning11");
        let inputField = document.getElementById("expiry-date");
        inputField.classList.remove("error", "success");
        let today = new Date();
        let enteredDate = new Date(x);
        let regex = new RegExp(`^${(today.getMonth() + 1).toString().padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')}/${today.getFullYear()}$`);
        y.classList.remove("empty", "not-a-number", "large-number");
        if (enteredDate< today) {        
            y.textContent = "date is in the past";
            y.classList.add("large-number");
            inputField.classList.add("error");
        }
        else {
            y.textContent = ("\u2713");
            y.classList.add("success");
            inputField.classList.add("success");
        }
    }
    function validateForm() {
        const form = document.querySelector('form');
        if(!n||!p||!d_in||!d_out||!hw){
            event.preventDefault();
        }
        else
        form.submit();
    }
        