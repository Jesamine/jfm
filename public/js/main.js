(function(){
    function init(){

      slidebar();

      equalheight();

      header();

      scroll();

      swipebox();

      $(window).resize(function(){
        equalheight();
        scroll();
      });

      owlcarousel();

    }

    function header(){
      var main = document.querySelector('main');
      var className = main.className;
      if(!className){
        var header = document.getElementById('header');
        header.className += 'red';
      }

      // var role = main.getAttribute('role');
      // if(role == 'album-detail'){
      //     galleria();
      // }
    }

    function swipebox(){
        $('.swipebox').swipebox();
    }

    function slidebar(){
  		$(document).ready(function(){
  			var controller = new slidebars();
  			controller.init();

  			$('.js-toggle-mobile-menu').on('click', function(event){
  				event.stopPropagation();
  				event.preventDefault();
  				controller.toggle('mobile-menu');
  			});


  			$( document ).on( 'click', '.js-close-any', function ( event ) {
  			 if ( controller.getActiveSlidebar() ) {
  					 event.preventDefault();
  					 event.stopPropagation();
  					 controller.close();
  			 }
  	    });

    	 // Add close class to canvas container when Slidebar is opened
    	 $( controller.events ).on( 'opening', function ( event ) {
    			 $( '[canvas]' ).addClass( 'js-close-any' );
           $('.overlay').css({
             'opacity': '0.5',
             'display': 'block'
           });
    	 } );

    	 // Add close class to canvas container when Slidebar is opened
    	 $( controller.events ).on( 'closing', function ( event ) {
    			 $( '[canvas]' ).removeClass( 'js-close-any' );
           $('.overlay').css({
             'opacity': '0',
             'display': 'none'
           });
    	 });
    	});
  	}

  	function equalheight(){
  		var identifiers = [];
  		$('[data-equal-height]').each(function(key, element){
  			var identifier = $(element).attr('data-equal-height');
  			if(jQuery.inArray(identifier, identifiers) == -1) identifiers.push(identifier);
  		});

  		$.each(identifiers, function(key, identifier){
  			var maxheight = 0;
  			$('[data-equal-height="'+identifier+'"]').each(function(key, element){
  				$(element).height('auto');
  				if($(element).height() > maxheight) maxheight = $(element).height();
  			});
  			if($(window).width() > 767){
  				$('[data-equal-height="'+identifier+'"]').height(maxheight);
  			}
  		});
  	}

    function scroll(){

      var headerCollapsed = false;

      $('[canvas="container"]').scroll(function(){
        if($(window).width() > 767){
          var scrollTop = $('[canvas="container"]').scrollTop();

          if (scrollTop >= 100) {
            if(headerCollapsed){
              headerCollapsed = false;
              $('header').stop().fadeIn(100);
              $('header').stop().animate({
                  top: "0",
                  "height": "70px",
              }, 300);
              $('header').addClass('smallNav');
            }
          }else{
            if(!headerCollapsed){
              headerCollapsed = true;
              $('header').stop().fadeOut(100);
              $('header').stop().animate({
                  "height": "180px",
                  'overflow': 'initial'
              }, 300);
              $('header').removeClass('smallNav');
            }
          }
        }else{
          $('header').css({
            'height': '70px'
          });
        }
      });


    }

    function owlcarousel(){
      $(document).ready(function(){

        var slide_recent = $('#slide-recent');
        slide_recent.owlCarousel({
          navigation: false,
          responsiveClass: true,
          items: 3,
          autoHeight: true,
          itemsDesktoplarg : [1000,2], //5 items between 1000px and 901px
              itemsDesktop : [700,2],
              itemsDesktopSmall : [660,2],// betweem 900px and 601px
              itemsTablet: [650,2], //2 items between 600 and 0
              itemsMobile : [480,1]
        });

        $('.next').click(function(){
          slide_recent.trigger('next.owl.carousel', [300]);
        });
        $('.prev').click(function(){
          slide_recent.trigger('prev.owl.carousel', [300]);
        });

        var slide_history = $('#slide-history');
        slide_history.owlCarousel({
          navigation: false,
          responsiveClass: true,
          items: 1,
          autoHeight: true,
          itemsDesktoplarg : [1000,1], //5 items between 1000px and 901px
              itemsDesktop : [700,1],
              itemsDesktopSmall : [660,1],// betweem 900px and 601px
              itemsTablet: [650,1], //2 items between 600 and 0
              itemsMobile : [480,1]
        });

        $('.next').click(function(){
          slide_history.trigger('next.owl.carousel', [300]);
        });
        $('.prev').click(function(){
          slide_history.trigger('prev.owl.carousel', [300]);
        });

        var slide_links = $('#slide-links');
        slide_links.owlCarousel({
          navigation: false,
          items: 4,
          responsive: {
            480: { items: 2},
            768: { items: 3},
            1024: { items: 4}
          }
        });

        $('.next').click(function(){
            console.log('next');
          slide_links.trigger('next.owl.carousel', [300]);
        });
        $('.prev').click(function(){
          slide_links.trigger('prev.owl.carousel', [300]);
        });
      });
    }

    // function galleria(){
    //   var element = document.getElementById('galleria');
    //   var album_id = element.className;
    //   Galleria.loadTheme('/js/vendor/galleria/themes/classic/galleria.classic.min.js');
    //   Galleria.run('#galleria', {
    //    facebook: 'album:' + album_id,
    //    height: 550,
    //    lightbox: true,
    //    facebookOptions: {
    //      max: 250,
    //      facebook_access_token: '232961117114486|O4f1M-2vSym49PbrSW5iSemzt0g'
    //    }
    //   });
    // }

    init();

    $(document).ready(function(){
      if($('#popup').length > 0){
        $('#popup').modal('show');
      }
    });

})();
