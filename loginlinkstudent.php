<?php
session_start();
?>

<?php
$x = $_POST[ "sid" ];
$y = $_POST[ "pass" ];

include( "database.php" );
//searching login id and password entered in $x & $y
$sql = "select * from REGISTRATION where EID='" . $x . "' and PASS='" . $y . "'";

$result = mysqli_query( $connect, $sql );

if($result)
{
	echo "checked";
}
else{
	echo "nptttt";
}
// if ( mysqli_num_rows($result) > 0 )

//session create
// {
	// if ( $row = $result->fetch_assoc() ) {
	// 	$x = $row[ "EID" ];
	// 	$y= $row[ "PASS" ];
	// 	// $_SESSION[ "FNAME" ] = $row[ "FNAME" ];
	// 	// $_SESSION[ "LNAME" ] = $row[ "LNAME" ];
	// 	// $_SESSION[ "SENO" ] = $row[ "ENO" ];


	// } //redirecting to welcome student page

	// else{
	// header( 'Location:welcomestudent.php' );
	// }
	// header( 'Location:welcomestudent.php' );

// } else {
// 	//error message if SQL query fails
// 	echo "<h3><span style='color:red; '>Invalid Student ID & Password. Page Will redirect to Login Page after 2 seconds </span></h3>";
// 	header( "refresh:3;url=studentlogin.php" );
// }
//close the connection
// $connect->close();

?>