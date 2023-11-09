<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $cabinType = $_POST['cabinType'];
    $description = $_POST['description'];
    $pricePerNight = $_POST['pricePerNight'];
    $pricePerWeek = $_POST['pricePerWeek'];

    // Display the submitted data
    echo "<h2>Cabin Information Submitted:</h2>";
    echo "<p>Cabin Type: $cabinType</p>";
    echo "<p>Description: $description</p>";
    echo "<p>Price Per Night: $pricePerNight</p>";
    echo "<p>Price Per Week: $pricePerWeek</p>";
}
?>
