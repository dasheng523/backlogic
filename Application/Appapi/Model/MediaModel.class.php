<?php

namespace Appapi\Model;
use Think\Model;
class MediaModel extends Model{
    //添加商品
    public function AddMedia($id,$md5,$media_url,$media_path,$media_id_wechat)
    {
        $media = M("media"); // 实例化User对象
        $data['id']=$id;
        $data['md5'] = $md5;
        $data['media_url'] = $media_url;
        $data['media_path']=$media_path;
        $data['media_id_wechat']=$media_id_wechat;
        $media->add($data);
        return $media;
    }
    //根据商号名称，搜索某商品
   /* public  function SerachMedia($goods_name)
    {
        $media=M('media')->where("goods_name like '%$goods_name%'")->select();
        return $media;
    }
*/
    //删除某一个商品
    public function DeleteMediaById($id)
    {
        $media=M("media");
        $media ->where("id=$id")->delete();
    }
    //更新商品信息
    public function UpdateMediaInfo($id,$md5,$media_url,$media_path,$media_id_wechat)
    {
        $media = M("media"); // 实例化User对象
        $data['md5'] = $md5;
        $data['media_url'] = $media_url;
        $data['media_path']=$media_path;
        $data['media_id_wechat']=$media_id_wechat;
        $media->where("id=$id")->save($data); // 根据条件更新记录
    }

}