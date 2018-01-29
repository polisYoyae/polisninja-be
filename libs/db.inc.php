<?php

/*
    This file is part of Polis Ninja.
    https://github.com/Yoyae/polisninja-be

    Polis Ninja is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Polis Ninja is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Polis Ninja.  If not, see <http://www.gnu.org/licenses/>.

 */

// Read configuration
require_once('config.inc.php');

$usemysql = true;

// Connect to MySQL using mysqli
$mysqli = new mysqli(MYSQLHOST, MYSQLUSER, MYSQLPASS, MYSQLDATABASE);

?>
