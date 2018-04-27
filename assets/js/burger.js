let menu = document.getElementById("navMenu");
let burgerButton = document.getElementById("burgerButton");
burgerButton.addEventListener("click", function() {
    menu.classList.toggle("show");
    burgerButton.classList.toggle("buttonMove");
});
