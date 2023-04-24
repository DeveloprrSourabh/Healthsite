//Navigation
!function(i){i.fn.menumaker=function(n){var e=i(this),s=i.extend({title:"Menu",format:"language-changer",sticky:!1},n);return this.each(function(){return e.find("li ul, li .mega-dropdown").parent().addClass("has-sub"),multiTg=function(){e.find(".has-sub").prepend('<span class="submenu-button"></span>'),e.find(".submenu-button").on("click",function(){i(this).toggleClass("submenu-opened"),i(this).siblings("ul,.mega-dropdown").hasClass("open")?i(this).siblings("ul,.mega-dropdown").removeClass("open").hide():i(this).siblings("ul,.mega-dropdown").addClass("open").show()})},"multitoggle"===s.format?multiTg():e.addClass("language-changer"),s.sticky===!0&&e.css("position","fixed"),resizeFix=function(){i(window).width()>1024&&e.find("ul,.mega-dropdown").show(),i(window).width()<=1024&&e.find("ul,.mega-dropdown").hide().removeClass("open")},function(){$(window).width()>1024?(resizeFix("resize"),i(window).on(resizeFix)):(resizeFix(),i(window).on(resizeFix))}})}}($),function(i){i(document).ready(function(){$(".mega-dropdown").parent().addClass("has-mega"),i("#push_sidebar").menumaker({title:"",format:"multitoggle"})})}(jQuery);

// For small screen Nav
jQuery(document).mouseup(function(a){	
var f=jQuery(a.target).closest(".nav-trigger"),g=jQuery(a.target).closest("#push_sidebar");f.length?(a.preventDefault(),jQuery("html").toggleClass('sidebar_active'),jQuery(".nav-trigger").toggleClass("closemenu")):g.length||(jQuery("html").removeClass('sidebar_active'),jQuery(".nav-trigger").removeClass("closemenu"));});

// For menu position
function isTouchDevice(){return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);}if(isTouchDevice()===true){}else{jQuery(window).on('load', function(){setTimeout(function() {jQuery("ul.nav > li.has-sub").hover(function(){var s=jQuery("header").offset(),t=jQuery("header").width(),e=s.left+t,i=jQuery(this).find(".submenu-button").siblings("ul").offset(),n=jQuery(this).find(".submenu-button").siblings("ul").width();e<i.left+n&&jQuery(this).addClass("align-left-menu")},function(){jQuery(this).removeClass("align-left-menu")}),jQuery("ul.nav ul li.has-sub").hover(function(){var s=jQuery("header").offset(),t=jQuery("header").width(),e=s.left,i=e+t,n=jQuery(this).find(".submenu-button").siblings("ul").offset(),l=jQuery(this).find(".submenu-button").siblings("ul").width(),u=n.left;i<u+l&&(jQuery(this).addClass("align-left-menu")),e>u&&jQuery(this).addClass("align-right-menu")},function(){jQuery(this).removeClass("align-left-menu"),jQuery(this).removeClass("align-right-menu")}),jQuery(".nav-wrap nav ul.nav ul .has-sub").each(function(iz) {jQuery(this).css("z-index","500"-iz);});},200);});}
//Navigation End



// Header Shrink
function findOffset(o){var e=0,t=0;do{e+=o.offsetTop||0,t+=o.offsetLeft||0,o=o.offsetParent}while(o);return{top:e,left:t}}window.onload=function(){var o=document.getElementById("sticky-header"),e=findOffset(o);window.onscroll=function(){(document.documentElement.scrollTop||document.body.scrollTop)>e.top?o.classList.add("fixed"):o.classList.remove("fixed")}};



//youtube, vimeo, instagram and facebook responsive 
jQuery(document).ready(function(){jQuery('iframe[data-src*="youtube.com"]').wrap('<div class="youtubeWrapper" />'),jQuery('iframe[data-src*="vimeo.com"]').wrap('<div class="vimeoWrapper" />'),jQuery('iframe[data-src*="instagram.com"]').wrap('<div class="instagramWrapper" />'),jQuery('iframe[data-src*="facebook.com"]').wrap('<div class="facebookWrapper" />')});


// Multiple Tabs 
window.addEventListener("load",function(){var a=document.querySelectorAll("ul.tab-ul > li");function b(b){for(var f=b.currentTarget,c=b.currentTarget.parentNode.parentNode.parentNode,d=c.querySelectorAll("ul.tab-ul > li"),a=0;a<d.length;a++)d[a].classList.remove("active");f.classList.add("active"),b.preventDefault();var e=c.querySelectorAll(".tab-cnt");for(a=0;a<e.length;a++)e[a].classList.remove("active");var g=b.target.getAttribute("href");c.querySelector(g).classList.add("active")}for(i=0;i<a.length;i++)a[i].addEventListener("click",b)})

// Table wrap
jQuery(".article-details table").wrap("<div class='table-responsive'></div>");


