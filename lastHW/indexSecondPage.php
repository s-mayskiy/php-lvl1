<?php
session_start();
$pageNum = 2;
include './engine/autoload.php';
autoload('config');
include ENGINE_DIR.'db.php';
include ENGINE_DIR.'images_loader.php';

include TEMPLATES_DIR.'header.php';
?>   
    <div class="external">
        <?php foreach ($goodFileslist as $imageData): ?>        
        <div class="internal">
            <a href="<?= $imageData['link'] ?>" target = "blank"><img src="<?= $imageData['link'] ?>" alt="image" height="100"></a><br>Популярность: <?= $imageData['popularity']?>
        </div>
        <?php endforeach;?>        
    </div>

    <div class="pagination">Страницы</div>
    <div class="external pagination">
        <div class="internal">
            <a href="index.php">1</a>
        </div>
        <div class="internal">
            2                
        </div>
    </div>
    <div class="pagination">
        <a href="feedback.php">Оставить отзыв<br></a>    
    </div>
    <div class="pagination">
        <a href="comments.php">Смотреть отзывы<br></a>    
    </div>
<?php include TEMPLATES_DIR.'footer.php';?>
<?php session_write_close(); ?>