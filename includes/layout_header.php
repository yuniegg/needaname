<?php
    session_start();

    require_once "../lib/Twig/Autoloader.php";

    const ADMINISTRATOR = 0;


    if( !isset($_SESSION['logged']) )
    {
        $_SESSION['logged'] = false;
    }

    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem("../templates");
    $twig = new Twig_Environment($loader, array(
        "cache" => false
    ));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<link rel="stylesheet" media="screen" type="text/css"  href="../css/style_main.css"/>
	<meta http-equiv="Content-Type" content="text/html;charset=utf8" />
	<script src="../lib/jQuery/jquery.js"></script>
</head>

<body>

<div id="Header">
    <div id="top_menu">
        <ul>
            <li><a href="../home">Home</a></li>
            <?php if($_SESSION['logged']) { ?>
                <li><a href="../news">News</a></li>
                <li><a href="../profile">Profile</a></li>
                <?php if( $_SESSION['role'] == ADMINISTRATOR ) { ?>
                    <li><a href="../administration">Administration</a></li>
                <?php }
            } ?>
            <li><a href="../contact">Contact</a></li>
        </ul>
    </div>

	<?php if(!$_SESSION['logged']) {
        echo $twig->render("layout_not_logged.html");
	}
    else {
        echo $twig->render("layout_logged.html", array('username' => $_SESSION['username']));
    } ?>

</div>

<script type="text/javascript"></script>

