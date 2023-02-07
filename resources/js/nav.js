const header = document.getElementsByTagName('header')[0];
const nav = document.getElementsByTagName('nav')[1];
const main = document.getElementsByTagName('main')[0];
const footer = document.getElementsByTagName('footer')[0];

const openNav = document.querySelector('#open_nav');
const closeNav = document.querySelector('#close_nav');

const showNav767 = () => {
    openNav.style.visibility = 'collapse';
    nav.style.visibility = 'visible';
    header.style.marginLeft = 0;
    main.style.marginLeft = 0;
    footer.style.marginLeft = 0;
}

const showNav = () => {
    openNav.style.visibility = 'collapse';
    nav.style.visibility = 'visible';
    header.style.marginLeft = '300px';
    main.style.marginLeft = '300px';
    footer.style.marginLeft = '300px';
}
const hideNav = () => {
    openNav.style.visibility = 'visible';
    nav.style.visibility = 'collapse';
    header.style.marginLeft = 0;
    main.style.marginLeft = 0;
    footer.style.marginLeft = 0;
}

window.innerWidth <= 767 ? hideNav() : false;
window.innerWidth <= 767 ? showNav767() : false;

window.addEventListener('resize', () => {
    window.innerWidth <= 767 ? hideNav() : showNav767();
})

openNav?.addEventListener('click', showNav);
closeNav?.addEventListener('click', hideNav);
