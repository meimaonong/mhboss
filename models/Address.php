<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $address_id
 * @property integer $user_id
 * @property string $receiver
 * @property string $receiver_tel
 * @property integer $province_id
 * @property integer $city_id
 * @property integer $district_id
 * @property string $address_detail
 * @property integer $del_flag
 * @property string $created_time
 * @property string $updated_time
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'province_id', 'city_id', 'district_id'], 'required'],
            [['user_id', 'province_id', 'city_id', 'district_id', 'del_flag'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['receiver'], 'string', 'max' => 11],
            [['receiver_tel'], 'string', 'max' => 15],
            [['address_detail'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_id' => '地址id',
            'user_id' => '用户id',
            'receiver' => '收件人',
            'receiver_tel' => '收件人手机号',
            'province_id' => '省份id',
            'city_id' => '城市id',
            'district_id' => '区县id',
            'address_detail' => '详细地址',
            'del_flag' => '删除标识',
            'created_time' => '创建时间',
            'updated_time' => '更新时间',
        ];
    }
}
