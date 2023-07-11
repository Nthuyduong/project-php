<?php
session_start();
require_once("../models/model_user.php");
$currentPass=md5($_POST["currentPass"]);
$newPass=md5($_POST["newPass"]);
$renewPass=md5($_POST["renewPass"]);

$user=new model_user();
$checkcurrentPass= $user->CheckUserAccountByEmail($_SESSION["user_email"]);
if($checkcurrentPass==true){
    $row=$user->data;
    //$row["Password"] is passDB
    if($currentPass==$row["Password"])
    {   
        if($currentPass==$newPass)
            echo "same_password_err";
        else{
            if($newPass!=$renewPass){
                echo "password_mismatch";
                
            }else{
                $ketqua=$user->UpdatePassUser($newPass,$_SESSION["user_email"]);
                    if($ketqua==true)
                    {
                        echo "success";
                    }else
                        echo "fail";
            }
        }
        
            
    }else
        echo "invalid_current_password";
    // {   echo "email: ".$_SESSION["user_email"] .$row["Password"];
    //     echo "<p> </p>" .$row["Password"];
    //     echo "invalid_current_password";
    // }
    // else if($newPass!=$renewPass)
    //     echo "password_mismatch";
    // else{
    //     
    // }
}
?>