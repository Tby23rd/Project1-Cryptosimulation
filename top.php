<?php if($ndfpage==''){exit;
?>
<link href="styles.css" type="text/css" rel="stylesheet" />
<?php } 
?>
<script src="js/correctpng.js" type="text/javascript"></script>
<script type="text/javascript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

</script>   
<div id="lanrenzhijia">
  <ul class="jd_menu" id="lanren_nav">
  
    <table width="1250" border="0" align="center" cellpadding="0" cellspacing="0" style="width:98%; min-width:1250px; max-width:1530px;">
      <tr>
        <td width="139" height="80" align="left"><a href="./"><img src="imgs/logo.jpg" width="80" vspace="10" /></a></td>
        <td width="530" class="Bold"><a href="./" class="home">Home</a> &nbsp;&nbsp;<a href="prices.php" class="home">Prices</a> &nbsp;&nbsp;<a href="about.php" class="home">About Us</a> &nbsp;&nbsp; <a href="terms.php" class="home">Terms of Use</a></td>
        <td width="485" class="Bai">
    
        <img src="imgs/phonecall.png" width="40" height="40" class="Img_m" /><a href="tel:713-992-0916" class="home">713-992-0916</a><br />
        <img src="imgs/email.png" width="40" height="40"class="Img_m"  /><a href="mailto:amberkolescience@gmail.com" class="home">amberkolescience@gmail.com</a> </td>
        <td width="478" align="right" class="Bai">
<?php 
if (@$_SESSION["user"]<>"" ){ 
?>
Hi, <span class="Orange Bold"><?=$_SESSION["user"]?></span> !
    
     <a href="update.php" class="home Bold">My Account</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	 <?php if($user=='admin'){?>
     <a href="admin.php" class="home Bold">Admin</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <?php }?><a href="do.php?a=out" class="home Bold">Logout</a>&nbsp;&nbsp;
<?php 
} else { ?>
Welcome! <a href="login.php" class="home Bold"><u>Login/Register</u></a>
<?php } ?></td>
      </tr>
    </table>
  </ul>
</div>