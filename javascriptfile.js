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

		if(!(f1>0 && f2==-1 && f1!=n-1))
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
if(document.f1.type.value=="")
  {
    alert("Plese Select Type");
	document.f1.type.focus();
	return false;
  }
}

function profile(){
	if(document.f2.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.f2.pass.focus();
	return false;
  } 
  if(document.f2.first.value=="")
  {
    alert("Plese Enter First Name");
	document.f2.first.focus();
	return false;
  }
    if(document.f2.last.value=="")
  {
    alert("Plese Enter Last Name");
	document.f2.last.focus();
	return false;
  }

  if(document.f2.address.value=="")
  {
    alert("Plese Enter Address");
	document.f2.address.focus();
	return false;
  }
  if(document.f2.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.f2.phone.focus();
	return false;
  }
  if(document.f2.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.f2.email.focus();
	return false;
  }
   if(document.f2.branch.value=="")
  {
    alert("Plese Enter your Branch");
	document.f2.branch.focus();
	return false;
  }
   if(document.f2.sem.value=="")
  {
    alert("Plese Enter your Semester");
	document.f2.sem.focus();
	return false;
  }
  
  
  
  e=document.f2.email.value;
		f2=e.indexOf('@');
		w=e.indexOf('@',f2+1);
/*		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && 
*/		n=e.length;

		if(!(f2>0 && w==-1 && f2!=n-1 ))
		{
			alert("Please Enter valid Email");
			document.f2.email.focus();
			return false;
		}

}

function fac_profile(){
	if(document.f3.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.f3.pass.focus();
	return false;
  } 
  if(document.f3.first.value=="")
  {
    alert("Plese Enter First Name");
	document.f3.first.focus();
	return false;
  }
    if(document.f3.last.value=="")
  {
    alert("Plese Enter Last Name");
	document.f3.last.focus();
	return false;
  }

  if(document.f3.address.value=="")
  {
    alert("Plese Enter Address");
	document.f3.address.focus();
	return false;
  }
  if(document.f3.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.f3.phone.focus();
	return false;
  }
  if(document.f3.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.f3.email.focus();
	return false;
  }
   if(document.f3.sub21.value=="")
  {
    alert("Plese Enter your Branch");
	document.f3.subj21.focus();
	return false;
  }
   if(document.f3.sub22.value=="")
  {
    alert("Plese Enter your Semester");
	document.f3.sub22.focus();
	return false;
  }
  if(document.f3.sub23.value=="")
  {
    alert("Plese Enter your Semester");
	document.f3.sub23.focus();
	return false;
  }
  
  
  
  e=document.f3.email.value;
		f3=e.indexOf('@');
		b=e.indexOf('@',f3+1);
/*		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && 
*/		n=e.length;

		if(!(f3>0 && b==-1 && f3!=n-1 && e!=n-1))
		{
			alert("Please Enter valid Email");
			document.f3.email.focus();
			return false;
		}

}

function create(){
	if(document.f4.subject.value=="")
  {
    alert("Plese choose Subject");
	document.f4.subject.focus();
	return false;
  } 
  if(document.f4.from_date.value=="")
  {
    alert("Plese Choose Date");
	document.f4.from_date.focus();
	return false;
  }
    if(document.f4.to_date.value=="")
  {
    alert("Plese Choose Date");
	document.f4.to_date.focus();
	return false;
  }

  if(document.f4.from_time.value=="")
  {
    alert("Plese Choose Time");
	document.f4.from_time.focus();
	return false;
  }
  if(document.f4.to_time.value=="")
  {
    alert("Plese Choose Time");
	document.f4.from_time.focus();
	return false;
  }
  if(document.f4.ques1.value=="")
  {
    alert("Plese Enter Question");
	document.f4.ques.focus();
	return false;
  }
   if(document.f4.ans1.value=="")
  {
    alert("Plese Enter Option 1");
	document.f4.ans1.focus();
	return false;
  }
   if(document.f4.ans2.value=="")
  {
    alert("Plese Enter Option 2");
	document.f4.ans2.focus();
	return false;
  }
  if(document.f4.ans3.value=="")
  {
    alert("Plese Enter Option 3");
	document.f4.ans3.focus();
	return false;
  }
 
}