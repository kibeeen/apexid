jQuery(document).ready(function($){

    
    
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:2,
	    nav:true,
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



	$('.center-slider').slick({
	  centerMode: true,
	  centerPadding: '29%',
	  slidesToShow: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  mobileFirst: false,
	  nextArrow: "<img src='" + proj_next + "'class='slick-next'>",
	  prevArrow: "<img src='" + proj_prev + "'class='slick-prev'>",
	  responsive: [
	  	{
	      	breakpoint: 1440,
	      	settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '175px',
	        slidesToShow: 1
	      	}
	    },
	    {
	      	breakpoint: 1024,
	      	settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '175px',
	        slidesToShow: 1
	      	}
	    },
	    {
	      	breakpoint: 649,
	      	settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '65px',
	        slidesToShow: 1
	      	}
	    },
	    {
	      	breakpoint: 6,
	      	settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '175px',
	        slidesToShow: 1
	      	}
	    },
	    {
	      	breakpoint: 6,
	      	settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '175px',
	        slidesToShow: 1
	      	}
	    }
	  ]
	});


	$('.slick-carousel-testi').slick({
	  	dots: false,
	  	infinite: false,
	  	speed: 300,
	  	slidesToShow: 1,
	  	nextArrow: "<img src='" + ht_next + "'class='slick-next'>",
		prevArrow: "<img src='" + ht_prev + "'class='slick-prev'>",
		responsive: [
				{
			      breakpoint: 300,
			      settings: {
			        infinite: false,
			  		slidesToShow: 1,
			  		slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        infinite: false,
			  		slidesToShow: 1,
			  		slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: false
			      }
			    },
			    {
			      breakpoint: 991,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: false
			      }
			    },
			    {
			      breakpoint: 1028,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: false
			      }
			    }
			  ]
			});


	$('.prev-clients-slider').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  nextArrow: "<img src='" + proj_next + "'class='slick-next'>",
	  prevArrow: "<img src='" + proj_prev + "'class='slick-prev'>",
	  responsive: [
	    {
	      breakpoint: 480,
	      settings: {
	        infinite: true,
	  		slidesToShow: 1,
	  		slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        infinite: true
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true
	      }
	    },
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true
	      }
	    }
	  ]
	});
	


	var carousel = $("#carousel-home-aboutg").waterwheelCarousel({
          flankingItems: 2,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
    });
    

    function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  // Zoom to 9 when clicking on marker
  google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}

	// var breadCrumbs_marginLeft = document.getElementsByClassName('apex-breadcrumbs');

	// alert('breadCrumbs_marginLeft');

	// var breadCrumbs = document.getElementsByClassName('col-center')[1];
 //    var getMarginLeft = window.getComputedStyle(breadCrumbs, null);

 //    var fluid_padding = getMarginLeft.marginLeft;

 //    // alert(fluid_padding);

	// document.getElementById("contact-col-1").style.paddingLeft = fluid_padding;
		

});

// (function() {


// })();

// function fluidPadding() {
// 	var breadCrumbs = document.getElementsByClassName('col-center')[1];
//     var getMarginLeft = window.getComputedStyle(breadCrumbs, null);

//     var fluid_padding = getMarginLeft.marginLeft;
// 	document.getElementById("contact-col-1").style.paddingLeft = fluid_padding;
// }