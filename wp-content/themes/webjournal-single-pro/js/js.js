jQuery(document).ready(function($) {	

  	$("ul.sf-menu").superfish({    
		delay:       200,                            // one second delay on mouseout
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
		speed:       'fast',                          // faster animation speed
 		dropShadows: false                            // disable drop shadows
	});	
  

// Back to Top
    // hide #back-top first
  $("#back-top").hide();
  
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 1000) { 
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });

// Backto Top 
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800); 
      return false;
    });
  });
 

// Mobile Menu

$('<select />').appendTo('#mobile-menu');

$('<option />', {
    'selected': 'selected',
    'value'   : '',
    'text'    : 'Navigate...'
}).appendTo('#mobile-menu select');

$('.sf-menu a').each(function() {
    var el = $(this);
    if(el.parents('.sub-menu ').length) {
        $('<option />', {
            'value': el.attr('href'),
            'text':  '-' + el.text()
        }).appendTo('nav select');
    } else {
        $('<option />', {
            'value': el.attr('href'),
            'text': el.text()
        }).appendTo('nav select');
    }
});
 
$('#mobile-menu select').change(function() { 
    window.location = $(this).find('option:selected').val();
});



// Main Navigation Menu - SuperFish

$("ul.sf-menu-2").superfish({   
    delay:       400,                            // one second delay on mouseout
    animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
    speed:       'fast',                          // faster animation speed
    dropShadows: false                            // disable drop shadows
  }); 
   
$('.sf-menu-2 a').each(function() {
    var el = $(this);
    if(el.parents('.sub-menu').length) {
        $('<option />', {
            'value': el.attr('href'), 
            'text':  'â€” ' + el.text()
        }).appendTo('nav select');
    } else {
        $('<option />', {
            'value': el.attr('href'),
            'text': el.text()
        }).appendTo('nav select');
    }
});
  

  $("#menu-22").parent("li").addClass("parent");
  $("#menu-22 li:first-child").addClass("firstul"); 
  $("#menu-22 li:first-child").addClass("first");
  $("#menu-22 li:last-child").addClass("last"); 

// Sidebar Tabs Starts here  

//When page loads...
  $('.tabs-wrapper').each(function() {
    $(this).find(".tab_content").hide(); //Hide all content
    $(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
    $(this).find(".tab_content:first").show(); //Show first tab content
  });
  
//On Click Event
  $("ul.tabs li").click(function(e) {
    $(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
    $(this).addClass("active"); //Add "active" class to selected tab
    $(this).parents('.tabs-wrapper').find(".tab_content").hide(); //Hide all tab content

    var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
    $(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
    
    e.preventDefault();
  });
  
  $("ul.tabs li a").click(function(e) {
    e.preventDefault();
  })     

// Sidebar Tabs Ends here 


// Main Layout Tabs Starts 

        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
// Main Layout Tabs Ends 

// Slider Starts 
                  $('#carousel').flexslider({
                    slideshowSpeed: 8000, 
                  controlNav: false,
                  directionNav: false, 
                  animationLoop: true,
                  slideshow: false,
                  itemWidth: 180, 
                  asNavFor: "#slider"
            });

            $('#slider').flexslider({
                slideshowSpeed: 8000, 
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                slideshow: true,
                sync: "#carousel",
                start: function(slider) {
        $('#carousel .slides li').click(function(event){
            $('#slider').flexslider("play");
        });
        } 
            });

// Slider Ends

});