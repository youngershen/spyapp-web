<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article_tag".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $tag_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Tag $tag
 * @property Article $article
 */
class Article_tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'tag_id', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'tag_id' => 'Tag ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }
}
