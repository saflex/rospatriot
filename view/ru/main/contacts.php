<?php

session_start();

/* получатели */

if ($_POST['sendMail']) {
    $admin = "info@ideameb.ru" . ", "; //обратите внимание на запятую
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
        $_SESSION['sendMailForm']['error'] = '<p>При заполнении формы допущены ошибки:</p><ul>' . $error . '</ul>';
        $_SESSION['sendMailForm']['name'] = $name;
        $_SESSION['sendMailForm']['email'] = $email;
        $_SESSION['sendMailForm']['subject'] = $subject;
        $_SESSION['sendMailForm']['message'] = $message;
        header('Location: ' . $_SERVER['PHP_SELF']);
        die();
    }


    $filepath = array();
    $filename = array();
    for ($i = 0; $i < count($_FILES['file']); $i++) {
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
    $headers = "From: " . strtoupper($_SERVER['SERVER_NAME']) . " <" . $email . ">\r\n";
    $headers .= "Return-path: <" . $email . ">\r\n";
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
        for ($i = 0; $i < $count; $i++) {
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
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ru" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="canonical" href="/"/>

    <meta name="description" content=""/>
     <?php include ("../../../head.php") ?>
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        // Как только будет загружен API и готов DOM, выполняем инициализацию
        ymaps.ready(init);

        function init() {
            // Создание экземпляра карты и его привязка к контейнеру с
            // заданным id ("map")
            var myMap = new ymaps.Map('map', {
                // При инициализации карты, обязательно нужно указать
                // ее центр и коэффициент масштабирования
                center: [55.6665481, 37.5451536],
                zoom: 15, controls: ['zoomControl', 'typeSelector', 'fullscreenControl']
            });

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'ул. Намёткина, д. 1, подъезд 7'
            }, {
                // Опции.
                // Необходимо указать данный тип проекта.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: '../../../asset/image/mm_20_red.png',
                // Размеры метки.
                iconImageSize: [217, 58],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-27, -72]
            });

            myMap.geoObjects.add(myPlacemark);

        }
    </script>
    <script>var i = 1;
        function addtext(el) {
            a = el.parentNode;
            a.innerHTML = a.innerHTML + '<br />' + (i++) + '-й <input type="file" name="file[]" />';
        }</script>
    <style>
        #java_error {
            padding-top: 18px;
            padding-bottom: 20px;
            font-size: 24px;
            height: px;
            width: 750px;
            text-align: center;
            margin: 0 auto;
            background-color: yellow;
        }

        #java_error span {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>

