
const username = document.getElementById("username").innerText;
const userid = document.getElementById("user_id").innerText;
const email = document.getElementById("email").innerText;
const subject = document.getElementById("subject").innerText;
const message = document.getElementById("message").innerText;

function greetUser() {
    alert("Hello, "+username+"."+" Your user ID is: "+userid+ " and your email is: " + email + 
        " .the subject is: " + subject + " and the message of the day is: " + message);
}