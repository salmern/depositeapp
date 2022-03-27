<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Deposit */

$this->title = 'Update Deposit: ' . $model->deposit_id;
$this->params['breadcrumbs'][] = ['label' => 'Deposits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deposit_id, 'url' => ['view', 'deposit_id' => $model->deposit_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deposit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
