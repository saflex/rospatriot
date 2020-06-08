<?php

session_start();

/* получатели */

if ($_POST['sendMail']) {
    $admin = "alexsaf91@mail.ru" . ", "; //обратите внимание на запятую
    $admin .= "";
}

if (isset($_POST['sendMail']) or isset($_POST['sendMail1'])) {

    $name = substr($_POST['name'], 0, 64);
    $email = substr($_POST['email'], 0, 64);
    $subject = substr($_POST['subject'], 0, 64);
    $message = substr($_POST['message'], 0, 8500);

    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['subject'] = htmlspecialchars($_POST['subject']);
    $_SESSION['message'] = htmlspecialchars($_POST['message']);

    $error = '';

    if (!empty($error)) {
        $_SESSION['sendMailForm']['error'] = '<p>При заполнении формы допущены ошибки:</p>
<ul>' . $error . '</ul>
';
        $_SESSION['sendMailForm']['name'] = $name;
        $_SESSION['sendMailForm']['email'] = $email;
        $_SESSION['sendMailForm']['subject'] = $subject;
        $_SESSION['sendMailForm']['message'] = $message;
        header('Location: ' . $_SERVER['PHP_SELF']);
        die();
    }


    $filepath = array();
    $filename = array();
    for ($i = 0; $i
< count($_FILES['file']); $i++) {
        if (!empty($_FILES['file']['tmp_name'][$i]) and $_FILES['file']['error'][$i] == 0) {
            $filepath[] = $_FILES['file']['tmp_name'][$i];
            $filename[] = $_FILES['file']['name'][$i];
        }
    }

    $body = "ИМЯ:\r\n" . $name . "\r\n\r\n";
    $body .= "E-MAIL:\r\n" . $email . "\r\n\r\n";
    $body .= "ТЕЛЕФОН:\r\n" . $subject . "\r\n\r\n";
    $body .= "СООБЩЕНИЕ:\r\n" . $message;

    if (send_mail($admin, $body, $email, $filepath, $filename))
        $_SESSION['success'] = true;
    else
        $_SESSION['success'] = false;
    header('Location: ' . $_SERVER['PHP_SELF']);
    die();
}

// Вспомогательная функция для отправки почтового сообщения с вложением
function send_mail($admin, $body, $email, $filepath, $filename)
{
    $subject = '=?utf-8?B?' . base64_encode('Заполнена форма на сайте - скрипт FULL') . '?=';
    $boundary = "--" . md5(uniqid(time())); // генерируем разделитель
    $headers = "From: " . strtoupper($_SERVER['SERVER_NAME']) . " <" . $email . ">
\r\n";
    $headers .= "Return-path:
<" . $email . ">
    \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";
    $multipart = "--" . $boundary . "\r\n";
    $multipart .= "Content-type: text/plain; charset=\"utf-8\"\r\n";
    $multipart .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";

    $body = quoted_printable_encode($body) . "\r\n\r\n";

    $multipart .= $body;

    $file = '';
    $count = count($filepath);
    if ($count > 0) {
        for ($i = 0; $i
    < $count; $i++) {
            $fp = fopen($filepath[$i], "r");
            if ($fp) {
                $content = fread($fp, filesize($filepath[$i]));
                fclose($fp);
                $file .= "--" . $boundary . "\r\n";
                $file .= "Content-Type: application/octet-stream\r\n";
                $file .= "Content-Transfer-Encoding: base64\r\n";
                $file .= "Content-Disposition: attachment; filename=\"" . $filename[$i] . "\"\r\n\r\n";
                $file .= chunk_split(base64_encode($content)) . "\r\n";
            }
        }
    }
    $multipart .= $file . "--" . $boundary . "--\r\n";

    if (mail($admin, $subject, $multipart, $headers))
        return true;
    else
        return false;
}

function quoted_printable_encode_character($matches)
{
    $character = $matches[0];
    return sprintf('=%02x', ord($character));
}

