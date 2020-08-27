/* PRELOADER */
let preloaderSection = document.querySelector('.preloader_load');
let line = document.querySelector('.header__line');
let headerTitle = document.querySelector(".header__title");
let smile = document.querySelectorAll(".preloader__smile_load");
let preloaderBox = document.querySelector('.preloader__box_load');
let logo = document.querySelector(".header__logo");
let headerMenu = document.querySelector('.header__menu');

document.addEventListener("DOMContentLoaded", function() {
    document.body.style.overflow = 'hidden';
    window.scrollTo(0,0);
    document.body.style.overflow = 'visible';
    window.addEventListener('load', function (event) {
        setTimeout(function () {
            smile[1].classList.add('active');
            smile[0].classList.remove('active');
        }, 500);
        setTimeout(function () {
            smile[1].classList.remove('active');
            smile[0].classList.add('active');
            logo.classList.add('active');
            headerMenu.classList.add('active');
            headerTitle.classList.add('active');
            line.classList.add('active');
            preloaderSection.style.transition = '.5s';
            preloaderSection.classList.add('active');
            setTimeout(() => preloaderSection.remove(), 500);
        },
            1000)
    })
});
/* PRELOADER END */