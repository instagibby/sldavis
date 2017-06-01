/*
   New Perspectives on HTML and CSS
   Tutorial 6
   Tutorial Case


   Filename: formsubmit.js

   Purpose: The purpose of this program is to simply report on a
            successful completition of a valid Web form.

            When the form is submitted, the onsubmit event handler
            verifies that the form data is complete and valid.
            An alert box is displayed notifying the user.

            The event function returns a value of false so that the
            student does not have to continually retype test values
            in the survey form.


*/

window.onload = setForm;


function submitform(){
var msg = "The following data would be sent to the server from the form:\n";
total = document.survey.elements.length;

for (i=0;i<total;i++) {
		box = document.survey.elements[i];
		//alert("hello world");
		if (box.value && box.value != "Send Information" && box.value != "Cancel") {
			/*if (box.value = "female" && box.checked){
			msg = msg + box.name + " = " + box.value + "\n";
			} else if (box.value = "male" && box.checked){
			
			msg = msg + box.name + " = " + box.value + "\n";
			}*/
			msg = msg + box.name + " = " + box.value + "\n";
			
		}
		
	}

alert(msg);
}

function setForm() {
   document.forms[0].onsubmit = function() {
      if (this.checkValidity()) alert("No invalid data detected. Will retain data for further testing.");
      return false;
   }
}
