<?php
session_start();
$username= $_SESSION["user_name"];
include '../config.php';
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

$url=$_POST['url'];
$flag = 0;
$block = 0;
$uuu = mysql_query("select count(*) from tbl_user_url where url = '" . $url . "'");
$uu = mysql_fetch_row($uuu); 
$u = $uu[0];
//echo "$u";
if($u == 0)
{
    function jooRandom() {
        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLen = strlen($char);
        $ranStr = '';
        for ($i = 0; $i < 6; $i++) {
            $ranStr .= $char[rand(0, $charLen - 1)];
        }
        // echo "$ranStr";
        return $ranStr;
    }

    while($flag != 1)
    {
        $c = "select count(*) from tbl_user_url where gen = '" . jooRandom() . "'";
        if($c > 0)
        {
            $flag = 0;
            jooRandom();
        }
        else
        {
            $flag = 1;
            $gob = jooRandom();
            break;
        }
    }
    $block = 0;
}
else
    $block = 1;

if($url != null)
{
    if($block != 1)
    {
        if (filter_var($url, FILTER_VALIDATE_URL))
        { 
            $query1=mysql_query("insert into tbl_user_url values('$username','$gob','$url',now())");
            $status="User Added Url";
            $sql12 = "insert into tbl_log values('$username',now(),'$status','$ipaddress' )  "; 
            mysql_query($sql12);
            if($query1)
            {
                echo "<script language='javascript' type='text/javascript'>";
                echo "alert('You have been sucessfully added the url');";
                echo "</script>";
                $URL="index.php";   
                echo "<script>location.href='$URL'</script>";
            }
        }
        else
        { 
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Please enter valid URL');";
            echo "</script>";

            $URL="index.php";
            echo "<script>location.href='$URL'</script>";
        }
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('URL link is already exists...');";
        echo "$block";
        echo "</script>";

        $URL="index.php";
        echo "<script>location.href='$URL'</script>";
    }
}

else
{ 
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Please enter URL');";
    echo "</script>";

    $URL="index.php";
    echo "<script>location.href='$URL'</script>";
}
?>