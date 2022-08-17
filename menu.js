const menuList = document.querySelector('.menu-list');
const Hambuger = document.querySelector('.hambuger');

menuList.addEventListener("click", mobileMenu);

function mobileMenu(){
    menuList.classList.toggle("active");
    Hambuger.classList.toggle("active");
}
