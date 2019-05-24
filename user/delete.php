<?php 
	$gen= $_GET['short'];
    $query = mysql_connect("localhost","root","");
             mysql_select_db("finalproj",$query);
	$query1 = mysql_query("delete from tbl_user_url where gen = '" .$gen. "'");
    echo "$gen";
	if($query1)
    {
	echo "<script language='javascript' type='text/javascript'>";
	echo "alert('Deleted');";
    echo "</script>";
    $URL="viewuserurls.php";   
	echo "<script>location.href='$URL'</script>";
    }
    else
    {
    echo "Invalid";
    }
?>