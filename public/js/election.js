
function electiontype() {

$("#election_type").on("change",function() {
    $("#sel_org").toggle(this.value == "Organization Election");
  }).change();

};


//function call 

$(document).ready(function(){

		electiontype();

});
