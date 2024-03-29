<?php

namespace dmarab\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionPageAbout()
    {
        return $this->render('page-about');
    }
    public function actionFactories()
    {
        return $this->render('page-factories');
    }
    public function actionAluminumCoating()
    {
        return $this->render('aluminum-coating');
    }
    public function actionAluminumDieShop()
    {
        return $this->render('aluminum-die-shop');
    }
    public function actionAluminumProduction()
    {
        return $this->render('aluminum-production');
    }
    public function actionProcessedGlass()
    {
        return $this->render('processed-glass');
    }
    public function actionContact()
    {
        return $this->render('contact');
    }
}
