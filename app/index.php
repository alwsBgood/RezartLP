<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>

<html lang="ru">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59Q3W3R');</script>
<!-- End Google Tag Manager -->

    <meta charset="utf-8">

    <title>Rezart Agency</title>
    <meta name="description" content="Дизайн который продает. Создание личных сайтов/блогов, корпоративных сайтов, landing page, построение воронки продаж, аналитика, продающий копирайтинг.">
    <meta name="keywords" content="лендинг, landing page, сайт, блог, воронка продаж, клиенты с интернет, Rezart, студия интернет маркетинга, аналитика, продающий копирайтинг">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />


    <meta property="og:image" content="http://rezart.agency/img/og.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:site_name" content=""/>
    <meta property="og:title" content="" />
    <meta property="og:url" content=""/>


    <meta property="og:title" content="Rezart Agency" />
    <meta property="og:description" content="От идеи до реальных продаж всего за 1 месяц. Создание личных сайтов/блогов, корпоративных сайтов, landing page, построение воронки продаж, аналитика, продающий копирайтинг." />

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#c2a771">



    <style>a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,dialog,div,dl,dt,em,embed,fieldset,figcaption,figure,font,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,hr,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,meter,nav,object,ol,output,p,pre,progress,q,rp,rt,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video,xmp{border:0;margin:0;padding:0;font-size:100%}html,body{height:100%}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}b,strong{font-weight:700}img{color:transparent;font-size:0;vertical-align:middle;-ms-interpolation-mode:bicubic}li{display:list-item;list-style:none}table{border-collapse:collapse;border-spacing:0}th,td,caption{font-weight:400;vertical-align:top;text-align:left}q{quotes:none}q:before,q:after{content:'';content:none}sub,sup,small{font-size:75%}sub,sup{line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}svg{overflow:hidden}.hidden{visibility: hidden;}}</style>

<style>
     @media (max-width: 490px){.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12{margin-left:10px;margin-right:10px}.alpha,.omega{margin-left:0;margin-right:0}}@media (min-width: 491px) and (max-width: 760px){.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12{margin-left:10px;margin-right:10px}.alpha,.omega{margin-left:0;margin-right:0}}@media (min-width: 761px) and (max-width: 980px){body{min-width:720px}.container_12{margin-left:auto;margin-right:auto;width:720px}.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12{display:inline;float:left;margin-left:10px;margin-right:10px}.alpha{margin-left:0}.omega{margin-right:0}.container_12 .grid_1{width:40px}.container_12 .grid_2{width:100px}.container_12 .grid_3{width:160px}.container_12 .grid_4{width:220px}.container_12 .grid_5{width:280px}.container_12 .grid_6{width:340px}.container_12 .grid_7{width:400px}.container_12 .grid_8{width:460px}.container_12 .grid_9{width:520px}.container_12 .grid_10{width:580px}.container_12 .grid_11{width:640px}.container_12 .grid_12{width:700px}}@media (min-width: 981px){body{min-width:960px}.container_12{margin-left:auto;margin-right:auto;width:960px}.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12{display:inline;float:left;margin-left:10px;margin-right:10px}.alpha{margin-left:0}.omega{margin-right:0}.container_12 .grid_1{width:60px}.container_12 .grid_2{width:140px}.container_12 .grid_3{width:220px}.container_12 .grid_4{width:300px}.container_12 .grid_5{width:380px}.container_12 .grid_6{width:460px}.container_12 .grid_7{width:540px}.container_12 .grid_8{width:620px}.container_12 .grid_9{width:700px}.container_12 .grid_10{width:780px}.container_12 .grid_11{width:860px}.container_12 .grid_12{width:940px}}</style>


<style>@font-face{font-family:'Gilroy-Light';src:url(fonts/Gilroy-Light.woff2) format("woff2"),url(fonts/Gilroy-Light.woff) format("woff");font-weight:400;font-style:normal}@font-face{font-family:'Gilroy-Bold';src:url(fonts/Gilroy-ExtraBold.woff2) format("woff2"),url(fonts/Gilroy-ExtraBold.woff) format("woff");font-weight:400;font-style:normal}</style>


    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>
    <!-- Load CSS Start -->

    <link rel="stylesheet" href="css/header.css">
    <!-- <script>loadCSS( "fonts/font-awesome/font-awesome.min.css", false, "all" );</script> -->
    <script>loadCSS( "css/main.css", false, "all" );</script>
    <!-- <script>loadCSS( "style.css", false, "all" );</script> -->

    <!-- Load CSS End -->

    <!-- Load CSS Compiled without JS -->
    <noscript>
        <link rel="stylesheet" href="css/header.css">
    </noscript>

</head>
<body data-img="img/land.jpg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59Q3W3R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="bar-long"></div>
<div id="scrollup"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg></div>
<!--============================SECTION================================-->

