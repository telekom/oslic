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


$gFbLicenseName="LGPLv[2.1|3.0]";
$gFbLicenseSpecification="GNU Lesser General Public License";
$gFbLicenseAbbr="LGPL";
$gFbLicenseRelease="[2.1|3.0]";

$gOsLicProtectionChapter="2.8";
$gOsLicPatentChapter="3.1.7";
$gOsLicTodoListChapter="6.9";
$gOsLicLsucChapter="6.9.9";
$gOsLicTlExplanationChapter="6.9.10";

$gFbLiSpUcName="LGPL-C9";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
LGPL-v2.1 resp. LGPL-v3 licensed code snippet, module, library, or plugin to 3rd
parties - in the form of binary files or as a binary package together with
another larger software unit which contains this code snippet, module, library,
or plugin as an embedded component.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the licensing elements - esp. all
  notices that refer to the LGPL-2.1 or LGPL-3.0 and to the absence of any
  warranty - are retained in your package in the form you have received them.",

  "Ensure that the distributed software binary
  package contains a conspicuously and appropriately designed, easily to find
  copyright notice and a disclaimer of warranty. If these elements are missed,
  add a new file containing the main copyright notice and the disclaimer of
  warranty in the form which is textually defined by the license LGPL-2.1 itself
  resp. by the LGPL-3.0 itself. (Yes, repeat the disclaimer although it is also
  part of the license itself and although you are required to hand the license
  itself over to the receiver.)",

  "Give the recipient a copy of the LGPL-2.1 resp. LGPL-3.0 license. If it is
	not already part of the software package, add it.",

  "Make the source code of the embedded library and
  the source code of your overarching program accessible via a repository under
  your own control: Push the source code package into a repository and make it
  downloadable via the internet. Integrate an easily to find description into
  the distribution package which explains how the code can be received from
  where. Ensure, that this repository is online for as long as you continue to
  distribute the software.",

  "Insert a prominent hint to the download repository
  into your distribution and/or your additional material.",
  
  "Execute the to-do list of use case LGPL-C8 (:- the same request parameters,
	but replace form = binaries by form = sources).",

  "Mark all modifications of source code of the
  embedded library (snimoli) thoroughly - namely within the source code and
  including the date of the modification.",

  "Organize your modifications of the embedded library in a way that
	they are covered by the existing LGPL licensing statements.",

  "Maintain the structural independence of the library.",
  
  "Let the copyright dialog of the on-top development
  clearly say, that it uses the LGPL licensed library. Let it reproduce the
  content of the existing copyright notices, a hint to the software name, a link
  to its homepage, the respective disclaimer of warranty, and a link to the
  LGPL-2.1 resp. LGPL-3.0.",

  "Either distribute the on-top development and the
  library in the form of dynamically linkable parts or distribute the statically
  linked application together with a written offer, valid for at least three
  years, to give the user all object-files of the on-top development and the
  library, so that he can relink the application on its own behalf."

);

$gFbLiSpUcRequiresVolArr=array(
  "Create a modification text file, if such a
  notice file still does not exist. Expand the modification text
  file by a description of your modifications.",

  "Let the documentation of your distribution and/or
  your additional material also clearly say, that it uses the LGPL licensed
  library. Let it reproduce the content of the existing copyright notices, a
  hint to the software name, a link to its homepage, the respective disclaimer
  of warranty, and a link to the LGPL-2.1 resp. LGPL-3.0.",

  "Retain all existing copyright notices."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to modify the library in a way that it is no longer
		a library [forbidden only by the LGPL-2.1]."
		);

?>
