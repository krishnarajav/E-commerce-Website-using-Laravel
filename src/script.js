const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const blurBackground = document.querySelector('.blur-background');

function closePopups() {
    wrapper.classList.remove('active-popup');
    blurBackground.style.display = 'none';
}

registerLink.addEventListener('click', ()=> {
    blurBackground.style.display = 'block';
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    blurBackground.style.display = 'block';
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    blurBackground.style.display = 'block';
    wrapper.classList.remove('active');
    wrapper.classList.add('active-popup');
});

blurBackground.addEventListener('click', function() {
    closePopups();
});