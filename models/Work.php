<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property integer $work_id
 * @property string $work_name
 * @property string $work_des
 * @property integer $work_check_status
 * @property integer $work_buy_status
 * @property integer $category_id
 * @property integer $album_id
 * @property integer $del_flag
 * @property string $created_time
 * @property string $updated_time
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_des'], 'required'],
            [['work_des'], 'string'],
            [['work_check_status', 'work_buy_status', 'category_id', 'album_id', 'del_flag'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['work_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'work_id' => '作品id',
            'work_name' => '作品名称',
            'work_des' => '作品描述',
            'work_check_status' => '作品状态 0 未提审 1 待审核 2 审核通过',
            'work_buy_status' => '购买状态 0 未被购买 1 已被购买',
            'category_id' => '关联分类id',
            'album_id' => '关联专辑id',
            'del_flag' => '删除标识',
            'created_time' => '创建时间',
            'updated_time' => '更新时间',
        ];
    }
}
