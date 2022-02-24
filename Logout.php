<?php
    session_start();
    unset($_SESSION['is_login']);
    unset($_SESSION['name']);
    echo "<script>
       alert('Logout successfully !');
       window.location.href = 'Login.php';
   </script>";