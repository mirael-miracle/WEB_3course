<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $isAdmin
 * @property string|null $photo
 *
 * @property Comment[] $comments
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'isAdmin', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'isAdmin' => 'Is Admin',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['user_id' => 'id']);
    }
    public static function findIdentity($id){
        return User::findOne($id);
    }
    public function getId(){
        return $this->id;
    }
    public function getAuthKey(){

    }
    public function validateAuthKey($authKey){

    }
    public static function findIdentityByAccessToken($token, $type = null){

    }
    public static function findByEmail($email){
        return User::find()->where(['email'=>$email])->one();
    }
    public function validatePassword($password){
        return($this->password == $password) ? true : false;
    }
    public function create(){
        return $this->save(false);
    }
    public function getImage(){
        if($this->photo){
            return '/uploads/'.$this->photo;
        }
        return '/no-photo.png';
    }
}
