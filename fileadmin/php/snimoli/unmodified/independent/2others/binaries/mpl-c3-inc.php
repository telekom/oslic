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

$gFbLicenseName="MPLv2.0";
$gFbLicenseSpecification="Mozilla Public License";
$gFbLicenseAbbr="MPL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.10";
$gOsLicPatentChapter="3.1.8";
$gOsLicTodoListChapter="6.11";
$gOsLicLsucChapter="6.11.3";
$gOsLicTlExplanationChapter="6.11.10";

$gFbLiSpUcName="MPL-C3";

$gFbLiSpUcDesc=
	"that you are going to distribute an unmodified version of the
received MPL software to 3rd parties - in the form of binary files or as a
binary package. In this case it is not discriminating to distribute a
program, an application, a server, a snippet, a module, a library, or a plugin
as an independent or an embedded unit.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the licensing elements - esp. all
  copyright notices, patent notices, disclaimers of warranty, or limitations of
  liability - are retained in your package in exact the form you have received
  them. If you compile the binary from the sources, ensure that all these
  licensing elements are also incorporated into the package.",

  "Make the source code of the software accessible
  via a repository under your own control: Push the source code package into an
  internet repository and enable its download function without requiring any fee
  from the downloading user. Integrate an easily to find description into your
  distribution package which explains how the code can be received from where.
  Ensure, that this repository is usable reasonably long enough.",

  "Insert a prominent hint to the download repository
  into your distribution and/or your additional material.",

  "Execute the to-do list of use case MPL-C2 (:- the same request parameters,
		 but replace form = binaries by form = sources)."

);

$gFbLiSpUcRequiresVolArr=array(

  "Give the recipient a copy of the MPL 2.0 license. If it is not already
	part of the software package, add it. If the licensing statement in the
	licensing file of the package does still not clearly state that the package
  is licensed under the MPL, additionally insert your own correct MPL licensing
	file containing the sentence: 'This Source Code Form is subject to the terms
  of the Mozilla Public License, v. 2.0. If a copy of the MPL was not
  distributed with this file, You can obtain one at
  http://mozilla.org/MPL/2.0/'.",

  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the MPL 2.0 license."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(

		"to remove or to alter any license notices - including copyright notices,
		patent notices, disclaimers of warranty, or limitations of liablility
		- contained within the software package you have received.",

		"to promote any of your products - based on the this software - by
		trademarks, service marks, or logos linked to this MPL software, except as
		required for unpartially describing the used software and reproducing the
		copyright notice."

		);

?>
