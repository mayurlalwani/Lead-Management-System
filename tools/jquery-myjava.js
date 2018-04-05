$(document).ready(function() 
	{
$('#submit').click(function(e) 
	{
// Initializing Variables With Form Element Values
var firstname = $('#fname').val();
 if (!firstname.match(name_regex) || firstname.length == 0) {
$('#p1').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
$("#fname").focus();
return false;
}
});
});