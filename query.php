<?php
// Connect to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "robot_control";



$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Database connection error: " . mysqli_connect_error());
}


// Query to select the last value 
$query = "SELECT column_name FROM table_name ORDER BY id DESC LIMIT 1";

// Execute the query
$result = mysqli_query($connection, $query);

// Check if the query executed successfully
if ($result) {
    // Fetch the result row
    $row = mysqli_fetch_assoc($result);
    
    // Access the value in the second column
    $value = $row['column_name'];
    
    // Output the value
    echo "Last value in the second column: " . $value;
} else {
    // Handle the query error
    echo "Error executing the query: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>