<!DOCTYPE html>
<html>
<head>
    <?php
    include "partial/meta.php"
    ?>
    <link rel="stylesheet" href="css/register.css"/>
    <title>회원 가입</title>


</head>
<body style="background-image: url('https://s2.best-wallpaper.net/wallpaper/1920x1200/1904/Cat-study-hard-reading-book_1920x1200.jpg')">
<div bgcolor = "#cdfdee" width="100%" height="100%">
    <div id="header" class="join_membership" role="banner" padding="62px 0px 59px">
        <h1>회원가입</h1>
    </div>
    <form id="join_form" method="post" action="function/register.php">
        <div id="container">
            <div class="row_group">
                <div class="join_row">
                    <h5 class="join_title">아이디</h5>
                    <span class="ps_box">
                        <input id ="id" class="int" type = "text" name = "id" maxlength="20"/>
                    </span>
                    <span class="error_next_box">*필수 정보입니다.</span>
                </div>
                <div class="join_row">
                    <h5 class="join_title">비밀번호</h5>
                    <span class="ps_box">
                        <input class="int" type = "password" id="pw_init" name = "pw" maxlength="30"/>
                    </span>
                    <h5 class="join_title">비밀번호 확인</h5>
                    <span class="ps_box">
                        <input class="int" type = "password" id="pw_confirm" maxlength="30"/>
                    </span>
                    <span class="error_next_box" id="check_pw">&nbsp;*비밀번호를 다시입력하여주세요.</span>
                </div>
                <div>
                    <h5 class="join_title">이름</h5>
                    <span class="ps_box">
                        <input id="name" class="int" type = "text" name = "name" maxlength="10"/>
                    </span>
                </div>
                <div>
                    <h5 class="join_title">성별</h5>
                    <div class="ps_box join_sex">
                        <select class="sel" id="gender" name="gender">
                            <option value = "0" selected>남성</option>
                            <option value="1">여성</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5 class="join_title">이메일</h5>
                    <span class="ps_box">
                        <input id="email" class="int" type = "text" name = "email" maxlength="20"/>
                        <select class="step_url" id="email_domain" name="email_domain">
                            <option value="0" selected> @koreatech.ac.kr </option>
                            <option value="1"> @gmail.com </option>
                            <option value="2"> @naver.com </option>
                            <option value="3"> @daum.net </option>
                            <option value="4"> @nate.com </option>
                        </select>
                    </span>
                </div>
                <div>
                    <h5 class="join_title">휴대폰</h5>
                    <div class="phone_wrap">
                        <div class="phone_1">
                            <span class="ps_box">
                                <input class="int phone" type = "text" name = "phone1" maxlength="3"/>
                            </span>
                        </div>
                        <div class="phone_2">
                            <span class="ps_box">
                                <input class="int phone" type = "text" name = "phone2" maxlength="4"/>
                            </span>
                        </div>
                        <div class="phone_3">
                            <span class="ps_box">
                                <input class="int phone" type = "text" name = "phone3" maxlength="4"/>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="btn_area">
                    <button type="submit" class="btn_type primary">
                        <span>가입하기</span>
                    </button>
                </div>
            </div>
        </div>
        <div>
    </form>
</div>
</body>
<?php
include "partial/script.php"
?>
</html>