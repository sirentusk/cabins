<?php

// Parse the database URL from the environment variable
$db = parse_url(getenv("DATABASE_URL"));

// Set up the database connection using PDO
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db['host'],
    $db['port'],
    $db['user'],
    $db['pass'],
    ltrim($db['path'], '/')
));

// Set error mode to exceptions
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $cabinType = $_POST['cabinType']; // This will now contain the value from the dropdown
    $description = $_POST['description'];
    $pricePerNight = $_POST['pricePerNight'];
    $pricePerWeek = $_POST['pricePerWeek'];

    // You can now use the $pdo object to perform database operations
    // For example, to insert the form data into the database:
    // $sql = "INSERT INTO cabins (cabin_type, description, price_per_night, price_per_week) VALUES (?, ?, ?, ?)";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$cabinType, $description, $pricePerNight, $pricePerWeek]);

    // After inserting, you might want to redirect or display a success message
    // For now, let's just display the submitted data
    echo "<h2>Cabin Information Submitted:</h2>";
    echo "<p>Cabin Type: $cabinType</p>";
    echo "<p>Description: $description</p>";
    echo "<p>Price Per Night: $pricePerNight</p>";
    echo "<p>Price Per Week: $pricePerWeek</p>";
}

// ... rest of your script

?>
