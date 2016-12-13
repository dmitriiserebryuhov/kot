<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vimi_user".
 *
 * @property integer $user_id
 * @property string $user_fio
 * @property string $user_password
 * @property integer $user_status
 */
class VimiUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vimi_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_fio', 'user_password', 'user_status'], 'required'],
            [['user_status'], 'integer'],
            [['user_fio'], 'string', 'max' => 255],
            [['user_password'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_fio' => 'User Fio',
            'user_password' => 'User Password',
            'user_status' => 'User Status',
        ];
    }
}
