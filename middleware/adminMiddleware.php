<?php 
include('../functions/myfunction.php');
if(isset($SESSION['auth']))
{
    if($SESSION['role_as'] !=1)
    {
        redirect("../index.php","You are not authorised to access this page");
    }
    else{
        redirect("../login.php","Login to contiue");
    }
}
?>