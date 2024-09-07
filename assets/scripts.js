
(function($){

  var $grid = $('.wppg-grid').isotope({
    itemSelector: '.wppg-grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: '.wppg-grid-sizer',
      gutter:'.wppg-gutter-sizer'
    }
  })

  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });

  var iso = $grid.data('isotope');

  $grid.infiniteScroll({
    path: getPenPath,
    history: false,
    append: '.wppg-grid-item',
    outlayer: iso,
    status: '.page-load-status',
    button: '.view-more-button',
    scrollThreshold: (WPIG.enable_infinite_scroll == 'on')? true: false,
    onInit: function() {
      // this.on( 'load', function() {
      //   fixMargin();        
      // });
      
      // $grid.imagesLoaded().progress( function() {
      //   $grid.isotope('layout');
      // });
    }
  });

  function addParameterToURL(param){
    _url = location.href;
    _url += (_url.split('?')[1] ? '&':'?') + param;
    return _url;
}

  function getPenPath() {
    var loadPage = this.loadCount+2;
    // return insertParam("gallery", loadPage);
    return addParameterToURL("gallery="+loadPage);
  }

})(jQuery)