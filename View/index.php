
<?php include "header.php" ?>
<main class="main oh" id="main">

<?php
if(isset($_GET['p'])){
    $p=$_GET['p'];
    if($p=="login")
    {
        include "login.php";
    }
    if($p=="register")
    {
        include "Register.php";
    }
        if($p=="main")
    {
        include "main.php";
    }

        if($p=="gioithieu")
    {
        include "gioithieu.php";
    }

        if($p=="lienhe")
    {
        include "lienhe.php";
    }



}
else include "main.php";
?>

   

</main>
<!-- end main-wrapper -->

<!-- footer -->
<?php
include "footer.php";
ob_end_flush();
?>
<!-- end footer -->

