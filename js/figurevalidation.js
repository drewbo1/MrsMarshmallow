function Validate()
{
    var validated = false;
    validated = ValidateHair1() && ValidateSkin1() && ValidateOutfit1() && ValidateOtherDetails1() && ValidateHair2() && ValidateSkin2() && ValidateOutfit2() && ValidateOtherDetails2() && ValidateHair3() && ValidateSkin3() && ValidateOutfit3() && ValidateOtherDetails3() && ValidateHair4() && ValidateSkin4() && ValidateOutfit4() && ValidateOtherDetails4();
    return validated; 
}
function ValidateHair1()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	hair1Element = document.getElementById("hairStyle1"); 
    if ((pattern.test(hair1Element.value)) || ((hair1Element.value) == ""))
	{
		hair1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        hair1Element.style.backgroundColor = "#FF7433";
		alert("Hair style can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateSkin1()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	skin1Element = document.getElementById("skinTone1"); 
    if (pattern.test(skin1Element.value))
	{
		skin1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        skin1Element.style.backgroundColor = "#FF7433";
		alert("Skin tone can only contain letters.");
	    return false
	}	
}
function ValidateOutfit1()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	outfit1Element = document.getElementById("outfit1"); 
    if ((pattern.test(outfit1Element.value)) || ((outfit1Element.value) == ""))
	{
		outfit1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        outfit1Element.style.backgroundColor = "#FF7433";
		alert("Outfit can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateOtherDetails1()

{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	other1Element = document.getElementById("otherDetails1");
	if ((pattern.test(other1Element.value)) || ((other1Element.value) == ""))

	{
		other1Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		other1Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation allowed.");
	    return false
	}	
}
function ValidateHair2()
 
{
	pattern =/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	hair2Element = document.getElementById("hairStyle2"); 
    if ((pattern.test(hair2Element.value)) || ((hair2Element.value) == ""))
	{
		hair2Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        hair2Element.style.backgroundColor = "#FF7433";
		alert("Hair style can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateSkin2()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	skin2Element = document.getElementById("skinTone2"); 
    if (pattern.test(skin2Element.value))
	{
		skin2Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        skin2Element.style.backgroundColor = "#FF7433";
		alert("Skin tone can only contain letters.");
	    return false
	}	
}
function ValidateOutfit2()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	outfit2Element = document.getElementById("outfit2"); 
    if ((pattern.test(outfit2Element.value)) || ((outfit2Element.value) == ""))
	{
		outfit2Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        outfit2Element.style.backgroundColor = "#FF7433";
		alert("Outfit can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateOtherDetails2()

{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	other2Element = document.getElementById("otherDetails2");
	if ((pattern.test(other2Element.value)) || ((other2Element.value) == ""))

	{
		other2Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		other2Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation allowed.");
	    return false
	}	
}
function ValidateHair3()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	hair3Element = document.getElementById("hairStyle3"); 
    if ((pattern.test(hair3Element.value)) || ((hair3Element.value) == ""))
	{
		hair3Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        hair3Element.style.backgroundColor = "#FF7433";
		alert("Hair style can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateSkin3()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	skin3Element = document.getElementById("skinTone3"); 
    if (pattern.test(skin3Element.value))
	{
		skin3Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        skin3Element.style.backgroundColor = "#FF7433";
		alert("Skin tone can only contain letters.");
	    return false
	}	
}
function ValidateOutfit3()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	outfit3Element = document.getElementById("outfit3"); 
    if ((pattern.test(outfit3Element.value)) || ((outfit3Element.value) == ""))
	{
		outfit3Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        outfit3Element.style.backgroundColor = "#FF7433";
		alert("Outfit can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateOtherDetails3()

{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	other3Element = document.getElementById("otherDetails3");
	if ((pattern.test(other3Element.value)) || ((other3Element.value) == ""))

	{
		other3Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		other3Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation allowed.");
	    return false
	}	
}
function ValidateHair4()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	hair4Element = document.getElementById("hairStyle4"); 
    if ((pattern.test(hair4Element.value)) || ((hair4Element.value) == ""))
	{
		hair4Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        hair4Element.style.backgroundColor = "#FF7433";
		alert("Hair style can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateSkin4()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	skin4Element = document.getElementById("skinTone4"); 
    if (pattern.test(skin4Element.value))
	{
		skin4Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        skin4Element.style.backgroundColor = "#FF7433";
		alert("Skin tone can only contain letters.");
	    return false
	}	
}
function ValidateOutfit4()
 
{
	pattern = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	outfit4Element = document.getElementById("outfit4"); 
    if ((pattern.test(outfit4Element.value)) || ((outfit4Element.value) == ""))
	{
		outfit4Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
        outfit4Element.style.backgroundColor = "#FF7433";
		alert("Outfit can be left empty, or can only contain letters.");
	    return false
	}	
}
function ValidateOtherDetails4()

{
	pattern = /^(?=.*[A-Z0-9])[\w.,!"'\/$ ]+$/i;
	
	other4Element = document.getElementById("otherDetails4");
	if ((pattern.test(other4Element.value)) || ((other4Element.value) == ""))

	{
		other4Element.style.backgroundColor = "#33FF96";
		return true;
	}
	else
	{
		other4Element.style.backgroundColor = "#FF7433";
        alert("Only letters, numbers and punctuation allowed.");
	    return false
	}	
}