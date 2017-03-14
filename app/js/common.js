'use strict';

$("#preloader").delay(4000).fadeOut();

//Форма отправки 2.0
$(function() {
  $("[name=send]").click(function () {
    $(":input.error").removeClass('error');
    $(".allert").remove();

    var error;
    var btn = $(this);
    var ref = btn.closest('form').find('[required]');
    var msg = btn.closest('form').find('input, textarea');
    var send_btn = btn.closest('form').find('[name=send]');
    var send_options = btn.closest('form').find('[name=campaign_token]');

    $(ref).each(function() {
      if ($(this).val() == '') {
        var errorfield = $(this);
        $(this).addClass('error').parent('.field').append('<div class="allert"><span>Заполните это поле</span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>');
        error = 1;
        $(":input.error:first").focus();
        return;
      } else {
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        if ($(this).attr("type") == 'email') {
          if(!pattern.test($(this).val())) {
            // $("[name=email]").val('');
            $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите коректный e-mail</span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>');
            error = 1;
            $(":input.error:first").focus();
          }
        }
        var patterntel = /^()[+0-9 () -]{9,18}/i;
        if ( $(this).attr("type") == 'tel') {
          if(!patterntel.test($(this).val())) {
            // $("[name=phone]").val('');
            $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите верный номер телефона</span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>');
            error = 1;
            $(":input.error:first").focus();
          }
        }
      }
    });
    if(!(error==1)) {
      $(send_btn).each(function() {
        $(this).attr('disabled', true);
      });
      $(send_options).each(function() {
        var form = $(this).closest('form'), name = form.find('.name').val();
        if ($(this).val() == '') {
          $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: msg,
            success: function() {
              $('form').trigger("reset");
              setTimeout(function(){  $("[name=send]").removeAttr("disabled"); }, 1000);
                            // Настройки модального окна после удачной отправки
                            $('div.md-show').removeClass('md-show');
                              $('form').trigger("reset");
                              $("#call_ok")[0].click();
                          },
                          error: function(xhr, str) {
                            alert('Возникла ошибка: ' + xhr.responseCode);
                          }
                        });
        } else {
          $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: msg,
            success:
            $.ajax({
              type: 'POST',
              url: 'https://app.getresponse.com/add_subscriber.html',
              data: msg,
              statusCode: {0:function() {
                $( "#modal_callback_ok h4" ).remove();
                $( "#modal_callback_ok" ).prepend("<h4>"+name+",</h4>");
                $('form').trigger("reset");
                setTimeout(function(){  $("[name=send]").removeAttr("disabled"); }, 1000);
                $(".fancybox-close").click();
                // Настройки модального окна после удачной отправки
               $('div.md-show').removeClass('md-show');
                $('form').trigger("reset");
                $("#call_ok")[0].click();
              }}
            }),
            error:  function(xhr, str) {
              alert('Возникла ошибка: ' + xhr.responseCode);
            }
          });
        }
      });
    }
    return false;
  })
});





 // Smooth scroll to anchor

 $('.scroll').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 1000);
  return false;
});





//  CURSOR ON SLIDER HOVER FUNCTION

$(document).ready(function() {
  jQuery(".slider").mousedown(function() {
    jQuery(this).removeClass("touch_mode_grab")
    .addClass("touch_mode_grabbing");
  }).mouseup(function() {
    jQuery(this).removeClass("touch_mode_grabbing")
    .addClass("touch_mode_grab");
  })
});



//  UP BUTTON

$( document ).ready(function() {
  $('#scrollup img').mouseover( function(){
    $( this ).animate({opacity: 0.65},100);
  }).mouseout( function(){
    $( this ).animate({opacity: 1},100);
  });

  $(window).scroll(function(){
    if ( $(document).scrollTop() > 0 ) {
      $('#scrollup').fadeIn('slow');
    } else {
      $('#scrollup').fadeOut('slow');
    }
  });

  $('#scrollup').click(function() {
    $('body,html').animate({scrollTop:0},1000);
  });
});


// Scroll BAR

$(window).scroll(function() {
    // calculate the percentage the user has scrolled down the page
    var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

    $('.bar-long').css('width', scrollPercent +"%"  );

  });

// PREVENT SCROLLING

$('.md-trigger').click(function() {
  $("body").addClass('unscroll');
});

