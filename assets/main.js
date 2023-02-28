$(function() {
    $('.slider').slick( {
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrows:true,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        dots:false
    })
});