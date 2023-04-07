<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Registration;


class SessionController extends Controller{

public function init()
{
    parent::init();
    Yii::$app->session->open();
    if($this->Getsession()){
        return true;
    }
    else {
        return $this->redirect(['site/index']);
    }

}
public function Setsession()
{
    $user=new Registration();
  $session = Yii::$app->session;
    $email= $user['email'];
    $session->set('email',$email);
    $session->set('role',$user['role']);
}


public function Getsession()
{    $session = Yii::$app->session;
    $email = $session->get('email');
    print_r($email);
}
public function Destroysession(){
    Yii::$app->session->destroy();
    print_r("Session is destroyed");
    // return $this->redirect(['site/index']);
}
}

