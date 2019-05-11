<?php

if(isset($_REQUEST['ip'])){
    $ip=$_REQUEST['ip'];
    $ping=file_get_contents($ip);
}else{
    echo 'api error : ip not set';
}


?>