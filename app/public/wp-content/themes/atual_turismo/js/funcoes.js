(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

$.fn.centralize = function () {
    var $element = $(this),
        $width = $element.width() /2,
        $height = $element.height() /2;
    $element.css('margin-left', - $width).css('margin-top', -$height);
};


$('.description_content .gallery').remove('br');


$(document).ready(function(){

  $('ul.updates-list li span.trigger_services').click(function(){
      $(this).parent('li').toggleClass('open_modal');
      $('ul.updates-list').addClass('open');
      $('body').addClass('open--modal');
  });

  $('ul.updates-list li span.close_btn').click(function(){
     $('ul.updates-list li').removeClass('open_modal');
     $('ul.updates-list').removeClass('open');
     $('body').removeClass('open--modal');
     $('body').removeClass('open-services');
  });

  $('ul.updates-list.promotion-travel li span.trigger_services').click(function(){
      $('body').addClass('open-services');
  });

  $('.strong-view.default .strong-content').owlCarousel({
    loop:true,
    nav:true,
    autoplay:true,
    margin: 20,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
  })

  $('.banner-home').owlCarousel({
    loop:true,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  })
  if ($(window).width() < 1070) {
      $('#destinos ul').owlCarousel({
          center: true,
          items:2,
          loop:true,
          margin:30,
          responsive:{
              600:{
                  items:2
              }
          }
      });
  }
    // FECHA LIGHTBOX

    $('.lightbox-close').click(function () {
        $('.lightbox-wrapper.active').removeClass('active');
        $('body').removeClass('lightbox-active');
    });

    $('.lightbox-shadow').click(function () {
        var $this = $(this);
        $this.parent().removeClass('active');
        $('body').removeClass('lightbox-active');
    });

    // CENTRALIZA LIGHTBOX

    $('.lightbox-centralize').centralize();

    // LIGHTBOX COTAÇÃO NA PÁGINA DO PRODUTO

    $('.productpage-trigger').click(function () {
        var value = $('.product-infos .product-name').text();
        $('input[name="assunto"]').val(value).attr('readonly', 'readonly');
        $('.lightbox-centralize').centralize();
        $('#cotarProduto').addClass('active');
        $('body').addClass('lightbox-active');
    });

    // LIGHTBOX COTAÇÃO NO BANNER

    if($('.banner-trigger').length > 0){
        $('.banner-trigger').click(function () {
            var $this = $(this),
                value = $this.siblings('a').find('.banner-title').text();
            $('input[name="assunto"]').val(value).attr('readonly', 'readonly');
            $('.lightbox-centralize').centralize();
            $('#cotarProdutoBanner').addClass('active');
            $('body').addClass('lightbox-active');
        });
    }

    var $header = $('#main-header'),
        $headerHeight = $header.height();

    if ($(window).width() < 991) {

    }

    // Busca

    var $searchtrigger  = $('.search-trigger'),
        $searchOver     = $('.search-overlay');

    $searchtrigger.click(function () {
        var $this = $(this);
        $this.toggleClass('open');
        $searchOver.toggleClass('active');
        $('#full-search').toggleClass('open');
        $('body').toggleClass('menu-active');
        $('#full-search input[type=text]').focus();
    });

    $searchOver.click(function () {
        var $this = $(this),
            $target = $('*.open');

        $('body').removeClass('menu-active');
        $this.removeClass('active');
        $target.removeClass('open');
    });

    $('#main-menu-trigger').click(function () {
        var $header = $('#main-header'),
            $headerHeight = $header.height();
        var $this = $(this);
        $this.toggleClass('active');
        $('body').toggleClass('menu-active');
        $('.main-menu').toggleClass('active');
    });

    $('.main-menu-list > li > a').click(function () {
      $('body').removeClass('menu-active');
      $('.main-menu').removeClass('active');
      $('#main-menu-trigger').removeClass('active');
    });


    $('body').bind('wheel', function (e) {
        if (e.originalEvent.deltaY < 0 ) {
            $('body').removeClass('moving--down')
        }
        else {//rolou pra baixo
            $('body').addClass('moving--down')
        }
      });

    // Menu Mobile

    var $mobTrigger = $('.main-menu .menu-item-has-children');
    $mobTrigger.append('<i class="icon-down"></i>');
    $mobTrigger.each(function (index) {
        var $this = $(this),
            $trigger = $this.find('> i');
        $trigger.on('click', function () {
            var $thisTr = $(this);
            $thisTr.toggleClass('active');
            $this.find('>.sub-menu').slideToggle();
        });
    });

    var $select = $('select');

    $select.each(function (index) {
        var $this = $(this);
        $this.wrapAll('<div class="fake-select"></div>');
        $('<i class="select-open"></i>').insertAfter($this);
    });


    if ($(window).width() < 768) {
        var $mode = 'inner'
    }else{
        var $mode = 'window'
    }
    $('#zoomImage').elevateZoom({
        gallery:'gallery_01',
        cursor: 'pointer',
        zoomType: $mode,
        imageCrossfade: false,
        responsive: true,
        galleryActiveClass: 'active',
    });

    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });

    $('#product-secondary-infos iframe').wrapAll('<div class="video-wrapper"></div>');
    $('.post-content iframe').wrapAll('<div class="video-wrapper"></div>');


    // ADICIONA SLUG COMO CLASSE NO BREADCRUMB

    // var $item = $('a.taxonomy');
    //
    // $item.each(function () {
    //     var $this = $(this);
    //     var $itemSrc= $this.children('span'),
    //         $itemVal= $itemSrc.text(),
    //         $itemValLow = $itemVal.toLowerCase().replace(/[_\s]/g, '-').normalize('NFD').replace(/[\u0300-\u036f]/g,"");
    //     $this.parent().addClass($itemValLow);
    // });

    var $itemSpan = $('span[property="name"]');

    $itemSpan.each(function () {
        var $this = $(this),
            $itemVal= $this.text(),
            $itemValLow = $itemVal.toLowerCase().replace(/[_\s]/g, '-').normalize('NFD').replace(/[\u0300-\u036f]/g,"");
        $this.addClass($itemValLow);
    });

    // TRANSFORMA SIDEBAR EM MENU MOBILE

    var $filtertrigger = $('.category-menu'),
        $filteroverlay = $('.filter-overlay'),
        $filterclose = $('.filter-close');
    $filtertrigger.click(function () {
        $('#secondary').addClass('open');
        $('body').addClass('menu-active');
        $filteroverlay.addClass('active');
    });

    $filteroverlay.click(function () {
        var $this = $(this);
        $this.removeClass('active');
        $('#secondary').removeClass('open');
        $('body').removeClass('menu-active');
    });

    $filterclose.click(function () {
        $('#secondary').removeClass('open');
        $('body').removeClass('menu-active');
        $filteroverlay.removeClass('active');
    });

      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 50, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $('.title_invert').each(function(){
          var me = $(this)
        , t = me.text().split(' ');
        me.html( '<strong>'+t.shift()+'</strong> '+t.join(' ') );
      });
});





