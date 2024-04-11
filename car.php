<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Insurance Cover</title>
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

        input[type="text"],
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Car Insurance Cover</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="car_value">Car Value:</label>
            <input type="text" id="car_value" name="car_value" required>
            <label for="age">Driver's Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="driving_experience">Years of Driving Experience:</label>
            <input type="number" id="driving_experience" name="driving_experience" required>
            <button type="submit" name="calculate">Calculate Premium</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate and sanitize input
            $car_value = floatval($_POST["car_value"]);
            $age = intval($_POST["age"]);
            $driving_experience = intval($_POST["driving_experience"]);

            // Simple premium calculation (you might have a more complex algorithm)
            $base_premium = $car_value * 0.05;
            $age_factor = ($age < 25) ? 1.2 : 1;
            $experience_factor = ($driving_experience < 3) ? 1.5 : 1;
            $total_premium = $base_premium * $age_factor * $experience_factor;

            // Display premium
            echo "<h2>Your Car Insurance Premium:</h2>";
            echo "<p>Base Premium: " . number_format($base_premium, 2) . "</p>";
            echo "<p>Age Factor: " . $age_factor . "</p>";
            echo "<p>Experience Factor: " . $experience_factor . "</p>";
            echo "<p>Total Premium: " . number_format($total_premium, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>
