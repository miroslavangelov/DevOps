<h1>Top 10 cities in Bulgaria</h1>
<?php
	$connectionInfo = array("UID" => "demosa", "pwd" => "ExamPrepPa66word", "Database" => "azesqldb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:azesql.database.windows.net,1433";
	$conn = sqlsrv_connect($serverName, $connectionInfo);

	if( $conn === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

	$stmt = sqlsrv_query( $conn, "SELECT * FROM Cities");

	if( $stmt === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

	print "<ol>\n";
	
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     echo "<li>".$row['CityName']." -> ".$row['Population']."</li>\n";
	}
	
	print "</ol>\n";
	
	print "<hr />\n";
	
	print "<small>Serverd by: ".gethostname()."</small>\n";
?>