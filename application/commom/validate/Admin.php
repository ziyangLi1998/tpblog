<?php
/**
 * Created by PhpStorm.
 * User: time
 * Date: 2019/2/9
 * Time: 17:01
 */

namespace app\commom\validate;


class Admin extends Validate
{
    protected $rule = [
        'username|管理员账户' => 'require',
        'password|密码' =>'require'
    ];

    //登录验证场景
    public function sceneLogin()
    {
        return $this->only(['username','password']);
    }

}