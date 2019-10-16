<?php
$query_limit = ($pageNum == 1 ? '' : ', 999999' );
$imagesData = getAssocResult('SELECT * FROM images  ORDER BY popularity DESC LIMIT '.IMAGE_ON_PAGE_LIMIT.$query_limit.';');

$goodFileslist = [];

if(!$imagesData) {return false;}
    
foreach ($imagesData as $dataRow) {

    if (!$dataRow || !array_key_exists('imageFile', $dataRow)) { continue; }

    $mimeType = mime_content_type(IMG_DIR.$dataRow['imageFile']);
    if(strpos($mimeType, 'image') == 0 ) {
        array_push($goodFileslist, [ 'link' => IMG_PATH.$dataRow['imageFile'], 'popularity' => ltrim($dataRow['popularity'], '0')]);
    }
}