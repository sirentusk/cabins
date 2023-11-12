<?php
// Assuming the database connection is already set up in this file or included from another file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $cabinType = $_POST['cabinType'];
    $description = $_POST['description'];
    $pricePerNight = $_POST['pricePerNight'];
    $pricePerWeek = $_POST['pricePerWeek'];
    $inclusions = $_POST['inclusions']; // This is an array of selected inclusions

    // Perform database operations
    // For example, to insert the form data into the cabins table:
    $sql = "INSERT INTO cabins (cabin_type, description, price_per_night, price_per_week) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cabinType, $description, $pricePerNight, $pricePerWeek]);

    // To insert inclusions, you may have a junction table and need to insert multiple rows
    // Example:
    // foreach ($inclusions as $inclusion) {
    //     $sql_inclusions = "INSERT INTO cabin_inclusions (cabin_id, inclusion_id) VALUES (?, ?)";
    //     $stmt_inclusions = $pdo->prepare($sql_inclusions);
    //     // Assuming you retrieve or have the cabin ID and inclusion ID
    //     $stmt_inclusions->execute([$cabin_id, $inclusion_id]);
    // }

    // Redirect to a new page or display a success message
    echo "<h2>Cabin Information Submitted:</h2>";
    // Display the submitted data
    // ... 
}
?>
