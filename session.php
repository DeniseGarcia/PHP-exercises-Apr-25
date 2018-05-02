<?php
session_start();
$_SESSION['name']="Denise";

print "<p>Welcome, your session ID is
".$_SESSION['name']."</p>\n\n"; 


print "<p>Welcome, your session ID is ".session_id()."</p>\n\n"; 
?>