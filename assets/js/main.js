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