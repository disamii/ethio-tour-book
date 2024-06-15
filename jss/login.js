// send a request to the backend when the button with class login-button is clicked
document.querySelector(".login-button ").addEventListener("click", function (event) {
var email = document.querySelector("#email").value;
var password = document.querySelector("#password").value;
var data = { email: email, password: password };
console.log(data);
fetch("http://localhost/dashen-tour-backend/login.php", {
  method: "POST",
  body: JSON.stringify(data),
  headers: {
    "Content-Type": "application/json",
            'Allow': 'GET, POST'
  },
})
  .then(function (response) {
    if (response.ok) {
      return response.json();
    }
    throw new Error("Network response was not ok.");
  })
  .then(function (flag) {
    console.log(flag);
    // console.log(typeof flag);
    if (flag == 0) {
      alert("Wrong username or password");
      // prevent the page from redirecting
      // event.preventDefault();
    } 
            else if (flag == 1) {
      window.location.href = "/screens/booking.html";
      alert("Succefully logged in");
      // redirect to the booking page
      console.log("Logged In");
      // event.preventDefault();
    }
  });
    });
