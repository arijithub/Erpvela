-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 06:23 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brandtab`
--

CREATE TABLE `brandtab` (
  `bid` int(11) NOT NULL,
  `bname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brandtab`
--

INSERT INTO `brandtab` (`bid`, `bname`) VALUES
(1, 'Hikvision'),
(3, 'CP Plus');

-- --------------------------------------------------------

--
-- Table structure for table `custin`
--

CREATE TABLE `custin` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `cmob` varchar(255) DEFAULT NULL,
  `cmail` varchar(255) DEFAULT NULL,
  `qtype` varchar(255) DEFAULT NULL,
  `cgst` varchar(255) DEFAULT NULL,
  `cadd` text,
  `quot` varchar(255) DEFAULT NULL,
  `indt` varchar(255) DEFAULT NULL,
  `cord` varchar(255) DEFAULT NULL,
  `oord` varchar(255) DEFAULT NULL,
  `cterm` varchar(255) DEFAULT NULL,
  `note` text,
  `tc` decimal(10,2) DEFAULT NULL,
  `ta` decimal(10,2) DEFAULT NULL,
  `ac` decimal(10,2) DEFAULT NULL,
  `tsp` decimal(10,2) DEFAULT NULL,
  `tcp` decimal(10,2) NOT NULL DEFAULT '0.00',
  `adjust` decimal(10,2) DEFAULT NULL,
  `ads` varchar(255) DEFAULT NULL,
  `rpn` varchar(255) DEFAULT NULL,
  `hmg` varchar(255) DEFAULT NULL,
  `fmg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custin`
--

INSERT INTO `custin` (`cid`, `cname`, `cmob`, `cmail`, `qtype`, `cgst`, `cadd`, `quot`, `indt`, `cord`, `oord`, `cterm`, `note`, `tc`, `ta`, `ac`, `tsp`, `tcp`, `adjust`, `ads`, `rpn`, `hmg`, `fmg`) VALUES
(34, 'Atanu', '99999', NULL, 'tax invoice', NULL, NULL, 'VI-IN19221131351', '06/02/2019', NULL, NULL, '1', 'jdksjkd', '500.00', '100.00', '100.00', '27750.00', '0.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(38, 'Anant', '828282', NULL, 'quotation', NULL, NULL, 'VI-QU19221192026', '13/02/2019', NULL, NULL, '1', 'cxcxc', '500.00', '100.00', '100.00', '19259.00', '0.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(40, 'asitava dasgupta sen', '9831225', NULL, 'proforma invoice', NULL, NULL, 'VI-TM19224142736', '13/02/2019', NULL, NULL, 'arpan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '800.00', '770.00', '760.00', '42250.00', '343488.00', '2000.00', 'plus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(41, 'Arpan', '9831225779', 'aaa@gmail.com', 'tax invoice', NULL, NULL, 'VI-IN19221221435', '13/02/2019', '828282', NULL, '2', 'Hi', '500.00', '600.00', '100.00', '38500.00', '0.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(42, 'aniruddha', '848484', NULL, 'proforma invoice', NULL, NULL, 'VI-TM19221235756', '13/02/2019', NULL, NULL, 'arindam', 'Everyone', '500.00', '600.00', '100.00', '60500.00', '0.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(43, 'JOhn Doe', '9876543210 | 8974561230 | 7894561230', 'sample@example.com', 'tax invoice', 'LKFFIIAMM', '1640 ashirbad apartment, Nayabad main road, mukundapur, kolkata - 700094.', 'VI-IN1922210732', '22/02/2019', 'TGD34964', 'PFKLLT300', 'arijit', 'Hello', '400.00', '600.00', '100.00', '60500.98', '3500.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(55, 'Harmeet', '9298282', NULL, 'tax invoice', 'fdf5545454', NULL, 'VI-IN1922312020', '19/02/2019', NULL, NULL, 'arijit', NULL, '500.00', '600.00', '800.00', '35782.00', '11004.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(56, 'anket', '4848', NULL, 'tax invoice', '544456664', NULL, 'VI-IN19223122154', '19/02/2019', NULL, NULL, 'arijit', NULL, '500.00', '600.00', '800.00', '30250.00', '11000.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(57, 'Mukesh', '9595', NULL, 'tax invoice', 'rre5454tdf', NULL, 'VI-IN19223123719', '19/02/2019', NULL, NULL, 'arpan', NULL, '760.00', '750.00', '800.00', '20750.00', '15500.00', NULL, 'plus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(58, 'Kapil', '9574553', NULL, 'tax invoice', 'eyyeye', NULL, 'VI-IN19223211723', '19/02/2019', NULL, NULL, 'arijit', 'This is another invoice.', '500.00', '600.00', '500.00', '37250.00', '13000.00', NULL, 'plus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(59, 'Abhik', '5454', NULL, 'tax invoice', 'fdfdfd', NULL, 'VI-IN1922412338', NULL, NULL, NULL, 'arijit', NULL, '500.00', '600.00', '800.00', '35750.00', '20000.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(60, 'abinash', '373737', NULL, 'tax invoice', '373737', NULL, 'VI-IN19224154516', '13/02/2019', NULL, NULL, 'arijit', NULL, '500.00', '600.00', '800.00', '12250.00', '17000.00', NULL, 'plus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(61, 'arghya', '983737', NULL, 'proforma invoice', '74747477495j5', NULL, 'VI-TM19224161647', '13/02/2019', NULL, NULL, 'arijit', NULL, '500.00', '600.00', '800.00', '2750.00', '11000.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(62, 'Gaurav', '784783', 'att2@gmail.com', 'tax invoice', 'jjs77777', '16 akjsk ajshjahsjh', 'VI-IN192271901', '12/02/2019', 'hh6652424', 'kkkks77772', 'arijit', 'Hello', '500.00', '600.00', '800.00', '16500.00', '11000.00', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(63, 'Gora', '283782', 'att2@gmail.com', 'tax invoice', 'sds5656576744323', NULL, 'VI-IN19228115947', '12/02/2019', NULL, NULL, 'arijit', NULL, '500.00', '600.00', '800.00', '17758.00', '17504.00', '1000.00', 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(66, 'Bobby', '5456565', 'att2@gmail.com', 'tax invoice', 'rtrtr45ere', NULL, 'VI-IN1922817379', '04/02/2019', NULL, NULL, 'arijit', NULL, '880.00', '790.00', '300.00', '69750.00', '12500.00', NULL, 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(67, 'bvbvb', '5665', NULL, 'tax invoice', 'cvcvc76767', NULL, 'VI-IN1922818580', '04/02/2019', NULL, NULL, 'arijit', NULL, '880.00', '790.00', '300.00', '51000.00', '13000.00', NULL, 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(68, 'abir', '4656663511', 'att2@gmail.com', 'proforma invoice', 'sddsds43d', NULL, 'VI-TM193195836', '20/03/2019', NULL, NULL, 'arijit', NULL, '880.00', '790.00', '300.00', '74500.00', '16000.00', '1000.00', 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(69, 'Hrithik', '6363778484', 'att2@gmail.com', 'quotation', 'cvcvc76767', 'jjhkjhkjkjgjgkjgkj hjggggyttgkg ggg;k\'', 'VI-QU1932115644', '05/03/2019', '456789123', NULL, 'arindam', 'Hello I am studying now.', NULL, NULL, NULL, '15000.00', '5000.00', '1500.00', 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(88, 'Hrithik sen', '6363778484', 'att2@gmail.com', 'tax invoice', 'cvcvc76767', 'jjhkjhkjkjgjgkjgkj hjggggyttgkg ggg;k\'', 'VI-IN193519036', '05/03/2019', '456789123', NULL, 'arindam', 'Hello I am studying now.', '500.00', '600.00', '800.00', '18000.00', '2000.00', '1500.00', 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(245, 'Gora', '283782', 'att2@gmail.com', 'tax invoice', 'sds5656576744323', NULL, 'VI-IN19319163436', '12/02/2019', NULL, NULL, 'arijit', NULL, '500.00', '600.00', '800.00', '19258.00', '9504.00', '1000.00', 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(260, 'Samiran', '822993783', NULL, 'tax invoice', 'dfdf3234345', NULL, 'VI-IN19320144853', '29/03/2019', NULL, NULL, 'Omni T&C*', NULL, '700.00', '600.00', '1000.00', '28250.00', '12000.00', NULL, 'minus', NULL, 'https://lh3.googleusercontent.com/-MnL0SNtqaMA/XG_kdmUpPsI/AAAAAAAACPs/fcEiOZKX7aw3Tf_GqzwuqT4Mlu_-W4fcACL0BGAYYCw/h182/Quotation-Header.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(261, 'Pamela', '4546657', NULL, 'tax invoice', 'dsd545tgf', NULL, 'VI-IN1932015051', '29/03/2019', NULL, NULL, 'Omni T&C*', NULL, '800.00', '600.00', '1000.00', '13750.00', '5500.00', NULL, 'minus', NULL, 'https://www.velacctv.com/slider_image/slider2.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg'),
(263, 'Pamela Roy', '4546657', NULL, 'proforma invoice', 'dsd545tgf', NULL, 'VI-TM1932015851', '29/03/2019', NULL, NULL, 'Omni T&C*', NULL, '900.00', '600.00', '1000.00', '13750.00', '5500.00', NULL, 'minus', 'VI-IN1932015842', 'https://www.velacctv.com/slider_image/slider3.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `deftab`
--

CREATE TABLE `deftab` (
  `did` int(11) NOT NULL,
  `tc` decimal(10,2) DEFAULT NULL,
  `ta` decimal(10,2) DEFAULT NULL,
  `ac` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deftab`
