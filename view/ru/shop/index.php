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
</head>

<style>
    .opasity-hover:hover {
        opacity: 0.9;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }
</style>

<body class="template" itemscope itemtype="http://schema.org/WebPage">
<?php include ("../../../header.php") ?>
<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <div id="breadcrumb" class="row breadcrumb">
                <div class="" itemprop="breadcrumb">
                    <a href="../../../view/ru/main" class="homepage-link" title="Главная">Главная</a> <i
                        class="fa fa-angle-right"></i>
                    <span class="page-title">Магазин</span>
                </div>
            </div>
            <section class="row content">
                <div id="col-main" class="blog blog-page col-content col-sm-20 col-md-20">
                    <h1 id="page-title" class="large">Магазин</h1>
                    <!-- left col end -->
                    <div class="col-md-10 bordy not-animated" data-animate="fadeInLeft" data-delay="900">
                        <!-- city start -->
                        <h3 class="blue">Продукция с принтами по регионам</h3>
                        <section class="rel-container clearfix">
                            <div class="effects effect-5 clearfix">
                                <div class="img">
                                    <img src="../../../asset/image/magaz-category-1.jpg" class="img-responsive" alt="">

                                    <div class="overlay">
                                        <a href="../../../view/ru/shop/shopRegion.php" class="expand">
                                            Войти в
                                            <br>категорию</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- city end -->
                        <h4 class="">Навигация по региональной продукции:</h4>

                        <div class="col-md-10 botts">
                            <select id="address_country_new" class="form-control" name="address[country]"
                                    data-default="">
                                <option value="" data-provinces="[]">-- Выбрать регион --</option>
                                <option value="black">Москва</option>
                                <option value="gray">Санкт-Петербург</option>
                            </select>
                        </div>
                        <div class="col-md-10 botts">
                            <select id="address_country_new" class="form-control" name="address[country]"
                                    data-default="">
                                <option value="" data-provinces="[]">-- Выбрать тип продукции --</option>
                                <option value="black">Мужская</option>
                                <option value="gray">Женская</option>
                                <option value="whte">Детская</option>
                                <option value="whte">Аксессуары</option>
                            </select>
                        </div>
                        <div class="col-md-10 botts">
                            <button class="btn">Показать товары</button>
                        </div>

                        <div class="botty"></div>
                    </div>

                    <!-- left col end -->

                    <!-- right col start -->

                    <div class="col-md-10 not-animated" data-animate="fadeInRight" data-delay="900">
                        <!-- city start -->
                        <h3 class="blue">Продукция с общими принтами</h3>
                        <section class="rel-container clearfix">
                            <div class="effects effect-5 clearfix">
                                <div class="img">
                                    <img src="../../../asset/image/magaz-category-2.jpg" class="img-responsive" alt="">

                                    <div class="overlay">
                                        <a href="../../../view/ru/shop/shopDifferent.php" class="expand">
                                            Войти в
                                            <br>категорию</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- city end -->
                        <h4>Навигация по общей продукции:</h4>

                        <div class="col-md-10 botts">
                            <select id="address_country_new" class="form-control" name="address[country]"
                                    data-default="">
                                <option value="" data-provinces="[]">-- Выбрать категорию --</option>
                                <option value="black">Принты ко дню космонавтики</option>
                                <option value="gray">Принты к 9 мая</option>
                                <option value="gray">Молодежные принты</option>
                            </select>
                        </div>
                        <div class="col-md-10 botts">
                            <select id="address_country_new" class="form-control" name="address[country]"
                                    data-default="">
                                <option value="" data-provinces="[]">-- Выбрать тип продукции --</option>
                                <option value="black">Мужская</option>
                                <option value="gray">Женская</option>
                                <option value="whte">Детская</option>
                                <option value="whte">Аксессуары</option>
                            </select>
                        </div>
                        <div class="col-md-10 botts">
                            <button class="btn">Показать товары</button>
                        </div>

                        <!-- city end -->
                        <div class="botty"></div>
                    </div>

                </div>
            </section>
            <section class="row content">
                        <!--#col-main-->
                        <div id="col-main" class="collection collection-page col-content col-sm-15 col-md-15">

                            <div id="page-header">
                                <h1 id="page-title">ВСЕ ТОВАРЫ</h1>
                            </div>

                            <!--#sandBox-wrapper-->
                            <div id="sandBox-wrapper" class="group-product-item">
                                <ul id="sandBox" class="list-unstyled row isotope">
                                    <!--#начало товара-->
                                    <li class="element first isotope-item" data-alpha=" " data-price="5000">
                                        <form action="/cart/add" method="post">
                                            <ul class="row-container list-unstyled clearfix">
                                                <li class="row-left">
                                                    <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                                                        <span class="hoverBorderWrapper">
                                                            <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                                                            <span class="hidden-sm hidden-xs">
                                                                <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="row-right text-left parent-fly animMix">
                                                    <a class="title-5" href="../../../view/ru/shop/product.php">Футболка Мужская "Кремль"</a>

                                                    <div class="card-tags">
                                                        <span>
                                                            <i class="fa   fa-tags red"></i>
                                                            Теги:
                                                        </span>
                                                        <a href="../../../view/ru/shop/product.php">Мужские /</a>
                                                        <a href="../../../view/ru/shop/product.php">Футболки /</a>
                                                        <a href="../../../view/ru/shop/product.php">
                                                            Москва
                                                    /
                                                        </a>
                                                        <a href="../../../view/ru/shop/product.php">Кремль</a>
                                                    </a>
                                                </div>
                                                <div class="product-price">
                                                    <span class="price">
                                                        <span class="money">1300 руб.</span>
                                                    </span>
                                                </div>
                                                <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <!--#конец товара-->

                                <!--#начало товара-->
                                <li class="element isotope-item"
                                data-alpha="Dellentes sagittis sodales accum etiam  lobortis purus dictum"
                                data-price="5000">
                                    <form action="/cart/add" method="post">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                                                    <span class="hoverBorderWrapper">
                                                        <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front"
                                 alt="Dellentes sagittis sodales accum etiam  lobortis purus dictum">
                                                        <span class="hidden-sm hidden-xs">
                                                            <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive"
                                   alt="Dellentes sagittis sodales accum etiam  lobortis purus dictum"></span>
                                                    </span>
                                                    <span class="sale_banner">
                                                        <img class="byye" src="../../../asset/image/saleoff.png" title="Скидка" alt="Скидка"></span>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <a class="title-5" href="../../../view/ru/shop/product.php">Свитшот Мужской "Воробьевы горы"</a>

                                                <div class="card-tags">
                                                    <span>
                                                        <i class="fa   fa-tags red"></i>
                                                        Теги:
                                                    </span>
                                                    <a href="../../../view/ru/shop/product.php">Мужские /</a>
                                                    <a href="../../../view/ru/shop/product.php">Свитшоты /</a>
                                                    <a href="../../../view/ru/shop/product.php">
                                                        Москва
                                                    /
                                                    </a>
                                                    <a href="../../../view/ru/shop/product.php">Воробьевы горы" /</a>
                                                    <a href="../../../view/ru/shop/product.php">Товары со скидкой</a>
                                                </a>
                                            </div>
                                            <div class="product-price">
                                                <span class="price_sale">
                                                    <span class="money">2100 руб.</span>
                                                </span> <del class="price_compare"><span class="money">2500 руб.</span></del> 
                                            </div>
                                            <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                                        </li>
                                    </ul>
                                </form>
                            </li>
                            <!--#конец товара-->
                            <!--#начало товара-->
                            <li class="element first isotope-item" data-alpha=" " data-price="5000">
                                <form action="/cart/add" method="post">
                                    <ul class="row-container list-unstyled clearfix">
                                        <li class="row-left">
                                            <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                                                <span class="hoverBorderWrapper">
                                                    <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                                                    <span class="hidden-sm hidden-xs">
                                                        <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="row-right text-left parent-fly animMix">
                                            <a class="title-5" href="../../../view/ru/shop/product.php">Майка Мужская "Останкино"</a>

                                            <div class="card-tags">
                                                <span>
                                                    <i class="fa   fa-tags red"></i>
                                                    Теги:
                                                </span>
                                                <a href="../../../view/ru/shop/product.php">Майки /</a>
                                                <a href="../../../view/ru/shop/product.php">Мужские /</a>
                                                <a href="../../../view/ru/shop/product.php">
                                                    Москва
                                                    /
                                                </a>
                                                <a href="../../../view/ru/shop/product.php">Останкино</a>
                                            </a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">
                                                <span class="money">700 руб.</span>
                                            </span>
                                        </div>
                                        <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                                    </li>
                                </ul>
                            </form>
                        </li>
                        <!--#конец товара-->
                        <!--#начало товара-->
                        <li class="element first isotope-item" data-alpha=" " data-price="5000">
                            <form action="/cart/add" method="post">
                                <ul class="row-container list-unstyled clearfix">
                                    <li class="row-left">
                                        <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                                            <span class="hoverBorderWrapper">
                                                <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                                                <span class="hidden-sm hidden-xs">
                                                    <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="row-right text-left parent-fly animMix">
                                        <a class="title-5" href="../../../view/ru/shop/product.php">Свитшот Мужской "Третьяковка"</a>

                                        <div class="card-tags">
                                            <span>
                                                <i class="fa   fa-tags red"></i>
                                                Теги:
                                            </span>
                                            <a href="../../../view/ru/shop/product.php">Свитшот /</a>
                                            <a href="../../../view/ru/shop/product.php">Москва /</a>
                                            <a href="../../../view/ru/shop/product.php">Третьяковка</a>
                                        </a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">
                                            <span class="money">700 руб.</span>
                                        </span>
                                    </div>
                                    <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                                </li>
                            </ul>
                        </form>
                    </li>
                    <!--#конец товара-->
                    <!--#начало товара-->
                    <li class="element first isotope-item" data-alpha=" " data-price="5000">
                        <form action="/cart/add" method="post">
                            <ul class="row-container list-unstyled clearfix">
                                <li class="row-left">
                                    <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                                        <span class="hoverBorderWrapper">
                                            <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                                            <span class="hidden-sm hidden-xs">
                                                <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="row-right text-left parent-fly animMix">
                                    <a class="title-5" href="../../../view/ru/shop/product.php">Майка Мужская "Кремль"</a>

                                    <div class="card-tags">
                                        <span>
                                            <i class="fa   fa-tags red"></i>
                                            Теги:
                                        </span>
                                        <a href="../../../view/ru/shop/product.php">Мужская /</a>
                                        <a href="../../../view/ru/shop/product.php">Футболки /</a>
                                        <a href="../../../view/ru/shop/product.php">
                                            Москва
                                                    /
                                        </a>
                                        <a href="../../../view/ru/shop/product.php">Кремль</a>
                                    </a>
                                </div>
                                <div class="product-price">
                                    <span class="price">
                                        <span class="money">1100 руб.</span>
                                    </span>
                                </div>
                                <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                            </li>
                        </ul>
                    </form>
                </li>
                <!--#конец товара-->
                <!--#начало товара-->
                <li class="element first isotope-item" data-alpha=" " data-price="5000">
                    <form action="/cart/add" method="post">
                        <ul class="row-container list-unstyled clearfix">
                            <li class="row-left">
                                <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                                    <span class="hoverBorderWrapper">
                                        <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                                        <span class="hidden-sm hidden-xs">
                                            <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                                    </span>
                                </a>
                            </li>
                            <li class="row-right text-left parent-fly animMix">
                                <a class="title-5" href="../../../view/ru/shop/product.php">
                                    Толстовка на молнии Мужская
                                                "Кремль"
                                </a>

                                <div class="card-tags">
                                    <span>
                                        <i class="fa   fa-tags red"></i>
                                        Теги:
                                    </span>
                                    <a href="../../../view/ru/shop/product.php">Мужские /</a>
                                    <a href="../../../view/ru/shop/product.php">
                                        Толстовки
                                                    на молнии /
                                    </a>
                                    <a href="../../../view/ru/shop/product.php">Москва /</a>
                                    <a href="../../../view/ru/shop/product.php">Кремль</a>
                                </a>
                            </div>
                            <div class="product-price">
                                <span class="price">
                                    <span class="money">1800 руб.</span>
                                </span>
                            </div>
                            <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                        </li>
                    </ul>
                </form>
            </li>
            <!--#конец товара-->
            <!--#начало товара-->
            <li class="element first isotope-item" data-alpha=" " data-price="5000">
                <form action="/cart/add" method="post">
                    <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                            <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                                <span class="hoverBorderWrapper">
                                    <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                                    <span class="hidden-sm hidden-xs">
                                        <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                                </span>
                            </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                            <a class="title-5" href="../../../view/ru/shop/product.php">Футболка Мужская "Поклонная гора"</a>

                            <div class="card-tags">
                                <span>
                                    <i class="fa   fa-tags red"></i>
                                    Теги:
                                </span>
                                <a href="../../../view/ru/shop/product.php">Мужская /</a>
                                <a href="../../../view/ru/shop/product.php">Футболки /</a>
                                <a href="../../../view/ru/shop/product.php">Москва /</a>
                                <a href="../../../view/ru/shop/product.php">Поклонная гора</a>
                            </a>
                        </div>
                        <div class="product-price">
                            <span class="price">
                                <span class="money">1100 руб.</span>
                            </span>
                        </div>
                        <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                    </li>
                </ul>
            </form>
        </li>
        <!--#конец товара-->
        <!--#начало товара-->
        <li class="element first isotope-item" data-alpha=" " data-price="5000">
            <form action="/cart/add" method="post">
                <ul class="row-container list-unstyled clearfix">
                    <li class="row-left">
                        <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                            <span class="hoverBorderWrapper">
                                <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                                <span class="hidden-sm hidden-xs">
                                    <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                            </span>
                        </a>
                    </li>
                    <li class="row-right text-left parent-fly animMix">
                        <a class="title-5" href="../../../view/ru/shop/product.php">Свитшот Мужской "Поклонная гора"</a>

                        <div class="card-tags">
                            <span>
                                <i class="fa   fa-tags red"></i>
                                Теги:
                            </span>
                            <a href="../../../view/ru/shop/product.php">Свитшоты /</a>
                            <a href="../../../view/ru/shop/product.php">Мужские /</a>
                            <a href="../../../view/ru/shop/product.php">
                                Москва
                                                    /
                            </a>
                            <a href="../../../view/ru/shop/product.php">Поклонная гора</a>
                        </a>
                    </div>
                    <div class="product-price">
                        <span class="price">
                            <span class="money">2300 руб.</span>
                        </span>
                    </div>
                    <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
                </li>
            </ul>
        </form>
    </li>
    <!--#конец товара-->
    <!--#начало товара-->
    <li class="element first isotope-item" data-alpha=" " data-price="5000">
        <form action="/cart/add" method="post">
            <ul class="row-container list-unstyled clearfix">
                <li class="row-left">
                    <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                        <span class="hoverBorderWrapper">
                            <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                            <span class="hidden-sm hidden-xs">
                                <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                        </span>
                        <span class="sale_banner">
                            <img class="byye" src="../../../asset/image/new-collection.png" title="Новинка" alt="Новинка"></span>
                    </a>
                </li>
                <li class="row-right text-left parent-fly animMix">
                    <a class="title-5" href="../../../view/ru/shop/product.php">Толстовка без молнии Мужская "Кремль"</a>

                    <div class="card-tags">
                        <span>
                            <i class="fa   fa-tags red"></i>
                            Теги:
                        </span>
                        <a href="../../../view/ru/shop/product.php">Толстовки /</a>
                        <a href="../../../view/ru/shop/product.php">Мужские /</a>
                        <a href="../../../view/ru/shop/product.php">
                            Москва
                                                    /
                        </a>
                        <a href="../../../view/ru/shop/product.php">Кремль /</a>
                        <a href="../../../view/ru/shop/product.php">Новая продукция</a>
                    </a>
                </div>
                <div class="product-price">
                    <span class="price">
                        <span class="money">600 руб.</span>
                    </span>
                </div>
                <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
            </li>
        </ul>
    </form>
