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

<body class="template" itemscope itemtype="http://schema.org/WebPage">
        <?php include ("../../../header.php") ?>
        <div id="content-wrapper-parent">
            <div id="content-wrapper">
                <div id="content" class="container clearfix">
                    <div id="breadcrumb" class="row breadcrumb">
                        <div class="" itemprop="breadcrumb">
                            <a href="../../../view/ru/main" class="homepage-link">Главная</a> <i class="fa fa-angle-right"></i>
                            <a href="../../../view/ru/cart/" class="homepage-link">Корзина</a> <i class="fa fa-angle-right"></i>
                            <span class="page-title">Оформление</span>
                        </div>
                    </div>
                    <section class="row content">
                        <div id="col-main" class="col-md-20 cart-page content">
                            <div class="col-md-10">
                                <div id="page-header">
                                    <a href="index">
                                        <div class="page-titles2">Корзина</div>
                                    </a>
                                    <a href="#">
                                        <div class="page-titles">Оформление</div>
                                    </a>

                                    <div class="page-titles3" title="Сначала оформите заказ">Подтверждение</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix row">
                                    <div id="add_address" class="customer_address edit_address col-md-20">
                                        <form accept-charset="UTF-8" action="../../../view/ru/cart/success.php" id="address_form_new" method="post">
                                            <input name="form_type" type="hidden" value="customer_address">
                                            <input name="utf8"
                                                                                                      type="hidden"
                                                                                                      value="✓">
                                            <ul class="row list-unstyled customer_address_table">
                                                <li class="col-md-20">
                                                    <label class="control-label" for="address_first_name_new">
                                                        Имя
                                                        <i
                                                class="fa fa-asterisk red sizeqs"></i>
                                                    </label>
                                                    <input type="text" id="address_first_name_new" class="form-control"
                                               name="address[first_name]" value=""></li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20">
                                                    <label class="control-label" for="address_last_name_new">Фамилия</label>
                                                    <input type="text" id="address_last_name_new" class="form-control"
                                               name="address[last_name]" value=""></li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20">
                                                    <label class="control-label" for="address_phone_new">
                                                        Телефон
                                                        <i
                                                class="fa fa-asterisk red sizeqs"></i>
                                                    </label>
                                                    <input type="text" id="address_phone_new" class="form-control"
                                               name="address[phone]" value=""></li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20">
                                                    <label class="control-label" for="address_phone_new">
                                                        Email
                                                        <i
                                                class="fa fa-asterisk red sizeqs"></i>
                                                    </label>
                                                    <input type="text" id="address_phone_new" class="form-control"
                                               name="address[phone]" value=""></li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20">
                                                    <label class="control-label" for="address_country_new">
                                                        Регион
                                                        <i
                                                class="fa fa-asterisk red sizeqs"></i>
                                                    </label>
                                                    <select id="address_country_new" class="form-control" name="address[country]"
                                                data-default="">
                                                        <option value="" data-provinces="[]">-- Выбрать --</option>
                                                    </select>
                                                </li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20">
                                                    <label class="control-label" for="address_address1_new">Адрес</label>
                                                    <input type="text" id="address_address1_new" class="form-control"
                                               name="address[address1]" value=""></li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20 set_default">
                                                    <p class="bolsp blue">
                                                        Выберите способ получения
                                            товара
                                                    </p>
                                                    <input type="radio" id="address_default_address_new" name="address[default]"
                                               value="1"> Курьерская доставка</li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20 set_default">
                                                    <input type="radio" id="address_default_address_new" name="address[default]"
                                               value="1"> Самовывоз</li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20 set_default">
                                                    <input type="radio" id="address_default_address_new" name="address[default]"
                                               value="1"> Почта России</li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20 set_default">
                                                    <p class="bolsp blue">Выберите способ оплаты</p>
                                                    <input type="radio" id="address_default_address_new" name="address[default]"
                                               value="1"> Расчет наличными</li>
                                                <li class="clearfix"></li>
                                                <li class="col-md-20 set_default">
                                                    <input type="radio" id="address_default_address_new" name="address[default]"
                                               value="1"> Безналичный расчет</li>
                                            </ul>

                                            <p class="bolsp blue ">
                                                Окончательная стоимость заказа:
                                                <span
                                        class="red">2500 руб.</span>
                                            </p>

                                            <div class="clearfix">
                                                <div id="checkout-proceed" class="last1">
                                                    <button class="btn large" type="submit" name="checkout">Продолжить</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="banner quick_shop pointy-adm" data-href="../../../asset/ajax/_oferta-popup.html"
                 data-target="#quick-shop-modal" data-toggle="modal">
                                    <a class="size-admin goAction btooltip active red upper" href="#" data-original-title="Нажмите, чтобы открыть договор и ознакомиться с ним">Открыть договор оферту</a>
                                </div>

                                <div class="ttxe">
                                    <h4>Условия оплаты и доставки</h4>
                                    <h5>1. КУРЬЕРСКАЯ ДОСТАВКА ПО МОСКВЕ И РЕГИОНАМ</h5>
                                    <p dir="ltr">
                                        Курьерская доставка товара из нашего интернет-магазина по Москве (в пределах МКАД) 250руб.
                                    </p>
                                    <p dir="ltr">
                                        Доставка товара по Москве (в пределах МКАД) осуществляется по будням с 9.00 до 19.00 (за исключением 1 января, выходных и праздников) на следующий день
    после оформления заказа, если заказ был оформлен до 14.00 мск текущего дня.
                                    </p>
                                    <p dir="ltr">
                                        Если заказ был оформлен после 14.00 мск текущего дня, курьерская доставка будет осуществлена через один рабочий день после даты оформления заказа.
                                    </p>
                                    <h5>2. ПУНКТЫ САМОВЫЗА В МОСКВЕ</h5>
                                    <p dir="ltr">
                                        В Москве Вы можете забрать заказ из пункта самовывоза:
    - ул. Намёткина, д. 1, подъезд 7. Перед тем как подъехать 
