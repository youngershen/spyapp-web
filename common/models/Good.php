<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "good".
 *
 * @property integer $id
 * @property string $name
 * @property double $price
 * @property integer $discount
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property OrderGood[] $orderGoods
 */
class Good extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'good';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_at', 'updated_at'], 'required'],
            [['price'], 'number'],
            [['discount', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255]
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
            'price' => 'Price',
            'discount' => 'Discount',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderGoods()
    {
        return $this->hasMany(OrderGood::className(), ['good_id' => 'id']);
    }
}
