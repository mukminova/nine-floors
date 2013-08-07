<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.0.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/action.js"></script>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.less">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <h1>9 этажей</h1>
        <nav>
          <a href="/site/information">Информация</a>
          <a href="/site/population">Жителям</a>
          <a href="/site/reestr">Реестр</a>
          <div class="clear"></div>
        </nav>
      </header>
      <a href="/site/index" class="sun"></a>
      <!-- Menu -->
      <?php $this->renderPartial('application.views.layouts._menu', array('current_item' => 'about')) ?>
      <div id="content">
        <?php echo $content; ?>
       </div>
    </div>
  </div>
  <footer>
  </footer>
</body>
</html>