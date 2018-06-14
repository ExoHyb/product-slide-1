console.log( "Lopa let's go!" );

if($(document).width() < 768) {
  $('.image-wrapper-mobile').slick({
    arrows: false,
    infinite: false,
    dots: true,
    customPaging : function(slider, i) {
        return '';
    },
  });
  var widthWrapperDots = $('.slick-dots').width();
  var numberDots = $('.slick-dots li').length;
  var widthDots = widthWrapperDots / numberDots + 'px';
  $('.slick-dots li').css('width', widthDots);
  $('.slick-dots li:first-child').addClass('dotsPrimary');
  $('.slick-dots li:not(.dotsPrimary)').remove();

  if ($('.slick-track > div').hasClass('slick-current')) {
    $('.slick-dots li').css('transform', 'translateX('+widthDots+')');
  }
}
