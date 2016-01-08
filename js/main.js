$(function(){
  $('.triggerOnClick').click(function(e){
    var selector = $(this).data("selector");
    $(selector).click();
  });
});

$(function(){
  "use strict";

  // var $serviceCtx = $("#tufftex-service");
  // $('a[data-rel^=lightcase]').lightcase();

  $(".various").click(function(e){
    e.preventDefault();
    var href = $(this).attr("href");
    $.fancybox.open({href : href});
  });

  var $container = $('.isotope').isotope({
    itemSelector: '.element-item',
    layoutMode: 'fitRows',
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      filter: '.service-product',
      weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });

  $('.filter-service-btn').click(function(e){
    e.preventDefault();
    var filter = $(this).data('filter');
    $container.isotope({filter: filter});
    $('.filter-service-btn').removeClass('active');
    $(this).addClass('active');
  }).filter('.product').click();
});

$(function(){
  "use strict";

  var $viewAllBtn = $(".view-all-btn");
  var $nextAll = $(".pic-simple").eq(11).nextAll();
  if($nextAll.size() === 0) {
    $viewAllBtn.hide();
  }
  else {
    $nextAll.hide();
  }

  $viewAllBtn.click(function(e){
    e.preventDefault();
    $nextAll.show();
    $viewAllBtn.hide();
  });

  $(".pic-simple").click(function(e){
    e.preventDefault();

    var that = this;
    var items = [];
    var index = 0;
    
    $(".pic-simple:visible").each(function(index, el){
      var obj = {
        href: $('.img-responsive', el).attr('src')
      };
      if(el == that) {
        index = index;
      }
      items.push(obj);
    });
    $.fancybox.open(items, {
      index: index
    });
  });
});
