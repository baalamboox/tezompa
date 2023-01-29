const section = document.getElementsByTagName('section')[0];
const aside = document.getElementsByTagName('aside')[0];

const openAside = document.querySelector('#open_aside');
const closeAside = document.querySelector('#close_aside');

const showAside = () => {
    aside.style.visibility = 'visible';
    section.style.marginRight = '180px';
}
const hideAside = () => {
    aside.style.visibility = 'hidden';
    section.style.marginRight = 0;
}

openAside?.addEventListener('click', showAside);
closeAside?.addEventListener('click', hideAside);
