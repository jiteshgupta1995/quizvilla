// JavaScript Document
function check()
{

/* if(document.getElementById("user")=="")
  {
	  alert("Plese Enter Login Id");
	document.f1.user.focus();
	return false;
  }
 */
 if(document.f1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.f1.pass.focus();
	return false;
  } 
  if(document.f1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.f1.cpass.focus();
	return false;
  }
  if(document.f1.pass.value!=document.f1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.f1.cpass.focus();
	return false;
  }
  if(document.f1.first.value=="")
  {
    alert("Plese Enter First Name");
	document.f1.first.focus();
	return false;
  }
    if(document.f1.last.value=="")
  {
    alert("Plese Enter Last Name");
	document.f1.last.focus();
	return false;
  }
    if(document.f1.user.value=="")
  {
    alert("Plese Enter your username");
	document.f1.user.focus();
	return false;
  }

  if(document.f1.address.value=="")
  {
    alert("Plese Enter Address");
	document.f1.address.focus();
	return false;
  }
  if(document.f1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.f1.phone.focus();
	return false;
  }
  if(document.f1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.f1.email.focus();
	return false;
  }
  
  
  e=document.f1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
/*		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && 
*/		n=e.length;

		if(!(f1>0 && f2==-1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.f1.email.focus();
			return false;
		}
	if(document.f1.check1.value!="faculty"){
	 alert("Plese Enter Correct faculty password");
	 document.f1.check1.focus();
	 return false;
	}	
}