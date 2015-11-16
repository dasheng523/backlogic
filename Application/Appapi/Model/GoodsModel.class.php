<?php

namespace Appapi\Model;
use Think\Model;
class GoodsModel extends Model{
    //添加商品
    public function AddGoods($id,$goods_name,$origin_price,$new_price,$describe,$shop_id,$shop_notice)
    {
        $goods = M("goods"); // 实例化User对象
        $data['id']=$id;
        $data['goods_name'] = $goods_name;
        $data['origin_price'] = $origin_price;
        $data['new_price']=$new_price;
        $data['describe'] = $describe;
      //  $data['img'] = $img;
        $data['shop_id']=$shop_id;
      //  $data['instructions'] = $instructions;
        $data['shop_notice']=$shop_notice;
        $goods->add($data);
        return $goods;
    }
    //根据商号名称，搜索某商品
    public  function SerachGoods($goods_name)
    {
        $goods=M('goods')->where("goods_name like '%$goods_name%'")->select();
        return $goods;
    }

//根据商品名称，删除某商品
    public function DeleteGoods($goods_name)
    {
        $goods = M("goods"); // 实例化User对象

        $goods->where("goods_name = $goods_name")->delete(); // 删除所有状态为0的用户数据
    }
    //删除某一个商品
    public function DeleteGoodsById($id)
    {
        $goods=M("goods");
        $goods ->where("id=$id")->delete();
    }
    //更新商品信息
    public function UpdateGoodsInfo($id,$goods_name,$origin_price,$new_price,$describe,$shop_id,$shop_notice)
    {
        $goods = M("goods"); // 实例化User对象
        $data['goods_name'] = $goods_name;
        $data['origin_price'] = $origin_price;
        $data['new_price']=$new_price;
        $data['describe'] = $describe;
    //    $data['img'] = $img;
        $data['shop_id']=$shop_id;
      //  $data['instructions'] = $instructions;
        $data['shop_notice']=$shop_notice;
        $goods->where("id=$id")->save($data); // 根据条件更新记录
    }

}