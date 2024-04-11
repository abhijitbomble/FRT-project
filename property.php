<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Insurance Cover</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #005a9e;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #005a9e;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #003366;
        }

        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Property Insurance Cover</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="property_value">Property Value:</label>
            <input type="number" id="property_value" name="property_value" required>
            <label for="property_type">Property Type:</label>
            <select id="property_type" name="property_type" required>
                <option value="house">House</option>
                <option value="apartment">Apartment</option>
                <option value="condominium">Condominium</option>
                <!-- Add more options as needed -->
            </select>
            <button type="submit" name="calculate">Calculate Premium</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate input
            $property_value = intval($_POST["property_value"]);
            $property_type = $_POST["property_type"];

            $errors = [];

            if ($property_value <= 0) {
                $errors[] = "Property value must be greater than 0.";
            }

            // Calculate premium if no errors
            if (empty($errors)) {
                $base_premium = calculateBasePremium($property_value, $property_type);
                echo "<h2>Your Property Insurance Premium:</h2>";
                echo "<p>Base Premium: $" . number_format($base_premium, 2) . "</p>";
            } else {
                // Display errors
                echo "<div class='error'>" . implode("<br>", $errors) . "</div>";
            }
        }

        function calculateBasePremium($property_value, $property_type) {
            // Implement your premium calculation logic here
            // This is just a placeholder
            $base_premium = $property_value * 0.02;
            return $base_premium;
        }
        ?>
    </div>
</body>
</html>
