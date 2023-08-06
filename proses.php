<?php
$user = $_POST['user'];
$password = $_POST['password'];
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"./$user-$password\";
// -->
</script>";
?>