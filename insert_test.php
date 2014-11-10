is this working?
<?
$db_host="localhost";
$db_user="root";
$db_pass="root";
$db_name="optimizeddb";
$dbConn = new mysqli($db_host, $db_user, $db_pass, $db_name) or die('There was a problem connecting to the database.'); 

$course_id = 69;
$plottableCoordinates = Array(array(1,0),array(2,90),array(3,85));

if($stmt = $dbConn->prepare("INSERT INTO insert_test (course_id, distance, elevation) values (?, ?, ?)") or die('There was a problem preparing the query.')){
	foreach ($plottableCoordinates as $plotable_coordinate){
		$stmt->bind_param("iss", $course_id, $plotable_coordinate[0], $plotable_coordinate[1]);
		$stmt->execute();
	}
	$stmt->close();
}

mysqli_close($dbConn);
?>