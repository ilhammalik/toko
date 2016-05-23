<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $menu_id
 * @property string $nama
 * @property string $parent
 * @property integer $urutan
 * @property integer $status
 * @property string $link
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'parent', 'urutan', 'status', 'link'], 'required'],
            [['nama', 'parent', 'link'], 'string'],
            [['urutan', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'nama' => 'Nama',
            'parent' => 'Parent',
            'urutan' => 'Urutan',
            'status' => 'Status',
            'link' => 'Link',
        ];
    }
}
