

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>

	<div class="header">

		<div class="naslov text-center">
			<h1 >Test</h1>
		</div>

			<div class="login">
				<?php 
					if( $user->is_logged_in() ){
						echo "Welcome:&nbsp". $_SESSION['username']. " <a href='logout.php'> Logout</a><br>";
					}
					else{
						echo "<a href='login.php'>Log in</a> <br><br>";
						echo "<a href='register.php'>Register </a> ";
					}
				?> 
			</div>  

				
	</div>
	