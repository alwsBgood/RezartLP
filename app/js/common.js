if (localStorage.name && localStorage.email)  {
  // запись сохраненных данных сразу в поля, если надо
  $('input[name="entry.1336947051"]').val(localStorage.name);
  $('input[type="email"]').val(localStorage.email);
  $('input[type="tel"]').val(localStorage.phone);
}


$(function() {
  $("[name=send]").click(function (e) {
   var btn = $(this);
   var form = $(this).closest('form');

   $(":input.error").removeClass('error');
   $(".allert").remove();

   var error;
   var ref = btn.closest('form').find('[required]');
   var loc = ymaps.geolocation.city+', '+ymaps.geolocation.region+', '+ymaps.geolocation.country;
   $('[name=city').val(loc);
   var msg = btn.closest('form').find('input, textarea, select');
   var short_msg = btn.closest('form').find('[name=project_name], [name=admin_email], [name=form_subject], [name=city], [name=page_url], [name=user_agent], [type="text"], [type="email"], [type="tel"]');
   var send_btn = btn.closest('form').find('[name=send]');
   var send_adress = btn.closest('form').find('[name=send_adress]').val();
   var send_options = btn.closest('form').find('[name=campaign_token]');;
   var formType = btn.closest('form').find('[name=form_type]').val();


   var alertImage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.1 286.1"><path d="M143 0C64 0 0 64 0 143c0 79 64 143 143 143 79 0 143-64 143-143C286.1 64 222 0 143 0zM143 259.2c-64.2 0-116.2-52-116.2-116.2S78.8 26.8 143 26.8s116.2 52 116.2 116.2S207.2 259.2 143 259.2zM143 62.7c-10.2 0-18 5.3-18 14v79.2c0 8.6 7.8 14 18 14 10 0 18-5.6 18-14V76.7C161 68.3 153 62.7 143 62.7zM143 187.7c-9.8 0-17.9 8-17.9 17.9 0 9.8 8 17.8 17.9 17.8s17.8-8 17.8-17.8C160.9 195.7 152.9 187.7 143 187.7z" fill="#E2574C"/></svg>';

   var name_tl = localStorage.name = form.find('input[name="entry.1336947051"]').val();
   var email_tl = localStorage.email = form.find('input[type="email"]').val();
   var phone_tl = localStorage.phone = form.find('input[type="tel"]').val();

   if (!name_tl) { name_tl = 'Имя потерялось'};
   if (!email_tl) { email_tl = 'Мейл потерялся'};
   if (!phone_tl) { phone_tl = 'Телефон потерялся'}



   $(ref).each(function() {
    if ($(this).val() == '') {
      var errorfield = $(this);
      $(this).addClass('error').parent('.field').append('<div class="allert"><span>Заполните это поле</span>' + alertImage + '</div>');
      error = 1;
      $(":input.error:first").focus();
      return;
    } else {
      var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
      if ($(this).attr("type") == 'email') {
        if (!pattern.test($(this).val())) {
          $("[name=email]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите коректный e-mail</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
      var patterntel = /^()[- +()0-9]{9,18}/i;
      if ($(this).attr("type") == 'tel') {
        if (!patterntel.test($(this).val())) {
          $("[name=phone]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите номер телефона в формате +3809999999</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
    }
  });
   if (!(error == 1)) {
    $(send_btn).each(function() {
      $(this).attr('disabled', true);
    });
      // Отправка в базу данных
        $.ajax({
         type: 'POST',
         url: 'db/registration.php',
         dataType: 'json',
         data: form.serialize(),
       });
       // Отправка в Google sheets
       $.ajax({
        type: 'POST',
        url: 'https://docs.google.com/forms/d/e/1FAIpQLScKoPmqx2QVD_bMxFbf_E4SczZzfyFhlS34MsBswu38z4mzRA/formResponse',
        dataType: 'json',
        data: msg,
      });
       // Отправка в Telegram
       $.ajax({
         type: 'POST',
         url: 'https://api.telegram.org/bot357106214:AAHodgTmo25b66zg0hgGIx_gmsBvpyHSvdk/sendMessage?chat_id=-183516110&text=У вас новый лид c Rezart Agency мой господин: ' + name_tl + ' | ' + email_tl + ' | ' + phone_tl + ' Продайте ему что-нибудь поскорее!'
         // data: short_msg,
       });
    // Отправка на почту и в Trello
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: short_msg,
      success: function() {
        setTimeout(function() {
          $("[name=send]").removeAttr("disabled");
        }, 1000);
        $('div.md-show').removeClass('md-show');
        $('form').trigger("reset");
        $("#call_ok")[0].click();
        // dataLayer.push({
        //   'form_type': formType,
        //   'event': "form_submit"
        // });
      },
      error: function(xhr, str) {
        console.log("Erorr")
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
            sum = sum.toFixed();
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
            sum = sum.toFixed();
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
            sum = sum.toFixed();
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
    $(this).toggleClass('opened');
    if($(this).hasClass('opened')) {
      $(this).html('Скрыть')
    } else {
      $(this).html('Смотреть все работы')
    }
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


$(document).ready(function(){
 $('.sert_sldier_mobile').slick({
  slidesToShow: 1,
  dots: true,
  arrows: false,
  slidesToScroll: 1,
});
});

$(document).ready(function(){
 $('.cases_slider').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
    slidesToScroll: 1,
    asNavFor: '.cases_slider_numb'
  });
});

$(document).ready(function(){
 $('.cases_slider_numb').slick({
    slidesToShow: 1,
    dots: true,
    arrows: true,
    fade: true,
    slidesToScroll: 1,
    asNavFor: '.cases_slider'
  });
});

$(document).ready(function(){
 $('.small_sertif').slick({
    slidesToShow: 1,
    dots: true,
    arrows: true,
    fade: true,
    slidesToScroll: 1,
    asNavFor: '.big_sertif'
  });
});

$(document).ready(function(){
 $('.big_sertif').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
    slidesToScroll: 1,
    asNavFor: '.small_sertif'
  });
});


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




// $('body').each(function() {
//     var body = $(this);
//     var img_url = $(this).data('img');
//     var img = new Image();
//     img.src = img_url;
//     img.onload = function(){
//         var ppbox = '<div id="pp" style="background: url('+img_url+') no-repeat 50% 0%;top:-40px;width:100%;position:absolute;z-index:1000000;opacity:0.5;height:'+img.height+'px"></div>';
//         var ppbtn = '<button onclick="myOff()" id="ppbtn" style="position:fixed;top:0;right:0;z-index:1000001">ON</button>'
//         body.append(ppbox);
//         body.append(ppbtn);
//     };
// });
// function myOff() {
//     var ppbtntext = $('#ppbtn').text();
//     if (ppbtntext == 'ON') {
//         $('#ppbtn').text('OFF');
//         $('#pp').css('display', 'none');
//     } else {
//         $('#ppbtn').text('ON');
//         $('#pp')        .css({
//           ' z-index' : '1000000',
//           display: 'block'
//         });

//     }
// }

// $('html').keydown(function(){
//   var ppbtntext = $('#ppbtn').text();
//   if (event.keyCode == 81) {
//     if (ppbtntext == 'ON') {
//         $('#ppbtn').text('OFF');
//         $('#pp').css('display', 'none');
//     } else {
//         $('#ppbtn').text('ON');
//         $('#pp')        .css({
//           ' z-index' : '1000000',
//           display: 'block'
//         });
//     }
//   }
// });