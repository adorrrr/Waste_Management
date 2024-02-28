/* ==== Fluid Animation ===== */
const loginBtn = document.querySelector("#login-btn");
const registerBtn = document.querySelector("#register-btn");
const loginForm = document.querySelector(".login-container");
const registerForm = document.querySelector(".register-container");

loginBtn.addEventListener("click", () => {
    loginForm.style.display = "flex";
    registerForm.style.display = "none";
});

registerBtn.addEventListener("click", () => {
    loginForm.style.display = "none";
    registerForm.style.display = "flex";
});
