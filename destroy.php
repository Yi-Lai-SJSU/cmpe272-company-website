<?php
   session_start();
   echo "Bye Bye,".$_SESSION['firstName'];
   session_destroy();
?>