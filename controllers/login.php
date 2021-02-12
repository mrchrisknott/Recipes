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


                //1    $to = $_POST['email'];
                //1    $subject = 'Welcome to StudentEat!';
                //1    $headers = "From: c.knott3@uos.ac.uk\r\n";
                //1    $headers .= "Reply-To: c.knott3@uos.ac.uk\r\n";
                //1    $headers .= "MIME-Version: 1.0\r\n";
                //1    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                //1    $message = '<html><body>';
                //1    $message .= '<h1>Welcome to StudentEat!</h1>';
                //1    $message .= '<p>You have successfully registered an account with us.</p>';
                //1    $message .= '<p>Do not indulge too much in these foods and get fat!.</p>';
                //1    $message .= '</body></html>';
                //1    mail($to, $subject, $message, $headers);

                // uncomment the following code and ask Sean for help <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

                //2    $email = new \SendGrid\Mail\Mail();
                //2    $email->setFrom("c.knott3@uos.ac.uk", "Chris Knott");
                //2    $email->setSubject("Welcome to StudentEat");
                //2    $email->addTo($_POST['email'], "User");
                //2    $email->addContent(
                //2        "text/html",
                //2        "<h1>Welcome to StudentEat!</h1>"
                //2    );
                //2    $sendgrid = new \SendGrid('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');
                //2    $response = $sendgrid->send($email);

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
