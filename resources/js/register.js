const password = document.querySelector('#password');
const passwordConfirm = document.querySelector('#password_confirm');
const showPassword = document.querySelector('#show_password');

showPassword?.addEventListener('click', () => {
    showPassword.checked != false ? [
        password.type = 'text',
        passwordConfirm.type = 'text'
    ] : [
        password.type = 'password',
        passwordConfirm.type = 'password'
    ];
})
