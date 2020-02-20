function Validate()
//gets the results from the functions that check first name, last name,
//phone number, email and confirm email.
{
    var validated = false;
    validated = ValidateFirstName() && ValidateLastName() && ValidatePhoneNumber() && ValidateEmail() && ValidateConfirmEmail();
    return validated; 
}
function ValidateFirstName()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = /^[a-zA-Z]+$/;
	firstNameElement = document.getElementById("firstName");
	if (pattern.test(firstNameElement.value))
	{
		firstNameElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		if (firstNameElement.value.length == 0)
		{
			firstNameElement.style.backgroundColor = "#FF7433";
			alert("First name is required");
			return false;
		}
		else
		{
			firstNameElement.style.backgroundColor = "#FF7433";
            alert("First name must be only letters.");
	        return false;
		}
	}	
}
function ValidateLastName()
//Checks that entry is a number between 1 and 10000. If it is returns true and changes box colour to green.
//If not returns false, turns box red and displays message. 
{
	pattern = /^[a-zA-Z]+$/;
	lastNameElement = document.getElementById("lastName"); 
    if (pattern.test(lastNameElement.value))
	{
		lastNameElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		if (lastNameElement.value.length == 0)
		{
			lastNameElement.style.backgroundColor = "#FF7433";
			alert("Last name is required");
			return false;
		}
		else
		{
        lastNameElement.style.backgroundColor = "#FF7433";
		alert("Last name must be letters only.");
	    return false;
		}
	}	
}
function ValidatePhoneNumber()
//Checks entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
	pattern = /^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/;
	phoneElement = document.getElementById("phoneNumber");
	if (pattern.test(phoneElement.value))
    {
		phoneElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		if (phoneElement.value.length == 0)
		{
			phoneElement.style.backgroundColor = "#FF7433";
			alert("Phone number is required");
			return false;
		}
		else
		{
        phoneElement.style.backgroundColor = "#FF7433";
		alert("Please enter a valid phone number.");
	    return false
		}
	}	
}
function ValidateEmail()
//Checks that entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
pattern = (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);
	emailElement = document.getElementById("emailAddress");
	if (pattern.test(emailElement.value))
    {
		emailElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		if (emailElement.value.length == 0)
		{
			emailElement.style.backgroundColor = "#FF7433";
			alert("Email is required");
			return false;
		}
		else
		{
        emailElement.style.backgroundColor = "#FF7433";
		alert("Please enter a valid email address.");
	    return false;
		}
	}	
}
function ValidateConfirmEmail()
//Checks that entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
	pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
	confirmElement = document.getElementById("confirmEmailAddress");
	if ((pattern.test(confirmElement.value)) && ((confirmElement.value) == (emailElement.value)))
    {
		confirmElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		if (confirmElement.value.length == 0)
		{
			confirmElement.style.backgroundColor = "#FF7433";
			alert("Confirm email is required");
			return false;
		}
		else
		{
        confirmElement.style.backgroundColor = "#FF7433";
		alert("The address entered must be the same as the other address.");
	    return false;
		}
	}	
}

		
