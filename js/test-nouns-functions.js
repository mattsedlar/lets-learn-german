		var image_array = []; // This is used for the score in the check_answers function

		function review_nouns() {
					
			
			$(function(){

			$( document.getElementById("noun_image")).attr("src", test_nouns[x].pic);				
	
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
				
				$("#audio_link").attr("src", "http://translate.google.com/translate_tts?tl=de&q=" + $("#noun_name").html().replace(/\s/g,"%20") );			
		
			});
			
		}		

		function take_test() { 
			
			$(function(){

			// Let's hide the images and display the test	
		 	   $("#img_space").css("display", "none");
		   	 $("#test_space").css("display", "block");
		    			
			// Here's where we populate the questions			
									
			$("#question_one").html( test_nouns[0].name );
			$("#question_two").html( test_nouns[1].name );
			$("#question_three").html( test_nouns[2].name );
			
			});
			
		}
		
		function check_answers() {

			$(function(){
							
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
			var stars = document.getElementById("stars");
			var star_image;

			// A for loop to compare the answer array and the noun array
			
			for(var y=0; y<answer_options.length; y++) {
					
				star_image = "#star" + y;
		
				if (answer_options[y] == test_nouns[y].gender) {
					                                 
					correct_answers++;
					stars.innerHTML += "<img id='star" + y + "' src='../images/nouns/star.png' style='display:none;' />";
					image_array.push(star_image);
				}
				
				else { 
					
					score.innerHTML += (y + 1) + " is not correct. The correct answer is '"
						+ test_nouns[y].gender + " " + test_nouns[y].name + ".'<br/>";
					$(score).css("color", "red");									
										
				}
			
			}
			
			for (var x = 0; x < image_array.length; x++) { $(image_array[x]).fadeIn("slow"); }

			$(document.getElementById("score_button")).css("display", "none");
			$(document.getElementById("replay")).css("display", "block");
			
			});
		}

