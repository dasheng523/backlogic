<?php
namespace Appapi\Controller;
use Think\Controller;
class UserTaskController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加用户喜欢的店铺
    public function AddUserTask()
    {
        $id=uuid();
        $userid = I('post.user_id');
        $taskid=I('post.task_id');
        $ctime=I('post.ctime');
        $usertask=D('user_task')->AddUserTask($id,$userid,$taskid,$ctime);
        print_r($usertask[id]);
    }
//查找用户喜欢的商品
    public function SerachUserTask()
    {
        $userid=I('post.user_id');
        $usertask=D('user_task')->SerachUserTask($userid);
        print_r($usertask);
    }
    //删除用户喜欢的店铺
    public function DeleteUserTask()
    {
        $userid = I('post.user_id');
        $taskid=I('post.task_id');
        D('user_task')->DeleteUserTask($userid,$taskid);
    }
    //删除用户
    public function DeleteUserTaskById()
    {
        $id=I('post.id');
        D('user_task')->DeleteUserTaskById($id);
    }
    public function UpdatUserTask()
    {
        $id=I('post.id');
        $userid = I('post.user_id');
        $titleid=I('post.title_id');
        $ctime=I('post.ctime');
        D('user_task')->UpdatUserTask($id,$userid,$titleid,$ctime);
    }
}