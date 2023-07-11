<?php
session_start();
require("../models/model_user.php");
require_once("controller_phpmailer.php");
if(isset($_REQUEST["b2"])==false){
    die("<p>Error</p>");
}else{
    $id=$_SESSION["userID_forgotmail"];
    $code=$_REQUEST["code"];
    $user=new model_user();
    $ketqua=$user->CheckVerificationCode($id,$code);
    if($ketqua==false){
        echo "ERROR DB";
    }else{
        $row=$user->data;
        if($row==null){
            $alert_title= "Notification";
            $alert="The  verification code is FALSE. Please try again";
            $link_tieptuc="../views/index/user_check_code_forgotpass.php";
            require_once("../views/includes/alert.php");
        }else{
            //check time created_at > 10min
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $created_at=strtotime($row["Created_at"]);
            $currentTime=strtotime(date('Y-m-d H:i:s'));
            $diftime=$currentTime - $created_at;
            echo $diftime;
            if($diftime <= 600){
                
                echo $diftime;
                header("location:../views/index/reset_password.php");
            }else{
                // over time
                $alert_title= "Notification";
                $alert="The verification code timed out. Please check your email and confirm again";
                $link_tieptuc="../views/index/user_check_code_forgotpass.php";

                // creat new code
                $code=$code=random_int(1111111,9999999);
                $user->UpdateCodeCheckMail($id,$code);
                sendEmailUserForgotPassword($_SESSION["userMail_forgotmail"],$_SESSION["userName_forgotmail"],$code);

                require_once("../views/includes/alert.php");
            }
            
        }
    }

}
?>