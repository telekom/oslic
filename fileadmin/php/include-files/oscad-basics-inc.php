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

/*
 * Matrix of known equivalences between use-cases
 * and each license specific case.
 */

$gCoveringUseCaseMatrixArray = array(
/*
	'AGPLv3.0' => array(
			'OSUC-01' => 'undefined',
			'OSUC-02S' => 'undefined',
			'OSUC-02B' => 'undefined',
			'OSUC-03' => 'undefined',
			'OSUC-04S' => 'undefined',
			'OSUC-04B' => 'undefined',
			'OSUC-05S' => 'undefined',
			'OSUC-05B' => 'undefined',
			'OSUC-06' => 'undefined',
			'OSUC-07S' => 'undefined',
			'OSUC-07B' => 'undefined',
			'OSUC-08S' => 'undefined',
			'OSUC-08B' => 'undefined',
			'OSUC-09' => 'undefined',
			'OSUC-10S' => 'undefined',
			'OSUC-10B' => 'undefined'
	),
	*/
	'ApLv2.0' => array(
			'OSUC-01' => 'ApL-C1',
			'OSUC-02S' => 'ApL-C2',
			'OSUC-02B' => 'ApL-C3',
			'OSUC-03' => 'ApL-C1',
			'OSUC-04S' => 'ApL-C4',
			'OSUC-04B' => 'ApL-C5',
			'OSUC-05S' => 'ApL-C2',
			'OSUC-05B' => 'ApL-C3',
			'OSUC-06' => 'ApL-C1',
			'OSUC-07S' => 'ApL-C2',
			'OSUC-07B' => 'ApL-C3',
			'OSUC-08S' => 'ApL-C6',
			'OSUC-08B' => 'ApL-C7',
			'OSUC-09' => 'ApL-C1',
			'OSUC-10S' => 'ApL-C8',
			'OSUC-10B' => 'ApL-C9'
			),
	'BSDv2CL' => array(
			'OSUC-01' => 'BSD-C1',
			'OSUC-02S' => 'BSD-C2',
			'OSUC-02B' => 'BSD-C3',
			'OSUC-03' => 'BSD-C1',
			'OSUC-04S' => 'BSD-C4',
			'OSUC-04B' => 'BSD-C5',
			'OSUC-05S' => 'BSD-C2',
			'OSUC-05B' => 'BSD-C3',
			'OSUC-06' => 'BSD-C1',
			'OSUC-07S' => 'BSD-C2',
			'OSUC-07B' => 'BSD-C3',
			'OSUC-08S' => 'BSD-C6',
			'OSUC-08B' => 'BSD-C7',
			'OSUC-09' => 'BSD-C1',
			'OSUC-10S' => 'BSD-C8',
			'OSUC-10B' => 'BSD-C9'
			),
	'BSDv3CL' => array(
			'OSUC-01' => 'BSD-C1',
			'OSUC-02S' => 'BSD-C2',
			'OSUC-02B' => 'BSD-C3',
			'OSUC-03' => 'BSD-C1',
			'OSUC-04S' => 'BSD-C4',
			'OSUC-04B' => 'BSD-C5',
			'OSUC-05S' => 'BSD-C2',
			'OSUC-05B' => 'BSD-C3',
			'OSUC-06' => 'BSD-C1',
			'OSUC-07S' => 'BSD-C2',
			'OSUC-07B' => 'BSD-C3',
			'OSUC-08S' => 'BSD-C6',
			'OSUC-08B' => 'BSD-C7',
			'OSUC-09' => 'BSD-C1',
			'OSUC-10S' => 'BSD-C8',
			'OSUC-10B' => 'BSD-C9'
			),
/*
	'CDDLv1.0' => array(
			'OSUC-01' => 'undefined',
			'OSUC-02S' => 'undefined',
			'OSUC-02B' => 'undefined',
			'OSUC-03' => 'undefined',
			'OSUC-04S' => 'undefined',
			'OSUC-04B' => 'undefined',
			'OSUC-05S' => 'undefined',
			'OSUC-05B' => 'undefined',
			'OSUC-06' => 'undefined',
			'OSUC-07S' => 'undefined',
			'OSUC-07B' => 'undefined',
			'OSUC-08S' => 'undefined',
			'OSUC-08B' => 'undefined',
			'OSUC-09' => 'undefined',
			'OSUC-10S' => 'undefined',
			'OSUC-10B' => 'undefined'
			),
 */
	'EPLv1.0' => array(
			'OSUC-01' => 'EPL-C1',
			'OSUC-02S' => 'EPL-C2',
			'OSUC-02B' => 'EPL-C3',
			'OSUC-03' => 'EPL-C1',
			'OSUC-04S' => 'EPL-C4',
			'OSUC-04B' => 'EPL-C5',
			'OSUC-05S' => 'EPL-C2',
			'OSUC-05B' => 'EPL-C3',
			'OSUC-06' => 'EPL-C1',
			'OSUC-07S' => 'EPL-C2',
			'OSUC-07B' => 'EPL-C3',
			'OSUC-08S' => 'EPL-C6',
			'OSUC-08B' => 'EPL-C7',
			'OSUC-09' => 'EPL-C1',
			'OSUC-10S' => 'EPL-C8',
			'OSUC-10B' => 'EPL-C9'
			),
	'EUPLv1.1' => array(
			'OSUC-01' => 'EUPL-C1',
			'OSUC-02S' => 'EUPL-C2',
			'OSUC-02B' => 'EUPL-C3',
			'OSUC-03' => 'EUPL-C1',
			'OSUC-04S' => 'EUPL-C6',
			'OSUC-04B' => 'EUPL-C7',
			'OSUC-05S' => 'EUPL-C2',
			'OSUC-05B' => 'EUPL-C3',
			'OSUC-06' => 'EUPL-C1',
			'OSUC-07S' => 'EUPL-C4',
			'OSUC-07B' => 'EUPL-C5',
			'OSUC-08S' => 'EUPL-C8',
			'OSUC-08B' => 'EUPL-C9',
			'OSUC-09' => 'EUPL-C1',
			'OSUC-10S' => 'EUPL-CA',
			'OSUC-10B' => 'EUPL-CB'
			),
	'GPLv2.0' => array(
			'OSUC-01' => 'GPL-C1',
			'OSUC-02S' => 'GPL-C2',
			'OSUC-02B' => 'GPL-C3',
			'OSUC-03' => 'GPL-C1',
			'OSUC-04S' => 'GPL-C6',
			'OSUC-04B' => 'GPL-C7',
			'OSUC-05S' => 'GPL-C2',
			'OSUC-05B' => 'GPL-C3',
			'OSUC-06' => 'GPL-C1',
			'OSUC-07S' => 'GPL-C4',
			'OSUC-07B' => 'GPL-C5',
			'OSUC-08S' => 'GPL-C8',
			'OSUC-08B' => 'GPL-C9',
			'OSUC-09' => 'GPL-C1',
			'OSUC-10S' => 'GPL-CA',
			'OSUC-10B' => 'GPL-CB'
			),
	'GPLv3.0' => array(
			'OSUC-01' => 'GPL-C1',
			'OSUC-02S' => 'GPL-C2',
			'OSUC-02B' => 'GPL-C3',
			'OSUC-03' => 'GPL-C1',
			'OSUC-04S' => 'GPL-C6',
			'OSUC-04B' => 'GPL-C7',
			'OSUC-05S' => 'GPL-C2',
			'OSUC-05B' => 'GPL-C3',
			'OSUC-06' => 'GPL-C1',
			'OSUC-07S' => 'GPL-C4',
			'OSUC-07B' => 'GPL-C5',
			'OSUC-08S' => 'GPL-C8',
			'OSUC-08B' => 'GPL-C9',
			'OSUC-09' => 'GPL-C1',
			'OSUC-10S' => 'GPL-CA',
	),
	'LGPLv2.1' => array(
			'OSUC-01' => 'LGPL-C1',
			'OSUC-02S' => 'LGPL-C2',
			'OSUC-02B' => 'LGPL-C3',
			'OSUC-03' => 'LGPL-C1',
			'OSUC-04S' => 'LGPL2-C4',
			'OSUC-04B' => 'LGPL2-C5',
			'OSUC-05S' => 'LGPL-C2',
			'OSUC-05B' => 'LGPL-C3',
			'OSUC-06' => 'LGPL-C1',
			'OSUC-07S' => 'LGPL-C2',
			'OSUC-07B' => 'LGPL-C3',
			'OSUC-08S' => 'LGPL-C6',
			'OSUC-08B' => 'LGPL-C7',
			'OSUC-09' => 'LGPL-C1',
			'OSUC-10S' => 'LGPL-C8',
			'OSUC-10B' => 'LGPL-C9'
			),
	'LGPLv3.0' => array(
			'OSUC-01' => 'LGPL-C1',
			'OSUC-02S' => 'LGPL-C2',
			'OSUC-02B' => 'LGPL-C3',
			'OSUC-03' => 'LGPL-C1',
			'OSUC-04S' => 'LGPL3-C4',
			'OSUC-04B' => 'LGPL3-C5',
			'OSUC-05S' => 'LGPL-C2',
			'OSUC-05B' => 'LGPL-C3',
			'OSUC-06' => 'LGPL-C1',
			'OSUC-07S' => 'LGPL-C2',
			'OSUC-07B' => 'LGPL-C3',
			'OSUC-08S' => 'LGPL-C6',
			'OSUC-08B' => 'LGPL-C7',
			'OSUC-09' => 'LGPL-C1',
			'OSUC-10S' => 'LGPL-C8',
			'OSUC-10B' => 'LGPL-C9'
			),
	'MIT' => array(
			'OSUC-01' => 'MIT-C1',
			'OSUC-02S' => 'MIT-C2',
			'OSUC-02B' => 'MIT-C2',
			'OSUC-03' => 'MIT-C1',
			'OSUC-04S' => 'MIT-C3',
			'OSUC-04B' => 'MIT-C3',
			'OSUC-05S' => 'MIT-C2',
			'OSUC-05B' => 'MIT-C2',
			'OSUC-06' => 'MIT-C1',
			'OSUC-07S' => 'MIT-C2',
			'OSUC-07B' => 'MIT-C2',
			'OSUC-08S' => 'MIT-C4',
			'OSUC-08B' => 'MIT-C4',
			'OSUC-09' => 'MIT-C1',
			'OSUC-10S' => 'MIT-C5',
			'OSUC-10B' => 'MIT-C5'
			),
	'MPLv2.0' => array(
			'OSUC-01' => 'MPL-C1',
			'OSUC-02S' => 'MPL-C2',
			'OSUC-02B' => 'MPL-C3',
			'OSUC-03' => 'MPL-C1',
			'OSUC-04S' => 'MPL-C4',
			'OSUC-04B' => 'MPL-C5',
			'OSUC-05S' => 'MPL-C2',
			'OSUC-05B' => 'MPL-C3',
			'OSUC-06' => 'MPL-C1',
			'OSUC-07S' => 'MPL-C2',
			'OSUC-07B' => 'MPL-C3',
			'OSUC-08S' => 'MPL-C6',
			'OSUC-08B' => 'MPL-C7',
			'OSUC-09' => 'MPL-C1',
			'OSUC-10S' => 'MPL-C8',
			'OSUC-10B' => 'MPL-C9'
			),
	'MS-PL' => array(
			'OSUC-01' => 'MS-PL-C1',
			'OSUC-02S' => 'MS-PL-C2',
			'OSUC-02B' => 'MS-PL-C2',
			'OSUC-03' => 'MS-PL-C1',
			'OSUC-04S' => 'MS-PL-C3',
			'OSUC-04B' => 'MS-PL-C4',
			'OSUC-05S' => 'MS-PL-C2',
			'OSUC-05B' => 'MS-PL-C2',
			'OSUC-06' => 'MS-PL-C1',
			'OSUC-07S' => 'MS-PL-C2',
			'OSUC-07B' => 'MS-PL-C2',
			'OSUC-08S' => 'MS-PL-C5',
			'OSUC-08B' => 'MS-PL-C6',
			'OSUC-09' => 'MS-PL-C1',
			'OSUC-10S' => 'MS-PL-C7',
			'OSUC-10B' => 'MS-PL-C8'
			),
	'PGL' => array(
			'OSUC-01' => 'PGL-C1',
			'OSUC-02S' => 'PGL-C2',
			'OSUC-02B' => 'PGL-C2',
			'OSUC-03' => 'PGL-C1',
			'OSUC-04S' => 'PGL-C3',
			'OSUC-04B' => 'PGL-C3',
			'OSUC-05S' => 'PGL-C2',
			'OSUC-05B' => 'PGL-C2',
			'OSUC-06' => 'PGL-C1',
			'OSUC-07S' => 'PGL-C2',
			'OSUC-07B' => 'PGL-C2',
			'OSUC-08S' => 'PGL-C4',
			'OSUC-08B' => 'PGL-C4',
			'OSUC-09' => 'PGL-C1',
			'OSUC-10S' => 'PGL-C5',
			'OSUC-10B' => 'PGL-C5'
			),
	'PHPv3.0' => array(
			'OSUC-01' => 'PHP-C1',
			'OSUC-02S' => 'PHP-C2',
			'OSUC-02B' => 'PHP-C3',
			'OSUC-03' => 'PHP-C1',
			'OSUC-04S' => 'PHP-C4',
			'OSUC-04B' => 'PHP-C5',
			'OSUC-05S' => 'PHP-C2',
			'OSUC-05B' => 'PHP-C3',
			'OSUC-06' => 'PHP-C1',
			'OSUC-07S' => 'PHP-C2',
			'OSUC-07B' => 'PHP-C3',
			'OSUC-08S' => 'PHP-C6',
			'OSUC-08B' => 'PHP-C7',
			'OSUC-09' => 'PHP-C1',
			'OSUC-10S' => 'PHP-C8',
			'OSUC-10B' => 'PHP-C9'
			)
);

