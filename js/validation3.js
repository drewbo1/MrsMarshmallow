function Validate()
//gets the results from the functions that check first name, last name,
//phone number, email and confirm email.
{
    var validated = false;
    validated = ValidateBalloon1() && ValidateBalloon2();
    return validated; 
}

function ValidateBalloon1()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	balloon1Element = document.getElementById("balloonDetails1");
	if (pattern.test(balloon1Element.value))

	{
		balloon1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		if (balloon1Element.value.length == 0)
		{
			balloon1Element.style.backgroundColor = "#FF7433";
			alert("Pleas enter details of the balloons you would require");
			return false;
		}
		else
		{
		balloon1Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation allowed.");
	    return false;
		}
	}	
}
function ValidateBalloon2()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	balloon2Element = document.getElementById("balloonDetails2");
	if ((pattern.test(balloon2Element.value)) || ((balloon2Element.value) == ""))

	{
		balloon2Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		balloon2Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation allowed.");
	    return false
	}	
}