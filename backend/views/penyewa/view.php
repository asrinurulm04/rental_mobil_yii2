<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\penyewa */

$this->title = $model->id_penyewa;
$this->params['breadcrumbs'][] = ['label' => 'Penyewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penyewa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_penyewa' => $model->id_penyewa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_penyewa' => $model->id_penyewa], [
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
            'id_penyewa',
            'nama_lengkap',
            'password',
            'email:email',
            'jenkel',
            'pekerjaan',
            'alamat:ntext',
            'kota',
            'provinsi',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
