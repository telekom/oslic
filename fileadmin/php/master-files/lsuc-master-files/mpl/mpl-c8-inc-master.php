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

$gFbLicenseName="MPLv2.0";
$gFbLicenseSpecification="Mozilla Public License";
$gFbLicenseAbbr="MPL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.10";
$gOsLicPatentChapter="3.1.8";
$gOsLicTodoListChapter="6.11";
$gOsLicLsucChapter="6.11.8";
$gOsLicTlExplanationChapter="6.11.10";

$gFbLiSpUcName="MPL-C8";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
MPL licensed code snippet, module, library, or plugin (snimoli) to 3rd parties
- in the form of source code files or as a source code package together with
another larger software unit which contains this code snippet, module, library,
or plugin as an embedded component.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:e";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"Ensure that the licensing elements - esp. all
		copyright notices, patent notices, disclaimers of warranty, or limitations of
		liability - are retained in your package in exact the form you have received
		them.",

	"Give the recipient a copy of the MPL 2.0 license. If it is not already
	part of the software package, add it. If the licensing statement in the
	licensing file of the package does still not clearly state that the package
	is licensed under the MPL, additionally insert your own correct MPL licensing
	file containing the sentence: 'This Source Code Form is subject to the terms
	of the Mozilla Public License, v. 2.0. If a copy of the MPL was not
	distributed with this file, You can obtain one at
	http://mozilla.org/MPL/2.0/'.",

	"Organize your modifications of the embedded
  library in a way that they are covered by the existing MPL licensing
  statements. If you add new source code files to the library itself, insert a
  header containing your copyright line and an MPL adequate licensing the
  statement."

);

$gFbLiSpUcRequiresVolArr=array(

	" Arrange your source code distribution so that the
		integrated MPL and the licensing files clearly refer only to the
		embedded library and do not disturb the licensing of your own overarching
		work. It's a good tradition to keep the embedded components like libraries,
		modules, snippets, or plugins in specific directory which contains also all
		additional licensing elements.",

		"Create a modification text file, if such a
		notice file still does not exist. Expand the modification text
		file by a more general description of your modifications. Incorporate it into
		your distribution package.",

		"Mark all modifications of the source code of the
		embedded library (snimoli) thoroughly - namely within the source code.",


  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the MPL 2.0 license - especially as subsection
	of your own copyright notice."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(

		"to remove or to alter any license notices - including copyright notices,
		patent notices, disclaimers of warranty, or limitations of liablility
		- contained within the software package you have received.",

		"to promote any of your products - based on the this software - by
		trademarks, service marks, or logos linked to this MPL software, except as
		required for unpartially describing the used software and reproducing the
		copyright notice."

		);

?>
