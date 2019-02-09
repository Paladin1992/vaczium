"use strict";

const SCREEN_WIDTH_XS = 768;
const OFFSET_Y = 100;
const SCROLL_TIME_MS = 1000;

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

    // menu button
    $('#btn-menu').on('click', function() {
        if ($('.navbar-collapse.collapse').hasClass('in')) { // open -> close
            $(this).removeClass('opened');
        } else { // closed -> open
            $(this).addClass('opened');
        }
    });

    // scroll to section
    $('.menu a[href*="#"]').not('[href="#"]').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        var offset = window.innerWidth < SCREEN_WIDTH_XS ? 0 : OFFSET_Y;
        var destination = target.offset().top - offset;
        var distance = Math.abs(destination - window.pageYOffset);
        var time = distance < OFFSET_Y ? SCROLL_TIME_MS / 10 : SCROLL_TIME_MS;

        $('html, body').animate({
            scrollTop: destination
        }, time, 'linear');
    });
});