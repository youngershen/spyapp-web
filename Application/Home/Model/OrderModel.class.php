<?php
namespace Home\Model;
use Think\Model;
class OrderModel extends Model {

    protected $_link = array(
        'good'=>array(
                'mapping_type'         => MANY_TO_MANY,
                'class_name'           => 'Order',
                'mapping_name'         => 'goods',
                'foreign_key'          => 'order_id',
                'relation_foreign_key' => 'good_id',
                'mapping_order'        => 'create_time desc'
             ),
         );

}