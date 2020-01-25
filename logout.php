<?php
session_destroy();
echo "done logout";
header('Location: index.php');
?>
