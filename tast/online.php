<?php
$ping=file_get_contents();

if(isset($_REQUEST['ip'])){
    $ip=$_REQUEST['ip'];
}else{
    echo 'api error : ip not set';
}


?>