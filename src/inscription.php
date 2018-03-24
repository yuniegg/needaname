<?php
    include_once "../includes/layout_header.php";
    include_once "../classes/database.php";

    if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) ) {
        $db = new Database();

        $nbUsername = $db->checkUsernameAvailability(strtolower($_POST['username']));
        $nbEmail = $db->checkEmailAvailability(strtolower($_POST['email']));

        if ($nbUsername == 0 && $nbEmail == 0) {
            $db->addUser(strtolower($_POST['username']), $_POST['password'], strtolower($_POST['email']), $_POST['ville']);
            echo $twig->render("user_signed_in.html");
        }
        else {
            if ($nbUsername > 0) {
                echo "username deja pris \n";
            }
            else {
                echo "email deja pris \n";
            }
        }
    }
    else {
        echo $twig->render("sign_in_form.html");
    }

    include_once "../includes/layout_footer.php";
?>