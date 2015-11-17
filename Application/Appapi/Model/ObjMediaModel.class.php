<?php

namespace Appapi\Model;
use Think\Model;
class ObjMediaModel extends Model{
    //添加分类信息
    public function AddObjMedia($id,$obj_id,$media_id)
    {
        $objmedia = M("obj_media"); // 实例化User对象
        $data['id']=$id;
        $data['obj_id'] = $obj_id;
        $data['media_id'] = $media_id;
        $objmedia->add($data);
        return $objmedia;
    }
    //根据分类名称查找
    public  function SerachObjMedia($objId)
    {
        $objmedia=M('obj_media')->where("obj_id like '%$objId%'")->select();
        return $objmedia;
    }

    //删除某一个分类
    public function DeleteObjMediaById($id)
    {
        $objmedia=M("obj_media");
        $objmedia ->where("id=$id")->delete();
    }
    //更新商品信息
    public function UpdateObjMediaInfo($id,$obj_id,$media_id)
    {
        $objmedia = M("obj_media"); // 实例化User对象
        $data['obj_id'] = $obj_id;
        $data['media_id'] = $media_id;
        $objmedia->where("id=$id")->save($data); // 根据条件更新记录
    }

}