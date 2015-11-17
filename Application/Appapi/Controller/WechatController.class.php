<?php
namespace Appapi\Controller;
use Think\Controller;
class WechatController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加店铺
    public function AddWechat()
    {
        $id=uuid();
        $name = I('post.name');
        $appid=I('post.appid');
        $appsecret=I('post.appsecret');
        $token=I('post.token');
        $original_id=I('post.original_id');
        $wechat=D('wechat')->AddWechat($id,$name,$appid, $appsecret,$token,$original_id);
        print_r($wechat[id]);
    }
//查找店铺
    public function SerachWechat()
    {
        $shopname=I('post.name');
        $wechat=D('wechat')->SerachWechat($shopname);
        print_r($wechat);
    }

    //删除用户喜欢的店铺
    public function DeleteWechat()
    {
        $name=I('post.name');
        D('wechat')->DeleteWechat($name);
    }

    public function DeleteWechatById()
    {
        $id=I('post.id');
        D('wechat')->DeleteWechatById($id);
    }

    public function UpdateWechatInfo()
    {
        $id=I('post.id');
        $name = I('post.name');
        $appid=I('post.appid');
        $appsecret=I('post.appsecret');
        $token=I('post.token');
        $original_id=I('post.original_id');
        D('wechat')->UpdateWechatInfo($id,$name,$appid, $appsecret,$token,$original_id);
    }
}