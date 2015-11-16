<?php

function uuid(){
    return md5(uniqid() . rand(9999));
}