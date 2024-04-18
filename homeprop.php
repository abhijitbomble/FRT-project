<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Insurance Policy Form</title>
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
        input[type="tel"],
        input[type="email"],
        input[type="number"],
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
        <h1>Property Insurance Policy Form</h1>
            <!-- Personal Information -->
            <label for="property_owner_full_name">Property Owner's Full Name:</label>
            <input type="text" id="property_owner_full_name" name="property_owner_full_name" required>
            <label for="contact_phone_number">Contact Phone Number:</label>
            <input type="tel" id="contact_phone_number" name="contact_phone_number" required>
            <label for="contact_email">Contact Email Address:</label>
            <input type="email" id="contact_email" name="contact_email" required>
            <label for="mailing_address">Mailing Address:</label>
            <textarea id="mailing_address" name="mailing_address" required></textarea>
            <!-- Property Information -->
            <label for="property_address">Property Address:</label>
            <textarea id="property_address" name="property_address" required></textarea>
            <label for="property_zip_code">ZIP or Postal Code:</label>
            <input type="text" id="property_zip_code" name="property_zip_code" required>
            <label for="property_type">Property Type:</label>
            <select id="property_type" name="property_type" required>
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
                <option value="rental">Rental Property</option>
            </select>
            <label for="property_usage">Property Usage:</label>
            <select id="property_usage" name="property_usage" required>
                <option value="primary_residence">Primary Residence</option>
                <option value="vacation_home">Vacation Home</option>
                <option value="rental_property">Rental Property</option>
            </select>
            <label for="property_year_built">Year Built:</label>
            <input type="number" id="property_year_built" name="property_year_built" min="1800" max="<?php echo date('Y'); ?>" required>
            <label for="property_square_footage">Square Footage:</label>
            <input type="number" id="property_square_footage" name="property_square_footage" required>
            <label for="property_floors">Number of Floors:</label>
            <input type="number" id="property_floors" name="property_floors" required>
            <label for="property_rooms">Number of Rooms:</label>
            <input type="number" id="property_rooms" name="property_rooms" required>
            <label for="construction_type">Construction Type:</label>
            <input type="text" id="construction_type" name="construction_type" required>
            <!-- Property Details -->
            <label for="property_features">Property Features:</label>
            <textarea id="property_features" name="property_features"></textarea>
            <label for="security_features">Security Features:</label>
            <textarea id="security_features" name="security_features"></textarea>
            <label for="

renovations_upgrades">Renovations or Upgrades:</label>
            <textarea id="renovations_upgrades" name="renovations_upgrades"></textarea>
            <label for="property_hazards">Hazards or Risks:</label>
            <textarea id="property_hazards" name="property_hazards" required></textarea>
            <!-- Coverage Preferences -->
            <label for="coverage_types">Desired Coverage Types:</label>
            <textarea id="coverage_types" name="coverage_types" required></textarea>
            <label for="coverage_limits">Coverage Limits:</label>
            <textarea id="coverage_limits" name="coverage_limits" required></textarea>
            <label for="deductible_amount">Deductible Amount:</label>
            <input type="number" id="deductible_amount" name="deductible_amount" required>
            <!-- Additional Coverage Options -->
            <label for="additional_options">Additional Coverage Options:</label>
            <textarea id="additional_options" name="additional_options"></textarea>
            <!-- Prior Insurance History -->
            <label for="prior_insurance_details">Prior Insurance Details:</label>
            <textarea id="prior_insurance_details" name="prior_insurance_details"></textarea>
            <label for="claims_history">Claims History:</label>
            <textarea id="claims_history" name="claims_history"></textarea>
            <!-- Occupancy Information -->
            <label for="occupancy_details">Occupancy Details:</label>
            <textarea id="occupancy_details" name="occupancy_details" required></textarea>
            <label for="rental_agreements">Rental Agreements or Leases:</label>
            <textarea id="rental_agreements" name="rental_agreements"></textarea>
            <!-- Payment Information -->
            <label for="payment_method">Preferred Payment Method:</label>
            <select id="payment_method" name="payment_method" required>
                <option value="credit_debit_card">Credit/Debit Card</option>
                <option value="bank_account">Bank Account</option>
            </select>
            <label for="billing_frequency">Billing Frequency:</label>
            <select id="billing_frequency" name="billing_frequency" required>
                <option value="monthly">Monthly</option>
                <option value="quarterly">Quarterly</option>
                <option value="annually">Annually</option>
            </select>
            <!-- Additional Documentation -->
            <label for="additional_documents">Additional Documentation:</label>
            <input type="file" id="additional_documents" name="additional_documents" accept="image/*,application/pdf" multiple required>
            <button onclick="window.location.href = 'home.php';">Buy Property Insurance</button>
        </form>
    </div>
</body>
</html>
