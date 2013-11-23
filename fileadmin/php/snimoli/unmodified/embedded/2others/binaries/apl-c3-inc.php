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
$gOsLicLsucChapter="6.3.3";
$gOsLicTlExplanationChapter="6.3.10";

$gFbLiSpUcName="ApL-C3";

$gFbLiSpUcDesc=
	"that you are going to distribute an unmodified version of the received
	Apache software to 3rd parties - in the form of binary files or as a
	binary package. In this case it is not discriminating to distribute
	a program, an application, a server, a snippet, a module, a library,
	or a plugin as an independent or an embedded unit.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"Give the recipient a copy of the Apache 2.0
		license. If it is not already part of the binary package, add it",

		"Ensure that the licensing elements - esp. the specific copyright notice
		of the original author(s) - are retained in your package in the form you
		have received them. If you compile the binary from the sources, ensure
		that all the licensing elements are also incorporated into the
		package.",

		"Ensure that the notice text file is retained or integrated into your
		binary package in the form you have initially received it.",

		"Ensure that the notice text file is also reproduced if and
		whereever such third-party notices normally appear - especially, if
		you are distributing an unmodified Apache licensed library as
		embedded component of your own work which displays its own copyright
		notice."

);

$gFbLiSpUcRequiresVolArr=array(
  "Let the documentation of your distribution and/or your additional
	 material also reproduce the content of the notice text file, a hint to
	 the software name, a link to its homepage, and a link to the
   Apache 2.0 license - especially as subsection of your own copyright
		notice."
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
