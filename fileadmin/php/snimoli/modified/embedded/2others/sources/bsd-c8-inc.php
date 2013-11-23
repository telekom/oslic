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

$gFbLicenseName="BSDv[2|3]CL";
$gFbLicenseSpecification="BSD License, Version 2 or 3 Clause ";
$gFbLicenseAbbr="BSD";
$gFbLicenseRelease="[2CL|3CL]";

$gOsLicProtectionChapter="2.3";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.4";
$gOsLicLsucChapter="6.4.8";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcName="BSD-C8";

$gFbLiSpUcDesc=
"that you are going to distribute a modified version of the received
BSD code snippet, module, library, or plugin (snimoli) to 3rd parties in the
form of source code files or as a source code package together with another
larger software unit which contains this code snippet, module, library, or
plugin as an embedded component.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"Ensure that the licensing elements - esp. the BSD license text, the
		specific copyright notice of the original author(s), and the BSD disclaimer
		- are retained in your package in the form you have received them."
);

$gFbLiSpUcRequiresVolArr=array(

		"Let the documentation of your distribution and/or your additional
		material also contain the original copyright notice, the
		BSD conditions, and the BSD disclaimer.",

		"It is a good practice of the open source community, to let the copyright
		notice which is shown by the running program also state that it contains
		components licensed under the BSD license. Because you are embedding this
		snimoli into a larger software unit, you are developing this larger unit.
		Hence, you can also expand the copyright notice of this larger unit by
		such a hint to its BSD components.",

		"Arrange your source code distribution so that the licensing elements -
		esp. the BSD license text, the specific copyright notice of the original
		author(s), and the BSD disclaimer - clearly refer	only to the embedded
		library and do not disturb the licensing of your own overarching work.
		It's a good tradition to keep the embedded components like libraries,
		modules, snippets, or plugins in specific directory which contains
		also all additional licensing elements."


);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"nothing explicitly if you are using the BSD 2 Clause License. But the
		BSD 3 Clause License explicitly prohibits to use the name of the
		licensing organization or the names of the licensing contributors to
		promote your own work."
		);

?>
