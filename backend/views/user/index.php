<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'full_name',
            'username',
            'email:email',
            'status',
            // 'created_at',
            // 'updated_at',
            // 'status_member',
            //'alamat:ntext',
            // 'kodepos:ntext',
            // 'nomor_tlp:ntext',
            // 'fax:ntext',
            // 'bank',
            // 'no_reg:ntext',
            // 'full_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
