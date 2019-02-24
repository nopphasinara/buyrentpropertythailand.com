
require('./bootstrap.js');

$(document).ready(() => {
    $('#accordion').on('hide.bs.collapse show.bs.collapse', e => {
        $(e.target)
        .prev()
        .find('i:last-child')
        .toggleClass('fa-minus fa-plus');
    }).on('shown.bs.collapse', e => {
        $('html, body').animate(
            {
                scrollTop: $(e.target).prev().offset().top,
            },
            400
        );
    });

    const toggleMenu = document.querySelector('.toggle-menu');
    const navTop = document.querySelector('.nav-top');

    if (toggleMenu) {
        toggleMenu.addEventListener('click', () => {
            if (navTop) {
                navTop.classList.toggle('is-active');
            }
        });
    }
});
