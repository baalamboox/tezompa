import { Collapse } from "bootstrap";

const headerNav = document.getElementsByTagName('nav')[0];
const btnCollapseMenu = document.querySelector('#btn_collapse_menu');
const collapseMenu = document.querySelector('#collapse_menu');
const weatherContainer = document.querySelector('#weather_container');
const time = document.querySelector('#time');
const date = document.querySelector('#date');

const apiKey = 'f1cf7ee24605c6c0f345da328912b69d';
const latitude = 19.20647;
const longitud = -98.95928;

btnCollapseMenu?.addEventListener('click', () => {
    new Collapse(collapseMenu, {
        toggle: true
    });
    
})

collapseMenu?.addEventListener('hidden.bs.collapse', () => headerNav.classList.add('py-0'));
collapseMenu?.addEventListener('show.bs.collapse', () => headerNav.classList.remove('py-0'));

weatherContainer != null ? [
    fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitud}&units=metric&appid=${apiKey}`).then(async data => {
        const weatherCurrent = await data.json();
        weatherContainer.innerHTML = `
            <i class="fa-solid fa-cloud me-1 text-primary"></i>
            <small class="me-1">${ weatherCurrent.main.temp }°</small>
            <small>${ weatherCurrent.sys.country }</small>
        `;
    }).catch(() => {
        weatherContainer.innerHTML = `
            <i class="fa-solid fa-circle-exclamation me-1 text-primary"></i>
            <small>No disponible...</small>
        `;
    }),
] : false;

time.textContent = '00:00';
date.textContent = '01/01/2023';
