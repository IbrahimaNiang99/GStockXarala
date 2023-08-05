<?php
session_start();
session_unset();
session_destroy();
header('Location:/Xarala/G_StockPOO/view/auth/login.php')
?>