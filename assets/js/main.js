/* PRELOADER */
let smile = document.querySelector(".smile");
let logo = document.querySelector(".logo");
let mainTitle = document.querySelector(".main_title");
let menuToggle = document.querySelector('.menu_toggle');
let line = document.querySelector('.line');
function lineOpacity() {
    setInterval(() => line.style.opacity = '1', 800);
    setInterval(() => line.style.opacity = '0', 1600 );
}
document.addEventListener("DOMContentLoaded", function() {
    document.body.style.overflow = 'hidden';
    window.scrollTo(0,0);
    setTimeout(() => smile.style.opacity = "1", 3000);
    setTimeout(() => logo.style.opacity = '1', 3000);
    setTimeout(() => mainTitle.style.opacity = '1', 3000);
    setTimeout(() => menuToggle.style.opacity = '1', 3000);
    setTimeout(() => smile.style.backgroundImage = "url('img/smile_success.png')", 4000);
    setTimeout(() => document.body.style.overflow = "", 4000);
    setTimeout(() => smile.style.backgroundSize = "contain", 4000);
    setTimeout(() => smile.style.backgroundRepeat = "no-repeat", 4000);
    setTimeout(() => mainTitle.style.width = '112px', 4000);
    setTimeout(() => smile.style.backgroundImage = "url('img/smile_loading.png')", 5000);
    setTimeout(lineOpacity, 3000);
});
/* PRELOADER END */
/* HAMBURGER */
let menuHamburger = document.querySelector('.menu_hamburger');
const overlay = document.createElement('div');
overlay.classList.add('menu');
const linksWrapper = document.createElement('div');
linksWrapper.classList.add('links_wrapper');
overlay.append(linksWrapper);
const linkMain = document.createElement('a');
linkMain.classList.add('nav_link');
linkMain.textContent = 'главная';
linkMain.href = '#main';
linksWrapper.append(linkMain);
const linkServices = document.createElement('a');
linkServices.classList.add('nav_link');
linkServices.textContent = 'услуги';
linkServices.href = '#services';
linksWrapper.append(linkServices);
const linkPortfolio = document.createElement('a');
linkPortfolio.classList.add('nav_link');
linkPortfolio.textContent = 'портфолио';
linkPortfolio.href = 'archive.html';
linksWrapper.append(linkPortfolio);
const header = document.querySelector('header');
header.after(overlay);
let spans = document.querySelectorAll('.menu_span');

const iconList = document.createElement('div');
iconList.classList.add('icon_list')
overlay.append(iconList);
const bhIcon = document.createElement('img');
const bhIconLink = document.createElement('a');
bhIconLink.href = '#';
bhIcon.src = 'img/bh.png';
bhIconLink.classList.add('nav_img');
iconList.append(bhIconLink);
bhIconLink.append(bhIcon);
const instIcon = document.createElement('img');
const instIconLink = document.createElement('a');
instIconLink.href = '#';
instIcon.src = 'img/inst.png';
instIconLink.classList.add('nav_img');
iconList.append(instIconLink);
instIconLink.append(instIcon);
const mailIcon = document.createElement('img');
const mailIconLink = document.createElement('a');
mailIconLink.href = '#';
mailIcon.src = 'img/mail.png';
mailIconLink.classList.add('nav_img');
iconList.append(mailIconLink);
mailIconLink.append(mailIcon);
const inIcon = document.createElement('img');
const inIconLink = document.createElement('a');
inIconLink.href = '#';
inIcon.src = 'img/in.png';
inIconLink.classList.add('nav_img');
iconList.append(inIconLink);
inIconLink.append(inIcon);
let links = document.querySelectorAll('.nav_link');

const languageSwitcher = document.createElement('div');
languageSwitcher.classList.add('nav_switcher');
languageSwitcher.textContent = 'RU';
overlay.append(languageSwitcher);

