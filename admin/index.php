<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Index File</title>
<style>
	input[type=text]
	{
		height:26px;
		width:250px;
	}
	input[type=password]
	{
		height:26px;
		width:250px;
	}
	input[type=submit]
	{
		height:39px;
		width:120px;
		background:rgb(0,0,51);
		color:white;
		text-decoration:none;
		border:none;
		font-size:23px;
		
	}
</style>

</head>

<body>
	<h3 align="center" style="color:red;"><?php echo @$_GET["success"]; ?> </h3>
    <h3 align="center" style="color:red;"><?php echo @$_GET["logout"]; ?> </h3>
    <h3 align="center" style="color:red;"><?php echo @$_GET["notlogin"]; ?> </h3>
   	<form action="login.php" method="post">
    <table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
    <tr>
    	<th colspan="6" align="center" style="background:indigo;color:white"><h1>Admin Login </h1></th>
    </tr>
    <tr>
    	<th align="right">Username:</th>
        <td><input type="text" name="txtuser"></td>
    </tr>
     <tr>
    	<th align="right">Password:</th>
        <td><input type="password" name="txtpass"></td>
    </tr>
    <tr>
    	<td align="center" colspan="2">
       <input type="submit" name="sub" value="Log In"></td>
    </tr>
    </table>
    </form>
    
</body>
</html>