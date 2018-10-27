
<link rel="stylesheet" href="css/Thanh-Style.css"/>

<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $kq = $toeic->checkLogin($_POST['email'], $_POST['password']);
    if (!$kq) {
        echo "<script>alert('Chưa đăng nhập');</script>";
    } else {
        $row=$kq->fetch_assoc();
        echo "<script>alert('Đã đăng nhập: ".$row['IdUser']."');</script>";
    }
}
?>

<div id="container" class="">  
    <div id="background"></div>
    <div id="login-form" class="col-xl-3">
        <section class="alert alert-dark">
            <form action="View/success.php" method="post" name="form" id="form" enctype="mutipart/form-data" >

                <table width="100%">
                    <tr>
                        <td height="200" colspan="3"><img src="img/layout/login-logo.jpg"
                          style="border-radius: 100px;margin: 40px 0px 10px 0px"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><h1>ĐĂNG NHẬP </h1></td>
                    </tr>
                    <tr> 
                        <td colspan="3"><input autofocus type="text" name="username" id="username" placeholder="Họ Tên" >
                            <label id="label_hoten" style="display: none; width: 140%; margin-left: 86%; margin-top: -30%"></label>
                            <br>
                        </tr>


                        <tr>
                            <td colspan="3"><input type="password" name="password" id="password" placeholder="Password" >
                                <label id="label_password" style="display: none; width:387%; margin-left: 0%; margin-top: -38%"></label>
                                <br>
                            </tr>


                            <tr>
                                <td colspan="3" height="100">
                                    <button class="btn btn-success" type="submit" id="button" name="button">ĐĂNG NHẬP</button>
                                    <div class="alert alert-danger" id="snackbar" style="position: fixed; bottom:0px; left: 68%;z-index: 10000;display: none;">          
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </section>
            </div>

        </div> <!-- /container -->

        <style>
        #checkValidate {
            position: absolute;
            z-index: 2;
            height: 30px;
            width: 300px;
            border: 1px solid red;
            text-align: left;
            top: 348px;
            left: 90px;
            background-color: white;
        }
    </style>

    <script>

        $(document).ready(function () { 
           $kq1 = 0;
           $kq2 = false;
           $kq3 = false;

           if($kq2 == false || $kq3 == false ){
             $('#button').attr('disabled','disabled');
         }

         $('form').click(function(){
            if(  $kq2 == true && $kq3 == true  ){
                $('#button').removeAttr('disabled');

            }
        });

         $('#username').blur(function () { 
            var username = $('#username').val(); 
            $.get(
                'Controller/checkValidate.php',
                {username_login:username},
                function(data){
                    console.log(data);
                    if(data == 1){  
                        $data = "<h4><span class='alert alert-warning' >Chưa nhập họ tên !</span></h4>";
                        $('#username').focus();
                        $('#snackbar').html($data).show();
                        setTimeout(function(){$('#snackbar').hide();},3000);
                             //console.log(data);
                         }else if(data == 2){
                            $data = "<h4><span class='alert alert-warning' >họ tên không hợp lệ !</span></h4>";
                            $('#username').focus();
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                        }else if(data == 0){  
                          
                            $kq2 = true;
                        }
                        else if(data == 3){  
                            $data = "<h4><span class='alert alert-warning' >Họ Tên chưa được đăng ký !</span></h4>";
                            $('#username').focus();
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                        }
                        
                    }
                    );
        });

         $('#password').blur(function () { 
            var password = $('#password').val(); 
            var username = $('#username').val(); 
            $.get(
                'Controller/checkValidate.php',
                {username_login:username,password_login:password},
                function(data){
                    console.log(data);
                    if(data == 1){  
                        $data = "<h4><span class='alert alert-warning' >Chưa nhập password !</span></h4>";
                        $('#snackbar').html($data).show();
                        setTimeout(function(){$('#snackbar').hide();},3000);
                             //console.log(data);
                         }else if(data == 2){
                            $data = "<h4><span class='alert alert-warning' >password không hợp lệ !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                        }else if(data == 0){  
                            $kq3 = true;
                        }
                        else if(data == 3){  
                            $data = "<h4><span class='alert alert-warning' >password không đúng !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                        }
                        
                    }
                    );
        });




         /*start xu ly nut dang nhap*/


         $('#form').submit(function(event){



           /* alert("cho chuyen trang ...");
            
           event.preventDefault();*/
       });

         /*end xu ly nut dang ky*/
         $("#button-login").click(function(){
            // $.ajax({url: "demo_test.txt", success: function(result){
            //     $("#div1").html(result);
            // }});
            console.log('success');
        });

     });
 </script>
