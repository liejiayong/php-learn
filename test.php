<?php

foreach($_SERVER as $key=>$val){

echo "$key ->  $val.<br/>";

}

//可以指定取出访问该页面的ip

echo "you friend ip :".$_SERVER['REMOTE_ADDR'];
?>

