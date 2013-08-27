<?php

class SiteController extends Controller {

  public $layout = 'main';

  public function actionIndex() {

    MyHelper::render($this, '/site/index', array(), 'Главная');
  }

  public function actionInformation() {

    MyHelper::render($this, '/site/information', array(), 'Информация');
  }

  public function actionPopulation() {

    MyHelper::render($this, '/site/population', array(), 'Жители');
  }

  public function actionRegistration() {
    $errors = '';
    if (!empty($_POST)) {
      if ($_POST['password'] == $_POST['repeat_password']) {
        $user = new Users();
        $user->login = $_POST['login'];
        $user->password = md5($_POST['password']);
        if (!$user->save()) {
          $errors = $user->getErrors();
        } else {
          Users::sendMail('registartion', array('user' => $user, 'recipient' => $user->login));
        }
      } else {
        $errors[][] = 'Пароли не совпадают!';
      }
    }

    MyHelper::render($this, '/site/registration', array('errors' => $errors), 'Регистрация');
  }

  public function actionFaq() {

    MyHelper::render($this, '/site/faq', array(), 'Часто задаваемые вопросы');
  }

  public function actionReestr() {

    MyHelper::render($this, '/site/reestr', array(), 'Реестр');
  }

  public function actionProduction() {

    MyHelper::render($this, '/site/production', array(), 'Продукция');
  }
  public function actionRewievs() {

    MyHelper::render($this, '/site/rewievs', array(), 'Отзывы');
  }
  public function actionNews() {

    MyHelper::render($this, '/site/news', array(), 'Реестр');
  }

  public function actionProfile() {

    MyHelper::render($this, '/site/profile', array(), 'Реестр');
  }

  public function actionTestReg() {

    MyHelper::render($this, '/site/testreg', array(), 'Реестр');
  }

  public function actionSaveUser() {

    MyHelper::render($this, '/site/saveuser', array(), 'Реестр');
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

    MyHelper::render($this, '/site/login', array(), 'Вход

    ');
  }

  public function actionLogout() {
    Yii::app()->user->logout();
    $this->redirect(Yii::app()->homeUrl);
  }

  public function actionConfirm($key) {
    Users::findUserByKey($key);
    MyHelper::render($this, '/site/confirm', array(), 'Подтверждение регистрации');
  }

}