//Scroll back to top
$(document).ready(function(){var s=document.querySelector(".progress-wrap path"),e=s.getTotalLength();s.style.transition=s.style.WebkitTransition="none",s.style.strokeDasharray=e+" "+e,s.style.strokeDashoffset=e,s.getBoundingClientRect(),s.style.transition=s.style.WebkitTransition="stroke-dashoffset 10ms linear";var t=function(){var t=$(window).scrollTop(),r=$(document).height()-$(window).height();s.style.strokeDashoffset=e-t*e/r};t(),$(window).scroll(t),jQuery(window).on("scroll",function(){jQuery(this).scrollTop()>50?jQuery(".progress-wrap").addClass("active-progress"):jQuery(".progress-wrap").removeClass("active-progress")}),jQuery(".progress-wrap").on("click",function(s){return s.preventDefault(),jQuery("html, body").animate({scrollTop:0},550),!1})});

//expand text > read-more and read-lees
$(document).ready(function(){var e=$(".expand-text");e.innerHeight()>250&&(e.css("height",250),$(".more-btn").show()),$(".expand-btn").on("click",function(){var t=e.innerHeight(),i=e.css("height","auto").innerHeight();e.css("height",t).animate({height:(0|t)==(0|i)?250:i}),$("html, body").animate({scrollTop:e.offset().top}),$(".expand-btn").toggle()})});

//video tab
$( document ).ready(function() {
         $(".thumbImg").click(function(){
            var myli = $(this);
            var embedurl = $(this).attr("embedurl");
            // $('#liframe').attr('src', function(i, val){return val;})
            $('#liframe').html('<iframe width="100%" height="500" layout="responsive" class="videoframe lazy" sandbox="allow-scripts allow-same-origin" allowfullscreen="" frameborder="0" src="'+embedurl+'"></iframe>');

            $( "li.splide__slide" ).each(function( index ) {
                       $(this).removeClass("is-active");
            })
            $(myli).parent().addClass("is-active");
        });
      });
// Change Images in small view
jQuery(function() {
function ViewChange() {
  if (window.innerWidth < 768) {               
	 $(function(a){		
	  var b=function(){				
	  a("[data-small-src]").each(function(){			
	  var b=a(this).offset().top,c=a(window).scrollTop(),
	  d=a(window).height(),
	  e=b-c<d;e&&(a(this).attr("src",a(this).attr("data-small-src")).removeClass("lazy"),			
	  a(this).attr("src",a(this).attr("data-small-src")).addClass("lazy").parent().addClass("SmallView"))
   })};	
   a(function(){		
		b(),a(window).scroll(function(){		
		b()}),a(window).on("load", function () {b()})
		})});			   
 } else {
	  $(function(a){		
	  var b=function(){				
	  a("[data-small-src]").each(function(){			
	  var b=a(this).offset().top,c=a(window).scrollTop(),
	  d=a(window).height(),
	  e=b-c<d;e&&(a(this).attr("src",a(this).attr("data-src")).removeClass("lazy"),			
	  a(this).attr("src",a(this).attr("data-src")).addClass("lazy").parent().removeClass("SmallView"));
      })};	
       a(function(){		
		b(),a(window).scroll(function(){		
		b()}),a(window).on("load", function () {b()})
		})});
        }}
       ViewChange();
       jQuery(window).resize(function() {ViewChange();});});








   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads-videoimg').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews-videoimg');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-video-img');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs-videoimg').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads-galleryimg').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews-galleryimg');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-gallery_img');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs-galleryimg').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads-web').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews-web');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-webimg');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs-web').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads-program').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews-program');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-pimg');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs-program').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads3').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews3');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-images3');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs3').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads2').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews2');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-images2');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs2').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads1').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews1');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-images1');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs1').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-uploads').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-previews');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-images');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('#imgs').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    

   jQuery(document).ready(function ($) {
     // Instantiates the variable that holds the media library frame.
     var meta_image_frame;
     // Runs when the image button is clicked.
     $('.image-upload').click(function (e) {
   	// Get preview pane
   	var meta_image_preview = $(this).parent().parent().children('.image-preview');
   	// Prevents the default action from occuring.
   	e.preventDefault();
   	var meta_image = $(this).parent().children('.meta-image');
   	// If the frame already exists, re-open it.
   	if (meta_image_frame) {
   	  meta_image_frame.open();
   	  return;
   	}
   	// Sets up the media library frame
   	meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
   	  title: meta_image.title,
   	  button: {
   		text: meta_image.button
   	  }
   	});
   	// Runs when an image is selected.
   	meta_image_frame.on('select', function () {
   	  // Grabs the attachment selection and creates a JSON representation of the model.
   	  var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
   	  // Sends the attachment URL to our custom image input field.
   	  meta_image.val(media_attachment.url);
   	  meta_image_preview.children('img').attr('src', media_attachment.url);
   	});
   	// Opens the media library frame.
   	meta_image_frame.open();
     });
   });
    
