<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $full_name;
    public $username;
    public $email;
    public $password;
    public $alamat;
    public $kodepos;
    public $fax;
    public $nomor_tlp;
    public $status_member;
    public $status;
    public $bank;
    public $no_reg;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['full_name', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['alamat', 'string', 'max' => 600],
            ['kodepos', 'string', 'max' => 600],
            ['nomor_tlp', 'string', 'max' => 20],
            ['fax', 'string', 'max' => 50],
            ['status', 'string', 'max' => 50],
            ['status_member', 'string', 'max' => 50],
            ['bank', 'string', 'max' => 50],
            ['no_reg', 'string', 'max' => 50],

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
        $user->full_name = $this->full_name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status= $this->status;
        $user->status_member= $this->status_member;
        $user->alamat= $this->alamat;
        $user->nomor_tlp= $this->nomor_tlp;
        $user->kodepos= $this->kodepos;
        $user->fax= $this->fax;
        $user->bank= $this->bank;
        $user->no_reg= $this->no_reg;


        
        return $user->save() ? $user : null;
    }
}
