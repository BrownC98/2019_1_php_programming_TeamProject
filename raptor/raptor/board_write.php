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
</style>


<div class="hero-wrap">
    <div class="overlay"></div>
    <div class="circle-bg"></div>
    <div class="circle-bg-2"></div>
    <div class="container-fluid" style="padding-top: 150px" >
        <div  class=" no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }">
                <!-- Main content -->
                <section class="content container-fluid" style="width: 90%;">
                    <div class="col-lg-12">
                        <form role="form" id="writeForm" method="post" action="function/board_make.php">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="form-group">
                                        <input class="form-control" id="title" name="title" placeholder="제목">
                                    </div>
                                    <div class="form-group">
                                            <textarea class="form-control" id="content" name="content" rows="8"
                                                      placeholder="내용" style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="writer" name="writer" placeholder="글쓴이">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="button" style="float: left;" class="btn btn-primary listBtn" onclick="location.href = 'board_list.php'"><i class="fa fa-list"></i> List</button>
                                    <div class="pull-right" style="float: right">
                                        <button type="reset" class="btn btn-warning"><i class="fa fa-reply"></i> Reset</button>
                                        <button type="submit" class="btn btn-success saveBtn"><i class="fa fa-save"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>





<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<?php
include "partial/foot.php"
?>

<?php
include "partial/popup.php"
?>

<?php
include "partial/script.php"
?>


</body>
</html>