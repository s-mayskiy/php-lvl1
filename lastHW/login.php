<?php
session_start();
include './engine/autoload.php';
autoload('config');

include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'login_controller.php';
include TEMPLATES_DIR . 'header.php';
?>
    <div class="text-center">
        <form class=" form-signin" method="post">
            <span class="h3 mb-3 font-weight-normal ">АВТОРИЗАЦИЯ</span>
            <div class="mt-3 form-group">
                <input name="login" class="form-control" id="inputEmail" placeholder="Login">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group help">
                <input name="password" type="password" class="form-control" id="inputPassword"
                       placeholder="Password">
                <i class="fa fa-lock"></i>
                <a href="#" class="fa fa-question-circle"></a>
            </div>
            <div class="form-group">

                <button type="submit" class="btn btn-lg btn-primary btn-block">ВХОД</button>
            </div>
					<?php if ($status != ''): ?>
              <div class="alert alert-danger"><?= $status ?></div>
					<?endif; ?>
        </form>


    </div>
<?php include TEMPLATES_DIR . 'footer.php';?>
<?php session_write_close();?>
