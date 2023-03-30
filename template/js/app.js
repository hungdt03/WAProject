function changeHeader(pixels) {
    const header = document.querySelector('header');
    if(!localStorage.getItem('header')) {
        localStorage.setItem('header', JSON.stringify(header.innerHTML));
    }

    if(window.pageYOffset >= pixels) {
        const nav = document.querySelector('.header__bottom .container');

        if(nav) {
            nav.backgroundColor = '#00483d';
            header.innerHTML = nav.innerHTML;
        }
        
    } else {
        const getHeader = localStorage.getItem('header');
        if(getHeader) {
            header.innerHTML = JSON.parse(getHeader);
        }
    }
}

window.onscroll = function(e) {
    changeHeader(170)
}