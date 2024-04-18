
<?php 
header("Location: home.php");
include("config.php");
$carmakemodel = $_POST['car_make_model'];
$VehicalIdentificationNumber = $_POST['Vehical_Identification_Number'];
$caryear = $_POST['car_year'];
$carvalue = $_POST['car_value'];
$policyduration = $_POST['policy_duration'];
$premiumamount = $_POST['premium_amount'];



mysqli_query($con,"INSERT INTO car(carmakemodel,VehicalIdentificationNumber,caryear,carvalue,policyduration,premiumamount) VALUES('$carmakemodel','$VehicalIdentificationNumber','$caryear','$carvalue','$policyduration','$premiumamount')") or die("Erroe Occured");


?>