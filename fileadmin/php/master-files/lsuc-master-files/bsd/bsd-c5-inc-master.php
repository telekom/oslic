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
$gOsLicLsucChapter="6.4.5";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcName="BSD-C5";

$gFbLiSpUcDesc=
"that you are going to distribute a modified version of the received
BSD program, application, or server (proapse) to 3rd parties - in the form of
binary files or as a binary package.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

	"Ensure that your distribution contains the
  original copyright notice, the BSD license, and the BSD disclaimer in the form
  you have received them. If you compile the binary file on the base of the
  source code package and if this compilation does not also generate and
  integrate the licensing files then create the copyright notice, the BSD
  conditions, and the BSD disclaimer according to the form of the source code
  package and insert these files into your distribution manually.",

  "Ensure that the documentation of your
  distribution and/or your additional material also contain the author specific
  copyright notice, the BSD conditions, and the BSD disclaimer."

);

$gFbLiSpUcRequiresVolArr=array(
  "It is a good practice of the open source
  community, to let the copyright notice which is shown by the running program
  also state that the program is licensed under the BSD license. Because you are
  already modifying the program you can also add such a hint if the presented
  original copyright notice lacks such a statement."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"nothing explicitly if you are using the BSD 2 Clause License. But the
		BSD 3 Clause License explicitly prohibits to use the name of the
		licensing organization or the names of the licensing contributors to
		promote your own work."
		);

?>
