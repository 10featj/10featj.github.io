function validateFormUpdate() {

var letters = /^[A-Za-z]+$/;  
var em = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    
var vn=document.forms["pdupdate"]["surname"].value;
if (vn==null || vn=="")
 {
  alert("Second name must be filled out");
  return false;
 } else if (!/^[a-zA-Z]*$/g.test(document.pdupdate.surname.value)) {
        alert("Invalid characters with surename");
        document.pdupdate.surname.focus();
        return false;
 }
var fn=document.forms["pdupdate"]["forename"].value;
if (fn==null || fn=="")
 {
  alert("First name must be filled out");
  return false;
 }else if (!/^[a-zA-Z]*$/g.test(document.pdupdate.forename.value)) {
        alert("Invalid characters with forename");
        document.pdupdate.forname.focus();
        return false;
 }
var vd=document.forms["pdupdate"]["doctor"].value;
if (vd==null || vd=="")
 {
  alert("Doctor must be filled out");
  return false;
 }else if (!/^[a-zA-Z]*$/g.test(document.pdupdate.doctor.value)) {
        alert("Invalid characters within doctor");
        document.pdupdate.doctor.focus();
        return false;
 }
var ve=document.forms["pdupdate"]["email"].value;
if (ve==null || ve=="")
 {
  alert("Email must be filled out");
  return false;
 }else if (!em.test(document.pdupdate.email.value)) {
        alert("Invalid email");
        document.pdupdate.email.focus();
        return false;
 }
var vp=document.forms["pdupdate"]["phone"].value;
if (vp==null || vp=="")
 {
  alert("Phone Number must be filled out");
  return false;
 }else if (!/^[0-9]*$/g.test(document.pdupdate.phone.value)) {
        alert("Invalid phone");
        document.pdupdate.phone.focus();
        return false;
 }
var vn=document.forms["pdupdate"]["address"].value;
if (va==null || va=="")
 {
  alert("Address must be filled out");
  return false;
 }

}

