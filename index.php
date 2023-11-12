<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Cabin Information</title>
</head>
<body>

<form method="post" action="cabins.php">
    <label for="cabinType">Cabin Type:</label><br>
    <select id="cabinType" name="cabinType" required>
        <!-- ... other options ... -->
    </select><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br>

    <label for="pricePerNight">Price Per Night:</label><br>
    <input type="number" id="pricePerNight" name="pricePerNight" required><br>

    <label for="pricePerWeek">Price Per Week:</label><br>
    <input type="number" id="pricePerWeek" name="pricePerWeek" required><br>

    <label for="inclusions">Cabin Inclusions:</label><br>
    <select id="inclusions" name="inclusions[]" multiple required>
        <option value="air_conditioner">Air conditioner</option>
        <option value="linen">Linen</option>
        <!-- ... more inclusions options ... -->
    </select><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
