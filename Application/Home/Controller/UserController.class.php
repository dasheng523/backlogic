<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index()
    {
        for($i=1;$i<=9;$i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $i."*".$j."=".$i*$j;
                echo "&nbsp;&nbsp";
            }
            echo "<br>";
        }
    }
}