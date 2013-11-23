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
$gOsLicLsucChapter="6.8.11";
$gOsLicTlExplanationChapter="6.8.12";

$gFbLiSpUcName="GPL-CB";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
GPL-V2 or GPL-V3 licensed code snippet, module, library, or plugin to 3rd
parties - in the form of binary files or as a binary package together with
another larger software unit which contains this code snippet, module, library,
or plugin as an embedded component.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the licensing elements - esp. all
  notices that refer to the GPL-V2 or GPL-V3 and to the absence of any
  warranty - are retained in your package in the form you have received them.",

  "Ensure that the distributed software binary
  package contains a conspicuously and appropriately designed, easily to find
  copyright notice and a disclaimer of warranty. If these elements are missed,
  add a new file containing the main copyright notice and the disclaimer of
  warranty in the form which is textually defined by the license GPL-V2 itself
  resp. by the GPL-V3 itself. (Yes, repeat the disclaimer although it is also
  part of the license itself and although you are required to hand the license
  itself over to the receiver.)",

  "Give the recipient a copy of the GPL-V2 resp.
  GPL-V3 license. If it is not already part of the software package, add
  it.",

  "Retain all existing copyright notices.",

  "Make the source code of the embedded library and
  the source code of your overarching program accessible via a repository under
  your own control: Push the source code package into a repository and make it
  downloadable via the internet. Integrate an easily to find description into
  the distribution package which explains how the code can be received from
  where. Ensure, that this repository is online for at least 3 years after
  having distributed the last instance of your software package.",

  "Insert a prominent hint to the download repository
  into your distribution and/or your additional material.",
  
  "Execute the to-do list of use case GPL-CA (:- the same request parameters,
	but replace form = binaries by form = sources).",

  "Let the copyright dialog of the on-top development
  clearly say, that it uses the GPL licensed library and that it is itself
  licensed under the GPL-V2 resp. GPL-V3 too. Let it reproduce the content of
  the existing copyright notices, a hint to the software name, a link to its
  homepage, the respective disclaimer of warranty, and a link to the GPL-V2
  resp. GPL-V3.",

  "Mark all modifications of source code of the
  embedded library (snimoli) thoroughly - namely within the source code and
  including the date of the modification.",

  "Organize your modifications of the embedded
  library in a way that they are covered by the existing GPL licensing
  statements.",

  "Organize the binaries of the on-top development in
  a way that they are also covered by the GPL-V2 resp. GPL-V3 licensing
  statements."

);

$gFbLiSpUcRequiresVolArr=array(
  "Create a modification text file, if such a
  notice file still does not exist. Expand the modification text
  file by a description of your modifications.",
  
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing copyright
  notices, a hint to the software name, a link to its homepage, the respective
  disclaimer of warranty, and a link to the GPL-V2 resp.
  GPL-V3."
);

$gFbLiSpUcForbidsPrefix="nothing with respect to this use case.";
$gFbLiSpUcForbidsArr=array();

?>