$('.md-close').click(function() {
  $("body").removeClass('unscroll');
});

$('.md-overlay').click(function() {
  $("body").removeClass('unscroll');
});



// Calculator


jQuery(function(){

    calculatorLP();

function calculatorLP(){
    function numbReg(){
        jQuery(".numb-reg").each(function(){
            var reg = /(?=\B(?:\d{3})+(?!\d))/g;
            var text = jQuery(this).text();
            jQuery(this).text(text.replace(reg, ' '));
        });
    }
    numbReg();

    jQuery("#count").slider({
        range: "min",
        min: 0,
        max: 500,
        value: 100,
        step: 5,
        slide: function( event, ui ) {

            jQuery( "#showCount" ).text(ui.value).attr("data-count", ui.value);


            var sum = Number(ui.value * (jQuery( "#conv" ).slider( "value" ) / 100) * jQuery( "#money" ).slider( "value" )).toFixed() * 0.7;
            sum = sum - (sum%1);
            var sumDay = sum + "$";
            var sumMonth = sum * 9 + "$";
            var ordersDay = ui.value * (jQuery( "#conv" ).slider( "value" ) / 100);


            jQuery("#moneyDay").text(sumDay);
            jQuery("#moneyMonth").text(sumMonth);
            jQuery("#ordersDay").text(ordersDay.toFixed());
            numbReg();

            jQuery('.sumDay').val(sumDay) ;
            jQuery('.sumMonth').val(sumMonth) ;
            jQuery('.ordersDay').val(ordersDay) ;

        },
        change: function( event, ui ){
            jQuery( "#valCount" ).val(jQuery( "#count" ).slider( "value" ));

            jQuery("#calcSum").text();
        }
    });

    jQuery("#conv").slider({
        range: "min",
        min: 1,
        max: 75,
        value: 30,
        slide: function( event, ui ) {
            jQuery( "#showConv" ).text(ui.value).attr("data-conv", ui.value);



            var sum = Number((ui.value  / 100) * jQuery( "#count" ).slider( "value" ) * jQuery( "#money" ).slider( "value" )).toFixed() * 0.7;
            sum = sum - (sum%1);
            var sumDay = sum + "$";
            var sumMonth = sum * 30 + "$";
            var ordersDay = (ui.value / 100) * jQuery( "#count" ).slider( "value" );

            jQuery("#moneyDay").text(sumDay);
            jQuery("#moneyMonth").text(sumMonth);
            jQuery("#ordersDay").text(ordersDay.toFixed());
            numbReg();

        },
        change: function( event, ui ){
            jQuery( "#valConv" ).val(jQuery( "#conv" ).slider( "value" ));
            jQuery('.sumDay').val() = sumDay;
            jQuery('.sumMonth').val() = sumMonth;
            jQuery('.ordersDay').val() = ordersDay;
        }
    });

    jQuery("#money").slider({
        range: "min",
        min: 0,
        max: 5000,
        value: 200,
        step: 10,
        slide: function( event, ui ) {
            jQuery( "#showMoney" ).text(ui.value).attr("data-money", ui.value);



            var sum = Number(ui.value * (jQuery( "#conv" ).slider( "value" ) / 100) * jQuery( "#count" ).slider( "value" )).toFixed() * 0.7;
            sum = sum - (sum%1);
            var sumDay = sum + "$";
            var sumMonth = sum * 30 + "$";
            var ordersDay = jQuery( "#count" ).slider( "value" ) * (jQuery( "#conv" ).slider( "value" ) / 100);
            jQuery("#moneyDay").text(sumDay);
            jQuery("#moneyMonth").text(sumMonth);
            jQuery("#ordersDay").text(ordersDay.toFixed());
            numbReg();

        },
        change: function( event, ui ){
            jQuery( "#valMoney" ).val(jQuery( "#money" ).slider( "value" ));
            jQuery('.sumDay').val() = sumDay;
            jQuery('.sumMonth').val() = sumMonth;
            jQuery('.ordersDay').val() = ordersDay;
        }
    });
    }
});




//  INPUT TEL MASK

jQuery(function($){
 $("input[type='tel']").mask("(999) 999-9999");
});


// INPUT STYLIZATION

