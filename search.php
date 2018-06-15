<?php
//include config
require_once('includes/config.php');
include('classes/database.php');
$database = new Database;
$title = 'search';

if(isset($_POST["search_button"])){
	$word = strip_tags($_POST["search"]);
}

//include header template
require('layout/header.php'); 
?>

	<div class="container">

		<div class="row">

			<?php
			if( $user->is_logged_in() ){ 
			?>
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">					
					<h2>Results</h2>
					<p><a href='index.php'>Back to home page</a></p>
			<?php
					$query = "SELECT * FROM members WHERE username LIKE '%$word%' OR email LIKE '%$word%' ";
					$database->query($query);
					$results = $database->resultset();
					$database->query($query);
					$num_rows = $database->num_rows();

					if($num_rows != 0){
						echo "<table class='table table-bordered text-center'>
								<th class='row'>
									<td class='col col-lg-4'>ID</td>
									<td class='col col-lg-4'>Username</td>
									<td class='col col-lg-4'>Email</td>
								</th>";
						foreach($results as $row){
							echo "<tr class='row'><td class='col col-lg-4'>" . $row["memberID"]. "</td><td class='col col-lg-4'>" . $row["username"] .  "</td><td class='col col-lg-4'>" . $row["email"] . "</td></tr>";
						}
						echo "</table>";
					}
					else{
						echo "There is no results for search";
					}
					
				echo "</div>";
			}
			else{
				//include login form
				require('login.inc.php'); 
			}
			?>
			
		</div>
	</div>

<?php
//include footer template
require('layout/footer.php'); 
?>