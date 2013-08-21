
		function review_verbs() {
		
				for (var i = 0; i < data.verbs.length; i++) {
					
					if (data.verbs[i].verb == test_verb) {
							
					verb_conjug[0] = data.verbs[i].ich;
					verb_conjug[1] = data.verbs[i].du;
					verb_conjug[2] = data.verbs[i].er;
					verb_conjug[3] = data.verbs[i].wir;
					verb_conjug[4] = data.verbs[i].ihr;
					verb_conjug[5] = data.verbs[i].sie;
				}
				
			}
			
			var verb_conjugations = document.getElementById("verb_review_right");
			
			for (var y = 0; y < verb_conjug.length; y++) {
				
				verb_conjugations.innerHTML += "<p>" + verb_conjug[y] + "</p>";
			}
	
		}
		
		function take_test() { 
			
			var img_space = document.getElementById("img_space");
			var test_space = document.getElementById("test_space");
				
			// Let's hide the images and display the test	
			img_space.style.display = "none";
			test_space.style.display = "block";
			
			// Here's where I'm going to do some shit with HTML5 ondrag/ondrop
			
			columnA[0].firstElementChild.innerHTML = verb_pronoun[rndm];
			correct_answer = document.getElementById('answer_here');
			correct_answer.innerHTML = verb_conjug[rndm];
		    	columnC[0].firstElementChild.innerHTML = sentence_noun;

			// Posting the translation underneath
			var translation = document.getElementById("translation");

			switch(columnA[0].firstElementChild.innerHTML) {

				case "ich":
				translation.innerHTML = "I " + i_conj + translation.innerHTML;
				break;
				
				case "du": 
				translation.innerHTML = "You " + we_conj + translation.innerHTML;
				break;
				
				case "er/sie/es":
				translation.innerHTML = "He/She/It " + it_conj + translation.innerHTML;
				break;
				
				case "ihr":
				translation.innerHTML = "You " + we_conj + translation.innerHTML;
				break;
	
				case "wir":
				translation.innerHTML = "We " + we_conj + translation.innerHTML;
				break;
	
				case "sie/Sie":
				translation.innerHTML = "They/You " + we_conj + translation.innerHTML;
				break;

			}
	    	
   			verb_conjug.sort(function() {return 0.75 - Math.random()});

			columnA_answers[0].firstElementChild.innerHTML = verb_conjug[0];
			columnB_answers[0].firstElementChild.innerHTML = verb_conjug[1];
			columnC_answers[0].firstElementChild.innerHTML = verb_conjug[2];
			columnD_answers[0].firstElementChild.innerHTML = verb_conjug[3];												
			columnE_answers[0].firstElementChild.innerHTML = verb_conjug[4];
			columnF_answers[0].firstElementChild.innerHTML = verb_conjug[5];					
			
		}
		
		function allowDrop(ev)
		{
			ev.preventDefault(); 
		}

		function drag(ev)
		{
			ev.dataTransfer.setData("Text",ev.target.firstElementChild.innerHTML);
			// grabbing the innerHTML from the column header
			console.log(ev.target.firstElementChild.innerHTML);
		}

		function drop(ev)
		{
			ev.preventDefault();
			var data=ev.dataTransfer.getData("Text");
			// dropping the innerHTML of the column header below and replacing the header in the target
			ev.target.innerHTML = data;
		
		}	
		
		function check_answers() {
			
			// This is the paragraph where the score messages will be printed

			var score = document.getElementById("score");			
			
			if (correct_answer.innerHTML == columnB[0].firstElementChild.innerHTML) {
				
				score.innerHTML = "Correct!";
				audio_play();
				
			}
			
			else {
				
				score.innerHTML = "Incorrect. The correct conjugation is<br/>'"
					+ columnA[0].firstElementChild.innerHTML + " " + correct_answer.innerHTML
					+ " " + columnC[0].firstElementChild.innerHTML + "'";
				
			}
			
			var score_button = document.getElementById("score_button");
			var replay = document.getElementById("replay");
			
			score_button.style.display = "none";
			replay.style.display = "block";
			
			
		}
		
	
                function audio_play() {

                        var audio_link = document.getElementById("audio_link");

                        // The audio url is pulled from innerHTML to avoid problems with non-ASCII characters
                        audio_link.src = "http://translate.google.com/translate_tts?tl=de&q=" + columnA[0].firstElementChild.innerHTML.substring(0,3)
					 + "%20" + correct_answer.innerHTML + "%20" + columnC[0].firstElementChild.innerHTML;

                }
			
		
