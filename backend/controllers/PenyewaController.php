<?php

namespace backend\controllers;

use common\models\penyewa;
use common\models\penyewaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenyewaController implements the CRUD actions for penyewa model.
 */
class PenyewaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all penyewa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new penyewaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single penyewa model.
     * @param int $id_penyewa Id Penyewa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penyewa)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penyewa),
        ]);
    }

    /**
     * Creates a new penyewa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new penyewa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penyewa' => $model->id_penyewa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing penyewa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_penyewa Id Penyewa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_penyewa)
    {
        $model = $this->findModel($id_penyewa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penyewa' => $model->id_penyewa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing penyewa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_penyewa Id Penyewa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_penyewa)
    {
        $this->findModel($id_penyewa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the penyewa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penyewa Id Penyewa
     * @return penyewa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penyewa)
    {
        if (($model = penyewa::findOne(['id_penyewa' => $id_penyewa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
