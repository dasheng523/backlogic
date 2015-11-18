<?php
namespace Appapi\Controller;
use Think\Controller;
use Appapi\Logic\TestLogic;
class TestController extends Controller {
    public function testrun(){
        $data = TestLogic::testa();
        echo json_encode($data);
    }

    public function getShopInfo(){
        $id = I('post.id');
        $data = TestLogic::getShopInfo($id);
        return_json($data);
    }

    public function getShops(){
        $page = I('post.page');
        $category_id = I('post.category');
        $data = TestLogic::getShopList($page,$category_id);
        return_json($data);
    }
}