<?php 
header("Location: home.php");
include("config.php");
$propertyownerfullname = $_POST['property_owner_full_name'];
$contactphonenumber = $_POST['contact_phone_number'];
$contact_email = $_POST['contact_email'];
$mailing_address = $_POST['mailing_address'];
$property_address = $_POST['property_address'];
$property_zip_code = $_POST['property_zip_code'];
$property_type = $_POST['property_type'];
$property_usage = $_POST['property_usage'];
$property_year_built = $_POST['property_year_built'];
$property_square_footage = $_POST['property_square_footage'];
$property_floors = $_POST['property_floors'];
$property_rooms = $_POST['property_rooms'];
$construction_type = $_POST['construction_type'];
$property_features = $_POST['property_features'];
$security_features = $_POST['security_features'];
$renovations_upgrades = $_POST['renovations_upgrades'];
$property_hazards = $_POST['property_hazards'];
$coverage_types = $_POST['coverage_types'];
$coverage_limits = $_POST['coverage_limits'];
$deductible_amount = $_POST['deductible_amount'];
$additional_options = $_POST['additional_options'];
$prior_insurance_details = $_POST['prior_insurance_details'];
$claims_history = $_POST['claims_history'];
$occupancy_details = $_POST['occupancy_details'];
$rental_agreements = $_POST['rental_agreements'];
$payment_method= $_POST['payment_method'];
$billing_frequency = $_POST['billing_frequency'];
$additional_documents = $_POST['additional_documents'];

mysqli_query($con,"INSERT INTO prop(propertyownerfullname,contactphonenumber,contact_email,mailing_address,$property_address,property_zip_code,property_type,property_usage,$property_year_built,property_square_footage,property_floors,property_rooms,property_features,security_features,renovations_upgrades,property_hazards,coverage_types,coverage_limits,deductible_amount,additional_options,prior_insurance_details,claims_history,occupancy_details,rental_agreements,payment_method,billing_frequency,additional_documents) VALUES('$propertyownerfullname','$contactphonenumber','$contact_email','$mailing_address','$property_address','$property_zip_code','$property_type','$property_usage','$property_year_built','$property_square_footage','$property_floors','$property_rooms','$property_features','$security_features','$renovations_upgrades','$property_hazards','$coverage_types','$coverage_limits','$deductible_amount','$additional_options','$prior_insurance_details','$claims_history','$occupancy_details','$rental_agreements','$payment_method','$billing_frequency','$additional_documents')") or die("Erroe Occured");


?>