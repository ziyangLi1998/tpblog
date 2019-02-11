<?php

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{
    //后台登录功能
    public function login($result)
    {
        if(request()->isAjax()){
            $data = [
                'username' => input('post.username'),
                'password' => input('post.password')
            ];
            $return = model('Admin')->login($data);
            if ($result == 1){
                $this->success('登陆成功！','admin/home/index');
            }else{
                $this->error($result);
            }
        }
        return view();
    }

}
