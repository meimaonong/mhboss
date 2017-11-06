<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work_item".
 *
 * @property integer $work_item_id
 * @property integer $work_id
 * @property string $work_item_title
 * @property string $work_item_des
 * @property integer $num
 * @property string $work_img
 * @property integer $w
 * @property integer $h
 * @property double $ratio
 * @property integer $del_flag
 * @property string $created_time
 * @property string $updated_time
 */
class WorkItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_id', 'num', 'w', 'h', 'del_flag'], 'integer'],
            [['work_item_des'], 'required'],
            [['work_item_des'], 'string'],
            [['ratio'], 'number'],
            [['created_time', 'updated_time'], 'safe'],
            [['work_item_title', 'work_img'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'work_item_id' => '作品项id',
            'work_id' => '所属作品id',
            'work_item_title' => '作品项标题',
            'work_item_des' => '作品项描述',
            'num' => '排序数字',
            'work_img' => '作品项图片',
            'w' => '作品宽度',
            'h' => '作品高度',
            'ratio' => '长宽比',
            'del_flag' => '删除标识',
            'created_time' => '创建时间',
            'updated_time' => '更新时间',
        ];
    }
}
