<?php

namespace Appapi\Model;
use Think\Model;
class UserLikeShopModel extends Model{
    //添加用户喜欢的店铺信息
    public function AddUserLikeShop($id,$user_id,$shop_id,$ctime)
    {
        $userlikeshop = M("user_like_shop"); // 实例化User对象
        $data['id']=$id;
        $data['user_id'] = $user_id;
        $data['shop_id'] = $shop_id;
        $data['ctime']=$ctime;
        $userlikeshop->add($data);
        return $userlikeshop;
    }
    //根据用户ID,搜索用户喜欢的店铺
    public  function SerachUserLikeShop($userid)
    {
        $userlike=M('user_like_shop')->where("user_id = $userid")->select();
        return $userlike;
    }

//根据用户喜欢店铺名称，删除某店铺
    public function DeleteUserLikeShop($userid,$shopid)
    {
        $userlikeshop = M("user_like_shop"); // 实例化userlikeshop对象

        $userlikeshop->where("user_id =$userid and shop_id=$shopid")->delete();
    }
    //删除某一个店铺
    public function DeleteUserLikeShopById($id)
    {
        $userlikeshop=M("user_like_shop");
        $userlikeshop ->where("id=$id")->delete();
    }
    //更新店铺信息
    public function UpdateShopInfo($id,$user_id,$shop_id,$ctime)
    {
        $userlikeshop = M("user_like_shop"); // 实例化User对象
        $data['user_id'] = $user_id;
        $data['shop_id'] = $shop_id;
        $data['ctime']=$ctime;
        $userlikeshop->where("id=$id")->save($data); // 根据条件更新记录
    }

}