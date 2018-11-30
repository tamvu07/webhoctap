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

     function form_register($email,$password1,$user,$username){
        if($user =="Học Viên"){
            $password = md5($password1);
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
            $pass = md5($password);
            $sql = "select * from taikhoan where HoTen = '$username' and MatKhau = '$pass' ";
            $kq = $this->con->query($sql);

            if ($kq->num_rows != 0) {
              while($rows =$kq->fetch_assoc()){
                $_SESSION['NguoiDung'] = $rows['NguoiDung'];
                $_SESSION['ID'] = $rows['ID'];
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

    function test_id_user_DB($username,$password)
    {
            $username = $this->con->escape_string(trim(strip_tags($username)));
            $password = $this->con->escape_string(trim(strip_tags($password)));
            $sql = "select ID from taikhoan where HoTen = '$username' and MatKhau = '$password' ";
            $kq = $this->con->query($sql);

            if ($kq->num_rows != 0) {
              while($rows =$kq->fetch_assoc()){
                $_SESSION['NguoiDung'] = $rows['ID'];
            }
            return 1;
            } else {
                return 0;
            }

    }

/*bat dau luu diem bai thi*/
     function luu_diem_test_DB($id_TK,$test,$monhoc,$diem)
     {

        $sql1 = "select HocVienID from hocvien where TaiKhoanID='$id_TK' ";
        $kq1 = $this->con->query($sql1);
             if ($kq1->num_rows > 0) {
              while($rows =$kq1->fetch_assoc())
              {
                $HocVienID = $rows['HocVienID'];
              }
                /*luu vao ket qua */
                $sql2 = "insert into ketqua(MaDeThi,MaMonHoc,HocVienID,Diem) values('$test','$monhoc','$HocVienID','$diem')";
                $kq2 = $this->con->query($sql2);
                if($kq2)
                {
                            return true;
                }else{   
                            return false;                
                }
                /*end luu vao ket qua */
            } else {
                        echo '<script language="javascript" >
                            alert("luu diem khong thanh cong 2 !");
                            </script>'; 
            }       
     }
/*ket thuc luu diem bai thi*/

/*bat dau load diem user*/
    function load_diem_DB($id_TK,$monhoc,$test)
    {
        $sql = "
                SELECT        hv.TenHocVien,kq.MaMonHoc,kq.MaDeThi,kq.Diem
                FROM            hocvien AS hv INNER JOIN
                                         ketqua AS kq ON hv.HocVienID = kq.HocVienID
                where    hv.TaiKhoanID = '$id_TK' and hv.HocVienID = kq.HocVienID and kq.MaMonHoc = '$monhoc' and kq.MaDeThi = '$test'                      
            ";
        $kq = $this->con->query($sql);
             if ($kq->num_rows > 0)
              {
                    return $kq;
                } else{
                    return $this->con->error;
                }
    }

    function load_diem_all($id_TK)
    {
        $sql = "
                SELECT        hv.TenHocVien,kq.MaMonHoc,kq.MaDeThi,kq.Diem
                FROM            hocvien AS hv INNER JOIN
                                         ketqua AS kq ON hv.HocVienID = kq.HocVienID
                where    hv.TaiKhoanID = '$id_TK' and hv.HocVienID = kq.HocVienID                        ";
        $kq = $this->con->query($sql);
             if ($kq->num_rows > 0)
              {
                    return $kq;
                } else{
                    return 0;
                }
    }
/*end load diem user*/

/*    function kiemtra_HocVieID_Test_MonHoc($id_TK,$test,$monhoc)
    {
         $sql = "
                SELECT        hv.TenHocVien,kq.MaMonHoc,kq.MaDeThi,kq.Diem
                FROM            hocvien AS hv INNER JOIN
                                         ketqua AS kq ON hv.HocVienID = kq.HocVienID
                where    hv.TaiKhoanID = '$id_TK' and hv.HocVienID = kq.HocVienID and kq.MaMonHoc = '$monhoc' and kq.MaDeThi = '$test'                      
            ";       
    }*/

    function lay_made_select() {
        $sql = "SELECT * FROM dethi";
        return $sql;
    }

    function them_cau_hoi($mamon,$made,$noidung,$a,$b,$c,$d,$dapan)
    {
        $sql = "
        INSERT INTO bocauhoi(MaDeThi,MaMonHoc,NoiDungCauHoi,A,B,C,D,DapAn)
        VALUES ('$made','$mamon','$noidung','$a','$b','$c','$d','$dapan');
        ";
        return $sql;
    }

    function lay_ds_cauhoi()
    {
        $sql = "select * from bocauhoi";
        $kq = $this->con->query($sql);
             if ($kq->num_rows > 0)
              {
                return $kq;
              }else{
                 return $this->con->error;
              }
    }

    function xoa_cau_hoi($macauhoi)
    {
        $sql = "
        DELETE FROM bocauhoi WHERE MaCauHoi='".$macauhoi."'
        ";
        return $sql;
    }

    function get_1_cau_hoi($macauhoi)
    {
        $sql = "
        SELECT * FROM bocauhoi WHERE MaCauHoi='".$macauhoi."'
        ";
                $kq = $this->con->query($sql);
             if ($kq->num_rows > 0)
              {
                return $kq;
              }else{
                 return $this->con->error;
              }
    }

    function update_1_cau_hoi($macauhoi,$noidung,$a,$b,$c,$d,$dapan)
    {
         $sql = "
        UPDATE bocauhoi SET NoiDungCauHoi='$noidung',A='$a',B='$b',C='$c',D='$d',DapAn='$dapan' WHERE MaCauHoi='$macauhoi'
        ";
                $kq = $this->con->query($sql);
                return $kq;
    }

    function insert_text($content,$monhoc)
    {
        $sql = "UPDATE monhoc set BaiGiang='$content' where MaMonHoc='$monhoc' ";
        $kq =  $this->con->query($sql);
            if ($kq)
              {
                return $kq;
              }else{
                 return $this->con->error;
              }
    }


    function show_text()
    {
        $sql = "SELECT * FROM monhoc where MaMonHoc=1";
        $kq =  $this->con->query($sql);
        $i = $kq->num_rows;
            if ($i > 0)
              {
                return $kq;
              }else{
                 return 0;
              }
    } 

}

?>