(function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
                return this.replace(rtrim, '');
            };
        })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
        // in case the input is already filled..
        if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
        }

        // events:
        inputEl.addEventListener( 'focus', onInputFocus );
        inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
        classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
        if( ev.target.value.trim() === '' || ev.target.value.trim() == '(___) ___-____' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
        }
    }
})();


//animate
    var decimal_places = 1;
    var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 1;

// waypoints

$('#sec_02').waypoint(
    function() {
        if ($("#sec_02").hasClass("number")) {
        }
        else{
            $("#sec_02").addClass("number");
            $('.first_animate_number').animateNumber(
            {
                number: 948 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text(floored_number + '+');
                }
            },
            2000
            );
        }
    },
    {offset: "550px"}

);


//  SHOW MORE BUTTON

$('.portfolioResize').click(function() {
    $('.invisible_content').slideToggle(2000);
});



//SLICK SLIDER SETTINGS

$(document).ready(function(){
 $('.image-1').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  slidesToScroll: 1,
  fade: true,
  autoplay: true,
  autoplaySpeed: 4000,
  cssEase: 'ease',
  easing: 'ease'
});
});


$(document).ready(function(){
 $('.image-2').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  slidesToScroll: 1,
  fade: true,
  autoplay: true,
  autoplaySpeed: 5000,
  cssEase: 'ease',
  easing: 'ease'
});
});


$(document).ready(function(){
 $('.image-3').slick({
  slidesToShow: 1,
  dots: false,
  arrows: false,
  slidesToScroll: 1,
  fade: true,
  autoplay: true,
  autoplaySpeed: 6000,
  cssEase: 'ease',
  easing: 'ease'
});
});


// $(document).ready(function(){
//  $('.slider_team').slick({
//   slidesToShow: 1,
//   dots: true,
//   arrows: true,
//   slidesToScroll: 1,
// });
// });


//  YUOTUBE PLUGIN

    $(function() {
    $(".youtube").each(function() {
        // Зная идентификатор видео на YouTube, легко можно найти его миниатюру
        // $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');
 
        // Добавляем иконку Play поверх миниатюры, чтобы было похоже на видеоплеер
        $(this).append($('<div/>', {'class': 'play'}));
 
        $(document).delegate('#'+this.id, 'click', function() {
            // создаем iframe со включенной опцией autoplay
            var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
            if ($(this).data('params')) iframe_url+='&'+$(this).data('params');
 
            // Высота и ширина iframe должны быть такими же, как иродительского блока
            var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })
 
            // Заменяем миниатюру HTML5 плеером с YouTube
         $(this).replaceWith(iframe);
        });
    });
 });


//  ADD\REMOVE DESCRIPTION CARD IN TEAM SLIDER
$('.card').click(function(){
    $(this).children('.card-big').toggleClass('active');
    $(this).siblings().children('.card-big').removeClass('active');

    if( $('.card-big').hasClass('active')) {
        $('.slick-next, .slick-prev').css('z-index', '-1');
    } else {
        $('.slick-next, .slick-prev').css('z-index', '10');
    }
})



$('body').each(function() {
    var body = $(this);
    var img_url = $(this).data('img');
    var img = new Image();
    img.src = img_url;
    img.onload = function(){
        var ppbox = '<div id="pp" style="background: url('+img_url+') no-repeat 50% 0%;top:-23px;width:100%;position:absolute;z-index:1000000;opacity:0.5;height:'+img.height+'px"></div>';
        var ppbtn = '<button onclick="myOff()" id="ppbtn" style="position:fixed;top:0;right:0;z-index:1000001">ON</button>'
        body.append(ppbox);
        body.append(ppbtn);
    };
});
function myOff() {
    var ppbtntext = $('#ppbtn').text();
    if (ppbtntext == 'ON') {
        $('#ppbtn').text('OFF');
        $('#pp').css('display', 'none');
    } else {
        $('#ppbtn').text('ON');
        $('#pp')        .css({
          ' z-index' : '1000000',
          display: 'block'
        });

    }
}

$('html').keydown(function(){
  var ppbtntext = $('#ppbtn').text();
  if (event.keyCode == 81) {
    if (ppbtntext == 'ON') {
        $('#ppbtn').text('OFF');
        $('#pp').css('display', 'none');
    } else {
        $('#ppbtn').text('ON');
        $('#pp')        .css({
          ' z-index' : '1000000',
          display: 'block'
        });
    }
  }
});
