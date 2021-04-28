<?php
echo "Session Id : ";
session_start();
echo session_id();

session_destroy();
echo "<br><br>Session Id yang sudah diubah : ";
session_id(2000);
echo session_id();
?>