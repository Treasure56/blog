<?php
    session_start();
    require_once('connection.php');
    $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        if($name == "" || $email == ""){
            $error = 'All fields are required';
            header('Location: ../index.php?error='.$error);
            return false;
        }

        $name = sanitize($connect, $name);
        $email = sanitize($connect, $email);
        
        $sql = "INSERT INTO newsletter(name, email) VALUES('$name', '$email')";
        $res = mysqli_query($connect, $sql);
        if($res){
            
            header('Location: ../index.php?success=subscribed successfully');
            return false;
        }else{
            $error = 'an error occured';
            header('Location: ../index.php?error='.$error);
            return false;
        }    
  

?>