/*
 * Find and return the corresponding license use case
 * for the open source use case scenario
 */

function computeCoveringLicenseSpecificUseCase($osucName,$osucLicense){
	global $gCoveringUseCaseMatrixArray;

	$clsuc="unknown";

	$clsuc=$gCoveringUseCaseMatrixArray[$osucLicense][$osucName];

	return $clsuc;
}

/*
 * Return the directory corresponding to the use case name
 */

function getOsucDirectory($osucName) {
	switch($osucName) {
		case 'OSUC-01':
			return "./proapse/unmodified/independent/4yourself";
		case 'OSUC-02S':
			return "./proapse/unmodified/independent/2others/sources";
		case 'OSUC-02B':
			return "./proapse/unmodified/independent/2others/binaries";
		case 'OSUC-03':
			return "./proapse/modified/independent/4yourself";
		case 'OSUC-04S':
			return "./proapse/modified/independent/2others/sources";
		case 'OSUC-04B':
			return "./proapse/modified/independent/2others/binaries";
		case 'OSUC-05S':
			return "./snimoli/unmodified/independent/2others/sources";
		case 'OSUC-05B':
			return "./snimoli/unmodified/independent/2others/binaries";
		case 'OSUC-06':
			return "./snimoli/unmodified/embedded/4yourself";
		case 'OSUC-07S':
			return "./snimoli/unmodified/embedded/2others/sources";
		case 'OSUC-07B':
			return "./snimoli/unmodified/embedded/2others/binaries";
		case 'OSUC-08S':
			return "./snimoli/modified/independent/2others/sources";
		case 'OSUC-08B':
			return "./snimoli/modified/independent/2others/binaries";
		case 'OSUC-09':
			return "./snimoli/modified/embedded/4yourself";
		case 'OSUC-10S':
			return "./snimoli/modified/embedded/2others/sources";
		case 'OSUC-10B':
			return "./snimoli/modified/embedded/2others/binaries";
		default:
			return "unknown";
	}
}

/*
 * Return the master filename for an open source use case
 */

function getOsucIncludeMasterFilename($osucName){
	return strtolower($osucName) ."-inc-master.php";
}

/*
 * Return the filename to include for an open source use case
 */

function getOsucIncludeFilename($osucName){
	return strtolower($osucName) ."-inc.php";
}

/*
 * Return the master filename for a specific license use case
 */

function getLsucIncludeMasterFilename($lsucName){
	return strtolower($lsucName) ."-inc-master.php";
}

/*
 * Return the filename to include for a specific license use case
 */

function getLsucIncludeFilename($lsucName){
	return strtolower($lsucName) ."-inc.php";
}

/*
 * Compute the name of the license from the specific use case name
 */

function getLicenseBasename($lsucName){

	$parts = explode("-C", $lsucName);
	if (count($parts)==0)
		return "";
	if (($parts[0]=="LGPL3")||($parts[0]=="LGPL2"))
		return "lgpl";
	return strtolower($parts[0]);
}

?>
