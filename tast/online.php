<?php
$json=[]
if(isset($_REQUEST['ip'])){
    $ip=$_REQUEST['ip'];
    $ping=file_get_contents($ip);
}elseif(!empty($ping)){
        $json=['ctt'=>$ping];
}else {
    $json=['ecd'=>'100];
}
?>