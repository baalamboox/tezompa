const main = document.getElementsByTagName('main')[0];

main?.offsetHeight > window.innerHeight ? [
    main?.classList.remove('fill-screen'),
] : [
    main?.classList.add('fill-screen'),
];

// const resizeScreen = () => {
//     main?.offsetHeight > window.innerHeight ? [
//         main?.classList.remove('fill-screen'),
//     ] : [
//         main?.classList.add('fill-screen'),
//     ];
// }

// setInterval(resizeScreen, 1000);

// // window.addEventListener('load', resizeScreen);
// // window.addEventListener('resize', resizeScreen);

