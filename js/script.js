"use strict";

const COMPANY_NAME = 'Váczium Mérnöki Iroda Bt.';
const SCREEN_WIDTH_XS = 768;
const OFFSET_Y = 100;
const SCROLL_TIME_MS = 1000;

var title = null;
var headerHeight = 0;
var sectionYOffsets = [];

$(window).on('resize', recalculateSectionYOffsets);

function recalculateSectionYOffsets() {
    sectionYOffsets = $.map($('section[name]'), function(item) {
        var $item = $(item);

        return {
            name: $item.attr('name'),
            title: $item.find('h1').html(),
            offsetY: Math.floor($item.offset().top)
        }
    });
}

$(document).ready(function() {
    headerHeight = $('header').outerHeight(true);
    recalculateSectionYOffsets();

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

    $('.navbar-collapse.collapse').on({
        'shown.bs.collapse': recalculateSectionYOffsets,
        'hidden.bs.collapse': recalculateSectionYOffsets
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

    // get current section on screen
    $(window).on('scroll', function() {
        var halfScreenHeight = (window.innerHeight - headerHeight) / 2;
        var currentOffsetY = window.pageYOffset + headerHeight + halfScreenHeight;

        var i = 0;
        while (i < sectionYOffsets.length && sectionYOffsets[i].offsetY < currentOffsetY) {
            i++;
        }
        
        i = i > 0 ? i - 1 : 0;
        document.title = sectionYOffsets[i].title + ' \u2022 ' + COMPANY_NAME;
    });
});