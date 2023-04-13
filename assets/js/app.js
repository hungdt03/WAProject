
const btnOpenMenu = document.querySelector('.header__menu-bar button')
const btnCloseMenu = document.querySelector('.menu-mobile-table .btn-close')
const menuMobile = document.querySelector('.menu-mobile-table')

btnOpenMenu.addEventListener('click', function(e) {
    menuMobile.classList.add('transform-menu')
})

btnCloseMenu.addEventListener('click', (e) => {
    menuMobile.classList.remove('transform-menu')
})


const searchInput = document.querySelector('.header__center-search-input');

const xhr = new XMLHttpRequest();
searchInput.oninput = function(e) {
    
    if(searchInput.value.length >= 2) {
        
        xhr.addEventListener('load', function(e) {
            
            if(xhr.status === 200 && xhr.readyState === 4) {
                let response = JSON.parse(this.responseText);
                console.log(response.status, response.data);
                if(response.status == true) {
                    renderHistory(response.data, '.header__search-history-list', searchInput.value);
                }
                
            }
        })
    
        xhr.open("GET","http://localhost/WAProject/search-product.php?search=" + encodeURIComponent(searchInput.value));
        xhr.send();
    }
    
}

function renderHistory(response, selector, key) {
    const searchHistory = document.querySelector(selector);
    let html = "";

    html = response.map((product) => {
        return `
            <li class="header__search-history-list-item" onclick="e.preventDefault()">
                <a href="/detailProduct?id=${product.id}" alt="" class="header__search-history-list-item-link d-flex justify-content-between">
                   
                        <div class="search-info-item-wrapper">
                            <h4 class="search-name-product">${product.name}</h4>
                            <p class="search-price-product">${product.price} VND</div>

                            <div class="search-img-item-wrapper">
                                <img width="80px" class="search-img-product" src="./assets/images/${product.image}">
                            </div>
                        </div> 
                   
                </a>
            </li>
        `
    }).join('');

    if(html == "") {
        searchHistory.innerHTML = "Không tìm thấy cho " + key;
    } else {
        searchHistory.innerHTML = html;
    }

    
}


