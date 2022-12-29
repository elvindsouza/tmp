function valid()
{
	var uid=document.Registration.uid.value;
	var email=document.Registration.email.value;
	var sex=document.Registration.sex.value;
	var mobo=document.Registration.mono.value;
	var pwd=document.Registration.pwd.value;
	var rpwd=document.Registration.rpwd.value;
	var dat=document.Registration.DOB.value;
	var fname=document.Registration.fname.value;
	var lname=document.Registration.lname.value;
	if(valname(fname))
	{
		if(valname(lname))
		{
			if(valsex(sex))
			{
				if(valdate(dat))
				{
					if(valmobo(mobo))
					{
						if(valemail(email))
						{
							if(valuid(uid,7,12))
							{
								if(valpass(pwd))
								{
									if(valrpass(pwd,rpwd))
									{
										alert("User Registered Successfully.");						
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
function valname(name)
{
	var letters=/^[A-Za-z]+$/;
	if(name.match(letters))
		return true;
	else
	{
		alert("Name must have alphabet characters only.");
		return false;
	}
}
function valdate(dat)
{
	if(dat.length==0)
	{
		alert("Select Date of Birth");
		return false;
	}
	else
		return true;
}
function valrpass(pwd,rpwd)
{
	if(rpwd.length==0)
	{
		alert("Confirm Password field doesnot empty.");
		return;
	}
	if(rpwd==pwd)
		return true;
	else
	{
		alert("Confirm Password doesnot Matched.");
		return false;
	}
	
}
function valpass(pwd)
{
	 if(pwd.length < 8) 
	 {
        alert("Error: Password must contain at least 8 characters!");
        return false;
     }
     re = /[0-9]/;
     if(!re.test(pwd)) 
     {
        alert("Error: password must contain at least one number (0-9)!");
        return false;
     }
     re = /[a-z]/;
     if(!re.test(pwd)) 
     {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        return false;
     }
     re = /[A-Z]/;
     if(!re.test(pwd)) 
     {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        return false;
     }
     return true;
}
function valmobo(mobo)
{
	var numbers=/^[0-9]+$/;
	if(mobo.length==10)
	{
		if(mobo.match(numbers))
			return true;
		else
		{
			alert("Mobile Number should be in Number format only.");
			return false;
		}
	}
	else
	{
		alert("Invalid Mobile number");
		return false;
	}
}
function valsex(sex)
{
	var sexlen=sex.length;
	if(sexlen==0)
	{
		alert("Select sex.");
		return false;
	}
	return true;
}
function valemail(email)
{
	var mformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.match(mformat))
	{
		return true;
	}
	else
	{
		alert("Invalid E-mail ID");
		return false;
	}
}
function valuid(uid,mn,mx)
{
	var uidlen=uid.length;
	if(uidlen==0)
	{
		alert("User Id should not be empty.");
		return false;
	}
	else if((uidlen>=mx)||(uidlen<mn))
	{
		alert("User Id Length should be inbetween "+mn+" to "+mx+" only.");
		return false;
	}
	return true;
}
