<?php
include_once "../includes/layout_header.php";

include_once "../classes/Templates.php";

$tmp = new Templates();
$tmp->loadAllTemplates();
?>

    <!-- Contenu -->
    <div>
        <h1> Home </h1>
    </div>

<?php include_once "../includes/layout_footer.php"; ?>