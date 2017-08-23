function validate()
{
  var fname=document.reg.fname.value;
  var lname=document.reg.lname.value;
  
if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fname.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.lname.focus();
    return false;

 }


}