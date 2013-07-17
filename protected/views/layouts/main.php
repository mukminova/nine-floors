<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.0.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/action.js"></script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <a href="/site/index" class="sun"></a>
        <!-- Menu -->
        <?php $this->renderPartial('application.views.layouts._menu', array('current_item' => 'about')) ?>
      </div>
      <div id="content">
        <div>
          <?php echo $content; ?>
        </div>
      </div>
    </div>
    <div id="footer">
    </div>
  </body>
</html>