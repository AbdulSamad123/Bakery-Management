-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 07:39 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_configuration`
--

CREATE TABLE `accounts_configuration` (
  `acid` int(11) NOT NULL,
  `actitle` varchar(200) NOT NULL,
  `accode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts_configuration`
--

INSERT INTO `accounts_configuration` (`acid`, `actitle`, `accode`) VALUES
(1, 'Cash In Hand', '1-002-002-001'),
(2, 'Cheques In Hand', '1-002-002-002'),
(3, 'Accounts Recievable', '1-002-001'),
(4, 'Suppliers Payable', '3-001-001'),
(5, 'Bank Balances', '1-002-002-003'),
(6, 'Purchase', '6-001'),
(7, 'Cost of Goods Sold', '6'),
(8, 'Expenses', '5-001'),
(9, 'Sales Revenue', '4-001'),
(10, 'Salary Expense', '5-001'),
(11, 'Purchase Return ', '6-002'),
(12, 'Sales Return ', '4-003'),
(13, 'Services Revenue', '4-002'),
(14, 'General Loan', '1-002-004-002'),
(15, 'Cheques Clearing', '1-002-002-004'),
(16, 'POST DATED CHEQUES', '1-002-005'),
(17, 'PARTNERS', '1-002-011'),
(18, 'BROKERS', '1-002-012'),
(19, 'PROJECTS', '1-002-013'),
(20, 'Employee Loan', '1-002-004-001'),
(21, 'Broker Expense', '5-001'),
(22, 'Container', '5001'),
(23, 'Petty Cash', '1-002-002-005'),
(24, 'Advance Salary', '1-002-006'),
(25, 'Discount Expense', '5-005'),
(26, 'FIXED ASSET ACCOUNT', '1-001-001'),
(27, 'FIXED ASSET DEPR ACCOUNT', '1-001-002'),
(28, 'Fixed Asset Expense', '5-002'),
(29, 'Vendor Expenses', '5-003'),
(30, 'Fixed Asset Payable', '3-001-002'),
(31, 'Vendor Payable', '3-001-003'),
(32, 'Sales Tax Paid', '1-002-006-001'),
(33, 'Withholding Tax Paid', '1-002-006-002'),
(34, 'Sales Tax Received', '3-003-001'),
(35, 'Withholding Tax Received', '3-003-002'),
(36, 'Wastage Recycling', '6-003'),
(37, 'AGENTS', '3-001-004'),
(39, 'Commission Expense', '5-003-001'),
(40, 'Other Income', '4-006'),
(41, 'Accounts Multi Recievable', '1-002-007'),
(42, 'Buyer', '1-002-008');

-- --------------------------------------------------------

--
-- Table structure for table `accounts_ledger`
--

CREATE TABLE `accounts_ledger` (
  `alid` int(11) NOT NULL,
  `accode` varchar(20) DEFAULT NULL,
  `edate` date NOT NULL,
  `damount` decimal(18,2) NOT NULL,
  `camount` decimal(18,2) NOT NULL,
  `tid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `encryptedpassword` varchar(100) NOT NULL,
  `decryptedpassword` varchar(100) DEFAULT NULL,
  `imagename` text DEFAULT NULL,
  `imageguid` text DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `cnic` varchar(13) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `editdate` datetime DEFAULT NULL,
  `logindate` datetime DEFAULT NULL,
  `logoutdate` datetime DEFAULT NULL,
  `createby` varchar(20) DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `emailverificationcode` varchar(6) DEFAULT NULL,
  `mobilerverificationcode` varchar(6) DEFAULT NULL,
  `forgetpassword` varchar(6) DEFAULT NULL,
  `ipaddress` varchar(20) DEFAULT NULL,
  `devicename` varchar(20) DEFAULT NULL,
  `loginipaddress` varchar(20) DEFAULT NULL,
  `logindevicename` varchar(20) DEFAULT NULL,
  `logoutipaddress` varchar(20) DEFAULT NULL,
  `logoutdevicename` varchar(20) DEFAULT NULL,
  `isverifiedemail` tinyint(1) NOT NULL,
  `isverifiedmobile` tinyint(1) NOT NULL,
  `islogin` tinyint(1) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `roleid`, `firstname`, `lastname`, `email`, `encryptedpassword`, `decryptedpassword`, `imagename`, `imageguid`, `contact`, `cnic`, `gender`, `createdate`, `editdate`, `logindate`, `logoutdate`, `createby`, `editby`, `emailverificationcode`, `mobilerverificationcode`, `forgetpassword`, `ipaddress`, `devicename`, `loginipaddress`, `logindevicename`, `logoutipaddress`, `logoutdevicename`, `isverifiedemail`, `isverifiedmobile`, `islogin`, `status`, `remarks`) VALUES
