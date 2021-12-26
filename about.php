<?php
require("sql.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<title>About Us</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="favicon.png" />
		<link href="styles.css" type="text/css" rel="stylesheet" /> 
</head>
<body>
<?php require('top.php');?>
<div id="body1">
  <div style="padding:10px;"> </div>
 <h1>About Blockchain</h1>
<div class="aboutus">
		  
<div class="textabout">
<p>
<b>What is Blockchain?</b>

Blockchain seems complicated, and it definitely can be, but its core concept is really quite simple. A blockchain is a type of database. To be able to understand blockchain, it helps to first understand what a database actually is. 


A database is a collection of information that is stored electronically on a computer system. Information, or data, in databases is typically structured in table format to allow for easier searching and filtering for specific information. What is the difference between someone using a spreadsheet to store information rather than a database?


Spreadsheets are designed for one person, or a small group of people, to store and access limited amounts of information. In contrast, a database is designed to house significantly larger amounts of information that can be accessed, filtered, and manipulated quickly and easily by any number of users at once.

Large databases achieve this by housing data on servers that are made of powerful computers. These servers can sometimes be built using hundreds or thousands of computers in order to have the computational power and storage capacity necessary for many users to access the database simultaneously. While a spreadsheet or database may be accessible to any number of people, it is often owned by a business and managed by an appointed individual that has complete control over how it works and the data within it.


So how does a blockchain differ from a database?


Storage Structure
One key difference between a typical database and a blockchain is the way the data is structured. A blockchain collects information together in groups, also known as blocks, that hold sets of information. Blocks have certain storage capacities and, when filled, are chained onto the previously filled block, forming a chain of data known as the “blockchain.” All new information that follows that freshly added block is compiled into a newly formed block that will then also be added to the chain once filled.

A database structures its data into tables whereas a blockchain, like its name implies, structures its data into chunks (blocks) that are chained together. This makes it so that all blockchains are databases but not all databases are blockchains. This system also inherently makes an irreversible timeline of data when implemented in a decentralized nature. When a block is filled it is set in stone and becomes a part of this timeline. Each block in the chain is given an exact timestamp when it is added to the chain.
 			</p>
</div>
<div class="imageabout"> 
      
                <img src="imgs/2.jpg" style="height: 400px;width: 350px;"/>
<div>
</div>
 </div> 
</div>

<?php require('bot.php')?>
</body>
</html>