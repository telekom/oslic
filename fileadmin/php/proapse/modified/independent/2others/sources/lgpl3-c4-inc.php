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

$gFbLicenseName="LGPLv[3.0]";
$gFbLicenseSpecification="GNU Lesser General Public License";
$gFbLicenseAbbr="LGPL";
$gFbLicenseRelease="[3.0]";

$gOsLicProtectionChapter="2.8";
$gOsLicPatentChapter="3.1.7";
$gOsLicTodoListChapter="6.9";
$gOsLicLsucChapter="6.9.4.2";
$gOsLicTlExplanationChapter="6.9.10";

$gFbLiSpUcName="LGPL3-C4";


$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
LGPL-v3 licensed program, application, or server (proapse) to
3rd parties - in the form of source code files or as a source code package.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the licensing elements - esp. all
  notices that refer to the LGPL-3.0 and to the absence of any
  warranty - are retained in your package in the form you have received them.",

  "Ensure that the distributed source code package
  contains a conspicuously and appropriately designed, easily to find copyright
  notice and a disclaimer of warranty. If these elements are missed, add a new
  file containing the main copyright notice and the disclaimer of warranty in the
  form which is textually defined by the license LGPL-3.0 itself. (Yes, repeat
  the disclaimer although it is also part of the license itself and although you
  are required to hand the license itself over to the receiver.)",

  "Give the recipient a copy of the LGPL-3.0 license.
  If it is not already part of the software package, add it.".

  "Mark all modifications of source code of the
  program (proapse) thoroughly - namely within the source code and including
  the date of the modification.",

  "Organize your modifications in a way that they are
  covered by the existing LGPL licensing statements. If you add new source code
  files, insert a header containing your copyright line and a licensing the
  statement in the form required by the GNU project."

);

$gFbLiSpUcRequiresVolArr=array(
  "Create a modification text file, if such a
  notice file still does not exist. Expand the modification text
  file by a description of your modifications on a more functional level.",
  
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notices, a hint to the software name, a link to its homepage,
  the respective disclaimer of warranty, and a link to the LGPL-3.0.",

  "Retain all existing copyright notices."
);

$gFbLiSpUcForbidsPrefix="nothing explicitly with respect to this use case.";
$gFbLiSpUcForbidsArr=array();

?>
