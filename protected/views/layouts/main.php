<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />
    <!-- CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/carousel.css" rel="stylesheet" >
    <link type="text/css" href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <!-- JS -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.3.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/action.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ui.datepicker-ru.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js" type="text/javascript"></script>

<!--<link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.less">-->
<!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js"></script>-->
<!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>-->
<!--<script type="text/javascript" src="js/jquery-1.9.1.js"></script>-->

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  </head>
  <body>
    <div id="wrap">
      <header>
        <div class="navbar-wrapper">
          <div class="container">
            <div class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><!--кнопка при уменьшении экрана для планшетов и телефонов-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/site/index">Судоверфь Корвет</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">О компании<b class="caret"></b></a>
                      <ul class="dropdown-menu main-menu">
                        <li><a href="/site/index#company">О компании</a></li>
                        <li><a href="/site/index#news">Новости</a></li>
                        <li><a href="/site/index#question">Вопросы</a></li>
                        <li><a href="/site/index#contacts">Контакты</a></li>
                        <!--<li class="divider"></li>-->
                        <!--<li><a href="#">Контакты</a></li>-->
                      </ul>
                    </li>
                    <li><a href="/site/production">Продукция</a></li>
                    <li><a href="/site/rewievs">Отзывы</a></li>
                    <li><a href="#">Фотоальбом</a></li>

                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!--        <h1>9 этажей</h1>
                        <nav>
                          <a href="/site/information">Информация</a>
                          <a href="/site/population">Жителям</a>
                          <a href="/site/reestr">Реестр</a>
                          <div class="clear"></div>
                        </nav>-->
      </header>

      <!-- Menu -->
      <?php $this->renderPartial('application.views.layouts._menu', array('current_item' => 'about')) ?>
      <div id="content">
        <?php echo $content; ?>
        <script type="text/javascript">
          $(function(){
            $.datepicker.setDefaults(
            $.extend($.datepicker.regional["ru"])
          );
            $(".datepicker").datepicker();
          });
        </script>
      </div>
    </div>
    <div id="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </div>

  </body>
</html>