<?php
    session_start();

    include "server_conn/conn.php";
?>
<!doctype html>
<html>
	<head>
        <?php
        include "partial/meta.php"
        ?>
        <link rel="stylesheet" href="css/Gallery.css">
	</head>
	<body>
		<!-- Start Navigation -->
        <?php
        include "partial/nav.php"
        ?>
		<!-- End Navigation -->
        <div class="hero-wrap gallery-nav">
            <div class="overlay"></div>
            <div class="circle-bg"></div>
            <div class="circle-bg-2"></div>
        </div>

        <div class="section-upload">
            <a id="upload_image" href="#"> Upload Image to Gallery </a>
        </div>
		<div style="padding: 0px;">
            <div id="gallery"style="display: none">
                <?php
                $sql = "select * from gallery where user_id='$_SESSION[id]'";
                $result = mysql_query($sql, $conn);
                while($row = mysql_fetch_array($result)) {
                    echo "<a href=\"#\">
                          <img alt=\"$row[title]\"
                             src=\"$row[imae_thumbs_url]\"
                             data-image=\"$row[image_big_url]\"
                             data-image-mobile=\"$row[imae_thumbs_url]\"
                             data-thumb-mobile=\"$row[imae_thumbs_url]\"
                             data-description=\"$row[description]\"
                             style=\"display:none\" />
                    </a>";
                }
                ?>
            </div>
		</div>

        <?php
        include "partial/popup.php"
        ?>

        <?php
        include "partial/script.php"
        ?>

	</body>
</html>