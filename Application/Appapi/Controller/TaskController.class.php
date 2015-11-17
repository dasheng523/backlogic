<?php
namespace Appapi\Controller;
use Think\Controller;
class TaskController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    //添加店铺
    public function AddTask()
    {
        $id=uuid();
        $title = I('post.title');
        $intro=I('post.intro');
        $score=I('post.score');
        $task_type=I('post.task_type');
        $stime=I('post.stime');
        $etime=('post.etime');
        $limit_amout=('post.limit_amout');
        $task=D('task')->AddTask($id,$title,$intro,$score,$task_type,$stime,$etime,$limit_amout);
        print_r($task[id]);
    }
//查找店铺
    public function SerachTask()
    {
        $title=I('post.title');
        $task=D('task')->SerachTask($title);
        print_r($task);
    }
    //删除店铺
    public function DeleteTaskById()
    {
        $id=I('post.id');
        D('task')->DeleteTaskById($id);
    }

    public function UpdateTaskInfo()
    {
        $id=I('post.id');
        $title = I('post.title');
        $intro=I('post.intro');
        $score=I('post.score');
        $task_type=I('post.task_type');
        $stime=I('post.stime');
        $etime=('post.etime');
        $limit_amout=('post.limit_amout');
        D('task')->UpdateTaskInfo($id,$title,$intro,$score,$task_type,$stime,$etime,$limit_amout);
    }
}