<?php

namespace app\controllers;

use yii\httpclient\Client;

use Yii;
use yii\data\ActiveDataProvider;
use app\controllers\GeneralController;
use app\models\Book;

class LibraryController extends GeneralController
{
	public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
            'query' => Book::find()->with('author')->orderBy([
                'id' => SORT_DESC,
            ]),
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);

        return $this->render('index', ['listDataProvider' => $dataProvider]);
    }
}