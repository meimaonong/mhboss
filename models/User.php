<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $tel
 * @property string $email
 * @property string $salt
 * @property string $password
 * @property string $weixin_openid
 * @property string $weixin_name
 * @property string $weixin_avatar_img
 * @property integer $status
 * @property string $login_ip
 * @property integer $login_time
 * @property integer $login_count
 * @property integer $del_flag
 * @property string $created_time
 * @property string $updated_time
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'login_time', 'login_count', 'del_flag'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['tel', 'salt'], 'string', 'max' => 15],
            [['email', 'password', 'weixin_openid'], 'string', 'max' => 50],
            [['weixin_name'], 'string', 'max' => 100],
            [['weixin_avatar_img'], 'string', 'max' => 1000],
            [['login_ip'], 'string', 'max' => 22],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '用户id',
            'tel' => '用户手机号',
            'email' => '用户email',
            'salt' => '密码盐',
            'password' => '用户密码',
            'weixin_openid' => '微信用户openid',
            'weixin_name' => '微信名',
            'weixin_avatar_img' => '微信头像',
            'status' => '状态 0 正常 1 禁用',
            'login_ip' => '登录ip',
            'login_time' => '登录时间',
            'login_count' => '登录次数',
            'del_flag' => 'Del Flag',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
        ];
    }
}
