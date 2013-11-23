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

$gFbLicenseName="MS-PL";
$gFbLicenseSpecification="Microsoft Public License";
$gFbLicenseAbbr="MS-PL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.11";
$gOsLicPatentChapter="3.1.9";
$gOsLicTodoListChapter="6.12";
$gOsLicLsucChapter="6.12.2";
$gOsLicTlExplanationChapter="6.12.9";

$gFbLiSpUcName="MS-PL-C2";

$gFbLiSpUcDesc=
	"that you are going to distribute an unmodified version of the
received MS-PL software to 3rd parties - in the form of binaries or as source
code files. In this case it is not discriminating to distribute a
program, an application, a server, a snippet, a module, a library, or a plugin
as an independent package.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that all licensing elements - esp. all
  copyright, patent, trademark, and attribution notices that are part of the
  version you received - are completely retained in your package.",

  "Incorporate a complete copy of the MS-PL license
  into your package, regardless whether you distribute a source code or a binary
  package."


);

$gFbLiSpUcRequiresVolArr=array(
	"It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to use any contributors' name, logo, or trademarks (without an
				additional or general legally based approval)"
		);

?>
