String.prototype.topicAt = function() { return this.substring(this.indexOf("nouns/") + 6, this.length - 4); };      

Array.prototype.checkAnswers = function (inputArray) {
  var correctAnswers = [];    
  for (var i = 0, l = this.length; i < l; i++) {
      var safename = test_nouns[i].name;
      el = document.createElement('div');
      el.innerHTML = el.textContent = safename;
      safename = el.innerHTML;
  if (inputArray[i].trim() == this[i].gender + " " + safename) { correctAnswers.push(inputArray[i]);  }
  }
  return correctAnswers.length;
};

var topic = document.URL.topicAt(),
    test_nouns = nouns[topic];

test_nouns.sort(function() {return 0.75 - Math.random()});
test_nouns = test_nouns.slice(0,3);

$( document ).ready(function() {
    
for (var x = 0, l = test_nouns.length; x < l; x++) {    
  $(".card" + x + " .front h2").html( test_nouns[x].gender + " " + test_nouns[x].name); 
  $(".card" + x + " .back h2").html( "The " + test_nouns[x].translation );       
}
});

function takeTest() {
    
    $(".test_block").css("display","block");
    $(".review_space").css("display","none");
    
    for (var x = 0, l = test_nouns.length; x < l; x++) {
        $("input[name='answer" + x + "']").before( "<div class=\"question" + 
                              x +
                              "\"><h2>The " +
                              test_nouns[x].translation +
                              "</h2></div>" ); 
        $('#pronouns').append("<option value='" + test_nouns[x].gender + " " + test_nouns[x].name + "'>");
    }
};		

function submitAnswers() {
    $("#submit_ans_button").css("display","none"); 
    $(".answer_block").css("display","block");    
    
    var userInput = [],
        correctAnswers;
    
    for (var x = 0, l = 3; x < l; x++) {
        userInput.push($("input[name='answer" + x + "']").val());            
    }
    
    correctAnswers = test_nouns.checkAnswers(userInput);

    if(correctAnswers == 0) {
    $(".correct_answers p").hide().css("color","red").html("None correct. Was ist falsch?").fadeIn('slow');        
    }
    else{
    $(".correct_answers p").hide().html(correctAnswers + " correct!").fadeIn('slow');
    }
    ga('send', 'event', 'button', 'click', 'submit-noun-answers',correctAnswers);
};