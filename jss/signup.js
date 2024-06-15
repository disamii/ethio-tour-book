// send a request to the backend when the button with class signup-button is clicked

document.querySelector('.signup-button').addEventListener('click', function(event) {
    console.log("I am clicked");
    var full_name = document.querySelector('#full-name').value;
    var email = document.querySelector('#semail').value;
    var phone_no = document.querySelector('#phone-number').value;
    var address = document.querySelector('#address').value;
    var password = document.querySelector('#password-one').value;
    var data = {
        full_name: full_name,
        email: email,
        phone_no: phone_no,
        address: address,
        password: password,
    };
    console.log(data);
    fetch('http://localhost/dashen-tour-backend/Signup.php', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json',
            'Allow': 'GET, POST'
        }
    })
    .then(function(response) {
        if (response.ok) {
            return response.json();
        }
        throw new Error('Network response was not ok.');
    })
    .then(function(flag) {
        console.log(flag);
        console.log(typeof(flag));
        if (flag == 1) {
            // redirect to the booking page
            alert('You are successfully signed up. Go to the login page to login');  
            window.location.href = '/index.html';
            event.preventDefault();
        }
        else if (flag == 0) {
            alert('There is an account with the email address you entered');
            window.location.href = '/index.html';
            event.preventDefault();
            // prevent the page from redirecting
        }
        else {
            alert("Unknown error");
        }
    });
});
