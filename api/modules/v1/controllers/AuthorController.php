<?php
namespace app\api\modules\v1\controllers;

use yii\rest\ActiveController;

class AuthorController extends ActiveController
{
    // We are using the regular web app modules:
    public $modelClass = 'app\models\Author';
}