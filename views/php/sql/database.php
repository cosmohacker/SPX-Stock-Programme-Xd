<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/views/php/connection/db_connect.php');

function single_record($query)
{
	global $con;
	$query_string = mysqli_query($con, $query);
	$result =mysqli_fetch_array($query_string);
	return $result;
}
