<?php

  session_start();
  unset($_SESSION['usercode']);

  echo "
    <script>
      location.href='/my-schedule/index.php';
    </script>
  ";

?>