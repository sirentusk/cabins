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

    // Handle the inclusions
    if (!empty($inclusions)) {
        echo "<h3>Selected Inclusions:</h3>";
        echo "<ul>";
        foreach ($inclusions as $inclusion) {
            echo "<li>" . htmlspecialchars($inclusion) . "</li>";
        }
        echo "</ul>";
    }

    // Check if a file has been uploaded
    if (isset($_FILES['cabinImage']) && $_FILES['cabinImage']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['cabinImage'];
        $imageType = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

        // Check if the file is one of the allowed types
        $allowedTypes = ['jpg', 'jpeg', 'png', 'tiff', 'webp', 'svg', 'heif', 'heic'];
        if (in_array($imageType, $allowedTypes)) {
            $targetDirectory = "uploads/";
            $newFileName = uniqid('cabin_', true) . '.' . $imageType;
            $targetFile = $targetDirectory . $newFileName;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                echo "Image uploaded successfully.";
                // Store the new file name in the database, not the original name from the user
                // $sql = "INSERT INTO cabins (image_path) VALUES (?)";
                // ... Execute database query to store image path ...
            } else {
                echo "There was an error uploading the image.";
            }
        } else {
            echo "Invalid file type, please upload a jpg, jpeg, png, tiff, webp, svg, heif or heic file type.";
        }
    }

    // Process the rest of the form data and interact with the database
    // ...
}

// Close the database connection if it's open
// ...
?>
