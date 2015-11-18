<?php

//生成uuid
function uuid(){
    return md5(uniqid() . rand(9999));
}

function return_json($data){
    echo json_encode($data);
}

//ystoken转换uid
function convert_uid($ystoken){
    // TODO
    return 1;
}