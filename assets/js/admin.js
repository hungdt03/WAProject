const sidebarItems = document.querySelectorAll('.sidebar-item');
const sidebarWorkSpaces = document.querySelectorAll('.sidebar-workspace-item');

sidebarItems.forEach((sidebarItem, index) => {
    sidebarItem.addEventListener('click', function(e) {
        document.querySelector('.sidebar-item.acitveItem').classList.remove('activeItem');
        document.querySelector('.sidebar-workspace-item.showItem').classList.remove('showItem');

        sidebarItems[index].classList.add('activeItem');
        sidebarWorkSpaces[index].classList.add('showItem');
    })
})

// const btnOpenMenu = document.querySelector('.header__menu-bar button')
// const btnCloseMenu = document.querySelector('.menu-mobile-table .btn-close')
// const menuMobile = document.querySelector('.menu-mobile-table')

// btnOpenMenu.addEventListener('click', function(e) {
//     menuMobile.classList.add('transform-menu')
// })

// btnCloseMenu.addEventListener('click', (e) => {
//     menuMobile.classList.remove('transform-menu')
// })

const btnOpenFormAdd = document.querySelector('.btn-add-cate')
const formCategory = document.querySelector('form.form-category')
const shadow = document.querySelector('.shadow')
const btnCloseForm = document.querySelector('.btn-close-form')

btnOpenFormAdd.addEventListener('click', function(e) {
    shadow.classList.add('form-show');
    formCategory.classList.add('form-show');
})

btnCloseForm.addEventListener('click', function(e) {
    shadow.classList.remove('form-show');
    formCategory.classList.remove('form-show');
})

formCategory.addEventListener('click', function(e) {
    e.stopPropagation();
})

shadow.addEventListener('click', function(e) {
    shadow.classList.remove('form-show');
    formCategory.classList.remove('form-show');
})

const btnUpdateForm = document.querySelector('.btn-update-cate')