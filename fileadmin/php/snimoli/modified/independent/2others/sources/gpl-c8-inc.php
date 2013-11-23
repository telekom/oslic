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

$gFbLicenseName="GPLv[2.0|3.0]";
$gFbLicenseSpecification="GNU General Public License";
$gFbLicenseAbbr="GPL";
$gFbLicenseRelease="[2.0|3.0]";

$gOsLicProtectionChapter="2.7";
$gOsLicPatentChapter="3.1.6";
$gOsLicTodoListChapter="6.8";
$gOsLicLsucChapter="6.8.8";
$gOsLicTlExplanationChapter="6.8.12";

$gFbLiSpUcName="GPL-C8";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
GPL-V2 or GPL-V3 licensed code snippet, module, library, or plugin (snimoli) to
3rd parties - in the form of source code files or as a source code package, but
without embedding it into another larger software unit.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

 "Ensure that the licensing elements - esp. all
  notices that refer to the GPL-V2 or GPL-V3 and to the absence of any
  warranty - are retained in your package in the form you have received them.",

  "Ensure that the distributed source code package
  contains a conspicuously and appropriately designed, easily to find copyright
  notice and a disclaimer of warranty. If these elements are missed, add a new
  file containing the main copyright notice and the disclaimer of warranty in the
  form which is textually defined by the license GPL-V2 itself resp. by the
  GPL-V3 itself. (Yes, repeat the disclaimer although it is also part of the
  license itself and although you are required to hand the license itself over
  to the receiver.)",

  "Give the recipient a copy of the GPL-V2 resp.
  GPL-V3 license. If it is not already part of the software package, add
  it.",

  "Retain all existing copyright notices.",

  "Mark all modifications of source code of the
  library (snimoli) thoroughly - namely within the source code and including
  the date of the modification.",

  "Organize your modifications in a way that they are
  covered by the existing GPL licensing statements. If you add new source code
  files, insert a header containing your copyright line and a licensing the
  statement in the form required by the GNU project."

);

$gFbLiSpUcRequiresVolArr=array(
  "Create a modification text file, if such a
  notice file still does not exist. Expand the modification text
  file by a description of your modifications.",

  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notices, a hint to the software name, a link to its homepage,
  the respective disclaimer of warranty, and a link to the GPL-V2 resp.
  GPL-V3."
);

$gFbLiSpUcForbidsPrefix="nothing with respect to this use case.";
$gFbLiSpUcForbidsArr=array();

?>
