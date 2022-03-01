<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\penyewa */

$this->title = 'Create Penyewa';
$this->params['breadcrumbs'][] = ['label' => 'Penyewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyewa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
