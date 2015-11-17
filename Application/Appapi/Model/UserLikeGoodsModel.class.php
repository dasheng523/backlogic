<?php

namespace Appapi\Model;
use Think\Model;
class UserLikeGoodsModel extends Model{
    //添加用户喜欢的商品信息
    public function AddUserLikeGoods($id,$user_id,$goods_id,$ctime)
    {
        $userlikegoods = M("user_like_goods"); // 实例化User对象
        $data['id']=$id;
        $data['user_id'] = $user_id;
        $data['goods_id'] = $goods_id;
        $data['ctime']=$ctime;
        $userlikegoods->add($data);
        return $userlikegoods;
    }
    //根据用户ID,搜索用户喜欢的商品
    public  function SerachUserlikegoods($userid)
    {
        $userlikegoods=M('user_like_goods')->where("user_id = $userid")->select();
        return $userlikegoods;
    }

//根据用户喜欢商品名称，删除某商品
    public function DeleteUserlikegoods($userid,$goodsid)
    {
        $userlikegoods = M("user_like_goods"); // 实例化userlikeshop对象

        $userlikegoods->where("user_id =$userid and goods_id=$goodsid")->delete();
    }
    //删除某一个用户
    public function DeleteUserlikegoodsById($id)
    {
        $userlikegoods=M("user_like_goods");
        $userlikegoods ->where("id=$id")->delete();
    }
    //更新用户喜欢的商品信息
    public function UpdatUserlikegoods($id,$user_id,$goods_id,$ctime)
    {
        $userlikegoods = M("user_like_goods"); // 实例化User对象
        $data['user_id'] = $user_id;
        $data['goods_id'] = $goods_id;
        $data['ctime']=$ctime;
        $userlikegoods->where("id=$id")->save($data); // 根据条件更新记录
    }

}