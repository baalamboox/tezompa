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
        toggle: true,
    });
});

collapseMenu?.addEventListener('hidden.bs.collapse', () => headerNav.classList.add('py-0'));
collapseMenu?.addEventListener('show.bs.collapse', () => headerNav.classList.remove('py-0'));

weatherContainer != null ? [
    fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitud}&units=metric&appid=${apiKey}`).then(async data => {
        let weatherCurrent = await data.json();
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

const getCustomDate = () => {
    let date = new Date();
    let completeDate = '';
    if(date.getDate() && (date.getMonth() + 1) <= 9) {
        completeDate += '0' + date.getDate().toString() + '/' + '0' + (date.getMonth() + 1) + '/' + date.getFullYear();
    } else {
        completeDate += date.getDate().toString() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear();
    }
    return completeDate;
}

// Enhance this clock

const getCustomTime = () => {
    let date = new Date();
    let completeTime = date.getHours() + ':' + date.getMinutes();
    time.textContent = completeTime;
    setInterval(getCustomTime, 1000);
}

time != null ? getCustomTime() : false;

date?.append(getCustomDate());
