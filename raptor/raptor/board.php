<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "partial/meta.php";
    ?>

</head>
<body>

<?php
include "partial/nav.php";
?>
<!-- END nav -->
<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }
</script>
<div class="hero-wrap height">
    <div class="overlay"></div>
    <div class="circle-bg"></div>
    <div class="circle-bg-2"></div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th width="10%">번호</th>
            <th width="50%">제목</th>
            <th width="10%">작성자</th>
            <th width="20%">작성일</th>
            <th width="10%">조회</th>
        </tr>
        </thead>



    </table>






<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php
include "partial/popup.php"
?>

<?php
include "partial/script.php"
?>

<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>