<?php
if(!mysql_connect("localhost","tejalavu96","lavugnanateja96"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("india"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>
