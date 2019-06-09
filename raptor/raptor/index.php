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
    
    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

          <div class="one-forth pr-md-4 ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
          	<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Book. <br> Review. <br> Changing.</h1>
            <p style="font-style: italic" class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">아무도 기억하지 못하는 순간을 홀로 기억할 때 그 순간은 나만의 것이 된다.</p>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Get started</a></p>
          </div>
          <div class="one-half align-self-md-end align-self-sm-center">
          	<div class="slider-carousel owl-carousel">
          		<div class="item">
			          <img style='border-radius: 10px' src="https://ppss.kr/wp-content/uploads/2017/06/002-69-549x365.jpg" class="img-fluid img"alt="">
		          </div>
		          <div class="item">
			          <img style='border-radius: 10px' src="http://img.khan.co.kr/news/2018/09/22/l_2018092201002299800214739.jpg" class="images/dashboard_full_1.pngimg-fluid img"alt="">
		          </div>
		          <div class="item">
			          <img style='border-radius: 10px' src="https://t1.daumcdn.net/cfile/tistory/23118938551419042D" class="img-fluid img"alt="">
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 mt-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Get Book</span>
            <h2 style="color: #9e0b0f" class="mb-4">어떤 책이 있을까?</h2>
            <p>작품 제목, 작가 주인공을 검색해 보세요</p>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-8 ftco-animate">
    				<form action="#" class="domain-form">
              <div class="form-group d-md-flex">
                <input type="text" class="form-control px-4" placeholder="작품 제목, 작가 주인공을 검색해 보세요">
                <input type="submit" class="search-domain btn btn-primary px-5" value="Search Domain">
              </div>
            </form>
            <p class="domain-price text-center"><span><small>**</small>도서를 검색하고 다양한 리뷰와 평점들을 만나보세요<small>**</small></span></p>
    			</div>
    		</div>
    	</div>
    </section>
  
    <section class="ftco-section services-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-4">많은 홍보 부탁 드립니다.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span style="width: 60px; height: 84px" class="icon-twitter"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">트위터</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="icon-facebook"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">페이스 북</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="icon-instagram"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">인스타그램</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">이 달의 책</span>
            <h2 class="mb-4">베스트 리뷰</h2>
            <p>혼자 있는 시간을 다른이들과 있는 시간만큼<br>아니면 그보다 더 유익한 시간들로 만들어 주는 책들</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
                <?php
                echo"<div class=\"item\">";
                echo"<div class=\"testimony-wrap p-4 pb-5\">";
                echo"<div class=\"user-img mb-5\" style=\"background-image:url($row[image])\">";
                echo"<span class=\"quote d-flex align-items-center justify-content-center\">";
                echo"<i class=\"icon-quote-left\"></i>";
                echo"</span>";
                echo"</div>";
                echo"<div class=\"text\">";
                echo"<p class=\"mb-5\"> $row[description] </p>";
                echo"<p class=\"name\">$row[id]</p>";
                echo" <span class=\"position\">Interface Designer</span>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?
   include "partial/foot.php";
  ?>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  include "partial/popup.php"
  ?>

  <?php
  include "partial/script.php"
  ?>
    
  </body>
</html>