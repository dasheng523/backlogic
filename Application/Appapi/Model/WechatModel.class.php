<?php

namespace Appapi\Model;
use Think\Model;
class WechatModel extends  Model{
    //添加店铺信息
    public function AddWechat($id,$name,$appid, $appsecret,$token,$original_id)
    {
        $wechat = M("wechat"); // 实例化User对象
        $data['id']=$id;
        $data['name'] = $name;
        $data['appid'] = $appid;
        $data['appsecret']=$appsecret;
        $data['token'] = $token;
        $data['original_id'] = $original_id;
        $wechat->add($data);
        return $wechat;
    }
    //根据店铺名称，搜索某店铺
    public  function SerachWechat($name)
    {
        $wechat=M('wechat')->where("name like '%$name%'")->select();
        return $wechat;
    }

//根据店铺名称，删除某店铺
    public function DeleteWechat($name)
    {
        $wechat = M("wechat"); // 实例化shop对象

        $wechat->where("name ='$name'")->delete();
    }
    //删除某一个店铺
    public function DeleteWechatById($id)
    {
        $wechat=M("wechat");
        $wechat ->where("id=$id")->delete();
    }
    //更新店铺信息
    public function UpdateWechatInfo($id,$name,$appid, $appsecret,$token,$original_id)
    {
        $wechat = M("wechat"); // 实例化User对象
        $data['name'] = $name;
        $data['appid'] = $appid;
        $data['appsecret']=$appsecret;
        $data['token'] = $token;
        $data['original_id'] = $original_id;
        $wechat->where("id=$id")->save($data); // 根据条件更新记录
    }

}