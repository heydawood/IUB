function validate()
{
if(document.form.Name.value =="")
    alert("Enter name");
document.form.Name.focus();
return false;
}