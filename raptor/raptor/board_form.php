<?php
session_start();
if(isset($_GET[board_id])) {
    include "server_conn/conn.php";
    $query = "select * from board where board_id = $_GET[board_id]";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
}



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


<div class="hero-wrap">
    <div class="overlay"></div>
    <div class="circle-bg"></div>
    <div class="circle-bg-2"></div>
    <div class="container-fluid" style="padding-top: 150px" >
        <div  class=" no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }">
                <!-- Main content -->
                <section class="content container-fluid">
                    <div class="col-lg-12">
                        <div class="box box-primary">
                            <div class="card box-header with-border">
                                <h3 class="card-body box-title">글제목 : <? echo $row[title] ?></h3>
                                <div class="user-block">
                                <span class="username">
                                <a href="#"><? echo $row[author] ?></a>
                            </span>
                                    <span class="description"><? echo $row[date] ?></span>
                            </div>
                            <div class="box-body" style="height: 700px;">
                                <? echo $row[content] ?>
                            </div>
                            <div class="box-footer>">

                                </div>
                            </div>
                            <div class="box-footer">
                                <form role="form" method="post">
                                    <input type="hidden" name="articleNo" value="<? echo $row[board_id] ?>">
                                </form>
                                <button type="submit" class="btn btn-primary listBtn " onclick="location.href = 'board_list.php'"><i
                                            class="fa fa-list"></i> 목록
                                </button>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-warning modBtn" onclick="location.href = 'board_modify.php'"><i class="fa fa-edit"></i> 수정</button>
                                    <button type="submit" class="btn btn-warning delBtn" onclick="location.href = 'board_list.php'"><i class="fa fa-trash"></i> 삭제</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00"/>
        </svg>
    </div>


    <?php
    include "partial/popup.php"
    ?>

    <?php
    include "partial/script.php"
    ?>


</body>
</html>