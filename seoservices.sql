-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 01:42 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seoservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_ID` int(4) NOT NULL,
  `Service_ID` int(4) NOT NULL,
  `User_ID` int(4) NOT NULL,
  `filePath` varchar(150) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_ID`, `Service_ID`, `User_ID`, `filePath`, `Date`) VALUES
(3, 2, 2, 'C:xampphtdocsseoservices\\uploadsLink Building 20 Links-sitemap-2-2020-02-02.txt', '2020-02-02 18:10:06'),
(4, 3, 2, 'C:xampphtdocsseoservices\\uploadsLink Building 30 Links-sitemap-2-2020-02-02.txt', '2020-02-02 18:10:26'),
(5, 1, 2, 'C:xampphtdocsseoservices\\uploadsLink Building 10 Links-all regex-2-2020-02-25.txt', '2020-02-25 19:16:22'),
(6, 2, 2, 'C:xampphtdocsseoservices\\uploadsLink Building 20 Links-all regex-2-2020-02-25.txt', '2020-02-25 19:17:55'),
(7, 1, 2, 'C:xampphtdocsseoservices\\uploadsLink Building 10 Links-all regex-2-2020-03-02.txt', '2020-03-02 22:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(4) NOT NULL,
  `Category_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`) VALUES
(1, 'SEO'),
(2, 'Content Writing'),
(3, 'Graphics Designing');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `page`, `keywords`, `date`) VALUES
(1, 'seo.php?sub-category=High+DR+Blog+Comments', 'keywords for High DR', '2020-03-15'),
(2, 'about-us.php', 'Abous US', '2020-03-15'),
(3, 'cart.php', 'Cart', '2020-03-15'),
(4, 'contacts.php', 'Contact Us', '2020-03-15'),
(5, 'index.php', 'index', '2020-03-15'),
(6, 'login.php', 'Login', '2020-03-15'),
(7, 'order-history.php', 'Order history', '2020-03-15'),
(8, 'register.php', 'register', '2020-03-15'),
(9, 'content-writing.php?sub-category=Content+Writing', 'Content Writing', '2020-03-15'),
(10, 'content-writing.php?sub-category=Essay+Writing', 'Easy Writing', '2020-03-15'),
(11, 'graphics-designing.php?sub-category=Logo+Design', 'Logo Design', '2020-03-15'),
(12, 'graphics-designing.php?sub-category=Infograhic', 'Infographic', '2020-03-15'),
(13, 'graphics-designing.php?sub-category=Infograhic+Submission', 'Infographic Submission', '2020-03-15'),
(14, 'seo.php?sub-category=Link+Building', 'LB', '2020-03-15'),
(15, 'seo.php?sub-category=High+DA+Blog+Comments', 'High DA blog Comment', '2020-03-15'),
(16, 'seo.php?sub-category=High+TF+Blog+Comments', 'High TF blog Comment', '2020-03-15'),
(17, 'seo.php?sub-category=DoFollow+Blog+Comments', 'Dofollow blog Comment', '2020-03-15'),
(18, 'seo.php?sub-category=Niche+Blog+Comments', 'Niche blog Comment', '2020-03-15'),
(19, 'seo.php?sub-category=Local+Citation', 'Local Citation', '2020-03-15'),
(20, 'seo.php?sub-category=Web+2.0+Creation', 'Web 2.0', '2020-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(4) NOT NULL,
  `Service_ID` int(4) NOT NULL,
  `User_ID` int(4) NOT NULL,
  `Order_Price` int(4) NOT NULL,
  `Payment_ID` int(15) NOT NULL,
  `Payment_Method` varchar(15) NOT NULL,
  `Order_Date` datetime NOT NULL,
  `filePath` varchar(150) NOT NULL,
  `Order_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Service_ID`, `User_ID`, `Order_Price`, `Payment_ID`, `Payment_Method`, `Order_Date`, `filePath`, `Order_Status`) VALUES
