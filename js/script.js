"use strict";

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

    // menu
    $('#btn-menu').on('click', function() {
        if ($('.navbar-collapse.collapse').hasClass('in')) { // open -> close
            $(this).removeClass('opened');
        } else { // closed -> open
            $(this).addClass('opened');
        }
    });

    $('a[href*="#"]').not('[href="#"]').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        var offset = window.innerWidth < 768 ? 0 : 100;

        $('html, body').animate({
            scrollTop: target.offset().top - offset
        }, 1000, 'linear');
    });
});