<!doctype html>
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ru" class="no-js"> <!--<![endif]-->
<head>
    <?php include ("../../../head.php") ?>
    <link href="../../../asset/stylesheet/style-parallax.css" rel="stylesheet" type="text/css"/>
</head>
<body class="template" itemscope itemtype="http://schema.org/WebPage">
<?php include ("../../../header.php") ?>
<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <div id="breadcrumb" class="row breadcrumb">
                <div class="" itemprop="breadcrumb">
                    <a href="../../../view/ru/main" class="homepage-link" title="Главная">Главная</a>
                    <i class="fa fa-angle-right"></i>
                    <span class="page-title">Конкурс</span>
                </div>
            </div>
            <section class="row content">
                <div id="col-main" class="blog blog-page col-content col-sm-20 col-md-20">
                    <h1 id="page-title" class="large">Конкурс</h1>

                    <div class="parallax">
                        <div id="intro">
                            <div class="story">
                                <div class="float-left">
                                    <h2 class="white">Что такое «parallax scrolling» ?</h2>

                                    <p>Parallax scrolling — это процесс 2D анимации, который создаёт иллюзию глубины.
                                        Анимация передних слоёв быстрее, чем анимация фона..</p>
                                </div>
                            </div>
                            <!--.story-->
                        </div>
                        <!--#intro-->

                        <div id="second">
                            <div class="story">
                                <div class="bg"></div>
                                <div class="float-right">
                                    <h2 class="white">Основная идея параллакса</h2>

                                    <p> Когда вы наблюдаете за движущимся автомобилем, вам кажется, что объекты
                                        расположенные перед автомобилем, движутся быстрее, чем объекты расположенные за
                                        автомобилем. </p>

                                    <p>Parallax scrolling использует тот же принцип, чтобы заставить зрителя думать, что
                                        он наблюдает за 3D сценой.</p>
                                </div>
                            </div>
                            <!--.story-->

                        </div>
                        <!--#second-->

                        <div id="third">
                            <div class="story">
                                <div class="float-left">
                                    <h2 class="white">Принцип работы</h2>

                                    <p>Вы можете скролить обычным способом, использовать меню навигации в правой части
                                        страницы или кнопки следующий/предыдущий, которые появляются под каждой статьёй.
                                        Страница содержит три, независимо друг от друга анимированных слоя, для создания
                                        иллюзии глубины.</p>
                                    <button class="btn select-option" type="button" onclick="">Войти в категорию
                                    </button>
                                </div>
                            </div>
                            <!--.story-->
                        </div>
                        <!--#third-->

                    </div>


                    <div class="no-parallax">
                        <div class="">
                            <h2 class="">Что такое «parallax scrolling» ?</h2>

                            <p>Parallax scrolling — это процесс 2D анимации, который создаёт иллюзию глубины. Анимация
                                передних слоёв быстрее, чем анимация фона..</p>
                        </div>

                        <div class="">
                            <h2 class="">Основная идея параллакса</h2>

                            <p> Когда вы наблюдаете за движущимся автомобилем, вам кажется, что объекты расположенные
                                перед автомобилем, движутся быстрее, чем объекты расположенные за автомобилем. </p>

                            <p>Parallax scrolling использует тот же принцип, чтобы заставить зрителя думать, что он
                                наблюдает за 3D сценой.</p>
                        </div>

                        <div class="">
                            <h2 class="">Принцип работы</h2>

                            <p>Вы можете скролить обычным способом, использовать меню навигации в правой части страницы
                                или кнопки следующий/предыдущий, которые появляются под каждой статьёй.
                                Страница содержит три, независимо друг от друга анимированных слоя, для создания иллюзии
                                глубины.</p>
                            <button class="btn select-option" type="button" onclick="">Войти в категорию</button>
                        </div>

                    </div>


                    <div class="col-md-10">
                        <h2>Правила участия в конкурсе</h2>
                    </div>
                    <div class="col-md-10">
                        <h2>Отправить нам свои принты</h2>

                        <form id="contactfor" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
                              enctype="multipart/form-data" name="mainForm"><input name="form_type" type="hidden"
                                                                                   value="contact"><input name="utf8"
                                                                                                          type="hidden"
                                                                                                          value="?">

                            <div class="h1">
                                <span class="sub-title"></span>
                            </div>
                            <ul id="contact-form" class="row list-unstyled">
                                <li class="col-md-18">
                                    <label class="control-label" for="name">ФИО </label>
                                    <input class="form-control"
                                           onfocus="if (this.value == 'Ваше имя') {this.value = '';}"
                                           onblur="if (this.value == '') {this.value = 'Ваше имя';}"
                                           onkeyup="changeButtonStatus()" onchange="changeButtonStatus()" type="text"
                                           name="name" maxlength="64"
                                           value="<?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['name']); ?>"/>
                                </li>

                                <li class="clearfix"></li>
                                <li class="col-md-18">
                                    <label class="control-label" for="email">Электронная почта <span
                                            class="req">*</span></label>
                                    <input class="form-control email"
                                           onfocus="if (this.value == 'Ваша электронная почта') {this.value = '';}"
                                           onblur="if (this.value == '') {this.value = 'Ваша электронная почта';}"
                                           onkeyup="changeButtonStatus()" onchange="changeButtonStatus()" name="email"
                                           required maxlength="64"
                                           value="<?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['email']); ?>"/>
                                </li>
                                <li class="clearfix"></li>
                                <li class="col-md-18">
                                    <label class="control-label" for="message">Ваше сообщение </label>

                                    <textarea rows="7" class="form-control" onkeyup="changeButtonStatus()"
                                              onchange="changeButtonStatus()" name="message" id="comments"
                                              class="w100 border"
                                              cols="90"><?php if ($_SESSION['sendMailForm']['error']) echo($name = $_SESSION['message']); ?></textarea>
                                </li>
                                <li class="clearfix"></li>
                                <div class="mar-lw"><input type="button" value="&#8658; Прикрепить принт"
                                                           onclick="addtext(this);"/></div>
                                <li class="clearfix"></li>
                                <li class="col-md-18 unpadding-top">
                                    <input class="btn" type="submit" title="Оставить заявку" name="sendMail"
                                           value="Отправить сообщение" id="send_but"/>
                                </li>
                            </ul>
                        </form>
                    </div>

                    <?php
                    if (isset($_SESSION['success'])) {
                        if ($_SESSION['success'])
                            echo '<p style="background:lightgreen">Письмо успешно отправлено</p>';
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


        </div>
        </section>
    </div>
</div>
</div>
<?php include ("../../../footer.php") ?>
<script type="text/javascript" src="../../../asset/javascript/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="../../../asset/javascript/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="../../../asset/javascript/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#nav').localScroll(800);

        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        $('#intro').parallax("50%", 0.1);
        $('#second').parallax("50%", 0.1);
        $('.bg').parallax("50%", 0.4);
        $('#third').parallax("50%", 0.3);

    })
</script>
</body>
</html>

