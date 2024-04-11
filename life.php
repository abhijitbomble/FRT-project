<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Insurance Cover</title>
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

        input[type="radio"] {
            margin-right: 10px;
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
        <h1>Life Insurance Cover</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required><label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required><label for="female">Female</label>
            <label>Smoker:</label>
            <input type="radio" id="smoker_yes" name="smoker" value="yes" required><label for="smoker_yes">Yes</label>
            <input type="radio" id="smoker_no" name="smoker" value="no" required><label for="smoker_no">No</label>
            <button type="submit" name="calculate">Calculate Premium</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate input
            $age = intval($_POST["age"]);
            $gender = $_POST["gender"];
            $smoker = $_POST["smoker"];

            // Calculate base premium
            $base_premium = 0;
            if ($age >= 18 && $age <= 30) {
                $base_premium += 100; // Base premium for age 18-30
            } elseif ($age > 30 && $age <= 50) {
                $base_premium += 150; // Base premium for age 31-50
            } else {
                $base_premium += 200; // Base premium for age >50
            }

            // Adjust premium based on gender
            if ($gender == "female") {
                $base_premium -= 20; // Premium discount for females
            }

            // Adjust premium based on smoker status
            if ($smoker == "yes") {
                $base_premium += 50; // Additional premium for smokers
            }

            // Display premium
            echo "<h2>Your Life Insurance Premium:</h2>";
            echo "<p>Base Premium: $" . number_format($base_premium, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>
