<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<style>
.bdy{
background-color:Turquoise;
}
</style>
<body class="bdy">
<div id="frm" align = "center">
<style>
.jumbotron{
    background-color:PaleTurquoise;

    height:350px;
    width:350px;
    
    }
</style>
<div class="jumbotron" >
<style>

</style>
<div align="center">
	<form action='PROCESS.php' id="form" method='post' >
    <div align="center">
		<p>
			<label>
				Username:
			</label>
			<input type="text" id="username" name="username">
		</p>
		<p>
			<label>
				Password:
			</label>
			<input type="text" id="password" name="password">
		</p>
      
		<p>
        <style>
        .btn{width:300px;}
        </style>
			<button type="submit" id="btn" value="login" class = "btn btn-success btn-xs">Login</button>
		</p>
        </div>
	</form>
</div>
</body>
</html>