</li>
<!--#конец товара-->
<!--#начало товара-->
<li class="element first isotope-item" data-alpha=" " data-price="5000">
    <form action="/cart/add" method="post">
        <ul class="row-container list-unstyled clearfix">
            <li class="row-left">
                <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                    <span class="hoverBorderWrapper">
                        <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                        <span class="hidden-sm hidden-xs">
                            <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                    </span>
                </a>
            </li>
            <li class="row-right text-left parent-fly animMix">
                <a class="title-5" href="../../../view/ru/shop/product.php">
                    Толстовка без молнии Мужская
                                                "Поклонная гора"
                </a>

                <div class="card-tags">
                    <span>
                        <i class="fa   fa-tags red"></i>
                        Теги:
                    </span>
                    <a href="../../../view/ru/shop/product.php">Толстовки без молнии /</a>
                    <a href="../../../view/ru/shop/product.php">Мужская /</a>
                    <a
                                                    href="../../../view/ru/shop/product.php">Москва /</a>
                    <a href="../../../view/ru/shop/product.php">Поклонная гора</a>
                </a>
            </div>
            <div class="product-price">
                <span class="price">
                    <span class="money">1800 руб.</span>
                </span>
            </div>
            <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
        </li>
    </ul>
</form>
</li>
<!--#конец товара-->
<!--#начало товара-->
<li class="element first isotope-item" data-alpha=" " data-price="5000">
<form action="/cart/add" method="post">
    <ul class="row-container list-unstyled clearfix">
        <li class="row-left">
            <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
                <span class="hoverBorderWrapper">
                    <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                    <span class="hidden-sm hidden-xs">
                        <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
                </span>
            </a>
        </li>
        <li class="row-right text-left parent-fly animMix">
            <a class="title-5" href="../../../view/ru/shop/product.php">Футболка Мужская "Третьяковка"</a>

            <div class="card-tags">
                <span>
                    <i class="fa   fa-tags red"></i>
                    Теги:
                </span>
                <a href="../../../view/ru/shop/product.php">Футболки /</a>
                <a href="../../../view/ru/shop/product.php">Мужские /</a>
                <a href="../../../view/ru/shop/product.php">Москва /</a>
                <a href="../../../view/ru/shop/product.php">Третьяковка</a>
            </a>
        </div>
        <div class="product-price">
            <span class="price">
                <span class="money">1300 руб.</span>
            </span>
        </div>
        <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
    </li>
