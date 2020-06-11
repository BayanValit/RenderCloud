var $page = $('html, body');
var $navbutton = $('button.navbar-toggler');
$('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 70
    }, 500);
        if ($navbutton.attr('aria-expanded') == 'true') {
        $navbutton.click();
    }
    return false;
});
