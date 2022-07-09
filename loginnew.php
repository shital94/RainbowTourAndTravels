    <?php  
    session_start();//session starts here  
      
    ?>  
      
      
      
    <html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
        <title>Login</title>  
    </head>  
    <style>  
        .login-panel {  
            margin-top: 150px;  
      
    </style>  
      
    <body>  
      
      
    <div class="container">  
        <div class="row">  
            <div class="col-md-4 col-md-offset-4">  
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Login Here</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="loginnew.php">  
                            <fieldset>  
                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                </div>  
      
      
                                   <a href="index.php"> <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" ></a>  
      
                                 
                                
                            </fieldset>  
                        </form>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
      
      
    </body>  
      
    </html>  
      
    <?php  
      
    //require_once("db_conection.php");  
	
	//database connectivity
	$HostName = "localhost";
	$DBUserName = "root";
	$DBPassword = "";
	$DatabaseName = "rainbowtourstravel";
	
	
	//step 1 select database server to connect
	 $dbcon= mysqli_connect($HostName,$DBUserName,$DBPassword) or die(mysqli_error($dbcon));
	//echo "connected";
	//step 2 select database
	mysqli_select_db($dbcon,"user") or die(mysqli_error($dbcon));
	
	
      
    if(isset($_POST['login']))  
    {  
        $user_email=$_POST['email'];  
        $user_pass=$_POST['pass'];  
      
        $check_user="select * from user WHERE user_email='$user_email' AND user_pass='$user_pass'";  
      
        $run=mysqli_query($dbcon,$check_user);  
      
        if(mysqli_num_rows($run))  
        {  
            echo "<script>window.open('welcomenew.php','_self')</script>";  
      
            $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
      
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
        }  
    }  
    ?>  
