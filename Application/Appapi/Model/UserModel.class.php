<?php

namespace Appapi\Model;
use Think\Model;
class UserModel extends Model{
    //添加用户信息
    public function AddUser($id,$score,$phone,$nickname,$sex,$headimgurl,$ctime,$utime)
    {
        $user = M("user"); // 实例化User对象
        $data['id']=$id;
        $data['score'] = $score;
        $data['phone'] = $phone;
        $data['nickname']=$nickname;
        $data['sex'] = $sex;
        $data['headimgurl'] = $headimgurl;
        $data['ctime']=$ctime;
        $data['utime']=$utime;
        $user->add($data);
        return $user;
    }
    //根据用户名称，搜索某用户
    public  function SerachUser($nickname)
    {
        $user=M('user')->where("nickname like '%$nickname%'")->select();
        return $user;
    }

    //删除某一个用户
    public function DeleteUserById($id)
    {
        $user=M("user");
        $user ->where("id=$id")->delete();
    }
    //更新用户信息
    public function UpdateUserInfo($id,$score,$phone,$nickname,$sex,$headimgurl,$ctime,$utime)
    {
        $user = M("user"); // 实例化User对象
        $data['score'] = $score;
        $data['phone'] = $phone;
        $data['nickname']=$nickname;
        $data['sex'] = $sex;
        $data['headimgurl'] = $headimgurl;
        $data['ctime']=$ctime;
        $data['utime']=$utime;
        $user->where("id=$id")->save($data); // 根据条件更新记录
    }

}