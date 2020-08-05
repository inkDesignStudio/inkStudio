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
    overlay.classList.toggle('overlay');
    overlayIcons.classList.toggle('on');
    languageSwitcher.classList.toggle('on');
}))
/* HAMBURGER END */
/* SERVICES */
let servicesCards = document.querySelectorAll('.services__card');
let servicesTabs = document.querySelectorAll('.services__tab');
let servicesContents = document.querySelectorAll('.services__content');
let contentWrapper = document.querySelectorAll('.content__wrapper');

function removeTabClasses() {
    servicesTabs.forEach(tab => tab.classList.remove('current'));
}
function elevateTabs() {
    servicesTabs.forEach(tab => tab.classList.add('active'));
}
function revealContent() {
    servicesContents.forEach(content => content.classList.add('active'));
}
function hideContentWrapper() {
    contentWrapper.forEach(wrapper => wrapper.classList.remove('active'));
}

function removeBorders() {
    servicesCards.forEach(card => card.style.border = 'none');
}


servicesTabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
        elevateTabs();
        removeTabClasses();
        revealContent();
        removeBorders();
        hideContentWrapper();
        if (tab === servicesTabs[0]){
            setTimeout(() => contentWrapper[0].classList.add('active'), 500);
            setTimeout(() => contentWrapper[1].classList.add('active'), 1000);
            setTimeout(() => contentWrapper[2].classList.add('active'), 1500);
        } else if (tab === servicesTabs[1]) {
            setTimeout(() => contentWrapper[1].classList.add('active'), 500);
            setTimeout(() => contentWrapper[0].classList.add('active'), 1000);
            setTimeout(() => contentWrapper[2].classList.add('active'), 1500);
        } else if (tab === servicesTabs[2]) {
            setTimeout(() => contentWrapper[2].classList.add('active'), 500);
            setTimeout(() => contentWrapper[1].classList.add('active'), 1000);
            setTimeout(() => contentWrapper[0].classList.add('active'), 1500);
        }
        tab.classList.add('current');
    })
})
/* SERVICES END */
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
// Contact

let servicesBtns = document.querySelectorAll('.services__btn');
let contact = document.querySelector('.contact');
let contactClose = document.querySelector('.contact__close');

servicesBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
        contact.classList.add('active');
    })
})
contactClose.addEventListener('click', function () {
    contact.classList.remove('active');
})

// Contact END