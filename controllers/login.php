<?php

if ($_POST) {
    if ($_POST['register']) {
        if (!$_POST['email']) {
            $error = "Email not set";
        } else if (!$_POST['password']) {
            $error = "Password not set";
        } else if (!$_POST['password_confirm']) {
            $error = "Confirm password not set";
        } else if ($_POST['password'] != $_POST['password_confirm']) {
            $error = "Your password and confirmed password do not match";
        } else if (strlen($_POST['password']) < 8) {
            $error = "Your password must be at least 8 characters in length";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Your email address is not valid";
        }

        if ($error) {
            $smarty->assign('error', $error);
        } else {
            // No errors
            $User = new User($Conn);
            $attempt = $User->createUser($_POST);

            if ($attempt) {
                $smarty->assign('success', "Your account has been created. Please now login.");
            } else {
                $smarty->assign('error', "An error occured, please try again later.");
            }
        }
    } else if ($_POST['login']) {

        if (!$_POST['email']) {
            $error = "Email not set";
        } else if (!$_POST['password']) {
            $error = "Password not set";
        } else if (strlen($_POST['password']) < 8) {
            $error = "Your password must be at least 8 characters in length";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Your email address is not valid";
        }
        if ($error) {
            $smarty->assign('error', $error);
        } else {
            // No errors
            $User = new User($Conn);
            $user_data = $User->loginUser($_POST['email'], $_POST['password']);
            if ($user_data) {
                $_SESSION['is_loggedin'] = true;
                $_SESSION['user_data'] = $user_data;

                header("Location: index.php?p=account");
                exit();
            } else {
                $smarty->assign('error', "Incorrect Email/Password");
            }
        }
    }
}
