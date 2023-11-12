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

    <label for="inclusions">Cabin Inclusions:</label><br>
    <select id="inclusions" name="inclusions[]" multiple required>
        <option value="Air conditioner">Air conditioner</option>
        <option value="Linen">Linen</option>
        <option value="Veranda">Veranda</option>
        <option value="Bunk bed">Bunk bed</option>
        <option value="Ceiling fans">Ceiling fans</option>
        <option value="Clock radio">Clock radio</option>
        <option value="Dining facilities">Dining facilities</option>
        <option value="Dishwasher">Dishwasher</option>
        <option value="DVD Player">DVD Player</option>
        <option value="Foxtel">Foxtel</option>
        <option value="Fridge/Freezer">Fridge/Freezer</option>
        <option value="Hair dryer">Hair dryer</option>
        <option value="Ironing Facilities">Ironing Facilities</option>
        <option value="Microwave">Microwave</option>
    </select><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
