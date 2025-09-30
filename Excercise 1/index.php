<?php
$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "LaptopShop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Laptops";
$result = $conn->query($sql);

echo "<h2>Laptop Shop Inventory</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Processor</th>
        <th>RAM (GB)</th>
        <th>Storage</th>
        <th>Graphics</th>
        <th>Display Size</th>
        <th>Price ($)</th>
        <th>Stock</th>
        <th>Release Year</th>
      </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["LaptopID"]."</td>
                <td>".$row["Brand"]."</td>
                <td>".$row["Model"]."</td>
                <td>".$row["Processor"]."</td>
                <td>".$row["RAM"]."</td>
                <td>".$row["Storage"]."</td>
                <td>".$row["Graphics"]."</td>
                <td>".$row["DisplaySize"]."</td>
                <td>".$row["Price"]."</td>
                <td>".$row["StockQuantity"]."</td>
                <td>".$row["ReleaseYear"]."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='11'>No laptops found</td></tr>";
}

echo "</table>";

$conn->close();
?>
