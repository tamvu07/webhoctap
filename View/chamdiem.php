<?php require_once("header_student.php");
session_start();
$diem = $_SESSION['diem'];
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



    <div class="main-container container" id="main-container" style="    background-color: #fff; ">    
    	<div class="row">
    		<div class="col-sm-2" style="background-color: aquamarine"></div>
    		<div class="col-sm-8" style="background-color: white">
    			<div id="main-contain-test" class="col-md-8">
<span><?php  echo "so diem lam bai la :".$diem; ?></span>
<button type="submit" name="nut" value="LUu" class="btn btn-primary btn-block">LƯU BÀI</button>
                  </div>   
                    
    			</div>
                <div class="col-sm-2" style="background-color: aquamarine"></div>
    		</div>
    		
    	</div>
    </div>
     

</body>
</html>

<?php require_once("footer.php");?>

