<!DOCTYPE html>

<html>


    <head>
    
        <title>Let's Learn German Together</title>
        <?php include ('../includes/meta.php'); ?>
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="../flip.css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
        <script src="../js/nouns.js"></script>
        <script src="../js/nouns-functions.js"></script>        
        
    </head>

<body>
    
     <?php include_once("../includes/analyticstracking.php") ?>

    <main>
        
        <header>Let's Learn German Together</header>
        
        <section>
            
            <h1 class="subhed">Nouns - Travel</h1>
            
            <div class="review_space">
            
                <p>Hover over/swipe each card for the translation:</p>


                <div class="flip-container card0" ontouchstart="this.classList.toggle('hover');">
                   <div class="flipper">
                      <div class="front">
                      <h2></h2>
                      </div>
                      <div class="back">
                      <h2></h2>
                      </div>
                   </div>
                </div>

                <div class="flip-container card1" ontouchstart="this.classList.toggle('hover');">
                   <div class="flipper">
                      <div class="front">
                      <h2></h2>
                      </div>
                      <div class="back">
                      <h2></h2>
                      </div>
                   </div>
                </div>

                <div class="flip-container card2" ontouchstart="this.classList.toggle('hover');">
                   <div class="flipper">
                      <div class="front">
                      <h2></h2>
                      </div>
                      <div class="back">
                      <h2></h2>
                      </div>
                   </div>
                </div>  

                <input type="submit" id="test_button" value="Test Your Knowledge" onclick="takeTest();"/>
                
            </div>
            
            <div class="test_block">
                
                <p>Translate the following:</p>
            
                    <div class="question_block">
                        <input type="text" name="answer0" list="pronouns"/>
                    </div>
                    <div class="question_block">
                        <input type="text" name="answer1" list="pronouns"/>
                    </div>
                    <div class="question_block">
                        <input type="text" name="answer2" list="pronouns"/>
                    </div>
                    <datalist id="pronouns">

                    </datalist>

                <input type="submit" id="submit_ans_button" value="Submit Answers" onclick="submitAnswers()"/>                
            </div>

            <div class="answer_block">
                <div class="correct_answers"><p></p></div>
                <input type="submit" value="Try Again" onclick="location.reload(true);"/>               </div>
            
        </section>
    
    </main>

    <footer>
        <?php include ('../includes/footer.php'); ?>
    </footer>  
    
</body>

</html>
