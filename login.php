<?php

$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());

// Retrieve values from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the user exists
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = pg_query($dbconn, $sql);

if (pg_num_rows($result) > 0) {
	session_start();
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    echo "Invalid username or password";
}

pg_close($dbconn);
?>
