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

$gFbLicenseName="MIT";
$gFbLicenseSpecification="MIT License";
$gFbLicenseAbbr="MIT";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.9";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.10";
$gOsLicLsucChapter="6.10.5";
$gOsLicTlExplanationChapter="6.10.6";

$gFbLiSpUcName="MIT-C5";

$gFbLiSpUcDesc=
	"that you are going to distribute a modified version of the received
MIT code snippet, module, library, or plugin (snimoli) to 3rd parties together
with another larger software unit which contains this code snippet, module,
library, or plugin as an embedded component - regardless whether you distribute
it in the form of binaries or as source code files.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Ensure that the original licensing elements - esp. the MIT license text
	containing the specific copyright notices of the original author(s), the
	permission notices and the MIT disclaimer - are retained in
  your package in the form you have received them."
);

$gFbLiSpUcRequiresVolArr=array(

  "Mark your modifications in the source code, regardless whether you want to
	 distribute the code or not.",

  "It is a good practice of the open source
  community, to let the copyright notice which is shown by the running program
  also state that the program uses a component being licensed under the MIT
  license. And it is a good tradition to insert links to the homepage / download
  page of this used component.",

  "It's also a good tradition to let the
  documentation of your program and/or your additional material also mention
  that you have used this component added by a link to the original software
  component and its homepage.",

  "Arrange your distribution so that the original
  licensing elements - esp. the MIT license text containing the specific
  copyright notices of the original author(s), the permission notices and the
  MIT disclaimer -  clearly refer only to the embedded library and do not
  disturb the licensing of your own overarching work. It's a good tradition to
  keep the libraries, modules, snippet, or plugins in specific directories which
  contain also all licensing elements."
);

$gFbLiSpUcForbidsPrefix="nothing explicitly.";
$gFbLiSpUcForbidsArr=array();

?>
