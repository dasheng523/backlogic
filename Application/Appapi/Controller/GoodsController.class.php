<?php
namespace Appapi\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function login(){
        $info = D('User')->login("huangyesheng","123456");        print_r($info);
    }
    //添加商品信息
   public function AddGoods()
   {
       $id=uuid();
       $goodsname=I('post.goods_name');
       $origin_price=I('post.origin_price');
       $new_price=I('post.new_price');
       $describe=I('post.describe');
       $shop_id=I('post.shop_id');
       $shop_notice=I('post.shop_notice');
       $goodsinfos=D('User')->AddGoods($id,$goodsname,$origin_price,$new_price,$describe,$shop_id,$shop_notice);
       print_r($goodsinfos);

   }
    public function SerachGoods()
    {
        $goods_name=I('post.goods_name');
        $goodsInfo=D('User')->SerachGoods($goods_name);
        print_r($goodsInfo);
    }

    public function DeleteGoods()
    {
       $id=I('post.id');
        D('goods')->DeleteGoodsById($id);
    }

    public function UpdateGoodsInfo()
    {
        $id=I('post.id');
        $goodsname=I('post.goods_name');
        $origin_price=I('post.origin_price');
        $new_price=I('post.new_price');
        $describe=I('post.describe');
        $shop_id=I('post.shop_id');
        $shop_notice=I('post.shop_notice');
        D('goods')->UpdateGoodsInfo($id,$goodsname,$origin_price,$new_price,$describe,$shop_id,$shop_notice);
    }
}