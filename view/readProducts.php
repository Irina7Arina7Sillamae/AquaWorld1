<?php
ob_start();
?>

<h1>ONE Product<br>



<?php

ViewProducts::ReadProducts($n);

echo "<br>";
Controller::Comments($_GET['id']);

echo "<br>";
ViewComments::CommentsForm();


$content = ob_get_clean();
include_once 'view/layout.php';
?>