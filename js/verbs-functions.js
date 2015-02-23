/* This section is used in noun functions as well */
String.prototype.topicAt = function(t) {
    var subject;
    if(t.indexOf('nouns') > 0) { subject = "nouns/"; }
    else if(t.indexOf('verbs') > 0) { subject = "verbs/"; }
    return this.substring(this.indexOf(subject) + 6, this.length - 4); 
};  

var url = document.URL;

topic = url.topicAt(url);
/* end, this is where it's different */

var find_verb = function(topic) {
    for (var i = 0, l = verbs.length; i < l; i++){
        if ( verbs[i].verb == topic ) {
        return verbs[i];
        }
    }
}

var test_verb = find_verb(topic);

$(document).ready( function() {
   
    $(".ich").html(test_verb.ich);
    
});