</ul>
</form>
</li>
<!--#конец товара-->
<!--#начало товара-->
<li class="element first isotope-item" data-alpha=" " data-price="5000">
<form action="/cart/add" method="post">
<ul class="row-container list-unstyled clearfix">
    <li class="row-left">
        <a href="../../../view/ru/shop/product.php" class="hoverBorder container_item">
            <span class="hoverBorderWrapper">
                <img src="../../../asset/image/demos/demo_258x310.png" class="image-fly img-responsive front" alt=" ">
                <span class="hidden-sm hidden-xs">
                    <img src="../../../asset/image/card-hover.png" class="rotation back img-responsive" alt=" "></span>
            </span>
        </a>
    </li>
    <li class="row-right text-left parent-fly animMix">
        <a class="title-5" href="../../../view/ru/shop/product.php">Майка Мужская "Кремль"</a>

        <div class="card-tags">
            <span>
                <i class="fa   fa-tags red"></i>
                Теги:
            </span>
            <a href="../../../view/ru/shop/product.php">Майки /</a>
            <a href="../../../view/ru/shop/product.php">Мужские /</a>
            <a href="../../../view/ru/shop/product.php">Москва /</a>
            <a href="../../../view/ru/shop/product.php">Кремль</a>
        </a>
    </div>
    <div class="product-price">
        <span class="price">
            <span class="money">900 руб.</span>
        </span>
    </div>
    <button class="btn select-option" type="button"
                                                    onclick="window.location='../../../view/ru/shop/product.php'">Выбрать</button>
