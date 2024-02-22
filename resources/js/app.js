import './bootstrap';

/**
* @TODO verify if this is needed, is .navbar-burger visible-used
*/
$(document).ready(function() {
    $(".navbar-burger").click(function() {
        $(".navbar-burger, .navbar-menu", $(this).closest('.navbar')).toggleClass("is-active");
    });
});