<section id="sec_01">
    <div class="container_12">
        <div class="grid_12">
            <div class="top">
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 792"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg>
                </div>
                <a class="md-trigger flex btn_callback" data-modal="modal_callback">Мы перезвоним</a>
                <a class="md-trigger flex btn_callback_mobile" data-modal="modal_callback"><i class="fa fa-phone" aria-hidden="true"></i></a>

                <div class="clear"></div>
            </div>
            <div class="main_block">
                <p class="beforeheader">Ukrainian Digital Marketing Agency</p>
                <h1>Rezart Agency</h1>
                <p class="afterheader">web-production агентство <span>с погружением в бизнес</span></p>
                <a href="#sec_02" class="btn_more flex scroll">УЗНАТЬ БОЛЬШЕ</a>
            </div>
            <a href="#sec_02" class="scroll flex btndwn"><img src="img/ar1.png" alt="Arrow"></a>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_02">
    <div class="container_12">
        <div class="grid_12">
            <p class="beforeh2">философия</p>
            <h2>Как мы <br>развивались</h2>
        </div>
        <div class="grid_5">
            <img src="img/sec_02-img-1.png" alt="Image">
            <p class="title">Теория</p>
            <p class="text">Мы используем знания <br>западного рынка.</p>
        </div>
        <div class="grid_3">
            <img src="img/sec_02-img-2.png" alt="Image">
            <p class="title">Практика</p>
            <p class="text">Росли и развивались <br>на реальном опыте, <br>создавая рабочие кейсы.</p>
        </div>
        <div class="grid_4">
            <p class="first_animate_number numbers"></p>
            <p class="title">Реализованных <br>проектов</p>
            <img src="img/sec_04-brrd.png" alt="Separator">
            <p class="text">Мы учились на ошибках, <br> набирались опыта <br> на успешно выполненных <br> проектах.</p>
        </div>
        <div class="grid_6">
            <div class="line line_01"></div>
            <p class="bold_text">
                И сегодня мы готовы  <br> поделиться с Вами нашими  <br> главными выводами  <br> по созданию успешного  <br> интернет-ресурса просто так <br> <span>[ да, абсолютно бесплатно! ]</span></p>
            <div class="line line_02"></div>
            <div class="clear"></div>
        </div>
        <div class="grid_6">
            <div class="block_form">
                <form method="POST" class="form-inline" action="javascript:void(null);">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="Rezart">
                <input type="hidden" name="admin_email" value="project@rezart.agency">
                <input type="hidden" name="form_subject" value="Rezart Checklist">
                <!-- END Hidden Required Fields -->


                <input type="hidden" name="orderType" value="Checklist">
                <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                <input type="hidden" name="city" value="">
                <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">



                <span class="input field">
                    <input id="name_02" required="" class="form-control name input__field " type="text" name="entry.1336947051" />
                    <label class="input__label" for="name_02">
                        <span class="input__label-content">Ваше имя</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="tel_02" required="" class="form-control name input__field" type="tel" name="entry.432827972"  />
                    <label class="input__label" for="tel_02">
                        <span class="input__label-content">Ваш телефон</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="mail_02" required="" class="form-control name input__field" type="email" name="entry.1605749108" />
                    <label class="input__label" for="mail_02">
                        <span class="input__label-content">Ваш e-mail</span>
                    </label>
                </span>

                    <button type="submit" class="btn" name="send">Получить Доступ</button>

                <div class="clear"></div>


            </form>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_03">
    <div class="container_12">
        <div class="grid_5">
            <h3>Они уже доверили <br> свои проекты <br> Rezart Agency</h3>
        </div>
        <div class="grid_7 desctop">
            <div class="wrap line_1">
                <img src="img/companies/1.png" alt="Companie">
                <img src="img/companies/2.png" alt="Companie">
                <img src="img/companies/3.png" alt="Companie">
                <img src="img/companies/4.png" alt="Companie">
            </div>
            <div class="wrap line_2">
                <img src="img/companies/5.png" alt="Companie">
                <img src="img/companies/6.png" alt="Companie">
                <img src="img/companies/7.png" alt="Companie">
                <img src="img/companies/8.png" alt="Companie">
                <img src="img/companies/9.png" alt="Companie">
            </div>
            <div class="wrap line_3">
                <img src="img/companies/10.png" alt="Companie">
                <img src="img/companies/11.png" alt="Companie">
                <img src="img/companies/12.png" alt="Companie">
                <img src="img/companies/13.png" alt="Companie">
            </div>
        </div>
        <div class="grid_7 mobile">
                <img src="img/companies/1.png" alt="Companie">
                <img src="img/companies/2.png" alt="Companie">
                <img src="img/companies/3.png" alt="Companie">
                <img src="img/companies/4.png" alt="Companie">
                <img src="img/companies/5.png" alt="Companie">
                <img src="img/companies/6.png" alt="Companie">
                <img src="img/companies/7.png" alt="Companie">
                <img src="img/companies/8.png" alt="Companie">
                <img src="img/companies/9.png" alt="Companie">
                <img src="img/companies/10.png" alt="Companie">
                <img src="img/companies/11.png" alt="Companie">
                <img src="img/companies/12.png" alt="Companie">
                <img src="img/companies/13.png" alt="Companie">
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_03_5">
    <div class="container_12">
        <div class="grid_6">
            <h2>Результаты, <br> вызывающие <br> гордость</h2>
            <p class="text margined_text">В такие моменты хочется перевернуть <br>интернет-индустрию и оставить в сети только достойные ресурсы. <br>Не те, которые создавались “за ночь” <br>с целью быстро заработать денег. <br>А настоящие шедевры, в которых <br>есть душа, за которыми стоит лидер <br>и сильный продукт!</p>
        </div>
        <div class="grid_6">
            <img src="img/sec_03_5-img-1.png" alt="Image" class="sec_img">
        </div>
        <div class="grid_12">
            <div class="cases_slider_numb">
                <div class="slide">
                    <p class="slide_number"><span class="current_slide text--gold title">1</span>/4</p>
                </div>
                <div class="slide">
                    <p class="slide_number"><span class="current_slide text--gold title">2</span>/4</p>
                </div>
                <div class="slide">
                    <p class="slide_number"><span class="current_slide text--gold title">3</span>/4</p>
                </div>
                <div class="slide">
                    <p class="slide_number"><span class="current_slide text--gold title">4</span>/4</p>
                </div>
            </div>
            <div class="cases_slider">
                <div class="slide">
                    <div class="img_block">
                        <img src="img/sec_03-site-1.png" alt="Design">
                    </div>
                    <div class="text_block">
                        <h3 class="text--white">18 сортов КОФЕ <br> НА КАЖДЫЙ ДЕНЬ</h3>
                        <div class="item">
                            <p class="title text--gold">Задача</p>
                            <p class="text ">Разработать продающую страницу. Создать мощный поток клиентов на лендинг. Выйти на реализацию большого объема кофе. </p>
                        </div>
                        <div class="item">
                            <p class="title text--gold">Результат</p>
                            <ul class="">
                                <li>Конверсия - 6%</li>
                                <li>24 заявки за 9 дней</li>
                                <li>Цена клика - 3,2 грн</li>
                                <li>Потрачено - 812 грн</li>
                                <li class="text--white">Чистая прибыль - 1 120 грн</li>
                                <li>ROI - 136%</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="img_block">
                        <img src="img/sec_03-site-2.png" alt="Design">
                    </div>
                    <div class="text_block">
                        <h3 class="text--white">Доставка здорового <br> питания EatFirst</h3>
                        <div class="item">
                            <p class="title text--gold">Задача</p>
                            <p class="text ">Создать индивидуальный узнаваемый стиль, <br> повысить продаваемость товара, подчеркнуть достоинства компании.</p>
                        </div>
                        <div class="item">
                            <p class="title text--gold">Результат</p>
                            <ul class="">
                                <li>Конверсия 4%.</li>
                                <li>24 заявки за 10 дней. цена клика 2,5 грн</li>
                                <li>Потрачено около 3000 грн.</li>
                                <li>Чистая прибыль около 7200 грн</li>
                                <li>Корпоративные заказы на год.</li>
                                <li class="text--white">Прибыль более 45 тысяч.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="img_block">
                        <img src="img/sec_03-site-3.png" alt="Design">
                    </div>
                    <div class="text_block">
                        <h3 class="text--white">Школа монтажа <br> Procut.</h3>
                        <div class="item">
                            <p class="title text--gold">Задача</p>
                            <p class="text ">Сделать креативный дизайн но сохранить <br> ощущение простоты и легкости. Страница должна хорошо конвертировать.</p>
                        </div>
                        <div class="item">
                            <p class="title text--gold">Результат</p>
                            <ul class="">
                                <li>Конверсия 6%</li>
                                <li>39 заявок за 10 дней. цена клика 0,15 $</li>
                                <li>Потрачено на рекламу 90 $</li>
                                <li class="text--white">Чистая прибыль 488$</li>
                                <li>ROI 500%</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="img_block">
                        <img src="img/sec_03-site-4.png" alt="Design">
                    </div>
                    <div class="text_block">
                        <h3 class="text--white">Онлайн-курс &nbsp;<br>«Gojava». Goit</h3>
                        <div class="item">
                            <p class="title text--gold">Задача</p>
                            <p class="text ">Создать индивидуальный узнаваемый стиль, <br> повысить продаваемость товара, подчеркнуть достоинства компании.</p>
                        </div>
                        <div class="item">
                            <p class="title text--gold">Результат</p>
                            <ul class="">
                                <li>Конверсия 4,16% (была 1,2%)</li>
                                <li>Бюджет FB 1340$ при стоимости клика 0,65$</li>
                                <li>Всего 19 продаж (стоимость продукта 950$)</li>
                                <li>Доход за месяц 222 400 грн</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_04">
    <div class="container_12">
        <div class="row clearfix">
            <div class="grid_7">
                <h2>От чего <br>зависит успех <br>Вашего проекта</h2>
                <p class="explanation">Честно? От тех, кто будет его создавать. <br>Вектор команды обязательно должен быть <br>направлен на Ваш результат.</p>
            </div>
            <div class="grid_5 pos">
                <img class="sec_img-1" src="img/sec_04-img-1.png" alt="Photo">
            </div>
        </div>
        <div class="row clearfix">
            <div class="grid_6">
                <img class="sec_img-2" src="img/sec_04-img-2.png" alt="Photo">
            </div>
            <div class="grid_6">
                <div class="item_4">
                    <p class="number">7 <span><img src="img/slash.png" alt="Slash"></span></p>
                    <img src="img/sec_04-brrd.png" alt="Separator">
                    <h3>персональных <br>стратегий студии <br>для успешного <br>запуска Вашего <br>проекта:</h3>
                </div>
            </div>
        </div>
        <div class="wrap clearfix">
            <div class="grid_4">
                <div class="item_04-1">
                    <p class="number_small">01.</p>
                    <p class="title">Цель любого действия - результат клиента</p>
                    <p class="text">Внедрить новые сервисы? <br>Изучить нишу или адаптировать <br>воронку продаж? Выйти на связь <br>в нерабочее время? Легко, если <br>это необходимо для высокого <br>результата проекта!</p>
                    <img class="sec_img-3" src="img/sec_04-img-3.png" alt="Photo">
                </div>
            </div>
            <div class="grid_4">
                <div class="item_04-2 tc">
                    <div class="line line_03"></div>
                    <p class="number_small">02.</p>
                    <p class="title">Система оценки <br>уровня и рейтинга <br>специалистов <br>команды</p>
                    <img src="img/sec_04-gray-brrd.png" alt="Separator">
                    <p class="text">Почему каждый, кто будет работать над Вашим проектом, будет <br>стремиться к высокому результату? Потому что от успеха проекта <br>напрямую зависит уровень <br>и мотивация каждого <br>специалиста команды.</p>
                    <div class="line line_04"></div>
                </div>
            </div>
            <div class="grid_4">
                <div class="item_04-3">
                    <p class="number_small">03.</p>
                    <p class="title">Практический опыт <br>западных экспертов</p>
                    <p class="text">Все стратегии, которые <br>используют маркетинговые <br>гении США, успешно внедряются <br>в реализуемых проектах.</p>
                    <img class="sec_img-4" src="img/sec_04-img-4.png" alt="Photo">
                </div>
            </div>
        </div>
        <div class="wrap clearfix">
            <div class="grid_4">
                <div class="item_04-4">
                    <p class="number_small">04.</p>
                    <p class="title">Работа по методологии <br>SCRUM</p>
                    <p class="text">Современный подход коллективной работы над проектами дает <br>поразительные результаты. Никогда ранее командные успехи не были <br>настолько высокими!</p>
                </div>
            </div>
            <div class="grid_4">
                <div class="item_04-5">
                    <p class="number_small">05.</p>
                    <p class="title">Ежедневное развитие <br>и повышение навыков</p>
                    <p class="text">Команда не стоит на месте. <br>Требовательность к себе <br>и постоянное развитие приносит <br>уверенность и высокие <br>результаты работы.</p>
                </div>
            </div>
            <div class="grid_4">
                <div class="item_04-6">
                    <p class="number_small">06.</p>
                    <p class="title">Современные <br>тенденции: всегда <br>в ногу со временем</p>
                    <p class="text">Анализ перемен рынка и быстрое <br>реагирование на изменения <br>позволяют держать стабильно высокий уровень проектов. Прошло то время, когда продавали кричащие страницы с текстом “Купи немедленно”:)</p>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="item_04-7">
                <p class="number_small">07.</p>
                <p class="title">Практика, практика, <br>практика.</p>
                <p class="text">Просто учиться - это здорово. <br>Но уверенность в силах дарит только ежедневная работа. Нельзя ломать <br>устоявшиеся шаблоны и создавать уникальный путь решения, не будучи специалистом своего дела.</p>
            </div>
        </div>
        <div class="grid_4">
            <div class="item_04-8">
                <img class="sec_img-5" src="img/sec_04-img-5.png" alt="Photo">
            </div>
        </div>
        <div class="grid_4">
            <div class="item_04-9">
                <div class="line line_05"></div>
                <p class="title">Результат будет там, где нет посредственности.<br><span>Где есть Знания,</span> <span>Опыт и Стремление.</span></p>
                <div class="line line_06"></div>

            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_05">
    <div class="container_12">
        <div class="grid_12">
        <img class="figure-1" src="img/float-elem-top_brrd.png" alt="Figure">
        <img class="figure-2" src="img/float-elem-left_brrd.png" alt="Figure">
        <img class="figure-3" src="img/float-elem-right_brrd.png" alt="Figure">
        <img class="figure-4" src="img/float-elem-square.png" alt="Figure">
        <img class="figure-5" src="img/float-elem-triangle.png" alt="Figure">
        <img class="figure-6" src="img/float-elem-circle.png" alt="Figure">
            <p>За <span>3 года</span> существования студия успешно <br>запустила<span> 948 проектов</span> интернет-предпринимателей, <br>достигающих <span>конверсии 28%</span> с холодного трафика.</p>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_06">
    <div class="container_12">
        <div class="grid_12 tc">
            <h2>НАШИ РАБОТЫ</h2>
            <p>Проекты Rezart, которые уже приносят <br>высокий доход своим владельцам.</p>
        </div>

            <div class="grid_6">
                <div class="item_06">
                    <a target="_blank" href="http://qagirl.pro/"><img src="img/sec_06-site-1.png" alt="Design"></a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Qa for Girl</p>
                    <p class="text">Онлайн курс QA для девушек</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://qagirl.pro/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>
            </div>
            <div class="grid_6">
                <div class="item_06">

                    <a target="_blank" href="http://java.new.goit.ua/"><img src="img/sec_06-site-2.png" alt="Design"></a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Java Developer</p>
                    <p class="text">Онлайн курс Java</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://java.new.goit.ua/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>
            </div>
            <div class="grid_6">
                <div class="item_06">
                    <a target="_blank" href="http://beautyfest.com.ua/">
                        <img src="img/sec_06-site-9.png" alt="Design">
                    </a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">BeautyFest</p>
                    <p class="text">Первый в Украине <br> beauty-fest</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://beautyfest.com.ua/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>
            </div>
            <div class="grid_6">
                <div class="item_06">
                <a target="_blank" href="http://moveonmiles.com/">
                    <img src="img/sec_06-site-12.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Move on Miles</p>
                    <p class="text">Возможности для разработчиков из Украины.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://moveonmiles.com/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>
            </div>
            <div class="grid_12">
            <div class="invisible_content">

                <div class="item_06">
                <a target="_blank" href="http://kids.procut.com.ua/mc/">
                    <img src="img/sec_06-site-10.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Procut Kids</p>
                    <p class="text">Курсы видиомонтажа <br> для детей.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://kids.procut.com.ua/mc/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

