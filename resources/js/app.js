require('./bootstrap');

$(document).ready(function() {
    $('.bio').toggleClass('show');
    $('.links').click(function() { 
        $('.bio').toggleClass('show');
    });
});