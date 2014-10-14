<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_good".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $good_id
 * @property integer $count
 * @property double $price
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Good $good
 * @property Order $order
 */
class Order_good extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_good';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'good_id', 'count', 'created_at', 'updated_at'], 'integer'],
            [['price'], 'number'],
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
            'order_id' => 'Order ID',
            'good_id' => 'Good ID',
            'count' => 'Count',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGood()
    {
        return $this->hasOne(Good::className(), ['id' => 'good_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }
}
