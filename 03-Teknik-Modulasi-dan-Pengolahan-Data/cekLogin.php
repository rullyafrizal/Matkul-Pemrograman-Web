<?php
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(trim($name) === '' || trim($email) === '' || trim($username) === '' || trim($email) === '') {
        header("Location:form.php?empty_field");
    } else if($username == 'rullyafrizal' && $password == 'rully001') {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header("Location:profil.php");
    } else if($username !== 'rullyafrizal' && $password == 'rully001'){
        header("Location:form.php?wrong_username");
    } else if($password !== 'rully001' && $username == 'rullyafrizal'){
        header("Location:form.php?wrong_password");
    } else if ($username !== 'rullyafrizal' && $password !== 'rully001'){
        header("Location:form.php?wrong_username_password");
    }




}
