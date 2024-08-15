<?php
// Database connection
$conn = mysqli_connect('127.0.0.1:3306', 'u431598229_opscodify', 'snow27goLu', 'u431598229_black');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch student data from the database
$sql = "SELECT * FROM opscodify";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Data</h1>
    </header>
    <div class="container">
        <div class="card">
            <h2>Student Data</h2>
            <table>
                <thead>
                    <tr>
                        <!-- <th>Student ID</th> -->
                        <th>Name</th>
                        <th>College</th>
                        <th>Branch</th>
                        <th>Batch no</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        // echo "<td>" . $row['student_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['collegename'] . "</td>";
                        echo "<td>" . $row['Branch'] . "</td>";
                        echo "<td>" . $row['batch'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Student Data System. All rights reserved.</p>
    </footer>
</body>
</html>
<?php
// Close database connection
mysqli_close($conn);
?>
