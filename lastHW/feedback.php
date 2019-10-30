<?php
   session_start();  
   include './engine/autoload.php';
   autoload('config');
   include ENGINE_DIR.'db.php';
   include ENGINE_DIR.'images_loader.php';
   include ENGINE_DIR.'feedback_engine.php';  

   if ($_POST["feedbackText"] && $_POST["userSelection"][0] && $_POST["feedbackText"] != "" && $_POST["userSelection"][0] != "")
   {        
        insertFeedback($_POST["feedbackText"], $_POST["userSelection"][0], $_SESSION['user_name']);
   }
   include TEMPLATES_DIR.'header.php';   
?>


    <a href="index.php">На главную<br></a>
    <?php if(!$_SESSION['isAuth']):?>
    <h1>Комментарии может осталять тольго авторизованный пользователь!</h1>
    <?php else:?>          
        <form method="POST">
            <fieldset>
                <legend>Оставьте комментарий к другому пользователю</legend>
                <label>Выберете пользователя:
                    <select name="userSelection[]" id = "userSelectionInput" placeholder = "*">
                        <?php foreach ($userLookp as $curUser): ?>  
                        <option value="<?=$curUser['userLogin']?>"><?=$curUser['userLogin']?></option>
                        <?php endforeach;?>                    
                    </select>
                    <br> </label>
                    <br>
                <label>Тест комментария :<br>
                    <textarea cols="100" rows="10" placeholder="Текст Вашего сообщения" name="feedbackText"></textarea>
                    <br> </label>
                    <br>                
                <input type="submit" value="Отправить">        
            </fieldset>
        </form>      
    <?php endif;?> 
<?php include TEMPLATES_DIR.'footer.php';?> 
<?php session_write_close(); ?>