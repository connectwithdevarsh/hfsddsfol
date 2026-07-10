<?php
    session_start();
?>
<html>
    <body>
    <?php  
          $_SESSION["user"]="IT";
          echo "Session information are set successfully.</br>";
    ?>
    <a herf="session2.php">Visit session2,php</a>
    </body>
</html>
