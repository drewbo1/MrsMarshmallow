(function($,W,D)
{
		var JQUERY4U = {};

		JQUERY4U.UTIL =
		{
			setupFormValidation: function()
			{
				//form validation rules
				$("#infoForm").validate({
					rules: {
						firstname: "required",
						lastname: "required",
						phoneNumber: {
							required: true,
							phoneUK: true
						},	
						emailAddress: {
							required: true,
							email: true
						},
						confirmEmailAddress: {
							required: true,
							equalTo: "#emailAddress"
						},
                   
					messages: {
						firstname: "Please enter your first name",
						lastname: "Please enter your last name",
						phoneNumber: {
							required: "Please provide a phone number",
							phoneUK: "Please enter a UK phone number"
						},
						emailAddress: {
							required: "Please enter your email address",
							email: "Please enter a valid email address"
						},	 
						confirmEmailAddress: {
							required: "Please re-enter your email address",
							email: "Please enter a valid email address",
							equalTo: "Email address must match previous entry"
						},     
					submitHandler: function(form) {
						$(form).submit();
					}
				}
				
			}
		
		}

	}
	//when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
        
