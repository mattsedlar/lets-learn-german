<!DOCTYPE html>


<html>

	<head>
	
		<title>Let's Learn German Together - Verbs</title>
	
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
						<img src="images/verbs.jpg"/>
					</p>
				
				</div>
				
				<div id="menu">
					

					<p class="sec_title">Verbs</p>
				
					<p class="sec_lessons" id="verbs_lessons">

		<?php



			$present_verbs_nav = array(



			"danken" => "to thank",

			"haben" => "to have",

			"m&ouml;gen" => "to like",

			"sagen" => "to say",

			"sein" => "to be"

			

			);



			$x = 0;



			echo "Present Tense<br/><br/> ";



			foreach ($present_verbs_nav as $verb => $trans) {				

			

			if (strpos($verb,"&ouml;") != false) {

			$verblink = str_replace("&ouml;","o", $verb);

			}



			elseif (strpos($verb,"&uuml;") != false) {

			$verblink = str_replace("&uuml;","u", $verb);

			}



			else { $verblink = $verb; }



				echo "<a href='verbs/" . strtolower($verblink)	.  ".php'>" . $verb . "</a> <dfn>(" .

					$trans . ")</dfn> ";

				$x++;



			if ($x == sizeof($present_verbs_nav)) { break; }



			else { echo "&#8226; "; }



			}



		?>

					</p>
				
					
				</div>
		
			</div>
		
		</div>
	
	<?php include ('includes/footer.php'); ?>
	
	</body>
	
</html>
