<?php

class User extends CActiveRecord {

  // для капчи
  public $verifyCode;
  // для поля "повтор пароля"
  public $passwd2;

  public static function model($className = __CLASS__) {
    return parent::model($className);
  }

  public function tableName() {
    return 'user';
  }
}