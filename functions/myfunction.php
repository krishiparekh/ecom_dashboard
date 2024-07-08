<?php 

    include('../config/dbcon.php');
    function getAll($table)
    {
        global $con;
        $query = "SELECT * FROM $table";
        return $query_run = mysqli_query($con,$query);
    }

    functions redirect($url.$message)
    {
        $_SESSION['message'] = $message;
        header('Location:'.$url);
        exit();
    }
?>