--

INSERT INTO `deftab` (`did`, `tc`, `ta`, `ac`) VALUES
(1, '800.00', '600.00', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `delpid`
--

CREATE TABLE `delpid` (
  `ddid` int(11) NOT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `dpid` varchar(10) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `cp` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delpid`
--

INSERT INTO `delpid` (`ddid`, `prod_name`, `dpid`, `warranty`, `unit`, `model`, `cp`) VALUES
(1, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', '14', '2 year', 'pcs', 'uuyyt2445', '3000.00'),
(2, 'xcx_vcv_xcx_abcd_cvc_xcxcx', '7', '2 year', 'pcs', 'cvc', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `imgid` int(11) NOT NULL,
  `hmg` varchar(255) DEFAULT NULL,
  `fmg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`imgid`, `hmg`, `fmg`) VALUES
(1, 'https://www.velacctv.com/slider_image/slider3.jpg', 'https://lh3.googleusercontent.com/-g1NVnvdTNI4/XG_kg7w3qOI/AAAAAAAACPs/21wLt3icxHcXI7YSP3xGyGI_JsrrWQ9tQCL0BGAYYCw/h536/Quotation-Footer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`) VALUES
(1, 'adminvela', '123####****');

-- --------------------------------------------------------

--
-- Table structure for table `prodin`
--

CREATE TABLE `prodin` (
  `prid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sp` decimal(10,2) DEFAULT NULL,
  `totpro` decimal(10,2) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodin`
--

INSERT INTO `prodin` (`prid`, `pid`, `prod_name`, `qty`, `sp`, `totpro`, `cid`) VALUES
(68, 12, 'Hikvision_720p_IR_Dome_Camera', 7, '2750.00', '19250.00', 34),
(69, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 1, '3000.00', '3000.00', 34),
(74, 12, 'Hikvision_720p_IR_Dome_Camera', 7, '2750.00', '19250.00', 38),
(75, 11, 'qqqq', 1, '9.00', '9.00', 38),
(77, 12, 'Hikvision_720p_IR_Dome_Camera', 11, '2750.00', '30250.00', 40),
(79, 12, 'Hikvision_720p_IR_Dome_Camera', 14, '2750.00', '38500.00', 41),
(80, 12, 'Hikvision_720p_IR_Dome_Camera', 22, '2750.00', '60500.00', 42),
(81, 12, 'Hikvision_720p_IR_Dome_Camera', 22, '2750.00', '60500.00', 43),
(128, 12, 'Hikvision_720p_IR_Dome_Camera', 13, '2750.00', '35750.00', 55),
(130, 7, 'xcx_vcv_xcx_cvc_xcxcx', 4, '8.00', '32.00', 55),
(132, 12, 'Hikvision_720p_IR_Dome_Camera', 11, '2750.00', '30250.00', 56),
(135, 12, 'Hikvision_720p_IR_Dome_Camera', 7, '2750.00', '19250.00', 58),
(136, 12, 'Hikvision_720p_IR_Dome_Camera', 13, '2750.00', '35750.00', 59),
(150, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 4, '3000.00', '12000.00', 40),
(161, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 57),
(162, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 61),
(163, 12, 'Hikvision_720p_IR_Dome_Camera', 6, '2750.00', '16500.00', 62),
(164, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 3, '5000.00', '15000.00', 63),
(175, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 63),
(181, 7, 'xcx_vcv_xcx_abcd_cvc_xcxcx', 1, '8.00', '8.00', 63),
(186, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 57),
(190, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 66),
(192, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 58),
(193, 12, 'Hikvision_720p_IR_Dome_Camera', 12, '2750.00', '33000.00', 67),
(194, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 67),
(195, 12, 'Hikvision_720p_IR_Dome_Camera', 6, '2750.00', '16500.00', 68),
(196, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 11, '3000.00', '33000.00', 68),
(197, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 5, '5000.00', '25000.00', 68),
(200, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 1, '3000.00', '3000.00', 60),
(201, 15, 'Hikvision_1080p_IR_HD_Dome_Cameras', 1, '1500.00', '1500.00', 60),
(202, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt\r\n', 1, '2750.00', '2750.00', 60),
(204, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 3, '3000.00', '9000.00', 69),
(205, 15, 'Hikvision_1080p_IR_HD_Dome_Cameras', 4, '1500.00', '6000.00', 69),
(255, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 88),
(754, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 3, '5000.00', '15000.00', 245),
(755, 7, 'xcx_vcv_xcx_abcd_cvc_xcxcx', 1, '8.00', '8.00', 245),
(756, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 245),
(757, 15, 'Hikvision_1080p_IR_HD_Dome_Cameras', 1, '1500.00', '1500.00', 245),
(806, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 260),
(807, 15, 'Hikvision_1080p_IR_HD_Dome_Cameras', 17, '1500.00', '25500.00', 260),
(808, 12, 'Hikvision_720p_IR_Dome_Camera', 5, '2750.00', '13750.00', 261),
(810, 12, 'Hikvision_720p_IR_Dome_Camera', 5, '2750.00', '13750.00', 263);

-- --------------------------------------------------------

--
-- Table structure for table `prodin1`
--

CREATE TABLE `prodin1` (
  `prid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sp` decimal(10,2) DEFAULT NULL,
  `totpro` decimal(10,2) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodin1`
--

INSERT INTO `prodin1` (`prid`, `pid`, `prod_name`, `qty`, `sp`, `totpro`, `cid`) VALUES
(68, 12, 'Hikvision_720p_IR_Dome_Camera', 7, '2750.00', '19250.00', 34),
(69, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 1, '3000.00', '3000.00', 34),
(74, 12, 'Hikvision_720p_IR_Dome_Camera', 7, '2750.00', '19250.00', 38),
(75, 11, 'qqqq', 1, '9.00', '9.00', 38),
(76, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 39),
(77, 12, 'Hikvision_720p_IR_Dome_Camera', 11, '2750.00', '30250.00', 40),
(79, 12, 'Hikvision_720p_IR_Dome_Camera', 14, '2750.00', '38500.00', 41),
(80, 12, 'Hikvision_720p_IR_Dome_Camera', 22, '2750.00', '60500.00', 42),
(81, 12, 'Hikvision_720p_IR_Dome_Camera', 22, '2750.00', '60500.00', 43),
(128, 12, 'Hikvision_720p_IR_Dome_Camera', 13, '2750.00', '35750.00', 55),
(130, 7, 'xcx_vcv_xcx_cvc_xcxcx', 4, '8.00', '32.00', 55),
(132, 12, 'Hikvision_720p_IR_Dome_Camera', 11, '2750.00', '30250.00', 56),
(135, 12, 'Hikvision_720p_IR_Dome_Camera', 7, '2750.00', '19250.00', 58),
(136, 12, 'Hikvision_720p_IR_Dome_Camera', 13, '2750.00', '35750.00', 59),
(150, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 4, '3000.00', '12000.00', 40),
(161, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 57),
(162, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 61),
(163, 12, 'Hikvision_720p_IR_Dome_Camera', 6, '2750.00', '16500.00', 62),
(164, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 3, '5000.00', '15000.00', 63),
(175, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 63),
(181, 7, 'xcx_vcv_xcx_abcd_cvc_xcxcx', 1, '8.00', '8.00', 63),
(184, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 4, '3000.00', '12000.00', 66),
(186, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 57),
(190, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 66),
(191, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 11, '5000.00', '55000.00', 66),
(192, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 58),
(193, 12, 'Hikvision_720p_IR_Dome_Camera', 12, '2750.00', '33000.00', 67),
(194, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 67),
(195, 12, 'Hikvision_720p_IR_Dome_Camera', 6, '2750.00', '16500.00', 68),
(196, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 11, '3000.00', '33000.00', 68),
(197, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 5, '5000.00', '25000.00', 68),
(200, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 1, '3000.00', '3000.00', 60),
(201, 15, 'Hikvision_1080p_IR_HD_Dome_Cameras', 1, '1500.00', '1500.00', 60),
(202, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 60),
(203, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 1, '5000.00', '5000.00', 60),
(204, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 3, '3000.00', '9000.00', 69),
(205, 15, 'Hikvision_1080p_IR_HD_Dome_Cameras', 4, '1500.00', '6000.00', 69),
(206, 12, 'Hikvision_720p_IR_Dome_Camera', 1, '2750.00', '2750.00', 69),
(210, 13, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 6, '3000.00', '18000.00', 73),
(211, 14, 'Hikvision_hhsh34_hhsh66_sds232_ddee_yytt', 3, '5000.00', '15000.00', 73);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `spec1` varchar(255) DEFAULT NULL,
  `spec2` varchar(255) DEFAULT NULL,
  `spec3` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `hsn` varchar(255) DEFAULT NULL,
  `product_full_name` varchar(255) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `purchase_price` decimal(11,2) DEFAULT NULL,
  `selling_price` decimal(11,2) DEFAULT NULL,
  `gst` int(20) DEFAULT NULL,
  `totprice` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `brand`, `spec1`, `spec2`, `spec3`, `type`, `product`, `hsn`, `product_full_name`, `model`, `unit`, `warranty`, `purchase_price`, `selling_price`, `gst`, `totprice`) VALUES
(12, 'Hikvision', '720p', 'IR', NULL, 'Dome', 'Camera', '33333', 'Hikvision_720p_IR_Dome_Camera', 'DS-2CD2120F-I', 'pcs', '4 months', '5500.00', '2750.00', 15, '3162.50'),
(13, 'CP Plus', '2 MP', 'IR', 'IP', 'Bullet', 'Camera', NULL, 'CP Plus_2 MP_IR_IP_Bullet_Camera', 'CMP-I5529-(IW)', 'box', '2 months', '2000.00', '3000.00', 100, '6000.00'),
(15, 'Hikvision', '1080p', 'IR', 'HD', 'Dome', 'Cameras', '123456789', 'Hikvision_1080p_IR_HD_Dome_Cameras', 'LKFFIIAMM-(W)', 'pcs', '2 year', '1000.00', '1500.00', 18, '1770.00'),
(16, 'CP Plus', 'ewew', 'ere', 'rtr', 'rere', 'rtrt', 'erere', 'CP Plus_ewew_ere_rtr_rere_rtrt', 'sdsd', 'pcs', '2 year', '233.00', '222.00', 12, '248.64');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `tid` int(11) NOT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `tmd` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`tid`, `tmt`, `tmd`) VALUES
(2, 'arindam', 'ghosh'),
(3, 'arpan', '<p><b>Hello</b> <span style=\"background-color: rgb(255, 255, 0);\">World</span></p><ul><li><span style=\"background-color: rgb(255, 255, 0);\">ghhghg</span></li><li><span style=\"background-color: rgb(255, 255, 0);\">jhjhjhj</span></li></ul>'),
(4, 'Omni T&C*', '<ul><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><b>Lorem ipsum</b> dolor sit amet, <u>consectetur adipiscing</u> elit, sed <i>do eiusmod</i> <span style=\"color: rgb(255, 0, 0);\">tempor</span> incididunt ut <span style=\"background-color: rgb(255, 255, 0);\">labore</span> et </span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>          </li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `unitab`
--

CREATE TABLE `unitab` (
  `uid` int(11) NOT NULL,
  `unitname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitab`
--

INSERT INTO `unitab` (`uid`, `unitname`) VALUES
(1, 'pcs'),
(2, 'dozen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brandtab`
--
ALTER TABLE `brandtab`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `custin`
--
ALTER TABLE `custin`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `deftab`
--
ALTER TABLE `deftab`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `delpid`
--
ALTER TABLE `delpid`
  ADD PRIMARY KEY (`ddid`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `prodin`
--
ALTER TABLE `prodin`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `prodin1`
--
ALTER TABLE `prodin1`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `unitab`
--
ALTER TABLE `unitab`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brandtab`
--
ALTER TABLE `brandtab`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custin`
--
ALTER TABLE `custin`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `deftab`
--
ALTER TABLE `deftab`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delpid`
--
ALTER TABLE `delpid`
  MODIFY `ddid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prodin`
--
ALTER TABLE `prodin`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=811;

--
-- AUTO_INCREMENT for table `prodin1`
--
ALTER TABLE `prodin1`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unitab`
--
ALTER TABLE `unitab`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
