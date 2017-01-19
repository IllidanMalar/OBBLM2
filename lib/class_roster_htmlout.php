<?php

/*
 *  Copyright (c) Nicholas Mossor Rathmann <nicholas.rathmann@gmail.com> 2009-2012. All Rights Reserved.
 *
 *
 *  This file is part of OBBLM.
 *
 *  OBBLM is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  OBBLM is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

 class Roster_HTMLOUT{
 	public static function dispList() {
 		global $lng, $DEA;
		
 		echo '<h1>Tutti i roster ammessi</h1><ul>';
		foreach ($DEA as $razza => $dati) {
			echo'<li';
			if ($dati['other']['race_id'] < 21) echo ' class="ORIGINALI">BASE - ';
			if ($dati['other']['race_id'] > 20 && $dati['other']['race_id'] < 24) echo ' class="LRB6">LRB6 - ';
			if ($dati['other']['race_id'] > 23 && $dati['other']['race_id'] < 27) echo ' class="UFFICIOSE">CYANIDE - ';
			if ($dati['other']['race_id'] > 26) echo ' class="SPERIMENTALI">SPERIMENTALI - ';
			echo'<a href="index.php?section=objhandler&type=1&obj=4&obj_id='.$dati['other']['race_id'].'">'.$lng->getTrn('race/'.strtolower(str_replace(' ','', $razza))).'</a></li>';	 
		}
		echo'</ul>';
 	}
 }
