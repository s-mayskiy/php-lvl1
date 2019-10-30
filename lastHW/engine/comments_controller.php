<?php

$Users4Cicle = getUsers();
$userComments = [];

foreach ($Users4Cicle as $userLoc)
{
    $commentBuf = getCommenst4User($userLoc["userLogin"]);        
    
    if (sizeof($commentBuf) > 0) {    
        $userComments[] = [$userLoc["userLogin"], $commentBuf];     
    }
}
