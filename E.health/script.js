$('.main-iso').isotope({
  // options
  itemSelector: '.newsboxes',
  layoutMode: 'fitRows'
});
$('.menu ul li').click(function(){
  $('.menu ul li').removeClass('active');
  $(this).addClass('active');

  var selector = $(this).attr('data-filter');
  $('.main-iso').isotope({
    filter: selector
  });
  return false;
});
