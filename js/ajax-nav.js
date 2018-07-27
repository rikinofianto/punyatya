$('.home-link').click(function() {
    linkAjax('home.html');
    $(this).addClass('active');
    $('.about-link').removeClass('active');
    $('.product-link').removeClass('active');
    $('.contact-link').removeClass('active');
});
$('.about-link').click(function() {
    linkAjax('about.html');
    $(this).addClass('active');
    $('.home-link').removeClass('active');
    $('.product-link').removeClass('active');
    $('.contact-link').removeClass('active');
});
$('.product-link').click(function() {
    linkAjax('products.html');
    $(this).addClass('active');
    $('.home-link').removeClass('active');
    $('.about-link').removeClass('active');
    $('.contact-link').removeClass('active');
});
$('.contact-link').click(function() {
    linkAjax('contact.html');
    $(this).addClass('active');
    $('.home-link').removeClass('active');
    $('.about-link').removeClass('active');
    $('.product-link').removeClass('active');
});

function linkAjax(url) {
    var konten = $('#konten');
    $.ajax({
        url: url,
        // dataType: "json",
        // data: data,
        type:"GET",
        success: function(data) {
            konten.html(data);
        }
    });
}