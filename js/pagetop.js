$(function() {
  'use strict';

  $('#page_top').on('click', function() {
    $('html, body').not(':animated').animate({scrollTop: 0}, 600);
  });
});
