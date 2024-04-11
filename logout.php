<?php
      session_start();
      session_destroy();
      header("Location: ../newproject/index.php");
?>