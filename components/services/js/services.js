/* SERVICES */
let servicesBtns = document.querySelectorAll('.services__btn');

let servicesCards = document.querySelectorAll('.services__card');
let servicesTabs = document.querySelectorAll('.services__tab');
let servicesContents = document.querySelectorAll('.services__content');
let contentWrapper = document.querySelectorAll('.content__wrapper');

let servicePrepayments = document.querySelectorAll('.services__title_prepayment');
let serviceVariants = document.querySelectorAll('.services__subtitle_variants');
let serviceTerms = document.querySelectorAll('.services__subtitle_term');
let serviceReworks = document.querySelectorAll('.services__subtitle_reworks');
let servicePrices = document.querySelectorAll('.services__title_price');

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
            setTimeout(function () {
                servicePrepayments[0].innerText = serviceFirstPrepaymentA;
                servicePrepayments[1].innerText = serviceFirstPrepaymentB;
                servicePrepayments[2].innerText = serviceFirstPrepaymentC;
                serviceVariants[0].innerText = serviceFirstVariantsA;
                serviceVariants[1].innerText = serviceFirstVariantsB;
                serviceVariants[2].innerText = serviceFirstVariantsC;
                serviceTerms[0].innerText = serviceFirstTermsA;
                serviceTerms[1].innerText = serviceFirstTermsB;
                serviceTerms[2].innerText = serviceFirstTermsC;
                serviceReworks[0].innerText = serviceFirstCorrectionsA;
                serviceReworks[1].innerText = serviceFirstCorrectionsB;
                serviceReworks[2].innerText = serviceFirstCorrectionsC;
                servicePrices[0].innerText = serviceFirstPriceA;
                servicePrices[1].innerText = serviceFirstPriceB;
                servicePrices[2].innerText = serviceFirstPriceC;
            }, 500)
            setTimeout(() => contentWrapper[0].classList.add('active'), 500);
            setTimeout(() => contentWrapper[1].classList.add('active'), 1000);
            setTimeout(() => contentWrapper[2].classList.add('active'), 1500);
            servicesBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    contact.classList.add('active');
                    if (btn === servicesBtns[0]) {
                        serviceTypeInput.value = `Услуга: ${serviceFirst}. Вариант: А`;
                    }
                    else if (btn === servicesBtns[1]) {
                        serviceTypeInput.value = `Услуга: ${serviceFirst}. Вариант: В`;
                    }
                    else if (btn === servicesBtns[2]) {
                        serviceTypeInput.value = `Услуга: ${serviceFirst}. Вариант: C`;
                    }
                })
            })
        } else if (tab === servicesTabs[1]) {
            setTimeout(function () {
                servicePrepayments[0].innerText = serviceSecondPrepaymentA;
                servicePrepayments[1].innerText = serviceSecondPrepaymentB;
                servicePrepayments[2].innerText = serviceSecondPrepaymentC;
                serviceVariants[0].innerText = serviceSecondVariantsA;
                serviceVariants[1].innerText = serviceSecondVariantsB;
                serviceVariants[2].innerText = serviceSecondVariantsC;
                serviceTerms[0].innerText = serviceSecondTermsA;
                serviceTerms[1].innerText = serviceSecondTermsB;
                serviceTerms[2].innerText = serviceSecondTermsC;
                serviceReworks[0].innerText = serviceSecondCorrectionsA;
                serviceReworks[1].innerText = serviceSecondCorrectionsB;
                serviceReworks[2].innerText = serviceSecondCorrectionsC;
                servicePrices[0].innerText = serviceSecondPriceA;
                servicePrices[1].innerText = serviceSecondPriceB;
                servicePrices[2].innerText = serviceSecondPriceC;
            }, 500)
            setTimeout(() => contentWrapper[1].classList.add('active'), 500);
            setTimeout(() => contentWrapper[0].classList.add('active'), 1000);
            setTimeout(() => contentWrapper[2].classList.add('active'), 1500);
            servicesBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    contact.classList.add('active');
                    if (btn === servicesBtns[0]) {
                        serviceTypeInput.value = `Услуга: ${serviceSecond}. Вариант: А`;
                    }
                    else if (btn === servicesBtns[1]) {
                        serviceTypeInput.value = `Услуга: ${serviceSecond}. Вариант: В`;
                    }
                    else if (btn === servicesBtns[2]) {
                        serviceTypeInput.value = `Услуга: ${serviceSecond}. Вариант: С`;
                    }
                })
            })
        } else if (tab === servicesTabs[2]) {
            setTimeout(function () {
                servicePrepayments[0].innerText = serviceThirdPrepaymentA;
                servicePrepayments[1].innerText = serviceThirdPrepaymentB;
                servicePrepayments[2].innerText = serviceThirdPrepaymentC;
                serviceVariants[0].innerText = serviceThirdVariantsA;
                serviceVariants[1].innerText = serviceThirdVariantsB;
                serviceVariants[2].innerText = serviceThirdVariantsC;
                serviceTerms[0].innerText = serviceThirdTermsA;
                serviceTerms[1].innerText = serviceThirdTermsB;
                serviceTerms[2].innerText = serviceThirdTermsC;
                serviceReworks[0].innerText = serviceThirdCorrectionsA;
                serviceReworks[1].innerText = serviceThirdCorrectionsB;
                serviceReworks[2].innerText = serviceThirdCorrectionsC;
                servicePrices[0].innerText = serviceThirdPriceA;
                servicePrices[1].innerText = serviceThirdPriceB;
                servicePrices[2].innerText = serviceThirdPriceC;
            }, 500)
            setTimeout(() => contentWrapper[2].classList.add('active'), 500);
            setTimeout(() => contentWrapper[1].classList.add('active'), 1000);
            setTimeout(() => contentWrapper[0].classList.add('active'), 1500);
            servicesBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    contact.classList.add('active');
                    if (btn === servicesBtns[0]) {
                        serviceTypeInput.value = `Услуга: ${serviceThird}. Вариант: А`;
                    }
                    else if (btn === servicesBtns[1]) {
                        serviceTypeInput.value = `Услуга: ${serviceThird}. Вариант: В`;
                    }
                    else if (btn === servicesBtns[2]) {
                        serviceTypeInput.value = `Услуга: ${serviceThird}. Вариант: С`;
                    }
                })
            })
        }
        tab.classList.add('current');
    })
})
/* SERVICES END */