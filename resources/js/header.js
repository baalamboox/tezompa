const weatherContainer = document.querySelector('#weather_container');
const time = document.querySelector('#time');
const date = document.querySelector('#date');

const apiKey = 'f1cf7ee24605c6c0f345da328912b69d';
const latitude = 19.20647;
const longitud = -98.95928;

weatherContainer != null ? [
    fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitud}&units=metric&appid=${apiKey}`).then(async data => {
        const weatherCurrent = await data.json();
        weatherContainer.innerHTML = `
            <i class="fa-solid fa-cloud me-1"></i>
            <span class="me-1">${ weatherCurrent.main.temp }°</span>
            <span>${ weatherCurrent.sys.country }</span>
        `;
    }).catch(() => {
        weatherContainer.innerHTML = `
            <i class="fa-solid fa-circle-exclamation me-1"></i>
            <span>No disponible...</span>
        `;
    })

] : false;

time.innerHTML = '19:00';
date.innerHTML = '31/01/2023';
