<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
        /* Styles for the button */
        .back-button {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        /* Responsive styles */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            .back-button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
// Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $name = $_POST['name'];
            $college = $_POST['college'];
            $branch = $_POST['branch'];
            $batch = $_POST['batch'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
// Create connection
            $servername = "127.0.0.1:3306";
            $username = "u431598229_opscodify"; // Assuming username is root
            $password = "snow27goLu"; // Assuming password is empty
            $dbname = "u431598229_black"; // Database name
            $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
// Insert form data into database table
            $sql = "INSERT INTO opscodify (name, collegename, Branch, batch, email, mobile)
                    VALUES ('$name', '$college', '$branch', '$batch', '$email', '$mobile')";
if ($conn->query($sql) === TRUE) {
// Display success message
                echo "<div class='success-message'>Registration successful!</div>";
// Display submitted data in table format
                echo "<h2>Submitted Data</h2>";
                echo "<table>";
                echo "<tr><th>Name</th><th>College Name</th><th>Branch</th><th>Batch</th><th>Email</th><th>Mobile</th></tr>";
                echo "<tr><td>$name</td><td>$college</td><td>$branch</td><td>$batch</td><td>$email</td><td>$mobile</td></tr>";
                echo "</table>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            // Close connection
            $conn->close();
        }
        ?>
        <a href="https://blacksnwhite.com/" class="back-button">Back</a>
    </div>
</body>
</html>