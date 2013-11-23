// var debug=true;
var debug=false;

function replaceByMouseOver() {
  if (debug==true)
  	document.getElementById('TestId').innerHTML="mouseoverText";
}

function replaceByMouseOut() {
  if (debug==true)
  document.getElementById('TestId').innerHTML="mouseoutText";
}


/* Functional-Rule-1: if type==proapse then context=independent  */ 
function respectSwitchToProapse()  {
  if (document.getElementById('proapseId').checked==true) {
    if (debug==true) document.getElementById('TestId').innerHTML="functional rule 1";
    document.getElementById('independentId').checked=true;
	 document.getElementById('embeddedId').checked=false;
  } 
}

 /* Functional-Rule-2: if type==snimoli then 
    a) if context==independent then recipient = 2others
    b) if recipient == 4yourself then context = embedded
    */  
function respectSwitchToSnimoli()  {
  if (document.getElementById('snimoliId').checked==true) {
    if (debug==true) document.getElementById('TestId').innerHTML="functional rule 2"; 
    if (document.getElementById('independentId').checked==true)
    {
    	if (debug==true) document.getElementById('TestId').innerHTML="functional rule 2a";
    	document.getElementById('othersId').checked=true;
	 	document.getElementById('yourselfId').checked=false;
    }
    if (document.getElementById('yourselfId').checked==true)
    {
    	if (debug==true) document.getElementById('TestId').innerHTML="functional rule 2b";
    	document.getElementById('embeddedId').checked=true;
	 	document.getElementById('independentId').checked=false;
    }
  } 
} 
 
 
/* Functional-Rule-3: if context==embedded then type=snimoli  */
function respectSwitchToEmbedded()  {
  if (document.getElementById('embeddedId').checked==true) {
    if (debug==true) document.getElementById('TestId').innerHTML="functional rule 3";
    document.getElementById('proapseId').checked=false;
	 document.getElementById('snimoliId').checked=true;
  } 
}


/* Functional-Rule-4: if context==independed && 
   type==snimoli then recipient = 2others */

function respectSwitchToIndependent()  {
  if (   document.getElementById('independentId').checked==true
      && document.getElementById('snimoliId').checked==true
     )
    {
    	if (debug==true) document.getElementById('TestId').innerHTML="functional rule 4";
    	document.getElementById('othersId').checked=true;
	 	document.getElementById('yourselfId').checked=false;
	 	
    }
} 

/* Functional-Rule-5: if recipient==4yourself && 
   type==snimoli then context = embedded */
 
function respectSwitchToYourself()  {
  if (   document.getElementById('yourselfId').checked==true
      && document.getElementById('snimoliId').checked==true)
    {
    	if (debug==true) document.getElementById('TestId').innerHTML="functional rule 5";
    	document.getElementById('embeddedId').checked=true;
	 	document.getElementById('independentId').checked=false;
    }
} 


function integrateLicenseSelection(osucSpecificFocusLicenseId) {
	var osucSpecificFocusLicenseValue="undefined";
	if (document.getElementById('agpl30Id').checked==true)
	  osucSpecificFocusLicenseValue="AGPLv3.0";
	if (document.getElementById('apl20Id').checked==true)
	  osucSpecificFocusLicenseValue="ApLv2.0";
	if (document.getElementById('bsd2Id').checked==true)
	  osucSpecificFocusLicenseValue="BSDv2CL";
	if (document.getElementById('bsd3Id').checked==true)
	  osucSpecificFocusLicenseValue="BSDv3CL";
	if (document.getElementById('cddl10Id').checked==true)
	  osucSpecificFocusLicenseValue="CDDLv1.0";
	if (document.getElementById('epl10Id').checked==true)
	  osucSpecificFocusLicenseValue="EPLv1.0";
	if (document.getElementById('eupl11Id').checked==true)
	  osucSpecificFocusLicenseValue="EUPLv1.1";
	if (document.getElementById('gpl20Id').checked==true)
	  osucSpecificFocusLicenseValue="GPLv2.0";
	if (document.getElementById('gpl30Id').checked==true)
	  osucSpecificFocusLicenseValue="GPLv3.0";
	if (document.getElementById('lgpl21Id').checked==true)
	  osucSpecificFocusLicenseValue="LGPLv2.1";
	if (document.getElementById('lgpl30Id').checked==true)
	  osucSpecificFocusLicenseValue="LGPLv3.0";
	if (document.getElementById('mitId').checked==true)
	  osucSpecificFocusLicenseValue="MIT";
	if (document.getElementById('msplId').checked==true)
	  osucSpecificFocusLicenseValue="MS-PL";
	if (document.getElementById('mpl20Id').checked==true)
	  osucSpecificFocusLicenseValue="MPLv2.0";
	if (document.getElementById('pglId').checked==true)
	  osucSpecificFocusLicenseValue="PGL";
 	if (document.getElementById('php30Id').checked==true)
	  osucSpecificFocusLicenseValue="PHPv3.0";

	return document.getElementById(osucSpecificFocusLicenseId).value=osucSpecificFocusLicenseValue;
}


