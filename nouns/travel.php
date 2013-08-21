<!DOCTYPE html>


<html>

	<head>
	
		<title>Let's Learn German Together - Travel</title>
	
		<link rel="stylesheet" type="text/css" href="../styles.css">
		
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<?php include ('../includes/meta.php'); ?>
		
		<script src="../js/nouns.js"></script>
		<script src="../js/nouns-functions.js"></script>		

		<script>
		
		// Let's create our array
		
		var test_nouns = new Array();
		
		// and dump our nouns into the array
		
		for (var i in data.nouns) {
			
			if (data.nouns[i].category == "travel") {
				
			test_nouns[i] = data.nouns[i];	
			
			}
			
		}
		
		// Let's scramble the array so the user doesn't get the same experience twice
		
		test_nouns.sort(function() {return 0.75 - Math.random()});

		// Let's set a variable for cycling through the images in review_me function
		
		var x = 0;

		// Let's count the number of correct answers
		var correct_answers = 0;
	
		</script>
		
	</head>
	
	<body onload="review_nouns();">
		
	<?php include_once("../includes/analyticstracking.php") ?>
		
		<div class="app_window">
	
			<p class="app_title"><a href="../index.php">Let's Learn German Together!</a></p>
			
			<p class="sec_title">Nouns - Travel</p>
			
				<div id="img_space">
					
					<p><strong>Step 1</strong>: Review the noun genders by looking at the images below.
						<br/>
						<dfn>Der = masculine, Das = neuter, Die = feminine/plural</dfn>
					</p>
						
					<p id="count"></p>
					
					<p class="image">
						
						<img id="noun_image" src=""/> 
						<img id="next_image" src="" style="display:none;"/>
						
						<br/>
					
						<span id="noun_name"></span>
						
						<br/>		
					
						<span id="noun_translation"></span>
					
					</p>

					<iframe id="audio_link" src=""></iframe>		
				
				    <br/>
				
					<button class="button" onclick="review_nouns()">Next</button>
					
					<p>&nbsp;</p>
					<p><strong>Step 2</strong>: <button class="button" onclick="take_test();">Take the Test</button></p>
					
				</div>
				
				<div id="test_space">
					
					<div class="question_side">

						<div class="q_content">

							<div class="question">1.&nbsp;
								<select id="answer_one">
									<option value="Der">Der</option>
									<option value="Die">Die</option>
									<option value="Das">Das</option>
								</select>
							</div>

							<div class="question">2.&nbsp;
								<select id="answer_two">
									<option value="Der">Der</option>
									<option value="Die">Die</option>
									<option value="Das">Das</option>
								</select>
							</div>
							
							<div class="question">3.&nbsp;
								<select id="answer_three">
									<option value="Der">Der</option>
									<option value="Die">Die</option>
									<option value="Das">Das</option>
								</select>
							</div>
							
						</div>
					
					</div>
					
					<div class="answer_side">
					
						<div class="a_content">

								<div class="answer">
									<p id="question_one"></p>
								</div>
							
								<div class="answer">
									<p id="question_two"></p>
								</div>
							
								<div class="answer">
									<p id="question_three"></p>
								</div>
						
						</div>
								

					</div>
					
					<p>&nbsp;</p>
					<button class="button" id="score_button" onclick="check_answers();">Check</button>
					<p id="score"></p>
					<p id="replay"><a href="">Try Again</a> | <a href="../index.php">Home</a></p>
				
				</div>
			
			</div>
			
				<?php include ('../includes/footer.php'); ?>
					
	</body>
	
</html>
	
	
