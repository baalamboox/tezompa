const main = document.getElementsByTagName('main')[0];

const resizeScreen = () => {
    main?.offsetHeight > window.innerHeight ? [
        main?.classList.remove('fill-screen'),
    ] : [
        main?.classList.add('fill-screen'),
    ];
}

window.addEventListener('load', resizeScreen);
window.addEventListener('resize', resizeScreen);

