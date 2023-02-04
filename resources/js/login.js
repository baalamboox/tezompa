const password = document.querySelector('#password');
const showPassword = document.querySelector('#show_password');

showPassword?.addEventListener('click', () => {
    showPassword.checked != false ? password.type = 'text' : password.type = 'password';
})
