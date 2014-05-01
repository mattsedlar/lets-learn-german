<!DOCTYPE html>

<html>

	<head>
	
		<title>Let's Learn German Together - Haben (To Have)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php include ('../includes/meta.php'); ?>
	
		<link rel="stylesheet" type="text/css" href="../styles.css">
		
		<script src="../js/verbs.js"></script>		
		<script src="../js/verb-functions.js"></script>

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

			
		<script type="text/javascript">
			
		var test_verb = "haben";
		var verb_pronoun = ["ich","du","er/sie/es","wir","ihr","sie/Sie"];
		var verb_conjug = new Array();
		
		// mixing up the pronoun and conjugation so user doesn't get the same experience
		var rndm = Math.floor((Math.random()*6)+0);
		
		// This is going to be a noun in our test sentence
		var sentence_noun = "Katzen";

                // I'm going to set translation options here
                var i_conj = "have";
                var it_conj = "has";
                var we_conj = "have";

		var correct_answer; // Do something with this
		
		var columnA = document.getElementsByClassName('columnA');
		var columnB = document.getElementsByClassName('columnB');	
		var columnC = document.getElementsByClassName('columnC');

		var columnA_answers = document.getElementsByClassName('columnA_answers');
		var columnB_answers = document.getElementsByClassName('columnB_answers');	
		var columnC_answers = document.getElementsByClassName('columnC_answers');
		var columnD_answers = document.getElementsByClassName('columnD_answers');
		var columnE_answers = document.getElementsByClassName('columnE_answers');	
		var columnF_answers = document.getElementsByClassName('columnF_answers');	
		
		        	
		</script>
		
	</head>
	
	<body onload="review_verbs();">
			<?php include_once("../includes/analyticstracking.php") ?>	

		
		<div class="app_window">
	
			<p class="app_title"><a href="../index.php">Let's Learn German Together!</a></p>
			
			<p class="sec_title">Verbs - Haben (To Have)</p>
			
				<div id="img_space">
					
					<p><strong>Step 1</strong>: Review the verb conjugation below.
						<br/>
						<dfn>ich = I, du = you (informal), er/sie/es = he/she/it, wir = we, ihr = you (plural), sie/Sie = they, you (formal)</dfn>
					</p>
											
				<div id="verb_space">


						<div id="verb_review_left">
							<p>ich</p>																											
							<p>du</p>
							<p>er/sie/es</p>
							<p>wir</p>
							<p>ihr</p>
							<p>sie/Sie</p>
						</div>

					
										
						<div id="verb_review_right">
						
						</div>
						
			
				</div>
				
					<p>&nbsp;</p>
					<p><strong>Step 2</strong>: <button class="button" onclick="take_test();">Take the Test</button></p>
					<p>&nbsp;</p>
					
				</div>
				
				<div id="test_space">
					
					<p>Match the conjugation with the pronoun by dragging and dropping in the empty space.<br/><small>(Requires browsers supporting HTML5)</small><br/>&nbsp;</p>
					
					<div id="columns">
					<div id="column" class="columnA"><header></header></div>
					<div id="column" class="columnB"><header ondrop="drop(event)" ondragover="allowDrop(event)"></header></div>
					<div id="column" class="columnC"><header></header></div>
					</div>

					<p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p id="translation"> cats.</p>
					<p>&nbsp;</p>
					
					<div id="columns_answers">
					<div id="column" class="columnA_answers" draggable="true" ondragstart="drag(event)"><header></header></div>
					<div id="column" class="columnB_answers" draggable="true" ondragstart="drag(event)"><header></header></div>
					<div id="column" class="columnC_answers" draggable="true" ondragstart="drag(event)"><header></header></div>
					<div id="column" class="columnD_answers" draggable="true" ondragstart="drag(event)"><header></header></div>
					<div id="column" class="columnE_answers" draggable="true" ondragstart="drag(event)"><header></header></div>
					<div id="column" class="columnF_answers" draggable="true" ondragstart="drag(event)"><header></header></div>										
					</div>
					
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p id="answer_here" style="display:none"></p>
					<p>&nbsp;</p>
                                        <iframe id="audio_link" src=""></iframe>					

					
					<button id="score_button" class="button" onclick="check_answers();">Check Answer</button>
					<p id="score"></p>
					

					<p id="replay"><a href="">Try Again</a> | <a href="../index.php">Home</a></p>
									
				</div>
			
			</div>
			
	<?php include ('../includes/footer.php'); ?>
					
	</body>
	
</html>
	
	
