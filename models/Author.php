<?php

namespace app\models;
use yii\db\ActiveRecord;

class Author extends ActiveRecord {

    public static function tableName() {
        return 'author';
    }

    public function getBook() {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }

}