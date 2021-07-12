<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionUno()
    {
        return $this->render('hola');
    }
    public function actionDos()
    {
        return $this->render('dos', ['texto'=>'ejemplo de camion']);
    }
    public function actionTres()
    {
        return $this->render('tres', 
                [
                    'texto'=>'ejemplo de camion',
                    'numero'=> 2,
                ]);
    }
    public function actionCiudades()
    {
        return $this->render('ciudades/index');
    }
}
