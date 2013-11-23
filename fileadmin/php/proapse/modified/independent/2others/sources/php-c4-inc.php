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

$gFbLicenseName="PHPv3.0";
$gFbLicenseSpecification="PHP License";
$gFbLicenseAbbr="PHP";
$gFbLicenseRelease="3.0";

$gOsLicProtectionChapter="2.13";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.14";
$gOsLicLsucChapter="6.14.4";
$gOsLicTlExplanationChapter="6.14.10";

$gFbLiSpUcName="PHP-C4";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
PHP program, application, or server (proapse) to 3rd parties - in the form of
source code files or as a source code package.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

	"Ensure that the complete PHP license - esp.
	the copyright notice, the PHP conditions, and the PHP disclaimer - are
	retained in your package in the form you have received them.",

  "Let the documentation of your distribution and/or your additional
	material also contain a line of acknowledgment in the form 'This product
	includes PHP, freely available from http://www.php.net/'."
);

$gFbLiSpUcRequiresVolArr=array(
	"Let the documentation of your distribution and/or
  your additional material also contain the original copyright notice, the PHP
  conditions, and the PHP disclaimer.",

	"It is a good practice of the open source
  community, to let the copyright notice which is shown by the running program
  also state that the program is licensed under the PHP license. Because you are
  already modifying the program you can also add such a hint if the presented
  original copyright notice lacks such a statement. If such a notice is missed
  in the copyright screen, consider, whether it is possible, to let it
  reproduce the complete PHP license including the copyright notice, the
  PHP conditions, and the PHP disclaimer - as it is required for binary
  distributions.",

	"Mark your modifications in the source code."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to endorse or promote any service you establish on the base of
		this privately used software by the name 'PHP'."
		);


?>
