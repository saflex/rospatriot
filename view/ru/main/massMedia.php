<!doctype html>
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ru" class="no-js"> <!--<![endif]-->
<head>
    <?php include ("../../../head.php") ?>
</head>
<body class="template" itemscope itemtype="http://schema.org/WebPage">

<?php include ("../../../header.php") ?>
<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <div id="breadcrumb" class="row breadcrumb">
                <div class="" itemprop="breadcrumb">
                    <a href="../../../view/ru/main/" class="homepage-link" title="Back to the frontpage">Главная</a>
                    <i class="fa fa-angle-right"></i>
                    <span class="page-title">СМИ о нас</span>
                </div>
            </div>
            <section class="row content">
                <div id="col-main" class="blog blog-page col-content col-sm-15 col-md-15">
                    <h1 id="page-title" class="large">СМИ о нас</h1>

                    <h2>Конкурс красоты Miss Moscow Mini 2015 </h2>
                    
                    
                    <p>RosPatriot в качестве партнера принял участие в конкурсе красоты Miss
Moscow Mini 2015 и организовала свою номинацию «Мисс Патриотка», где и
вручила свои фирменные призы с линией одежды. <a class="red" target="_blank" href="https://www.youtube.com/watch?v=Fgyjt2yo47Q&feature=player_embedded#t=126m47s">Ссылка на ролик</a></p>
         Подробнее о конкурсе можно почитать на этом источнике <a class="red" target="_blank" href="http://www.fashion-concert.org/news/novosti-kompanii/prizery-konkursa-krasoty-miss-moscow-mini-specialno-dlya-modelej-rostom-nizhe-170-sm.html">fashion-concert.org</a>           
          
          
          <h2>Опубликована статья в газете «Прогноз Развития»  </h2>  
<p> <a class="red" target="_blank" href="http://www.prognoz-news.com/2015/04/patriot-ne-prosto-imidzh/">http://www.prognoz-news.com/2015/04/patriot-ne-prosto-imidzh/</a></p>
                    
                    
                </div>
                <div class="col-sm-5 col-md-5 sidebar">
                    <div class="group_sidebar">

                        <div class="sb-wrapper not-animated" data-animate="fadeIn" data-delay="300">
                            <div class="sb-title">Рассказать о Нас</div>
                            <script type="text/javascript">(function () {
                                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                                    if (window.ifpluso == undefined) {
                                        window.ifpluso = 1;
                                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                        s.type = 'text/javascript';
                                        s.charset = 'UTF-8';
                                        s.async = true;
                                        s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                        var h = d[g]('body')[0];
                                        h.appendChild(s);
                                    }
                                })();</script>
                            <div class="pluso" data-background="transparent"
                                 data-options="big,round,multiline,horizontal,nocounter,theme=04"
                                 data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,livejournal,liveinternet,yandex,tumblr"></div>
                            <p class="margin-news-side">Дорогие друзья! Мы будем рады, если вы поделитесь информацией о
                                нашем проекте со своими друзьями и родственниками.</p>

                            <p>Мы работаем для Вас, постоянно развиваемся, а наш сервис с каждым днем становится только
                                лучше!</p>
                        </div>

                        <!--конец виджета выбор регионов-->
                        <div class="sb-wrapper not-animated" data-animate="fadeIn" data-delay="300">
                            <div class="sb-title">Вместе мы сила!</div>
                            <img src="../../../asset/image/ros-gerb-o-nas2.jpg" alt="" class="img-responsive">
                        </div>

                    </div>
                </div>
        </div>
        </section>
    </div>
</div>
</div>
<?php include ("../../../footer.php") ?>
<script>

    // Parse URL Queries Method
    (function ($) {
        $.getQuery = function (query) {
            query = query.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var expr = "[\\?&]" + query + "=([^&#]*)";
            var regex = new RegExp(expr);
            var results = regex.exec(window.location.href);
            if (results !== null) {
                return results[1];
                return decodeURIComponent(results[1].replace(/\+/g, " "));
            } else {
                return false;
            }
        };
    })(jQuery);

    $(function () {

        // Change URIs
        $('.pill-switch').click(function () {
            var current_url = window.location.href;
            window.location = "?theme=pill";
        });

        $('.tab-switch').click(function () {
            var current_url = window.location.href;
            window.location = "?theme=tab";
        });

        $('.image-switch').click(function () {
            var current_url = window.location.href;
            window.location = "?theme=image";
        });

        $('.link-switch').click(function () {
            window.location = "?theme=link";
        });

        // Set theme based on URI
        if ($.getQuery('theme') === 'pill') {
            $(function () {
                $.scrollUp({
                    animation: 'fade',
                    activeOverlay: '#00FFFF',
                    scrollText: 'Наверх'
                });
            });
            $('.pill-switch').addClass('active');
            $('#scrollUpTheme').attr('href', 'css/themes/pill.css?1.1');
        }
        else if ($.getQuery('theme') === 'link') {
            $(function () {
                $.scrollUp({
                    animation: 'fade',
                    activeOverlay: '#00FFFF',
                    scrollText: 'Наверх'
                });
            });
            $('#scrollUpTheme').attr('href', 'css/themes/link.css?1.1');
            $('.link-switch').addClass('active');
        }
        else if ($.getQuery('theme') === 'image') {
            $(function () {
                $.scrollUp({
                    animation: 'fade',
                    activeOverlay: '#00FFFF',
                    scrollImg: {active: true, type: 'background', src: 'img/top.png'}
                });
            });
            $('#scrollUpTheme').attr('href', 'css/themes/image.css?1.1');
            $('.image-switch').addClass('active');
        }
        else {
            $(function () {
                $.scrollUp({
                    animation: 'slide',
                    activeOverlay: '#00FFFF',
                    scrollText: 'Наверх'
                });
            });
            $('#scrollUpTheme').attr('href', 'css/themes/tab.css?1.1');
            $('.tab-switch').addClass('active');
        }

        // Toggle overlay

        $('#toggleActive').click(function () {
            $('#scrollUp-active').toggle();

            var text = $(this).text() == 'Скрыть границу' ? 'Показать границу' : 'Скрыть границу';
            $(this)
                .text(text)
                .toggleClass('active');
        });

    });

</script>
</body>
</html>
