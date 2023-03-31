// function changeHeader(pixels) {
//     const header = document.querySelector('header');
//     if(!localStorage.getItem('header')) {
//         localStorage.setItem('header', JSON.stringify(header.innerHTML));
//     }

//     if(window.pageYOffset >= pixels) {
//         const nav = document.querySelector('.header__bottom .container');

//         if(nav) {
//             nav.backgroundColor = '#00483d';
//             header.innerHTML = nav.innerHTML;
//             header.classList.add('fixed-scroll-header')
//         }
        
//     } else {
//         const getHeader = localStorage.getItem('header');
//         header.classList.remove('fixed-scroll-header')
//         if(getHeader) {
//             header.innerHTML = JSON.parse(getHeader);
//         }
//     }
// }

// window.onscroll = function(e) {
//     changeHeader(170)
// }



// Xử lý carousel cho product sale
const mainProducts = document.querySelector('.salesflash__content-wrapper');
const wrapperProducts = document.querySelector('.salesflash__content-inner')
const allProducts = document.querySelectorAll('.salesflash__content-item');
const widthProduct = allProducts[0].clientWidth;
const btnPrev = document.querySelector('.salesflash__content-wrapper-button .btn-prev')
const btnNext = document.querySelector('.salesflash__content-wrapper-button .btn-next')
let currentIndex = 0;

btnPrev.onclick = function(e) {
    if(currentIndex == 0)
        return
    currentIndex += widthProduct
    wrapperProducts.style = `transform: translateX(${currentIndex}px)`;
}

btnNext.onclick = function(e) {
    if(currentIndex == -widthProduct * (allProducts.length - 3))
        return
    currentIndex -= widthProduct
    wrapperProducts.style = `transform: translateX(${currentIndex}px)`;
}   