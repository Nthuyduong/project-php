<?php
require("../models/model_review.php");
session_start();
if(isset($_REQUEST["b1"])==false){
    die("<h1>error</h1>");
}else{
    $rating=$_REQUEST["rating"];
    $commemt=$_REQUEST["message"];
    $pid=$_REQUEST["pid"];
    $cid=$_REQUEST["cid"];
    $review=new model_review();
    $kq=$review->addReview($pid,$cid,$commemt,$rating);
    if($kq==false){
        echo "Loi truy van CSDL";
    }else{
        $alert_title="Notification";
        $alert="Add Review Succes";
        $link_tieptuc="../views/index/product-detail.php?pid=$pid";
        require_once("../views/includes/alert.php");
    }
}
?>