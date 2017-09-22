<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/18
 * Time: 23:48
 */

if($_POST['userEmail']==''){
    $url = "signin.html";
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
}
?>