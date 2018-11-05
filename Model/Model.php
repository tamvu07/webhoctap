<?php
require_once "../database/connection.php";

class model extends connection
{
    function login($email, $pass)
    {
        $email = $this->con->escape_string(trim(strip_tags($email)));
        $pass = $this->con->escape_string(trim(strip_tags($pass)));
        $pass = md5($pass);
        $sql = "select * from nguoidung where Mail='$email' and MatKhau='$pass'";
        $kq = $this->con->query($sql);
        if ($kq->num_rows > 0) return $kq;
        return false;
    } // end login

 /*   function getTinTuc($param)
    {
        if ($param == 'vi') {
            $sql = "select * from tintuc where NgonNgu='vi'";
            $kq = $this->con->query($sql);
            
            if ($kq->num_rows > 0) return $kq;
        } elseif ($param == 'en') {
            $sql = "select * from tintuc where NgonNgu='en'";
            $kq = $this->con->query($sql);
            if ($kq->num_rows > 0) return $kq;
        } else {
            $sql = "select * from tintuc";
            $kq = $this->con->query($sql);
            if ($kq->num_rows > 0) return $kq;
        }
        return $this->con->error;
    }
*/
    function getIdUser($idUser)
    {
        $sql = "select * from nguoidung where IdUser='$idUser'";
        $kq = $this->con->query($sql);
        if ($kq->num_rows > 0) return $kq;
        return $this->con->error();
    }

    function checkusername($username,$user)
    {
        if($user =="Học Viên"){
            $username = $this->con->escape_string(trim(strip_tags($username)));
            $sql = "select * from taikhoan where HoTen = '$username' ";
            $kq = $this->con->query($sql);
            if ($kq->num_rows != 0) {
            return 1;
            } else return 0;
        }
        
    }

     function checkpassword($username,$password,$user)
    {
        if($user =="Học Viên"){
            $password = $this->con->escape_string(trim(strip_tags($password)));
            $sql = "select * from taikhoan where MatKhau = '$password' and HoTen = '$username' ";
            $kq = $this->con->query($sql);
            if ($kq->num_rows != 0) {
            return 1;
            } else return 0;
        }
        
    }

    function checkemail($email,$user)
    {
         if($user =="Học Viên"){
             $email = $this->con->escape_string(trim(strip_tags($email)));
            $sql = "select * from taikhoan where Email = '$email' ";
            $kq = $this->con->query($sql);
            if ($kq->num_rows != 0) {
                return 1;
            } else return 0;
         }
       
    }

     function form_register($email,$password,$user,$username){
        if($user =="Học Viên"){
             $sql = "insert into taikhoan(HoTen,Email,MatKhau,NguoiDung) values('$username','$email','$password','1')";
             $kq = $this->con->query($sql);
            if($kq === true){
           // mysql_close($this->db);
                return 1;
            }else return 0;
        }

       
    }

/*bat dau login check username*/
    function login_check_username($username)
    {
            $username = $this->con->escape_string(trim(strip_tags($username)));
            $sql = "select * from taikhoan where HoTen = '$username' ";
            $kq = $this->con->query($sql);
            if ($kq->num_rows != 0) {
            return 1;
            } else return 0;
        
        
    }

/*ket thuc login check username*/

/*bat dau login check password and username*/
     function login_check_password_username($username,$password)
    {
            $username = $this->con->escape_string(trim(strip_tags($username)));
            $password = $this->con->escape_string(trim(strip_tags($password)));
            $sql = "select * from taikhoan where HoTen = '$username' and MatKhau = '$password' ";
            $kq = $this->con->query($sql);

            if ($kq->num_rows != 0) {
              while($rows =$kq->fetch_assoc()){
                $_SESSION['NguoiDung'] = $rows['NguoiDung'];
            }
            return 1;
            } else return 0;
        
        
    }

/*ket thuc login check password and username*/

    public function get_test_databse($monhoc,$test){
        $sql = "select * from bocauhoi where MaMonHoc='$monhoc' and MaDeThi='$test' ";
        
        $kq = $this->con->query($sql);
        if($kq->num_rows != 0){
            return $kq;
        }else {
            /*return $this->con->error();*/
            return 0;
        }
    }


}

?>