document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.wrapper');
    const registerLink = document.querySelector('.register-link');
    const loginLink = document.querySelector('.login-link');
    const btnPopup = document.querySelector('.btnLogin-popup');
    const blurBackground = document.querySelector('.blur-background');

    if (registerLink) {
        registerLink.addEventListener('click', function() {
            blurBackground.style.display = 'block';
            wrapper.classList.add('active');
        });
    }

    if (loginLink) {
        loginLink.addEventListener('click', function() {
            blurBackground.style.display = 'block';
            wrapper.classList.remove('active');
        });
    }

    if (btnPopup) {
        btnPopup.addEventListener('click', function() {
            blurBackground.style.display = 'block';
            wrapper.classList.remove('active');
            wrapper.classList.add('active-popup');
        });
    }
});
