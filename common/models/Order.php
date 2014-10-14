<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property double $total_price
 * @property integer $status_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Status $status
 * @property OrderGood[] $orderGoods
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status_id', 'created_at', 'updated_at'], 'required'],
            [['name', 'description'], 'string'],
            [['total_price'], 'number'],
            [['status_id', 'created_at', 'updated_at'], 'integer']
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
            'description' => 'Description',
            'total_price' => 'Total Price',
            'status_id' => 'Status ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderGoods()
    {
        return $this->hasMany(OrderGood::className(), ['order_id' => 'id']);
    }
}