(23, 1, 'kashan', 'bablu', 'kashandeveloper@gmail.com', '5a171317b9e77392bf9df270c315208e', 'Ipcop123@', 'default user', 'avatar-7.jpg', NULL, NULL, NULL, '2021-12-08 01:27:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '192.168.2.106', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `baccountid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `brid` int(11) NOT NULL,
  `acno` varchar(20) NOT NULL,
  `actitle` varchar(200) NOT NULL,
  `cperson` varchar(50) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `brid` int(11) NOT NULL,
  `brname` varchar(50) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chart_of_accounts`
--

CREATE TABLE `chart_of_accounts` (
  `chid` int(11) NOT NULL,
  `accode` varchar(20) DEFAULT NULL,
  `actitle` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `gd` char(1) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cheques`
--

CREATE TABLE `cheques` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `chequenum` varchar(20) DEFAULT NULL,
  `chequedate` date DEFAULT NULL,
  `bankname` varchar(20) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int(11) NOT NULL,
  `companyname` varchar(20) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `createby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cname` int(11) NOT NULL,
  `cnic` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `directsales`
--

CREATE TABLE `directsales` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `invoicenum` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `gatepass` varchar(30) NOT NULL,
  `s_product` varchar(50) DEFAULT NULL,
  `s_qty` int(11) NOT NULL,
  `s_rate` int(11) NOT NULL,
  `s_grossweight` int(11) NOT NULL,
  `s_average` int(11) NOT NULL,
  `s_frt` int(11) NOT NULL,
  `s_tfrt` int(11) NOT NULL,
  `s_amount` int(11) NOT NULL,
  `s_tpt` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `c_product` int(11) NOT NULL,
  `c_qty` int(11) NOT NULL,
  `c_rate` int(11) NOT NULL,
  `c_grossweight` int(11) NOT NULL,
  `c_average` int(11) NOT NULL,
  `c_frt` int(11) NOT NULL,
  `c_tfrt` int(11) NOT NULL,
  `c_amount` int(11) NOT NULL,
  `c_tpt` int(11) NOT NULL,
  `warehouse` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `labourexpense` int(11) DEFAULT 0,
  `productexpense` int(11) DEFAULT 0,
  `discount` int(11) DEFAULT 0,
  `periviousbal` int(11) DEFAULT 0,
  `totalbal` int(11) DEFAULT 0,
  `balance` int(11) DEFAULT NULL,
  `bankname` varchar(30) DEFAULT NULL,
  `accnum` varchar(30) DEFAULT NULL,
  `chequenum` varchar(30) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `accode` varchar(20) DEFAULT NULL,
  `date` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `costing` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `historyid` int(11) NOT NULL,
  `adminid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `ctid` int(11) DEFAULT NULL,
  `pvcid` int(11) DEFAULT NULL,
  `lcid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `whid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `dsid` int(11) DEFAULT NULL,
  `slid` int(11) DEFAULT NULL,
  `pcid` int(11) DEFAULT NULL,
  `srid` int(11) DEFAULT NULL,
  `prid` int(11) DEFAULT NULL,
  `historytype` varchar(20) DEFAULT NULL,
  `historydate` date DEFAULT NULL,
  `historytime` time DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`historyid`, `adminid`, `userid`, `ctid`, `pvcid`, `lcid`, `cid`, `sid`, `whid`, `pid`, `dsid`, `slid`, `pcid`, `srid`, `prid`, `historytype`, `historydate`, `historytime`, `remarks`) VALUES
(1, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Signup', '2021-12-08', '01:27:17', 'cp admin signup ');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `citid` int(11) DEFAULT NULL,
  `pvcid` int(11) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `amountrcvd` int(11) NOT NULL,
  `remainingamount` int(11) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `prid` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `priid` int(11) NOT NULL,
  `pruid` varchar(50) DEFAULT NULL,
  `prsno` int(11) NOT NULL,
  `entrydate` datetime NOT NULL,
  `editdate` datetime NOT NULL,
  `deletedate` datetime NOT NULL,
  `allowdate` datetime NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `deleteby` varchar(20) DEFAULT NULL,
  `allowby` varchar(20) DEFAULT NULL,
  `isdeleted` tinyint(1) NOT NULL,
  `isallow` char(3) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privileges_actions`
--

CREATE TABLE `privileges_actions` (
  `paid` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `prid` int(11) NOT NULL,
  `priid` int(11) NOT NULL,
  `paction` varchar(20) NOT NULL,
  `entrydate` datetime NOT NULL,
  `editdate` datetime NOT NULL,
  `deletedate` datetime NOT NULL,
  `allowdate` datetime NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `deleteby` varchar(20) DEFAULT NULL,
  `allowby` varchar(20) DEFAULT NULL,
  `isdeleted` tinyint(1) NOT NULL,
  `isallow` char(3) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privileges_items`
--

CREATE TABLE `privileges_items` (
  `priid` int(11) NOT NULL,
  `prname` varchar(50) NOT NULL,
  `piname` varchar(50) NOT NULL,
  `prtarget` varchar(50) NOT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productimgs`
--

CREATE TABLE `productimgs` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `existimage` varchar(20) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pcode` varchar(20) DEFAULT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province` varchar(20) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchasereturns`
--

CREATE TABLE `purchasereturns` (
  `id` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `invoicenum` varchar(20) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `grossweight` int(11) DEFAULT NULL,
  `average` decimal(10,0) DEFAULT NULL,
  `frt` decimal(10,0) DEFAULT NULL,
  `tfrt` decimal(10,0) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `tpt` decimal(10,0) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `total_amount` decimal(10,0) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `whid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `invoicenum` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `gatepass` varchar(30) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `priceperbox` int(11) NOT NULL,
  `buyingprice` int(11) NOT NULL,
  `sellingprice` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `grossweight` int(11) NOT NULL,
  `avgerage` int(11) NOT NULL,
  `frt` int(11) NOT NULL,
  `tfrt` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `tpt` int(11) NOT NULL,
  `p_amount` int(11) NOT NULL,
  `labourexpense` int(11) DEFAULT 0,
  `productexpense` int(11) DEFAULT 0,
  `discount` int(11) DEFAULT 0,
  `periviousbal` int(11) DEFAULT 0,
  `totalbal` int(11) DEFAULT 0,
  `balance` int(11) DEFAULT NULL,
  `bankname` varchar(30) DEFAULT NULL,
  `accnum` varchar(30) DEFAULT NULL,
  `chequenum` varchar(30) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `role`) VALUES
(1, 'cp admin'),
(2, 'admin'),
(3, 'user'),
(4, 'agent');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleid` int(11) NOT NULL,
  `role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salereturns`
--

CREATE TABLE `salereturns` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `invoicenum` varchar(20) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `grossweight` int(11) DEFAULT NULL,
  `avgerage` decimal(10,0) DEFAULT NULL,
  `frt` decimal(10,0) NOT NULL,
  `tfrt` decimal(10,0) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `tpt` decimal(10,0) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `total_amount` decimal(10,0) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `whid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `invoicenum` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `gatepass` varchar(30) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `priceperbox` int(11) NOT NULL,
  `buyingprice` int(11) NOT NULL,
  `sellingprice` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `grossweight` int(11) NOT NULL,
  `avgerage` int(11) NOT NULL,
  `frt` int(11) NOT NULL,
  `tfrt` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `tpt` int(11) NOT NULL,
  `p_amount` int(11) NOT NULL,
  `labourexpense` int(11) DEFAULT 0,
  `productexpense` int(11) DEFAULT 0,
  `discount` int(11) DEFAULT 0,
  `periviousbal` int(11) DEFAULT 0,
  `totalbal` int(11) DEFAULT 0,
  `balance` int(11) DEFAULT NULL,
  `bankname` varchar(30) DEFAULT NULL,
  `accnum` varchar(30) DEFAULT NULL,
  `chequenum` varchar(30) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salevouchers`
--

CREATE TABLE `salevouchers` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `whid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `invoicenum` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `gatepass` varchar(30) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `boxperprice` int(11) NOT NULL,
  `buyingprice` int(11) NOT NULL,
  `sellingprice` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `grossweight` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  `frt` int(11) NOT NULL,
  `tfrt` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `tpt` int(11) NOT NULL,
  `labourexpense` int(11) DEFAULT 0,
  `productexpense` int(11) DEFAULT 0,
  `discount` int(11) DEFAULT 0,
  `periviousbal` int(11) DEFAULT 0,
  `totalbal` int(11) DEFAULT 0,
  `balance` int(11) DEFAULT NULL,
  `bankname` varchar(30) DEFAULT NULL,
  `accnum` varchar(30) DEFAULT NULL,
  `chequenum` varchar(30) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime NOT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stid` int(11) NOT NULL,
  `whid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `stocks` int(11) DEFAULT NULL,
  `rmstocks` int(11) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sid` int(11) NOT NULL,
  `sname` int(11) DEFAULT NULL,
  `cnic` int(11) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_types`
--

CREATE TABLE `transaction_types` (
  `tid` int(11) NOT NULL,
  `tname` varchar(100) DEFAULT NULL,
  `dc` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_types`
--

INSERT INTO `transaction_types` (`tid`, `tname`, `dc`) VALUES
(1, 'Cash Deposit', 'D'),
(2, 'Cash Deposit', 'C'),
(3, 'Cash Deposit Reverse', 'D'),
(4, 'Cash Deposit Reverse', 'C'),
(5, 'Cash Withdrawl', 'D'),
(6, 'Cash Withdrawl', 'C'),
(7, 'Cash Withdrawl Reverse', 'D'),
(8, 'Cash Withdrawl Reverse', 'C'),
(9, 'Expense Payment Cash', 'D'),
(10, 'Expense Payment Cash', 'C'),
(11, 'Expense Payment Cheque', 'D'),
(12, 'Expense Payment Cheque', 'C'),
(13, 'Expense Payment Reversal Cash', 'D'),
(14, 'Expense Payment Reversal Cash', 'C'),
(15, 'Purchase', 'D'),
(16, 'Purchase', 'C'),
(17, 'Purchase Reverse', 'D'),
(18, 'Purchase Reverse', 'C'),
(19, 'Fee Generated', 'D'),
(20, 'Fee Generated', 'C'),
(21, 'Sales Reverse', 'D'),
(22, 'Sales Reverse', 'C'),
(23, 'Supplier Payment Cash', 'D'),
(24, 'Supplier Payment Cash', 'C'),
(25, 'Supplier Payment Cheque', 'D'),
(26, 'Supplier Payment Cheque', 'C'),
(27, 'Supplier Payment Reverse', 'D'),
(28, 'Supplier Payment Reverse', 'C'),
(29, 'Customer Payment Cash', 'D'),
(30, 'Customer Payment Cash', 'C'),
(31, 'Customer Payment Cheque', 'D'),
(32, 'Customer Payment Cheque', 'C'),
(33, 'Customer Payment Reverse', 'D'),
(34, 'Customer Payment Reverse', 'C'),
(35, 'Payslip', 'D'),
(36, 'Payslip', 'C'),
(37, 'Fee Payment', 'D'),
(38, 'Fee Payment', 'C'),
(39, 'Student Payment', 'D'),
(40, 'Student Payment', 'C'),
(41, 'Purchase Return', 'D'),
(42, 'Purchase Return', 'C'),
(43, 'Sales Return', 'D'),
(44, 'Sales Return', 'C'),
(45, 'Plot Booking', 'D'),
(46, 'Plot Booking', 'C'),
(47, 'Expense Payment Reversal Cheque', 'D'),
(48, 'Expense Payment Reversal Cheque', 'C'),
(49, 'Cheque Return', 'D'),
(50, 'Cheque Return', 'C'),
(51, 'Cheque Return Reverse', 'D'),
(52, 'Cheque Return Reverse', 'C'),
(53, 'Cheque Redeposit', 'D'),
(54, 'Cheque Redeposit', 'C'),
(55, 'Cheque Redeposit Reverse', 'D'),
(56, 'Cheque Redeposit Reverse', 'C'),
(57, 'Journal Voucher', 'D'),
(58, 'Journal Voucher', 'C'),
(59, 'Sales Delivery Challan', 'D'),
(60, 'Sales Delivery Challan', 'C'),
(61, 'Sales Delivery Challan Reverse', 'D'),
(62, 'Sales Delivery Challan Reverse', 'C'),
(63, 'Production', 'D'),
(64, 'Production', 'C'),
(65, 'Journal Voucher Reverse', 'D'),
(66, 'Journal Voucher Reverse', 'C'),
(67, 'General Loan Cash In', 'D'),
(68, 'General Loan Cash In', 'C'),
(69, 'General Loan Cheque In', 'D'),
(70, 'General Loan Cheque In', 'C'),
(71, 'General Loan Cash Out', 'D'),
(72, 'General Loan Cash Out', 'C'),
(73, 'General Loan Cheque Out', 'D'),
(74, 'General Loan Cheque Out', 'C'),
(75, 'Cheuqes Clearing', 'D'),
(76, 'Cheuqes Clearing', 'C'),
(77, 'Customer Payment Reverse', 'D'),
(78, 'Customer Payment Reverse', 'C'),
(79, 'Journal Entry Debit', 'D'),
(80, 'Journal Entry Credit', 'C'),
(81, 'Company Cheque Post', 'D'),
(82, 'Company Cheque Post', 'C'),
(83, 'Income Entry Cash', 'D'),
(84, 'Income Entry Cash', 'C'),
(85, 'Income Entry Cheque', 'D'),
(86, 'Income Entry Cheque', 'C'),
(87, 'Purchase Unit', 'D'),
(88, 'Purchase Unit', 'C'),
(89, 'Seller Initial Payment Cash', 'D'),
(90, 'Seller Initial Payment Cash', 'C'),
(91, 'Seller Initial Payment Cheque', 'D'),
(92, 'Seller Initial Payment Cheque', 'C'),
(93, 'Seller Payment Cash', 'D'),
(94, 'Seller Payment Cash', 'C'),
(95, 'Seller Payment Cheque', 'D'),
(96, 'Seller Payment Cheque', 'C'),
(97, 'Sale Unit', 'D'),
(98, 'Sale Unit', 'C'),
(99, 'Buyer Initial Payment Cash', 'D'),
(100, 'Buyer Initial Payment Cash', 'C'),
(101, 'Buyer Initial Payment Cheque', 'D'),
(102, 'Buyer Initial Payment Cheque', 'C'),
(103, 'Buyer Payment Cash', 'D'),
(104, 'Buyer Payment Cash', 'C'),
(105, 'Packing List', 'D'),
(106, 'Packing List', 'C'),
(107, 'Container Loading', 'D'),
(108, 'Container Loading', 'C'),
(109, 'Project Cost', 'D'),
(110, 'Project Cost', 'C'),
(111, 'Project Consumed Product', 'D'),
(112, 'Project Consumed Product', 'C'),
(113, 'Inward Challan', 'D'),
(114, 'Inward Challan', 'C'),
(115, 'Inward Challan Reverse', 'D'),
(116, 'Inward Challan Reverse', 'C'),
(117, 'Broker Profit On Sales', 'D'),
(118, 'Broker Profit On Sales', 'C'),
(119, 'Broker Profit On Purchase', 'D'),
(120, 'Broker Profit On Purchase', 'C'),
(121, 'Container Carry Bill', 'D'),
(122, 'Container Carry Bill', 'C'),
(123, 'Petty Cash', 'D'),
(124, 'Petty Cash', 'C'),
(125, 'Goods Transfer', 'D'),
(126, 'Goods Transfer', 'C'),
(127, 'Damage Or Stolen', 'D'),
(128, 'Damage Or Stolen', 'C'),
(129, 'Warehouse Input', 'D'),
(130, 'Warehouse Input', 'C'),
(131, 'Advance Salary Debit', 'D'),
(132, 'Advance Salary Credit', 'C'),
(133, 'Advance Salary Reverse Credit', 'C'),
(134, 'Advance Salary Reverse Debit', 'D'),
(135, 'Loan Payment Debit', 'D'),
(136, 'Loan Payment Credit', 'C'),
(137, 'Loan Payment Reverse Debit', 'D'),
(138, 'Loan Payment Reverse Credit', 'C'),
(139, 'Customer Payment Discount', 'D'),
(140, 'Customer Payment Discount', 'C'),
(141, 'Import LC Advanace', 'D'),
(142, 'Import LC Advanace', 'C'),
(143, 'Goods Production Conversion', 'D'),
(144, 'Goods Production Conversion', 'C'),
(145, 'Van Loading', 'D'),
(146, 'Van Loading', 'C'),
(147, 'Van Loading Return', 'D'),
(148, 'Van Loading Return', 'C'),
(149, 'Product Wasting Return', 'D'),
(150, 'Product Wasting Return', 'C'),
(151, 'Product Extra Quantity', 'D'),
(152, 'Product Extra Quantity', 'C'),
(153, 'Delivery Challan Return', 'D'),
(154, 'Delivery Challan Return', 'C'),
(155, 'Fixed Asset Addition', 'D'),
(156, 'Fixed Asset Addition', 'C'),
(157, 'Expense Vendor Bill', 'D'),
(158, 'Expense Vendor Bill', 'C'),
(159, 'Production Wastage', 'D'),
(160, 'Production Wastage', 'C'),
(161, 'Asset Depreciation', 'D'),
(162, 'Asset Depreciation', 'C'),
(163, 'Sales Tax On Sales', 'D'),
(164, 'Sales Tax On Sales', 'C'),
(165, 'Withholding Tax On Payment Received', 'D'),
(166, 'Withholding Tax On Payment Received', 'C'),
(167, 'Sales Tax Reverse On Sales Invoice Reverse', 'D'),
(168, 'Sales Tax Reverse On Sales Invoice Reverse', 'C'),
(169, 'Sales Tax On Purchase', 'D'),
(170, 'Sales Tax On Purchase', 'C'),
(171, 'Sales Tax Reverse On Purchase Reverse', 'D'),
(172, 'Sales Tax Reverse On Purchase Reverse', 'C'),
(173, 'Withholding Tax On Payment Voucher', 'D'),
(174, 'Withholding Tax On Payment Voucher', 'C'),
(175, 'Sales Tax Return On Purchase Return', 'D'),
(176, 'Sales Tax Return On Purchase Return', 'C'),
(177, 'Sales Tax Return On Sales Return', 'D'),
(178, 'Sales Tax Return On Sales Return', 'C'),
(179, 'Issue To Recycle', 'D'),
(180, 'Issue To Recycle', 'C'),
(181, 'Recived From Recycle', 'D'),
(182, 'Recieved From Recycle', 'C'),
(183, 'Wastage Recycling', 'D'),
(184, 'Wastage Recycling', 'C'),
(185, 'Sales Tax On Wastage Recycling', 'D'),
(186, 'Sales Tax On Wastage Recycling', 'C'),
(187, 'Scarp Received', 'D'),
(188, 'Scarp Received', 'C'),
(189, 'Good Receive', 'D'),
(190, 'Good Receive', 'C'),
(191, 'Inventory Adjustment', 'D'),
(192, 'Inventory Adjustment', 'C'),
(195, 'Token Cash', 'D'),
(196, 'Token Cash', 'C'),
(197, 'Agent Commission', 'D'),
(198, 'Agent Commission', 'C'),
(225, 'Advance Commission Payment Cash', 'D'),
(226, 'Advance Commission Payment Cash', 'C'),
(227, 'Customer Part Payment Cash', 'D'),
(228, 'Customer Part Payment Cash', 'C'),
(229, 'Customer Full Payment Cash', 'D'),
(230, 'Customer Full Payment Cash', 'C'),
(231, 'Customer Installment Payment Cash', 'D'),
(232, 'Customer Installment Payment Cash', 'C'),
(233, 'Plot Transfer', 'D'),
(234, 'Plot Transfer', 'C'),
(239, 'Advance Commission Payment Cheque', 'D'),
(240, 'Advance Commission Payment Cheque', 'C'),
(241, 'Advance Payment Cash', 'D'),
(242, 'Advance Payment Cash', 'C'),
(243, 'Advance Payment Payorder', 'D'),
(244, 'Advance Payment Payorder', 'C'),
(245, 'Advance Payment Cheque', 'D'),
(246, 'Advance Payment Cheque', 'C'),
(247, 'Advance Commission Payment Payorder', 'D'),
(248, 'Advance Commission Payment Payorder', 'C'),
(249, 'Advance Commission Payment Fund Transfer', 'D'),
(250, 'Advance Commission Payment Fund Transfer', 'C'),
(251, 'Advance Payment Fund Transfer', 'D'),
(252, 'Advance Payment Fund Transfer', 'C'),
(253, 'Customer Installment Payment Cheque', 'D'),
(254, 'Customer Installment Payment Cheque', 'C'),
(255, 'Customer Installment Payment Payorder', 'D'),
(256, 'Customer Installment Payment Payorder', 'C'),
(257, 'Customer Installment Payment Fund Transfer', 'D'),
(258, 'Customer Installment Payment Fund Transfer', 'C'),
(259, 'Customer Part Payment Cheque', 'D'),
(260, 'Customer Part Payment Cheque', 'C'),
(261, 'Customer Part Payment Payorder', 'D'),
(262, 'Customer Part Payment Payorder', 'C'),
(263, 'Customer Part Payment Fund Transfer', 'D'),
(264, 'Customer Part Payment Fund Transfer', 'C'),
(265, 'Customer Full Payment Cheque', 'D'),
(266, 'Customer Full Payment Cheque', 'C'),
(267, 'Customer Full Payment Payorder', 'D'),
(268, 'Customer Full Payment Payorder', 'C'),
(269, 'Customer Full Payment Fund Transfer', 'D'),
(270, 'Customer Full Payment Fund Transfer', 'C'),
(271, 'Token Cheque', 'D'),
(272, 'Token Cheque', 'C'),
(273, 'Token Payorder', 'D'),
(274, 'Token Payorder', 'C'),
(275, 'Token Fund Transfer', 'D'),
(276, 'Token Fund Transfer', 'C'),
(281, 'Demarcation Cash', 'D'),
(282, 'Demarcation Cash', 'C'),
(283, 'Transfer Fees Cash', 'D'),
(284, 'Transfer Fees Cash', 'C'),
(285, 'Development Charges Fees Cash', 'D'),
(286, 'Development Charges Fees Cash', 'C'),
(287, 'Development Cash Cash', 'D'),
(288, 'Development Cash Cash', 'C'),
(289, 'Extra Cash Installment Cash', 'D'),
(290, 'Extra Cash Installment Cash', 'C'),
(291, 'Installment  Cash', 'D'),
(292, 'Installment  Cash', 'C'),
(293, 'Advance Cash', 'D'),
(294, 'Advance Cash', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `useractivities`
--

CREATE TABLE `useractivities` (
  `activityid` int(11) NOT NULL,
  `adminid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `ctid` int(11) DEFAULT NULL,
  `pvcid` int(11) DEFAULT NULL,
  `lcid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `dsid` int(11) DEFAULT NULL,
  `slid` int(11) DEFAULT NULL,
  `pcid` int(11) DEFAULT NULL,
  `srid` int(11) DEFAULT NULL,
  `prid` int(11) DEFAULT NULL,
  `activityname` varchar(30) DEFAULT NULL,
  `activitydate` date DEFAULT NULL,
  `activitytime` time DEFAULT NULL,
  `ipaddress` varchar(20) DEFAULT NULL,
  `devicename` varchar(20) DEFAULT NULL,
  `loginipaddress` varchar(20) DEFAULT NULL,
  `logindevicename` varchar(20) DEFAULT NULL,
  `logoutipaddress` varchar(20) DEFAULT NULL,
  `logoutdevicename` varchar(20) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useractivities`
--

INSERT INTO `useractivities` (`activityid`, `adminid`, `userid`, `ctid`, `pvcid`, `lcid`, `cid`, `sid`, `pid`, `dsid`, `slid`, `pcid`, `srid`, `prid`, `activityname`, `activitydate`, `activitytime`, `ipaddress`, `devicename`, `loginipaddress`, `logindevicename`, `logoutipaddress`, `logoutdevicename`, `remarks`) VALUES
(1, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Signup', '2021-12-08', '01:27:17', '192.168.2.106', NULL, NULL, NULL, NULL, NULL, 'cp admin signup ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `roleid` int(11) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `encryptedpassword` varchar(100) DEFAULT NULL,
  `decryptedpassword` varchar(100) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `cnic` varchar(13) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `imagename` text DEFAULT NULL,
  `imageguid` text DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `logindate` datetime DEFAULT NULL,
  `logoutdate` datetime DEFAULT NULL,
  `createby` varchar(20) DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `emailverificationcode` varchar(6) DEFAULT NULL,
  `mobilerverificationcode` varchar(6) DEFAULT NULL,
  `forgetpassword` varchar(6) DEFAULT NULL,
  `ipaddress` varchar(20) DEFAULT NULL,
  `devicename` varchar(20) DEFAULT NULL,
  `loginipaddress` varchar(20) DEFAULT NULL,
  `logindevicename` varchar(20) DEFAULT NULL,
  `logoutipaddress` varchar(20) DEFAULT NULL,
  `logoutdevicename` varchar(20) DEFAULT NULL,
  `isverifiedemail` tinyint(1) DEFAULT NULL,
  `isverifiedmobile` tinyint(1) DEFAULT NULL,
  `islogin` tinyint(1) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `ctid` int(11) DEFAULT NULL,
  `lcid` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `entryby` varchar(20) DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `editby` varchar(20) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts_configuration`
--
ALTER TABLE `accounts_configuration`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `accounts_ledger`
--
ALTER TABLE `accounts_ledger`
  ADD PRIMARY KEY (`alid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`),
  ADD KEY `admins_ibfk_1` (`roleid`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`baccountid`),
  ADD KEY `bid` (`bid`),
  ADD KEY `brid` (`brid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  ADD PRIMARY KEY (`chid`);

--
-- Indexes for table `cheques`
--
ALTER TABLE `cheques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `directsales`
--
ALTER TABLE `directsales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`historyid`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `pvcid` (`pvcid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `dsid` (`dsid`),
  ADD KEY `slid` (`slid`),
  ADD KEY `pcid` (`pcid`),
  ADD KEY `srid` (`srid`),
  ADD KEY `prid` (`prid`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citid` (`citid`),
  ADD KEY `pvcid` (`pvcid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`prid`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `roleid` (`roleid`),
  ADD KEY `priid` (`priid`);

--
-- Indexes for table `privileges_actions`
--
ALTER TABLE `privileges_actions`
  ADD PRIMARY KEY (`paid`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `roleid` (`roleid`),
  ADD KEY `prid` (`prid`),
  ADD KEY `priid` (`priid`);

--
-- Indexes for table `privileges_items`
--
ALTER TABLE `privileges_items`
  ADD PRIMARY KEY (`priid`);

--
-- Indexes for table `productimgs`
--
ALTER TABLE `productimgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasereturns`
--
ALTER TABLE `purchasereturns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `whid` (`whid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `salereturns`
--
ALTER TABLE `salereturns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `whid` (`whid`);

--
-- Indexes for table `salevouchers`
--
ALTER TABLE `salevouchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `whid` (`whid`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stid`),
  ADD KEY `whid` (`whid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `useractivities`
--
ALTER TABLE `useractivities`
  ADD PRIMARY KEY (`activityid`),
  ADD KEY `lcid` (`lcid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `dsid` (`dsid`),
  ADD KEY `slid` (`slid`),
  ADD KEY `pcid` (`pcid`),
  ADD KEY `srid` (`srid`),
  ADD KEY `prid` (`prid`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `pvcid` (`pvcid`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `users_ibfk_1` (`roleid`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `lcid` (`lcid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_configuration`
--
ALTER TABLE `accounts_configuration`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `accounts_ledger`
--
ALTER TABLE `accounts_ledger`
  MODIFY `alid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `baccountid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  MODIFY `chid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cheques`
--
ALTER TABLE `cheques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `directsales`
--
ALTER TABLE `directsales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privileges_actions`
--
ALTER TABLE `privileges_actions`
  MODIFY `paid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privileges_items`
--
ALTER TABLE `privileges_items`
  MODIFY `priid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productimgs`
--
ALTER TABLE `productimgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchasereturns`
--
ALTER TABLE `purchasereturns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salereturns`
--
ALTER TABLE `salereturns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salevouchers`
--
ALTER TABLE `salevouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `useractivities`
--
ALTER TABLE `useractivities`
  MODIFY `activityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts_ledger`
--
ALTER TABLE `accounts_ledger`
  ADD CONSTRAINT `accounts_ledger_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `transaction_types` (`tid`);

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`);

--
-- Constraints for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD CONSTRAINT `bank_accounts_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `banks` (`bid`),
  ADD CONSTRAINT `bank_accounts_ibfk_2` FOREIGN KEY (`brid`) REFERENCES `branch` (`brid`);

--
-- Constraints for table `cheques`
--
ALTER TABLE `cheques`
  ADD CONSTRAINT `cheques_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  ADD CONSTRAINT `cheques_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`);

--
-- Constraints for table `directsales`
--
ALTER TABLE `directsales`
  ADD CONSTRAINT `directsales_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `directsales_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  ADD CONSTRAINT `directsales_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`);

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_ibfk_1` FOREIGN KEY (`ctid`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `histories_ibfk_10` FOREIGN KEY (`prid`) REFERENCES `purchasereturns` (`id`),
  ADD CONSTRAINT `histories_ibfk_11` FOREIGN KEY (`adminid`) REFERENCES `admins` (`adminid`),
  ADD CONSTRAINT `histories_ibfk_12` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `histories_ibfk_2` FOREIGN KEY (`pvcid`) REFERENCES `provinces` (`id`),
  ADD CONSTRAINT `histories_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  ADD CONSTRAINT `histories_ibfk_4` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`),
  ADD CONSTRAINT `histories_ibfk_5` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `histories_ibfk_6` FOREIGN KEY (`dsid`) REFERENCES `directsales` (`id`),
  ADD CONSTRAINT `histories_ibfk_7` FOREIGN KEY (`slid`) REFERENCES `salevouchers` (`id`),
  ADD CONSTRAINT `histories_ibfk_8` FOREIGN KEY (`pcid`) REFERENCES `purchases` (`id`),
  ADD CONSTRAINT `histories_ibfk_9` FOREIGN KEY (`srid`) REFERENCES `salereturns` (`id`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`citid`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `locations_ibfk_2` FOREIGN KEY (`pvcid`) REFERENCES `provinces` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`);

--
-- Constraints for table `productimgs`
--
ALTER TABLE `productimgs`
  ADD CONSTRAINT `productimgs_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`);

--
-- Constraints for table `purchasereturns`
--
ALTER TABLE `purchasereturns`
  ADD CONSTRAINT `purchasereturns_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `purchasereturns_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`whid`) REFERENCES `warehouses` (`id`),
  ADD CONSTRAINT `purchases_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`);

--
-- Constraints for table `salereturns`
--
ALTER TABLE `salereturns`
  ADD CONSTRAINT `salereturns_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `salereturns_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`whid`) REFERENCES `warehouses` (`id`);

--
-- Constraints for table `salevouchers`
--
ALTER TABLE `salevouchers`
  ADD CONSTRAINT `salevouchers_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `salevouchers_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  ADD CONSTRAINT `salevouchers_ibfk_3` FOREIGN KEY (`whid`) REFERENCES `warehouses` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`whid`) REFERENCES `warehouses` (`id`),
  ADD CONSTRAINT `stocks_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`);

