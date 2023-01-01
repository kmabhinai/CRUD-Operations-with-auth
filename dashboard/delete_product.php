<?php
    include("../dbconnection.php");
    include("../checklogin.php");
    date_default_timezone_set('Asia/Kolkata');
    $date=date('d-m-Y H:i');
    $msg=mysqli_query($con,"DELETE FROM vtech_product where id='".$_GET['id']."'");
    if($msg)
    {
        $extra="index.php";
        echo "<script>window.location.href='".$extra."'</script>";
    }
?>