</li>
</ul>
</form>
</li>
<!--#конец товара-->

</ul>
</div>
<div class="pagination clearfix">
<div class="col-md-20">
<ul class="list-inline">
<li class="prev">
<a class="disabled" href="javascript:">Предыдущая</a>
</li>
<li class="active">
<a href="javascript:">1</a>
</li>
<li>
<a href="../../../view/ru/shop/product.php">2</a>
</li>
<li class="next">
<a href="../../../view/ru/shop/product.php">&gt;&gt;</a>
</li>
</ul>
<p class="pagination-num-showing hidden-xs">Товары с 1 по 12 из 17</p>
</div>
</div>

</div>
<!--end #col-main-->

<!--sidebar-->
<div id="prodcoll" class="col-sm-5 col-md-5 sidebar">

    <div class="group_sidebar">
        <div class="sb-wrapper not-animated" data-animate="fadeIn" data-delay="300">
            <div class="sb-title">Сортировка товаров</div>
            <a href="../../../view/ru/shop/product.php">
                <div class="inners">
                    <div class="inners3 fadeIn animated bor-bott" data-animate="fadeIn" data-delay="100"> <i class="fa fa-chevron-right "></i>
                        Футболки
                    </div>
                </div>
            </a>
            <a href="../../../view/ru/shop/product.php">
                <div class="inners">
                    <div class="inners3 fadeIn animated bor-bott" data-animate="fadeIn" data-delay="100"> <i class="fa fa-chevron-right "></i>
                        Толстовки на молнии
                    </div>
                </div>
            </a>
            <a href="../../../view/ru/shop/product.php">
                <div class="inners">
                    <div class="inners3 fadeIn animated bor-bott" data-animate="fadeIn" data-delay="100">
                        <i class="fa fa-chevron-right "></i>
                        Толстовки без молнии
                    </div>
                </div>
            </a>
            <a href="../../../view/ru/shop/product.php">
                <div class="inners">
                    <div class="inners3 fadeIn animated bor-bott" data-animate="fadeIn" data-delay="100">
                        <i class="fa fa-chevron-right "></i>
                        Кепки
                    </div>
                </div>
            </a>
            <a href="../../../view/ru/shop/product.php">
                <div class="inners">
                    <div class="inners3 fadeIn animated bor-bott" data-animate="fadeIn" data-delay="100">
                        <i class="fa fa-chevron-right "></i>
                        Майки
                    </div>
                </div>
            </a>
            <a href="../../../view/ru/shop/product.php">
                <div class="inners">
                    <div class="inners3 fadeIn animated bor-bott" data-animate="fadeIn" data-delay="100">
                        <i class="fa fa-chevron-right "></i>
                        Свитшоты
                    </div>
                </div>
            </a>
        </div>

    </div>

