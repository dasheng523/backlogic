<?php
namespace Appapi\Controller;
use Think\Controller;
class UserLikeGoodsController extends Controller {
    //添加用户喜欢的店铺
    public function AddUserLikeGoods()
    {
        $id=uuid();
        $userid = I('post.user_id');
        $goodsid=I('post.goods_id');
        $ctime=I('post.ctime');
        $userlikegoods=D('user_like_goods')->AddUserLikeShop($id,$userid,$goodsid,$ctime);
        print_r($userlikegoods[id]);
    }
//查找用户喜欢的商品
    public function SerachUerLikeGoods()
    {
        $userid=I('post.user_id');
        $userlikegoods=D('user_like_goods')->SerachUserlikegoods($userid);
        print_r($userlikegoods);
    }
    //删除用户喜欢的店铺
    public function deleteUserLikeGoods()
    {
        $userid = I('post.user_id');
        $goodsid=I('post.goods_id');
        D('user_like_goods')->DeleteUserlikegoods($userid,$goodsid);
    }
    //删除用户
    public function DeleteUserlikegoodsById()
    {
        $goodsid=I('post.id');
        D('user_like_goods')->DeleteUserlikegoodsById($goodsid);
    }
    public function UpdateUserLikeGoods()
    {
        $id=I('post.id');
        $userid = I('post.user_id');
        $goodsid=I('post.goods_id');
        $ctime=I('post.ctime');
        D('user_like_goods')->UpdatUserlikegoods($id,$userid,$goodsid,$ctime);
    }
}