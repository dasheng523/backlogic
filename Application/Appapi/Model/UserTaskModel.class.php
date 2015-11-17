<?php

namespace Appapi\Model;
use Think\Model;
class UserTaskModel extends Model{
    //添加用户喜欢的商品信息
    public function AddUserTask($id,$user_id,$task_id,$ctime)
    {
        $user_task = M("user_task"); // 实例化User对象
        $data['id']=$id;
        $data['user_id'] = $user_id;
        $data['task_id'] = $task_id;
        $data['ctime']=$ctime;
        $user_task->add($data);
        return $user_task;
    }
    //根据用户ID,搜索用户喜欢的商品
    public  function SerachUserTask($userid)
    {
        $usertask=M('user_task')->where("user_id = $userid")->select();
        return $usertask;
    }

//根据用户喜欢商品名称，删除某商品
    public function DeleteUserTask($userid,$taskid)
    {
        $usertask = M("user_task"); // 实例化userlikeshop对象

        $usertask->where("user_id =$userid and task_id=$taskid")->delete();
    }
    //删除某一个用户
    public function DeleteUserTaskById($id)
    {
        $usertask=M("user_task");
        $usertask ->where("id=$id")->delete();
    }
    //更新用户喜欢的商品信息
    public function UpdatUserTask($id,$user_id,$task_id,$ctime)
    {
        $usertask = M("user_task"); // 实例化User对象
        $data['user_id'] = $user_id;
        $data['task_id'] = $task_id;
        $data['ctime']=$ctime;
        $usertask->where("id=$id")->save($data); // 根据条件更新记录
    }

}