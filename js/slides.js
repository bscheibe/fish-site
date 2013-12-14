$(function(){
  $("#slides").slides({
    preloadImage: 'images/loading.gif',
    play: 5000,
    slideSpeed: 500,
    effect: 'fade',
    generatePagination: true,
    generateNextPrev: true,
    autoHeight: true
  });
});
