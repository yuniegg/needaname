<?php
    include_once "../includes/layout_header.php";
    include_once "../classes/Database.php";

    if( isset($_POST['user_login']) && isset($_POST['user_password']) )
    {
        $db = new Database();

        $login = $db->userLogin( strtolower($_POST['user_login']), $_POST['user_password']);

        if( $login ) {
            echo "<script type='text/javascript'>window.location.href='news'</script>";
        }
        else {
            echo $twig->render("connexion_failed.html");
        }

    }
    else {
        echo $twig->render("connexion_form.html");
    }
    include_once "../includes/layout_footer.php";
?>
