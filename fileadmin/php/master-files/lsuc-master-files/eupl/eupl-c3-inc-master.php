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

$gFbLicenseName="EUPLv1.1";
$gFbLicenseSpecification="European Union Public License";
$gFbLicenseAbbr="EUPL";
$gFbLicenseRelease="1.1";

$gOsLicProtectionChapter="2.6";
$gOsLicPatentChapter="3.1.5";
$gOsLicTodoListChapter="6.7";
$gOsLicLsucChapter="6.7.3";
$gOsLicTlExplanationChapter="6.7.12";

$gFbLiSpUcName="EUPL-C3";

$gFbLiSpUcDesc=
	"that you are going to distribute an unmodified version of the
received EUPL software to 3rd parties - as an independent unit and in the form
of binary files or as a binary package. In this case, it is not discriminating
to distribute a program, an application, a server, a snippet, a module, a
library, or a plugin.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the licensing elements - esp. the
  copyright, patent or trademarks notices and all notices that refer to the
  license and to the disclaimer of warranties - are retained in your package in
  the form you have received them. If you compile the binary from the sources,
  ensure that all the licensing elements are also incorporated into the
	package.",

  "Give the recipient a copy of the EUPL 1.1
  license. If it is not already part of the binary package, add
  it.",

  "Make the source code of the distributed software
  accessible via a repository under your own control (even if you do not
  modified it): Push the source code package into a repository, make it
  downloadable via the internet, and integrate an easily to find description
  into the distribution package which explains how the code can be received from
  where. Ensure, that this repository is online for as long as you continue to
  distribute the software.",

 "Insert a prominent hint to the download repository
  into your distribution and/or your additional material.",

  "Execute the to-do list of use case EUPL-C2 (:- the same request parameters,
	but replace form = binaries by form = sources)."

);

$gFbLiSpUcRequiresVolArr=array(
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the EUPL 1.1 license."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to promote any of your services or products - based on the this software
		- by trade names, trademarks, service marks, or names linked to this EUPL
		software, except as required for unpartially describing the used software and
		reproducing the copyright notice."
		);

?>
