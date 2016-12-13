<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vimi_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $status
 * @property string $auth_key
 * @property string $access_token
 */
class user extends \yii\db\ActiveRecord
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
            [['username', 'password', 'status', 'auth_key', 'access_token'], 'required'],
            [['status'], 'integer'],
            [['username'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 45],
            [['auth_key', 'access_token'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
}
