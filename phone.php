<!doctype html>
<html>
<head>

<?php
$name=POST["name"];
$pass=POST["pass"];
include("database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysql_query("select * from table3 where login='$name' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		echo"<script type='text/javascript'> document.location = 'index1.php'; </script>";
		$_SESSION[login]=$loginid;
	}
}

?>
<title>jimma water service</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
<meta name="description" content="log in to update data.">
<meta property='og:image' content='earnmoney.jpg' />
<link rel="shortcut icon" href="https://www.facebook.com/rsrc.php/yl/r/H3nktOa7ZMg.ico">
<style>
table tr td{text-align:center;}
.bottom a{color:#D3D3D3;}
.bottom a:link{text-decoration:none;}
input{padding:10px;}
.login{background-color:#3b5998;color:white;}
.check{background-color:#47b6b4;color:white;padding:12px;}
.inputf a:link{text-decoration:none;}
</style>
</head>
<body style="margin:0px;">
<script>
document.title='Jimma water service';
</script>
<div style="width:100%;">
<div style="height:40px;background-color:#070708;padding-bottom:10px;padding-left:5px;">
<span style="color:white;font-size:120%;"><br/>JIMMA WATER SERVICE</span>
</div>
<div style="background-color:#2bdc40;padding:5px;line-height:23px;text-align:center;">
<span style="color:purple;">Login to continue .</span>
</div>
<div class="inputf" style="background-color:AliceBlue;padding:10px;text-align:center;"><br/>
<form name="form" method="post" action="index.php">
<input name="name" type="text" id="email" placeholder="USER NAME" maxlength="40" size="30px"
required><br/><br/>
<input name="pass" type="password" id="pass" placeholder="Password" maxlength="40" size="30px"
required><br/><br/>
<input class="login" name="login" type="submit" id="submit" value="Log In" size="60px"><br/><br/>
<span style="text-align:center;"></span><br/><br/>


</form>
</div>
<div class="bottom" style="background-color:#47b6b4;padding:10px;">
<table style="width:250px;margin-left:auto;margin-right:auto;color:#36c12f;">


</table>
<p style="text-align:center;color:white;">JIMMA WATER SERVICE</p>
</div>
</div>
</body>
</html>