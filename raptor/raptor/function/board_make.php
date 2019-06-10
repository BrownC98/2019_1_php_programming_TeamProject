<?php
session_start();
include "server_conn/conn.php";
$query = "inset into board()";
$result = mysql_query($query);
?>