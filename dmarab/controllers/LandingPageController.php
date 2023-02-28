<?php

namespace dmarab\controllers;

class LandingPageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
