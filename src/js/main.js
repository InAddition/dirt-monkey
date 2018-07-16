$(function() {

///////// Variables

var 
	html = $('html'),
	win = $( window ),
	hamburger = $('.hamburger');

///////// Loaded Class

win.on( 'load', function() {
	html.addClass( 'loaded' );
});

///////// Hamburger

hamburger.click(function(e){
	e.preventDefault();
	html.toggleClass('js-nav-open');
});

//////// Flickity

// var flickityGallery = $( '.js-slider' );

// flickityGallery.flickity({
// 	cellAlign: 'left',
// 	contain: true,
// 	autoPlay: 4500,
// 	pageDots: true,
// 	prevNextButtons: true,
// 	imagesLoaded: true
// });

//////// Venobox

$('.venobox').venobox(); 

//////// Sticky Footer

// var url = 'https://www.tixr.com/v1/groups/299/events?cpk=MTUwOA==';
// $.ajax({
//    url: url,
//    dataType: 'jsonp',
//    success: function(data){
// 	   $.each(data, function(key, val) {

// 			var tixrContainer = $("#tixr-events");
// 			var tixrHomeContainer = $("#tixr-home");
// 			var d = new Date(val.start_date);
// 			var et = new Date(val.end_date);
// 			var formattedDate = d.toDateString();
// 			var hours = d.getHours();
// 			var minutes = d.getMinutes();
// 		  	var ampm = hours >= 12 ? 'pm' : 'am';
// 		 	hours = hours % 12;
// 		  	hours = hours ? hours : 12; // the hour '0' should be '12'
// 		 	minutes = minutes < 10 ? '0'+minutes : minutes;
// 		  	var formattedTime = hours + ':' + minutes + ' ' + ampm;
// 			var ehours = et.getHours();
// 			var eminutes = et.getMinutes();
// 		  	var eampm = ehours >= 12 ? 'pm' : 'am';
// 		 	ehours = ehours % 12;
// 		  	ehours = ehours ? ehours : 12; // the hour '0' should be '12'
// 		 	eminutes = eminutes < 10 ? '0'+eminutes : eminutes;
// 		  	var formattedETime = ehours + ':' + eminutes + ' ' + eampm;

// 			var tixrEvent = 
// 				"<li class='event'>" +
// 					"<a href='" + val.short_url + "' class='event-link js-media-trigger'>" +
// 						"<img src='" + val.flyer_url + "' class='event-image'>" +
// 						"<div class='event-info'>" +
// 							"<h3 class='event-title'>" + val.name + "</h3>" +
// 							"<div class='event-time'>" +
// 								"<span class='event-date'>" + formattedDate + "</span><br/>" +
// 								"<span class='event-start'>" + formattedTime + "</span>" +
// 								"<span class='event-end'>" + "&nbsp;" +  "- " + formattedETime + "</span>" +
// 							"</div>" +
// 						"</div>" +
// 					"</a>" +
// 				"</li>";

// 			var tixrHomeEvent = 
// 				"<li class='upcoming-event'>" +
// 					"<a href='" + val.short_url + "' class='upcoming-event-link js-media-trigger'>" +
// 						"<img src='" + val.flyer_url + "' class='event-image'>" +
// 					"</a>" +
// 					"<div class='upcoming-event-info'>" +
// 						"<div class='upcoming-event-title-box'>" +
// 							"<h3 class='upcoming-event-title'>" + val.name + "</h3>" +
// 						"</div>" +
// 						"<div class='upcoming-event-time'>" +
// 							"<span class='upcoming-event-date'>" + formattedDate + "</span><br/>" +
// 							"<span class='upcoming-event-start'>" + formattedTime + "</span>" +
// 							"<span class='upcoming-event-end'>" + "&nbsp;" +  "- " + formattedETime + "</span>" +
// 						"</div>" +
// 						"<div class='upcoming-button-box'>" +
// 							"<a href='" + val.short_url + "' class='button js-media-trigger'>" +
// 								"Buy Tickets"
// 							"</a>" +
// 						"</div>" +
// 					"</div>" +
// 				"</li>";

// 			tixrHomeContainer.append(tixrHomeEvent);
// 			tixrContainer.append(tixrEvent);


// 	   });
//    },
//    error: function(err){
//      console.log(err)
//    }
// });


// var url = 'https://api.songkick.com/api/3.0/artists/4213166/calendar.json?apikey=01h7P6Mjgl0ZQeTr
// ';
// $.ajax({
//    url: url,
//    dataType: 'jsonp',
//    success: function(data){
//    	console.log(data);
// 	   $.each(data, function(key, val) {

// 			var container = $("#sk-footer");
// 			var event = 
// 				"<div class='footer-tour-date'>" +
// 					"<h3>" +
// 						"<span>" + val.type"</span>" +
// 					"</h3>" +
// 				"</div>" +
// 				"<div class='footer-tour-date-event'>" +
// 					"<h2>" +
// 						"<span></span>" +
// 					"</h2>" +
// 				"</div>";

// 			container.append(event);
// 	   });
//    },
//    error: function(err){
//      console.log(err)
//    }
// });





  var url = 'https://api.songkick.com/api/3.0/artists/4213166/calendar.json?apikey=01h7P6Mjgl0ZQeTr';
  $.ajax({
     url: url,
     dataType: 'json',
     success: function(data){
  	   $.each(data, function(key, val) {
  	   	var dmevent = data.resultsPage.results.event[0];
  	   	
  			var eventContainer = $(".js-footer-tour-date-info");
  			var d = new Date(dmevent.start.date);
        var c = dmevent.location.city;
        var v = dmevent.venue.displayName;
  			var month = new Array();
        month[0] = "Jan";
        month[1] = "Feb";
        month[2] = "Mar";
        month[3] = "Apr";
        month[4] = "May";
        month[5] = "Jun";
        month[6] = "Jul";
        month[7] = "Aug";
        month[8] = "Sep";
        month[9] = "Oct";
        month[10] = "Nov";
        month[11] = "Dec";
        var month = month[d.getUTCMonth()];
        var day = d.getUTCDate();
        // var month = d.getUTCMonth();
        var date = new Date(d);
        console.log(month);
  			// var footerEvent = 
  			// 	"<div class='footer-tour-date'>" +
     //      '<h3>' +
  			// 		"<a href='" + val.short_url + "' class='event-link js-media-trigger'>" +
  			// 			"<img src='" + val.flyer_url + "' class='event-image'>" +
  			// 			"<div class='event-info'>" +
  			// 				"<h3 class='event-title'>" + val.name + "</h3>" +
  			// 				"<div class='event-time'>" +
  			// 					"<span class='event-date'>" + formattedDate + "</span><br/>" +
  			// 					"<span class='event-start'>" + formattedTime + "</span>" +
  			// 					"<span class='event-end'>" + "&nbsp;" +  "- " + formattedETime + "</span>" +
  			// 				"</div>" +
  			// 			"</div>" +
  			// 		"</a>" +
  			// 	"</li>";

        var footerEvent = 
                 '<div class="footer-tour-date">' +
                  '<h3>' + 
                    '<span>'  +  month +
                    '</span>' + day +
                  '</h3>' +
                 '</div>' +
                 '<div class="footer-tour-date-event">' +
                 '<h2>' +
                    '<span>' + c + '</span>' +
                   v +
                  '</h2>' +
                 '</div>';

  			eventContainer.append(footerEvent);


  	   });
     },
     error: function(err){
       console.log(err)
     }
  });

/*===============================================
IE 10
===============================================*/

if (navigator.userAgent.match('MSIE 10.0;')) {
  $('html').addClass('ie10');
}

if (Object.hasOwnProperty.call(window, "ActiveXObject") && !window.ActiveXObject) {
    $('html').addClass('ie11');
}

}); // jQuery