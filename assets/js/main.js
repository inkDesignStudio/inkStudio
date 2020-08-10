/* HAMBURGER */
let line = document.querySelector('.header__line');
let headerTitle = document.querySelector(".header__title");

let menu = document.querySelector('.menu');
let menuToggle = document.querySelector('.menu__toggle');
let spans = document.querySelectorAll('.menu__span');
let links = document.querySelectorAll('.overlay__link');
let overlay = document.querySelector('.overlay');
let overlayIcons = document.querySelector('.overlay__icons');
let languageSwitcher = document.querySelector('.overlay__language');

menu.addEventListener("click", function () {
    menu.classList.toggle('on');
    spans.forEach(element => element.classList.toggle('on'));
    links.forEach(element => element.classList.toggle('on'));
    overlay.classList.toggle('active');
    overlayIcons.classList.toggle('on');
    languageSwitcher.classList.toggle('on');
});
links.forEach(element => element.addEventListener('click', function () {
    menuToggle.classList.toggle('on');
    spans.forEach(element => element.classList.toggle('on'));
    links.forEach(element => element.classList.toggle('on'));
    overlay.classList.toggle('active');
    overlayIcons.classList.toggle('on');
    languageSwitcher.classList.toggle('on');
}))
/* HAMBURGER END */
/* PORTFOLIO */
let gridItems = document.querySelectorAll('.grid__item');

function resizeBg() {
    this.classList.add('active');
}
function initialBg() {
    this.classList.remove('active');
}

gridItems.forEach(function (gridItem) {
    gridItem.addEventListener('mouseover', resizeBg);
    gridItem.addEventListener('mouseout', initialBg);
})
/* PORTFOLIO END */