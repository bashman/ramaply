$(document).ready(function(){

//
//$(".banner").height(h);
$(window).scroll(function(){
  var sticky = $('.header'),
  scroll = $(window).scrollTop();
  //if (scroll >= 50) sticky.addClass('fixed');
  //  else sticky.removeClass('fixed');
    (scroll >= 50) ? sticky.addClass('fixed') : sticky.removeClass('fixed');
  });
//
$(window).on('load resize', function(){
  if ($(window).width() < 1000) {
      $('.feat-menu ul').detach().appendTo('.navigation ul li:first');
  }
  else if ($(window).width() > 1000) {
      $('.navigation ul li:first ul').detach().appendTo('.feat-menu');
  }
 // $('.navigation > ul').slicknav();
})
new WOW().init();
//
$(".banner-slider").owlCarousel({
  items: 1,
  margin: 0,
  nav: false,    
  loop:true,  
  dots: true,   
  autoplay:true, 
  mouseDrag: true,
  responsive : {
    0 : {
      dots: false,   
    },
    800 : {
      dots: true,   
    }
 
}
})
$(".product-thumbs").owlCarousel({
  items: 5,
  margin: 10,
  nav: true,    
  loop:true,  
  dots: false,   
  autoplay:true, 
  mouseDrag: true,
  responsive : {
    0 : {
      
    },
    800 : {
     
    }
 
}
})


$(".about-slider").owlCarousel({
  items: 3,
  margin: 0,
  nav: true,    
  loop:false,  
  dots: false,   
  autoplay:true, 
  mouseDrag: true,
  responsive : {
    0 : {
      items: 2,
    },
    500 : {
      items: 3,
    }
 
}
})
$(".testi-slider").owlCarousel({
  items: 1,
  margin: 0,
  nav: true,    
  loop:true,  
  dots: false,   
  autoplay:true, 
  mouseDrag: true,
});
$(".product-right").owlCarousel({
  items: 1,
  margin: 0,
  nav: true,    
  loop:true,  
  dots: false,   
  autoplay:true, 
  mouseDrag: true,
}); 
$(".other-product-slider").owlCarousel({
  items: 4,
  margin: 10,
  nav: true,    
  loop:true,  
  dots: false,   
  autoplay:true, 
  mouseDrag: true,
}); 
$(".right-slider").owlCarousel({
  items: 1,
  margin: 0,
  nav: false,    
  loop:true,  
  dots: false,   
  autoplay:true, 
  mouseDrag: true,
}); 




      
$(".content-right .text , .scro").mCustomScrollbar({
  
});


    $(".product-nav").hover(function(){
      $(".mega-menu").show();
      $(".mega-menu").hover(function(){
        $(this).show();
      },function(){
        $(".mega-menu").hide();
      })
    },function(){
      $(".mega-menu").hide();
    }
  )

//tab
$(".tab-container .content").hide();												 
$(".tab-container .content").each(function()
{
var index = $(".tab-container .content").index( this ) +1;
$(this).addClass('s' +index);
})
		 
$(".main-tab-up ul.main-ul li:nth-child(1)").addClass('active');
$(".tab-container .content:nth-child(1)").css("display" , "block")
$(".main-tab-up ul.main-ul li").click(function(){
var value = $(".main-tab-up ul.main-ul li").index( this ) + 1;
//alert(value);
$(".main-tab-up ul.main-ul li").removeClass('active');
$(this).addClass('active');
$(".tab-container .content").hide();
$(".s" +value).show()
})
$( ".tab-container .content" ).before("<div class='respon'><span class='span'></span></div>")
$(".main-tab-up ul.main-ul li").each(function(){
var htm = $(this).text();
var htmind = $(this).index();
		
$(".respon").eq(htmind).append(htm)

})

$(".respon > span.span").click(function(){

if($(this).hasClass("active"))
{
	$(this).parent(".respon").next(".content").slideUp();
	$(".content").slideUp(500);
	$(".respon > span.span").removeClass('active');
	$(this).removeClass('active');

}
else
{
	$(".content").slideUp(500);
	$(".respon > span.span").removeClass("active");
	$(this).parent(".respon").next(".content").slideDown(500);
	$(this).addClass("active");


}	})

$(".respon:first-child > .span").addClass("active");

$('nav ul li:has(ul)').addClass('hassub');

//

//alert(he);
var he = $(".quick-enquiry-form-fotter").height();
$(".quick-enquiry-form-fotter").css("bottom" , (-he + 25));
$(document).on("click" , ".quick-enquiry-form-fotter h2" , function(){
  
  //alert(he)
  if($(this).hasClass("form-active"))
    { //alert();     
      $(".quick-enquiry-form-fotter").css("bottom" , (-he + 25));
      $(".quick-enquiry-form-fotter h2").removeClass("form-active");
    }
    else{
      $(".quick-enquiry-form-fotter").css("bottom" , 0);
      $(this).addClass("form-active");
    }

  
})
$('.spc-new li').each(function(i, el) {
  // As a side note, this === el.
  var len = $('.spc-new li').length;
  //alert(len)
  if (len % 2 === 0) { 
    $('.spc-new li:nth-last-child(1)').addClass('no-border');
    $('.spc-new li:nth-last-child(2)').addClass('no-border');    
  }
  else {
    $('.spc-new li:nth-last-child(1)').addClass('no-border');
    
  }
});
//
})