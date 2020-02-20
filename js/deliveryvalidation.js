function Validate()
//gets the results from the functions that check first name, last name,
//phone number, email and confirm email.
{
    var validated = false;
    validated = ValidateDate() && ValidateBusinessName() && ValidateStreetNumber() && ValidateStreetName() && ValidateTown() && ValidatePostcode() && ValidatePhoneNumber() && ValidateOtherDeliveryDetails();
    return validated; 
}
function ValidateDate()
//Checks that entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
	dateElement = document.getElementById("deliveryDate");
	if ((dateElement.value) != "")
    {
		dateElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        dateElement.style.backgroundColor = "#FF7433";
		alert("Please select an available date from the calendar above.");
	    return false
	}	
}
function ValidateBusinessName()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = (/^[A-Za-z0-9 ]+/);
	
	businessNameElement = document.getElementById("businessName");
	if ((pattern.test(businessNameElement.value)) || (businessNameElement.value == ""))

	{
		businessNameElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		businessNameElement.style.backgroundColor = "#FF7433";
        alert("Business name is not required, but if entered must be only letters, numbers and spaces.");
	    return false
	}	
}
function ValidateStreetNumber()
//Checks that entry is a number between 1 and 10000. If it is returns true and changes box colour to green.
//If not returns false, turns box red and displays message. 
{
	pattern = /^[A-Za-z0-9 ]+/;
	streetNumberElement = document.getElementById("streetNumber"); 
    if (pattern.test(streetNumberElement.value))
	{
		streetNumberElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        streetNumberElement.style.backgroundColor = "#FF7433";
		alert("Number or house name must be letters or numbers only.");
	    return false
	}	
}
function ValidateStreetName()
//Checks entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
	pattern = /^[A-Za-z0-9 ]+/;
	streetNameElement = document.getElementById("streetName");
	if (pattern.test(streetNameElement.value))
    {
		streetNameElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        streetNameElement.style.backgroundColor = "#FF7433";
		alert("Street name must be letters or numbers only.");
	    return false
	}	
}
function ValidateTown()
//Checks that entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
pattern = (/^[A-Za-z ]+/);
	townElement = document.getElementById("town");
	if (pattern.test(townElement.value))
    {
		townElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        townElement.style.backgroundColor = "#FF7433";
		alert("Town must be letters only.");
	    return false
	}	
}
function ValidatePostcode()
//Checks that entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
	pattern = /^(([gG][iI][rR] {0,}0[aA]{2})|((([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y]?[0-9][0-9]?)|(([a-pr-uwyzA-PR-UWYZ][0-9][a-hjkstuwA-HJKSTUW])|([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y][0-9][abehmnprv-yABEHMNPRV-Y]))) {0,}[0-9][abd-hjlnp-uw-zABD-HJLNP-UW-Z]{2}))$/;
	postcodeElement = document.getElementById("postcode");
	if (pattern.test(postcodeElement.value))
    {
		postcodeElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        postcodeElement.style.backgroundColor = "#FF7433";
		alert("Please enter a valid postcode.");
	    return false
	}	
}
function ValidatePhoneNumber()
//Checks entry matches pattern. If it does returns true and changes box colour to green.
//If not returns false, turns box red and displays message.
{
	pattern = /^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/;
	phoneElement = document.getElementById("deliveryPhoneNumber");
	if (pattern.test(phoneElement.value))
    {
		phoneElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        phoneElement.style.backgroundColor = "#FF7433";
		alert("Please enter a valid phone number.");
	    return false
	}	
}
function ValidateOtherDeliveryDetails()
//Checks first name against the pattern. If correct turns the box green and returns true. 
//If incorrect returns false, turns the box red and displays message.
{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	detailsElement = document.getElementById("otherDeliveryDetails");
	if ((pattern.test(detailsElement.value)) || ((detailsElement.value) == ""))

	{
		detailsElement.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		detailsElement.style.backgroundColor = "#FF7433";
        alert("Can be left empty, but if information is added only letters, numbers and punctuation allowed.");
	    return false
	}	
}
		
