#!/usr/bin/php
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

echo "starting the preparation:\n";

include "./include-files/oscad-basics-inc.php";

foreach ($gCoveringUseCaseMatrixArray as $license => $coveredByArray) {
	echo "copying files for $license into the evaluation tree:\n";
	foreach ($coveredByArray as $osucName => $lsucName) {

		$osucDirectory=getOsucDirectory($osucName);

		echo "preparing missed units concerning <$osucName>:\n";
		/*
		 * (1) generate the osuc finder as tree of directories
		 */
		@mkdir($osucDirectory,0777,true);

		/*
		 * (2) copy (generate) the osuc-include file into the directory
		 * [ Later on this step might include a conversion
		 *   of the oslic latex file in to the php include file ]
		 */

		$osucIncludeMasterFileName=getOsucIncludeMasterFilename($osucName);

		$osucIncludeFileName=getOsucIncludeFilename($osucName);

		$sourceOsucFile="master-files/osuc-master-files/$osucIncludeMasterFileName";
		$targetOsucFile="$osucDirectory/$osucIncludeFileName";

		/* existing files are overwritten by master files */
		echo "$sourceOsucFile -> $targetOsucFile\n";
		copy($sourceOsucFile, $targetOsucFile);

		echo "$osucName is covered by $lsucName\n";

		/*
		 * (3) copy (generate) the lsuc-include-file of the license
		 * specific use case which covers the general open source use case
		 * into the coresponding finder directory
		 * [ Later on this step might include a conversion
		 *   of the oslic latex file in to the php include file ]
		 */

		$lsucIncludeMasterFileName=getLsucIncludeMasterFilename($lsucName);
		$lsucIncludeFileName=getLsucIncludeFilename($lsucName);
		$licenseBaseName=getLicenseBasename($lsucName);

		$sourceLsucFile="master-files/lsuc-master-files/" .
										$licenseBaseName . "/" .
										$lsucIncludeMasterFileName;
		$targetLsucFile="$osucDirectory/$lsucIncludeFileName";

		/* existing files are overwritten by master files */
		echo "$sourceLsucFile -> $targetLsucFile\n";
		copy($sourceLsucFile, $targetLsucFile);


	}
}


return 0;
?>
