<?php
namespace Appapi\Controller;
use Think\Controller;
class UserWechatController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加用户喜欢的店铺
    public function AddUserWechat()
    {
        $id=uuid();
        $userid = I('post.user_id');
        $openid=I('post.open_id');
        $nickname=I('post.nickname');
        $sex=I('post.sex');
        $city=I('post.city');
        $country=I('post.country');
        $province=I('post.province');
        $language=I('post.language');
        $headimgurl=I('post.headimgurl');
        $subscribe_time=I('post.subscribe_time');
        $remark=I('post.remark');
        $groupid=I('post.groupid');
        $unionid=I('post.unionid');
        $UserWechat=D('user_wechat')->AddUserWechat($id,$userid,$openid,$nickname,$sex,$city,$country,$province,$language,$headimgurl,$subscribe_time,$remark,$groupid,$unionid);
        print_r($UserWechat[id]);
    }
//根据用户名查寻
    public function SerachUserWechat()
    {
        $nickname=I('post.nickname');
        $UserWechat=D('user_wechat')->SerachUserWechat($nickname);
        print_r($UserWechat);
    }

    //删除用户
    public function DeletUserWechatById()
    {
        $id=I('post.id');
        D('user_wechat')->DeletUserWechatById($id);
    }
    public function UpdateUserWechat()
    {
        $id=I('post.id');
        $userid = I('post.user_id');
        $openid=I('post.open_id');
        $nickname=I('post.nickname');
        $sex=I('post.sex');
        $city=I('post.city');
        $country=I('post.country');
        $province=I('post.province');
        $language=I('post.language');
        $headimgurl=I('post.headimgurl');
        $subscribe_time=I('post.subscribe_time');
        $remark=I('post.remark');
        $groupid=I('post.groupid');
        $unionid=I('post.unionid');
        D('user_wechat')->UpdateUserWechat($id,$userid,$openid,$nickname,$sex,$city,$country,$province,$language,$headimgurl,$subscribe_time,$remark,$groupid,$unionid);
    }
}