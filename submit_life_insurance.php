<?php 
header("Location: home.php");
include("config.php");
$fullname = $_POST['full_name'];
$dateofbirth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$maritalstatus = $_POST['marital_status'];
$occupation = $_POST['occupation'];
$address = $_POST['address'];
$phonenumber = $_POST['phone_number'];
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$medicalhistory = $_POST['medical_history'];
$currentmedications = $_POST['current_medications'];
$lifestylehabits = $_POST['lifestyle_habits'];
$familymedicalhistory = $_POST['family_medical_history'];
$annualincome = $_POST['annual_income'];
$networth = $_POST['net_worth'];
$debtsliabilities = $_POST['debts_liabilities'];
$financialdependents = $_POST['financial_dependents'];
$desiredcoverageamount = $_POST['desired_coverage_amount'];
$lifeinsurancetype = $_POST['life_insurance_type'];
$coverageterm = $_POST['coverage_term'];
$coverageamount = $_POST['coverage_amount'];
$beneficiaryinformation = $_POST['beneficiary_information'];
$ridersoptions = $_POST['riders_options'];
$medicalrecordsauthorization = $_POST['medical_records_authorization'];
$medicalexamauthorization = $_POST['medical_exam_authorization'];
$identificationdocuments = $_POST['identification_documents'];
$proofofinsurability = $_POST['proof_of_insurability'];

 
mysqli_query($con,"INSERT INTO life(fullname,dateofbirth,gender,maritalstatus,occupation,address,phonenumber,email,height,weight,medicalhistory,currentmedications,lifestylehabits,familymedicalhistory,annualincome,networth,debtsliabilities,financialdependents,desiredcoverageamount,lifeinsurancetype,coverageterm,coverageamount,beneficiaryinformation,ridersoptions,medicalrecordsauthorization,medicalexamauthorization,identificationdocuments,proofofinsurability) VALUES('$fullname','$dateofbirth','$gender','$maritalstatus','$occupation','$address','$phonenumber','$email','$height','$weight','$medicalhistory','$currentmedications','$lifestylehabits','$familymedicalhistory','$annualincome','$networth','$debtsliabilities','$financialdependents','$desiredcoverageamount','$lifeinsurancetype','$coverageterm','$coverageamount','$beneficiaryinformation','$ridersoptions','$medicalrecordsauthorization','$medicalexamauthorization','$identificationdocuments','$proofofinsurability')") or die("Erroe Occured");


?>