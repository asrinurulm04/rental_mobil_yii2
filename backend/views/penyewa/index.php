<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\penyewaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penyewas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyewa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penyewa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penyewa',
            'nama_lengkap',
            'password',
            'email:email',
            'jenkel',
            //'pekerjaan',
            //'alamat:ntext',
            //'kota',
            //'provinsi',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penyewa' => $model->id_penyewa]);
                 }
            ],
        ],
    ]); ?>


</div>
