<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Produk;

/**
 * ProdukSearch represents the model behind the search form about `common\models\Produk`.
 */
class ProdukSearch extends Produk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produk_id', 'photo_id', 'status'], 'integer'],
            [['nama', 'harga', 'cover', 'promo', 'jml','kode_barang'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Produk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'produk_id' => $this->produk_id,
            'photo_id' => $this->photo_id,
            'status' => $this->status,
            'jml' => $this->jml,

        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'harga', $this->harga])
            ->andFilterWhere(['like', 'cover', $this->cover])
            ->andFilterWhere(['like', 'promo', $this->promo])
            ->andFilterWhere(['like', 'kode_barang', $this->kode_barang]);

        return $dataProvider;
    }
}
