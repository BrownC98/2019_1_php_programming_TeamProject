<?php
session_start();
if(isset($_GET[board_id])) {
    include "server_conn/conn.php";
    $query = "select * from board where board_id = $_GET[board_id]";
    $result = mysql_query($query);
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


<div class="hero-wrap height">
    <div class="overlay"></div>
    <div class="circle-bg"></div>
    <div class="circle-bg-2"></div>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="col-lg-12">
            <form role="form" id="writeform" method="post" action="/article/modify">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">make article</h3>
                    </div>
                    <div class="box-body">
                        <input type="hidden" name="articleNo" value="${article.articleNo}">
                        <div class="form-group">
                            <label for="title">제목</label>
                            <input class="form-control" id="title" name="title" placeholder="제목을 입력해주세요" value="${article.title}">
                        </div>
                        <div class="form-group">
                            <label for="content">내용</label>
                            <textarea class="form-control" id="content" name="content" rows="30"
                                      placeholder="내용을 입력해주세요" style="resize: none;">${article.content}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="writer">작성자</label>
                            <input class="form-control" id="writer" name="writer" value="${article.writer}" readonly>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-primary"><i class="fa fa-list"></i> 목록</button>
                        <div class="pull-right">
                            <button type="button" class="btn btn-warning cancelBtn"><i class="fa fa-trash"></i> 취소</button>
                            <button type="submit" class="btn btn-success modBtn"><i class="fa fa-save"></i> 저장</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>


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