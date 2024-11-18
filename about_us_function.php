<?php
// Function to fetch all data from the about_us table
function getAllAboutUsData($conn) {
    // Array to store the fetched data
    $aboutUsData = array();

    // Query to select all data from the about_us table
    $sql = "SELECT * FROM about_us where id =6";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query executed successfully
    if ($result && $result->num_rows > 0) {
        // Fetch each row from the result set and add it to the aboutUsData array
        while ($row = $result->fetch_assoc()) {
            $aboutUsData[] = $row;
        }
    }

    // Free the result set
    $result->free_result();

    // Return the aboutUsData array
    return $aboutUsData;
}

// Example usage:
// Assuming $conn is your database connection object (already connected)
 // Connect to the database (Replace these values with your actual database credentials)
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "mydatabase";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
// Call the function to get all data from the about_us table
$aboutUsData = getAllAboutUsData($conn);

// Print the fetched data
//if (!empty($aboutUsData)) {
  //  foreach ($aboutUsData as $data) {
    //    echo "ID: " . $data['id'] . "<br>";
      //  echo "Title: " . $data['title'] . "<br>";
        //echo "Content: " . $data['text'] . "<br>";
        //echo "---------------------<br>";
    //}
//} else {
  //  echo "No data found.";
//}

// Close the database connection
$conn->close();
?>
