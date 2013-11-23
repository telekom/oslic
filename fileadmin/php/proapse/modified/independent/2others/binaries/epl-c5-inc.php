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

$gFbLicenseName="EPLv1.0";
$gFbLicenseSpecification="Eclipse Public License";
$gFbLicenseAbbr="EPL";
$gFbLicenseRelease="1.0";

$gOsLicProtectionChapter="2.5";
$gOsLicPatentChapter="3.1.4";
$gOsLicTodoListChapter="6.6";
$gOsLicLsucChapter="6.6.5";
$gOsLicTlExplanationChapter="6.6.10";

$gFbLiSpUcName="EPL-C5";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
EPL licensed program, application, or server (proapse) to 3rd parties - in
the form of binary files or as a binary package.";

$gFbLiSpUcRequiresPrefix=
	"the tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the licensing elements - esp. all
  copyright notices and the disclaimer of warranty and liability - are retained
  in your package in exact the form you have received them. If you compile the
  binary from the sources, ensure that all these licensing elements are also
  incorporated into the package.",

  "Create a modification text file, if such a
  notice file still does not exist. Expand the modification text
  file by a more general description of your modifications. Incorporate it into
  your distribution package.",

  "Mark all modifications of the source code of the
  program (proapse) thoroughly - namely within the  modfied source code.",

  "Organize your modifications in a way that they are
  covered by the (existing) EPL licensing statements.",

  "If still not existing, integrate an explicit, very
  prominently placed 'No warranty' statement into the distributed source code
  package. Let this statement clearly say that all (other) contributors to the
  software do not take over any responsibility for the quality of the software.
  Then, add the no-warranty clause and the disclaimer of the liability of the
  EPL itself into that file. Update an existing copyright screen presented by
  the program so that it shows the same information.",

  "Make the source code of the modifed program
  accessible via a repository under your own control: Push the source code
  package into an internet repository and enable its download function.
  Integrate an easily to find description into your distribution package which
  explains how the code can be received from where. Ensure, that this repository
  is usable reasonably long enough.",

  "Insert a prominent hint to the download repository
  into your distribution and/or your additional material.",

  "Execute the to-do list of use case EPL-C4 (:- the same request parameters,
		 but replace form = binaries by form = sources)."

);

$gFbLiSpUcRequiresVolArr=array(
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the EPL 1.0 license."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to remove or to alter any copyright notices contained within the
		received software package."
		);

?>
