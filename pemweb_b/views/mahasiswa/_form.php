<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Prodi;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
    <? $data=Prodi::cariDaftarProdi();?>
    <?= $form->field($model, 'kode_prodi')->widget(Select2::classname(), [
        'data' => Prodi::cariDaftarProdi(),
        'options' => ['placeholder' => 'Pilih Prodi ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
