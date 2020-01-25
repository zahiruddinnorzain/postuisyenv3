<?php
session_start();
session_destroy();
echo "Done logout. Please wait..";
?>

<html>
<body>
<script>
location.replace("index.php");
</script>
</body>
</html>