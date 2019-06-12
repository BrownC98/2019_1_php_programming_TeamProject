<?php
session_start();
include "server_conn/conn.php";

$query = "insert into board(title, author,cnt) values('hello', 'kal', 0)";
$result = mysql_query($query);
?>