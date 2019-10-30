<?php
session_start();  
include './engine/autoload.php';
autoload('config');
include ENGINE_DIR.'db.php';
include ENGINE_DIR.'registration_controller.php';  

include TEMPLATES_DIR . 'header.php';
?>
<div class="text-center">
        <form class=" form-signin" method="post">
            <span class="h3 mb-3 font-weight-normal ">Регистрация</span>
            <div class="mt-3 form-group">
                <input name="Login" class="form-control" id="Login" placeholder="Логин" value="<?=$_POST['Login']?>">
                <i class="fa fa-user"></i>
            </div>
            <div class="mt-3 form-group">
                <input name="Email" class="form-control" id="Email" placeholder="Почтовый адрес" value="<?=$_POST['Email']?>">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group help">
                <input name="passFirst" type="password" class="form-control" id="passFirst" placeholder="Пароль" value="<?=$_POST['passFirst']?>">
                <i class="fa fa-lock"></i>
                <a href="#" class="fa fa-question-circle"></a>
            </div>
            <div class="form-group help">
                <input name="passSecond" type="password" class="form-control" id="passSecond" placeholder="Повторите пароль" value="<?=$_POST['passSecond']?>">
                <i class="fa fa-lock"></i>
                <a href="#" class="fa fa-question-circle"></a>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">РЕГИСТРАЦИЯ</button>
            </div>
					<?php if ($registrationError != ''): ?>
              <div class="alert alert-danger"><?= $registrationError ?></div>
					<?endif; ?>
        </form>


    </div>
<?php include TEMPLATES_DIR . 'footer.php';?>
<?php session_write_close();?>
