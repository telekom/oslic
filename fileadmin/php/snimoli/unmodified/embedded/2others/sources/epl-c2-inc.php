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

$gFbLicenseName="EPLv1.0";
$gFbLicenseSpecification="Eclipse Public License";
$gFbLicenseAbbr="EPL";
$gFbLicenseRelease="1.0";

$gOsLicProtectionChapter="2.5";
$gOsLicPatentChapter="3.1.4";
$gOsLicTodoListChapter="6.6";
$gOsLicLsucChapter="6.6.2";
$gOsLicTlExplanationChapter="6.6.10";

$gFbLiSpUcName="EPL-C2";

$gFbLiSpUcDesc=
	"that you are going to distribute an unmodified version of the
received EPL software to 3rd parties - in the form of source code files or as a
source code package. In this case it is not discriminating to distribute a
program, an application, a server, a snippet, a module, a library, or a plugin
as an independent or an embedded unit.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"Ensure that the licensing elements - esp. all copyright notices and
		the disclaimer of warranty and liability - are retained
		in your package in exact the form you have received them.",

		"Give the recipient a copy of the EPL 1.0 license. If it is not already
		part of the software package, add it. If the licensing statement in the
		licensing file of the package does still not clearly state that the package
		is licensed under the EPL, additionally insert your own correct EPL
		licensing file.",

		"If still not existing, integrate an explicit, very prominently placed
		'No warranty' statement into the distributed source codepackage. Let this
		statement clearly say that all (other) contributors to thesoftware do
		not take over any responsibility for the quality of the software.
		Then, add the no-warranty clause and the disclaimer of the liability of the
		EPL itself into that file."

);

$gFbLiSpUcRequiresVolArr=array(
	"Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the EPL 1.0 license."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to remove or to alter any copyright notices contained within the
		received software package."
		);

?>
