/*!
* Start Bootstrap - Shop Homepage v5.0.5 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

$(document).ready(function(){
    
    $("#slider-hero").owlCarousel({
        loop: true,
        nav: true,
        // mouseDrag: false,
        items: 1,/*
        dots: false,
        margin: 0,*/
        navText: [
            "<i class='fas fa angle-left'><</i>",
            "<i class='fas fa angle-right'>></i>"
        ],
        navContainer: "#slider-hero-nav",
    });
    
});