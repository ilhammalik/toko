<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property integer $produk_id
 * @property string $nama
 * @property string $harga
 * @property integer $photo_id
 * @property string $cover
 * @property string $promo
 * @property string $kode_barang
 * @property integer $status
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'harga', 'photo_id', 'cover', 'promo', 'kode_barang', 'status'], 'required'],
            [['nama', 'harga', 'cover'], 'string'],
            [['photo_id', 'status','jml'], 'integer'],
            [['promo', 'kode_barang'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'produk_id' => 'Produk ID',
            'nama' => 'Nama',
            'harga' => 'Harga',
            'photo_id' => 'Photo ID',
            'cover' => 'Cover',
            'promo' => 'Promo',
            'kode_barang' => 'Kode Barang',
            'status' => 'Status',
        ];
    }
}
