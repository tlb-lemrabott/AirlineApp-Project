<?php
$flightno = $_GET['flightno'];

include_once 'dbconnect.php';

$sql = "DELETE FROM flight WHERE number = '$flightno'";
if(! mysqli_query($conn, $sql))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
else
{
	echo "Vol supprimé avec succès!";	
}

mysqli_close($conn);

?>