звоните заранее по тел. 8 (495) 642-25-16
                                    </p>
                                    <p dir="ltr">
                                        Если заказ был оформлен после 14.00 мск текущего дня, забрать свой заказ можно будет через один рабочий день после даты оформления заказа.
                                    </p>
                                    <h5>3. ПОЧТОВАЯ ДОСТАВКА ПО РЕГИОНАМ РОССИИ</h5>
                                </p>
                                <p dir="ltr">
                                    Доставка товаров из нашего интернет-магазина по всем регионам России (за исключением городов: Санкт-Петербурга и Москвы (в пределах МКАД)) возможна Почтой
    России.
                                </p>
                                <p dir="ltr">
                                    Стоимость почтовой доставки* товаров (общий вес заказа до 1 кг) – 250 рублей.
                                </p>
                                <p dir="ltr">
                                    ВАЖНО! В случае, если общий вес Вашего заказа превышает 1 кг, стоимость почтовой доставки заказа общим весом свыше 1 кг до 2 кг будет равна 350 рублям!
                                </p>
                                <p dir="ltr">
                                    За каждый последующий килограмм свыше 2 кг - доплата к почтовой доставке за пересылку дополнительного веса - 130 рублей.
                                </p>
                                <p dir="ltr">
                                    Отправка заказа почтой России из интернет-магазина осуществляется на следующий рабочий день после формирования заказа.
                                </p>
                                <p dir="ltr">
                                    Сроки почтовой пересылки оговариваются Почтой России, которые Вы также сможете уточнить у оператора нашего call-центра.
                                </p>
                                <p dir="ltr">
                                    *Стоимость почтовой доставки товара складывается из почтового отправления товара заказной бандеролью весом до 2 кг (упаковка товара в материалы почты
    России, отправка и отслеживание заказа) и стоимости почтовой пересылки (почтовый тариф за доставку в Ваш город с НДС) и не требует дополнительных оплат при
    получении заказа в отделении почты. Почтовая доставка оплачивается вместе со стоимостью товара только по безналичному расчёту в интернет-магазине.
                                </p>
                                <h5>4. ОПЛАТА ТОВАРА</h5>
                            </p>
                            <p dir="ltr">
                                В нашем интернет-магазине Вы можете оплатить заказ по безналичному расчету. Мы работаем с платежным агрегатором ROBOKASSA и его способами безналичной
    оплаты.
                            </p>
                            <p dir="ltr">
                                Оплата заказа при его почтовой доставке возможна только по безналичному расчету.
                            </p>
                            <p dir="ltr">
                                Жители Москвы также могут оплатить стоимость товара наличными средствами курьеру при получении заказа. Или в пунктах самовывоза (ул. Намёткина, д. 1, подъезд 7).
                            </p>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="modal fade" id="quick-shop-modal"></div>
<?php include ("../../../footer.php") ?>
</body>
</html>