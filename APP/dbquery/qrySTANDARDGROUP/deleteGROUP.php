<?php
/************************************
Edited 12/28/2016

GSuite Management System
    Copyright (C) 2017  Michael Keough (Keoflex.com, MichaelKeough.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published
    by the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
************************************/

$element = "Smart Group";
$element_function = "Deleted";
//Define Variables for the form



$GRP_id = $conn->real_escape_string(pg_encrypt($_POST['group_id'],$pg_encrypt_key,"decode"));
$GRP_id = str_replace($general_seed,'',$GRP_id);

	//form query
	$qry = "DELETE from smart_groups where id = ".$GRP_id;

	///echo $qry;


	$QUERY_PROCESS = mysqltng_query($qry);
	//call query process to make sure there are not errors in the query
	require_once("dbquery/QUERY_PROCESS.php");




?>