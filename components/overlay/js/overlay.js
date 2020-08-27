/* HAMBURGER */
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