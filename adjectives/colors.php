<!DOCTYPE html>



<html>



	<head>

	

		<title>Let's Learn German Together - Colors</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



		<?php include ('../includes/meta.php'); ?>



	

		<link rel="stylesheet" type="text/css" href="../styles.css">

		<script src="../js/adjectives.js"></script>



		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		

		<script>

		

		  var image_array = [];

		  var pick_answers = [];

		  var colors_q = [];

		  var color_picked;



		      $(document).ready(function() {

		        

		        // Let's scramble the array so the user doesn't get the same experience twice



        		colors.sort(function() {return 0.75 - Math.random()});

	          colors_q = colors.slice(0,3);

	          colors_q.sort(function() {return 0.75 - Math.random()});        		

        		

        		// Let's color the divs

		        

		        $(document.getElementById("color1")).css("background-color", colors[0][2]);

		        $(document.getElementById("color2")).css("background-color", colors[1][2]);

   	        $(document.getElementById("color3")).css("background-color", colors[2][2]);

   	        

   	        // And name them

   	        

   	        $(document.getElementById("color1")).children("p").html(

   	          colors[0][0] + "<br/>(" + colors[0][1] + ")");

   	        $(document.getElementById("color2")).children("p").html(

   	          colors[1][0] + "<br/>(" + colors[1][1] + ")");

   	        $(document.getElementById("color3")).children("p").html(

   	          colors[2][0] + "<br/>(" + colors[2][1] + ")");

		        });

		        

		        function take_test() {

		          

		          $(document.getElementById("test_space")).css("display","block");

		          $(document.getElementById("img_space")).css("display","none");

		          

		          // Naming the choices

		          

	   	        $(document.getElementById("color1_ans")).children("p").html(

   	          colors_q[0][0]);

     	        $(document.getElementById("color2_ans")).children("p").html(

   	          colors_q[1][0]);

     	        $(document.getElementById("color3_ans")).children("p").html(

   	          colors_q[2][0]);

   	          

   	          // To vary the color picks, let's clone the array and scramble it

   	          var colors_clone = colors.slice(0);

          		colors_clone.sort(function() {return 0.75 - Math.random()});



		          for(var y = 0; y < colors.length; y++) {

		            

		            $(document.getElementById("color_choices")).append("<img id='choice" + y

		              + "' onclick='store_color(\"choice" 

		              + y + "\");' onMouseOver=\"this.style.opacity='0.5' \" "

		              + "onMouseOut=\"this.style.opacity='1' \""

		              + "style='width:50px; height: 50px; background-color: " 

		              + colors_clone[y][2] + "'/>");

		            

		          }

		         	          

		        }

		        

		        // Function to select box for colors

		        function pick_color_base(x) { 

		          

		         $(document.getElementById(x)).css("border", "1px solid #000000"); 

		          

		        }

		          

		        // Function to drop color in choices  

	          function store_color(x) {



    		        color_picked = document.getElementById(x).style.getPropertyValue('background-color'); 

    

                if (document.getElementById('color1_ans').style.getPropertyValue('border') == "1px solid rgb(0, 0, 0)") 

                {

                  $(document.getElementById('color1_ans')).css("background-color", color_picked);

                  $(document.getElementById('color1_ans')).css("border", "1px solid #CCCCCC");

                }

    

                if (document.getElementById('color2_ans').style.getPropertyValue('border') == "1px solid rgb(0, 0, 0)") 

                {

                  $(document.getElementById('color2_ans')).css("background-color", color_picked);

                  $(document.getElementById('color2_ans')).css("border", "1px solid #CCCCCC");

                }

    

                if (document.getElementById('color3_ans').style.getPropertyValue('border') == "1px solid rgb(0, 0, 0)") 

                {

                  $(document.getElementById('color3_ans')).css("background-color", color_picked);

                  $(document.getElementById('color3_ans')).css("border", "1px solid #CCCCCC");

                }



		        }

		        

		        

		        function check_answers() {

		          

		          pick_answers.push(color1_ans.style.getPropertyValue("background-color")); 

		          pick_answers.push(color2_ans.style.getPropertyValue("background-color"));

			        pick_answers.push(color3_ans.style.getPropertyValue("background-color"));

			        

			          

        			// This is the paragraph where the score messages will be printed

        

        			var score = document.getElementById("score");

        			var stars = document.getElementById("stars");

        			var star_image;

		          

		          for(var i = 0; i < 3; i++) {

		            

		            star_image = "#star" + i;

		            				

		            if (pick_answers[i] == colors_q[i][2]) {



      					stars.innerHTML += "<img id='star" + i + 

      					  "' src='../images/nouns/star.png' style='display:none' />";

					      image_array.push(star_image);

		            

		            }

		            

		            else { 					

		              

		              score.innerHTML += (i + 1) + " is not correct.<br/>";									

					        $(score).css("color", "red"); }

		            

  		          }

		          

		          		for(var x = 0; x < image_array.length; x++) { $(image_array[x]).fadeIn("slow"); }

			

			            $(document.getElementById("score_button")).css("display", "none");

			            $(document.getElementById("replay")).css("display", "block");

			

		        }



		</script>		

		

	</head>

	

	<body>

		

		<?php include_once("../includes/analyticstracking.php") ?>	



		

		<div class="app_window">

	

			<p class="app_title"><a href="../index.php">Let's Learn German Together!</a></p>

			

			<p class="sec_title">Adjectives - Colors</p>

			

				<div id="img_space">

					

					<p><strong>Step 1</strong>: Review the colors by looking at the images below.

						<br/>

					</p>

					

					<div id="colors">

					  <div id="color1" class="color-block"><p></p></div>

					  <div id="color2" class="color-block"><p></p></div>

					  <div id="color3" class="color-block"><p></p></div>

					</div>

					

					<p><strong>Step 2</strong>: 

					  <button class="button" onclick="take_test();">Take the Test</button>

					</p>

					

				</div>

				

				<div id="test_space">

				

				<p>Select a box to fill and then the color.</p>

					

					<div id="colors_ans">

					  <div id="color1_ans" onclick="pick_color_base('color1_ans');" class="color-block"><p></p></div>

					  <div id="color2_ans" onclick="pick_color_base('color2_ans');" class="color-block"><p></p></div>

					  <div id="color3_ans" onclick="pick_color_base('color3_ans');" class="color-block"><p></p></div>

					</div>

					

					<div id="color_choices"></div>

					

					<p>&nbsp;</p>

					

					<button class="button" id="score_button" onclick="check_answers();">Check Answers</button>

					<p id="stars"></p> 

					<p id="score"></p>

					<p id="replay"><a href="">Try Again</a> | <a href="../index.php">Home</a></p>

									

				</div>

			

			</div>

			

	<?php include ('../includes/footer.php'); ?>

					

	</body>

	

</html>

	

	


