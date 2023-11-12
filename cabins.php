<?php

// Database connection setup should be here
// ...

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $cabinType = $_POST['cabinType'];
    $description = $_POST['description'];
    $pricePerNight = $_POST['pricePerNight'];
    $pricePerWeek = $_POST['pricePerWeek'];
    $inclusions = $_POST['inclusions']; // This will be an array of selected inclusions

    // Process the form data and interact with the database
    // ...

    // Display the submitted data (or redirect to a success page)
    echo "<h2>Cabin Information Submitted:</h2>";
    echo "<p>Cabin Type: $cabinType</p>";
    echo "<p>Description: $description</p>";
    echo "<p>Price Per Night: $pricePerNight</p>";
    echo "<p>Price Per Week: $pricePerWeek</p>";

    // Handle the inclusions
    if (!empty($inclusions)) {
        echo "<h3>Selected Inclusions:</h3>";
        echo "<ul>";
        foreach ($inclusions as $inclusion) {
            echo "<li>" . htmlspecialchars($inclusion) . "</li>";
        }
        echo "</ul>";
    }
}

// Close the database connection if it's open
// ...
?>
