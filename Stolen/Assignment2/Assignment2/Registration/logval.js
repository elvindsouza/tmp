function Loginval()
{
	var uid=document.Login.uid.value;
	var pwd=document.Login.pwd.value;
	if(valogin(uid,pwd))
	{
		alert("Login Successfully.");
	}
}
function valogin(uid,pwd)
{
	if(uid.length==0)
	{
		alert("Enter the Login ID.");
		return false;
	}
	else if(pwd.length==0)
	{
		alert("Enter the Login ID & Password.");
		return false;
	}
	else if(uid=="hulekuldeep" && pwd=="Ait123")
	{
		return true;
	}
	else
	{
		alert("Invalid Login ID & Password.");
		return false;
	}
}