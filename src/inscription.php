<?php
    include_once "../includes/layout_header.php";
    include_once "../classes/Database.php";

    if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) ) {
        $db = new Database();

        $db->addUser(strtolower($_POST['username']), $_POST['password'], strtolower($_POST['email']), $_POST['birthdate'], $_POST['ville']);
        echo $twig->render("user_signed_in.html");

    }
    else {
        echo $twig->render("sign_in_form.html");
    }

    include_once "../includes/layout_footer.php";
?>