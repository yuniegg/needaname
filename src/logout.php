<?php
    include_once "../includes/layout_header.php";

    if( isset($_POST['logout_yes']) )
    {
        session_destroy();
        header("Location: home");
    }
    else if( isset($_POST['logout_no']) )
    {
        header("Location: news");
    }
    else {
        echo $twig->render("logout_page.html");
    }
    include_once "../includes/layout_footer.php";
?>