<div class="group_sidebar">
    <div class="sb-wrapper not-animated" data-animate="fadeIn" data-delay="300">
        <div class="sb-title">Продукция на заказ</div>
        <a href="../../../view/ru/shop/product.php">
            <img class="imeger" src="../../../content/im-zakaz.png" alt=" "></a>
        <ul class="list-unstyled sb-content textwidget list-styled">
            <li>
                <p>
                    У нас вы также можете заказать
                    <a href="./contact-us.php" class="red upper">нестандартные решения</a>
                    наших
                                        продуктов - подобрать другой
                                        принт, выбрать любой цвет,
                                        нанести инициалы и
                                        уникальные надписи.
                                        Хотите уникальное решение?
                                        Посетиетите категорию:
                    <a href="./contact-us.php"
                                                                  class="red upper">ЭКСКЛЮЗИВ</a>

                </p>
            </li>
        </ul>
    </div>
  </div>
</div>
<!--end sidebar-->


        </div>
    </div>
</div>

<?php include ("../../../footer.php") ?>
<script src="../../../asset/javascript/jquery.isotope.min.js" type="text/javascript"></script>

<!--end #sandBox-wrapper-->
<script type="text/javascript">

    $(document).ready(function () {
        "use strict";

        if ($.browser.msie && $.browser.version == 7) {
            $(window).load(function () {
                var $container = $('#sandBox');

                $container.isotope({
                    itemSelector: '.element',
                    layoutMode: 'fitRows',
                    getSortData: {
                        name: function ($elem) {
                            return $elem.attr('data-alpha');
                        },
                        price: function ($elem) {
                            return $elem.attr('data-price');
                        }
                    }
                });


                var $optionSets = $('#options .option-set'),
                    $optionLinks = $optionSets.find('li');

                $optionLinks.click(function () {
                    var $this = $(this);
                    // don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }

                    var $direction = $(this).attr('data-order');
                    var key1 = 'sortAscending',
                        value1 = true;
                    switch ($direction) {
                        case 'asc':
                            value1 = true;
                            break;

                        case 'desc':
                            value1 = false;
                            break;
                    }

                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                        key = $optionSet.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[key] = value;
                    options[key1] = value1;
                    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                        // changes in layout modes need extra logic
                        changeLayoutMode($this, options)
                    } else {
                        // otherwise, apply new options
                        $container.isotope(options);
                    }

                    return false;
                });
            });
        }
        else {
            $(window).load(function () {
                var $container = $('#sandBox');

                $container.isotope({
                    itemSelector: '.element',
                    layoutMode: 'fitRows',
                    getSortData: {
                        name: function ($elem) {
                            return $elem.attr('data-alpha');
                        },
                        price: function ($elem) {
                            return $elem.attr('data-price');
                        }
                    }
                });


                var $optionSets = $('#options .option-set'),
                    $optionLinks = $optionSets.find('li');

                $optionLinks.click(function () {
                    var $this = $(this);
                    // don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }

                    var $direction = $(this).attr('data-order');
                    var key1 = 'sortAscending',
                        value1 = true;
                    switch ($direction) {
                        case 'asc':
                            value1 = true;
                            break;

                        case 'desc':
                            value1 = false;
                            break;
                    }

                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                        key = $optionSet.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[key] = value;
                    options[key1] = value1;
                    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                        // changes in layout modes need extra logic
                        changeLayoutMode($this, options)
                    } else {
                        // otherwise, apply new options
                        $container.isotope(options);
                    }

                    return false;
                });
            });
        }
    });
</script>
</body>
</html>