<?php 
    require_once "../../config/config.php";

    $id = $_POST['deleted_id'];

    mysqli_query($connect, 
                 "DELETE FROM `data` WHERE `ID`=$id");
    header("../admin.php")
?>