<?php
$query=mysql_connect("localhost","root","");
	   mysql_select_db("finalproj",$query);	

$username=$_POST['username'];
$pass=$_POST['password'];
$name=$_POST['name'];
$enc_pass = md5($pass);
$type=2;
//echo "$username"."$enc_pass"."$name";
$query1=mysql_query("insert into users values('$username','$enc_pass','$name','$type',now())");

if($query1)
{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('You have been sucessfully registered');";
echo "</script>";

$URL="index.php";
echo "<script>location.href='$URL'</script>";
}

?>