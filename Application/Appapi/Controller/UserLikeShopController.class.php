<?php
namespace Appapi\Controller;
use Think\Controller;
class UserLikeShopController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加用户喜欢的店铺
    public function AddUserLikeShop()
    {
        $id=uuid();
        $userid = I('post.user_id');
        $shopid=I('post.shop_id');
        $ctime=I('post.ctime');
        $userlikeshop=D('user_like_shop')->AddUserLikeGoods($id,$userid,$shopid,$ctime);
        print_r($userlikeshop[id]);
    }
//查找用户喜欢的店铺
    public function SerachUerLikeShop()
    {
        $userid=I('post.user_id');
        $userlikeshop=D('user_like_shop')->SerachUserLikeShop($userid);
        print_r($userlikeshop);
    }
    //删除用户喜欢的店铺
    public function deleteUserLikeShop()
    {
        $userid = I('post.user_id');
        $shopid=I('post.shop_id');
        D('user_like_shop')->DeleteUserLikeShop($userid,$shopid);
    }
    //删除用户
    public function deleteUser()
    {
        $shopid=I('post.id');
        D('user_like_shop')->DeleteUserLikeShopById($shopid);
    }
    public function UpdateUserLikeShop()
    {
        $id=I('post.id');
        $userid = I('post.user_id');
        $shopid=I('post.shop_id');
        $ctime=I('post.ctime');
        D('user_like_shop')->UpdateShopInfo($id,$userid,$shopid,$ctime);
    }
}