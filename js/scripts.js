const btnDropdown = document.querySelector('.js-btn-dropdown');
const dropdown = document.querySelector('.js-dropdown');
const headerSite = document.getElementById('js-header');
function openDropdown(event){
    event.preventDefault();
    dropdown.classList.toggle('active');
}

btnDropdown.firstElementChild.addEventListener('click', openDropdown);
dropdown.addEventListener('mouseleave', openDropdown);

function fixedMenu(){
    console.log('scroll');
    console.log(window.pageYOffset);
    if (window.pageYOffset >= 80){
        headerSite.classList.add('fixed-menu');
    }else{
        headerSite.classList.remove('fixed-menu');
    }
}

console.log(headerSite);
window.addEventListener('scroll', fixedMenu);