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
                    <td colspan="3"><h1>ĐĂNG KÝ </h1></td>
                </tr>


                 <tr> 
                    <td >
                        <h5>Với tư cách :</h5>
                        <select autofocus id="tucach">
                            <option value="hv">Học Viên</option>
                            <option value="gv">Giảng Viên</option>
                         </select>
                    </td>
                </tr>

                <tr> 
                    <td colspan="3"><input type="text" name="username" id="username" placeholder="Họ Tên" >
                        <label id="label_hoten" style="display: none; width: 140%; margin-left: 86%; margin-top: -30%"></label>
                        <br>
                </tr>

                <tr> 
                    <td colspan="3"><input type="email" name="email" id="email" placeholder="Email" >
                        <label id="label_email" style="display: none; width: 140%; margin-left: 86%; margin-top: -37%"></label>
                        <br>
                </tr>
                <tr>
                    <td colspan="3"><input type="password" name="password" id="password" placeholder="Password" >
                        <label id="label_password" style="display: none; width:387%; margin-left: 0%; margin-top: -38%"></label>
                        <br>
                </tr>
                <tr>
                    <td colspan="3"><input type="password" name="repassword" id="repassword" placeholder="Repassword">
                         <label id="label_repassword" style="display: none; width: 215%; margin-left: 94%; margin-top: -38%"></label>
                        <br>
                </tr>
               
                <tr>
                    <td colspan="3" height="100">
                        <button class="btn btn-success" type="submit" id="button">ĐĂNG KÝ</button>
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
        $kq4 = false;
        $kq5 = false;
        if($kq2 == false || $kq3 == false || $kq4 == false || $kq5 == false){
             $('#button').attr('disabled','disabled');
         }
       
      

        $('#username').blur(function () { 
                var e = document.getElementById("tucach");
                var user = e.options[e.selectedIndex].text;
                var username = $('#username').val(); 
            $.get(
                    'Controller/checkValidate.php',
                    {username:username,user:user},
                    function(data){
                        console.log(data);
                        if(data == 1){  
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning' >Chưa nhập họ tên !</span></h4>";
                        $('#username').focus();
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},3000);
                             //console.log(data);
                             $kq2 = false;
                        }else if(data == 2){
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning' >họ tên không hợp lệ !</span></h4>";
                             $('#username').focus();
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                            $kq2 = false;
                        }else if(data == 3){  
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning' >Họ Tên đã tồn tại !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                            $kq2 = false;
                        }
                        else if(data == 0){  
                            $kq2 = true;
                        } 
                    }
                    );
        });
        /* start xu ly email . password, repassword*/
        $('#email').blur(function () { 
              var e = document.getElementById("tucach");
                var user = e.options[e.selectedIndex].text;
                var email = $('#email').val();

            $.get(
                    'Controller/checkValidate.php',
                    {email_register:email,user_register:user},
                    function(data){
                        console.log(data);
                        if(data == 1){  
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning' >Chưa nhập email !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},3000);
                             //console.log(data);
                             $kq3 = false;
                        }else if(data == 2){
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning' >Email không hợp lệ !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                            $kq3 = false;
                        }else if(data == 3){  
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning' >Email da ton tai !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            //console.log(data);
                            $kq3 = false;
                        }
                        else if(data == 0){  
                             $kq3 = true;
                        }
                        
                    }
                    );
        });

         $('#password').blur(function () { 
             var password = $('#password').val();
            var repassword = $('#repassword').val();
            $.get(
                    'Controller/checkValidate.php',
                    {password:password,repassword:repassword},
                    function(data){
                        
                        if(data == 1){  
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning'>chưa nhập password !</span></h4>";
                            $('#snackbar').html($data).show();
                           setTimeout(function(){$('#snackbar').hide();},3000);
                           $kq4 = false;
                        }else if(data == 2){
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning'>Password phải không có ký tự đặc biệt !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            $kq4 = false;
                        }
                        else if(data == 3){
                             $('#button').attr('disabled','disabled');
                            $data = "<h4><span class='alert alert-warning'>Password khác Repassword  !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},5000);
                            $kq4 = false;
                        }

                        else if(data == 0){
                             $kq4 = true;
                        }
                       
                        
                    }
                    );
        });

         $('#repassword').blur(function () {
            var password = $('#password').val();
            var repassword = $('#repassword').val();
            
            $.get(
                    'Controller/checkValidate.php',
                    {pass:password,repass:repassword},
                    function(data){
                        if(data == 1){
                             $('#button').attr('disabled','disabled');
                             $data = "<h4><span class='alert alert-warning' >Phải nhập password trước ! </span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},3000);
                            $kq5 = false;
                        }
                        if(data == 2){
                             $('#button').attr('disabled','disabled');
                             $data = "<h4><span class='alert alert-warning' >Chưa nhập repassword !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},3000);
                            $kq5 = false;
                        }
                        if(data == 3){
                             $('#button').attr('disabled','disabled');
                             $data = "<h4><span class='alert alert-warning' >Sai Repassword !</span></h4>";
                            $('#snackbar').html($data).show();
                            setTimeout(function(){$('#snackbar').hide();},3000);
                            $kq5 = false;
                        }
                        if(data == 0){
                             $kq5 = true;
                        }
                     }
                    );
        });
         /* end xu ly email . password, repassword*/

         /*start xu ly nut dang ky*/
         
          $('form').click(function(){
            if(  $kq2 == true && $kq3 == true && $kq4 == true && $kq5 == true ){
            $('#button').removeAttr('disabled');
            
         }
       });
          
         $('#form').submit(function(event){
            /*if($kq == 0){
                var email = $('#email').val();
                var password = $('#password').val();
                var repassword = $('#repassword').val();
                alert("summit ok");
                $.get(
                    'control/checkValidate.php',
                    {email_form:email,password_form:password,repassword_form:repassword},
                    function(data){
                        if(data != 1){
                            alert("that bai");
                            event.preventDefault();
                        }
                        if(data == 1){
                             alert("thanh cong");
                            event.preventDefault();
                        }

                    }
                    );
            }   */
            
                var username = $('#username').val();
                var email = $('#email').val();
                var password = $('#password').val();
                 var e = document.getElementById("tucach");
                var user = e.options[e.selectedIndex].text;

                $.get(
                    'Controller/checkValidate.php',
                    {email_form:email,password_form:password,user_form:user,username_form:username},
                    function(data){
                        if(data == 0){
                            alert("that bai");
                            event.preventDefault();
                        }else
                        if(data != 0){
                             alert("ban da dang ky thanh cong voi tu cach la "+ user );
                            event.preventDefault();
                        }
                    }
                    );
            
            event.preventDefault();
         });
         /*end xu ly nut dang ky*/


    });
</script>
