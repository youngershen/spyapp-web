<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {

    protected $_link = array(
        'article'=>array(
            'mapping_type'  => HAS_MANY,
            'class_name'    => 'Article',
            'foreign_key'   => 'author',
            'mapping_name'  =>'articles',
            'mapping_order' =>'create_time desc',
        ),
        'order'=>array(
            'mapping_type' => HAS_MANY,
            'class_name'   => 'Order',
            'foreign_key'  => 'owner',
            'mapping_name' => 'orders',
            'mapping_order' => 'create_time desc',

        ),
    );
}