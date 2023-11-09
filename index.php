<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Cabin Information</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="cabinType">Cabin Type:</label><br>
    <select id="cabinType" name="cabinType" required>
        <option value="Standard cabin">Standard cabin – sleeps 4</option>
        <option value="Standard open plan cabin">Standard open plan cabin – sleeps 4</option>
        <option value="Deluxe cabin">Deluxe cabin – sleeps 4</option>
        <option value="Villa">Villa – sleeps 4</option>
        <option value="Spa villa">Spa villa – sleeps 4</option>
        <option value="Slab powered site">Slab powered site</option>
    </select><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br>

    <label for="pricePerNight">Price Per Night:</label><br>
    <input type="number" id="pricePerNight" name="pricePerNight" required><br>

    <label for="pricePerWeek">Price Per Week:</label><br>
    <input type="number" id="pricePerWeek" name="pricePerWeek" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