--
-- Constraints for table `useractivities`
--
ALTER TABLE `useractivities`
  ADD CONSTRAINT `useractivities_ibfk_1` FOREIGN KEY (`lcid`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_10` FOREIGN KEY (`prid`) REFERENCES `purchasereturns` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_11` FOREIGN KEY (`ctid`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_12` FOREIGN KEY (`pvcid`) REFERENCES `provinces` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_13` FOREIGN KEY (`adminid`) REFERENCES `admins` (`adminid`),
  ADD CONSTRAINT `useractivities_ibfk_14` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `useractivities_ibfk_2` FOREIGN KEY (`lcid`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`),
  ADD CONSTRAINT `useractivities_ibfk_4` FOREIGN KEY (`sid`) REFERENCES `suppliers` (`sid`),
  ADD CONSTRAINT `useractivities_ibfk_5` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `useractivities_ibfk_6` FOREIGN KEY (`dsid`) REFERENCES `directsales` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_7` FOREIGN KEY (`slid`) REFERENCES `salevouchers` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_8` FOREIGN KEY (`pcid`) REFERENCES `purchases` (`id`),
  ADD CONSTRAINT `useractivities_ibfk_9` FOREIGN KEY (`srid`) REFERENCES `salereturns` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`);

--
-- Constraints for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD CONSTRAINT `warehouses_ibfk_1` FOREIGN KEY (`ctid`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `warehouses_ibfk_2` FOREIGN KEY (`lcid`) REFERENCES `locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
