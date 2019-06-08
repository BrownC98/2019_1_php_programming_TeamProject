<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.bpopup.min.js"></script>
<script type='text/javascript' src='js/unitegallery.min.js'></script>
<script type='text/javascript' src='js/ug-theme-tiles.js'></script>
<script type="text/javascript">

    jQuery(document).ready(function(){

        jQuery("#gallery").unitegallery();

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
                $('#blah').css('display', 'block');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>
<script>
    $('#login').click(function () {
        $('#element_to_pop_up').bPopup();
    });

    $('#upload_image').click(function () {
        $('#upload_image_pop_up').bPopup();
    });
    $('#pw_confirm').change(function () {
        if(($('#pw_init').val()) == ($('#pw_confirm').val())){
            $('#check_pw').css('color','green');
            $('#check_pw').text("비밀번호가 일치합니다.");
        }
        else{
            $('#check_pw').css('color','red');
            $('#check_pw').text("비밀번호가 일치하지 않습니다.");
        }
    });
    $("#pw_init").change(function(){
        checkPassword($('#pw_init').val(),$('#id1').val());
    });
    function checkPassword(password,id){

        if(!/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/.test(password)){
            alert('숫자+영문자+특수문자 조합으로 8자리 이상 사용해야 합니다.');
            $('#pw_init').val('').focus();
            return false;
        }
        var checkNumber = password.search(/[0-9]/g);
        var checkEnglish = password.search(/[a-z]/ig);
        if(checkNumber <0 || checkEnglish <0){
            alert("숫자와 영문자를 혼용하여야 합니다.");
            $('#pw_init').val('').focus();
            return false;
        }
        if(/(\w)\1\1\1/.test(password)){
            alert('같은 문자를 4번 이상 사용하실 수 없습니다.');
            $('#pw_init').val('').focus();
            return false;
        }

        /*if(password.search(id) > -1){
            alert("비밀번호에 아이디가 포함되었습니다.");
            $('#pw_init').val('').focus();
            return false;
        }*/
        return true;
    }
    $(window).load(function() {
        $('#loading').hide();
    });
</script>

