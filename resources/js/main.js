const main = document.getElementsByTagName('main')[0];

main?.offsetHeight > window.innerHeight ? [
    main?.classList.remove('fill-screen'),
] : [
    main?.classList.add('fill-screen'),
];
