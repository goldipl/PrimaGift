function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

const footer_year = document.querySelector('.footer-container__bottom span');

footer_year.innerHTML = new Date().getFullYear();

const toggle_menu_el = document.querySelectorAll('.nav-link.dropdown-toggle');
const main_wrapper = document.getElementById('main-wrapper');

const toggleMainWrapperClass = () => {
    const isMenuOpen = ([...toggle_menu_el]).some(el => el.classList.contains('show'));
  
    if (isMenuOpen) {
      main_wrapper.classList.add('opened-menu');
    } else {
      main_wrapper.classList.remove('opened-menu');
    }
}

document.addEventListener('click', toggleMainWrapperClass);

// Mobile menu
$(document).ready(function () {
  $('.chevron-down-icon').on('click', function (e) {

    var $chevron = $(this);
    var $dropdownMenu = $chevron.closest('.nav-item').find('.dropdown-menu').first();

    $chevron.toggleClass('rotate');
    $dropdownMenu.toggleClass('show');
  });
});
