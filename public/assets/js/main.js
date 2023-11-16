// Navigation Bar
$('.open-search-box').click(function () {
    $('.searching-box').slideDown();
});
$('.close-search-box').click(function () {
    $('.searching-box').fadeOut();
    $('.searching-box form').slideUp();
});

// Side Nav
$('.menu-toggler').click(function () {
    $('.side-nav').fadeIn();
});
$('.close-side-nav').click(function () {
    $('.side-nav').fadeOut();
})