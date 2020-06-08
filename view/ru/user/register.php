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
                    <a href="../../../view/ru/main" class="homepage-link" title="Back to the frontpage">Главная</a>
                    <i class="fa fa-angle-right"></i>
                    <span class="page-title">создать аккаунт</span>
                </div>
            </div>
            <section class="row content">
                <div id="col-main" class="col-md-20 register-page clearfix">
                    <h1 id="page-title" class="large">Регистрация</h1>
					<div class="col-md-5">Создав учетную запись Вы получите доступ к личному кабинету, сможетете быстрее оформлять заказы, отслеживать их статус и просматривать историю покупок.</div>
                    <form accept-charset="UTF-8" action="/user/register" id="create_customer" method="post">
                        <input name="form_type" type="hidden" value="create_customer"/>
                        <input name="utf8" type="hidden" value="✓"/>
                        <input name="json" type="hidden" value="1"/>
                        <ul id="register-form" class="row list-unstyled">
                            <li class="clearfix"></li>
                            <li class="col-md-9">
                                <label class="control-label" for="first_name">Имя</label>
                                <input type="text" value="" name="firstName" id="first_name"
                                       class="form-control">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-9">
                                <label class="control-label" for="last_name">Фамилия</label>
                                <input type="text" value="" name="lastName" id="last_name"
                                       class="form-control">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-9">
                                <label class="control-label" for="email">Электронная почта <span
                                        class="req">*</span></label>
                                <input type="email" value="" name="email" id="email" class="form-control">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-9">
                                <label class="control-label" for="password">Пароль <span class="req">*</span></label>
                                <input type="password" value="" name="password" id="password"
                                       class="form-control password">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-12 unpadding-top">
                                <button class="btn" type="submit">Создать аккаунт</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
 <?php include ("../../../footer.php") ?>
<script type="text/javascript">
    jQuery(function ($) {
        $('#create_customer').on('submit', function (e) {
            e.preventDefault();
            var form = e.target;
            $.post(form.action, new FormData(form), function (response) {
                response = JSON.parse(response);
                alert(response.data.toString());
            });
        });
    });
</script>
</body>
</html>