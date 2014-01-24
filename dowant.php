<?php
// No data? Exit early.
if ( empty($_POST) ) exit;

// Verify that user has agreed.
if ( !isset($_POST['agree']) ) die( _('You must agree to the terms and conditions!') );

$name  = $_POST['name'];
$email = $_POST['email'];
$agree = $_POST['agree'];

// Do something with the data; e.g. insert them into a DB.
?>
