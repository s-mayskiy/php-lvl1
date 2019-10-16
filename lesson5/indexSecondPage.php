<?php
$pageNum = 2;
include './engine/autoload.php';
autoload('config');
include ENGINE_DIR.'db.php';
include ENGINE_DIR.'images_loader.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">    
    <title>Lesson5</title>
    <style type="text/css">
        .external { 
            flex: auto;
            display: flex;                        
        }
        .internal { 
            display: inline-block;                
            margin: 10px auto;
        }
        .pagination {
            width: 20%;  
            margin: 0 auto;
            text-align: center;            
        }
    </style> 
    </head>
    <body>        
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

    </body>
</html>