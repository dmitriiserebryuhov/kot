<?php
namespace app\models;
use Yii;
use \yii\base\Model;


class MyForm extends Model
{

	public $name;
	public $email;
	public $file;

	public function rules(){
		return [
		[['name', 'email'], 'required'],
		['email', 'email', 'message'=> 'Некоректный email адрес'],
		[['file'], 'file', 'extensions' => 'jpg']

		];
	}
}


?>