<!--                 <div class="item_06">
                    <img src="img/sec_06-site-11.png" alt="Design">

                    <p class="title">Chopper</p>
                    <p class="text">Магазин настоящей байкерской обуви.</p>

                    <a target="_blank" href="http://yurvov.com.ua/bgood/chopper/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div> -->

                <div class="item_06">
                <a target="_blank" href="http://rezart.agency/portfolio/artistream.ru/">
                    <img src="img/sec_06-site-13.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Artistream</p>
                    <p class="text">Профессиональная фотосъемка <br> в Москве.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://rezart.agency/portfolio/artistream.ru/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

                <div class="item_06">
                <a target="_blank" href="http://rezart.agency/portfolio/bjorgwood.com/">
                    <img src="img/sec_06-site-14.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Bjorgwood</p>
                    <p class="text">Магазин европейской мебели.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://rezart.agency/portfolio/bjorgwood.com/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

                <div class="item_06">
                <a target="_blank" href="http://myjacket.com.ua/">
                    <img src="img/sec_06-site-3.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Angry Dandy</p>
                    <p class="text">Магазин трендовых мужских <br> курток в Украине.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://myjacket.com.ua/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

                <div class="item_06">
                <a target="_blank" href="https://www.behance.net/gallery/47134923/Run-Train-by-Mishcenko">
                    <img src="img/sec_06-site-4.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Run Train by Mishcenko</p>
                    <p class="text">Практические советы <br> по профессиональному бегу.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="https://www.behance.net/gallery/47134923/Run-Train-by-Mishcenko" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

                <div class="item_06">
                <a target="_blank" href="http://looklook.com.ua/">
                    <img src="img/sec_06-site-5.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger  site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Look Look</p>
                    <p class="text">Студия наращивания ресниц <br> и ухода за бровями.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="http://looklook.com.ua/" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

                <div class="item_06">
                <a target="_blank" href="https://www.behance.net/gallery/36532239/Paris-Beaute">
                    <img src="img/sec_06-site-6.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger  site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Paris Beauty</p>
                    <p class="text">Средства из Франции по уходу <br> за волосами в домашних условиях.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="https://www.behance.net/gallery/36532239/Paris-Beaute" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

                <div class="item_06">
                <a target="_blank" href="https://www.behance.net/gallery/45095199/Wedding-Dresses">
                    <img src="img/sec_06-site-7.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger  site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Свадебные Платья</p>
                    <p class="text">Дизайнерские свадебные и вечерние <br> платья мирового уровня.</p>
                    <!-- <p class="money">Доход с сайта: $ 5 000/год</p> -->
                    <a target="_blank" href="https://www.behance.net/gallery/45095199/Wedding-Dresses" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>

                <div class="item_06">
                <a target="_blank" href="https://www.behance.net/gallery/37727463/Seychelles-Travel-Landing">
                    <img src="img/sec_06-site-8.png" alt="Design">
                </a>
                    <!-- <a class="md-trigger  site" data-modal="modal_maket">Site name</a> -->
                    <p class="title">Сейшельские острова</p>
                    <p class="text">Уникальный проект, который навсегда изменит <br> ваше предстваление о путешествиях</p>
                    <a target="_blank" href="https://www.behance.net/gallery/37727463/Seychelles-Travel-Landing" class="info">
                        <img src="img/sec_06-more_icon.png" alt="">
                    </a>
                    <a class="md-trigger zoom" data-modal="modal_maket">
                        <img src="img/sec_06-zoom_icon.png" alt="">
                    </a>
                </div>
            </div>
            <button class="btn portfolioResize">смотреть все работы</button>
            </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_07">
    <div class="container_12">
        <div class="grid_5">
            <h2>7 фактов <br>доверия</h2>
            <img class="sec_img-1" src="img/sec_07-img-2.png" alt="Image">
            <img class="sec_img-2" src="img/sec_07-img-3.png" alt="Image">
        </div>
        <div class="grid_7">
            <div class="item_07-1">
                <img class="sec_img-3" src="img/sec_07-img-1.png" alt="Image">
                <div class="wrap">
                    <p class="number">01</p>
                    <p class="title">Дизайн</p>
                    <p class="text">Дизайн создается на основе психологии <br>воздействия на посетителя разных факторов: <br>типография, цвета, иерархия, стилистика. <br>Используются мировые стандарты. </p>
                </div>
            </div>
        </div>
        <div class="grid_5">
            <div class="item_07-2">
                <div class="wrap">
                    <p class="number">02</p>
                    <p class="title">Оптимизация</p>
                    <p class="text">Адаптивная, Кроссбраузерная, <br>Валидная, Молниеносная загрузка сайта. Поддержка старых браузеров <br>и og protocol. Оптимизация <br>под поисковые системы.</p>
                </div>
                <img class="sec_img-4" src="img/sec_07-img-5.png" alt="Image">
            </div>
        </div>
        <div class="grid_7">
            <div class="item_07-3">
                <img class="sec_img-5" src="img/sec_07-img-4.png" alt="Image">
                <div class="wrap">
                    <p class="number">03</p>
                    <p class="title">Взаимодействие</p>
                    <p class="text">Ведение проектов <br>по технологии SCRUM <br>и Kanban. Проекты <br>реализуются в разы <br>быстрее и качественнее, чем при стандартной <br>системе управления.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="grid_5">
            <div class="item_07-4">

                <div class="wrap">
                    <p class="number">04</p>
                    <p class="title">Структура</p>
                    <p class="text">Разработка маркетинговой структуры, упаковка проекта и построение <br>логической воронки продаж.</p>
                </div>
                <img class="sec_img-6" src="img/sec_07-img-7.png" alt="Image">
            </div>
        </div>
        <div class="grid_7">
            <div class="item_07-5">
                <img class="sec_img-7" src="img/sec_07-img-6.png" alt="Image">
                <div class="wrap">
                    <p class="number">05</p>
                    <p class="title">Аналитика</p>
                    <p class="text">Глубокий анализ рынка, конкурентов, целевой аудитории, сезонности и рентабельности <br>для рекламной кампании.</p>
                </div>
            </div>
        </div>
        <div class="grid_5">
            <div class="item_07-6">
                <div class="wrap">
                    <p class="number">06</p>
                    <p class="title">Юзабилити</p>
                    <p class="text">Использование только <br>качественной анимации <br>и видеофонов. Фокус внимания<br>будет держаться только на главных <br>факторах.</p>
                </div>
            </div>
        </div>
        <div class="grid_3">
            <div class="small_sertif">
            <div class="slide">
                <p class="slide_number"><span class="current_slide text--gold title">1</span>/2</p>
                <a href="img/sert-2.jpg" data-lightbox="sertif-set"><img src="img/sec_07-sert-2.png" alt=""></a>
            </div>
            <div class="slide">
                <p class="slide_number"><span class="current_slide text--gold title">2</span>/2</p>
                <a href="img/sert-4.png" data-lightbox="sertif-set"><img src="img/sec_07-sert-4.png" alt=""></a>
            </div>
        </div>
        </div>
        <div class="grid_4">
        <div class="big_sertif">
            <div class="slide"><a href="img/sert-3.png" data-lightbox="sertif-set"><img src="img/sec_07-sert-3.png" alt=""></a></div>
            <div class="slide"><a href="img/sert-1.jpg" data-lightbox="sertif-set"><img src="img/sec_07-sert-1.png" alt=""></a></div>
        </div>
            <div class="item_07-7">
                <div class="wrap">
                    <p class="number">07</p>
                    <div class="block_text">
                        <p class="title">Уровень</p>
                        <p class="text">Многочисленные награды, <br> подтверждающие высокий уровень<br> профессионализма агентства. </p>
                    </div>
                </div>
            </div>
            <div class="sert_sldier_mobile">
                <div class="slide"><a href="img/sert-3.png" data-lightbox="sertif-set"><img src="img/sec_07-sert-3.png" alt=""></a></div>
                <div class="slide"><a href="img/sert-1.png" data-lightbox="sertif-set"><img src="img/sec_07-sert-1.png" alt=""></a></div>
                <a href="img/sert-2.png" data-lightbox="sertif-set"><img src="img/sec_07-sert-2.png" alt=""></a>
                <a href="img/sert-4.png" data-lightbox="sertif-set"><img src="img/sec_07-sert-4.png" alt=""></a>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->


    <section id="sec_08">
        <div class="container_12">
        <div class="grid_6">
            <h2>Не знаете, <br>нужен ли Вам <br>Landing Page?</h2>
        </div>
        <div class="grid_6">
            <p class="title"><span>Рассчитайте, сколько</span> продаж <br>Вы получите, заказав разработку <br>продающей страницы <br>в Rezart Agency.</p>
        </div>

            <div class="grid_12">
                <div class="calculator">
                    <div class="calculator-left clearfix">
                        <div class="calculator-sliders">
                            <div class="calculator-group">
                                <label class="calculator-group_label clearfix">
                                    <span>Количество посетителей</span>  сайта в сутки (чел.):
                                    <span class="numb-reg" id="showCount" data-count="100">100</span>
                                </label>
                                <div id="count"></div>
                            </div>
                            <div class="calculator-group">
                                <label class="calculator-group_label clearfix">
                                    <span>Конверсия</span> сайта (%):
                                    <span class="numb-reg small_reg" id="showConv" data-conv="30">30</span>
                                </label>
                                <div id="conv"></div>
                            </div>
                            <div class="calculator-group">
                                <label class="calculator-group_label clearfix">
                                    <span>Ваша средняя прибыль</span> с одной сделки ($):
                                    <span class="numb-reg" id="showMoney" data-money="200">200</span>
                                </label>
                                <div id="money"></div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-right">
                        <h3>*Вы получите:</h3>
                        <img src="img/sec_04-brrd.png" alt="Separator">
                        <div class="calculator-right_group">
                            <label class="calculator-group_label clearfix">Заявок в сутки:</label>
                            <span class="numb-reg" id="ordersDay">30</span>
                        </div>
                        <div class="calculator-right_group">
                            <label class="calculator-group_label clearfix">Примерная прибыль за день:</label>
                            <span class="numb-reg" id="moneyDay">4200$</span>
                        </div>
                        <div class="calculator-right_group">
                            <label class="calculator-group_label clearfix">Примерная прибыль за месяц:</label>
                            <span class="numb-reg" id="moneyMonth">126 000$</span>

                        </div>
                        <p class="text_small">* При рассчете учитывается конверсия заявки в сделку 70%</p>


                    </div>
                    <div class="clear"></div>
                   <input type="hidden" id="calcSum">
                    <a class="md-trigger btn flex" data-modal="modal_calculator">Рассчитайте мне прибыль</a>
                </div>
            </div>
        </div>
    </section>

