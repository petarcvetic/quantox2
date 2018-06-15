<?php require('includes/config.php');

$title = "Home Screen";

//include header template
require('layout/header.php');
?>


<div class="container">

	<h1 class="text-center"> HOME SCREEN </h1>

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form action="search.php" method="post">
				
				<div class="row">
				
					<div class="form-group">
						<input type="text" name="search" id="search" class="form-control input-lg" placeholder="Search" tabindex="1" required>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input type="submit" name="search_button" value="Search" class="btn btn-primary btn-lg" tabindex="5">
					</div>
					
				</div>
				
			</form>
			
		</div>
		
	</div>
	
</div>

<?php
//include footer template
require('layout/footer.php');
?>