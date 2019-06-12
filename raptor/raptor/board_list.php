<?php
session_start();
include "server_conn/conn.php";
$query = "select * from board";
$result = mysql_query($query);
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
<style>
    .box-body {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        position: relative;
        overflow-x: hidden;
        padding: 0
    }

    .box-title {
        display: inline-block;
        font-size: 18px;
        margin: 0;
        line-height: 1
    }

    .table tbody tr td {
        border: 1px solid lightgrey;
    }
</style>


<div class="hero-wrap">
    <div class="overlay"></div>
    <div class="circle-bg"></div>
    <div class="circle-bg-2"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread box-title" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">게시글 목록</h1>
                <section class="content" style="padding: auto">
                    <div class="col-lg-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                            </div>
                            <div class="box-body">
                                <table class="table table-light table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width: 30px ;">No.</th>
                                        <th style="width: 800px;">제목</th>
                                        <th style="width: 100px;">작성자</th>
                                        <th style="width: 150px;">작성시간</th>
                                        <th style="width: 150px;">조회수</th>
                                    </tr>;
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysql_fetch_array($result)){ ?>
                                        <tr>
                                            <td ><? echo $row[board_id] ?></td>
                                            <td ><a href="board_form.php?board_id=<? echo $row[board_id] ?>"><? echo $row[title]; ?></a></td>
                                            <td ><? echo $row[author]; ?></td>
                                            <td ><? echo $row[date]; ?></td>
                                            <td ><? echo $row[cnt]; ?></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box-footer">
                                <div class="pull-right">
                                    <?php if(isset($_SESSION['id'])){ ?>
                                        <button style="float: right" type="button" class="btn btn-success btn-flat" id="writeBtn" onclick="location.href = 'board_write.php'">
                                    <? } else {?>
                                        <button style="float: right" type="button" class="btn btn-success btn-flat" id="login" onclick="$('#element_to_pop_up').bPopup()">
                                           <? }?>

                                        <i class="fa fa-pencil"></i> 글쓰기
                                    </button>
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
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <?php
    include "partial/footer.php"
    ?>

<?php
include "partial/popup.php"
?>

<?php
include "partial/script.php"
?>


</body>
</html>