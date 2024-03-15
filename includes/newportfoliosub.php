<?php
    require_once('connection.php');
        $subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : '';
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $link = isset($_POST['link']) ? $_POST['link'] : '';
   

        if($subtitle == "" || $title == "" || $link == "" ){
            $error = 'All fields are required';
            header('Location: ../portfolio/newportfolio.php?error='.$error);
            return false;
        }

        $subtitle = sanitize($connect, $subtitle);
        $subtitle = sanitize($connect, $subtitle);
        $title = sanitize($connect, $title);
        $link = sanitize($connect, $link);
       

        if(isset($_FILES['file'])){
            $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
            $filename = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $filesize = $_FILES['file']['size'];
            $fileext = explode('.', $filename);
            $fileActualext = strtolower(end($fileext));
            
            if($filesize < 800000){
                if(in_array($fileActualext, $allow)){
                    $pic = uniqid('',true).'.'.$fileActualext;
                    $location = 'dp/'.$pic;
                    if(move_uploaded_file($fileTmp, $location)){
                        $sql = "INSERT INTO portfolio(img, subtitle, title, link ) VALUES('$pic', '$subtitle', '$title', '$link')";
                        $result = mysqli_query($connect, $sql);
                        if($result){
                            $success = 'portfolio uploaded';
                            echo $success;
                            
                            // header('Location: ../portfolio/newportfolio.php?success='.$success);
                            return false;
                        }else{
                            $error = 'error uploading porfolio';
                            echo $error;
                            // header('Location: ../portfolio/newportfolio.php?error='.$error);
                            return false;
                        }
                    }else{
                        $error = 'error uploading file';
                        header('Location: ../portfolio/newportfolio.php?error='.$error);
                        return false;
                    }
                }else{
                    $error = 'upload pictures only';
                    header('Location: ../portfolio/newportfolio.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'File uploaded is too large';
                header('Location: ../portfolio/newportfolio.php?error='.$error);
                return false;
            }
        }

?>