$(window).resize(function () {

    if($('#gallery_01').length > 0){
        $('#gallery_01 > li:first-child > a').click();
    }

    if ($(window).width() < 768) {
        var $mode = 'inner'
    }else{
        var $mode = 'window'
    }
    $('#zoomImage').elevateZoom({
        gallery:'gallery_01',
        cursor: 'pointer',
        zoomType: $mode,
        imageCrossfade: false,
        responsive: true,
        galleryActiveClass: 'active',
    });

    var height = $("#zoomImage").css("height");
    var width = $("#zoomImage").css("width");
    $(".zoomContainer").css("height", height);
    $(".zoomContainer").css("width", width);
    $(".zoomWindowContainer").css("height", height);
    $(".zoomWindowContainer").css("width", width);

    $('.lightbox-centralize').centralize();

    var $header = $('#main-header'),
        $headerHeight = $header.height();

    if ($(window).width() < 991) {
        $('.sub-menu').hide();
    }else{
        $('body').removeClass('menu-active');
        $('.main-menu').removeClass('active');
        $('.sub-menu').show();
        $('#main-menu-trigger').removeClass('active');
        $('.main-menu .icon-down').removeClass('active');
    }
});

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.header-top').outerHeight();

$(window).scroll(function(event){
    var $header = $('#header'),
        $headerHeight = $header.height();


    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.

    lastScrollTop = st;
}

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