<!--============================SECTION================================-->

<section id="sec_09">
    <div class="container_12">
        <div class="grid_6">
            <p class="beforeh2">прайс</p>
            <h2>Поговорим <br>о ценах</h2>
            <img src="img/sec_09-img.png" alt="Image">
        </div>
        <div class="grid_6">
            <ul>
                <li class="rotate_block">
                    <p class="text">Landing Page</p>
                    <p class="price"><span>от</span> 1190$</p>
                </li>
                <li class="rotate_block">
                    <p class="text">Личный сайт/блог</p>
                    <p class="price"><span>от</span> 2970$</p>
                </li>
                <li class="rotate_block">
                    <p class="text">Корпоративный сайт</p>
                    <p class="price"><span>от</span> 3450$</p>
                </li>
                <li class="rotate_block">
                    <p class="text">Разработка воронки продаж</p>
                    <p class="price"><span>от</span> 3250$</p>
                </li>
                <li class="rotate_block">
                    <p class="text">Сквозная аналитика</p>
                    <p class="price"><span>от</span> 1700$</p>
                </li>
                <li class="rotate_block">
                    <p class="text">Фирменный стиль</p>
                    <p class="price"><span>от</span> 750$</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_10">
    <div class="container_12">
        <div class="grid_6">
            <h2>Получите <br>главные <br>выводы</h2>
            <div class="line line_07"></div>
            <p>По созданию успешного <br>интернет-ресурса <span>абсолютно <br>бесплатно:</span> “Практический <br> Rezart Checklist проверки <br>Landing Page и сайтов”</p>
            <div class="line line_08"></div>
        </div>
        <div class="grid_6">
            <div class="block_form">
                <form method="POST" class="form-inline" action="javascript:void(null);">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="Rezart">
                <input type="hidden" name="admin_email" value="project@rezart.com.ua">
                <input type="hidden" name="form_subject" value="Rezart Checklist">
                <!-- END Hidden Required Fields -->


                <input type="hidden" name="orderType" value="Checklist">
                <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                <input type="hidden" name="city" value="">
                <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                <span class="input field">
                    <input id="name_10" required="" class="form-control name input__field " type="text" name="entry.1336947051" />
                    <label class="input__label" for="name_10">
                        <span class="input__label-content">Ваше имя</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="tel_10" required="" class="form-control name input__field" type="tel" name="entry.432827972"  />
                    <label class="input__label" for="tel_10">
                        <span class="input__label-content">Ваш телефон</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="mail_10" required="" class="form-control name input__field" type="email" name="entry.1605749108" />
                    <label class="input__label" for="mail_10">
                        <span class="input__label-content">Ваш e-mail</span>
                    </label>
                </span>

                    <button type="submit" class="btn" name="send">Получить Доступ</button>




                <div class="clear"></div>


            </form>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_11">
    <div class="container_12">
        <div class="grid_6">
            <p class="beforeh2">история</p>
            <h2>Как все <br>начиналось</h2>
            <h3>Все началось <br> с 2-х человек…</h3>
            <p class="text">Я работал в компании Genius Marketing около 2,5 лет. Когда я пришел в GM я был рядовым специалистом <br>в команде технической поддержки, нас тогда было двое. В скором времени я принял на себя <br> ответственность и стал разрабатывать простые сайты на Wordpress для наших клиентов. </p>

            <div class="image-3">
                <img src="img/sec_11-img-3.png" alt="Image">
                <img src="img/sec_11-img-3_01.png" alt="Image">
                <img src="img/sec_11-img-3_02.png" alt="Image">
            </div>
        </div>
        <div class="grid_6">
            <div class="image-1">
                <img src="img/sec_11-img-1.png" alt="Image">
                <img src="img/sec_11-img-1_01.png" alt="Image">
                <img src="img/sec_11-img-1_02.png" alt="Image">
            </div>
            <div class="image-2">
                <img src="img/sec_11-img-2.png" alt="Image">
                <img src="img/sec_11-img-2_01.png" alt="Image">
                <img src="img/sec_11-img-2_02.png" alt="Image">
            </div>

            <p class="title">Шло время</p>
            <p class="grid_6-2--text">Наша команда выросла до 51 человека. За эти 2 <br>с половиной года мы перепробовали множество систем планирования, ведения проектов. Пытались подстроить развитие студии под условия, которые напрямую давили <br>на нас - геометрический рост количества участников <br>в коучинге. Все мы понимали, что с такой скоростью <br>не выйдет набирать и обучать команду. <br>Но мы нашли решения.</p>
        </div>
        <div class="grid_6">
            <p class="title">Достижение эффективности</p>
            <p class="text">Не стану идеализировать наш опыт и нашу схему, <br> но она работает и работает эффективно. Тот факт, <br> что наша студия производит около 60 проектов каждый месяц (наш рекорд 80). Да - это не высокотехнологичные платформы, а&nbsp;в основном, продающие одностраничники . Но несмотря на это - каждый из них идеально адаптивен, <br> с проработанным маркетингом и копирайтом, а также <br> с авторским дизайном.</p>
            <div class="youtube" id="AMzIPpLhUw0"></div>
        </div>
        <div class="grid_6">
            <p class="bold_text">
                Скажу больше, мы завоевываем <br> награды на признанных <br> площадках, таких как Rewards. <br> Так что, считаю, что имею <br> право на совет)

            </p>
        </div>
        <div class="grid_6">
            <p class="title">Я горжусь своей командой</p>
            <p class="text">Все, в команде, имеют одинаковый квалификационный уровень.&nbsp;Я горжусь своей командой! Какой итог? Здоровая&nbsp;профессиональная конкуренция, стремление брать&nbsp;на себя ответственность, выполнять проекты еще более&nbsp;качественно. От этого на выходе продукт становится&nbsp;лучше. Мы стали лучшими в web-дизайне и web-production в целом...&nbsp;Так появилась компания Rezart Agency.&nbsp;Теперь мы наращиваем обороты в персональной работе с каждым клиентом. Мы становимся партнерами!<br><br>&nbsp;<br></p>
        </div>
        <div class="grid_6">
            <div class="slider_team">
                <div class="slide">

                        <div class="card">
                            <img src="img/sec_11-empl-1.png" alt="Photo">
                            <p class="name">Игорь Головко</p>
                            <p class="position">СЕО</p>

                            <div class="card-big">
                                <img src="img/sec_11-empl-big-1.png" alt="Photo">
                                <p class="name">Игорь Головко</p>
                                <p class="description">Основная миссия: Помогать людям, достигать своих бизнес-целей. Собственным примером.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/sec_11-empl-2.png" alt="Photo">
                            <p class="name">Михаил Наскромнюк</p>
                            <p class="position">Front-end</p>

                            <div class="card-big">
                                <img src="img/sec_11-empl-big-2.png" alt="Photo">
                                <p class="name">Михаил Наскромнюк</p>
                                <p class="description">Совершенствование тела и разума. Просто мне повезло и мое хобби стало моей профессией.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="img/sec_11-empl-3.png" alt="Photo">
                            <p class="name">Максим Гринец</p>
                            <p class="position">Project Manager</p>

                            <div class="card-big">
                                <img src="img/sec_11-empl-big-3.png" alt="Photo">
                                <p class="name">Максим Гринец</p>
                                <p class="description">«Кто ничего не знает, тот вынужден всему верить», — эту фразу повторяю себе каждый день и каждый день пытаюсь узнавать что-то новое.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/sec_11-empl-4.png" alt="Photo">
                            <p class="name">Дмитрий Чеботару</p>
                            <p class="position">Front End</p>

                            <div class="card-big">
                                <img src="img/sec_11-empl-big-4.png" alt="Photo">
                                <p class="name">Дмитрий Чеботару</p>
                                <p class="description">Имеет склонность к перфикционизму (в хорошем смысле слова). Стремится к тому, чтобы каждый клиент получил идеальный продукт.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/sec_11-empl-5.png" alt="Photo">
                            <p class="name">Екатерина Генко</p>
                            <p class="position">Designer</p>

                            <div class="card-big">
                                <img src="img/sec_11-empl-big-5.png" alt="Photo">
                                <p class="name">Екатерина Генко</p>
                                <p class="description">Мне нравится делать дизайны с характером, с чувствами, передавать неповторимый образ. Посетители сайта должны приходить в восторг – и это моя работа.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="signature">
                <img src="img/golovco.png" alt="Signature">
                <div class="text">
                    <p class="position">Со-основатель агентства</p>
                    <p class="name">Игорь Головко</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_12">
    <div class="container_12">
        <div class="grid_12">
            <h2>FAQ</h2>
        </div>
        <div class="grid_4">
            <div class="item_12">
                <p class="title">Что такое лендинг <br> пейдж?</p>
                <p class="text">Landing Page — это отдельная <br> страница, разработанная под <br> конкретное торговое предложение. Эта страница содержит всю <br> необходимую информацию для того, чтобы пользователь смог принять <br> решение в пользу именно вашего товара или услуги.</p>
            </div>
            <div class="item_12">
                <p class="title">Какие преимущества <br> я получу при создании <br> landing page?</p>
                <p class="text">Создание landing page — выгодная услуга для предпринимателей. <br> Создавая landing page вы получаете следующие преимущества: Нацеленность на конкретную <br> аудиторию. Высокая конверсия. <br> Использование landing page <br> в рекламных целях повышает <br> конверсию до 10-15 %. Landing Page содержит в себе всю необходимую информацию о товаре или услуге, <br> которая способна заинтересовать пользователя в рамках одной <br> страницы, без дополнительных ссылок и переходов. Landing Page <br> осуществляет сбор контактов <br> посетителей, пополняя вашу базу <br> потенциальных клиентов, с которыми <br> в последствии могут связаться ваши менеджеры, предложить <br> дополнительные услуги и произвести рассылку с информацией <br> о предстоящей акции. Работа <br> 24 часа в сутки.</p>
            </div>
        </div>
        <div class="grid_4">
            <div class="item_12">
                <p class="title">Что я получу, <br> заказав лендинг?</p>
                <p class="text">Заказав лендинг, вы получите <br> действенный современный инструмент с отличными скриптами продаж, целым арсеналом инструментов <br> для мотивации покупателей, который 24 часа в сутки каждый день будет рассказывать историю вашего <br> бренда/продукта и приводить вам новых клиентов пока вы занимаетесь другими делами. Попав на ваш <br> лендинг с рекламного объявления, пользователь увидит именно то, <br> что искал.</p>
            </div>
            <div class="item_12">
                <p class="title">Что даёт разработка <br> посадочных страниц?</p>
                <p class="text">Разработка посадочных страниц даёт вам: Возможность собрать контактные данные пользователей <br> для дальнейшего взаимодействия. Возможность оптимизировать <br> рекламную кампанию и увеличить <br> узнаваемость бренда. Посадочные страницы воспринимаются лучше, благодаря минимуму текста <br> и максимуму графического <br> наполнения. В сравнении с сайтами прошлого поколения, качественная посадочная страница даёт <br> увеличение продаж на 15-30 %. С помощью А/В тестирования можно шлифовать и совершенствовать <br> страницу, увеличивая показатели <br> эффективности на 5-17 %.</p>
            </div>
        </div>
        <div class="grid_4">
            <div class="item_12">
                <p class="title">Каким образом  осуществляются продажи <br> через одностраничник?</p>
                <p class="text">Основная задача заказа landing page состоит в конвертации посетителя <br> в клиента. Вся страница направлена на то, чтобы пользователь оформил подписку, оставил заявку или заказал звонок. Конверсия – показатель, <br> который подсчитывается на основе действий пользователей на сайте, <br> и именно этот процент позволяет <br> маркетологам выявить насколько успешной была реклама.</p>
            </div>
            <div class="item_12">
                <p class="title">Для чего необходимо <br> создание продающей <br>страницы?</p>
                <p class="text">Многие интересуются, зачем <br> им необходимо создавать продающую страницу, если уже есть готовый сайт. Создание продающей страницы – это не просто очередное веяние моды, <br> а must have для тех, кому нужен мощный рабочий инструмент для <br> увеличения продаж. Ни один <br> инструмент-маркетинга не сравнится с этой задачей.</p>
            </div>
            <div class="item_12">
                <p class="title">Что такое мультилендинг?</p>
                <p class="text">Мультилендинг – технология, <br> позволяющая трансформировать <br> одностраничный сайт под разные <br> запросы пользователей.</p>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_13">
    <div class="container_12">
        <div class="grid_6">
            <h2>Переходим <br>к действиям?</h2>
        </div>
        <div class="grid_6">
            <div class="row tel_row">
                <p>Позвоните нам</p>
                <a href="tel:0937007681" class="tel">+38 093 700 76 81</a>
                <div class="clear"></div>
            </div>
            <div class="row modal_row">
                <a class="md-trigger" data-modal="modal_request">Отправить</a>
                <p class="online_request">Online заявку</p>
            </div>
            <div class="row docs_row">
                <p>Скачайте</p>
                <a href="http://rezart.agency/app/Rezart_Prezentation.pdf">Презентацию</a>
                <p>или</p>
                <a href="http://rezart.agency/docs/brif.docx">Бриф</a>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<section id="sec_14">
    <div class="container_12">
        <div class="grid_6">
            <h2>Получите <br>главные <br>выводы</h2>
            <div class="line line_09"></div>
            <p>По созданию успешного  интернет-ресурса <span>абсолютно  бесплатно:</span> “Практический Rezart Checklist проверки  Landing Page и сайтов”</p>
             <div class="line line_10"></div>
        </div>
        <div class="grid_6">
            <div class="block_form">
                <form id="form_callback" method="POST" class="form-inline" action="javascript:void(null);">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="Rezart">
                <input type="hidden" name="admin_email" value="project@rezart.com.ua">
                <input type="hidden" name="form_subject" value="Rezart Checklist">
                <!-- END Hidden Required Fields -->


                <input type="hidden" name="orderType" value="Checklist">
                <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                <input type="hidden" name="city" value="">
                <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <span class="input field">
                    <input id="name_14" required="" class="form-control name input__field " type="text" name="entry.1336947051" />
                    <label class="input__label" for="name_14">
                        <span class="input__label-content">Ваше имя</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="tel_14" required="" class="form-control name input__field" type="tel" name="entry.432827972"  />
                    <label class="input__label" for="tel_14">
                        <span class="input__label-content">Ваш телефон</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="mail_14" required="" class="form-control name input__field" type="email" name="entry.1605749108" />
                    <label class="input__label" for="mail_14">
                        <span class="input__label-content">Ваш e-mail</span>
                    </label>
                </span>

                    <button type="submit" class="btn" name="send">Получить Доступ</button>




                <div class="clear"></div>


            </form>
            </div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->

