<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Cross Site Request Forgery Protection</title>
</head>
<body>
	<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
			<center><h3>Synchronizer Token Pattern</h3></center> 
                    	<div class="float">
			<br>
                        <form class="form" action="result.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <center><input type="submit" name="Login" class="btn btn-info btn-md" value="Login"></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    	</div>
</body> 
</html>




