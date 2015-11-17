<?php
namespace Appapi\Controller;
use Think\Controller;
class MediaController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加店铺
    public function AddMedia()
    {
        $id=uuid();
        $md5 = I('post.md5');
        $media_url=I('post.media_url');
        $media_path=I('post.media_path');
        $media_id_wechat=I('post.media_id_wechat');
        $media=D('media')->AddMedia($id,$md5,$media_url,$media_path,$media_id_wechat);
        print_r($media[id]);
    }
//查找店铺
/*
    public function SerachShop()
    {
        $shopname=I('post.name');
        $shopInfo=D('media')->SerachShop($shopname);
        print_r($shopInfo);
    }
*/
    //删除店铺
    public function DeleteMediaById()
    {
        $id=I('post.id');
        D('media')->DeleteMediaById($id);
    }

 public function UpdateMediaInfo()
    {
        $id=I('post.id');
        $md5 = I('post.md5');
        $media_url=I('post.media_url');
        $media_path=I('post.media_path');
        $media_id_wechat=I('post.media_id_wechat');
        D('media')->UpdateMediaInfo($id,$md5,$media_url,$media_path,$media_id_wechat);
    }
}