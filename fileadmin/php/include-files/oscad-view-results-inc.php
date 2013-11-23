<?php

/*  This file is part of OSCAd, the Open Source Compliance Advisor
 *
 *  Copyright (C) 2013 Karsten Reincke, Deutsche Telekom AG
 * 
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.

 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.

 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

$hlColor="e20074";
?>

<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
	(t)OSCAd - (Telekom) Open Source Compliance Advisor
-->

<title>OSCAd: form sheet based</title>
<meta name="date" content="2013-04-22T15:17:42" />
<meta name="language" content="en" />


<link rel="stylesheet" type="text/css" href="../css/2lfc.css" media="all" />

<meta name="google-site-verification" content="" />
  <!--
    * @copyright       +CPR+
    * @license         AGPL 3.0 (http://www.gnu.org/licenses/agpl.html)
    * @link            http://www.telekom.com/
    * @release         +REL+
   -->

<meta http-equiv="content-language" content="en" scheme="DCTERMS.RFC3066" />
<meta name="DC.Language" content="en" />
<meta name="description"
	content="Results of the Open Source Compliance Advisor
	 automatically computed on the base of a filled form sheet" />
<meta name="copyright" content="Deutsche Telekom AG / P&amp;I, Darmstadt." />
<link rev="made" href="mailto:opensource@telekom.de" />
<meta http-equiv="reply-to" content="opensource@telekom.de" />
<meta name="author" content="Karsten Reincke" />
<meta name="DC.Description"
		content="Results of the Open Source Compliance Advisor
	 		automatically computed on the base of a filled form sheet" />
<meta name="DC.Rights" content="Deutsche Telekom AG / P&amp;I, Darmstadt." />
<meta name="DC.Creator" content="Karsten Reincke" />
<link rel="schema.dc" href="http://purl.org/metadata/dublin_core_elements" />


<script type="text/javascript" >

function showImageHideText(imageId,textId) {
	 document.getElementById(imageId).style.display='inline';
	 document.getElementById(textId).style.display='none';
}

function showTextHideImage(imageId,textId) {
	 document.getElementById(imageId).style.display='none';
	 document.getElementById(textId).style.display='inline';
}

</script>
</head>

<body onload="showImageHideText('helpImageId','helpTextId');">

<div class="huge box">
<h2>
	<span style="color:<?php echo "$hlColor"?>">O</span>pen
	<span style="color:<?php echo "$hlColor"?>">S</span>ource
	<span style="color:<?php echo "$hlColor"?>">C</span>ompliance
  <span style="color:<?php echo "$hlColor"?>">Ad</span>visor
	Results
</h2>
<table>
<tr>
<th>Request:</th>
<th>

<?php

  $request=
  	htmlspecialchars("Provided I want to ") .
  	"<span style=\"color:$hlColor\">" . htmlspecialchars("$gOsucAction") . "</span>" .
  	htmlspecialchars(" $gOsucStateArticle ") .
  	"<span style=\"color:$hlColor\">" . htmlspecialchars($gOsucStateLabel) . "</span>" .
  	htmlspecialchars(" open source ").
  	"<span style=\"color:$hlColor\">" . htmlspecialchars("$gOsucSoftwareClass") . "</span>" .
  	htmlspecialchars(" in the form of ") .
  	"<span style=\"color:$hlColor\">" . htmlspecialchars("$gOsucFormLabel") . "</span>" .
  	htmlspecialchars(" as an ") .
  	"<span style=\"color:$hlColor\">" . htmlspecialchars("$gOsucContextLabel") . "</span>" .
  	htmlspecialchars(" $gOsucContextSuffix, ") .
  	htmlspecialchars("what do I have to do for acting in accordance to the ") .
  	"<span style=\"color:$hlColor\">" . htmlspecialchars("$gOsucLicense") . "</span>"
  	. "?";
  echo $request;

  if ($gDebugLevel>=$gFaultDebugMsgs)
  	echo "<br />" . htmlspecialchars("< $gHttpRequestMethod : $gDataValidation: ".
  					"$gOsucType : $gOsucContext: $gOsucState : ".
  					"$gOsucRecipient : $gOsucForm : $gOsucLicense: ".
  					"$gOsucLicenseName : $gOsucLicenseRelease:" .
													" $gOsucLicenseSubpath : $gOsucName >");



?>
</th>
<th onmouseover="showTextHideImage('helpImageId','helpTextId');"
   onmouseout="showImageHideText('helpImageId','helpTextId');">
  <image id="helpImageId"
  src="../images/hilfe-16x16.png"
    />
<span id="helpTextId">
[= Open Source Use Case No. <?php echo htmlspecialchars($gOsucNumber); ?>
 {
<?php
	$seperator="";
 	foreach($gHttpRequestParameters as $label => $value) {
		if ($label !== "submit")  {
			if ($label !== "FocusLicense") {
				echo htmlspecialchars(
					"$seperator <" . str_replace("Focus", "", $label) .": $value>" );
				$seperator=",";
			}
		}
	}
?>
} and license
<?php echo htmlspecialchars($gOsucLicense);
if ($gDebugLevel >= $gFaultDebugMsgs)
	echo "<br />: $gLsucName : $gLsucIncludeFileName : $gOsucIncludeFileName";
?>
]</span>
</th>
</tr>

<tr>
<td colspan="3" align="center">refers to </td>
</tr>

<tr>
<td
>
 <?php echo htmlspecialchars($gOsucName);?>:
 </td>
<td colspan="2">
<?php echo htmlspecialchars($gFbOsucDesc);
	if ($gDebugLevel >= $gAllDebugMsgs)
		echo (" [= ". $gFbOsucName. "]\n");
?>


</td>
</tr>

<tr>
<td style="background-color:#ddd">connotes w.r.t.
<?php echo htmlspecialchars($gFbLicenseName);?>:
</td>
<td style="background-color:#ddd" colspan="2"><span style="font-size:120%">
<?php echo htmlspecialchars($gFbLiSpUcDesc."\n"); ?>
</span>
<span style="font-style:italic">
<?php echo htmlspecialchars(" [=".$gFbLiSpUcName."]\n"); ?>
</span>
</td>
</tr>
<tr>

<td><span style="font-weight:bold">requires:</span></td>
<td  colspan="2"><span style="font-style:italic; font-weight:bold">
<?php echo htmlspecialchars($gFbLiSpUcRequiresPrefix); ?>
</span>
<br />

<?php
	if ( (count($gFbLiSpUcRequiresManArr) ==0 )
		&& (count($gFbLiSpUcRequiresVolArr) ==0 ))
	{
		echo htmlspecialchars($gFbLiSpUcNoTasks);
	}
	else {
		echo "<ul>\n";
		foreach ($gFbLiSpUcRequiresManArr as $task) {
			echo "<li><b>mandatory: </b>". htmlspecialchars($task). "</li>\n";
		};

		foreach ($gFbLiSpUcRequiresVolArr as $task) {
			echo "<li><b>voluntary: </b>". htmlspecialchars($task). "</li>\n";
		};
		echo "</ul>\n";
	};
	?>

</td></p><p>
</tr>

<tr>
<td><span style="font-weight:bold">forbids:</span></td>
<td  colspan="2">

<?php
	if (count($gFbLiSpUcForbidsArr) ==0 ) {
		echo htmlspecialchars($gFbLiSpUcForbidsPrefix);
	}
	else {
		echo "<ul>\n";
		foreach ($gFbLiSpUcForbidsArr as $task) {
			echo "<li>". htmlspecialchars($task). "</li>";
		};
		echo "</ul>\n";
	};
	?>
</td>
</tr>
</table>
</div>

<div class="huge box" style="text-align: left; font-size:x-small";>
<p><span style="color:<?php echo "$hlColor"?>">Background information:</span>
For a deeper understanding of the reasons why these tasks are fulfilling the
license <?php echo htmlspecialchars($gFbLicenseName) ?> with respect to
<?php echo htmlspecialchars($gOsucName); ?>, see
<a href="http://www.oslic.org/">OSLiC</a> chapter
<?php echo htmlspecialchars($gOsLicTodoListChapter);?>,
especially chapter <?php echo htmlspecialchars($gOsLicLsucChapter);?>,
and chapter <?php echo htmlspecialchars($gOsLicTlExplanationChapter);?>.
For further information on the protecting power of the license
<?php echo htmlspecialchars($gFbLicenseName) ?>, see
<a href="http://www.oslic.org/">OSLiC</a> chapter
<?php echo htmlspecialchars($gOsLicProtectionChapter) ?>. Concerning the
open source use cases in general, see
<a href="http://www.oslic.org/">OSLiC</a> chapter 4 and 5.
<?php


if ($gOsLicPatentChapter!="") {
	echo "Finally," . htmlspecialchars($gFbLicenseName) .
	' contains a patent clause; for details see
	<a href="http://www.oslic.org/">OSLiC</a> chapter ' .
	htmlspecialchars($gOsLicPatentChapter) . ".";
};


?>
</p>
</div>

</p><p>
<div class="huge box" style="text-align: left; font-size:xx-small";>
<p> <span style="color:<?php echo "$hlColor"?>">OSCAd</span> -
Copyright (C) 2013 Karsten Reincke, Deutsche Telekom AG.
The
	<span style="color:<?php echo "$hlColor"?>">O</span>pen
	<span style="color:<?php echo "$hlColor"?>">S</span>ource
	<span style="color:<?php echo "$hlColor"?>">C</span>ompliance
  <span style="color:<?php echo "$hlColor"?>">Ad</span>visor
is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
<a href="http://www.gnu.org/licenses/agpl-3.0"> GNU Affero General Public License</a>
for more details.
</p>
</div>

	<div class="huge box" style="text-align: left; font-size: xx-small";>
		<h2>Disclaimer of Warranty</h2>
		<p>THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY
			APPLICABLE LAW. THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE
			THE PROGRAM &quot;AS IS&quot; WITHOUT WARRANTY OF ANY KIND, EITHER
			EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
			WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
			THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS
			WITH YOU. SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF
			ALL NECESSARY SERVICING, REPAIR OR CORRECTION</p>
		<h2>Limitation of Liability</h2>
		<p>IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN
			WRITING WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MODIFIES
			AND/OR CONVEYS THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR
			DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL
			DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM
			(INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED
			INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE
			OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS), EVEN IF SUCH
			HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH
			DAMAGES.</p>
	</div>
</body>
</html>
