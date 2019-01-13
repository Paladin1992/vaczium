$(document).ready(function() {
    // sticky header
    window.onscroll = function() {
        var header = document.getElementsByTagName('header')[0];
        var stickyTop = header.offsetTop;
    
        if (window.pageYOffset > stickyTop) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    };

    $('a[href*="#"]').not('[href="#"]').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('html, body').animate({
            scrollTop: target.offset().top - 100
        }, 1000, 'linear');
    });
});