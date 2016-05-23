<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrasi Member dan Toko';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

    <div class="row">
        <div class="col-lg-6">

                <?= $form->field($model, 'full_name')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

           
        </div>

          <div class="col-lg-6">

                <?= $form->field($model, 'alamat')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'kodepos') ?>
                <?= $form->field($model, 'nomor_tlp') ?>
                <?= $form->field($model, 'fax') ?>

                
        </div>
      

    </div>
      <div class="row">
        <div class="pull-left">
                 <?= Html::a('Batal', ['index'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="pull-right">
                 <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>
            
        </div>
    <?php ActiveForm::end(); ?>
<br/>
<br/>
<br/>
</div>
<script type="text/javascript">
    $('.drop-down-show-hide').hide();
$('#dropDown').change(function () {
    $('.drop-down-show-hide').hide()
    $('#' + this.value).show();
});
</script>
