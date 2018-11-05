<?php require_once("header_student.php");?>
<?php  require_once("../Controller/controller_lambaithi.php"); 
$t = new controller_lambaithi();
?>

  
<html>
<head>
   <!--  <link rel="stylesheet" href="css/Thanh-Style.css"/> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <style type="text/css">
    #main-contain-test {
    margin: 0px auto;
    background-color: white;
    height: 600px; overflow:auto;
    text-align:center;
    padding:15px;
    border-radius:10px;
}

#countdown-timer {
 
    font-size: 78px;
    font-weight: bold;
    width: 180px;
    border-radius: 10px;
    background-image: linear-gradient(141deg, #6367ec 0%, #f8f9fa 51%, hsl(69, 83%, 61%) 75%);
    margin-left: 65%;
    color: red;
    padding-left: 45px;
}

input[type="radio"] {
    display: inline-block; 
}

input[type="radio"] {
    content: "";
    width: 15px;
    height: 15px; }

input[type="radio"]:checked + label:before {
    background-color: #000;
    border: 6px solid #fff;
    padding: 1px; }

input[type="radio"]:focus {
    outline: none; }
input[type="radio"] + label {
    cursor: pointer;
    margin-bottom: 0;
    position: relative;
    line-height: 22px; }
    </style>


</head>
<body>

<!-- dong ho -->
    <div id="test-title" class="col-md-8">
       <div id="countdown-timer"></div>
    </div>
<!-- end dong ho -->

    <div class="main-container container" id="main-container" style="    background-color: #fff; ">    
    	<div class="row">
    		<div class="col-sm-2" style="background-color: aquamarine"></div>
    		<div class="col-sm-8" style="background-color: white">
    			<div id="main-contain-test" class="col-md-8">

                    <form method="post" action="">
    				<?php
                    
    				$test = $_REQUEST['test'];
    				$monhoc = $_REQUEST['monhoc'];
                    $array_cautraloi_DB = array();
    				$array_cautraloi_DB = $t->gettest($monhoc,$test);

    				?>
<button type="submit" name="nut" id="nut" value="chambai" class="btn btn-primary btn-block">CHAM BAI</button>

<?php

$array_cautraloi = array();
$i = 1;
        while($i < 3)
        {
              $tam = "cauhoiso".$i;
              $array_cautraloi[$i] = isset($_POST[$tam]) ? $_POST[$tam]: "";
            $i++;
        }

/*switch (isset($_REQUEST['nut'])) {
    case 'chambai':*/
    if(isset($_REQUEST['nut']))
    {
    /*start xu ly cac cau tra loi*/
        $i = 1;
        while($i < 3)
        {
            $tam = "cauhoiso".$i;
             $array_cautraloi[$i] = isset($_POST[$tam]) ? $_POST[$tam]: "";
             echo "".$i."la : ".$array_cautraloi[$i]."<br>";
            $i++;
        }

             $diem = $t->chamdiem($array_cautraloi,$array_cautraloi_DB);
             session_start();
             $_SESSION['diem'] = $diem;
             header('location:chamdiem.php');

        break;
    }
 /*   default:
        # code...
        break;*/

/*}*/


?>
                    </form>
                  </div>   
                    
    			</div>
                <div class="col-sm-2" style="background-color: aquamarine"></div>
    		</div>
    		
    	</div>
    </div>
     

</body>
</html>

<?php require_once("footer.php");?>


    <script type="text/javascript">
        var so = 30;
        function demnguoc()
        {
            so--;
            if(so != 0)
            {
                document.getElementById("countdown-timer").innerHTML= so;
                setTimeout("demnguoc()",1000);
            }else if(so == 0) {
                document.getElementById("countdown-timer").innerHTML = "00";
                document.getElementById("nut").click();
                 /* setTimeout("chuyentrang()",1000);*/
            }
        }

        function chuyentrang()
        {
           window.location.href="http://localhost/webhoctap/View/chamdiem.php";
          /* alert("go ?");*/
        }

        demnguoc();
    </script>