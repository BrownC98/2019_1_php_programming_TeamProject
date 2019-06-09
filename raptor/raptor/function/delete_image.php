<?
include "../server_conn/conn.php";

$sql ="delete from book_gallery where id = $_GET[id]";
$result = mysql_query($sql);
echo"<script>location.replace('../blog.php')</script>";
?>