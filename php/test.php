<?php 
session_start();
echo $_SESSION['test'];
echo $_SESSION['username'];
if(isset($_SESSION['username']))
echo "welcome".$_SESSION["username"];
?>
<p>
hi there how are you feeling today.
</p>