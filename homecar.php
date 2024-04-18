
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Insurance Policy Form</title>
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
        <h1>Car Insurance Policy Form</h1>
        <form action="submit_policy.php" method="post">
            <label for="car_make_model">Car Make & Model:</label>
            <select name="car_make_model" id="car_make_model" required>
	            <option value="">--- Choose a CAR MODEL ---</option>
	            <option value="Van">Van</option>
	            <option value="SUV">SUV</option>
	            <option value="Sport">Sport</option>
                <option value="Family">Family</option>
                <option value="Transport">Transport</option>
                <option value="Two wheeler">Two wheeler</option>
            </select>
            <label for="Vehical_Identification_Number">Vehical Identification Number(VIN):</label>
            <input type="number" id="Vehical_Identification_Number" name="Vehical_Identification_Number" min="1" required>
           
            <label for="car_year">Car Year:</label>
            <input type="number" id="car_year" name="car_year" min="1900" max="<?php echo date('Y'); ?>" required>
           
           
            <label for="car_value">Car Value:</label>
            <input type="number" id="car_value" name="car_value" min="0" required>

            <label for="policy_duration">Policy Duration (in years):</label>
            <input type="number" id="policy_duration" name="policy_duration" min="1" required>

            <label for="premium_amount">Premium Amount (per year):</label>
            <input type="number" id="premium_amount" name="premium_amount" min="0" step="0.01" required>
            <button onclick="window.location.href = 'home.php';">Buy Insurance</button>
           
        </form>
    </div>
</body>
</html>
