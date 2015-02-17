String.prototype.topicAt = function() { return this.substring(this.indexOf("verbs/") + 6, this.length - 4); }; 

var topic = document.URL.topicAt();

var find_verb = function(topic) {
    for (var i = 0, l = verbs.length; i < l; i++){
        if ( verbs[i].verb == topic ) {
        return verbs[i];
        }
    }
}

var test_verb = find_verb(topic);