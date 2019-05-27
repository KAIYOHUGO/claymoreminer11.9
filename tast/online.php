<?php

if(isset($_REQUEST['ip'])){
    $ip=$_REQUEST['ip'];
    $ping=file_get_contents($ip);
    if(!empty($ping)){

    }
}else{
    echo 'api error : ip not set';
}


?>