$(document).ready(function() {
    $('a[href*="#"]').not('[href="#"]').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('html, body').animate({
            scrollTop: target.offset().top - 100
        }, 1000, 'linear');
    });
});