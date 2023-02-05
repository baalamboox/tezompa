const mainTag = document.getElementsByTagName('main')[0];

mainTag.offsetHeight > window.innerHeight ? [
    console.log('se paso'),
] : [
    console.log('No se paso'),
];
