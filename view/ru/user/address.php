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
            <a href="../../../view/ru/main" class="homepage-link" title="Главная">Главнвя</a>
            <i class="fa fa-angle-right"></i>
            <span class="page-title">Адрес</span>
          </div>
        </div>
        <section class="row content">
          <div id="col-main" class="col-md-20 address-page manage-address clearfix">
            <h1 id="page-title">Управление адресом</h1>
            <button id="new-address" class="btn" onclick="HTML.CustomerAddress.toggleNewForm();return false">Добавить новый адрес</button>
            <div class="clearfix row">
              <div id="add_address" class="customer_address edit_address col-md-10" style="display:none">
                <form accept-charset="UTF-8" action="./address.php" id="address_form_new" method="post"><input name="form_type" type="hidden" value="customer_address"><input name="utf8" type="hidden" value="✓">
                  <ul class="row list-unstyled customer_address_table">
                    <li class="col-md-20">
                      <label class="control-label" for="address_first_name_new">Имя <i class="fa fa-asterisk red sizeq"></i></label>
                      <input type="text" id="address_first_name_new" class="form-control" name="address[first_name]" value="">
                    </li>
                    <li class="clearfix"></li>
                    <li class="col-md-20">
                      <label class="control-label" for="address_last_name_new">Фамилия</label>
                      <input type="text" id="address_last_name_new" class="form-control" name="address[last_name]" value="">
                    </li>
                    <li class="clearfix"></li>
                    <li class="col-md-20">
                      <label class="control-label" for="address_address1_new">Адрес <i class="fa fa-asterisk red sizeq"></i></label>
                      <input type="text" id="address_address1_new" class="form-control" name="address[address1]" value="">
                    </li>
                    <li class="clearfix"></li>
                    <li class="col-md-10">
                      <label class="control-label" for="address_country_new">Регион <i class="fa fa-asterisk red sizeq"></i></label>
                      <select id="address_country_new" class="form-control" name="address[country]" data-default="">
                        <option value="" data-provinces="[]">-- Выбрать --</option>
                      </select>
                    </li>
                    <li class="clearfix"></li>
                    <li class="col-md-10">
                      <label class="control-label" for="address_zip_new">Индекс</label>
                      <input type="text" id="address_zip_new" class="form-control" name="address[zip]" value="">
                    </li>
                    <li class="clearfix"></li>
                    <li class="col-md-10">
                      <label class="control-label" for="address_phone_new">Телефон <i class="fa fa-asterisk red sizeq"></i></label>
                      <input type="text" id="address_phone_new" class="form-control" name="address[phone]" value="">
                    </li>
                    <li class="clearfix"></li>
                    <li class="col-md-10 set_default">
                      <input type="checkbox" id="address_default_address_new" name="address[default]" value="1"> Установить, как адрес по умолчанию?
                    </li>
                  </ul>
                  <div class="last clearfix">
                    <button class="btn mright-7" type="submit">Добавить адрес</button>
                    <button class="btn" type="button" onclick="HTML.CustomerAddress.toggleNewForm();return false">Отмена</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="clearfix">
              <div id="address_tables">
                <div class="row">
                  <div class="col-md-10 first">
                    <div id="parent_address_268408829" class="address_table col-md-20 col-sm-20">
                      <div id="view_address_268408829" class="customer_address view_address">
                        <div class="address_info col-md-15 col-sm-15">
                          <address class="clearfix">
                            <div class="info">
                              <i class="fa fa-user"></i>
                              <span class="address-group">
                                <span class="author">Алексей Иванов</span>
                                <span class="email">Адрес по умолчанию</span>
                              </span>
                            </div>
                            <div class="address">
                              <i class="fa fa-home"></i>
                              <span class="address-group">
                                <span class="address1">ул. Полбина, дом 12, корп. 3, кв. 143, Москва <span class="phone-number">8 (495) 111-11-11</span> </span>
                              </span>
                            </div>
                          </address>
                        </div>
                        <div id="tool_address_268408829" class="address_actions text-left col-md-5 col-sm-5">
                          <span class="action_edit">
                            <a href="#" onclick="HTML.CustomerAddress.toggleForm(268408829);return false"><i class="fa fa-edit"></i>Изменить адрес</a>
                          </span>
                          <span class="action_delete">
                            <a href="#" onclick="HTML.CustomerAddress.destroy(268408829);return false"><i class="fa fa-times"></i> Удалить адрес</a>
                          </span>
                        </div>
                      </div>
                      <div id="edit_address_268408829" class="customer_address edit_address" style="display:none">
                        <form accept-charset="UTF-8" action="./address.php" id="address_form_268408829" method="post"><input name="form_type" type="hidden" value="customer_address"><input name="utf8" type="hidden" value="✓">
                          <ul class="row list-unstyled customer_address_table">
                            <li class="col-md-20">
                              <label class="control-label" for="address_first_name_268408829">Имя <i class="fa fa-asterisk red sizeq"></i></label>
                              <input type="text" id="address_first_name_268408829" class="form-control" name="address[first_name]" value="Алексей">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-20">
                              <label class="control-label" for="address_last_name_268408829">Фамилия</label>
                              <input type="text" id="address_last_name_268408829" class="form-control" name="address[last_name]" value="Иванов">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-20">
                              <label class="control-label" for="address_address1_268408829">Адрес <i class="fa fa-asterisk red sizeq"></i></label>
                              <input type="text" id="address_address1_268408829" class="form-control" name="address[address1]" value="ул. Полбина, дом 12, корп. 3, кв. 143">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-10">
                              <label class="control-label" for="address_country_268408829">Регион <i class="fa fa-asterisk red sizeq"></i></label>
                              <select id="address_country_268408829" class="form-control" name="address[country]" data-default="Москва">
                                <option value="" data-provinces="[]">-- Выберите Регион --</option>
                              </select>
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-10">
                              <label class="control-label" for="address_zip_268408829">Индекс</label>
                              <input type="text" id="address_zip_268408829" class="form-control" name="address[zip]" value="70000">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-10">
                              <label class="control-label" for="address_phone_268408829">Телефон <i class="fa fa-asterisk red sizeq"></i></label>
                              <input type="text" id="address_phone_268408829" class="form-control" name="address[phone]" value="8 (495) 111-11-11">
                            </li>
                            <li class="clearfix"></li>
                            <li class="col-md-20 set_default">
                              <input type="checkbox" id="address_default_address_268408829" name="address[default]" value="1"> Установить, как адрес по умолчанию?
                            </li>
                          </ul>
                          <div class="last clearfix">
                            <button class="btn mright-7" type="submit">Обновить информацию</button>
                            <button class="btn" type="button" onclick="HTML.CustomerAddress.toggleForm(268408829);return false">Отмена</button>
                          </div>
                          <br>
                          <input type="hidden" name="_method" value="put"></form>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="address_pagination">
                </div>
              </div>
            </div>
            <script type="text/javascript">
              var HTML = new Object();
              HTML.CustomerAddress = {
                toggleForm: function(id) {
                  var editEl = document.getElementById('edit_address_'+id);
                  var toolEl = document.getElementById('tool_address_'+id);      
                  editEl.style.display = editEl.style.display == 'none' ? '' : 'none';
                  toolEl.style.visibility = toolEl.style.visibility == 'hidden' ? '' : 'hidden';
                  return false;    
                },
                
                toggleNewForm: function() {
                  var el = document.getElementById('add_address');
                  el.style.display = el.style.display == 'none' ? '' : 'none';
                  return false;
                },
                
                destroy: function(id, confirm_msg) {
                  if (confirm(confirm_msg || "Вы уверены, что хотите удалить этот адрес?")) {
                  }      
                }
              }
            </script>
          </div>
        </section>
      </div>
    </div>
  </div>
   <?php include ("../../../footer.php") ?>
</body>
</html>
