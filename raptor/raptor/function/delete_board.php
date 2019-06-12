<?php
session_start();
include "../server_conn/conn.php";

$sql = "select author from board where board_id = $_GET[board_id]";
$result = mysql_query($sql);

if(isset($_SESSION['id'])) {
    $sql = "delete from board where board_id = $_GET[board_id]";
    $result = mysql_query($sql);
}
else {
    echo "
    <script>
        alert('로그인을 하십시오!');
    </script>";
}
?>

<script>
    location.replace('../board_list.php');
</script>