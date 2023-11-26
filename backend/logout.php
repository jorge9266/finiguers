<?php
session_start();
session_destroy();
header("Location: /server/francisco/index.php");
exit();
?>