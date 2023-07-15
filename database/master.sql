-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2023 at 03:53 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master`
--

-- --------------------------------------------------------

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
(1, 'Tooba', 'toobaamjad098@gmail.com', 'tooba202121');

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
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`d_id`, `d_date`, `bld_quant`, `b_id`) VALUES
(42, '2023-06-06', 45, 61),
(42, '2023-06-06', 45, 60),
(42, '2023-06-06', 5, 59),
(42, '2023-06-06', 5, 58),
(42, '2023-06-06', 5, 57),
(50, '2023-06-29', 80, 62),
(48, '2023-06-19', 50, 54),
(47, '2023-06-14', 15, 53),
(45, '2023-06-14', 5, 51),
(42, '2023-06-06', 5, 50),
(44, '2023-06-20', 5, 49),
(43, '2023-06-20', 5, 48),
(42, '2023-07-04', 5, 47),
(42, '2023-06-06', 5, 56);

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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_fname`, `d_lnum`, `d_address`, `d_id`, `CNIC`, `d_num`, `bld_grp`) VALUES
('Tooba', 'Amjad', 'D block 78 Vehari', 50, '1234458', '03034583920', 'A-'),
('Mehreen ', 'Zahoor', 'D block 78 Vehari', 48, '36603458603279', '03359784445', 'O-'),
('Tooba', 'Amjad', 'D block 78 Vehari', 47, '35789451245', '0302457891', 'AB-'),
('Laiba', 'Asif', 'H block Vehari', 45, '3660345853014', '0335978497', 'A-'),
('Eshal ', 'Amjad', 'D block 78 Vehari', 44, '3660345850321', '0309784561', 'O+'),
('Saad', 'Amjad', 'D block 78 Vehari', 43, '366031975881', '03356750089', 'A-'),
('Tooba', 'Amjad', 'D block 78 Vehari', 42, '3660345853028', '03094583190', 'A+');

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`dn_id`, `d_id`, `donor_num`) VALUES
(35, 50, '7894512'),
(34, 49, ''),
(33, 48, ''),
(32, 47, '7489654'),
(31, 46, ''),
(30, 45, ''),
(29, 44, '0321478945');

-- --------------------------------------------------------

--
-- Table structure for table `msreplication_options`
--

DROP TABLE IF EXISTS `msreplication_options`;
CREATE TABLE IF NOT EXISTS `msreplication_options` (
  `optname` varchar(160) NOT NULL,
  `value` tinyint(1) NOT NULL,
  `major_version` int NOT NULL,
  `minor_version` int NOT NULL,
  `revision` int NOT NULL,
  `install_failures` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `msreplication_options`
--

INSERT INTO `msreplication_options` (`optname`, `value`, `major_version`, `minor_version`, `revision`, `install_failures`) VALUES
('transactional', 1, 90, 0, 0, 0),
('merge', 1, 90, 0, 0, 0),
('security_model', 1, 90, 0, 0, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_fname`, `p_lnum`, `p_address`, `p_bldgrp`, `p_Quantity`, `p_age`, `p_disease`, `a_id`, `patient_num`) VALUES
(11, 'She', 'Hulk', 'D block 78 Vehari', 'A-', 10, 15, 'hyt', 1, '03034583920'),
(9, 'Rimsha', 'Sharaft', 'V chowk Vehari', 'B-', 15, 5, 'NA', 1, '03034583920');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `r_id` int NOT NULL,
  `r_date` date DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`r_id`, `r_date`) VALUES
(1, '2023-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `spt_fallback_db`
--

DROP TABLE IF EXISTS `spt_fallback_db`;
CREATE TABLE IF NOT EXISTS `spt_fallback_db` (
  `xserver_name` varchar(30) NOT NULL,
  `xdttm_ins` datetime(6) NOT NULL,
  `xdttm_last_ins_upd` datetime(6) NOT NULL,
  `xfallback_dbid` smallint DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `dbid` smallint NOT NULL,
  `status` smallint NOT NULL,
  `version` smallint NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spt_fallback_dev`
--

DROP TABLE IF EXISTS `spt_fallback_dev`;
CREATE TABLE IF NOT EXISTS `spt_fallback_dev` (
  `xserver_name` varchar(30) NOT NULL,
  `xdttm_ins` datetime(6) NOT NULL,
  `xdttm_last_ins_upd` datetime(6) NOT NULL,
  `xfallback_low` int DEFAULT NULL,
  `xfallback_drive` char(2) DEFAULT NULL,
  `low` int NOT NULL,
  `high` int NOT NULL,
  `status` smallint NOT NULL,
  `name` varchar(30) NOT NULL,
  `phyname` varchar(127) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spt_fallback_usg`
--

DROP TABLE IF EXISTS `spt_fallback_usg`;
CREATE TABLE IF NOT EXISTS `spt_fallback_usg` (
  `xserver_name` varchar(30) NOT NULL,
  `xdttm_ins` datetime(6) NOT NULL,
  `xdttm_last_ins_upd` datetime(6) NOT NULL,
  `xfallback_vstart` int DEFAULT NULL,
  `dbid` smallint NOT NULL,
  `segmap` int NOT NULL,
  `lstart` int NOT NULL,
  `sizepg` int NOT NULL,
  `vstart` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spt_monitor`
--

DROP TABLE IF EXISTS `spt_monitor`;
CREATE TABLE IF NOT EXISTS `spt_monitor` (
  `lastrun` datetime(6) NOT NULL,
  `cpu_busy` int NOT NULL,
  `io_busy` int NOT NULL,
  `idle` int NOT NULL,
  `pack_received` int NOT NULL,
  `pack_sent` int NOT NULL,
  `connections` int NOT NULL,
  `pack_errors` int NOT NULL,
  `total_read` int NOT NULL,
  `total_write` int NOT NULL,
  `total_errors` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spt_monitor`
--

INSERT INTO `spt_monitor` (`lastrun`, `cpu_busy`, `io_busy`, `idle`, `pack_received`, `pack_sent`, `connections`, `pack_errors`, `total_read`, `total_write`, `total_errors`) VALUES
('2022-10-08 06:31:55.527000', 23, 141, 3892, 39, 39, 69, 0, 0, 0, 0);

-- --------------------------------------------------------

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
