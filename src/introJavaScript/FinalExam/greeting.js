// JavaScript Document

function greeting()
{
	//alert("inside greeting()");

	var header = document.getElementById("greeting");	// 1. Create header object to work with
	header.style = "font-size: 40px;";							// 2. Set the font size to something between 24-48
	header.style = "text-align: center;";							// 3. Center the greeting in the displayable area

	var today = new Date();						//Create a date object called today with todays date and time in it.

	currentTime = today.getHours();				//Pull the hour of the day from the date object.

	if(currentTime >= 6 && currentTime < 12)
	{
		header.innerHTML = "Good Morning!";
		header.style = "color: green;";						// 4. Set a color for the greeting
	}
	else
	{
		if(currentTime >= 12 && currentTime <17)
		{
			header.innerHTML = "Good Afternoon!";
			header.style = "color: yellow;";					// 5. Set a color for the greeting
		}
		else
		{
			header.innerHTML = "Good Evening";
			header.style = "color: red;";					// 6. Set a color for the greeting
		}
	}

}//end greeting()
