<?php
namespace Face\Model;
use Think\Model;
class FoodimagesModel extends Model {

    public function login(){
        return $this->find();
    }

    public function getFoodimages($foodname){
        return M()->table('meishijiefoods')->where('meishijiefoods.title='.$foodname)->select();
    }


}