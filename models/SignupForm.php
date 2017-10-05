<?php
 
namespace app\models;
 
use Yii;
use yii\base\Model;
 
/**
 * Signup form
 */
class SignupForm extends Model
{
 
    public $username;
    public $email;
    public $password;
    public $firstname;
    public $secondname;
    public $phone;

 
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Эта электронная почта уже используется!.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['firstname', 'trim'],
            ['firstname', 'required'],
            ['firstname', 'string', 'min' => 2, 'max' => 255],

            ['secondname', 'trim'],
            ['secondname', 'required'],
            ['secondname', 'string', 'min' => 2, 'max' => 255],

            ['phone', 'trim'],
            ['phone', 'required'],
            ['phone', 'string', 'min' => 2, 'max' => 255],
        ];
    }
 
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
 
        if (!$this->validate()) {
            return null;
        }
 
        $user = new User();
        $user->username = $this->email;
        $user->email = $this->email;
        $user->firstname = $this->firstname;
        $user->secondname = $this->secondname;
        $user->phone = $this->phone;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
 
}