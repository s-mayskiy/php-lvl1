<?php
const IMG_FOLDER = 'img/';
$goodFileslist = [];

function getImages($dir){

    global $goodFileslist;
    $list = scandir($dir); 
    
    if(!$list) {return false;}
    
    unset($list[0], $list[1]);
    
    foreach ($list as $file4check) {
        $mimeType = mime_content_type( $dir.DIRECTORY_SEPARATOR.$file4check);
        if(strpos($mimeType, 'image') == 0 ) {
            array_push($goodFileslist, $file4check);
        }
    }
}

getImages('./'.IMG_FOLDER);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">    
    <title>Lesson4</title>
  </head>
  <body>        
        <?php foreach ($goodFileslist as $imagefile): ?>        
        <a href="<?= IMG_FOLDER.$imagefile ?>"><img src="<?= IMG_FOLDER.$imagefile ?>" alt="image" height=" 100" target = "blank"></a>
        <?php endforeach;?>        
  </body>
</html>