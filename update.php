<?php

/**
 * this page will load during processing user bug or sell in his profile page
 * it shows loading...
 * 
 */
require("sql.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<title>Update</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="favicon.png" />
		<link href="styles.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php require('top.php');?>
<div id="body1">
  <div style="padding:10px;"> </div>
  
  <table width="100%" border="0" cellspacing="20" cellpadding="0" >
    <tr>
      <td height="411" align="center">
      <p><img src="imgs/loading.gif" alt="loading" width="32" height="32" /></p>
    <p id="load">Loading...</p></td>
    </tr>
  </table>
  
</div>
<script type="text/javascript">
   htmlobj=$.ajax({url:"https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=90&page=1&sparkline=true&price_change_percentage=1h",async:true,type:"GET",dataType:"html",
   success:function(data){
   //$("#load").text(data);
		post1(data);
   }
   });
   
function post1(strs){
htmlobj2=$.ajax({url:"pfile.php?f=allprices.txt",async:true,type:"POST",data: {"str":encodeURIComponent(strs), "f":"allprices.txt"},
  		 success:function(data1){
		 $("#load").html(data1);
		 window.location.href="account.php";
   		}
  		 });
}
</script>
<?php require('bot.php')?>
</body>
</html>
<?php
/*
$fromurl=@$_GET["url"];
if($fromurl=="")$fromurl="account";
function getprices(){//获取json
//echo "<meta http-equiv=refresh content=0;URL=load.php>";exit;
$res = file_get_contents("https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=90&page=1&sparkline=true&price_change_percentage=1h");
//$res=json_decode($res,true);
$fp = fopen("json/allprices.txt",'w');
fwrite($fp,$res);
   fclose($fp);
   return $res;
}
$ps=getprices();
$ps=json_decode($ps,true);

for($i=0;$i<count($ps);$i++){
NDFsql("update currency set price='".$ps[$i]["current_price"]."',change='".$ps[$i]["price_change_percentage_24h"]."' where id='".$ps[$i]["id"]."' ");
}
echo "<meta http-equiv=refresh content=0;URL=".$fromurl.".php>";
*/
?>