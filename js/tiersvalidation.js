function Validate()
{
    var validated = false;
    validated = ValidateDecName1() && ValidateDecAge1() && ValidateDecMessage1();
    return validated; 
}
function ValidateDecName1()
 
{
	pattern = /^[a-zA-Z0-9-,]+(\s{0,1}[a-zA-Z0-9-, ])*$/;
	name1Element = document.getElementById("decName1"); 
    if ((pattern.test(name1Element.value)) || ((name1Element.value) == ""))
	{
		name1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        name1Element.style.backgroundColor = "#FF7433";
		alert("Name can be left empty, or can only contain letters and numbers.");
	    return false
	}	
}
function ValidateDecAge1()
 
{
	pattern = (/^[0-9]+/);
	age1Element = document.getElementById("decAge1"); 
    if ((pattern.test(age1Element.value)) || ((age1Element.value) == ""))
	{
		age1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        age1Element.style.backgroundColor = "#FF7433";
		alert("Age can only contain numbers.");
	    return false
	}	
}
function ValidateDecMessage1()
 
{
	pattern = (/^[a-zA-Z0-9-,]+(\s{0,1}[a-zA-Z0-9-, ])*$/);
	message1Element = document.getElementById("decMessage1"); 
    if ((pattern.test(message1Element.value)) || ((message1Element.value) == ""))
	{
		message1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        message1Element.style.backgroundColor = "#FF7433";
		alert("Message can be left empty, or can only contain letters and numbers.");
	    return false
	}	
}