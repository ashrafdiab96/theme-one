/**
 * Name: main.js
 * Date: JULY - 2022
 * Author: F&D Engineering
 * Developer: Ashraf Diab
 * Version: V1.1
 */

jQuery(document).ready(function($) {

	"use strict";

    /* Start navbar */
    // Launch navbar dropdown on mouse hover insted of click
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", () => {
    if ($(window).width() > 992) {
        $dropdown.hover(
        function() {
            const $this = $(this);
            $this.addClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "true");
            $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
            const $this = $(this);
            $this.removeClass(showClass);
            $this.find($dropdownToggle).attr("aria-expanded", "false");
            $this.find($dropdownMenu).removeClass(showClass);
        }
        );
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
    });

    // make navbar fixed after pixel
    $(window).scroll(function(){
        let scrollTop = $(window).scrollTop();
        if(scrollTop >= 160) {
            $('.main-nav-cont').addClass('new-nav-style');
            $('.nav-logo').addClass('new-logo');
        }
        else {
            $('.main-nav-cont').removeClass('new-nav-style');
            $('.nav-logo').removeClass('new-logo');
        }
    });

    /* End navbar */

    /* Start slider */
    let splide = new Splide('#slider-splide', {
        autoplay: 'true',
    });
    splide.mount();
    /* End slider */

    /* Start projects slider */
    let splide_proj = new Splide('#projects-splide', {
        autoplay: 'true',
        perPage: 4,
        rewind : true,
        type: 'loop',
        focus: 'center',
        pagination: false,
      });
      splide_proj.mount();
    /* End projects slider */

});
