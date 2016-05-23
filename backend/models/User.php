<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $status_member
 * @property string $alamat
 * @property string $kodepos
 * @property string $nomor_tlp
 * @property string $fax
 * @property integer $bank
 * @property string $no_reg
 * @property string $full_name
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
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'alamat', 'kodepos', 'nomor_tlp', 'fax', 'full_name'], 'required'],
            [['status', 'created_at', 'updated_at', 'status_member', 'bank'], 'integer'],
            [['alamat', 'kodepos', 'nomor_tlp', 'fax', 'no_reg'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['full_name'], 'string', 'max' => 30],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
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
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status_member' => 'Status Member',
            'alamat' => 'Alamat',
            'kodepos' => 'Kodepos',
            'nomor_tlp' => 'Nomor Tlp',
            'fax' => 'Fax',
            'bank' => 'Bank',
            'no_reg' => 'No Reg',
            'full_name' => 'Full Name',
        ];
    }
}
