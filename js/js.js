<!-- Hide JavaScript from Java-Impaired Browsers

function MM_findObj(n, d) 
{ //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

var insDiv   = MM_findObj('popupDiv');
var insFrame = MM_findObj('popupFrame');
var hdrDiv = MM_findObj('phdr');
var cntDiv = MM_findObj('pcnt');

//var regButDiv = MM_findObj('regButton');
//insDiv.style.visibility = 'hidden';

function loadPopUp(targ,w,h)
{
	document.getElementById('popupDiv').style.display='block';
	insFrame.src = targ;
	insFrame.height=h;
	insFrame.width=w;
	insDiv.style.width=w+"px";
	insDiv.style.visibility = 'visible';
	insDiv.style.zIndex = '3';
    if((navigator.platform=="MacPPC") && (navigator.appName == "Microsoft Internet Explorer"))
	{}
	else
		window.scroll(0,0);
}

function closeWindow(r)
{
	document.getElementById('popupDiv').style.display='none';
}




function validation()
{
if(document.getElementById('name').value =='' || document.getElementById('name').value =='NAME')
  {
   alert("Please Enter Your Name");
   document.getElementById("name").focus();
    document.getElementById("name").value='';
   return false;
  }

if(document.getElementById('phone').value =='' || document.getElementById('phone').value =='PHONE')
  {
  alert("Please Enter Your phone");
  document.getElementById("phone").focus();
   document.getElementById("phone").value='';
  return false;
  }

if(document.getElementById('phone').value !='' && !IsNumeric(document.getElementById('phone').value) )
         {
         alert("Please Enter only Numeric fields in phone Field");
         document.getElementById("phone").focus();
		   document.getElementById("phone").value='';
         return false;
         } 


if(document.getElementById("email").value == "" || document.getElementById('email').value =='EMAIL')
 {
 alert("Please Enter Email");
 document.getElementById("email").focus();
 document.getElementById("email").value='';
 return false;
 }

if(document.getElementById('email').value != "")
 {
 fieldValue = document.getElementById('email').value;
 if ( fieldValue == '')
      {
	   alert("Please Enter Email");
       document.getElementById("email").focus();
	    document.getElementById("email").value='';
       return false;
	  }
else
     {
        i=fieldValue.indexOf("@")
        j=fieldValue.indexOf(".",i)
		k=fieldValue.indexOf(",")
		kk=fieldValue.indexOf(" ")
		jj=fieldValue.lastIndexOf(".")+1
		len=fieldValue.length
		if((i>0) && (j>(1+1)) && (k==-1) && (kk==-1) && (len-jj >=2) && (len-jj<=3)) 
           {
        	/* Right Email Address  */
           }
        else
           {
           //document.getElementById('rightformate').style.display = 'block';
        	alert("Please Enter Valid Email Address in the Given Formate mail@email.com");
            document.getElementById("email").focus();
			 document.getElementById("email").value='';
            return false;
           }
	}
}

 document.getElementById("left").submit();


return true;
}
function IsNumeric(sText)
{
	var ValidChars = "0123456789.";
    var IsNumber=true;
    var Char;
    for (i = 0; i < sText.length && IsNumber == true; i++) 
        { 
        Char = sText.charAt(i); 
        if (ValidChars.indexOf(Char) == -1) 
           {
           IsNumber = false;
           }
         }
return IsNumber;
}





