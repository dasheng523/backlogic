<?php

namespace Appapi\Model;
use Think\Model;
class CategoryMode extends Model{
    //添加分类信息
    public function AddCategory($id,$title,$intro)
    {
        $category = M("category"); // 实例化User对象
        $data['id']=$id;
        $data['title'] = $title;
        $data['intro'] = $intro;
        $category->add($data);
        return $category;
    }
    //根据分类名称查找
    public  function SerachCategory($title)
    {
        $category=M('category')->where("goods_name like '%$title%'")->select();
        return $category;
    }

    //删除某一个分类
    public function DeleteCategoryById($id)
    {
        $category=M("category");
        $category ->where("id=$id")->delete();
    }
    //更新商品信息
    public function UpdateCategoryInfo($id,$title,$intro)
    {
        $category = M("category"); // 实例化User对象
        $data['title'] = $title;
        $data['intro'] = $intro;
        $category->where("id=$id")->save($data); // 根据条件更新记录
    }

}