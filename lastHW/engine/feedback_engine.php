<?php
$userLookp = [];
function loadUserLookup ()
{
    global $userLookp;
    $userLookp = getUsers();
}

loadUserLookup();

?>