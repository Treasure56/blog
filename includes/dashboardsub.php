<?php
    require_once('connection.php');
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $content = isset($_POST['desc']) ? $_POST['desc'] : '';
   

        if($title == "" || $content == "" ){
            $error = 'All fields are required';
            header('Location: ../dashboard.php?error='.$error);
            return false;
        }

        $title = sanitize($connect, $title);
        $content = sanitize($connect, $content);
       

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
                        $sql = "INSERT INTO blog(title, content, img ) VALUES('$title', '$content', '$location')";
                        $result = mysqli_query($connect, $sql);
                        if($result){
                            $success = 'blog uploaded';
                            header('Location: ../dashboard.php?success='.$success);
                            return false;
                        }else{
                            $error = 'error uploading blog';
                            header('Location: ../dashboard.php?error='.$error);
                            return false;
                        }
                    }else{
                        $error = 'error uploading file';
                        header('Location: ../dashboard.php?error='.$error);
                        return false;
                    }
                }else{
                    $error = 'upload pictures only';
                    header('Location: ../dashboard.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'File uploaded is too large';
                header('Location: ../dashboard.php?error='.$error);
                return false;
            }
        }

?>