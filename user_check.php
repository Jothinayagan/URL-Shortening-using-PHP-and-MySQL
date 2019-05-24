<?php
    session_start();
	$query = mysql_connect("localhost","root","");
             mysql_select_db("finalproj",$query);	
    $message="";
    $type=0;

try{
	  $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
	
	$username=$_POST["name"];
    $pass=$_POST["password"];
    $enc_pass = md5($pass);
//echo "$enc_pass";

    $result = mysql_query("SELECT * FROM users WHERE username='" . $username . "' and password = '".$enc_pass ."'");
    $var=$_POST["name"];
    echo "$var";
    $row  = mysql_fetch_array($result);

$sql = "UPDATE users SET lastlogin=now() WHERE username='" .$username . "'"; 
mysql_query($sql);
$status="User Logged in";
$sql1 = "insert into tbl_log values('$username',now(),'$status','$ipaddress' )  "; 
mysql_query($sql1);
if(is_array($row)) {

$_SESSION["user_name"] = $row[username];
$_SESSION["uname"]=$row[Name];
$type = $row[type];
$_SESSION["type"] = $type;
}


else {
	
$Message = "Incorrect password ";
    header("Location:index.php?Message={$Message}");

}

if(isset($_SESSION["user_name"])) {

if($type==1) {
header("Location:admin/index.php");
}
if($type==2) {
header("Location:user/index.php");
}
if($type==3) {
header("Location:dpc/index.php");
}

}

} 
catch(Error $e) {
    $trace = $e->getTrace();
    echo $e->getMessage().' in '.$e->getFile().' on line '.$e->getLine().' called from '.$trace[0]['file'].' on line '.$trace[0]['line'];
}
?>