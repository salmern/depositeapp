<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Deposit */

$this->title = $model->deposit_id;
$this->params['breadcrumbs'][] = ['label' => 'Deposits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deposit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'deposit_id' => $model->deposit_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'deposit_id' => $model->deposit_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'deposit_id',
            'deposit_value',
            'deposit_date',
            'deposit_reason',
        ],
    ]) ?>

</div>
