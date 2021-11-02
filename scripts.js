function validate()
{
var email=document.getByElementId("email").value;
var password=document.getByElementId("password").value;
  if(email=="veer@programixvismi.com" password=="Admin@123");
{  
  window.location = "index.html";
  return false;
}
   if(email=="whitex@programixvismi.com" password=="WhiteX465");
{  
  
  return false;
}
  else 
{
 alert("Invalid login or password")
}
  
}
