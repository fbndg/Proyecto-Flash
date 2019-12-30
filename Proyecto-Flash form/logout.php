<?php
      session_start();
      setcookie("usuarioEmail", null, time() - 1);
      setcookie("usuarioPassword", null, time() - 1);
      session_destroy();
      header("Location: index.php");
      exit;
?>
