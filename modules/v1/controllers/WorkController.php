<?php

namespace app\modules\v1\controllers;

use yii\filters\VerbFilter;

use app\controllers\BaseController;
use app\models\Work;

class WorkController extends BaseController
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    '*' => ['post'],
                ],
            ],
        ];
    }



    // getWorklist
    public function actionGetWorklist()
    {
        $param = $_REQUEST;

        $res = Work::getWorklist($param);

        return $res;

    }

    public function actionGetWork()
    {
        $param = $_REQUEST;

        $res = Work::getWork($param);

        return $res;

    }

    public function actionSaveWork()
    {
        $param = $_REQUEST;

        $res = Work::saveWork($param);

        return $res;
    }

    

}
