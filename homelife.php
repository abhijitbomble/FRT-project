<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Insurance Policy Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
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
        input[type="email"],
        select,
        textarea {
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
        <h1>Life Insurance Policy Form</h1>
        <form action="submit_life_insurance.php" method="post">
            <!-- Personal Information -->
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <label for="marital_status">Marital Status:</label>
            <select id="marital_status" name="marital_status" required>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
            </select>
            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" required>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
            <!-- Contact Information -->
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" required>
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            <!-- Health Information -->
            <label for="height">Height (in cm):</label>
            <input type="number" id="height" name="height" required>
            <label for="weight">Weight (in kg):</label>
            <input type="number" id="weight" name="weight" required>
            <label for="medical_history">Medical History:</label>
            <textarea id="medical_history" name="medical_history" required></textarea>
            <label for="current_medications">Current Medications:</label>
            <textarea id="current_medications" name="current_medications" required></textarea>
            <label for="lifestyle_habits">Lifestyle Habits:</label>
            <textarea id="lifestyle_habits" name="lifestyle_habits" required></textarea>
            <label for="family_medical_history">Family Medical History:</label>
            <textarea id="family_medical_history" name="family_medical_history"></textarea>
            <!-- Financial Information -->
            <label for="annual_income">Annual Income:</label>
            <input type="number" id="annual_income" name="annual_income" required>
            <label for="net_worth">Net Worth:</label>
            <input type="number" id="net_worth" name="net_worth" required>
            <label for="debts_liabilities">Debts and Liabilities:</label>
            <textarea id="debts_liabilities" name="debts_liabilities" required></textarea>
            <label for="financial_dependents">Financial Dependents:</label>
            <textarea id="financial_dependents" name="financial_dependents" required></textarea>
            <label for="desired_coverage_amount">Desired Coverage Amount:</label>
            <input type="number" id="desired_coverage_amount" name="desired_coverage_amount" required>
            <!-- Policy Details -->
            <label for="life_insurance_type">Type of Life Insurance:</label>
            <select id="life_insurance_type" name="life_insurance_type" required>
                <option value="term_life">Term Life Insurance</option>
                <option value="whole_life">Whole Life Insurance</option>
                <option value="universal_life">Universal Life Insurance</option>
            </select>
            <label for="coverage_term">Coverage Term (for Term Life Insurance):</label>
            <input type="number" id="coverage_term" name="coverage_term" min="1">
            <label for="coverage_amount">Coverage Amount (Death Benefit):</label>
            <input type="number" id="coverage_amount" name="coverage_amount" required>
            <label for="beneficiary_information">Beneficiary Information:</label>
            <textarea id="beneficiary_information" name="beneficiary_information" required></textarea>
            <label for="riders_options">Riders or Additional Coverage Options:</label>
            <textarea id="riders_options" name="riders_options"></textarea>
            
            <!-- Underwriting Information -->
            <label for="medical_records_authorization">Authorization for Medical Records:</label>
            <textarea id="medical_records_authorization" name="medical_records_authorization" required></textarea>
            <label for="medical_exam_authorization">Authorization for Medical Exam:</label>
            <textarea id="medical_exam_authorization" name="medical_exam_authorization" required></textarea>
            <!-- Other Documents -->
            <label for="identification_documents">Identification Documents:</label>
            <input type="file" id="identification_documents" name="identification_documents" accept="image/*,application/pdf" multiple required>
            <label for="proof_of_insurability">Proof of Insurability:</label>
            <input type="file" id="proof_of_insurability" name="proof_of_insurability" accept="image/*,application/pdf" required>
            <button type="submit">Buy Life Insurance</button>
        </form>
    </div>
</body>
</html>
