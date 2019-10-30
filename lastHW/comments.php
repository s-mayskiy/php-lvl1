<?php
    session_start();  
    include './engine/autoload.php';
    autoload('config');
    include ENGINE_DIR.'db.php';
    include ENGINE_DIR.'comments_controller.php';

    include TEMPLATES_DIR.'header.php';
    //print_r ($userComments);
?>
<a href="index.php">На главную<br></a>
<?php foreach ($userComments as $userComment): ?>
<h1><?=$userComment[0]?></h1><br>
    <?php foreach ($userComment[1] as $comment): ?>
    <p><b><?=$comment["Author"]?> написал: </b><?=$comment["text"]?></p><br>
    <?php endforeach;?>
<?php endforeach;?>        

<?php include TEMPLATES_DIR.'footer.php';?> 
<?php session_write_close(); ?>    
