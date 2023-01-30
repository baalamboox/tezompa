const header = document.getElementsByTagName('header')[0];
const nav = document.getElementsByTagName('nav')[0];
const main = document.getElementsByTagName('main')[0];
const footer = document.getElementsByTagName('footer')[0];

const openNav = document.querySelector('#open_nav');
const closeNav = document.querySelector('#close_nav');

const showNav = () => {
    openNav.style.visibility = 'collapse';
    nav.style.visibility = 'visible';
    header.style.marginLeft = '300px';
    main.style.marginLeft = '300px';
    footer.style.marginLeft = '300px';
}
const hideNav = () => {
    openNav.style.visibility = 'visible';
    nav.style.visibility = 'hidden';
    header.style.marginLeft = 0;
    main.style.marginLeft = 0;
    footer.style.marginLeft = 0;
}

openNav?.addEventListener('click', showNav);
closeNav?.addEventListener('click', hideNav);