(1, 1, 2, 10, 1, 'PayPal', '2019-12-25 17:10:17', 'C:xampphtdocsseoservicesuploadsLink Building 10 Links-test-2-2019-12-23.txt', 'Pending'),
(2, 2, 2, 20, 1, 'PayPal', '2019-12-25 17:10:17', 'C:xampphtdocsseoservicesuploadsLink Building 20 Links-test-2-2019-12-23.txt', 'Pending'),
(3, 3, 2, 30, 1, 'PayPal', '2019-12-25 17:10:17', 'C:xampphtdocsseoservicesuploadsLink Building 30 Links-test-2-2019-12-23.txt', 'Pending'),
(4, 1, 2, 10, 3, 'PayPal', '2019-12-26 00:19:16', 'C:xampphtdocsseoservicesuploadsLink Building 10 Links-test-2-2019-12-25.txt', 'Pending'),
(5, 25, 2, 10, 3, 'PayPal', '2019-12-26 00:19:16', 'C:xampphtdocsseoservicesuploads100 Content Writing-test-2-2019-12-25.txt', 'Pending'),
(6, 31, 2, 10, 3, 'PayPal', '2019-12-26 00:19:16', 'C:xampphtdocsseoservicesuploadsLogo Design (1 variation)-test-2-2019-12-25.txt', 'Pending'),
(7, 1, 2, 10, 1, 'PayPal', '2020-02-02 17:31:49', 'C:xampphtdocsseoservicesuploadsLink Building 10 Links-sitemap-2-2020-02-02.txt', 'Pending'),
(8, 25, 2, 10, 1, 'PayPal', '2020-02-02 17:31:50', 'C:xampphtdocsseoservicesuploads100 Content Writing-sitemap-2-2020-02-02.txt', 'Pending'),
(9, 0, 0, 0, 0, 'PayPal', '2020-02-02 21:28:17', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentsettings`
--

CREATE TABLE `paymentsettings` (
  `EnablePaypalStandard` tinyint(1) NOT NULL,
  `LiveEmail` varchar(100) NOT NULL,
  `LiveReturnUrl` varchar(150) NOT NULL,
  `LiveCancelUrl` varchar(150) NOT NULL,
  `LiveNotifyUrl` varchar(150) NOT NULL,
  `SandboxEmail` varchar(100) NOT NULL,
  `SandboxReturnUrl` varchar(150) NOT NULL,
  `SandboxCancelUrl` varchar(150) NOT NULL,
  `SandboxNotifyUrl` varchar(150) NOT NULL,
  `PaypalStandardSandbox` tinyint(1) NOT NULL,
  `EnablePaypalExpress` tinyint(1) NOT NULL,
  `ExpressLiveApiEmail` varchar(100) NOT NULL,
  `ExpressLiveApiPassword` varchar(100) NOT NULL,
  `ExpressLiveApiSignature` varchar(200) NOT NULL,
  `ExpressLiveReturnUrl` varchar(150) NOT NULL,
  `ExpressLiveCancelUrl` varchar(150) NOT NULL,
  `ExpressSandboxApiEmail` varchar(100) NOT NULL,
  `ExpressSandboxApiPassword` varchar(100) NOT NULL,
  `ExpressSandboxApiSignature` varchar(200) NOT NULL,
  `ExpressSandboxReturnUrl` varchar(150) NOT NULL,
  `ExpressSandboxCancelUrl` varchar(150) NOT NULL,
  `PaypalExpressSandbox` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentsettings`
--

INSERT INTO `paymentsettings` (`EnablePaypalStandard`, `LiveEmail`, `LiveReturnUrl`, `LiveCancelUrl`, `LiveNotifyUrl`, `SandboxEmail`, `SandboxReturnUrl`, `SandboxCancelUrl`, `SandboxNotifyUrl`, `PaypalStandardSandbox`, `EnablePaypalExpress`, `ExpressLiveApiEmail`, `ExpressLiveApiPassword`, `ExpressLiveApiSignature`, `ExpressLiveReturnUrl`, `ExpressLiveCancelUrl`, `ExpressSandboxApiEmail`, `ExpressSandboxApiPassword`, `ExpressSandboxApiSignature`, `ExpressSandboxReturnUrl`, `ExpressSandboxCancelUrl`, `PaypalExpressSandbox`) VALUES
(1, 'musibihakhatoonrazmi@gmail.com', 'https://ww.seotechstore.com/paypalstandardcheckout/success.php', 'https://ww.seotechstore.com/paypalstandardcheckout/cancel.php', 'https://ww.seotechstore.com/paypalstandardcheckout/ipn.php', 'sb-eqbwi697310@business.example.com', 'http://localhost:8080/seoservices/paypalstandardcheckout/success.php', 'http://localhost:8080/seoservices/paypalstandardcheckout/cancel.php', 'http://localhost:8080/seoservices/paypalstandardcheckout/ipn.php', 1, 0, 'billybig95_api1.yahoo.com', 'SK7L26XAD2EHXZ5Z', 'a--8msclabuvn8l.-mhjxc9uypbtakm7qhnvgbxhmimvgio1rocaqxxg', 'https://ww.seotechstore.com/paypalexpresss/review.php', 'https://ww.seotechstore.com/paypalexpresss/index.php', 'threads.ahsan_api1.gmail.com', '1387448269', 'afcwxv21c7fd0v3byyyrcpssrl31a7hzxvw0uan4n7otuwmvpmaqkpum', 'http://localhost:8080/seoservices/paypalexpresss/review.php', 'http://localhost:8080/seoservices/paypalexpresss/index.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paymentsettings2`
--

CREATE TABLE `paymentsettings2` (
  `EnablePaypalStandard` tinyint(1) NOT NULL,
  `LiveEmail` varchar(100) NOT NULL,
  `LiveReturnUrl` varchar(150) NOT NULL,
  `LiveCancelUrl` varchar(150) NOT NULL,
  `LiveNotifyUrl` varchar(150) NOT NULL,
  `SandboxEmail` varchar(100) NOT NULL,
  `SandboxReturnUrl` varchar(150) NOT NULL,
  `SandboxCancelUrl` varchar(150) NOT NULL,
  `SandboxNotifyUrl` varchar(150) NOT NULL,
  `PaypalStandardSandbox` tinyint(1) NOT NULL,
  `EnablePaypalExpress` tinyint(1) NOT NULL,
  `ExpressLiveApiEmail` varchar(100) NOT NULL,
  `ExpressLiveApiPassword` varchar(100) NOT NULL,
  `ExpressLiveApiSignature` varchar(200) NOT NULL,
  `ExpressLiveReturnUrl` varchar(150) NOT NULL,
  `ExpressLiveCancelUrl` varchar(150) NOT NULL,
  `ExpressSandboxApiEmail` varchar(100) NOT NULL,
  `ExpressSandboxApiPassword` varchar(100) NOT NULL,
  `ExpressSandboxApiSignature` varchar(200) NOT NULL,
  `ExpressSandboxReturnUrl` varchar(150) NOT NULL,
  `ExpressSandboxCancelUrl` varchar(150) NOT NULL,
  `PaypalExpressSandbox` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentsettings2`
--

INSERT INTO `paymentsettings2` (`EnablePaypalStandard`, `LiveEmail`, `LiveReturnUrl`, `LiveCancelUrl`, `LiveNotifyUrl`, `SandboxEmail`, `SandboxReturnUrl`, `SandboxCancelUrl`, `SandboxNotifyUrl`, `PaypalStandardSandbox`, `EnablePaypalExpress`, `ExpressLiveApiEmail`, `ExpressLiveApiPassword`, `ExpressLiveApiSignature`, `ExpressLiveReturnUrl`, `ExpressLiveCancelUrl`, `ExpressSandboxApiEmail`, `ExpressSandboxApiPassword`, `ExpressSandboxApiSignature`, `ExpressSandboxReturnUrl`, `ExpressSandboxCancelUrl`, `PaypalExpressSandbox`) VALUES
(1, 'musibihakhatoonrazmi@gmail.com', 'http://localhost:8080/seoservices/paypalstandardcheckout/success.php', 'http://localhost:8080/seoservices/paypalstandardcheckout/cancel.php', 'http://localhost:8080/seoservices/paypalstandardcheckout/ipn.php', 'sb-eqbwi697310@business.example.com', 'http://localhost:8080/seoservices/paypalstandardcheckout/success.php', 'http://localhost:8080/seoservices/paypalstandardcheckout/cancel.php', 'http://localhost:8080/seoservices/paypalstandardcheckout/ipn.php', 1, 0, '', '', '', 'http://localhost:8080/seoservices/paypalexpresss/review.php', 'http://localhost:8080/seoservices/paypalexpresss/index.php', 'threads.ahsan_api1.gmail.com', '1387448269', 'AFcWxV21C7fd0v3bYYYRCpSSRl31A7HZXVw0Uan4n7otUWmvPmaQkpuM', 'http://localhost:8080/seoservices/paypalexpresss/review.php', 'http://localhost:8080/seoservices/paypalexpresss/index.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paypalpayments`
--

CREATE TABLE `paypalpayments` (
  `payment_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paypaltransaction`
--

CREATE TABLE `paypaltransaction` (
  `PaypalTransaction_ID` int(11) NOT NULL,
  `Paypal_Token` varchar(25) NOT NULL,
  `Cart_IDs` varchar(100) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Transaction_Status` varchar(25) DEFAULT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paypaltransaction`
--

INSERT INTO `paypaltransaction` (`PaypalTransaction_ID`, `Paypal_Token`, `Cart_IDs`, `User_ID`, `Transaction_Status`, `Date`) VALUES
(1, 'EC-9P400528LJ930124U', '1,2', 2, 'SUCCESS', '2020-02-02'),
(6, '3RP24011W68279228', '3,4', 2, 'Pending', '2020-02-02'),
(7, '3YN07381H1555363P', '3', 2, 'Completed', '2020-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Service_ID` int(10) NOT NULL,
  `Service_Name` varchar(50) NOT NULL,
  `Service_Description` varchar(500) NOT NULL,
  `Service_Price` int(4) NOT NULL,
  `Category_ID` int(4) NOT NULL,
  `SubCategory_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_ID`, `Service_Name`, `Service_Description`, `Service_Price`, `Category_ID`, `SubCategory_ID`) VALUES
(1, 'Link Building 10 Links', 'Link Building Package 1 Description', 10, 1, 1),
(2, 'Link Building 20 Links', 'Link Building Package 2 Description', 20, 1, 1),
(3, 'Link Building 30 Links', 'Link Building Package 3 Description', 30, 1, 1),
(4, '10 High DR Blog Comments', 'High DR Blog Comments Package 1 Description', 10, 1, 2),
(5, '20 High DR Blog Comments', 'High DR Blog Comments Package 2 Description', 20, 1, 2),
(6, '30 High DR Blog Comments', 'High DR Blog Comments Package 3 Description', 30, 1, 2),
(7, '10 High DA Blog Comments', 'High DA Blog Comments Package 1 Description', 10, 1, 3),
(8, '20 High DA Blog Comments', 'High DA Blog Comments Package 2 Description', 20, 1, 3),
(9, '30 High DA Blog Comments', 'High DA Blog Comments Package 3 Description', 30, 1, 3),
(10, '10 High TF Blog Comments', 'High TF Blog Comments Package 1 Description', 10, 1, 4),
(11, '20 High TF Blog Comments', 'High TF Blog Comments Package 2 Description', 20, 1, 4),
(12, '30 High TF Blog Comments', 'High TF Blog Comments Package 3 Description', 30, 1, 4),
(13, '10 DoFollow Blog Comments', 'DoFollow Blog Comments Package 1 Description', 10, 1, 5),
(14, '20 DoFollow Blog Comments', 'DoFollow Blog Comments Package 2 Description', 20, 1, 5),
(15, '30 DoFollow Blog Comments', 'DoFollow Blog Comments Package 3 Description', 30, 1, 5),
(16, '10 Niche Blog Comments', 'Niche Blog Comments Package 1 Description', 10, 1, 6),
(17, '20 Niche Blog Comments', 'Niche Blog Comments Package 2 Description', 20, 1, 6),
(18, '30 Niche Blog Comments', 'Niche Blog Comments Package 3 Description', 30, 1, 6),
(19, '10 Local Citation', 'Local Citation Package 1 Description', 10, 1, 7),
(20, '20 Local Citation', 'Local Citation Package 2 Description', 20, 1, 7),
(21, '30 Local Citation', 'Local Citation Package 3 Description', 30, 1, 7),
(22, '10 Web 2.0 Creation', 'Web 2.0 Creation Package 1 Description', 10, 1, 8),
(23, '20 Web 2.0 Creation', 'Web 2.0 Creation Package 2 Description', 20, 1, 8),
(24, '30 Web 2.0 Creation', 'Web 2.0 Creation Package 3 Description', 30, 1, 8),
(25, '100 Content Writing', 'Content Writing Package 1 Descrption', 10, 2, 9),
(26, '200 Content Writing', 'Content Writing Package 2 Descrption', 20, 2, 9),
(27, '300 Content Writing', 'Content Writing Package 3 Descrption', 30, 2, 9),
(28, '100 Essay Writing', 'Essay Writing Package 1 Descrption', 10, 2, 10),
(29, '200 Essay Writing', 'Essay Writing Package 2 Descrption', 20, 2, 10),
(30, '300 Essay Writing', 'Essay Writing Package 3 Descrption', 30, 2, 10),
(31, 'Logo Design (1 variation)', 'Logo Design Package 1 Description', 10, 3, 11),
(32, 'Logo Design (2 variation)', 'Logo Design Package 2 Description', 20, 3, 11),
(33, 'Logo Design (3 variation)', 'Logo Design Package 3 Description', 30, 3, 11),
(34, 'Infograhic Package 1', 'Infograhic Package 1 Description', 10, 3, 12),
(35, 'Infograhic Package 2', 'Infograhic Package 2 Description', 20, 3, 12),
(36, 'Infograhic Package 3', 'Infograhic Package 3 Description', 30, 3, 12),
(37, 'Infograhie Submission (10 Submission)', 'Infograhie Submission Package 1 Description', 10, 3, 13),
(38, 'Infograhie Submission (20 Submission)', 'Infograhie Submission Package 2 Description', 20, 3, 13),
(39, 'Infograhie Submission (30 Submission)', 'Infograhie Submission Package 3 Description', 30, 3, 13),
(40, 'Link Building 40 Links', 'Link Building Package 4 Description', 40, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribefortips`
--

CREATE TABLE `subscribefortips` (
  `SubscribeForTips_ID` int(10) NOT NULL,
  `SubscribeForTips_Email` varchar(150) NOT NULL,
  `SubscribeForTips_Status` tinyint(1) NOT NULL,
  `SubscribeForTips_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribefortips`
--

INSERT INTO `subscribefortips` (`SubscribeForTips_ID`, `SubscribeForTips_Email`, `SubscribeForTips_Status`, `SubscribeForTips_Date`) VALUES
(1, 'frederickjonesjr@msn.com', 0, '2020-01-06'),
(2, 'hcarl82@yahoo.com', 0, '2020-01-13'),
(3, 'symxfan@yahoo.com', 0, '2020-01-22'),
(4, 'heysmichelle2@gmail.com', 0, '2020-01-25'),
(5, 'darryldoherty86@gmail.com', 0, '2020-01-28'),
(6, 'bulkweedinbox@protonmail.com', 0, '2020-02-02'),
(7, 'seanmillhouse@gmail.com', 0, '2020-02-03'),
(8, 'frank@bulkweedinbox.com', 0, '2020-02-04'),
(9, 'msfitto@yahoo.com', 0, '2020-02-05'),
(10, 'smither604@aol.com', 0, '2020-02-05'),
(11, 'creativelyuncommin@gmail.com', 0, '2020-02-29'),
(12, 'karen@signstine.com', 0, '2020-03-05'),
(13, 'highlash1@gmail.com', 0, '2020-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `SubCategory_ID` int(4) NOT NULL,
  `Category_ID` int(4) NOT NULL,
  `SubCategory_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`SubCategory_ID`, `Category_ID`, `SubCategory_Name`) VALUES
(1, 1, 'Link Building'),
(2, 1, 'High DR Blog Comments'),
(3, 1, 'High DA Blog Comments'),
(4, 1, 'High TF Blog Comments'),
(5, 1, 'DoFollow Blog Comments'),
(6, 1, 'Niche Blog Comments'),
(7, 1, 'Local Citation'),
(8, 1, 'Web 2.0 Creation'),
(9, 2, 'Content Writing'),
(10, 2, 'Essay Writing'),
(11, 3, 'Logo Design'),
(12, 3, 'Infograhic'),
(13, 3, 'Infograhic Submission');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(10) NOT NULL,
  `User_Email` varchar(30) NOT NULL,
  `User_Password` varchar(30) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `Date_Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Name`, `User_Email`, `User_Password`, `Role`, `Date_Created`) VALUES
(1, 'Admin', 'admin@seoservices.com', 'admin', 'Supe Admin', '2019-12-11 00:00:00'),
(2, 'Ahsan', 'threads.ahsan@gmail.com', '123', 'Admin', '2019-08-12 00:00:00'),
(3, 'User 1', 'user1@examples.com', '123', 'User', '2019-09-12 00:00:00'),
(4, 'User 2', 'user2@examples.com', '123', 'User', '2019-10-12 00:00:00'),
(5, '', '', '', 'Admin', '2020-01-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_tracker`
--

CREATE TABLE `visitor_tracker` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ip` varchar(20) NOT NULL,
  `web_page` varchar(255) NOT NULL,
  `query_string` varchar(255) NOT NULL,
  `http_referer` varchar(255) NOT NULL,
  `http_user_agent` varchar(255) NOT NULL,
  `is_bot` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_tracker`
--

INSERT INTO `visitor_tracker` (`id`, `country`, `city`, `date`, `time`, `ip`, `web_page`, `query_string`, `http_referer`, `http_user_agent`, `is_bot`) VALUES
(1, 'United States of America', 'North Bergen', '2020-02-25', '10:43:01', '104.248.126.70', '/index.php', '', 'no referer', 'no User-agent', 0),
(2, 'Pakistan', 'Karachi', '2020-02-25', '11:40:32', '45.116.232.35', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(3, 'Pakistan', 'Thatta', '2020-02-25', '11:41:34', '182.182.22.55', '/seo.php', 'sub-category=High+DR+Blog+Comments', 'http://www.seotechstore.com/', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(4, 'United States of America', 'Houston', '2020-02-25', '13:50:33', '209.17.96.242', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(5, 'United States of America', 'Mountain View', '2020-02-25', '16:49:42', '66.249.64.175', '/seo.php', 'sub-category=Local+Citation', 'no referer', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(6, 'United States of America', 'Mountain View', '2020-02-25', '20:30:40', '66.249.64.171', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(7, 'Canada', 'Vancouver', '2020-02-25', '20:46:51', '204.187.14.72', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(8, 'United States of America', 'Ashburn', '2020-02-25', '20:47:19', '18.206.99.105', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)', 0),
(9, 'United States of America', 'Mountain View', '2020-02-25', '20:47:25', '66.249.93.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(10, 'United States of America', 'Mountain View', '2020-02-25', '20:47:27', '66.249.93.47', '/index.php', 'wc-ajax=get_refreshed_fragments', 'https://www.seotechstore.com/', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(11, 'United States of America', 'Mountain View', '2020-02-25', '20:47:27', '66.249.93.45', '/index.php', 'wc-ajax=get_refreshed_fragments', 'https://www.seotechstore.com/', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36 Chrome-Lighthouse', 0),
(12, 'Pakistan', 'Karachi', '2020-02-25', '20:50:33', '42.201.226.159', '/index.php', 'wc-ajax=get_refreshed_fragments', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(13, 'Canada', 'Vancouver', '2020-02-25', '20:59:27', '204.187.14.70', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(14, 'Canada', 'Vancouver', '2020-02-25', '21:04:02', '204.187.14.74', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(15, 'United States of America', 'New Castle', '2020-02-25', '21:14:48', '199.10.31.196', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(16, 'Canada', 'Vancouver', '2020-02-25', '21:42:00', '204.187.14.78', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(17, 'Canada', 'Vancouver', '2020-02-25', '21:42:41', '204.187.14.76', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(18, 'Ukraine', 'Kharkiv', '2020-02-25', '21:58:52', '5.255.174.141', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 0),
(19, 'United States of America', 'Ashburn', '2020-02-25', '22:12:57', '18.234.175.206', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)', 0),
(20, 'Canada', 'Vancouver', '2020-02-25', '22:12:57', '204.187.14.73', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(21, 'United States of America', 'Albany', '2020-02-25', '22:44:24', '72.10.193.107', '/index.php', '', 'no referer', 'Googlebot/2.1 (+http://www.googlebot.com/bot.html)', 0),
(22, 'United States of America', 'San Francisco', '2020-02-25', '22:45:23', '192.241.196.199', '/index.php', '', 'no referer', 'GIDBot/3.0 (+http://www.gidnetwork.com/tools/gzip-test.php)', 0),
(23, 'United States of America', 'Houston', '2020-02-25', '22:57:16', '209.17.96.2', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(24, 'United States of America', 'Mountain View', '2020-02-25', '23:33:51', '66.249.64.163', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(25, 'France', 'Paris', '2020-02-26', '04:00:17', '62.210.10.77', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 0),
(26, 'United States of America', 'Houston', '2020-02-26', '04:47:07', '209.17.96.74', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(27, 'United States of America', 'Portland', '2020-02-26', '05:31:22', '34.216.166.190', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.65 Safari/537.31', 0),
(28, 'United States of America', 'Mountain View', '2020-02-26', '11:04:17', '66.249.93.45', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(29, 'United States of America', 'Mountain View', '2020-02-26', '11:04:17', '66.249.93.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36 Chrome-Lighthouse', 0),
(30, 'United States of America', 'New Castle', '2020-02-26', '11:04:19', '199.10.31.196', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(31, 'Brazil', 'Sao Paulo', '2020-02-26', '11:04:22', '18.231.130.180', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)', 0),
(32, 'United States of America', 'Mountain View', '2020-02-26', '11:04:23', '66.249.93.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36 Chrome-Lighthouse', 0),
(33, 'United States of America', 'Houston', '2020-02-26', '11:14:00', '209.17.96.82', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(34, 'Pakistan', 'Hyderabad', '2020-02-26', '11:24:03', '103.12.58.170', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(35, 'United States of America', 'New Castle', '2020-02-26', '11:34:18', '199.10.31.195', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(36, 'Japan', 'Tokyo', '2020-02-26', '11:34:21', '13.112.245.102', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)', 0),
(37, 'United States of America', 'Mountain View', '2020-02-26', '12:35:22', '66.102.8.111', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko; Google Page Speed Insights) Chrome/41.0.2272.118 Safari/537.36', 0),
(38, 'Pakistan', 'Karachi', '2020-02-26', '12:53:22', '45.116.232.52', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(39, 'Canada', 'Vancouver', '2020-02-26', '12:56:53', '204.187.14.77', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(40, 'Canada', 'Vancouver', '2020-02-26', '13:10:47', '204.187.14.75', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(41, 'Canada', 'Vancouver', '2020-02-26', '13:14:03', '204.187.14.71', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(42, 'United States of America', 'Chicago', '2020-02-26', '13:21:45', '173.252.95.15', '/index.php', '', 'no referer', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 0),
(43, 'Canada', 'Vancouver', '2020-02-26', '13:28:07', '204.187.14.74', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(44, 'Russian Federation', 'Moscow', '2020-02-26', '16:14:29', '185.188.183.179', '/index.php', '', 'no referer', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; InfoPath.1; .NET CLR 2.0.50727)', 0),
(45, 'Pakistan', 'Tando Jam', '2020-02-26', '16:21:16', '182.182.37.107', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(46, 'United States of America', 'Newark', '2020-02-26', '16:25:55', '172.104.23.11', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0),
(47, 'Bangladesh', 'Gaibandha', '2020-02-26', '16:36:42', '103.68.118.84', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(48, 'United States of America', 'Des Moines', '2020-02-26', '16:36:48', '52.114.128.37', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; WOW64) SkypeUriPreview Preview/0.5', 0),
(49, 'United States of America', 'San Francisco', '2020-02-26', '17:11:49', '207.241.225.217', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(50, 'United States of America', 'Seattle', '2020-02-26', '17:12:01', '199.30.231.2', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 0),
(51, 'United States of America', 'Mountain View', '2020-02-26', '17:12:29', '64.233.172.234', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 Google Favicon', 0),
(52, 'Canada', 'Vancouver', '2020-02-26', '17:49:43', '204.187.14.70', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(53, 'United States of America', 'Redmond', '2020-02-26', '19:31:08', '207.46.13.101', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(54, 'Pakistan', 'Hyderabad', '2020-02-26', '20:32:32', '182.182.67.72', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:65.0) Gecko/20100101 Firefox/65.0', 0),
(55, 'United States of America', 'Mountain View', '2020-02-27', '08:35:10', '66.249.64.173', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(56, 'United States of America', 'Los Angeles', '2020-02-27', '11:42:10', '173.82.16.125', '/index.php', '', 'http://www.seotechstore.com', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0', 0),
(57, 'Canada', 'Toronto', '2020-02-27', '11:45:41', '142.93.145.204', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36', 0),
(58, 'Canada', 'Toronto', '2020-02-27', '11:45:42', '159.203.12.19', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36', 0),
(59, 'Canada', 'Toronto', '2020-02-27', '11:45:43', '178.128.226.90', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 0),
(60, 'Canada', 'Toronto', '2020-02-27', '11:45:44', '138.197.170.220', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 0),
(61, 'Pakistan', 'Karachi', '2020-02-27', '22:28:07', '42.201.226.159', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 0),
(62, 'United States of America', 'Mountain View', '2020-02-27', '22:42:50', '66.249.93.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(63, 'United States of America', 'Mountain View', '2020-02-27', '22:42:56', '66.249.93.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36 Chrome-Lighthouse', 0),
(64, 'United States of America', 'Ashburn', '2020-02-27', '22:42:58', '18.206.99.105', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)', 0),
(65, 'Canada', 'Vancouver', '2020-02-27', '22:43:09', '204.187.14.71', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(66, 'United States of America', 'Mountain View', '2020-02-27', '23:30:17', '66.249.64.171', '/contacts.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(67, 'United States of America', 'San Francisco', '2020-02-27', '23:55:35', '199.16.157.182', '/index.php', '', 'no referer', 'Twitterbot/1.0', 0),
(68, 'United States of America', 'Mountain View', '2020-02-27', '23:55:40', '35.203.171.154', '/index.php', '', 'no referer', 'no User-agent', 0),
(69, 'Pakistan', 'Hyderabad', '2020-02-27', '23:56:16', '182.182.3.145', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:65.0) Gecko/20100101 Firefox/65.0', 0),
(70, 'United States of America', 'Cupertino', '2020-02-27', '23:58:38', '17.58.99.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)', 0),
(71, '', '', '2020-02-27', '23:58:42', '35.247.62.71', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0),
(72, '', '', '2020-02-27', '23:58:42', '35.233.212.235', '/index.php', '', 'no referer', 'no User-agent', 0),
(73, 'United States of America', 'Ashburn', '2020-02-27', '23:58:47', '54.158.235.11', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(74, 'Germany', 'Nuremberg', '2020-02-27', '23:59:17', '148.251.135.37', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; TrendsmapResolver/0.1)', 0),
(75, 'Germany', 'Falkenstein', '2020-02-27', '23:59:18', '94.130.167.105', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080208 Firefox/50.0.1', 0),
(76, 'United States of America', 'Ashburn', '2020-02-27', '23:59:47', '54.86.37.102', '/index.php', '', 'no referer', 'bitlybot/3.0 (+http://bit.ly/)', 0),
(77, 'United States of America', 'San Francisco', '2020-02-28', '00:00:00', '199.16.157.183', '/index.php', '', 'no referer', 'Twitterbot/1.0', 0),
(78, 'United States of America', 'Mountain View', '2020-02-28', '00:00:03', '35.247.76.213', '/index.php', '', 'no referer', 'no User-agent', 0),
(79, 'France', 'Roubaix', '2020-02-28', '00:00:05', '217.182.175.162', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36', 0),
(80, '', '', '2020-02-28', '00:00:06', '35.247.98.19', '/index.php', '', 'no referer', 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1', 0),
(81, '', '', '2020-02-28', '00:00:06', '72.42.240.90', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(82, 'United States of America', 'Ashburn', '2020-02-28', '00:00:10', '54.166.197.198', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(83, 'Germany', 'Falkenstein', '2020-02-28', '00:00:37', '94.130.167.94', '/index.php', '', 'https://bit.ly/2HXwxTM', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090403 Firefox/52.6.0', 0),
(84, 'United States of America', 'Ashburn', '2020-02-28', '00:00:45', '54.89.105.180', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(85, 'Germany', 'Falkenstein', '2020-02-28', '00:03:06', '94.130.53.35', '/index.php', '', 'no referer', 'datagnionbot (+http://www.datagnion.com/bot.html)', 0),
(86, 'United States of America', 'Mountain View', '2020-02-28', '00:03:27', '34.83.56.92', '/index.php', '', 'no referer', 'no User-agent', 0),
(87, 'France', 'Paris', '2020-02-28', '00:09:58', '195.154.172.137', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(88, 'France', 'Labege', '2020-02-28', '00:30:20', '185.82.148.10', '/index.php', '', 'no referer', 'Scoop.it', 0),
(89, 'United States of America', 'Prague', '2020-02-28', '02:42:49', '89.187.178.185', '/index.php', '', 'https://bit.ly/2HXwxTM', 'no User-agent', 0),
(90, 'United States of America', 'New York City', '2020-02-28', '03:32:43', '209.17.97.98', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(91, 'United States of America', 'Streamwood', '2020-02-28', '04:54:19', '199.244.88.131', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.47 Safari/537.36', 0),
(92, 'United States of America', 'Mountain View', '2020-02-28', '10:41:58', '66.249.93.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36 Chrome-Lighthouse', 0),
(93, 'United States of America', 'Mountain View', '2020-02-28', '10:41:58', '66.249.93.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(94, 'Pakistan', 'Hyderabad', '2020-02-28', '10:51:34', '182.182.93.201', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 0),
(95, 'Pakistan', 'Dera Murad Jamali', '2020-02-28', '10:53:38', '45.116.232.60', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 0),
(96, 'Canada', 'Vancouver', '2020-02-28', '10:54:10', '204.187.14.78', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(97, 'Germany', 'Frankfurt am Main', '2020-02-28', '10:54:12', '52.29.177.64', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)', 0),
(98, 'United States of America', 'Mountain View', '2020-02-28', '10:54:15', '66.249.93.45', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(99, 'United States of America', 'San Francisco', '2020-02-28', '11:01:31', '207.241.229.160', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36', 0),
(100, 'Pakistan', 'Digri', '2020-02-28', '11:01:44', '182.182.47.136', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 0),
(101, 'Germany', 'Frankfurt am Main', '2020-02-28', '11:04:23', '18.185.47.251', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)', 0),
(102, 'Canada', 'Vancouver', '2020-02-28', '11:04:24', '204.187.14.77', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64; GTmetrix https://gtmetrix.com/) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 0),
(103, 'United States of America', 'Houston', '2020-02-28', '19:17:38', '209.17.96.90', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(104, 'Russian Federation', 'Moscow', '2020-02-28', '20:39:25', '194.67.93.10', '/index.php', '', 'no referer', 'no User-agent', 0),
(105, 'United States of America', 'Portland', '2020-02-28', '20:58:44', '34.213.98.16', '/index.php', '', 'no referer', 'SMUrlExpander', 0),
(106, 'United States of America', 'Ashburn', '2020-02-28', '23:46:33', '174.129.117.99', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(107, 'Germany', 'Gunzenhausen', '2020-02-28', '23:47:00', '94.130.167.122', '/index.php', '', 'https://bit.ly/2HXwxTM', 'Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.4) Gecko/20070621 Firefox/52.4.1', 0),
(108, 'United States of America', 'New York City', '2020-02-28', '23:52:59', '192.241.133.70', '/index.php', '', 'no referer', 'Upflow/1.0', 0),
(109, 'United States of America', 'Ashburn', '2020-02-29', '00:17:22', '3.217.206.170', '/index.php', '', 'no referer', 'no User-agent', 0),
(110, 'United States of America', 'Lancaster', '2020-02-29', '00:36:52', '73.187.223.13', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 9; SM-A205U Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36 OPT/2.3', 0),
(111, 'United States of America', 'Mountain View', '2020-02-29', '01:00:20', '66.249.64.171', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(112, 'United States of America', 'Portland', '2020-02-29', '02:01:26', '34.219.93.255', '/index.php', '', 'no referer', 'SMUrlExpander', 0),
(113, 'France', 'Roubaix', '2020-02-29', '03:35:52', '151.80.39.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; AhrefsBot/6.1; +http://ahrefs.com/robot/)', 0),
(114, 'United States of America', 'Portland', '2020-02-29', '04:17:29', '34.215.134.65', '/index.php', '', 'no referer', 'Java/1.8.0_141', 0),
(115, 'Ireland', 'Dublin', '2020-02-29', '09:21:21', '54.229.173.182', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BuiltWith/1.0; +http://builtwith.com/biup) Chrome/74.0.3729.131 Safari/537.36', 0),
(116, 'United States of America', 'New York City', '2020-02-29', '13:33:51', '209.17.97.98', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(117, 'United States of America', 'Newburyport', '2020-02-29', '21:24:31', '5.255.250.136', '/content-writing.php', 'sub-category=Essay+Writing', 'no referer', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 0),
(118, 'Pakistan', 'Tando Allahyar', '2020-02-29', '22:41:31', '182.182.97.38', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:65.0) Gecko/20100101 Firefox/65.0', 0),
(119, 'Pakistan', 'Thatta', '2020-02-29', '22:53:38', '182.182.22.96', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:65.0) Gecko/20100101 Firefox/65.0', 0),
(120, 'United States of America', 'Portland', '2020-02-29', '22:54:12', '54.184.163.66', '/index.php', '', 'no referer', 'SMUrlExpander', 0),
(121, 'United States of America', 'San Francisco', '2020-02-29', '22:59:33', '199.16.157.180', '/index.php', '', 'no referer', 'Twitterbot/1.0', 0),
(122, 'United States of America', 'Cupertino', '2020-02-29', '22:59:33', '17.58.99.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)', 0),
(123, '', '', '2020-02-29', '22:59:35', '35.197.32.45', '/index.php', '', 'no referer', 'no User-agent', 0),
(124, '', '', '2020-02-29', '22:59:37', '217.182.175.162', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36', 0),
(125, 'Ireland', 'Dublin', '2020-02-29', '22:59:39', '54.78.110.228', '/index.php', '', 'no referer', 'Twingly Recon-Klondike/1.0 (+https://developer.twingly.com)', 0),
(126, 'United States of America', 'Ashburn', '2020-02-29', '22:59:42', '34.229.50.1', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(127, 'United States of America', 'Ashburn', '2020-02-29', '22:59:47', '34.206.217.125', '/index.php', '', 'no referer', 'Dispatch/0.11.1-SNAPSHOT', 0),
(128, 'Germany', 'Gunzenhausen', '2020-02-29', '22:59:59', '94.130.167.93', '/index.php', '', 'https://bit.ly/32B9OX2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20061201 Firefox/53.0', 0),
(129, 'Germany', 'Nuremberg', '2020-02-29', '23:00:01', '144.76.94.114', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; um-LN/1.0; mailto: techinfo@ubermetrics-technologies.com; Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1', 0),
(130, 'Germany', 'Nuremberg', '2020-02-29', '23:00:05', '148.251.135.37', '/index.php', '', 'https://bit.ly/32B9OX2', 'Mozilla/5.0 (compatible; TrendsmapResolver/0.1)', 0),
(131, '', '', '2020-02-29', '23:04:54', '35.247.33.24', '/index.php', '', 'http://seotechstore.com', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0),
(132, 'United States of America', 'Mountain View', '2020-02-29', '23:04:54', '35.247.33.24', '/index.php', '', 'http://seotechstore.com', 'no User-agent', 0),
(133, '', '', '2020-02-29', '23:04:56', '104.198.97.107', '/index.php', '', 'no referer', 'no User-agent', 0),
(134, '', '', '2020-02-29', '23:04:56', '104.198.97.107', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0),
(135, '', '', '2020-02-29', '23:04:56', '104.198.97.107', '/index.php', '', 'no referer', 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1', 0),
(136, '', '', '2020-02-29', '23:04:56', '104.198.97.107', '/index.php', '', 'no referer', 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1', 0),
(137, '', '', '2020-02-29', '23:04:56', '104.198.97.107', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 0),
(138, 'United States of America', 'Ashburn', '2020-02-29', '23:05:33', '54.156.175.129', '/index.php', '', 'no referer', 'Jakarta Commons-HttpClient/3.1', 0),
(139, 'United States of America', 'Mountain View', '2020-02-29', '23:14:42', '35.187.132.61', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 AppEngine-Google; (+http://code.google.com/appengine; appid: s~feedly-nikon3)', 0),
(140, 'United States of America', 'Mountain View', '2020-02-29', '23:14:43', '66.102.8.123', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Google-AMPHTML)', 0),
(141, 'United States of America', 'New York City', '2020-02-29', '23:25:03', '192.241.133.70', '/index.php', '', 'no referer', 'Upflow/1.0', 0),
(142, 'France', 'Paris', '2020-03-01', '02:46:39', '195.154.172.137', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(143, 'France', 'Roubaix', '2020-03-01', '03:04:19', '151.80.39.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; AhrefsBot/6.1; +http://ahrefs.com/robot/)', 0),
(144, 'France', 'Labege', '2020-03-01', '03:34:47', '185.82.148.10', '/index.php', '', 'no referer', 'Scoop.it', 0),
(145, 'France', 'Paris', '2020-03-01', '03:34:48', '212.129.11.42', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(146, 'United States of America', 'Washington', '2020-03-01', '04:32:06', '107.172.128.194', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.64 (Edition Campaign 34)', 0),
(147, 'United States of America', 'New York City', '2020-03-01', '04:32:08', '192.3.4.208', '/index.php', '', 'https://www.seotechstore.com/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.64 (Edition Campaign 34)', 0),
(148, 'United States of America', 'Mountain View', '2020-03-01', '05:29:01', '66.249.64.187', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(149, 'Germany', 'Nuremberg', '2020-03-01', '09:10:57', '46.4.33.48', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.1) Gecko/2008070208', 0),
(150, 'France', 'Paris', '2020-03-01', '13:16:30', '195.154.179.93', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(151, 'Germany', 'Aachen', '2020-03-01', '20:09:45', '137.226.113.28', '/index.php', '', 'no referer', 'Mozilla/5.0 zgrab/0.x (compatible; Researchscan/t12ca; +http://researchscan.comsys.rwth-aachen.de)', 0),
(152, 'United States of America', 'Portland', '2020-03-01', '23:52:39', '54.184.163.66', '/index.php', '', 'no referer', 'SMUrlExpander', 0),
(153, 'United States of America', 'Chicago', '2020-03-02', '06:35:32', '181.215.122.132', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:55.0) Gecko/20100101 Firefox/55.0', 0),
(154, 'United States of America', 'Mountain View', '2020-03-02', '10:42:07', '66.249.93.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(155, 'United States of America', 'Mountain View', '2020-03-02', '10:42:07', '66.249.93.45', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36 Chrome-Lighthouse', 0),
(156, 'United States of America', 'Mountain View', '2020-03-02', '10:49:00', '66.249.93.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(157, 'United States of America', 'Portland', '2020-03-02', '13:08:20', '54.244.56.147', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(158, 'France', 'Labege', '2020-03-02', '14:44:34', '185.82.148.10', '/index.php', '', 'no referer', 'Scoop.it', 0),
(159, 'France', 'Paris', '2020-03-02', '14:44:43', '212.129.11.42', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(160, 'Pakistan', 'Hyderabad', '2020-03-02', '22:14:37', '182.182.82.29', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:65.0) Gecko/20100101 Firefox/65.0', 0),
(161, 'Germany', 'Aachen', '2020-03-02', '23:00:42', '137.226.113.26', '/index.php', '', 'no referer', 'Mozilla/5.0 zgrab/0.x (compatible; Researchscan/t13rl; +http://researchscan.comsys.rwth-aachen.de)', 0),
(162, 'United States of America', 'Mountain View', '2020-03-03', '02:53:26', '66.249.64.175', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(163, 'United States of America', 'Portland', '2020-03-03', '05:17:21', '34.215.134.65', '/index.php', '', 'no referer', 'Java/1.8.0_141', 0),
(164, 'Germany', 'Aachen', '2020-03-03', '06:51:52', '137.226.113.34', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:50.0) Gecko/20100101 Firefox/50.0', 0),
(165, 'France', 'Labege', '2020-03-03', '11:42:29', '185.82.148.10', '/index.php', '', 'no referer', 'Scoop.it', 0),
(166, 'France', 'Paris', '2020-03-03', '11:42:31', '195.154.179.93', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(167, 'France', 'Paris', '2020-03-03', '12:12:55', '212.129.57.169', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(168, 'France', 'Paris', '2020-03-03', '14:15:09', '195.154.172.143', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(169, 'United States of America', 'Ashburn', '2020-03-03', '16:23:05', '34.228.212.235', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 0),
(170, 'United States of America', 'Chicago', '2020-03-03', '20:29:57', '173.252.95.39', '/index.php', '', 'no referer', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 0),
(171, 'United States of America', 'Chicago', '2020-03-03', '20:30:03', '173.252.95.26', '/index.php', '', 'no referer', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 0),
(172, 'United States of America', 'Chicago', '2020-03-03', '20:30:34', '173.252.95.21', '/contacts.php', '', 'no referer', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 0),
(173, 'United States of America', 'Chicago', '2020-03-03', '20:30:38', '173.252.95.4', '/about-us.php', '', 'no referer', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 0),
(174, 'United States of America', 'Menlo Park', '2020-03-03', '21:09:34', '66.220.149.15', '/index.php', '', 'no referer', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 0),
(175, 'United States of America', 'Menlo Park', '2020-03-03', '21:10:46', '66.220.149.19', '/about-us.php', '', 'no referer', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 0),
(176, 'United States of America', 'Portland', '2020-03-03', '21:33:26', '54.184.163.66', '/index.php', '', 'no referer', 'SMUrlExpander', 0),
(177, 'United States of America', 'New York City', '2020-03-04', '07:09:24', '209.17.97.42', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(178, 'United States of America', 'Mountain View', '2020-03-04', '10:42:47', '66.249.93.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36 Chrome-Lighthouse', 0),
(179, 'United States of America', 'Mountain View', '2020-03-04', '10:42:48', '66.249.93.43', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36 Chrome-Lighthouse', 0),
(180, 'Russian Federation', 'Moscow', '2020-03-04', '12:13:49', '213.159.213.236', '/index.php', '', 'no referer', 'Internet-structure-research-project-bot', 0),
(181, 'United States of America', 'Houston', '2020-03-04', '15:32:59', '209.17.96.186', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(182, 'United States of America', 'Mountain View', '2020-03-04', '20:26:41', '66.249.64.173', '/graphics-designing.php', 'sub-category=Logo+Design', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(183, 'Pakistan', 'Hyderabad', '2020-03-05', '00:29:49', '182.182.115.93', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0', 0),
(184, 'United States of America', 'Newark', '2020-03-05', '01:46:40', '66.175.208.248', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0),
(185, 'United States of America', 'Boydton', '2020-03-05', '02:11:57', '40.77.167.111', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(186, 'France', 'Labege', '2020-03-05', '02:38:33', '185.82.148.10', '/index.php', '', 'no referer', 'Scoop.it', 0),
(187, 'France', 'Paris', '2020-03-05', '02:38:34', '195.154.172.53', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(188, 'France', 'Roubaix', '2020-03-05', '04:20:36', '151.80.39.47', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; AhrefsBot/6.1; +http://ahrefs.com/robot/)', 0),
(189, 'United States of America', 'Mountain View', '2020-03-05', '10:02:11', '66.249.79.37', '/content-writing.php', 'sub-category=Essay+Writing', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(190, 'United States of America', 'Mountain View', '2020-03-05', '15:47:58', '66.249.79.33', '/seo.php', 'sub-category=Web+2.0+Creation', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(191, 'United States of America', 'Mountain View', '2020-03-05', '15:57:49', '66.249.79.61', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(192, 'France', 'Paris', '2020-03-05', '19:05:28', '212.129.57.169', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(193, 'France', 'Roubaix', '2020-03-05', '19:46:53', '5.196.87.151', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; AhrefsBot/6.1; +http://ahrefs.com/robot/)', 0),
(194, 'United States of America', 'Mountain View', '2020-03-05', '19:51:18', '66.249.84.230', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko; Google Page Speed Insights) Chrome/41.0.2272.118 Safari/537.36', 0),
(195, 'United States of America', 'Mountain View', '2020-03-05', '21:20:01', '66.249.79.43', '/seo.php', 'sub-category=High+DR+Blog+Comments', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(196, 'Pakistan', 'Mithi', '2020-03-05', '21:22:42', '182.182.53.161', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0', 0),
(197, 'United States of America', 'Ashburn', '2020-03-05', '21:24:40', '3.94.163.211', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'bitlybot/3.0 (+http://bit.ly/)', 0),
(198, 'United States of America', 'San Francisco', '2020-03-05', '21:26:06', '199.16.157.183', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'Twitterbot/1.0', 0),
(199, 'United States of America', 'Cupertino', '2020-03-05', '21:26:08', '17.58.99.43', '/content-writing.php', 'sub-category=Content%20Writing', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)', 0),
(200, 'United States of America', 'Mountain View', '2020-03-05', '21:26:10', '35.230.124.240', '/index.php', '', 'no referer', 'no User-agent', 0),
(201, 'Germany', 'Falkenstein', '2020-03-05', '21:26:26', '195.201.166.168', '/content-writing.php', '', 'https://bit.ly/3axsny2', 'Mozilla/5.0 (compatible; TrendsmapResolver/0.1)', 0),
(202, 'Germany', 'Gunzenhausen', '2020-03-05', '21:26:43', '94.130.167.88', '/content-writing.php', 'sub-category=Content+Writing', 'https://bit.ly/3axsny2', 'Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.11) Gecko/20070327 Ubuntu/dapper-security Firefox/51.0', 0),
(203, 'Russian Federation', 'Moscow', '2020-03-05', '21:28:04', '95.163.105.233', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.205 Safari/534.16', 0),
(204, 'United States of America', 'Mountain View', '2020-03-05', '21:37:42', '35.197.123.70', '/index.php', '', 'no referer', 'no User-agent', 0),
(205, 'United States of America', 'Mountain View', '2020-03-05', '21:48:57', '66.249.79.46', '/seo.php', 'sub-category=High+TF+Blog+Comments', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(206, 'United States of America', 'Mountain View', '2020-03-05', '21:49:02', '66.249.79.40', '/seo.php', 'sub-category=High+DA+Blog+Comments', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(207, 'United States of America', 'San Francisco', '2020-03-06', '00:31:23', '199.16.157.180', '/index.php', '', 'no referer', 'Twitterbot/1.0', 0),
(208, 'United States of America', 'Mountain View', '2020-03-06', '01:22:13', '66.249.79.61', '/seo.php', 'sub-category=DoFollow+Blog+Comments', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(209, 'Canada', 'Beauharnois', '2020-03-06', '01:33:35', '198.27.85.233', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.5; rv:15.0) Gecko/20100101 Firefox/15.0.1', 0),
(210, 'United States of America', 'Mountain View', '2020-03-06', '03:15:25', '66.249.79.37', '/about-us.php', '', 'no referer', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(211, 'United States of America', 'Mountain View', '2020-03-06', '08:19:29', '66.249.79.52', '/login.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(212, 'France', 'Roubaix', '2020-03-06', '10:10:39', '217.182.175.162', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36', 0),
(213, 'Russian Federation', 'Saint Petersburg', '2020-03-06', '18:26:38', '31.184.219.72', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:54.0) Gecko/20100101 Firefox/73.0', 0),
(214, 'United States of America', 'Redmond', '2020-03-06', '21:04:27', '157.55.39.186', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(215, 'Pakistan', 'Mirpur Khas', '2020-03-06', '22:30:16', '182.182.15.165', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0', 0),
(216, 'United States of America', 'Mountain View', '2020-03-07', '01:50:30', '66.249.79.33', '/graphics-designing.php', 'sub-category=Infograhic+Submission', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(217, 'Netherlands', 'Haarlem', '2020-03-07', '02:16:50', '51.15.109.255', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 0),
(218, 'United States of America', 'New York City', '2020-03-07', '03:00:12', '209.17.97.58', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(219, 'Luxembourg', 'Bissen', '2020-03-07', '03:42:23', '104.244.72.115', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0),
(220, 'United States of America', 'Redmond', '2020-03-07', '04:03:15', '157.55.39.186', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(221, 'Germany', 'Limburg an der Lahn', '2020-03-07', '09:16:05', '54.36.113.142', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:71.0) Gecko/20100101 Firefox/71.0', 0),
(222, 'United States of America', 'Boydton', '2020-03-07', '15:43:52', '40.77.167.58', '/about-us.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(223, 'Switzerland', 'Zurich', '2020-03-07', '16:14:02', '84.39.112.83', '/register.php', '', 'https://www.seotechstore.com/register.php', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.170 Safari/537.36 OPR/53.0.2907.99', 0),
(224, 'United States of America', 'Houston', '2020-03-07', '16:41:18', '209.17.96.202', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(225, 'France', 'Labege', '2020-03-08', '01:23:51', '185.82.148.10', '/index.php', '', 'no referer', 'Scoop.it', 0);
INSERT INTO `visitor_tracker` (`id`, `country`, `city`, `date`, `time`, `ip`, `web_page`, `query_string`, `http_referer`, `http_user_agent`, `is_bot`) VALUES
(226, 'France', 'Paris', '2020-03-08', '01:24:01', '195.154.172.137', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(227, 'Switzerland', 'Zurich', '2020-03-08', '02:28:59', '84.39.112.83', '/register.php', '', 'http://www.seotechstore.com/register.php', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', 0),
(228, 'United States of America', 'San Francisco', '2020-03-08', '12:45:39', '54.183.250.67', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BuiltWith/1.0; +http://builtwith.com/biup) Chrome/74.0.3729.131 Safari/537.36', 0),
(229, 'Germany', 'Aachen', '2020-03-08', '15:56:05', '137.226.113.28', '/index.php', '', 'no referer', 'Mozilla/5.0 zgrab/0.x (compatible; Researchscan/t12ca; +http://researchscan.comsys.rwth-aachen.de)', 0),
(230, 'United States of America', 'Redmond', '2020-03-08', '22:21:44', '207.46.13.120', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(231, 'Russian Federation', 'Saint Petersburg', '2020-03-08', '23:01:21', '31.184.219.72', '/index.php', 'author=1', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:54.0) Gecko/20100101 Firefox/73.0', 0),
(232, 'Pakistan', 'Hyderabad', '2020-03-08', '23:15:13', '182.182.26.119', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0', 0),
(233, 'France', 'Paris', '2020-03-09', '01:20:41', '212.129.11.42', '/content-writing.php', 'sub-category=Content+Writing', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) wpif Safari/537.21', 0),
(234, 'United States of America', 'Mountain View', '2020-03-09', '08:26:06', '66.249.79.37', '/seo.php', 'sub-category=Web+2.0+Creation', 'no referer', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(235, 'France', 'Labege', '2020-03-09', '09:11:18', '185.82.148.10', '/index.php', '', 'no referer', 'Scoop.it', 0),
(236, 'United States of America', 'Newburyport', '2020-03-09', '09:24:48', '5.255.250.110', '/seo.php', 'sub-category=High+DR+Blog+Comments', 'no referer', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 0),
(237, 'United States of America', 'Redmond', '2020-03-09', '13:28:56', '207.46.13.120', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(238, 'Pakistan', 'Dera Murad Jamali', '2020-03-09', '17:10:09', '45.116.232.3', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 0),
(239, 'Germany', 'Munich', '2020-03-09', '21:42:20', '138.246.253.15', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.85 Safari/537.36', 0),
(240, 'Germany', 'Aachen', '2020-03-10', '01:14:15', '137.226.113.26', '/index.php', '', 'no referer', 'Mozilla/5.0 zgrab/0.x (compatible; Researchscan/t13rl; +http://researchscan.comsys.rwth-aachen.de)', 0),
(241, 'United States of America', 'Boydton', '2020-03-10', '05:28:24', '40.77.167.53', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(242, 'United States of America', 'Mountain View', '2020-03-10', '12:08:25', '66.249.79.61', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(243, 'United States of America', 'Mountain View', '2020-03-10', '12:15:38', '66.249.79.33', '/index.php', '', 'no referer', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 0),
(244, 'Pakistan', 'Hyderabad', '2020-03-10', '14:23:41', '182.182.117.15', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 0),
(245, 'United States of America', 'Newburyport', '2020-03-10', '14:56:54', '77.88.5.61', '/seo.php', 'sub-category=DoFollow+Blog+Comments', 'no referer', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 0),
(246, 'United States of America', 'Portland', '2020-03-10', '16:47:06', '44.234.38.57', '/index.php', '', 'no referer', 'Go-http-client/1.1', 0),
(247, 'United States of America', 'Houston', '2020-03-10', '23:57:51', '209.17.96.98', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(248, 'United States of America', 'Houston', '2020-03-11', '04:42:16', '209.17.96.130', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 0),
(249, 'Russian Federation', 'Moscow', '2020-03-11', '05:13:08', '194.67.93.10', '/index.php', '', 'no referer', 'no User-agent', 0),
(250, 'United States of America', 'Redmond', '2020-03-11', '05:38:03', '157.55.39.149', '/index.php', '', 'no referer', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 0),
(251, 'United States of America', 'Seattle', '2020-03-11', '09:20:17', '64.246.165.160', '/index.php', '', 'no referer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:59.0) Gecko/20100101 Firefox/59.0', 0),
(252, 'United States of America', 'Miami', '2020-03-11', '19:26:15', '23.245.153.94', '/index.php', '', 'no referer', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.64 (Edition Campaign 34)', 0),
(253, 'United States of America', 'Hockessin', '2020-03-11', '19:26:17', '64.94.211.221', '/index.php', '', 'https://www.seotechstore.com/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.64 (Edition Campaign 34)', 0),
(254, 'United States of America', 'Mountain View', '2020-03-11', '20:15:02', '35.195.184.194', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/71.0.3578.80 Chrome/71.0.3578.80 Safari/537.36', 0),
(255, 'United States of America', 'Mountain View', '2020-03-11', '20:18:06', '107.178.204.244', '/index.php', '', 'no referer', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/80.0.3987.0 Safari/537.36', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `paypalpayments`
--
ALTER TABLE `paypalpayments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `paypaltransaction`
--
ALTER TABLE `paypaltransaction`
  ADD PRIMARY KEY (`PaypalTransaction_ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Service_ID`);

--
-- Indexes for table `subscribefortips`
--
ALTER TABLE `subscribefortips`
  ADD PRIMARY KEY (`SubscribeForTips_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `visitor_tracker`
--
ALTER TABLE `visitor_tracker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypalpayments`
--
ALTER TABLE `paypalpayments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypaltransaction`
--
ALTER TABLE `paypaltransaction`
  MODIFY `PaypalTransaction_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subscribefortips`
--
ALTER TABLE `subscribefortips`
  MODIFY `SubscribeForTips_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitor_tracker`
--
ALTER TABLE `visitor_tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
