<?php

class SiteController extends Controller {

  public $layout = 'main';

  /**
   * Declares class-based actions.
   */
  public function actions() {
    return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
//        'captcha' => array(
//            'class' => 'CCaptchaAction',
//            'backColor' => 0xFFFFFF,
//        ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
//        'page' => array(
//            'class' => 'CViewAction',
//        ),
    );
  }

  public function actionIndex() {

    MyHelper::render($this, '/site/index', array(), 'Главная');
  }

  public function actionActivity() {

    MyHelper::render($this, '/site/activity', array(), 'Мероприятия');
  }

  public function actionFloors() {

    MyHelper::render($this, '/site/floors', array(), 'Этажи');
  }

  public function actionRegistration() {

    MyHelper::render($this, '/site/registration', array(), 'Регистрация');
  }

  public function actionFaq() {

    MyHelper::render($this, '/site/faq', array(), 'Часто задаваемые вопросы');
  }
  
  public function actionReestr() {

    MyHelper::render($this, '/site/reestr', array(), 'Реестр');
  }
  
  public function actionError() {
    if ($error = Yii::app()->errorHandler->error) {
      if (Yii::app()->request->isAjaxRequest)
        echo $error['message'];
      else
        $this->render('error', $error);
    }
  }

  public function actionLogin() {

    MyHelper::render($this, '/site/login', array(), 'Вход');
  }

  public function actionLogout() {
    Yii::app()->user->logout();
    $this->redirect(Yii::app()->homeUrl);
  }

}
