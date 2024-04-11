create database newproject;
use newproject;




CREATE TABLE `car` (
  `carmakemodel` text NOT NULL,
  `VehicalIdentificationNumber` text NOT NULL,
  `caryear` int(11) NOT NULL,
  `carvalue` int(11) NOT NULL,
  `policyduration` int(11) NOT NULL,
  `premiumamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carmakemodel`, `VehicalIdentificationNumber`, `caryear`, `carvalue`, `policyduration`, `premiumamount`) VALUES
('Sport', '8236546', 2002, 1250000, 5, 2000),
('Sport', '8236546', 2002, 1250000, 5, 2000),
('Sport', '8236546', 2002, 1250000, 5, 2000),
('Sport', '8236546', 2002, 1250000, 5, 2000),
('Sport', '8236546', 2002, 1250000, 5, 2000),
('Sport', '8236546', 2002, 1250000, 5, 2000),
('Sport', '8236546', 2002, 1250000, 5, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `life`
--

CREATE TABLE `life` (
  `fullname` text NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `email` text NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `medicalhistory` text NOT NULL,
  `currentmedications` text NOT NULL,
  `lifestylehabits` text NOT NULL,
  `familymedicalhistory` text NOT NULL,
  `annualincome` int(11) NOT NULL,
  `networth` int(11) NOT NULL,
  `debtsliabilities` int(11) NOT NULL,
  `financialdependents` int(11) NOT NULL,
  `desiredcoverageamount` int(11) NOT NULL,
  `lifeinsurancetype` varchar(100) NOT NULL,
  `coverageterm` varchar(1000) NOT NULL,
  `coverageamount` int(11) NOT NULL,
  `beneficiaryinformation` varchar(100) NOT NULL,
  `ridersoptions` text NOT NULL,
  `medicalrecordsauthorization` text NOT NULL,
  `medicalexamauthorization` text NOT NULL,
  `identificationdocuments` blob NOT NULL,
  `proofofinsurability` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `life`
--

INSERT INTO `life` (`fullname`, `dateofbirth`, `gender`, `maritalstatus`, `occupation`, `address`, `phonenumber`, `email`, `height`, `weight`, `medicalhistory`, `currentmedications`, `lifestylehabits`, `familymedicalhistory`, `annualincome`, `networth`, `debtsliabilities`, `financialdependents`, `desiredcoverageamount`, `lifeinsurancetype`, `coverageterm`, `coverageamount`, `beneficiaryinformation`, `ridersoptions`, `medicalrecordsauthorization`, `medicalexamauthorization`, `identificationdocuments`, `proofofinsurability`) VALUES
('abbavhb', '2024-04-06', 'male', 'married', 'adcjdbavkvndj', 'advknabujvbjbajbj', 2147483647, 'abhijitbomble2@gmail.com', 2151, 2626, 'najbvdhabjnc', 'adjcbjbadbc', 'adknjdbacbv', 'mjadbdvhb', 2151, 515151, 0, 4, 2562153, 'whole_life', '25151503', 32615151, 'adbchvabudbcyvda', 'abduchavyhcvd', 'anujdvcyahc', 'amdsbvcbujbas', 0x696d616765732e706e67, 0x706e67747265652d7363726f6c6c2d70617065722d726962626f6e2d62616e6e65722d766563746f722d64657369676e2d6368696e6573652d7374796c2d706e672d696d6167655f333239343830322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `prop`
--

CREATE TABLE `prop` (
  `propertyownerfullname` varchar(50) NOT NULL,
  `contactphonenumbe` int(11) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `mailing_address` varchar(50) NOT NULL,
  `property_address` varchar(100) NOT NULL,
  `property_zip_code` varchar(10) NOT NULL,
  `property_type` varchar(20) NOT NULL,
  `property_usage` varchar(20) NOT NULL,
  `property_year_built` int(11) NOT NULL,
  `property_square_footage` int(11) NOT NULL,
  `property_floors` int(11) NOT NULL,
  `property_rooms` int(11) NOT NULL,
  `construction_type` varchar(50) NOT NULL,
  `property_features` text NOT NULL,
  `security_features` text NOT NULL,
  `renovations_upgrades` text NOT NULL,
  `property_hazards` text NOT NULL,
  `coverage_types` text NOT NULL,
  `coverage_limits` text NOT NULL,
  `deductible_amount` int(11) NOT NULL,
  `additional_options` text NOT NULL,
  `prior_insurance_details` text NOT NULL,
  `claims_history` text NOT NULL,
  `occupancy_details` text NOT NULL,
  `rental_agreements` text NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `billing_frequency` varchar(20) NOT NULL,
  `additional_documents` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(1, 'abhijit bomble', 'abhijitbomble@gmail.com', 24, 'Abhijit@123'),
(2, 'abhijiit', 'abhijitbomble2@gmail.com', 24, 'Abhijit@123');

