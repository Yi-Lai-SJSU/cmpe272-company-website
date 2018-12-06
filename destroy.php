<?php
   session_start();
   echo "Bye Bye,".$_SESSION['firstName'];
   session_destroy();

   $link_address = 'index.html';
   echo $link_address;
   echo "<script type='text/javascript'>";
   echo "window.location.href='$link_address'";
   echo "</script>";
?>