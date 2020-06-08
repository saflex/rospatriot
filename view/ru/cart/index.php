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
                    <a href="../../../view/ru/main" class="homepage-link">Главная</a>
                    <i class="fa fa-angle-right"></i>
                    <span class="page-title">Корзина</span>
                </div>
            </div>
            <section class="row content">
                <div id="col-main" class="col-md-20 cart-page content">
                  <div class="col-md-20 cart-page content">
                    <div id="page-header">
                        <a href="#">
                            <div class="page-titles">Корзина</div>
                        </a>
                        <a href="../../../view/ru/cart/delivery.php">
                            <div class="page-titles2">Оформление</div>
                        </a>

                        <div class="page-titles3" title="Сначала оформите заказ">Подтверждение</div>
                    </div>
                    <form action="/cart/delivery" method="post" id="cartform" class="clearfix">
                        <div class="row table-cart">
                            <div class="wrap-table">
                                <table class="cart-items haft-border">
                                    <colgroup>
                                        <col class="checkout-image">
                                        <col class="checkout-цена">
                                        <col class="checkout-кол-во">
                                        <col class="checkout-totals">
                                        <col class="checkout-delete">
                                    </colgroup>
                                    <thead>
                                    <tr class="top-labels">
                                        <th class="text-left">Название товара</th>
                                        <th>цена</th>
                                        <th>кол-во</th>
                                        <th>цвет</th>
                                        <th>размер</th>
                                        <th>удалить</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="item">
                                        <td class="title text-left">
                                            <ul class="list-inline">
                                                <li class="image">
                                                    <a href="../../../view/ru/shop/product.php">
                                                        <img src="../../../asset/image/demos/demo_83x94.png"
                                                             alt="">
                                                    </a>
                                                </li>
                                                <li class="link">
                                                    <a href="../../../view/ru/shop/product.php">
                                                        <span class="title-5">Толстовка мужская "Кремль"</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="title-1"><span class="money">2500 руб.</span></td>
                                        <td>
                                            <input class="form-control input-1" type="number" id="updates_573165749"
                                                   name="updates[]" value="1">
                                        </td>
                                        <td class="title-1"><span class="money">Серый</span></td>
                                        <td class="total title-1"><span class="money">S (44-46)</span></td>
                                        <td class="action">
                                            <button class="btooltip" type="button" onclick="window.location='#'"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="удалить"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="item pellentes-sagittis-sodales-accum-etiam-lobortis-purus-dictum">
                                        <td class="title text-left">
                                            <ul class="list-inline">
                                                <li class="image">
                                                    <a href="../../../view/ru/shop/product.php">
                                                        <img src="../../../asset/image/demos/demo_83x94.png"
                                                             alt="">
                                                    </a>
                                                </li>
                                                <li class="link">
                                                    <a href="../../../view/ru/shop/product.php">
                                                        <span class="title-5">Футболка мужская "Питер"</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="title-1"><span class="money">2500 руб.</span></td>
                                        <td>
                                            <input class="form-control input-1" type="number" id="updates_573162053"
                                                   name="updates[]" value="1">
                                        </td>
                                        <td class="total title-1"><span class="money">Белый</span></td>
                                        <td class="total title-1"><span class="money">S (44-46)</span></td>
                                        <td class="action">
                                            <button class="btooltip" type="button" onclick="window.location='#'"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="удалить"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr class="bottom-summary">
                                        <td>
                                            <div class="cupon-div cupon-text">Код купона или промо-слово:</div>
                                            <div class="cupon-div"><input class="form-control input-1"></div>
                                            <button type="submit" id="update-cart" class="btn cupon-button" name="update">Применить
                                                код
                                            </button>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td class="update-quantities"><span class="blue size-money">ИТОГО:</span>
                                        </td>
                                        <td class="subtotal title-1"><span class="money size-money">5000 руб. </span>
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div id="checkout-proceed" class="last1 text-right">
                         	   <p class="p-no-dost">Стоимость указана без учета доставки</p>
                                <button class="btn large" type="submit" name="checkout"><a href="../../../view/ru/cart/delivery.php">Оформить
                                        заказ</a></button>
                            </div>
                        </div>

                    </form>
                  </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php include ("../../../footer.php") ?>
</body>
</html>
