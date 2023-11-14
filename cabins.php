<?php

// Get the database connection details from environment variables
$supabaseUrl = getenv('https://tpogqybedqrbsgjoawxe.supabase.co');
$supabaseKey = getenv('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRwb2dxeWJlZHFyYnNnam9hd3hlIiwicm9sZSI6ImFub24iLCJpYXQiOjE2OTk4ODA2NTEsImV4cCI6MjAxNTQ1NjY1MX0.F3XBYJ-V5_KoXVXKZ0sqgajSzfwPR5Oy1uerUp3bLjA');

// Parse the URL to get the connection details
$dbParams = parse_url($supabaseUrl);

$host = $dbParams['host'] ?? null;
$dbname = ltrim($dbParams['path'], '/');
$user = $dbParams['user'] ?? null;
$password = $dbParams['pass'] ?? null;
$port = $dbParams['port'] ?? null;

// Set up the DSN (Data Source Name)
$dsn = "pgsql:host=db.tpogqybedqrbsgjoawxe.supabase.co;port=5432;dbname=postgres;user=postgres;password=HomewardBound1234#;sslmode=require";

// Create a new PDO instance
try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Your database interaction goes here
    // ...

} catch (PDOException $e) {
    // Handle any database connection errors
    error_log("Connection failed: " . $e->getMessage());
    die("Connection failed: " . $e->getMessage());
}

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
