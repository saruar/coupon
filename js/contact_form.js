// JavaScript Document

function email_check( str )
{
	var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var email_regx2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*\.(\w{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$/;
	
	if( str.match( email_regx2 ) == null )
	{
   	return false;
	}

	 return true;
}

function phone_check( str )
{
	if( str.match(/^[ ]*[(]{0,1}[ ]*[0-9]{3,3}[ ]*[)]{0,1}[-]{0,1}[ ]*[0-9]{3,3}[ ]*[-]{0,1}[ ]*[0-9]{4,4}[ ]*$/) == null )
	{
   	return false;
	}

	return true;
}

function zip_check( str )
{
	var pc_us = /^\d{5}(-\d{4})?$/;
	var pc_ca = /^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$/;
	
	// US and Canada ZIP code validation
	if( str.match( pc_us ) == null )
	{
   	return false;
	}

	return true;
}

function contactInfoOk( contactform )
{
	var retval = false;
	
	if ( contactform.fname.value == "" )
	{
		alert( 'Please enter First Name.' );
		contactform.fname.focus();
	}
	else if ( contactform.lname.value == "" )
	{
		alert( 'Please enter Last Name.' );
		contactform.lname.focus();
	}
//	else if ( contactform.phone.value != "" && phone_check( contactform.phone.value ) == false )
//	{
//		alert( 'Invalid Phone Number.' );
//		contactform.phone.focus();
//	}
//		else if ( contactform.zip.value != "" && zip_check( contactform.zip.value ) == false )
//	{
//		alert( 'Invalid ZIP Code.' );
//		contactform.zip.focus();
//	}
	else if ( contactform.email.value == "" )
	{
		alert( 'Please enter Email Address.' );
		contactform.email.focus();
	}
	else if ( email_check( contactform.email.value ) == false )
	{
		alert( 'Invalid Email Address' );
		contactform.email.focus();
	}
	else if ( contactform.comments.value == "" )
	{
		alert( 'Please enter Questions/Comments.' );
		contactform.email.focus();
	}
	else
	{
		retval = true;
	}
	
	return retval;
 }


function orderInfoOK( contactform )
{
	var retval = false;
	
	if ( contactform.fname.value == "" )
	{
		alert( 'Please enter First Name.' );
		contactform.fname.focus();
	}
	else if ( contactform.lname.value == "" )
	{
		alert( 'Please enter Last Name.' );
		contactform.lname.focus();
	}
	else if ( contactform.address1.value == "" )
	{
		alert( 'Please enter Address Street.' );
		contactform.address1.focus();
	}
	else if ( contactform.city.value == "" )
	{
		alert( 'Please enter City.' );
		contactform.city.focus();
	}
	else if ( contactform.state.value == "" )
	{
		alert( 'Please enter State.' );
		contactform.state.focus();
	}
	else if ( contactform.zip.value == "" )
	{
		alert( 'Please enter ZIP / Postal Code.' );
		contactform.zip.focus();
	}
	else if ( contactform.country.value == "" )
	{
		alert( 'Please enter Country.' );
		contactform.country.focus();
	}
	else if ( contactform.email.value == "" )
	{
		alert( 'Please enter Email Address.' );
		contactform.email.focus();
	}
	else if ( email_check( contactform.email.value ) == false )
	{
		alert( 'Invalid Email Address' );
		contactform.email.focus();
	}
	else
	{
		retval = true;
	}
	
	return retval;
 }

function printSpecial()
{
   if (document.getElementById != null)
   {
      var html = '<HTML>\n<HEAD>\n<title>\n';


      if (document.getElementsByTagName != null)
      {
         var titleTags = document.getElementsByTagName("title");
			
         if (titleTags.length > 0)
            html += titleTags[0].innerHTML;
      }
      
      html += '\n</ti' + 'tle>\n';
		html += '<link rel=\'stylesheet\' type=\'text/css\' id=\'css\simplecart_p.css\' href=\'css/simplecart_p.css\' />';
		html += '</HE' + 'AD>\n<BODY>\n';
      
      var printReadyElem = document.getElementById("printReady");
      
      if (printReadyElem != null)
      {
            html += printReadyElem.innerHTML;
      }
      else
      {
         alert("Could not find the printReady section in the HTML");
         return;
      }
         
      html += '\n</BO' + 'DY>\n</HT' + 'ML>';
      
      var printWin = window.open("","printOrder");
      printWin.document.open();
      printWin.document.write(html);
      printWin.document.close();
      printWin.print();
   }
   else
   {
      alert("Sorry, the print ready feature is only available in modern browsers.");
   }
}

function printOrder(contactform)
{
  if ( orderInfoOK(contactform) )
    printSpecial();
}
