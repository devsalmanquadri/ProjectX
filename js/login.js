let imglogin1 = document.querySelector(".imglogin1");
let form1 = document.getElementById("form1");
let form2 = document.getElementById("form2");

let text = window.location.href;
let index = text.lastIndexOf("#");
if (index !== -1) {
  form1.classList.add("enabled");
} else {
  form2.classList.add("enabled");
}

function changescreen() {
  form2.reset();
  form1.classList.toggle("enabled");
  form2.classList.toggle("enabled");
  // imglogin1.style.right = "19vw";
}
function changescreen1() {
  form1.reset();
  form1.classList.toggle("enabled");
  form2.classList.toggle("enabled");
  // imglogin1.style.right = "48vw";
}
function eyechange(ele, element) {
  var inputpass = document.querySelector("." + element);
  if (ele.classList.contains("ri-eye-off-fill")) {
    inputpass.setAttribute("type", "text");
    ele.classList.remove("ri-eye-off-fill");
    ele.classList.add("ri-eye-fill");
  } else {
    inputpass.setAttribute("type", "password");
    ele.classList.remove("ri-eye-fill");
    ele.classList.add("ri-eye-off-fill");
  }
}
function matchPassword(event) {
  var pw1 = document.getElementsByClassName("password1");
  var pw2 = document.getElementsByClassName("confirm_password1");
  if (pw1 != pw2) {
    alert("Passwords did not match");
    event.preventDefault();
  }
}