<!--============================SECTION================================-->

<section id="sec_15">
    <div class="container_12">
        <div class="grid_2">
            <a class="logo" target="_blank" href="http://rezart.com.ua/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 792"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg></a>
        </div>
        <div class="grid_3">
            <a target="_blank" href="https://goo.gl/maps/pfmWhnoq33p"><p class="adress"><i class="fa fa-map-marker" aria-hidden="true"></i> <br> 01133, <br>Украина, Киев, <br>ул. Евгения Коновальца, <br>36д, 8 этаж. </p></a>
        </div>
        <div class="grid_4">
            <p class="gray">Мы создаем качественные сайты, <br> и продающие страницы <br>которые помогают <br><span>расти бизнесу</span></p>
        </div>
        <div class="grid_3">
            <a class="md-trigger flex btn_callback" data-modal="modal_callback">Мы перезвоним</a>
            <ul class="social">
                <li><a target="_blank" href="https://www.facebook.com/rezartagency"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://vk.com/rezartagency"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/rezart.agency/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/rezartagency"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.behance.net/rezartagency"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://dribbble.com/rezart"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</section>

<!--============================SECTION================================-->


<footer>
    <div class="container_12">
        <div class="row">
            <div class="grid_9">
                <div class="politics">
                    <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
                    <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
                    <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
                </div>
            </div>
            <div class="grid_3">
                <a class="logo_rezart" target="_blank" href="http://rezart.agency/am/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 792"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 792"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 792"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg></a>
                <a class="footer-fire" target="_blank" href="http://willcatchfire.com/"></a>
            </div>
        </div>
    </div>
