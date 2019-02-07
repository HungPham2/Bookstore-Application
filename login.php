<?php


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['Username']) || empty($_POST['Zip_Code'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $Username and $Zip_Code
$Username = $_POST['Username'];
$Zip_Code = $_POST['Zip_Code'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "online_bookstore");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT Username, Zip_Code FROM account WHERE Username=? AND Zip_Code=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $Username, $Zip_Code);
$stmt->execute();
$stmt->bind_result($Username, $Zip_Code);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $Username; // Initializing Session
          header("location: profile.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>