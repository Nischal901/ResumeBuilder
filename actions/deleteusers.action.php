<?php
require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

// Create a new instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->connect();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ID is provided
    if (isset($_POST['id'])) {
        // Get the user ID
        $user_id = $_POST['id'];

        // Check if the connection is successful
        if ($conn) {
            // Prepare a SQL statement to delete the user
            $sql = "DELETE FROM users WHERE id = ?";

            // Prepare and bind parameters
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);

            // Execute the statement
            if ($stmt->execute()) {
                $fn->setAlert('User Removed Successfully !');
                $fn->redirect('../admindashboard.php');
            } else {
                echo "Error deleting user.";
            }

            // Close the statement
            $stmt->close();
        }
    }
} 
?>
