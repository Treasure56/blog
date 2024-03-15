<?php
require_once('connection.php');
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['desc']) ? $_POST['desc'] : '';
    $id = isset($_POST['id']) ? $_POST['id'] : '';


    if ( $title == "" || $content == "") {
        $error = 'All fields are required';
        header('Location: ../editblog.php?error=' . $error . '&id=' . $id);
        return false;
    }

    $file = sanitize($connect, $file);
    $title = sanitize($connect, $title);
    $content = sanitize($connect, $content);

    if ($_FILES['file']['name'] != '') {
        $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
        $filename = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $fileext = explode('.', $filename);
        $fileActualext = strtolower(end($fileext));

    if ($filesize < 800000) {
        if (in_array($fileActualext, $allow)) {
            $pic = uniqid('', true) . '.' . $fileActualext;
            $location2 = 'dp/' . $pic;
            if (move_uploaded_file($fileTmp, $location2)) {

                $sql = "UPDATE `blog` SET `img` = '$location2', `title` = '$title', `content` = '$content' WHERE `id` = '$id'";


                $result = mysqli_query($connect, $sql);
                if ($result) {
                    unlink('post/' . $img);
                    $success = 'Post updated';
                    header('Location: ../editblog.php?success=' .
                        $success . '&id=' . $id);
                    return false;
                } else {
                    $error = 'error updating post';
                    header('Location: ../editblog.php?error=' . $error . '&id=' . $id);
                    return false;
                }
            } else {
                $error = 'error updating post';
                header('Location: ../editblog.php?error=' . $error . '&id=' . $id);
                return false;
            }
        } else {
            $error = 'upload pictures only';
            header('Location: ../editblog.php?error=' . $error . '&id=' . $id);
            return false;
        }
    } else {
        $error = 'File uploaded is too large';
        header('Location: ../editblog.php?error=' . $error . '&id=' . $id);
        return false;
    }
} else {
    $sql = "UPDATE `blog` SET  `title` = '$title', `content` = '$content' WHERE `id` = '$id'";


    $result = mysqli_query($connect, $sql);
    if ($result) {
        $success = 'Post updated';
        header('Location: ../editblog.php?success=' . $success . '&id=' . $id);
        return false;
    } else {
        $error = 'error creating post';
        header('Location: ../editblog.php?error=' . $error . '&id=' . $id);
        return false;
    }
}
