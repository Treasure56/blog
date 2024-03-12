<?php
require_once('connection.php');
// if (isset($_POST['submit'])) {
    $title = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($title == "" || $email == "" || $password == "") {
        $error = 'All fields are required';
        header('Location: ../signup.php?error=' . $error);
        return false;
    }

    $title = sanitize($connect, $title);
    $email = sanitize($connect, $email);
    $password = sanitize($connect, $password);

    $password = md5($password);
    $sql = "INSERT INTO admin(fullname, email, password ) VALUES('$title', '$email', '$password')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        $success = 'registration successful';
        header('Location: ../login.php?success=' . $success);
        return false;
    } else {
        $error = 'error creating account';
        header('Location: ../signup.php?error=' . $error);
        return false;
    }
// }

?>