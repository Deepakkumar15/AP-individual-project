function validate()
{
	var fname = document.getElementById("Firstname").value ;
	var lname = document.getElementById("Lastname").value ;
	var mail = document.getElementById("mail").value ;
	var phone = document.getElementById("phone").value ;
	const form = document.getElementById("MY_FORM") ;
	
	
	var text ;

	form.addEventListener('submit' ,(e) => {    // for checking the submission

		e.preventDefault() ;

	})
	


	if(fname == 0 || fname == " ")   // for checking the firstname
	{
		text = "PLEASE ENTER YOUR FIRST NAME" ;
		alert(text) ;
		return false ;
	}

    if(lname == 0 || lname == " ")    // for checking the last name
	{		
		text = "PLEASE ENTER YOUR LAST NAME" ;
		alert(text) ;
		return false ;
	}

    if(mail == 0 || mail == " ")   // for validating the email address
	{
		text = "PLEASE ENTER A VALID EMAIL" ;
		alert(text) ;
		return false ;
	}

	if( !document.getElementById("MALE").checked && !document.getElementById("FEMALE").checked &&  // for validating the gender
			! document.getElementById("OTHERS").checked  )    
			{
				text = "PLEASE SELECT YOUR GENDER FIRST " ;
				alert(text) ;
				return false ;

			} 

	if(true)   // function for validating the country code
	{
		var code = document.getElementById("country_code") ;
        var selected_value = code.options[code.selectedIndex].value ;
    	if ( selected_value == "select_code" )
   		{
   			text = "PLEASE SELECT YOUR COUNTRY CODE FIRST" ;
    		alert(text) ;
    		return false ;
   		}

	}

    if( isNaN(phone) || phone.indexOf(" ") != -1 || phone.length != 10)  // for validating the mobile number
	{
		text = "PLEASE ENTER A VALID MOBILE NUMBER " ;
		alert(text) ;
		return false ;
	}

	 else    // for successfull submission
	{
		form.submit() ;
		alert("YOU HAVE REGISTERED SUCCESSFULLY !") ;
		return true ;
	}
	

 
}
