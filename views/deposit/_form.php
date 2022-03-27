<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model app\models\Deposit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deposit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deposit_id')->textInput() ?>

    <?= $form->field($model, 'deposit_value')->textInput() ?>

    <?= $form->field($model, 'deposit_date')->widget(\kartik\date\DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter date ...'],
    'type' => DatePicker::TYPE_INPUT,
    //'type' => DatePicker::TYPE_COMPONENT_APPEND,
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy/mm/dd'
    ]
]); ?>

    <?= $form->field($model, 'deposit_reason')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save Deposit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
