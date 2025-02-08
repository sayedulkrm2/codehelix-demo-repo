<?php     include("../common/header.php");   ?>
<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php hint("will include the arg specified in the GET parameter \"library\", appends .php to end, escape with NULL byte %00"); ?>

<?php include('../common/header.php'); ?>

<form action="/LFI-2/index.php" method="GET">
    <input type="text" name="library">
</form>

<?php
$library = basename($_GET['library']); // Sanitize input
if (file_exists('includes/' . $library . '.php')) {
    include('includes/' . $library . '.php');
} else {
    // Handle error
}
?>
    <input type="text" name="library">
</form>

<?php
include("includes/".$_GET['library'].".php"); 
?>

