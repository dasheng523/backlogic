<?php

namespace Appapi\Model;
use Think\Model;
class ShopModel extends Model{
    //添加店铺信息
    public function AddShop($id,$name,$address,$mobile,$ower_id,$status,$banner_media,$blicence_media)
    {
        $shop = M("shop"); // 实例化User对象
        $data['id']=$id;
        $data['name'] = $name;
        $data['address'] = $address;
        $data['mobile']=$mobile;
        $data['ower_id'] = $ower_id;
        $data['status'] = $status;
        $data['banner_media']=$banner_media;
        $data['blicence_media']=$blicence_media;
        $shop->add($data);
        return $shop;
    }
    //根据店铺名称，搜索某店铺
    public  function SerachShop($name)
    {
        $shop=M('shop')->where("name like '%$name%'")->select();
        return $shop;
    }

//根据店铺名称，删除某店铺
    public function DeleteShop($name)
    {
        $shop = M("shop"); // 实例化shop对象

        $shop->where("name ='$name'")->delete();
    }
    //删除某一个店铺
    public function DeleteShopsById($id)
    {
        $shop=M("shop");
        $shop ->where("id=$id")->delete();
    }
    //更新店铺信息
    public function UpdateShopInfo($id,$name,$address,$mobile,$ower_id,$status,$banner_media,$blicence_media)
    {
        $shop = M("shop"); // 实例化User对象
        $data['name'] = $name;
        $data['address'] = $address;
        $data['mobile']=$mobile;
        $data['ower_id'] = $ower_id;
        $data['status'] = $status;
        $data['banner_media']=$banner_media;
        $data['blicence_media']=$blicence_media;
        $shop->where("id=$id")->save($data); // 根据条件更新记录
    }

}