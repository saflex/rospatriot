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
                    <a href="../../../view/ru/main" class="homepage-link" title="Главная">Главная</a>
                    <i class="fa fa-angle-right"></i>
                    <span class="page-title">Восстановить пароль</span>
                </div>
            </div>
            <section class="row content">
                <div id="col-main" class="col-md-20 login-page clearfix">
                        <h1 id="page-title">Восстановить пароль</h1>
                        <div class="row">
                            <div class="col-md-9 row-left">
                                <div id="recover-password">
                                    <div class="wrapper-title">
                                        <span class="title-2">Что делать, если Вы забыли свой пароль?</span>
                                        <span class="line"></span>
                                    </div>
                                    <p class="note">В форму ниже введите свой электронный адрес, указанный при
                                        регистрации,
                                        и через несколько минут на Ваш E-mail придёт письмо с инструкциями по
                                        восстановлению пароля.</p>

                                    <form accept-charset="UTF-8" action="/user/restorePassword" method="post">
                                        <input name="form_type" type="hidden" value="recover_customer_password"/>
                                        <input name="utf8" type="hidden" value="✓"/>
                                        <ul id="recover-form" class="list-unstyled">
                                            <li class="clearfix"></li>
                                            <li id="recover_email" class="col-md-20">
                                                <label class="control-label">Электронная почта <span
                                                        class="req">*</span></label>
                                                <input type="email" value="" name="email" id="recover-email"
                                                       class="form-control">
                                            </li>
                                            <li class="col-md-20 unpadding-top">
                                                <ul class="login-wrapper list-inline">
                                                    <li>
                                                        <button class="btn" type="submit">Выслать инструкции</button>
                                                    </li>
                                                    <li>
                                                        или
                                                        <a class="return" href="../../../view/ru/main">вернуться на главную</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <input type="hidden" name="checkout_url" value="">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h1 id="page-title">Изменить пароль</h1>
                        <div class="row">
                            <div class="col-md-9 row-left">

                                <div id="recover-password">
                                    <div class="wrapper-title">
                                        <span class="title-2">Смена пароля</span>
                                        <span class="line"></span>
                                    </div>
                                    <form accept-charset="UTF-8" action="./login.php" method="post"><input
                                            name="form_type" type="hidden" value="recover_customer_password"><input
                                            name="utf8" type="hidden" value="✓">
                                        <ul id="recover-form" class="list-unstyled">
                                            <li class="clearfix"></li>
                                            <li id="recover_email" class="col-md-10">
                                                <label class="control-label">Новый пароль <span
                                                        class="req">*</span></label>
                                                <input type="email" value="" name="email" id="recover-email"
                                                       class="form-control error-input">
                                            </li>
                                            <li class="col-md-20 unpadding-top">
                                                <ul class="login-wrapper list-inline">
                                                    <li>
                                                        <button class="btn" type="submit">Изменить пароль</button>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p class="note">Пароль должени быть не менее 6 символов длиной.</p>
                                        <input type="hidden" name="checkout_url" value="">
                                    </form>

                                </div>
                            </div>
                        </div>
                </div>
            </section>
        </div>
    </div>
</div>
 <?php include ("../../../footer.php") ?>
</body>
</html>