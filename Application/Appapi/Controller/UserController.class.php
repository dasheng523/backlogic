<?php
namespace Appapi\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加店铺
    public function AddUser()
    {
        $id=uuid();
        $score = I('post.score');
        $phone=I('post.phone');
        $nickname=I('post.nickname');
        $sex=I('post.sex');
        $headimgurl=I('post.headimgurl');
        $ctime=('post.ctime');
        $utime=('post.utime');
        $userinfo=D('user')->AddUser($id,$score,$phone,$nickname,$sex,$headimgurl,$ctime,$utime);
        print_r($userinfo[id]);
    }
//查找店铺
    public function SerachUser()
    {
        $nickname=I('post.nickname');
        $userinfo=D('user')->SerachUser($nickname);
        print_r($userinfo);
    }
    //删除店铺
    public function DeleteUserById()
    {
        $id=I('post.id');
        D('user')->DeleteUserById($id);
    }

    public function UpdateUserInfo()
    {
        $id=I('post.id');
        $score = I('post.score');
        $phone=I('post.phone');
        $nickname=I('post.nickname');
        $sex=I('post.sex');
        $headimgurl=I('post.headimgurl');
        $ctime=('post.ctime');
        $utime=('post.utime');
        D('user')->UpdateUserInfo($id,$score,$phone,$nickname,$sex,$headimgurl,$ctime,$utime);
    }
}