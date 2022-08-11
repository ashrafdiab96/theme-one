/**
 * Name: admin-main.js
 * Date: AUGUST - 2022
 * Author: F&D Engineering
 * Developer: Ashraf Diab
 * Version: V1.1
 */

jQuery(document).ready(function($) {

	"use strict";

    $('#toggleSidebar').on('click', () => {
        if (!$('body').hasClass("sidebar-collapse") && $('body').hasClass("sidebar-open")) {
            $('body').removeClass("sidebar-open");
            $('body').addClass("sidebar-collapse");
            $('body').addClass("sidebar-mini");
        } else if($('body').hasClass("sidebar-collapse")) {
            $('body').removeClass("sidebar-collapse");
            $('body').addClass("sidebar-open");
        } else {
            $('body').addClass("sidebar-collapse");
            $('body').addClass("sidebar-open");
        }
    });

});
