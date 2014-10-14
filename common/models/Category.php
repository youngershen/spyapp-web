<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $describtion
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $parent_id
 *
 * @property Article[] $articles
 * @property Category $parent
 * @property Category[] $categories
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_at', 'updated_at', 'parent_id'], 'required'],
            [['describtion'], 'string'],
            [['created_at', 'updated_at', 'parent_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'describtion' => 'Describtion',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'parent_id' => 'Parent ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }
}
