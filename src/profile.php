<?php
    include_once "../includes/layout_header.php";

    if($_SESSION['logged']) {
        ?>

        <!-- Contenu -->
        <div>
            <h1> Profile </h1>
        </div>

        <?php
    }
    else {
        echo $twig->render("page_access_denied.html");
    }

    include_once "../includes/layout_footer.php";
?>