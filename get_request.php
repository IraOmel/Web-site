<?php
require '../pages/header.php';
if(isset($_GET['page'])) {
    $page = strip_tags($_GET['page']);
//    echo $page;
    require "$page" . '.php';
}
?>