<body class="template" itemscope itemtype="http://schema.org/WebPage">
<?php include ("../../../header.php") ?>
<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <div id="breadcrumb" class="row breadcrumb">
                <div class="" itemprop="breadcrumb">
                    <a href="../../../view/ru/main" class="homepage-link">Главная</a>
                    <i class="fa fa-angle-right"></i>
                    <span class="page-title">Контакты</span>
                </div>
            </div>
            <h1 id="page-title" class="large">Контакты</h1>

            <div id="bottom">
                <div class="container">
                    <div id="bottom_blocks" class="row">
                        <div class="col-md-10">
                            <div class="buttsa conts-text not-animated" data-animate="fadeInLeft " data-delay="300">

                                <ul>
                                    <li><i class="fa fa-exchange blue"></i> Адрес для самовывоза: ул. Намёткина, д. 1,
                                        подъезд 7. Перед тем как подъехать
                                        звоните заранее по телефону: <span class="red">8 (495) 134-31-07</span></li>

                                    <li><i class="fa fa-location-arrow blue"></i> Как проехать:
                                        станция метро <span class="red">«Новые Черемушки»,</span> первый вагон из
                                        центра, после турникетов направо и выходите на улицу налево. Далее прямо до
                                        пересечения Профсоюзной улицы с Намёткина, направо – впереди будет магазин
                                        «Седьмой Континент», после него увидите нужный дом - Наметкина д.1
                                    </li>

                                    <li><i class="fa fa-clock-o blue"></i> Время работы: <span class="red">пнд-вскр с 10:00-20:00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="buttsa conts-text not-animated" data-animate="fadeInRight" data-delay="300">
                                <ul>
                                    <li><i class="fa fa-phone blue"></i> Тел: <span
                                            class="red">8 (495) 134-31-07 / 8 (800) 505-39-62</span></li>
                                    <li><i class="fa fa-envelope blue"></i> Email: <span
                                            class="red">info@rospatriot.ru</span></li>
                                    <li><i class="fa fa-truck blue"></i> Доставка по Москве курьером: <span class="red">250 руб. в пределах МКАД.</span>
                                    </li>
                                    <li><i class="fa fa-road blue"></i> Доставка также возможна по регионам.</li>
                                    <li><i class="fa fa-phone-square blue"></i> Телефон для партнёрства и предложений:
                                        <span class="red">8 (495) 134-31-07</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="row content">
                <div id="col-main" class="col-md-20 contact-page clearfix not-animated" data-animate="fadeInLeft"
                     data-delay="300">
                    <h2 id="page-title" class="large"><i class="fa fa-hand-o-down"></i> Пункт самовывоза на карте</h2>

                    <div class="clearfix">
                        <div class="col-md-10">
                            <div id="contact_map_wrapper">
                                <div id="map"
                                     style="width:100%;height:420px; display:block; margin: auto; position: relative;"></div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <form id="contactfor" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
                                  enctype="multipart/form-data" name="mainForm"><input name="form_type" type="hidden"
                                                                                       value="contact"><input
                                    name="utf8" type="hidden" value="?">

                                <div class="h1">
                                    <i class="fa fa-pencil-square blue"></i> <span
                                        class="content-title">Написать нам</span>
                                    <span class="sub-title"></span>
                                </div>
                                <ul id="contact-form" class="row list-unstyled">
                                    <li class="col-md-18">
                                        <label class="control-label" for="name">ФИО </label>
                                        <input class="form-control"
                                               onfocus="if (this.value == 'Ваше имя') {this.value = '';}"
                                               onblur="if (this.value == '') {this.value = 'Ваше имя';}"
                                               onkeyup="changeButtonStatus()" onchange="changeButtonStatus()"
                                               type="text" name="name" maxlength="64"
                                               value="<?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['name']); ?>"/>
                                    </li>
                                    <li class="clearfix"></li>
                                    <li class="col-md-18">
                                        <label class="control-label" for="subject">Телефон</label>
                                        <input class="form-control subject"
                                               onfocus="if (this.value == 'Телефон') {this.value = '';}"
                                               onblur="if (this.value == '') {this.value = 'Телефон';}"
                                               onkeyup="changeButtonStatus()" onchange="changeButtonStatus()"
                                               name="subject" maxlength="64"
                                               value="<?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['subject']); ?>"/>
                                    </li>

                                    <li class="clearfix"></li>
                                    <li class="col-md-18">
                                        <label class="control-label" for="email">Электронная почта <span
                                                class="req">*</span></label>
                                        <input class="form-control email"
                                               onfocus="if (this.value == 'Ваша электронная почта') {this.value = '';}"
                                               onblur="if (this.value == '') {this.value = 'Ваша электронная почта';}"
                                               onkeyup="changeButtonStatus()" onchange="changeButtonStatus()"
                                               name="email" required maxlength="64"
                                               value="<?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['email']); ?>"/>
                                    </li>
                                    <li class="clearfix"></li>
                                    <li class="col-md-18">
                                        <label class="control-label" for="message">Ваше сообщение <span
                                                class="req">*</span></label>

										<textarea rows="7" class="form-control" onkeyup="changeButtonStatus()"
                                                  onchange="changeButtonStatus()" name="message" id="comments" required
                                                  class="w100 border"
                                                  cols="90"><?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['message']); ?></textarea>
                                    </li>
                                    <li class="clearfix"></li>
                                    <li class="col-md-18 unpadding-top">
                                        <input class="btn" type="submit" title="Оставить заявку" name="sendMail"
                                               value="Отправить сообщение" id="send_but"/>
                                    </li>
                                </ul>
                            </form>
                            <br>
                            <br>
                        </div>

                        <?php
                        if (isset($_SESSION['success'])) {
                            if ($_SESSION['success'])
                                echo '<div style="width: 540px; height: 43px; text-align: center; padding: 8px 10px 20px 10px; font-size: 20px; background: #FEDC4A; color: #fff; margin: -8622px 0 0 -270px; top: 50%; left: 50%; position: absolute; z-index: 40;" id="div1">Ваше сообщение отправлено, спасибо за заявку!</div>';
                            else
                                echo '<p style="background:yellow;border:1px solid red">Ошибка при отправке письма</p>';
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

                    <script>
                        <!--
                        var f = document.mainForm;
                        function changeButtonStatus() {
                            f.sendMail.disabled = () ? false : true;
                            f.sendMail1.disabled = () ? false : true;
                        }
                        changeButtonStatus();
                        //-->
                    </script>
                </div>
        </div>
    </div>
    </section>
</div>
<?php include ("../../../footer.php") ?>
</body>
</html>
