<?php

namespace app\modules\v2\controllers;

use yii\filters\VerbFilter;

use app\controllers\BossBaseController;
use app\models\Address;

class AddressController extends BossBaseController
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

    public function actionGetAddressList()
    {
        $address_list = Address::find()
            ->select([
                'address_id',
                'user_id',
                'receiver',
                'receiver_tel',
                'province_id',
                'city_id',
                'district_id',
                'address_detail',
                'del_flag',
                'created_time',
                'updated_time'
            ])
            ->asArray()
            ->all();
        
        $res = [
        	'code' => 0,
        	'msg'=> '',
        	'data' => $address_list
        ];

        return $res;
    }

    public function actionGetUser()
    {
        $user_id = $_REQUEST['user_id'];

        if ($user_id) {
            $user = User::find()
                ->select([
                    'user_id',
                    'tel',
                    'email',
                    'status',
                    'login_ip',
                    'login_time',
                    'login_count',
                    'del_flag',
                    'created_time',
                    'updated_time'
                ])
                ->where(['user_id' => $user_id])
                ->asArray()
                ->one();

            if ($user) {
                $res = [
                    'code' => 0,
                    'msg'=> '',
                    'data' => $user
                ];
            } else {
                $res = [
                    'code' => 1,
                    'msg'=> '用户不存在',
                    'data' => null
                ];
            }
            
        } else {
            $res = [
                'code' => 1,
                'msg'=> '请输入用户id',
                'data' => null
            ];
        }

        return $res;
    }

}
