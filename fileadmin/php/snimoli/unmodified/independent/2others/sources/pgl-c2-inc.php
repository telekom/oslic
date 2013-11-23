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

$gFbLicenseName="PgL";
$gFbLicenseSpecification="Postgres License";
$gFbLicenseAbbr="PgL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.12";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.13";
$gOsLicLsucChapter="6.13.2";
$gOsLicTlExplanationChapter="6.13.6";

$gFbLiSpUcName="PgL-C2";

$gFbLiSpUcDesc=
	"that you are going to distribute an unmodified version of the
received PGL software to 3rd parties - regardless whether you distribute it in
the form of binaries or as source code files. In this case it is not
discriminating to distribute a program, an application, a server, a snippet, a
module, a library, or a plugin as an independent package.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the conditions of the
	 $gFbLicenseSpecification";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the complete Postgres License
  including the copyright notice, the permission notices, and the PGL disclaimer
  - are retained in your package in the form you have received them."
);

$gFbLiSpUcRequiresVolArr=array(
  "It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage."
);

$gFbLiSpUcForbidsPrefix="nothing explicitly.";
$gFbLiSpUcForbidsArr=array();

?>
