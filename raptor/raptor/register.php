<!DOCTYPE html>
<html>
<head>
    <?php
    include "partial/meta.php"
    ?>
    <style>
        div{
            display : block;
        }
        #header{
            padding : 62px 0px 59px;
            text-align: center;
        }
        .join_title{
            margin: 19px 0px 8px;
            font-size: 14px;
            font-weight: 700;
        }
        #container, #footer, #header{
            margin: 0 auto;
            max-width: 500px;
            max-height: 460px;
        }
        #header.join_membership{
            padding-bottom: 20px ;
        }
        body, button, input, select, table, textarea {
            font-family: Dotum,'돋움',Helvetica,sans-serif;
            font-size: 12px;
            webkit-text-size-adjust: none;
        }
        .btn_type.primary{
            color: #fff;
            background-color: #bd2130;
        }
        .int.phone{
            font-size: 20px;
            text-align: center;
        }
        div.row_group {
            overflow: hidden;
            width: 100%;
        }
        .ps_box, .ps_box_disable {
            display: block;
            position: relative;
            width: 100%;
            height: 51px;
            border: solid 1px #dadada;
            padding: 10px 14px 10px 14px;
            background: #fff;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            vertical-align: top;
        }
        button, input, select, textarea {
            border: 0;
            border-radius: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        #email.int{
            width: 300px;
        }
        .ps_box.mobile{
            width: 146px;
        }
        .int {
            display: block;
            position: relative;
            width: 100%;
            height: 29px;
            padding-right: 25px;
            line-height: 29px;
            border: none;
            background: #fff;
            font-size: 15px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            z-index: 10;
        }
        .error_next_box {
            display: block;
            margin: 9px 0 -2px;
            font-size: 12px;
            line-height: 14px;
            color: red;
        }
        .sel {
            width: 100%;
            height: 29px;
            padding: 7px 8px 6px 7px\9;
            font-size: 15px;
            line-height: 18px;
            color: #000;
            border: none;
            border-radius: 0;
            *height: auto;
            *margin-top: 3px;
            -webkit-appearance: none;
            background: #fff url(https://static.nid.naver.com/images/join/pc/sel_arr_2x.gif) 100% 50% no-repeat;
            -webkit-background-size: 20px 8px;
            background-size: 20px 8px;
        }
        .gender_nationality .gender_code, .join_mobile .country_code, .join_sex .gender_code {
            display: block;
            width: 100%;
            padding-right: 7px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .btn_type {
            display: block;
            width: 100%;
            padding: 21px 0 17px;
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            cursor: pointer;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .step_url {
            position: absolute;
            top: 16px;
            right: 13px;
            font-size: 15px;
            line-height: 18px;
            color: #8e8e8e;
        }
        .phone_1, .phone_2, .phone_3 {
            display: table-cell;
            table-layout: fixed;
            width: 147px;
            vertical-align: middle;
            *display: block;
            *float: left;
        }
        .phone_2, .phone_3{
            padding-left: 10px;
        }
        input {
            text-rendering: auto;
            color: initial;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            margin: 0em;
            font: 400 13.3333px Arial;
        }
        input {
            -webkit-writing-mode: horizontal-tb !important;
        }
        .phone_wrap{
            display: table;
            width: 100%;
        }
        .btn_area {
            margin: 30px 0 9px;
        }
    </style>
    <title>회원 가입</title>


</head>
<body>
<div bgcolor = "#cdfdee" width="100%">
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
                        <input class="int" type = "password" id="pw_confirm" name = "pw" maxlength="30"/>
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
                        <input id="email" class="int" type = "text" name = "name" maxlength="20"/>
                        <select class="step_url" id="email_domain">
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
                                <input class="int phone" type = "text" name = "name" maxlength="3"/>
                            </span>
                        </div>
                        <div class="phone_2">
                            <span class="ps_box">
                                <input class="int phone" type = "text" name = "name" maxlength="4"/>
                            </span>
                        </div>
                        <div class="phone_3">
                            <span class="ps_box">
                                <input class="int phone" type = "text" name = "name" maxlength="4"/>
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