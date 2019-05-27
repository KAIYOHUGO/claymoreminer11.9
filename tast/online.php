<?php
$json=[]
if(isset($_REQUEST['ip'])){
    $ip=$_REQUEST['ip'];
    $ping=file_get_contents($ip);
    if(!empty($ping)){
        $json=
    }else{

    }
}else{
    echo 'api error : ip not set';
}


?>