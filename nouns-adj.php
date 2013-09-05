<!DOCTYPE html>


<html>

	<head>
	
		<title>Let's Learn German Together - Nouns/Adjectives</title>
	
		<link rel="stylesheet" type="text/css" href="styles.css">

		<?php include ('includes/meta.php'); ?>

		
	</head>
	
	<body>
	
	<?php include_once("includes/analyticstracking.php") ?>	
		
		<div class="app_window_main">
	
			<p class="app_title"><a href="index.php">Let's Learn German Together!</a></p>
			
			<div id="menu_space">
				
				<div id="menu_image">
				
					<p class="image">
						<img src="images/nouns-adj.jpg"/>
					</p>
				
				</div>
				
				<div id="menu">
					
					<p class="sec_title">Nouns</p>
				
					<p class="sec_lessons" id="noun_lessons">


					<?php

						$nouns_nav = array();
						$nouns_nav[0] = "Animals";
						$nouns_nav[1] = "Clothing";
						$nouns_nav[2] = "Food";
						$nouns_nav[3] = "Home";
						$nouns_nav[4] = "Travel";
						$y = 0;						

						foreach ($nouns_nav as $value) {
						
							echo "<a href='nouns/" . strtolower($value) . ".php'>" . $value . " </a>";
							$y++;
							
							if ($y == sizeof($nouns_nav)) { break; }
							else { echo "&nbsp; "; }

						}

					?>

					</p>

					<p class="sec_title">Adjectives</p>
				
					<p class="sec_lessons" id="verbs_lessons">Coming soon!</p>
				
					
				</div>
		
			</div>
		
		</div>
	
	<?php include ('includes/footer.php'); ?>
	
	</body>
	
</html>
