<?php
session_start();
include "../server_conn/conn.php";

$sql = "insert into board(title, author, content) values('$_POST[title]','$_SESSION[id]', '$_POST[content]')";
$result = mysql_query($sql);

?>

<script>
    location.replace('../board_list.php');
</script>
/**
* Created by PhpStorm.
* User: kal02
* Date: 2019-06-12
* Time: 오후 9:56
*/