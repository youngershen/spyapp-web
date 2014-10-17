<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;

class IndexController extends Controller {

    protected $_validate = array(
        array('username', '', '帐号名称已经存在！', 1, 'unique', 1), // 在新增的时候验证name字段是否唯一
        array('password', 'require', '密码不能为空', 1, 'regex', 1), // 当值不为空的时候判断是否在一个范围内
        array('repassword', 'password', '确认密码不正确', 0, 'confirm', 1), // 验证确认密码是否和密码一致
        array('email', '', '邮箱已经存在',1, 'unique', 1), // 自定义函数验证密码格式
        array('cellphone', '', '手机号码已经存在', 1, 'unique', 1),
    );


    public function index(){
        $this->show("homeindex");
    }

    public function say($id){
        $url = U("index/index?id=1");
        $this->show("say" . $url);
    }

    public function add_user(){
        if(IS_POST){

            $user = new UserModel(); // 实例化User对象
            if (!$user->create(I('post.'))){

                $error = $user->getError();
                return $this->show("error" . $user);

            }else{
                $user->add(I('post.'));
                return  $this->show("创建成功额");
            }
        }else{
            return $this->display('reg');
        }
    }
}