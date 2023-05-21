const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click"), () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
})

function showMsg() {
    var checkBox = document.getElementById("allergies");
    var msgAllergies = document.getElementById("msg-allergies");
    if(checkBox.checked) {
        msgAllergies.style.display = "block";
    } else {
        msgAllergies.style.display = "none";
    }
}