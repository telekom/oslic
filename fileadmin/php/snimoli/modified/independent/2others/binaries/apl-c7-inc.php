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

$gFbLicenseName="ApLv2.0";
$gFbLicenseSpecification="Apache License 2.0";
$gFbLicenseAbbr="ApL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.2";
$gOsLicPatentChapter="3.1.2";
$gOsLicTodoListChapter="6.3";
$gOsLicLsucChapter="6.3.7";
$gOsLicTlExplanationChapter="6.3.10";

$gFbLiSpUcName="ApL-C7";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
	Apache licensed code snippet, module, library, or plugin (snimoli) to 3rd
	parties - in the form of binary files or as a binary package but without
	embedding it into another larger software unit.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"Give the recipient a copy of the Apache 2.0
		license. If it is not already part of the binary package, add it",

		"Ensure that the licensing elements - esp. the specific copyright notice of
		the original author(s) - are retained in your	package in the form you have
		received them. If you compile the binaries from the sources, ensure that all
		the licensing elements are also incorporated into the package.",

		"Ensure that the notice text file contains at least all the
		information of that notice text file you have received. If it
		still does not exist, create it. Expand the notice text file by a
		description of your modifications."

);

$gFbLiSpUcRequiresVolArr=array(
  "Even if you do not want to distribute your
  modified source code, mark all your modifications thoroughly.",

  "Let the documentation of your distribution and/or your additional material
	also reproduce the content of the notice text file, a hint to the software
	name, a link to its homepage, and a link to the Apache 2.0 license -
	especially as a subsection of your own copyright notice."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to promote any of your services - based on the this software - by
		trademarks, service marks, or product names linked to the software except as
		required for unpartially describing the used software file.",
		"to institute any patent litigation against anyone alleging that the
		software constitutes patent infringement."
		);

?>
