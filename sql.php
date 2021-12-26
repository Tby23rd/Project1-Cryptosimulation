<?php
//ini_set("error_reporting",E_ALL & ~E_NOTICE);
session_start();
define("DBfile","sq##l.db");//add#sign to db name to prevent database creakers 
$webtitle="Aspire Crypto";//title
$ndfpage='1';//the default css index
phpjc();

function phpjc(){//if SQLite3 is enabled
if (extension_loaded('sqlite3')==false) { 
    echo '<div align="center"><br><b>Friendship tips:</b> Please turn on <b>sqlite3, GD(or GD2)</b> first.<br><br><img src="imgs/sqlite3.gif" hspace="20" /></div>';exit;
} 
}
function NDF_dq($sql,$str)//SQL find one data
{
$db = new SQLite3(DBfile);
//$db =new PDO('sqlite:english.db');
$stmt = $db->prepare($sql);
$result = $stmt->execute();
while ($row = $result->fetchArray())
{
return $row[$str];
}
}
function NDFdqs($sql)//SQL find one asset data
{
$db = new SQLite3(DBfile);
//$db =new PDO('sqlite:english.db');
$stmt = $db->prepare($sql);
$result = $stmt->execute();
while ($row = $result->fetchArray())
{
return $row;
}
}
function NDFsql($sql){//SQL execute
$db = new SQLite3(DBfile);
/*CREATE table people (name varchar(20));
INSERT INTO people VALUES ("Émilie");*/
return @$db->exec($sql);
}
/*
$db = new SQLite3('english.db');
$stmt = $db->prepare("SELECT * FROM stardict WHERE word='".$word."' limit 10");

$result = $stmt->execute();

while ($row = $result->fetchArray())

{
echo $row['translation'] . PHP_EOL;

}
*/
function GetR($url,$filename){//download icons
$c=file_get_contents($url);
  $fp = fopen($filename,'w');
fwrite($fp,$c);
   fclose($fp);
	return true;
}
function MD16($str)//MD5 encrypte password to save in database
{return substr(md5($str),8,16); }
function NDF_time()
{return gmdate("Y-m-d H:i:s",time()+0*3600);}//set time zone

function DisplayError($str)
{echo $str;} 

function NDF_get($str)
{
if($_GET[strtolower($str)]=="")
{return $_GET[strtoupper($str)];}
else
{return $_GET[strtolower($str)];}
}

function NDF_post($str)
{
if($_POST[strtolower($str)]=="")
{return $_POST[strtoupper($str)];}
else
{return $_POST[strtolower($str)];}
}
function NDFint($str)
{
if (is_numeric($str))
{return $str;}
else
{return 0;}
}
function get_url_content($url) {   
    if(extension_loaded('curl')) {   
        $ch = curl_init($url);   
        curl_setopt($ch, CURLOPT_HEADER, 0);   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        $content = curl_exec($ch);   
        curl_close($ch);   
    } else {   
        $content = file_get_contents($url);   
    }   
    !$content && die("ERROR:$url");   
    return $content;   
} 
function msg($str){//notification pop
echo "<script language=javascript>alert('".$str."');history.go(-1)</script>";exit;
}
function goback(){
header("location:".$_SERVER['HTTP_REFERER']);exit;
}
header("Content-type: text/html; charset=utf-8");
$user=@$_SESSION["user"];
function create(){//set up a SQLite database (see the structure)
NDFsql("CREATE table users (user varchar(50),balance float DEFAULT '0',psw varchar(20))");
//NDFsql("CREATE table account (user varchar(50),balance float DEFAULT '0')");
NDFsql("CREATE table orderlist (user varchar(50),currency varchar(30),qty float DEFAULT '0',price float DEFAULT '0',times varchar(30))");
NDFsql("CREATE table currency (id varchar(20),name varchar(30),symbol varchar(20),price varchar(20),change varchar(20))");
NDFsql("INSERT INTO users VALUES ('admin',0,'".MD16("888888")."')");
}

//create();//after we created sqlite3 in our project we dont need this anymore
?>