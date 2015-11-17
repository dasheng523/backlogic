<?php
namespace Appapi\Controller;
use Think\Controller;
class ObjMediaController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加商品信息
    public function AddObjMedia()
    {
        $id=uuid();
        $obj_id=I('post.obj_id');
         $media_id=I('post.media_id');
        $objmedia=D('obj_media')->AddObjMedia($id,$obj_id,$media_id);
        print_r($objmedia);

    }
    public function SerachObjMedia()
    {
        $title=I('post.title');
        $objmedia=D('obj_media')->SerachObjMedia($title);
        print_r($objmedia);
    }

    public function DeleteObjMediaById()
    {
        $id=I('post.id');
        D('obj_media')->DeleteObjMediaById($id);
    }

    public function UpdateObjMediaInfo()
    {
        $id=I('post.id');
        $obj_id=I('post.obj_id');
        $media_id=I('post.media_id');
        D('obj_media')->UpdateObjMediaInfo($id,$obj_id,$media_id);
    }
}