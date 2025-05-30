<?php
session_start();
session_unset();
session_destroy();
 header("Location: /JAWAMODUL6/index.php"); 
exit();
?>
