window.onscroll = function() {
    stickyNavbar();
};

function stickyNavbar() {
    const navbar = document.querySelector('.navbar');
    const content = document.querySelector('.content');
    const sticky = navbar.offsetTop;

    if (window.pageYOffset > sticky) {
        navbar.classList.add('sticky');
        content.style.marginTop = navbar.offsetHeight + 'px';
    } else {
        navbar.classList.remove('sticky');
        content.style.marginTop = '0';
    }
}