</footer>


        <!-- <div id="scrollup"><img alt="Scroll up" src="img/up.png"></div> -->


        <!-- All modals added here -->


    <div class="hidden">
        <div class="md-modal md-effect-1" id="modal_callback">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><i class="fa fa-close"></i></a>
                </span>
                <div class="titlebox">
                    <h2>Заказ обратного звонка</h2>
                </div>
                <div>
                    <form id="form_callback_call" method="POST" class="form-inline" action="javascript:void(null);">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Rezart">
                        <input type="hidden" name="admin_email" value="project@rezart.com.ua">
                        <input type="hidden" name="form_subject" value="Rezart Callback">
                        <!-- END Hidden Required Fields -->


                        <input type="hidden" name="orderType" value="Callback">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                <span class="input field">
                    <input id="name_cb" required="" class="form-control name input__field " type="text" name="entry.1336947051" />
                    <label class="input__label" for="name_cb">
                        <span class="input__label-content">Ваше имя</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="tel_cb" required="" class="form-control name input__field" type="tel" name="entry.432827972"  />
                    <label class="input__label" for="tel_cb">
                        <span class="input__label-content">Ваш телефон</span>
                    </label>
                </span>



                    <button type="submit" class="btn" name="send">Перезвоните мне</button>


                        <!-- Просто любое дополнительное поле -->
                        <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
                        <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
                        <input type="hidden" class="pacet" name="form_pacet" value="">
                        <!-- GET RESPONCE INPUTS -->
                        <input type="hidden" name="start_day" value="0"/>
                        <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
                        <input type="hidden" name="campaign_token" value=""/>
                        <!-- GET RESPONCE INPUTS -->
                        <div class="clear"></div>


                    </form>

                    <div class="md_bottom">
                        <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="md-modal md-effect-1" id="modal_maket">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><i class="fa fa-close"></i></a>
                </span>

            </div>
        </div>

        <div class="md-modal md-effect-1" id="modal_info">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><i class="fa fa-close"></i></a>
                </span>

            </div>
        </div>

        <div class="md-modal md-effect-1" id="modal_calculator">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><i class="fa fa-close"></i></a>
                </span>

                <div class="titlebox">
                    <h2>Заполните данные</h2>
                </div>
                <div>
                    <form id="form_callback_request" method="POST" class="form-inline" action="javascript:void(null);">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Rezart">
                        <input type="hidden" name="admin_email" value="project@rezart.com.ua">
                        <input type="hidden" name="form_subject" value="Rezart Calculator">
                        <!-- END Hidden Required Fields -->


                        <input type="hidden" name="orderType" value="Calculator">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <span class="input field">
                    <input id="name_rq" required="" class="form-control name input__field " type="text" name="entry.1336947051" />
                    <label class="input__label" for="name_rq">
                        <span class="input__label-content">Ваше имя</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="tel_rq" required="" class="form-control input__field" type="tel" name="entry.432827972"  />
                    <label class="input__label" for="tel_rq">
                        <span class="input__label-content">Ваш телефон</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="mail_rq" required="" class="form-control input__field" type="email" name="entry.1605749108" />
                    <label class="input__label" for="mail_rq">
                        <span class="input__label-content">Ваш e-mail</span>
                    </label>
                </span>


                        <input class="sumDay" type="hidden" name="Сумма за день" />

                        <input name="Сумма за месяц" type="hidden" class="sumMonth" value="">
                        <input name="Закзаов в день" type="hidden" class="ordersDay" value="">


                    <button type="submit" class="btn" name="send">Отправить заявку</button>

                        <!-- Просто любое дополнительное поле -->
                        <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
                        <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
                        <input type="hidden" class="pacet" name="form_pacet" value="">
                        <!-- GET RESPONCE INPUTS -->
                        <input type="hidden" name="start_day" value="0"/>
                        <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
                        <input type="hidden" name="campaign_token" value=""/>
                        <!-- GET RESPONCE INPUTS -->
                        <div class="clear"></div>


                    </form>

                    <div class="md_bottom">
                        <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="md-modal md-effect-1" id="modal_request">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><i class="fa fa-close"></i></a>
                </span>
                <div class="titlebox">
                    <h2>Заявка</h2>
                </div>
                <div>
                    <form id="form_callback_request" method="POST" class="form-inline" action="javascript:void(null);">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Rezart">
                        <input type="hidden" name="admin_email" value="project@rezart.com.ua">
                        <input type="hidden" name="form_subject" value="Rezart Callback+">
                        <!-- END Hidden Required Fields -->


                        <input type="hidden" name="orderType" value="Callback+">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                <span class="input field">
                    <input id="name_rq" required="" class="form-control name input__field " type="text" name="entry.1336947051" />
                    <label class="input__label" for="name_rq">
                        <span class="input__label-content">Ваше имя</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="tel_rq" required="" class="form-control name input__field" type="tel" name="entry.432827972"  />
                    <label class="input__label" for="tel_rq">
                        <span class="input__label-content">Ваш телефон</span>
                    </label>
                </span>


                <span class="input field">
                    <input id="mail_rq" required="" class="form-control name input__field" type="email" name="entry.1605749108" />
                    <label class="input__label" for="mail_rq">
                        <span class="input__label-content">Ваш e-mail</span>
                    </label>
                </span>

                <button type="submit" class="btn" name="send">Отправить заявку</button>

                        <!-- Просто любое дополнительное поле -->
                        <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
                        <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
                        <input type="hidden" class="pacet" name="form_pacet" value="">
                        <!-- GET RESPONCE INPUTS -->
                        <input type="hidden" name="start_day" value="0"/>
                        <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
                        <input type="hidden" name="campaign_token" value=""/>
                        <!-- GET RESPONCE INPUTS -->
                        <div class="clear"></div>


                    </form>

                    <div class="md_bottom">
                        <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                    </div>
                </div>
            </div>
        </div>




    <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><i class="fa fa-close"></i></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Политика конфиденциальности</h2>
            </div>
            <div class="md_content">
                <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в «Согласии с рассылкой»</p>
                <p><strong>Какие данные собираются на сайте</strong></p>
                <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                <p><strong>С какой целью собираются эти данные</strong></p>
                <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                <p><strong>Как эти данные используются</strong></p>
                <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                <p><strong>Как эти данные защищаются</strong></p>
                <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><i class="fa fa-close"></i></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Отказ от ответственности</h2>
            </div>
            <div class="md_content">
                <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                <p>Используя данный Сайт, Вы выражаете свое согласие с «Отказом от ответственности» и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><i class="fa fa-close"></i></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Согласие с рассылкой</h2>
            </div>
            <div class="md_content">
                <p>Заполняя форму на нашем сайте — вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                <p><strong>6) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-4" id="modal_callback_ok">

        <div class="md-content">
                <h2>Ваше сообщение успешно отправлено.</h2>
                <div class="cb tc">
                    <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                </div>
            </div>
        </div>
        <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
    <div class="md-overlay"></div>
    </div>
    <!-- All modals end -->



        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->



    <script>var scr = {"scripts":[
        // {"src" : "http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU", "async" : false},
        {"src" : "js/libs.js", "async" : false},
        {"src" : "js/common.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 8891229;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->


    </body>
</html>