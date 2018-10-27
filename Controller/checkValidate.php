<?php
 session_start();
require_once "../Model/Model.php";
$toeic = new model();
//$toeic=new toiec();

/*bat dau kiem tra dang nhap username va mat khau*/
if(isset($_GET['username_login']) && isset($_GET['password_login']) ){ 
        $username = $_GET['username_login'];
        $password = $_GET['password_login'];
        
        if($password == ""){
            echo 1;
            return;
        }
        else if(!preg_match("/^[0-9a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]+$/",$password)) 
        {
                 echo 2;
                return;
        }
        else if($username != ""){
            $kq = $toeic->login_check_password_username($username,$password);
            if($kq != 0){
                $_SESSION['login'] = $_GET['username_login'];
                echo 0;
                return;
            }else{
                echo 3;
                return;
            }
        }
    }

/*ket thuc kiem tra dang nhap username va mat khau*/

/*bat dau kiem tra dang nhap username*/
if(isset($_GET['username_login']) ){ 
        $username = $_GET['username_login'];
        if($username == ""){
            echo 1;
            return;
        }
        else if(!preg_match("/^[0-9a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]+$/",$username)) 
        {
                 echo 2;
                return;
        }
        else if($username != ""){
            $kq = $toeic->login_check_username($username);
            if($kq != 0){
                echo 0;
                return;
            }else{
                echo 3;
                return;
            }
        }
    }

/*ket thuc kiem tra dang nhap username*/
/* bat dau dang ky va dang nhap*/
if(isset($_GET['username']) && isset($_GET['user']) ){ 
        $username = $_GET['username'];
        $user = $_GET['user'];
        if($username == ""){
            echo 1;
            return;
        }
        else if(!preg_match("/^[0-9a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]+$/",$username)) 
        {
                 echo 2;
                return;
        }
        else if($username != ""){
            $kq = $toeic->checkusername($username,$user);
            if($kq != 0){
                echo 3;
                return;
            }else{
                echo 0;
                return;
            }
        }
    }

 if(isset($_GET['email_register']) && isset($_GET['user_register'])){ 
        $email = $_GET['email_register'];
        $user = $_GET['user_register'];
        if($email == ""){
            echo 1;
            return;
        }
        else if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE) 
        {
                 echo 2;
                return;
        }
        else if($email != ""){
            $kq = $toeic->checkemail($email,$user);
            if($kq != 0){
                echo 3;
                return;
            }else{
                echo 0;
                return;
            }
        }
    }

    if(isset($_GET['password'] ) && isset($_GET['repassword'])){ 
        $password = $_GET['password'];
        $repassword = $_GET['repassword'];
        if($password == ""){
            echo 1;
            return;
        }
        else if(!preg_match("/^[0-9a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/",$password)) 
        {
             echo 2;
            return;
        }
        else if($password != "" &&  $repassword == ""){
            echo 0;
            return;
        }
        else if($password != "" && $repassword != ""){
            if($password != $repassword){
                echo 3;
                return;
            }else if($password == $repassword){
                echo 0;
                return;
            }
        }
        
   
    }

    if(isset($_GET['pass']) && isset($_GET['repass'])){ 
        $password = $_GET['pass'];
        $repassword = $_GET['repass'];

        if($password == "" && $repassword != "" || $password == "" && $repassword == "" ){
            echo 1;
            return;
        }else
         if( $password != "" && $repassword == ""){
                echo 2;
                return;
        }else 
            if($password != "" && $repassword != ""){
                if($password != $repassword){
                    echo 3;
                    return;
                }else 
                   if($password == $repassword ){
                    echo 0;
                    return;
                   }
            }
        
        
     } 

    if(isset($_GET['email_form']) && isset($_GET['password_form'])  && isset($_GET['user_form']) && isset($_GET['username_form']) ){
        $email = $_GET['email_form'];
        $password = $_GET['password_form'];
         $user = $_GET['user_form'];
        $username = $_GET['username_form'];

        $kq = $toeic->form_register($email,$password,$user,$username);
        if($kq != 0){
            echo 1;
            return ;
        }
         if($kq == 0){
            echo 0;
            return ;
        }

    } 
     
     /*ket thuc dang ky va dang nhap*/

?>