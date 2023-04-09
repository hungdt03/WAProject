// Xử lý carousel cho product img
const mainImages = document.querySelector('.detailproduct__img-list');
const wrapperImages = document.querySelector('.detailproduct__img-list-shrink')
const allImages = document.querySelectorAll('.detailproduct__img-item');
const widthImage = allImages[0].clientWidth;
const btnPrev = document.querySelector('.detailproduct-button .btn-prev')
const btnNext = document.querySelector('.detailproduct-button .btn-next')
let currentIndex = 0;

btnPrev.onclick = function(e) {
    if(currentIndex == 0)
        return
    currentIndex += widthImage
    wrapperImages.style = `transform: translateX(${currentIndex}px)`;
}

btnNext.onclick = function(e) {
    if(currentIndex == -widthImage * (allImages.length - 4))
        return
    currentIndex -= widthImage
    wrapperImages.style = `transform: translateX(${currentIndex}px)`;
}   