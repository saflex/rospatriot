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
        <link rel="stylesheet" type="text/css" href="../../../asset/stylesheet/tabs.css"/>
        <link rel="stylesheet" type="text/css" href="../../../asset/stylesheet/tabstyles.css"/>
        <link rel="stylesheet" type="text/css" href="../../../asset/stylesheet/admin.style.css"/>
</head>

<body class="template" itemscope itemtype="http://schema.org/WebPage">
        <?php include ("../../../header.php") ?>
        <div id="content-wrapper-parent">
            <div id="content-wrapper">
                <div id="content" class="container clearfix">
                    <div id="breadcrumb" class="row breadcrumb">
                        <div class="" itemprop="breadcrumb">
                            <a href="../../../view/ru/main" class="homepage-link">Главная</a> <i class="fa fa-angle-right"></i>
                            <span class="page-title">Админ-панель</span>
                        </div>
                        <section class="row content">
                            <h3 class="smal-adm">
                                Разрешение рабочей области дисплея слишком низкое. Редактирование товаров не поддерживается.
                            </h3>
                            <!--#col-main-->
                            <div id="col-main" class="product-page col-content col-sm-20 col-md-20 adm-otst hidden-sm hidden-xs">
                                <div class="description" itemprop="description">
                                    <section>
                                        <div class="tabs tabs-style-flip">
                                            <nav>
                                                <ul>
                                                    <li>
                                                        <a href="#section-flip-5" class="">
                                                            <span>магазин по регионам</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-flip-4" class="">
                                                            <span>общий магазин</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="content-wrap">
                                                <section id="section-flip-1">
                                                    <div class="col-md-5">
                                                        <h2>Регион</h2>
                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-add-region.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                            <button class="btn select-option goAction btooltip active" data-original-title="Добавить новый регион" type="button"> <i class="fa fa-plus sizz"></i>
                                                                Добавить регион
                                                            </button>
                                                        </div>
                                                        <ul class="list-unstyled sb-content list-styled">
                                                            <li>

                                                                <i class="fa fa-pencil size-admin hover-admin blue goAction btooltip active quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-category.html"
                 data-target="#quick-shop-modal" data-toggle="modal" data-original-title="Изменить"></i>
                                                                <span class="quick_shop pointy-adm" data-href="../../../asset/ajax/_delete.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                    <i class="fa fa-times size-admin hover-admin blue goAction btooltip active" data-original-title="Удалить"></i>
                                                                </span>
                                                                <a class="size-admin blue goAction btooltip active" data-original-title="Имя региона">Москва</a> <i class="fa fa-arrows sizz abs-fl-adm2 blue goAction btooltip active" data-original-title="Переместить выше или ниже"></i>
                                                            </li>
                                                            <li>

                                                                <i class="fa fa-pencil size-admin hover-admin blue goAction btooltip active quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-category.html"
                 data-target="#quick-shop-modal" data-toggle="modal" data-original-title="Изменить"></i>
                                                                <span class="quick_shop pointy-adm" data-href="../../../asset/ajax/_delete.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                    <i class="fa fa-times size-admin hover-admin blue goAction btooltip active" data-original-title="Удалить"></i>
                                                                </span>
                                                                <a class="size-admin blue goAction btooltip active" data-original-title="Имя региона">Санкт-Петербург</a> <i class="fa fa-arrows sizz abs-fl-adm2 blue goAction btooltip active" data-original-title="Переместить выше или ниже"></i>
                                                            </li>
                                                            <li>

                                                                <i class="fa fa-pencil size-admin hover-admin blue goAction btooltip active quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-category.html"
                 data-target="#quick-shop-modal" data-toggle="modal" data-original-title="Изменить"></i>
                                                                <span class="quick_shop pointy-adm" data-href="../../../asset/ajax/_delete.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                    <i class="fa fa-times size-admin hover-admin blue goAction btooltip active" data-original-title="Удалить"></i>
                                                                </span>
                                                                <a class="size-admin blue goAction btooltip active" data-original-title="Имя региона">Ульяновск</a> <i class="fa fa-arrows sizz abs-fl-adm2 blue goAction btooltip active" data-original-title="Переместить выше или ниже"></i>
                                                            </li>
                                                        </ul>
                                                        <h2>Теги</h2>
                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-tags.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                            <button class="btn select-option goAction btooltip active" data-original-title="Изменение, добавление и удаление тегов" type="button">Редактор тегов для регионов</button>
                                                        </div>

                                                        <h2>Цвета</h2>
                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-color.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                            <button class="btn select-option goAction btooltip active" data-original-title="Изменение, добавление и удаление цветов" type="button">Открыть редактор цветов</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-15">
                                                        <div class="col-md-15">
                                                            <div class="" itemprop="breadcrumb">
                                                                <a href="#" class="blue">Санкт-Петербург</a>
                                                                <i class="fa fa-angle-right blue"></i>
                                                                <span class="blue">Мужская одежда</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="header-search">
                                                                <form class="search-form" action="./index.php" method="get">
                                                                    <input type="text" class="admin-s" name="q" value="" accesskey="4" autocomplete="off" placeholder="Поиск товара">
                                                                    <i class="fa fa-search abs-adm"></i>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-20 border-adm-all adm-otst">
                                                            <div id="options" class="container-nav clearfix top-admin">
                                                                <ul class="list-inline text-left">
                                                                    <li class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Выбрать все">
                                                                        <div>
                                                                            <button id="sortButton" class="btn-6">
                                                                                <span class="name">
                                                                                    <input type="checkbox"/>
                                                                                </span>
                                                                                <i class="fa fa-caret-down"></i>
                                                                            </button>
                                                                            <i class="sub-dropdown1"></i>
                                                                            <i class="sub-dropdown"></i>
                                                                        </div>
                                                                    </li>
                                                                    <li class="grid_list">
                                                                        <ul class="unstyled unmargin-bottom option-set hidden-sm hidden-xs" data-option-key="layoutMode">
                                                                            <li data-option-value="fitRows" id="goGrid" class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Сдвинуть выбранные товары наверх (изменение повлияет на сортировку товара в этой категории)">
                                                                                <i class="fa fa-chevron-up"></i>
                                                                            </li>
                                                                            <li data-option-value="straightDown" id="goList" class="goAction btooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Сдвинуть выбранные товары вниз (изменение повлияет на сортировку товара в этой категории)">
                                                                                <i class="fa fa-chevron-down"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn select-option goAction btooltip active" data-original-title="Чтобы дублировать, выберите один товар и установите галочку" type="button">
                                                                            Дубликат
                                                                            <i class="fa fa-reply-all sizz"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn select-option goAction btooltip active" data-original-title="Чтобы удалить выберите, как минимум 1 товар и установите галочку" type="button">
                                                                            <i class="fa fa-times sizz"></i>
                                                                            Удалить
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn select-option goAction btooltip active" data-original-title="Добавить новый товар" type="button">
                                                                            <i class="fa fa-plus sizz"></i>
                                                                            Добавить товар
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-20 over-adm">
                                                                <div class="col-md-20 scroll-adm">
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Толстовка без молнии мужская "Питер"</li>
                                                                                <li class="flr-adm">
                                                                                    2300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Футболка мужская "Эрмитаж"</li>
                                                                                <li class="flr-adm">
                                                                                    1300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Толстовка без молнии мужская "Питер"</li>
                                                                                <li class="flr-adm">
                                                                                    2300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Футболка мужская "Эрмитаж"</li>
                                                                                <li class="flr-adm">
                                                                                    1300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Толстовка без молнии мужская "Питер"</li>
                                                                                <li class="flr-adm">
                                                                                    2300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Футболка мужская "Эрмитаж"</li>
                                                                                <li class="flr-adm">
                                                                                    1300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Толстовка без молнии мужская "Питер"</li>
                                                                                <li class="flr-adm">
                                                                                    2300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Футболка мужская "Эрмитаж"</li>
                                                                                <li class="flr-adm">
                                                                                    1300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Свитшот мужской "Питер"</li>
                                                                                <li class="flr-adm">
                                                                                    1700 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Толстовка на молнии мужская "Петр 1"</li>
                                                                                <li class="flr-adm">
                                                                                    2200 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Майка мужская "Эрмитаж"</li>
                                                                                <li class="flr-adm">
                                                                                    800 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end --> </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </section>
                                                <section id="section-flip-2">
                                                    <div class="col-md-5">
                                                        <h2>Коллекции <br>(общие товары)</h2>
                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-add-region.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                            <button class="btn select-option goAction btooltip active" data-original-title="Добавить новую коллекцию" type="button">
                                                                <i class="fa fa-plus sizz"></i>
                                                                Добавить коллекцию
                                                            </button>
                                                        </div>
                                                              <ul class="list-unstyled sb-content list-styled">
                                                            <li>

                                                                <i class="fa fa-pencil size-admin hover-admin blue goAction btooltip active quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-category2.html"
                 data-target="#quick-shop-modal" data-toggle="modal" data-original-title="Изменить"></i>
                                                                <span class="quick_shop pointy-adm" data-href="../../../asset/ajax/_delete.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                    <i class="fa fa-times size-admin hover-admin blue goAction btooltip active" data-original-title="Удалить"></i>
                                                                </span>
                                                                <a class="size-admin blue goAction btooltip active" data-original-title="Имя региона">Молодежная коллекция</a> <i class="fa fa-arrows sizz abs-fl-adm2 blue goAction btooltip active" data-original-title="Переместить выше или ниже"></i>
                                                            </li>
                                                            <li>

                                                                <i class="fa fa-pencil size-admin hover-admin blue goAction btooltip active quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-category2.html"
                 data-target="#quick-shop-modal" data-toggle="modal" data-original-title="Изменить"></i>
                                                                <span class="quick_shop pointy-adm" data-href="../../../asset/ajax/_delete.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                    <i class="fa fa-times size-admin hover-admin blue goAction btooltip active" data-original-title="Удалить"></i>
                                                                </span>
                                                                <a class="size-admin blue goAction btooltip active" data-original-title="Имя региона">9 мая</a> <i class="fa fa-arrows sizz abs-fl-adm2 blue goAction btooltip active" data-original-title="Переместить выше или ниже"></i>
                                                            </li>
                                                            <li>

                                                                <i class="fa fa-pencil size-admin hover-admin blue goAction btooltip active quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-category2.html"
                 data-target="#quick-shop-modal" data-toggle="modal" data-original-title="Изменить"></i>
                                                                <span class="quick_shop pointy-adm" data-href="../../../asset/ajax/_delete.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                    <i class="fa fa-times size-admin hover-admin blue goAction btooltip active" data-original-title="Удалить"></i>
                                                                </span>
                                                                <a class="size-admin blue goAction btooltip active" data-original-title="Имя региона">День космонавтики</a> <i class="fa fa-arrows sizz abs-fl-adm2 blue goAction btooltip active" data-original-title="Переместить выше или ниже"></i>
                                                            </li>
                                                        </ul>
                                                        <h2>Теги</h2>
                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-tags.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                            <button class="btn select-option goAction btooltip active" data-original-title="Изменение, добавление и удаление тегов" type="button">Редактор тегов для коллекций</button>
                                                        </div>
                                                        <h2>Цвета</h2>
                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-color.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                            <button class="btn select-option goAction btooltip active" data-original-title="Изменение, добавление и удаление цветов" type="button">Редактор цветов</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-15">
                                                        <div class="col-md-15">
                                                            <div class="" itemprop="breadcrumb">
                                                                <a href="#" class="blue">9 Мая</a>
                                                                <i class="fa fa-angle-right blue"></i>
                                                                <span class="blue">Мужская одежда</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="header-search">
                                                                <form class="search-form" action="./index.php" method="get">
                                                                    <input type="text" class="admin-s" name="q" value="" accesskey="4" autocomplete="off" placeholder="Поиск товара">
                                                                    <i class="fa fa-search abs-adm"></i>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-20 border-adm-all adm-otst">
                                                            <div id="options" class="container-nav clearfix top-admin">
                                                                <ul class="list-inline text-left">
                                                                    <li class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Выбрать все">
                                                                        <div>
                                                                            <button id="sortButton" class="btn-6">
                                                                                <span class="name">
                                                                                    <input type="checkbox"/>
                                                                                </span>
                                                                                <i class="fa fa-caret-down"></i>
                                                                            </button>
                                                                            <i class="sub-dropdown1"></i>
                                                                            <i class="sub-dropdown"></i>
                                                                        </div>
                                                                    </li>
                                                                    <li class="grid_list">
                                                                        <ul class="unstyled unmargin-bottom option-set hidden-sm hidden-xs" data-option-key="layoutMode">
                                                                            <li data-option-value="fitRows" id="goGrid" class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Сдвинуть выбранные товары наверх (изменение повлияет на сортировку товара в этой категории)">
                                                                                <i class="fa fa-chevron-up"></i>
                                                                            </li>
                                                                            <li data-option-value="straightDown" id="goList" class="goAction btooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Сдвинуть выбранные товары вниз (изменение повлияет на сортировку товара в этой категории)">
                                                                                <i class="fa fa-chevron-down"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn select-option goAction btooltip active" data-original-title="Чтобы дублировать, выберите один товар и установите галочку" type="button">
                                                                            Дубликат
                                                                            <i class="fa fa-reply-all sizz"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn select-option goAction btooltip active" data-original-title="Чтобы удалить выберите, как минимум 1 товар и установите галочку" type="button">
                                                                            <i class="fa fa-times sizz"></i>
                                                                            Удалить
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn select-option goAction btooltip active" data-original-title="Добавить новый товар" type="button">
                                                                            <i class="fa fa-plus sizz"></i>
                                                                            Добавить товар
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-20 over-adm">
                                                                <div class="col-md-20 scroll-adm">
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup2.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Толстовка без молнии мужская "Ветераны"</li>
                                                                                <li class="flr-adm">
                                                                                    2300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup2.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Футболка мужская "Спасибо деду за победу!"</li>
                                                                                <li class="flr-adm">
                                                                                    1300 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup2.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Свитшот мужской "Ветераны"</li>
                                                                                <li class="flr-adm">
                                                                                    1700 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup2.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Толстовка на молнии мужская "Ветераны"</li>
                                                                                <li class="flr-adm">
                                                                                    2200 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end -->
                                                                    <!-- product start -->
                                                                    <div draggable="true" class="col-md-20 border-adm-catalog">
                                                                        <ul class="list-inline text-left fl-left-adm">
                                                                            <li class="goAction btooltip active" data-original-title="Выбрать">
                                                                                <input type="checkbox"/>
                                                                            </li>
                                                                            <i class="fa fa-arrows sizz abs-fl-adm goAction btooltip active" data-original-title="Перемест."></i>
                                                                        </ul>
                                                                        <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_admin-popup2.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                                                            <ul class="list-inline text-left">
                                                                                <li class="image topper-adm">
                                                                                    <a href="/shop/product">
                                                                                        <img src="../../../asset/image/demos/demo_83x94.png" alt=""></a>
                                                                                </li>

                                                                                <li>Майка мужская "Спасибо деду за победу!"</li>
                                                                                <li class="flr-adm">
                                                                                    800 руб.
                                                                                    <i class="fa fa-chevron-right"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- product end --> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            <section class="rel-container clearfix">
                                <div class="botty"></div>
                            </section>
                        </div>
                        <!--end #col-main--> </section>
                </div>
            </div>
        </div>
        <?php include ("../../../footer.php") ?>
        <div class="modal fade" id="quick-shop-modal"></div>
        <script src="../../../asset/javascript/cbpFWTabs.js"></script>
        <script>
    (function () {

        [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
            new CBPFWTabs(el);
        });

    })();
</script>
        <script src="../../../asset/javascript/modernizr.custom.js"></script>
        <script src="../../../asset/javascript/jquery.scrollUp.js" type="text/javascript"></script>
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
                    scrollText: 'Наверх',
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
                    scrollText: 'Наверх',
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
                    scrollText: 'Наверх',
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