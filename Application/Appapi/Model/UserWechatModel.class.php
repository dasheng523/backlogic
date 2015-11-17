<?php

namespace Appapi\Model;
use Think\Model;
class UserWechatModel extends Model{
    //添加用户喜欢的店铺信息
    public function AddUserWechat($id,$user_id,$open_id,$nickname,$sex,$city,$country,$province,$language,$headimgurl,$subscribe_time,$remark,$groupid,$unionid)
    {
        $UserWechat = M("user_wechat"); // 实例化User对象
        $data['id']=$id;
        $data['user_id'] = $user_id;
        $data['open_id'] = $open_id;
        $data['nickname']=$nickname;
        $data['sex']=$sex;
        $data['city']=$city;
        $data['country']=$country;
        $data['province']=$province;
        $data['language']=$language;
        $data['headimgurl']=$headimgurl;
        $data['subscribe_time']=$subscribe_time;
        $data['remark']=$remark;
        $data['groupid']=$groupid;
        $data['unionid']=$unionid;
        $UserWechat->add($data);
        return $UserWechat;
    }
    //根据用户名称查询
    public  function SerachUserWechat($nickname)
    {
        $UserWechat=M('user_wechat')->where("nickname = $nickname")->select();
        return $UserWechat;
    }

   //删除某一个店铺
    public function DeletUserWechatById($id)
    {
        $UserWechat=M("user_wechat");
        $UserWechat ->where("id=$id")->delete();
    }
    //更新店铺信息
    public function UpdateUserWechat($id,$user_id,$open_id,$nickname,$sex,$city,$country,$province,$language,$headimgurl,$subscribe_time,$remark,$groupid,$unionid)
    {
        $UserWechat = M("user_wechat"); // 实例化User对象
        $data['user_id'] = $user_id;
        $data['open_id'] = $open_id;
        $data['nickname']=$nickname;
        $data['sex']=$sex;
        $data['city']=$city;
        $data['country']=$country;
        $data['province']=$province;
        $data['language']=$language;
        $data['headimgurl']=$headimgurl;
        $data['subscribe_time']=$subscribe_time;
        $data['remark']=$remark;
        $data['groupid']=$groupid;
        $data['unionid']=$unionid;
        $UserWechat->where("id=$id")->save($data); // 根据条件更新记录
    }

}