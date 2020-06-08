<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
            <span class="page-title">Мой аккаунт</span>
          </div>
        </div>
        <section class="row content">
          <div id="col-main" class="account-page col-sm-15 col-md-15 clearfix">
            <h1 id="page-title" class="unmargin-top">Мой аккаунт</h1>
            <div id="customer_orders">
              <h4>История заказов</h4>
              <div class="row wrap-table">
                <table class="table-hover">
                  <thead>
                    <tr>
                      <th class="order_number">Заказ</th>
                      <th class="date">Дата</th>
                      <th class="payment_status">Статус оплаты</th>
                      <th class="fulfillment_status">Состояние</th>
                      <th class="total">Итого</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td><a href="./account.php" title="">#1031</a></td>
                      <td><span class="note">24 Февр. 2015</span></td>
                      <td><span class="status_authorized">неоплачен</span></td>
                      <td><span class="status_unfulfilled">невыполнен</span></td>
                      <td><span class="total"><span class="money" data-currency-eur="€120.00" data-currency-usd="$164.68" data-currency="USD">4800 руб.</span></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-5 sidebar">
            <div class="group_sidebar mobi-marg">
              <div class="row sb-wrapper unpadding-top">
                <div class="sb-title">Детали аккаунта</div>
                <ul id="customer_detail" class="list-unstyled sb-content">
                  <li>
                    <address class="clearfix">
                      <div class="info">
                        <i class="fa fa-user"></i>
                        <span class="address-group">
                          <span class="author">Алексей Иванов</span>
                          <span class="email">alex-ivanov@mail.ru</span>
                        </span>
                      </div>
                      <div class="address">
                        <i class="fa fa-home"></i>
                        <span class="address-group">
                          <span class="address1">ул. Полбина, дом 12, корп. 3, кв. 143, Москва<span class="phone-number">8 (495) 111-11-11</span> </span>
                        </span>
                      </div>
                    </address>
                  </li>
                  <li class="bt">
                    <button class="btn" id="view_address" onclick="window.location='./address.php'">Посмотреть адрес</button>
                  </li>
                </ul>
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
