let contactInner = document.querySelector('.contact__inner');
let contactTitle = document.querySelector('.contact__title');
let contactSubtitle = document.querySelector('.contact__subtitle');
let contact = document.querySelector('.contact');
let contactClose = document.querySelector('.contact__close');
let serviceTypeInput = document.querySelector('.service_type');
let contactInputs = document.querySelectorAll('.contact__input');

contactClose.addEventListener('click', function () {
    contact.classList.remove('active');
})

jQuery(document).ready(function ($) {
    window.addEventListener('load', function () {
        let form = $('.contact__form');
        form.on('submit', function (e) {
            e.preventDefault();
            let data = form.serializeArray();
            let url = form.attr('action');
            $.post(
                url,
                data,
                function () {
                    setTimeout(function () {
                        contact.classList.remove('active');
                        setTimeout(function () {
                            contactInner.style.display = 'flex';
                            contactClose.style.display = 'block';
                            contactTitle.innerText = 'Хотите оставить заявку ещё раз? :)';
                            contactSubtitle.innerText = 'Без проблем, мы рассмотрим её как можно быстрее!'
                        }, 600)
                    }, 1200);
                    contactTitle.innerText = 'Спасибо!';
                    contactSubtitle.innerText = 'Мы получили Вашу заявку! :)'
                    contactInner.style.display = 'none';
                    contactClose.style.display = 'none';
                    contactInputs.forEach(function (input) {
                        input.value = '';
                    })
                }
            )
        })
    })
})
