<?php  
   include './engine/autoload.php';
   autoload('config');
   include ENGINE_DIR.'db.php';

   echo $_GET["feedbackText"];
   echo $_GET["userName"];
   if ($_GET["feedbackText"] && $_GET["userName"] && $_GET["feedbackText"] != "" && $_GET["userName"] != "")
   {
        insertFeedback($_GET["feedbackText"], $_GET["userName"]);
   }
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
<body>    
    <a href="index.php">На главную<br></a>
    <form method="get">
        <fieldset>
            <legend>Оставьте свой отзыв</legend>
            <label>Ваше имя:
                <input type="text" name="userName">
                <br> </label>
            <label>Тест отзыва :<br>
                <textarea cols="100" rows="10" placeholder="Текст Вашего сообщения" name="feedbackText"></textarea>
                <br> </label>                
            <input type="submit" value="Отправить">        
        </fieldset>
    </form>                         
</body>

</html>