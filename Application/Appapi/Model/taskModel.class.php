<?php

namespace Appapi\Model;
use Think\Model;
class TaskModel extends Model{
    //添加店铺信息
    public function AddTask($id,$title,$intro,$score,$task_type,$stime,$etime,$limit_amout)
    {
        $task = M("task"); // 实例化User对象
        $data['id']=$id;
        $data['title'] = $title;
        $data['intro'] = $intro;
        $data['score']=$score;
        $data['task_type'] = $task_type;
        $data['stime'] = $stime;
        $data['etime']=$etime;
        $data['limit_amout']=$limit_amout;
        $task->add($data);
        return $task;
    }
    //根据店铺名称，搜索某店铺
    public  function SerachTask($title)
    {
        $task=M('task')->where("title like '%$title%'")->select();
        return $task;
    }

//根据店铺名称，删除某店铺
    public function DeleteTask($title)
    {
        $task = M("task"); // 实例化shop对象

        $task->where("title ='$title'")->delete();
    }
    //删除某一个店铺
    public function DeleteTaskById($id)
    {
        $task=M("task");
        $task ->where("id=$id")->delete();
    }
    //更新店铺信息
    public function UpdateTaskInfo($id,$title,$intro,$score,$task_type,$stime,$etime,$limit_amout)
    {
        $task = M("task"); // 实例化User对象
        $data['title'] = $title;
        $data['intro'] = $intro;
        $data['score']=$score;
        $data['task_type'] = $task_type;
        $data['stime'] = $stime;
        $data['etime']=$etime;
        $data['limit_amout']=$limit_amout;
        $task->where("id=$id")->save($data); // 根据条件更新记录
    }

}