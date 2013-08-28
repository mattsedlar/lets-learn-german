
		function review_nouns() {		
			
			$(function(){
				
			$("#noun_image").attr("src", test_nouns[x].pic);				
	
			$("#next_image").attr("src", test_nouns[x + 1].pic);
			
			$("#noun_name").html( test_nouns[x].gender + ' ' + test_nouns[x].name );
			
			$("#noun_translation").html( "(The " + test_nouns[x].translation + ")" );
			
			$("#count").html( (x + 1) + " of 3" ); // Displaying the noun count

			audio_play();
			
			x++;
			
			if (x >= 3) x = 0;

			});
						
		}
		
		function audio_play() {
			
			$(function(){

				// The audio url is pulled from noun_name's innerHTML to avoid problems with non-ASCII characters
				
				$("#audio_link").attr("src", "http://translate.google.com/translate_tts?tl=de&q=" 
					+ $("#noun_name").html().replace(/\s/g,"%20") );			
		
			});
			
		}
		
		function take_test() { 
			
			var img_space = document.getElementById("img_space");
		    var test_space = document.getElementById("test_space");
		    	
		    // Let's hide the images and display the test	
			img_space.style.display = "none";
			test_space.style.display = "block";
			
			// Here's where we populate the questions			

			var question_one = document.getElementById("question_one");
			var question_two = document.getElementById("question_two");
			var question_three = document.getElementById("question_three");
									
			question_one.innerHTML = test_nouns[0].name;
			question_two.innerHTML = test_nouns[1].name;
			question_three.innerHTML = test_nouns[2].name;
			
		}
		
		function check_answers() {
			
			// Here we're getting the selected answers and placing them in an array
						
			var answer_one = document.getElementById("answer_one").selectedIndex;
			var answer_one_option = document.getElementsByTagName("option")[answer_one].value;
			
			var answer_two = document.getElementById("answer_two").selectedIndex;
			var answer_two_option = document.getElementsByTagName("option")[answer_two].value;
			
			var answer_three = document.getElementById("answer_three").selectedIndex;
			var answer_three_option = document.getElementsByTagName("option")[answer_three].value;	
			
			var answer_options = new Array();
			
			answer_options[0] = answer_one_option;
			answer_options[1] = answer_two_option;
			answer_options[2] = answer_three_option;

			// This is the paragraph where the score messages will be printed

			var score = document.getElementById("score");
			
			// A for loop to compare the answer array and the noun array
			
			for(var y=0; y<answer_options.length; y++) {
							
				if (answer_options[y] == test_nouns[y].gender) {
					
					correct_answers++;

				}
				
				else { 
					
					score.innerHTML += (y + 1) + " is not correct. The correct answer is '"
						+ test_nouns[y].gender + " " + test_nouns[y].name + ".'<br/>";									
										
				}
			
			}
			
			score.innerHTML += "You got " + correct_answers + " out of 3 correct.";
			var score_button = document.getElementById("score_button");
			var replay = document.getElementById("replay");
			
			score_button.style.display = "none";
			replay.style.display = "block";
			
		}
