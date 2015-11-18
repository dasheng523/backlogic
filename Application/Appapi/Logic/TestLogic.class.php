<?php
namespace Appapi\Logic;
class TestLogic {

    public static function testa(){
        return "ok";
    }

    public static function getShopInfo($shopid){
        $shopinfo = M("shop")->where(array("id"=>$shopid,"status"=>1))->find();
        $banner_url = M('media')->where(array("id"=>$shopinfo['banner_media']))->getField('media_path');
        $shopinfo['banner_url'] = $banner_url;
        return $shopinfo;
    }

    public static function getShopList($page,$category_id){
        $shopid_sql = M('shop_category')->where(array('category_id'=>$category_id))->field("shop_id")->select(false);
        $pagesize = C("page_size");
        $shoplist = M('shop')->where("id in " . $shopid_sql)->order('score desc')->page("$page,$pagesize")->select();

        return $shoplist;
    }
}