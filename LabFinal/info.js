function f1()
{

	var name1=document.getElementById('name').value;
	if(name1=="" || name1.length<2 )
	{
		document.getElementById('name').value="incorrect";
	}
	else
	{
		name1=document.getElementById('name').value;
		alert(name1);
	}
   
}
function f2(contactno.value)
{
	var contactno1=;
	
	if(input.value.match(contactno1))
	{
		alert(correct);
	}
    else 
	{
		alert(Incorrect);
	}
	
}
function f3()
{
	
    if(document.getElementById('male').checked==true)
	{
		alert("Male");
	}
	if(document.getElementById('female').checked==true){
		alert("Female");
	}
   if(document.getElementById('other').checked==true){
		alert("Other");
	}
	else
	{
		alert("You have to choose one");
	}
}
function f4()
{
	
}
function f5()
{
	var username1=document.getElementById('username').value;
	if(username1=="")
	{
		alert("invalid UserName");
	}
	else
	{
		alert(username1);
	}
}