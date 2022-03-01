<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\penyewa */

$this->title = 'Update Penyewa: ' . $model->id_penyewa;
$this->params['breadcrumbs'][] = ['label' => 'Penyewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penyewa, 'url' => ['view', 'id_penyewa' => $model->id_penyewa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penyewa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
