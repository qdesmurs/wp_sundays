$(document).ready(function(){

    var options = {};
    options.rules = {
        activated: {
            wordTwoCharacterClasses: true,
            wordRepetitions: true
        }
    };
	$(':password').pwstrength(options);

});
