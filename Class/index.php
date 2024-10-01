<?php 
include("user.php");

$user = new role(1, "admin");
echo $user->role() . "<br>";

$admin = new admin(1, "admin", "dapat melakukan pemblokiran transaksi");
echo $admin->manageUser() . "<br>";
?>
