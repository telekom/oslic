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
$gOsLicLsucChapter="6.13.3";
$gOsLicTlExplanationChapter="6.13.6";

$gFbLiSpUcName="PgL-C3";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
PGL program, application, or server (proapse) to 3rd parties - regardless
whether you distribute it in the form of binaries or as source code files.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"Ensure that the complete Postgres License including the copyright notice,
		the permission notices, and the PGL disclaimer
		- are retained in your package in the form you have received them."
);

$gFbLiSpUcRequiresVolArr=array(
  "Mark your modifications in the source code,
  whether or not you want to distribute the code.",

  "It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage.",

  "You can expand an existing copyright notice
  presented by the program with information about your own work or
  modifications.",

  "It is a good practice of the open source
  community, to let the copyright notice which is shown by the program also
  state that it is based on a version originally licensed under the PGL license.
  Because you are already modifying the program, you can also add such a hint,
  if the presented original copyright notice lacks such a statement."
);

$gFbLiSpUcForbidsPrefix="nothing explicitly.";
$gFbLiSpUcForbidsArr=array();

?>