menuHamburger.addEventListener("click", function () {
    menuHamburger.classList.toggle('on');
    spans.forEach(element => element.classList.toggle('on'));
    links.forEach(element => element.classList.toggle('on'));
    overlay.classList.toggle('overlay');
    iconList.classList.toggle('on');
    languageSwitcher.classList.toggle('on');
});
links.forEach(element => element.addEventListener('click', function () {
    menuToggle.classList.toggle('on');
    spans.forEach(element => element.classList.toggle('on'));
    links.forEach(element => element.classList.toggle('on'));
    overlay.classList.toggle('overlay');
    iconList.classList.toggle('on');
    languageSwitcher.classList.toggle('on');
}))
/* HAMBURGER END */
/* SERVICES */
let servicesGrid = document.querySelector('.services_grid');
let srvA = document.querySelector('.service_a');
let srvB = document.querySelector('.service_b');
let srvC = document.querySelector('.service_c');
let services = document.querySelectorAll('.service');
let servicesUnactive = document.querySelectorAll('.service_unactive');
let buttons = document.querySelectorAll('.btn.srv');
let contactForm = document.querySelector('.contact');
let contactClose = document.querySelector('.contact__close')
function openA () {
    services.forEach(element => element.classList.remove('unselected'));
    services.forEach(element => element.classList.add('selected'));
    buttons.forEach(element => element.classList.add('on'));
    servicesUnactive[0].classList.add('active');
    servicesUnactive[1].classList.remove('active');
    servicesUnactive[2].classList.remove('active');
    servicesUnactive[0].classList.remove('on');
    servicesUnactive[1].classList.add('on');
    servicesUnactive[2].classList.add('on');
    services[0].firstElementChild.classList.add('main');
    services[1].firstElementChild.classList.remove('main');
    services[2].firstElementChild.classList.remove('main');
    services[1].firstElementChild.classList.add('on');
    services[2].firstElementChild.classList.add('on');
    services[0].firstElementChild.classList.add('on');
    srvA.classList.add('on');
    servicesGrid.classList.add('on');
    srvA.classList.remove('on');
    srvB.classList.remove('on');
    srvC.classList.remove('on');
    setTimeout(() => srvA.classList.add('on'), 500);
    setTimeout(() => srvB.classList.add('on'), 900);
    setTimeout(() => srvC.classList.add('on'), 1300);
}
function openB () {
    services.forEach(element => element.classList.remove('unselected'));
    services.forEach(element => element.classList.add('selected'));
    buttons.forEach(element => element.classList.add('on'));
    servicesUnactive[0].classList.remove('active');
    servicesUnactive[1].classList.add('active');
    servicesUnactive[2].classList.remove('active');
    servicesUnactive[0].classList.add('on');
    servicesUnactive[1].classList.remove('on');
    servicesUnactive[2].classList.add('on');
    services[0].firstElementChild.classList.remove('main');
    services[1].firstElementChild.classList.add('main');
    services[2].firstElementChild.classList.remove('main');
    services[0].firstElementChild.classList.add('on');
    services[2].firstElementChild.classList.add('on');
    services[1].firstElementChild.classList.add('on');
    servicesGrid.classList.add('on');
    srvA.classList.remove('on');
    srvB.classList.remove('on');
    srvC.classList.remove('on');
    setTimeout(() => srvB.classList.add('on'), 500);
    setTimeout(() => srvA.classList.add('on'), 900);
    setTimeout(() => srvC.classList.add('on'), 1300);
}
function openC () {
    services.forEach(element => element.classList.remove('unselected'));
    services.forEach(element => element.classList.add('selected'));
    buttons.forEach(element => element.classList.add('on'));
    servicesUnactive[0].classList.remove('active');
    servicesUnactive[1].classList.remove('active');
    servicesUnactive[2].classList.add('active');
    servicesUnactive[0].classList.add('on');
    servicesUnactive[1].classList.add('on');
    servicesUnactive[2].classList.remove('on');
    services[0].firstElementChild.classList.remove('main');
    services[1].firstElementChild.classList.remove('main');
    services[2].firstElementChild.classList.add('main');
    services[2].firstElementChild.classList.add('on');
    services[0].firstElementChild.classList.add('on');
    services[1].firstElementChild.classList.add('on');
    servicesGrid.classList.add('on');
    srvA.classList.remove('on');
    srvB.classList.remove('on');
    srvC.classList.remove('on');
    setTimeout(() => srvC.classList.add('on'), 500);
    setTimeout(() => srvB.classList.add('on'), 900);
    setTimeout(() => srvA.classList.add('on'), 1300);
}
buttons.forEach(element => element.addEventListener('click', function () {
    contactForm.classList.add('on');
}));
contactClose.addEventListener('click',function () {
    contactForm.classList.remove('on');
});
servicesUnactive[0].addEventListener('click', openA)
servicesUnactive[1].addEventListener('click', openB)
servicesUnactive[2].addEventListener('click', openC)
services[0].firstElementChild.addEventListener('click', openA);
services[1].firstElementChild.addEventListener('click', openB);
services[2].firstElementChild.addEventListener('click', openC);
/* SERVICES END */



let textItemWrapper = document.querySelector('.marquee');
let textItem = document.querySelector('.marquee_text');
let fooElem = document.createElement('span');
fooElem.innerText = 'our works'
let screenW = window.innerWidth;
let textItemWidth = textItem.offsetWidth;

i = 0 ;

function myLoop() {
    setTimeout(function() {
        textItem.style.marginLeft = -i + 'px';
        i++;
        if (i < screenW) {
            myLoop();
        } else if (i === screenW) {
            i = 0;
            textItem.style.marginLeft = 0 + 'px';
            myLoop();
        }

    }, 5)
}

myLoop();