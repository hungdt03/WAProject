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