<div id="element_to_pop_up">
    <h3>Login</h3>
    <form method="post" action="function/login.php">
        <div class="login_form">
             <span class="join_box">
                <input class="int" type="text" placeholder="id" name="id">
            </span>
            <span class="join_box pw">
                <input class="int" type="password" placeholder="password" name="pw">
            </span>
        </div>
        <div>
            <input class="btn_type" type="submit" value="Login">
            <input class="btn_type" type="button" id="regist" onclick="location.href='register.php'" value="sign up">
        </div>
    </form>
</div>

<div id="upload_image_pop_up">
    <h3> Upload Image </h3>
    <form id="form1" enctype='multipart/form-data' method="post" action="function/upload_image.php">
        <input type='file' id="imgInp" name="myfile" />
        <img id="blah" src="#" alt="your image" style="display: none; margin-bottom: 10px;" />
        <input type="text" placeholder="title" name="title">
        <input type="text" placeholder="description" name="description">
        <input type="submit" value="Upload">
    </form>
</div>