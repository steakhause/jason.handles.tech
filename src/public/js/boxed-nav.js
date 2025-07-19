$(function () {
    const $menu = $('#boxed-nav-menu');
    const $links = $('#boxed-nav a[href^="#"]');

    // 1. open / close menu
    $('#boxed-nav-toggle').on('click', function () {
        $menu.stop(true, true).slideToggle(400);
        $('#boxed-nav-icon').toggleClass('rotate-180');
    });

    // 2. smooth scroll on click
    $links.on('click', function (e) {
        e.preventDefault();
        const $target = $($(this).attr('href'));
        if ($target.length) {
            $('html, body').animate({ scrollTop: $target.offset().top }, 600);
        }
        $menu.addClass('hidden');              // auto-close after click
    });

    // 3. highlight active link while scrolling
    const sections = $('section[id]');
    $(window).on('scroll', () => {
        const pos = $(window).scrollTop() + 100; // offset for early highlight
        sections.each(function () {
            const top = $(this).offset().top;
            const bottom = top + $(this).outerHeight();
            const id = $(this).attr('id');
            if (pos >= top && pos < bottom) {
                $('#boxed-nav a').removeClass('bg-red-600 text-white');
                $('#boxed-nav a[href="#' + id + '"]').addClass('bg-red-600 text-white');
            }
        });
    });

});


