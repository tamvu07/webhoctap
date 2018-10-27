<?php require_once("header_student.php");?>

<?php
require_once("../Controller/controller_admin.php");
?>

<!-- 	<?php
			session_start();
			if(isset($_SESSION['NguoiDung']) && isset($_SESSION['username']) ){
				$loaicauhoi = 'R';
				$made = 1;
				$p = new controller_admin();
		$p->test_get_list_questions($loaicauhoi,$made); // in ra câu hỏi và trắc nghiệm
		if(isset($_POST['submit-test']))
		{
			$p->count_scores(); // tính điểm dựa trên số câu người dùng chọn (tạm thời: 1 câu đúng 5đ)
		}
	}else{
		header('location:index.php');
	}

	?>
 -->

 <!-- ......test  ........... -->
<html>
<head>
    <link rel="stylesheet" href="css/Thanh-Style-testing.css"/>
</head>
<body>

    <div id="container-test">
    <div id="test-title" class="col-md-8">
    <h1>ĐỀ THI THỬ TOEIC SỐ </h1>
    <div id="countdown-timer"><span id="m" name="m">120</span>:<span id="s" name="s">00</span></div>
    </div>
    <div id="main-contain-test" class="col-md-8">
        <?php
				require_once("../Controller/controller_lambaithi.php");
				if(isset($_GET['id']))
				{
					$made = $_GET['id'];
					$p = new controller_lambaithi();
					echo '<form method="post">';
					$p->test_get_list_questions($loaicauhoi,$made); // in ra câu hỏi và trắc nghiệm
					echo '<button type="submit" id="submit-test" name="submit-test" class="disabled-button"></button>
					</form>';
					if(isset($_POST['submit-test']))
					{
						if($_GET['part']==1)
							$p->count_reading_scores($loaicauhoi,$made); // tính điểm dựa trên số câu người dùng chọn
						else
							$p->count_listening_scores($loaicauhoi,$made);
					}
				}
				
			?>
    </div>
    <center>
    	<?php
    		if($_GET['part']==1)
    			echo '<button id="test-bottom" class="col-md-8" onClick="nopbaiDoc();">Nộp bài phần ĐỌC </button>';
    		else
    			echo '<button id="test-bottom" class="col-md-8" onClick="nopbaiNghe();">Nộp bài phần NGHE </button>';
    		
		if(!isset($_SESSION['Diem-Reading']) && $_GET['part']==2) //nếu chưa có điểm đọc mà truy cập phần nghe
			header("location:Toeic-".$_GET['id']."-testing-1.html");
		if(isset($_SESSION['Diem-Reading']) && $_GET['part']==1) //nếu đã có điểm đọc mà vẫn ở trang thi đọc
			header("location:Toeic-".$_GET['id']."-testing-2.html");
		if(isset($_SESSION['Diem-Reading']) && isset($_SESSION['Diem-Listening'])) //nếu đã có cả hai điểm trong session
			header("location:XemDiem.html")
    	?>
    </center>
    </div>
</body>
</html>

	<!-- Javascript đếm giờ cho bài làm -->
    <script>
        var m=120;
        var s=0;
        var made = document.getElementById("made").innerHTML;
        //lấy số thời gian còn lại trong localStorage của trình duyệt
		if(localStorage.getItem("minutes-left"))
		{
			var m = localStorage.getItem("minutes-left");
			var s = localStorage.getItem("seconds-left");
		}
        var timeout=null;
		window.onload = start(); //khi page vừa được load thì bộ đếm sẽ chạy ngay lập tức

		//Khi nộp bài thì sẽ có hành động click nào nút submit-test trong form load câu hỏi
		function nopbaiDoc() {
			var subm = confirm("Bạn có chắc chắn muốn nộp phần ĐỌC? Bạn sẽ không thể sửa lại sau khi nộp!");
			if(subm == true)
			{
				document.getElementById('submit-test').click();
				saveCurrentTimer(); //Lưu thời gian còn lại vào localStorage
				//document.location.href = "../ToeicThi/View/Exam/TOEIC-"+made+"/Toeic-"+made+"-testing-2.html";
			}
			else
				return;
		}
		function nopbaiNghe() {
			var subm = confirm("Bạn có chắc chắn muốn nộp phần NGHE để kết thúc bài thi?");
			if(subm == true)
			{
				document.getElementById('submit-test').click();
				localStorage.clear();
				//document.location.href = "../ToeicThi/View/Exam/TOEIC-"+made+"/XemDiem-"+made+".html";
			}
			else
				return;
		}

		//Lưu thời gian còn lại vào localStorage
		function saveCurrentTimer() {
			var mm = document.getElementById("m").innerHTML;
 			var ss = document.getElementById("s").innerHTML;
			localStorage.setItem("minutes-left",mm);
			localStorage.setItem("seconds-left",ss);
		}

		//Bắt đầu thực hiện hành động đếm giờ
        function start(){
			if(s==-1){
				m=m-1;
				s=59;
			}
			if(m==-1)
			{
				clearTimeout(timeout);
				alert('hết giờ, hệ thống dã tự động nộp bài');
				nopbai();
			}
			if(m < 10)
				document.getElementById('m').innerText = '0' + m.toString();
			else
				document.getElementById('m').innerText = m.toString();
			if(s < 10)
				document.getElementById('s').innerText = '0' + s.toString();
			else
				document.getElementById('s').innerText = s.toString();
			timeout = setTimeout(function(){
				s--;
				start();
			}, 1000);
    	}
    </script>

 <!-- ......test  ........... -->
<?php
include "footer.php";
ob_end_flush();
?>