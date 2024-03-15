<?php
    require_once('connection.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = "DELETE FROM blog WHERE id = '$id'";
        $res = mysqli_query($connect, $sql);
        if($res){
            header('Location: ../allblogs.php');
            return false;
        }else{
            header('Location: ../allblogs.php');
            return false;
        }
    }else{
        header('Location: ../');
        return false;
    }
?>