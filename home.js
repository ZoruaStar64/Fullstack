const registerButton = document.getElementById('registerButton');
const registerForm = document.getElementById('registerForm');
const loginButton = document.getElementById('loginButton');
const loginForm = document.getElementById('loginForm');

let current_rotation = 0;
let firstRotation = true;
let rotateRight = true;
const pageLogo = document.getElementById('pageLogo')
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

logoAnimation();
async function logoAnimation() {
    if (firstRotation === true) {

        for (let animLoop = 0; animLoop < 16; animLoop++) {
            console.log(animLoop);
            if (rotateRight === true) {
                current_rotation += 1;
                pageLogo.style.transform = 'rotate(' + current_rotation + 'deg)';
                await sleep(75)
            }
        }

        rotateRight = false;
        firstRotation = false;
        logoAnimation();
    }
    else {
        for (let animLoop = 0; animLoop < 31; animLoop++) {
            console.log(animLoop);
            if (rotateRight === true) {
                current_rotation += 1;
                pageLogo.style.transform = 'rotate(' + current_rotation + 'deg)';
                await sleep(75)
            }
            if (rotateRight === false) {
                current_rotation -= 1;
                pageLogo.style.transform = 'rotate(' + current_rotation + 'deg)';
                await sleep(75)
            }

            if (rotateRight === true && current_rotation === 15) {
                rotateRight = false;
                animLoop = 0;
            }
            else if (rotateRight === false && current_rotation === -15) {
                rotateRight = true;
                animLoop = 0;
            }

        }
    }
}



registerButton.addEventListener('click', showRegisterForm);
function showRegisterForm() {
    if (registerForm.style.display === 'none') {
        registerForm.style.display = 'block';
    }
    else {
        registerForm.style.display = 'none';
    }
}

loginButton.addEventListener('click', showLoginForm);
function showLoginForm() {

}

