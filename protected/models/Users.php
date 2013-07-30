<?php

/**
 * This is the model class for table "nf_users".
 *
 * The followings are the available columns in table 'nf_users':
 * @property integer $id
 * @property string $login
 * @property string $password
 */
class Users extends CActiveRecord {

  /**
   * Returns the static model of the specified AR class.
   * @param string $className active record class name.
   * @return Users the static model class
   */
  public static function model($className = __CLASS__) {
    return parent::model($className);
  }

  /**
   * @return string the associated database table name
   */
  public function tableName() {
    return 'nf_users';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules() {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
        array('login, password', 'required'),
        array('login, password', 'length', 'max' => 255),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, login, password', 'safe', 'on' => 'search'),
        array('login', 'email'),
    );
  }

  /**
   * @return array relational rules.
   */
  public function relations() {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array(
    );
  }

  /**
   * @return array customized attribute labels (name=>label)
   */
  public function attributeLabels() {
    return array(
        'id' => 'ID',
        'login' => 'Login',
        'password' => 'Password',
    );
  }

  /**
   * Retrieves a list of models based on the current search/filter conditions.
   * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
   */
  public function search() {
    // Warning: Please modify the following code to remove attributes that
    // should not be searched.

    $criteria = new CDbCriteria;

    $criteria->compare('id', $this->id);
    $criteria->compare('login', $this->login, true);
    $criteria->compare('password', $this->password, true);

    return new CActiveDataProvider($this, array(
                'criteria' => $criteria,
            ));
  }

  public static function sendMail($view, $params) {
    $email = $params['recipient'];

    $mail_config = Yii::app()->params['smtp_params'];
    $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
    $mailer->SMTPAuth = TRUE;
    $mailer->IsSMTP();
    $mailer->Host = $mail_config['host'];
    $mailer->Username = $mail_config['user'];
    $mailer->Password = $mail_config['password'];
    $mailer->From = $mail_config['user'];
    $mailer->AddAddress($email);
    $mailer->Subject = 'Подтверждение регистрации';
    $mailer->FromName = 'Сайт';
    $mailer->setPathViews('application.views.mailTemplates');
    $mailer->getView($view, $params);
    if (!$mailer->Send()) {
      Yii::log('Try to login with params: ' . print_r($mail_config, 1), 'warning');
      Yii::log($mailer->ErrorInfo, 'warning');
      return false;
    }
    return true;
  }

}