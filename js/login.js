let imglogin1 = document.querySelector(".imglogin1");
let form1 = document.getElementById("form1");
let form2 = document.getElementById("form2");

function changescreen() {
  form2.reset();
  imglogin1.style.right = "350px";
}
function changescreen1() {
  form1.reset();
  imglogin1.style.right = "920px";
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
