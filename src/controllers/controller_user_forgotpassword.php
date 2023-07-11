<?php
require_once "../models/model_user.php";
require "controller_phpmailer.php";
session_start();

if(isset($_REQUEST["b1"])==false){
    die("<p>Error submit form forgot password</p>");
}else{
    $email=$_REQUEST["txtemail"];
    $user=new model_user();
    $ketqua=$user->CheckUserAccountByEmail($email);
    if($ketqua==false){
        echo "Database query error";
    }else{
        $row=$user->data;
        if($row==null){
            $alert_title= "Notification";
            $alert="We have sent the verification code to your email. Please check your email";
            $link_tieptuc="../views/index/home.php";
            require "../views/includes/alert.php";
        }else{
            $user_name=$row["Name"];
            $id=$row["ID"];
            $code=$code=random_int(1111111,9999999);
            //kiểm tra tồn tại customerID trong csdl chưa, nếu chưa insert, nếu có rồi update
            $checkEmail=$user->CheckEmailUser($id);
            if($checkEmail==false)
                echo "error";
            else{
                $row=$user->data;
                if($row==null){
                    $user->AddCodeCheckMail($id,$code);
                }
                else{
                    $user->UpdateCodeCheckMail($id,$code);
                }
                //send code 
                $ketqua=sendEmailUserForgotPassword($email,$user_name,$code);
                if($ketqua==false)
                    echo "SEND MAIL FAIL!";
                else {
                    $_SESSION["userID_forgotmail"]=$id;
                    $_SESSION["userMail_forgotmail"]=$email;
                    $_SESSION["userName_forgotmail"]=$user_name;
                    $alert_title= "Notification";
                    $alert="We have sent the verification code to your email. Please check your email";
                    $link_tieptuc="../views/index/user_check_code_forgotpass.php";
                    require "../views/includes/alert.php";
                }
            }
        }    
    } 
}
   
?>