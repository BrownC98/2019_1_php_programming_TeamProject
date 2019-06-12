<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <?
       include "server_conn/conn.php"
      ?>
      <?php
        include "partial/meta.php";
      ?>
  </head>
  <body>
    
  <?
    include "partial/nav.php";
  ?>

    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About this project</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div id="introduce"class="col-md-6 ftco-animate img about-image" style="background-image: url('https://ppss.kr/wp-content/uploads/2017/06/002-69-549x365.jpg');">
	    		</div>
	    		<div class="col-md-6 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">나만의 도서관리 홈페이지를 만들자</h2>
			              	<p>사용자가 자신의 도서기록들을 정리할 수 있는 사이트 구축</p>
                            <p>인기있는 도서들을 추천해주는 기능</p>
                            <p>도서에 대한 리뷰 작성도 추가</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
                            <h2 class="mb-4" style="color: #721c24">자신만의 책을 저장하는 공간</h2>
			              	<p>자신만의 책을 저장하는 공간을 갖게 하기 위해서 로그인 기능을 추가.로그인을 하게 되면 사용자만의 도서 저장 공간이 생깁니다. </p>
                            <h2 class="mb-4" style="color: #533f03">모두가 사용하는 공용 게시판</h2>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			                <h2 class="mb-4">자신만의 도서 인스타를 가지게 하자</h2>
			              	<p>주변 사람들과 소통하고 싶은 욕망을 채워주게 하면서</p>
			                <p>자신만의 도서 겔러리를 가지는 사이트를 얻게하자</p>
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Team</span>
            <h2 class="mb-4">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-5 ftco-animate">
            <div class="block-10">
              <div class="person-info mb-2">
                <span class="name" style="font-style: revert">김대건</span>
                <span class="position">2015136013</span>
              </div>
              <img src="images/daegun.jpg" alt="" class="img-fluid mb-3">
              <p>책 읽는 것 좋아하지만 요즘은 웹을 만들어야 해서 책을 못 읽고 있습니다.</p>
            </div>
          </div>
          <div class="col-md-4 mb-5 ftco-animate">
            <div class="block-10">
              <div class="person-info mb-2">
                <span class="name">갈동건</span>
                <span class="position">2017180002</span>
              </div>
              <img src="images/donggun.jpg" alt="" class="img-fluid mb-3">
              <p>안녕하세요 갈동건입니다.</p>
            </div>
          </div>
          <div class="col-md-4 mb-5 ftco-animate">
            <div class="block-10">
              <div class="person-info mb-2">
                <span class="name">Google</span>
                <span class="position">great partner</span>
              </div>
              <img src="https://pbs.twimg.com/profile_images/770139154898382848/ndFg-IDH.jpg" alt="" class="img-fluid mb-3">
              <p>구글은 타의 추종을 불허하는 강력한 검색 능력을 가지고 있다. 이 때문에 영미권에서 Google이라는 단어는 고유명사를 뛰어넘어서 '인터넷 정보 검색을 위해서 구글 엔진을 사용하다'의미의 동사 형태로도 통용되며, 이는 일개 인터넷 은어를 뛰어넘어서 심지어 웹스터 사전에서도 등재되어 있다..</p>
            </div>
          </div
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">JQEURY & JAVASCRIPT & CSS</span>
            <h2 class="mb-4">기능들</h2>
            <p>웹 페이지를 만드는 데 쓰이는 다양한 기능들 JQEURY, CSS 등의 다양한 플러그 인을 이용하여 완성하였는데 그러한 기능들에 대한 설명</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('https://previews.123rf.com/images/helmut1979/helmut19791508/helmut1979150800063/43544683-%ED%9D%B0%EC%83%89-%EB%B0%B0%EA%B2%BD%EC%97%90-%EB%B9%A8%EA%B0%84%EC%83%89-%EC%B2%B4%ED%81%AC-%EA%B8%B0%ED%98%B8-%EA%B7%B8%EB%A6%BC.jpg')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">숫자+영문자+특수문자 조합으로 8자리 이상 사용해야 한다.<br>숫자와 영문자를 혼용하여야 한다.<br>같은 문자를 4번 이상 사용할 수 없다.</p>
                    <p class="name">check Password</p>
                    <span class="position">JAVA Script</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('https://www.mangboard.com/wp-content/uploads/mangboard/2017/04/07/F816_imageupload.png')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">클라이언트 측에 있는 image를 <br>서버 측으로 이동시킨다.<br> 이 때 데이터 베이스도 연동되어 <br>튜플을 저장한다.</p>
                    <p class="name">Upload image</p>
                    <span class="position">JQuery</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQhG-Ugs4X64hzRQFSAwbj6AK6ggF-PhDvxc4JqIiiYbU61zHd')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">특정 이벤트에 대하여 팝업창을 띄운다.</p>
                    <p class="name">bPopup</p>
                    <span class="position">JQuery</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(https://t1.daumcdn.net/cfile/tistory/2350054F58B298A72B)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">구글 로그인 api로서 구글로 로그인하는 기능을 추가하였다.</p>
                    <p class="name">Google Login</p>
                    <span class="position">Failed</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('https://static8.depositphotos.com/1241729/873/v/950/depositphotos_8737963-stock-illustration-vector-red-x-cross-sign.jpg')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">css 디자인으로 x 표시를 가져왔다.</p>
                    <p class="name">x 표시</p>
                    <span class="position">CSS</span>
                  </div>
                </div>
              </div>
                <div class="item">
                    <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-5" style="background-image: url(https://t1.daumcdn.net/cfile/tistory/2350054F58B298A72B)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                        </div>
                        <div class="text">
                            <p class="mb-5">구글 로그인 api로서 구글로 로그인하는 기능을 추가하였다.</p>
                            <p class="name">Google Login</p>
                            <span class="position">Failed</span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
              <div class="col-md-7 text-center heading-section ftco-animate">
                  <span class="subheading">Services</span>
                  <h2 class="mb-4">아쉬운 점들</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
                  <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true">알라딘 API</a>

                      <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">네이버 API</a>

                      <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false">구글로그인 API</a>
                  </div>
              </div>
              <div class="col-md-12 align-items-center ftco-animate">

                  <div class="tab-content ftco-animate" id="v-pills-tabContent">

                      <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                          <div class="d-md-flex">
                              <div class="one-forth align-self-center">
                                  <img src="https://t1.daumcdn.net/cfile/tistory/1724A9174C6113160A" class="img-fluid border" alt="">
                              </div>
                              <div class="one-half ml-md-5 align-self-center">
                                  <h2 class="mb-4">TTB(thanks to Bloger)</h2>
                                  <p>해당 API나 링크로 도서를 구매 했을 경우 수익을 나누고 있어서
                                      활용하는 방법에 따라 어느정도 수입을 올릴 수도 있습니다.</p>
                                  <p>그런 이유에서 알라딘 api로 상품정보를 검색하기 위해서 사이트가 등록되어 있고 그것이 도서관련해서 접근하는 것인지를 명확히 해야해서 인증이 따로 필요합니다.</p>
                              </div>
                          </div>
                      </div>

                      <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                          <div class="d-md-flex">
                              <div class="one-forth order-last align-self-center">
                                  <img src="https://developers.naver.com/inc/devcenter/images/cont/img_search_tutorial_tab1_01.png" class="img-fluid border" alt="">
                              </div>
                              <div class="one-half order-first mr-md-5 align-self-center">
                                  <h2 class="mb-4">Naver API</h2>
                                  <p>네이버 책검색 API를 사용하여 아래와 같이 책 정보를 검색하는 웹페이지를 만드실 수 있습니다. 예제는 HTML/CSS 및 Ajax와 PHP를 사용하여 아래와 같은 결과를 만들 수 있도록 도와줍니다.</p>
                                  <p>기본적인 데이터 확인을 위하여 CSS를 사용하고 추가적으로 Ajax 사용을 위하여 JQuery가 사용되었습니다.</p>
                              </div>
                          </div>
                      </div>

                      <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                          <div class="d-md-flex">
                              <div class="one-forth align-self-center">
                                  <img src="https://t1.daumcdn.net/cfile/tistory/9994DC335A26428F19" class="img-fluid border" alt="">
                              </div>
                              <div class="one-half ml-md-5 align-self-center">
                                  <h2 class="mb-4">구글 로그인 API</h2>
                                  <p>컴퓨터에서 gmail.com으로 이동합니다.
                                      Google 계정 이메일 또는 전화번호와 비밀번호를 입력합니다.
                                      정보가 이미 입력되어 있어 다른 계정에 로그인해야 하는 경우 다른 계정 사용을 클릭합니다.
                                      로그인 페이지가 아니라 Gmail 소개 페이지가 표시되는 경우 페이지 오른쪽 위에 있는 로그인을 클릭합니다.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <?
    include "partial/foot.php"
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