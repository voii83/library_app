<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Class AppController
 * @package app\controllers
 */
class AppController extends Controller
{
    public $user;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' =>
                [
                    'class' => AccessControl::class,
                    'denyCallback' => function ($rule, $action) {
                        Yii::$app->user->logout();
                        $this->redirect('/site/login');
                    },
                    'except' => ['login', 'logout'],
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],

                ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
}