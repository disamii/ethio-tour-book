var flag_js = 0;
fetch("http://localhost/dashen-tour-backend/login_check.php", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    Allow: "GET, POST",
  },
})
  .then(function (response) {
    if (response.ok) {
      return response.json();
    }
    throw new Error("Network response was not ok.");
  })
  .then(function (flag) {
    if (flag == 0) {
      flag_js = 0;
    }
    else {
        flag_js = 1;
    }
  });

if (flag_js == 0) {
    console.log(flag_js);
  alert("you are not logged in");
  // Redirect the user to the login page
  window.location.href = "/index.html";
}
else if (flag_js == 1){
    // change the logg out button display to block
    document.querySelector(".loggedin").style.display = "block";
}

// destroy session when the logout button is clicked
document.querySelector(".logout").addEventListener("click", function () {
    fetch("http://localhost/dashen-tour-backend/logout.php", {
        method: "POST",
        headers: {
        "Content-Type": "application/json",
        Allow: "GET, POST",
        },
    })
        .then(function (response) {
        if (response.ok) {
            return response.json();
        }
        throw new Error("Network response was not ok.");
        })
        .then(function (flag) {
        if (flag == 1) {
            alert("You are logged out");
            window.location.href = "/index.html";
        }
        });
});
