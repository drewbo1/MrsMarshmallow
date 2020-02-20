function Validate()
//gets the results from the functions that check first name, last name,
//phone number, email and confirm email.
{
    var validated = false;
    validated = ValidateCupcakeNumber() && ValidateCupcake1() && ValidateCupcake2();
    return validated; 
}
function ValidateCupcakeNumber()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = (/^[0-9]+/);
	
	cupcakeNumberElement = document.getElementById("cupcakeAmount");
	if ((pattern.test(cupcakeNumberElement.value)) || (cupcakeNumberElement.value == ""))

	{
		cupcakeNumberElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		cupcakeNumberElement.style.backgroundColor = "#FF7433";
        alert("Other amount is not required, but if entered must be only numbers.");
	    return false
	}	
}

function ValidateCupcake1()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	cupcake1Element = document.getElementById("cupcakeDetails1");
	if (pattern.test(cupcake1Element.value))

	{
		cupcake1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		if (cupcake1Element.value.length == 0)
		{
			cupcake1Element.style.backgroundColor = "#FF7433";
			alert("Pleas enter details of the theme you require");
			return false;
		}
		else
		{
		cupcake1Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation are allowed.");
	    return false;
		}
	}	
}
function ValidateCupcake2()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	cupcake2Element = document.getElementById("cupcakeDetails2");
	if ((pattern.test(cupcake2Element.value)) || ((cupcake2Element.value) == ""))

	{
		cupcake2Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		cupcake2Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation allowed.");
	    return false
	}	
}