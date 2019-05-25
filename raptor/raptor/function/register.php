<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Abel
 * Date: 2019-05-13
 * Time: 오전 9:44
 */
include "../server_conn/conn.php";

$id = $_POST[id];
$pw = $_POST[pw];
$name = $_POST[name];
if($_POST[gender] == 0){
    $gender = "남성";
}
else if($_POST[gender] == 1){
    $gender = "여성";
}
switch ($_POST[email_domain]){
    case 0:
        $email_domain = "@koreatech.ac.kr";
        break;
    case 1:
        $email_domain = "@gmail.com";
        break;
    case 2:
        $email_domain = "@naver.com";
        break;
    case 3:
        $email_domain = "@daum.net";
        break;
    case 4:
        $email_domain = "@nate.com";
        break;
}
if(!($id || $pw || $name || $_POST[$email]||$_POST[phone1]||$_POST[phone2]||$_POST[phone3])){
    echo"<script> alert('올바르지 않은 회원정보입니다.')</script> <script> location.replace('../register.php')</script>";
}
else{
    $email = $_POST[email].$email_domain;
    $phone = $_POST[phone1]."-".$_POST[phone2]."-".$_POST[phone3];
    $sql = "insert into user values('$id','$pw','$name','$gender','$email','$phone')";
    $result = mysql_query($sql,$conn);
    if($result){

        echo"<script> alert('성공적으로 회원가입되었습니다.')</script> <script> location.replace('../index.php')</script>";
    }
    else{
        echo"<script> alert('올바르지 않은 회원정보입니다.')</script> <script> location.replace('../register.php')</script>";
    }
}
?>
