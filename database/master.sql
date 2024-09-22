



--
-- Table structure for table `admin1`
--

DROP TABLE IF EXISTS `admin1`;
CREATE TABLE IF NOT EXISTS `admin1` (
  `a_id` int NOT NULL,
  `a_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `a_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`a_id`, `a_name`, `email`, `a_pass`) VALUES
(1, 'xyz', 'xyz@gmail.com', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

DROP TABLE IF EXISTS `blood`;
CREATE TABLE IF NOT EXISTS `blood` (
  `d_id` int DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `bld_quant` int DEFAULT NULL,
  `b_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`b_id`),
  KEY `fk_donor1` (`d_id`)
) 
--
-- Dumping data for table `blood`
--



-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `d_fname` varchar(50) DEFAULT NULL,
  `d_lnum` varchar(50) DEFAULT NULL,
  `d_address` varchar(50) DEFAULT NULL,
  `d_id` int NOT NULL AUTO_INCREMENT,
  `CNIC` varchar(50) NOT NULL,
  `d_num` varchar(50) DEFAULT NULL,
  `bld_grp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`d_id`,`CNIC`)
) 

--
-- Dumping data for table `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

DROP TABLE IF EXISTS `donor_info`;
CREATE TABLE IF NOT EXISTS `donor_info` (
  `dn_id` int NOT NULL AUTO_INCREMENT,
  `d_id` int NOT NULL,
  `donor_num` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dn_id`)
) 

--
-- Dumping data for table `donor_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `msreplication_options`
--


--
-- Dumping data for table `msreplication_options`
--


-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `p_fname` varchar(50) DEFAULT NULL,
  `p_lnum` varchar(50) DEFAULT NULL,
  `p_address` varchar(50) DEFAULT NULL,
  `p_bldgrp` varchar(5) DEFAULT NULL,
  `p_Quantity` int DEFAULT NULL,
  `p_age` int DEFAULT NULL,
  `p_disease` varchar(50) DEFAULT NULL,
  `a_id` int DEFAULT NULL,
  `patient_num` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `fk_admin1` (`a_id`)
) 

--
-- Dumping data for table `patient`
--
-- --------------------------------------------------------

--
-- Table structure for table `report`
--




--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `s_bloodgrp` varchar(50) NOT NULL,
  `s_availabe` int DEFAULT NULL,
  `s_id` int NOT NULL,
  PRIMARY KEY (`s_bloodgrp`,`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`s_bloodgrp`, `s_availabe`, `s_id`) VALUES
('A+', 60, 1),
('A-', 80, 2),
('B+', 0, 3),
('B-', 72, 4),
('AB+', 5, 5),
('AB-', 10, 6),
('O+', 5, 7),
('O-', 50, 0),
('O-', 50, 8);

