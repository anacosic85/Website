<?php
require 'connect.php';
$id = $_GET["id"];
$sql = "UPDATE comment SET status='planned' WHERE id=$id";
$retval = mysqli_query($link, $sql);

if (!$retval)
{
    die('Could not update data: ' . mysql_error());
}
else
{
    header("Location: http://localhost/property/managecomments.php");
    exit;
}
mysqli_close($link); ?>

<!--
If the record is not found, output an error message. 
Otherwise, return to the managecomments.php page (using the header() function).
-->