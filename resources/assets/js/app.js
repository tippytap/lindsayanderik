
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function(){
    // Create cross browser requestAnimationFrame method:
    window.requestAnimationFrame = window.requestAnimationFrame
    || window.mozRequestAnimationFrame
    || window.webkitRequestAnimationFrame
    || window.msRequestAnimationFrame
    || function(f){setTimeout(f, 1000/60)}

    $(".paralaxThis").each(function(idx){
        var i = idx + 1;
        var moveImage = $(this);

        function parallax(){
            var viewableOffset = moveImage.offset().top - $(window).scrollTop();
                moveImage.css("transform", "translateY(" + viewableOffset * 0.15 + "px" + ") translateZ(0px)");
        }

        parallax();

        window.addEventListener('scroll', function(e){ // on page scroll
            requestAnimationFrame(parallax) // call parallax() on next available screen repaint
        }, false);
    });

    // if($(".photo").length > 0){
    //     $(".photo").each(function(){
    //         var src = $(this).find("img").attr("src");
    //         $(this).css({
    //             "background-image": "url(" + src + ")"
    //         });
    //     });
    // }
});
