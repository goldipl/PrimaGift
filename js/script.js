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
  function handleMenuToggle() {
    if ($(window).width() <= 991) {
      // Enable mobile menu interaction
      $('.chevron-down-icon').off('click').on('click', function (e) {
        var $chevron = $(this);
        var $dropdownMenu = $chevron.closest('.nav-item').find('.dropdown-menu').first();

        $chevron.toggleClass('rotate');
        $dropdownMenu.toggleClass('show');
      });
    } else {
      // Cleanup for wider screens
      $('.dropdown-menu').removeClass('show');
      $('.chevron-down-icon').removeClass('rotate');
      $('.chevron-down-icon').off('click');
    }
  }

  // Run on load
  handleMenuToggle();

  // Run on window resize
  $(window).on('resize', function () {
    handleMenuToggle();
  });
});

