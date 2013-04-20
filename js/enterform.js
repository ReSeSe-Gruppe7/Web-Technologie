/**
 * @author Badr Mouslik
 */

$(document).ready(function() {
 preparetheform();
});
function preparetheform(){
	$("#weatherinfoform").find("select").css("width","auto");
	$("#validateCoordinate").click(function() {
  		alert("Handler for .click() called.");
	});
}