?>
        <!doctype html>
        <!--[if IE 8 ]>
        <html lang="en" class="no-js ie8">
            <![endif]-->
            <!--[if (gt IE 9)|!(IE)]>
            <!-->
            <html lang="ru" class="no-js">
                <!--<![endif]-->
<head>
                <?php include ("../../../head.php") ?>
                <script>var i = 1;
        function addtext(el) {
            a = el.parentNode;
            a.innerHTML = a.innerHTML + '<br />' + (i++) + '-й <input type="file" name="file[]" />';
        }</script>
</head>
<body class="template" itemscope itemtype="http://schema.org/WebPage">
                <?php include ("../../../header.php") ?>
                <div id="content-wrapper-parent">
                    <div id="content-wrapper">
                        <div id="content" class="container clearfix">
                            <div id="breadcrumb" class="row breadcrumb">
                                <div class="" itemprop="breadcrumb">
                                    <a href="../../../view/ru/main" class="homepage-link" title="На главную">Главная</a> <i class="fa fa-angle-right"></i>
                                    <span class="page-title">Эксклюзив</span>
                                </div>
                            </div>
                            <h1 id="page-title" class="large">Эксклюзив</h1>

                            <div id="bottom">
                                <div class="container">
                                    <div id="bottom_blocks" class="row"></div>
                                </div>
                                <section class="row content">
                                    <div id="content" class="clearfix">
                                        <section class="content">
                                            <div id="col-main" class="clearfix">
                                                <div class="container">
                                                    <div class="col-md-5 hidden-sm hidden-xs">
                                                        <div class="bottom-block whi50 not-animated" data-animate="fadeInLeft "
                                             data-delay="300">
                                                            <div class="block-logo2">
                                                                <img class="img-responsive swing siza"
                                                     src="../../../asset/image/cards-ex.jpg" height="155" width="258"
                                                     alt=""></div>
                                                            <div class="block-content">
                                                                <div class="block-heading">Эксклюзивные принты</div>
                                                                <p class="block-caption">
                                                                    Посмотрите нашу
                                                                    <a class="scrolr2"
                                                                                            href="../../../view/ru/main/exclusiveGallery.php">
                                                                        галерею
                                                        принтов на заказ
                                                                    </a>
                                                                    . Изделие на заказ станет отличным подарком
                                                    вашим коллегам, друзьям и родным!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="bottom-block whi50 not-animated" data-animate="fadeInRight"
                                             data-delay="300">
                                                            <div class="block-logo2">
                                                                <img class=" img-responsive swing siza"
                                                     src="../../../asset/image/cards-ex2.jpg" height="155" width="258"
                                                     alt=""></div>
                                                            <div class="block-content">
                                                                <div class="block-heading">Любой цвет на заказ</div>
                                                                <p class="block-caption">
                                                                    Кроме стандартных цветовых решений вы можете
                                                    заказать изделие в любом другом цвете. Если сомневаеесь в своем
                                                    выборе
                                                                    <a class="scrolr" href="#">оставить заявку</a>
                                                                    на помощь
                                                    дизайнера
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="bottom-block whi50 not-animated" data-animate="fadeInLeft "
                                             data-delay="300">
                                                            <div class="block-logo2">
                                                                <img class="img-responsive swing siza"
                                                     src="../../../asset/image/cards-ex3.jpg" height="155" width="258"
                                                     alt=""></div>
                                                            <div class="block-content">
                                                                <div class="block-heading">Надписи на заказ</div>
                                                                <p class="block-caption">
                                                                    Вы также можете
                                                                    <a class="scrolr" href="#">
                                                                        оставить
                                                        заявку
                                                                    </a>
                                                                    на нанесение инициалов или любой другой надписи на
                                                    любое изделие, представленное на нашем сайте
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="bottom-block whi50 center-ex not-animated"
                                             data-animate="fadeInRight" data-delay="300">
                                                            <div class="block-logo2">
                                                                <img class="img-responsive swing siza"
                                                     src="../../../asset/image/cards-ex4.jpg" height="155" width="258"
                                                     alt=""></div>
                                                            <div class="block-content">
                                                                <div class="block-heading">Печать своего фото на изделии</div>
                                                                <p class="block-caption">
                                                                    1) Загрузите свое фото
                                                                    <br>
                                                                    2) Опишите другие
                                                    детали заявки
                                                                    <br>
                                                                    3)
                                                                    <a class="scrolr" href="#">Оставьте заявку</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--home content-->
                                                    <div class="col-md-15 bosh-ex">

                                                        <section class="rel-container clearfix">
                                                            <div id="SCROLL_TO_ELEMENT" class="title-1 not-animated hidden-sm hidden-xs"
                                                 data-animate="fadeInRight" data-delay="300">
                                                                <span
                                                    class="content-title bottom20">Галерея принтов от дизайнеров</span>

                                                                <div class="effects effect-5 clearfix">
                                                                    <div class="img">
                                                                        <img class="img-responsive hov-eff toppy"
                                                             src="../../../asset/image/diz.jpg" height="574" width="865"
                                                             alt="">

                                                                        <div class="overlay">
                                                                            <a href="../../../view/ru/main/exclusiveGallery.php" class="expand">
                                                                                Открыть
                                                                                <br>галерею</a>
                                                                            <a class="close-overlay hidden">x</a>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </section>

                                                            <div id="diz" class="col-md-15 scrolly-area">
                                                                <h2 style="margin-top: 0px;">Создать задание для дизайнера</h2>

                                                                <p>
                                                                    Подробно заполненный бриф поможет дизайнерам предложить варианты,
                                                наиболее подходящие вам. Чтобы дизайнеры не рисовали вслепую, просим вас
                                                заполнить все максимально подробно.
                                                                </p>
                                                                <div class="banner quick_shop fl-ri-sh" data-href="../../../asset/ajax/_exclusive-popup.html"
                                                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                    <a class="ex-red-help" href="#">
                                                                        Помощь в заполнении формы <i class="fa fa-question-circle red"></i>
                                                                    </a>
                                                                </div>

                                                                <form id="contactfor" action="<?php echo $_SERVER['PHP_SELF'] ?>
                                                                    "
                                                  method="POST" enctype="multipart/form-data" name="mainForm">
                                                                    <input
                                                    name="form_type" type="hidden" value="contact">
                                                                    <input name="utf8"
                                                                                                          type="hidden"
                                                                                                          value="?">

                                                                    <div class="h1">
                                                                        <span class="sub-title"></span>
                                                                    </div>
                                                                    <ul id="contact-form" class="row list-unstyled">
                                                                        <li class="col-md-20">
                                                                            <label class="control-label" for="message">
                                                                                Опишите задачу как
                                                            можно подробнее
                                                                                <span
                                                                class="req">*</span>
                                                                            </label>

                                                                            <textarea rows="7" class="form-control"
                                                                  onkeyup="changeButtonStatus()"
                                                                  onchange="changeButtonStatus()" name="message"
                                                                  id="comments"
                                                                  placeholder="Например: хочу добавить надпись «Я патриот» красного цвета, шрифт - Arial, прикрепляю свое фото для нанесения надписи, напечатайте этот принт на Свитшоте синего цвета."
                                                                  class="w100 border"
                                                                  cols="90">
                                                                                <?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['message']); ?></textarea>
                                                                        </li>
                                                                        <li class="clearfix"></li>

                                                                        <p class="fix-ex">
                                                                            Есть ли у вас наброски, эскизы или что-то, что
                                                        могло бы помочь?
                                                                        </p>

                                                                        <div class="mar-lw">
                                                                            <input type="button"
                                                                               value="&#8658; Выберете файлы"
                                                                               onclick="addtext(this);"/>
                                                                        </div>
                                                                        <li class="col-md-20">
                                                                            <div class="col-md-10 botts">
                                                                                <select id="address_country_new" class="form-control" name="address[country]"
                                    data-default="">
                                                                                    <option value="" data-provinces="[]">-- На чем печатаем? --</option>
                                                                                    <option value="black">Футболка</option>
                                                                                    <option value="gray">Свитшот</option>
                                                                                    <option value="white">Толстовка</option>
                                                                                    <option value="white">Кружка</option>
                                                                                    <option value="white">Кепка</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-20">
                                                                            <div class="col-md-10 botts">
                                                                                <select id="address_country_new" class="form-control" name="address[country]"
                                    data-default="">
                                                                                    <option value="" data-provinces="[]">-- Укажите желаемый цвет изделия --</option>
                                                                                    <option value="black">Черный</option>
                                                                                    <option value="gray">Серый</option>
                                                                                    <option value="white">Белый</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-md-20">
                                                                            <div class="col-md-10 botts">
                                                                                <select id="address_country_new" class="form-control" name="address[country]"
                                    data-default="">
                                                                                    <option value="" data-provinces="[]">-- Укажите желаемый размер --</option>
                                                                                    <option value="black">28-30</option>
                                                                                    <option value="gray">30-32</option>
                                                                                    <option value="white">32-34</option>
                                                                                    <option value="black">34-36</option>
                                                                                    <option value="gray">36-38</option>
                                                                                    <option value="white">38-40</option>
                                                                                    <option value="black">40-42</option>
                                                                                    <option value="gray">42-44</option>
                                                                                    <option value="white">44-46</option>
                                                                                    <option value="black">46-48</option>
                                                                                    <option value="gray">48-50</option>
                                                                                    <option value="white">50-52</option>
                                                                                    <option value="white">52-54</option>
                                                                                    <option value="black">54-56</option>
                                                                                    <option value="gray">58-58</option>
                                                                                    <option value="white">58-60</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <p class="fix-ex">Нужна услуга по нанесению надписи на изделие?</p>
                                                                        <li class="col-md-20 set_default">
                                                                            <div class="col-md-2">
                                                                                <input type="radio" id="address_default_address_new" name="address[default]" value="1"> Нет</div>
                                                                            <div class="col-md-2">
                                                                                <input type="radio" id="address_default_address_new" name="address[default]" value="1"> Да</div>
                                                                        </li>
                                                                        <br>
                                                                        <br>
                                                                        <li class="col-md-20">
                                                                            <label class="control-label" for="name">ФИО</label>
                                                                            <input class="form-control" onkeyup="changeButtonStatus()"
                                                               placeholder="Например: Василий Иванов"
                                                               onchange="changeButtonStatus()" type="text" name="name"
                                                               maxlength="64"
                                                               value="<?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['name']); ?>"/></li>

                                                                        <li class="clearfix"></li>
                                                                        <li class="col-md-20">
                                                                            <label class="control-label" for="email">
                                                                                Электронная почта
                                                                                <span
                                                                class="req">*</span>
                                                                            </label>
                                                                            <input class="form-control email"
                                                               placeholder="Например: user@mail.ru"
                                                               onkeyup="changeButtonStatus()"
                                                               onchange="changeButtonStatus()" name="email" required
                                                               maxlength="64"
                                                               value="<?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['email']); ?>"/></li>
                                                                        <li class="clearfix"></li>
                                                                        <li class="col-md-20">
                                                                            <label class="control-label" for="subject">Телефон</label>
                                                                            <input class="form-control subject"
                                                               placeholder="Например: + 7 495 111-11-11"
                                                               onkeyup="changeButtonStatus()"
                                                               onchange="changeButtonStatus()" name="subject"
                                                               maxlength="64"
                                                               value="<?php if ($_SESSION['sendMailForm']['error']) echo($subject = $_SESSION['email']); ?>"/></li>
                                                                        <li class="clearfix"></li>
                                                                        <li class="col-md-20 unpadding-top">
                                                                            <input class="btn pad-ex" type="submit" title="Оставить заявку"
                                                               name="sendMail" value="Оставить заявку" id="send_but"/>
                                                                        </li>
                                                                    </ul>
                                                                </form>
                                                            </div>

                                                            <?php
                                        if (isset($_SESSION['success'])) {
                                            if ($_SESSION['success'])
                                                echo '<p style="background:lightgreen">Письмо успешно отправлено</p>
                                                        ';
                                            else
                                                echo '
                                                        <p style="background:yellow;border:1px solid red">Ошибка при отправке письма</p>
                                                        ';
                                            unset($_SESSION['success']);
                                        }
                                        if (isset($_SESSION['sendMailForm'])) {
                                            echo $_SESSION['sendMailForm']['error'];
                                            $name = htmlspecialchars($_SESSION['sendMailForm']['name']);
                                            $email = htmlspecialchars($_SESSION['sendMailForm']['email']);
                                            $subject = htmlspecialchars($_SESSION['sendMailForm']['subject']);
                                            $message = htmlspecialchars($_SESSION['sendMailForm']['message']);
                                            unset($_SESSION['sendMailForm']);
                                        } else {
                                            $name = '';
                                            $email = '';
                                            $subject = '';
                                            $message = '';
                                        }
                                        ?>
                                                    </div>
                                                    <!--end home content-->

                                                    <!--sidebar home-->
                                                    <div class="home_banners_wrapper col-md-5">
                                                        <div class="group_homebanner hidden-xs">
                                                            <div class="home_banners_inner not-animated" data-animate="flipInX"
                                                 data-delay="300">
                                                                <div class="home_banners_container">
                                                                    <h3 class="sb-title">
                                                                        <i class="fa fa-lightbulb-o red"></i>
                                                                        Помощь
                                                        дизайнера
                                                                    </h3>

                                                                    <div id="home_banners" class="clearfix">
                                                                        <div class="banner quick_shop">
                                                                            <p>
                                                                                У нас вы также можете заказать нестандартные решения -
                                                                подобрать любой
                                                                цвет, нанести инициалы и любые надписи.
                                                                            </p>
                                                                            <a href="#">
                                                                                <a class="scrolr" href="#">
                                                                                    <img
                                                                        class="img-responsive max-www"
                                                                        src="../../../asset/image/ex.jpg" alt=""></a>
                                                                            </a>

                                                                            <p>
                                                                                Подробно заполненный бриф поможет дизайнерам предложить
                                                                варианты, наиболее подходящие вам. Чтобы дизайнеры не
                                                                рисовали вслепую, просим вас заполнить все максимально
                                                                подробно.
                                                                            </p>
                                                                            <a class="scrolr" href="#">
                                                                                <button class="btn2 select-option" type="button">
                                                                                    Заполнить бриф
                                                                                    <i
                                                                        class="fa fa-hand-o-left sizz"></i>
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--конец виджета выбор регионов--> </div>
                                                    </div>
                                                    <!--end sidebar home--> </div>
                                            </div>
                                        </section>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <?php include ("../../../footer.php") ?>
                    <div class="modal fade" id="quick-shop-modal"></div>
                    <script>
        $(document).ready(function () {
            $('.scrolr').click(function () {
                // скорость скролла
                var speed = 1000;

                // место скролла
                var top = $('.scrolly-area').offset().top;

                $('html, body').animate({scrollTop: top}, speed);

                return false;
            });
        });
        $(document).ready(function () {
            $('.scrolr2').click(function () {
                // скорость скролла
                var speed = 1000;

                // место скролла
                var top = $('.scrolly-area2').offset().top;

                $('html, body').animate({scrollTop: top}, speed);

                return false;
            });
        });
    </script>

</body>
                </html>