<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProdukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'produk_id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'photo_id') ?>

    <?= $form->field($model, 'cover') ?>

    <?php // echo $form->field($model, 'promo') ?>

    <?php // echo $form->field($model, 'kode_barang') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
