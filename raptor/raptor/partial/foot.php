<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">BRC.</h2>
                    <p class="mt-4"><a href="#" class="btn btn-primary p-3">Get in touch</a></p>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5"></div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Navigational</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Home</a></li>
                        <li><a href="about.php" class="py-2 d-block">About</a></li>
                        <li><a href="blog.php" class="py-2 d-block">Blog</a></li>
                        <?php
                        if($_SESSION[id]) {
                            // Login state
                            echo "<li><a href=\"blog.php\" class=\"py-2 d-block\">Mybooks</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">충청남도 천안시 동남구 병천면 충절로 1600</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+82 10 3329 5716</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">kimdaegun1114@gmail.com</span></a></li>
                            <li><span class="icon icon-clock-o"></span><span class="text">Saturday &mdash; Sunday 8:00am - 5:00pm</span></li>
                        </ul>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span id="twitter" class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span id="facebook" class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span id="instagram" class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
