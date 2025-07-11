-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 09:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocar`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_img`
--

CREATE TABLE `car_img` (
  `id` int(11) NOT NULL,
  `car_list_id` int(11) NOT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_img`
--

INSERT INTO `car_img` (`id`, `car_list_id`, `photos`, `created_at`, `updated_at`) VALUES
(100, 34, '1750252650_car13_(1).jpg', '2025-06-18 13:17:30', '2025-06-18 13:17:30'),
(101, 34, '1750252650_car13_(1)1.jpg', '2025-06-18 13:17:30', '2025-06-18 13:17:30'),
(102, 34, '1750252650_car13_(1)2.jpg', '2025-06-18 13:17:30', '2025-06-18 13:17:30'),
(108, 37, '1750616288_Herunterladen.jpeg', '2025-06-22 18:18:08', '2025-06-22 18:18:08'),
(111, 39, '1750679992_car3.jpg', '2025-06-23 11:59:52', '2025-06-23 11:59:52'),
(112, 40, '1750685665_car14.jpg', '2025-06-23 13:34:25', '2025-06-23 13:34:25'),
(113, 41, '1750763507_car19.jpg', '2025-06-24 11:11:47', '2025-06-24 11:11:47'),
(114, 41, '1750763507_car191.jpg', '2025-06-24 11:11:47', '2025-06-24 11:11:47'),
(115, 41, '1750763507_car192.jpg', '2025-06-24 11:11:47', '2025-06-24 11:11:47'),
(116, 42, '1751265061_car14.jpg', '2025-06-30 06:31:01', '2025-06-30 06:31:01'),
(117, 42, '1751265061_car141.jpg', '2025-06-30 06:31:01', '2025-06-30 06:31:01'),
(118, 42, '1751265061_car142.jpg', '2025-06-30 06:31:01', '2025-06-30 06:31:01'),
(119, 37, '1751283628_car3.jpg', '2025-06-30 11:40:28', '2025-06-30 11:40:28'),
(120, 37, '1751283628_car31.jpg', '2025-06-30 11:40:28', '2025-06-30 11:40:28'),
(121, 37, '1751283628_car32.jpg', '2025-06-30 11:40:28', '2025-06-30 11:40:28'),
(122, 49, '1751284918_car6_(1).jpg', '2025-06-30 12:01:58', '2025-06-30 12:01:58'),
(123, 49, '1751284918_car6_(1)1.jpg', '2025-06-30 12:01:58', '2025-06-30 12:01:58'),
(124, 51, '1751365671_car19.jpg', '2025-07-01 10:27:51', '2025-07-01 10:27:51'),
(125, 51, '1751365671_car191.jpg', '2025-07-01 10:27:51', '2025-07-01 10:27:51'),
(126, 52, '1751367030_car13_(1).jpg', '2025-07-01 10:50:30', '2025-07-01 10:50:30'),
(127, 52, '1751367030_car13_(1)1.jpg', '2025-07-01 10:50:30', '2025-07-01 10:50:30'),
(128, 53, '1751367726_car1.jpg', '2025-07-01 11:02:06', '2025-07-01 11:02:06'),
(129, 53, '1751367726_car11.jpg', '2025-07-01 11:02:06', '2025-07-01 11:02:06'),
(130, 53, '1751367726_car12.jpg', '2025-07-01 11:02:06', '2025-07-01 11:02:06'),
(131, 54, '1751441859_car6_(1).jpg', '2025-07-02 07:37:39', '2025-07-02 07:37:39'),
(132, 54, '1751441859_car6_(1)1.jpg', '2025-07-02 07:37:39', '2025-07-02 07:37:39'),
(133, 55, '1751869710_car14.jpg', '2025-07-07 06:28:34', '2025-07-07 06:28:34'),
(134, 55, '1751869710_car141.jpg', '2025-07-07 06:28:34', '2025-07-07 06:28:34'),
(135, 56, '1751870121_car29_(1).jpg', '2025-07-07 06:35:21', '2025-07-07 06:35:21'),
(136, 56, '1751870121_car29_(1)1.jpg', '2025-07-07 06:35:21', '2025-07-07 06:35:21'),
(137, 57, '1751878503_car9_(1).jpg', '2025-07-07 08:55:03', '2025-07-07 08:55:03'),
(138, 57, '1751878503_car9_(1)1.jpg', '2025-07-07 08:55:03', '2025-07-07 08:55:03'),
(139, 58, '1751885735_car1.jpg', '2025-07-07 10:55:35', '2025-07-07 10:55:35'),
(140, 58, '1751885735_car11.jpg', '2025-07-07 10:55:35', '2025-07-07 10:55:35'),
(141, 58, '1751885735_car12.jpg', '2025-07-07 10:55:35', '2025-07-07 10:55:35'),
(142, 58, '1751885735_car13.jpg', '2025-07-07 10:55:35', '2025-07-07 10:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `car_list`
--

CREATE TABLE `car_list` (
  `id` int(11) NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `make` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `mileage` int(50) NOT NULL,
  `vehicle_condition` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float(100,2) NOT NULL,
  `total_price` float(100,2) NOT NULL,
  `tax` float(100,2) NOT NULL,
  `fuel_type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` int(50) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownership` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `euro_norm` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co2_emission` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_negotiable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emission_certificate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `four_by_four` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winter_tires` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigation_system` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_sensors` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mfk_date` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuv_date` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comfort_and_interior` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `safety_and_assistance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lighting_and_visibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `multimedia_and_navigation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_and_drive_technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exterior_and_design` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_features_and_extras` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_list`
--

INSERT INTO `car_list` (`id`, `slug`, `title`, `vehicle_type`, `cat_id`, `make`, `model`, `year`, `mileage`, `vehicle_condition`, `price`, `total_price`, `tax`, `fuel_type`, `transmission`, `km`, `location`, `state`, `description`, `variant`, `color`, `ownership`, `euro_norm`, `co2_emission`, `is_negotiable`, `zipcode`, `emission_certificate`, `four_by_four`, `winter_tires`, `ac_type`, `navigation_system`, `parking_sensors`, `mfk_date`, `tuv_date`, `comfort_and_interior`, `safety_and_assistance`, `lighting_and_visibility`, `multimedia_and_navigation`, `engine_and_drive_technology`, `exterior_and_design`, `other_features_and_extras`, `status`, `added_by`, `created_at`, `updated_at`) VALUES
(34, '1-29', '', '2', 0, '1', '1', 2004, 22, 'New', 1000000.00, 0.00, 0.00, 'Petrol', 'Automatic', 6000000, '1', '1', 'Test Dealer', '6', 'Black', '2nd', '5 Euro', '554', 'no', '451020', '', 'yes', 'Yes', 'Manual AC', 'no', 'Rear Only', '0000-00', '0000-00', '', '', '', '', '', '', '', '3', 1, '2025-06-18 13:17:30', '2025-06-18 13:17:30'),
(37, 'test-car', 'Test Car', '2', 0, '1', '1', 2000, 33455, 'Good', 20998.00, 0.00, 0.00, 'Diesel ', 'Automatic', 23123, '2', '1', 'testtt', '6', 'Red', '2nd', '4 Euro', '551', 'yes', '451020', '', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Rear Only', '2025-06', '2025-06', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 1, '2025-06-22 18:18:08', '2025-06-22 18:18:08'),
(39, '1', '', '2', 0, '1', '1', 2013, 21, 'New', 50000.00, 0.00, 0.00, 'Petrol', 'Manual', 75000, 'Indore', 'Madhya Pradesh', 'tffyfyg', '6', 'Black', '1st', '5 Euro', '554', 'no', '5445545555', '', '', '', '', '', '', '0000-00', '0000-00', '', '', '', '', '', '', '', '0', 1, '2025-06-23 11:59:52', '2025-06-23 11:59:52'),
(40, '1-91', '', '2', 0, '1', '1', 2015, 21, 'new', 100000000.00, 0.00, 0.00, 'Diesel ', 'Manual', 10000, '1', '1', 'tdggdfghfhfhf jgjg gfg ghh', '6', 'Black', '1st', '5 Euro', '554', 'yes', '451020', '', 'yes', 'Yes', 'Manual AC', 'yes', '', '2025-06', '2025-06', '', '', '', '', '', '', '', '0', 1, '2025-06-23 13:34:25', '2025-06-23 13:34:25'),
(41, 'new-title', 'new title', '2', 0, '1', '1', 2024, 21, 'old', 1000000.00, 0.00, 0.00, 'Petrol', 'Automatic', 6000000, '1', '1', 'New Vehicle', '6', 'Black', '1st', '5 Euro', '554', 'yes', '451020', '', 'no', 'Yes', 'Manual AC', 'no', 'Rear Only', '2025-06', '2025-06', '', '', '', '', '', '', '', '0', 1, '2025-06-24 11:11:47', '2025-06-24 11:11:47'),
(42, 'new-title-85', 'new title ', '2', 0, '1', '1', 2019, 21, 'Good', 1000000.00, 0.00, 0.00, 'Diesel ', 'Automatic', 6500000, '1', '1', 'Test all featuers', '6', 'Black', '2nd', '5 Euro', '551', 'no', '451020', '', '', 'Yes', '', '', '', '2025-06', '2025-06', '[\"AC\",\"Heated seats (front and back)\",\"Lumbar support\",\"Ambient lighting\",\"Heated steering wheel\"]', '[\"Emergency brake assist\",\"Adaptive cruise control\",\"Driver fatigue alert\",\"Night vision camera\",\"Head-Up display\"]', '[\"Daytime running lights\",\"Tinted rear windows\",\"Power-folding heated mirrors\"]', '[\"virtual cockpit\",\"Sound system\",\"Bluetooth \",\"USB \",\"AUX\",\"Voice control\",\"DAB+ \",\"WiFi hotspot\"]', '[\"All-wheel drive \",\"Front-wheel drive \",\"Automatic gearboxes\",\"Eco Drive mode\",\"Sport Drive mode\",\"Plug-in Hybrid\",\"Mild Hybrid\",\"Regenerative braking\"]', '[\"Alloy wheels\",\"Sports kit \",\"Chrome or black styling packages\",\"Lowered ride height\",\"Painted bumpers\"]', '[\"Long-distance vehicle\",\"First owner\",\"Leasing available\",\" Used car warranty\",\"Spare tires\",\"Runflats\",\"Winter tires\"]', '0', 1, '2025-06-30 06:31:01', '2025-06-30 06:31:01'),
(49, 'test-car-88', 'Test Car', '2', 0, '1', '1', 2000, 33455, 'Good', 20998.00, 0.00, 0.00, 'Diesel ', 'Automatic', 23123, '2', '1', 'testtt', '6', 'Red', '2nd', '4 Euro', '551', 'yes', '451020', '', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Rear Only', '2025-06', '2025-06', '[\"AC\",\"Heated steering wheel\",\"Massage seats\",\"Push Start\",\"Panoramic roof\"]', '[\"ABS, ESP (traction\\/stability control)\",\"Adaptive cruise control\",\"Head-Up display\",\"Blind-spot warning\",\"360\\u00b0 camera\"]', '[\"LED \\/ Matrix LED \\/ Xenon \\/ Laser lights\",\"Rain sensor wipers \\/ Auto lights\"]', '[\"Apple CarPlay & Android Auto\",\"Voice control\"]', '[\"Sport Drive mode\",\"Hybrid \",\"fixed Tow bar\"]', '[\"Spoilers\",\"matte paint options\",\"Contrasting roof\"]', '[\"Non-smoker vehicle\",\"Emergency kit\",\"Bike rack\",\"Summer tires\"]', '0', 1, '2025-06-30 12:01:58', '2025-06-30 12:01:58'),
(51, 'abc', 'abc', '2', 0, '1', '1', 2013, 21, 'Export', 950000.00, 0.00, 0.00, 'Diesel ', 'Automatic', 6500000, '2', '1', 'Plan Test', '6', 'White', '2nd', '4 Euro', '551', 'no', '451020', '', '', 'Yes', 'Automatic AC', '', 'Rear Only', '2025-07', '2025-07', '[\"Lumbar support\",\"Power windows\",\"Push Start\"]', '[\"Driver fatigue alert\",\"360\\u00b0 camera\",\"Auto parking\"]', '[\"Daytime running lights\",\"Tinted rear windows\",\"Auto-dimming rearview \\/ side mirrors\",\"Power-folding heated mirrors\"]', '[\"virtual cockpit\",\"Touchscreen display\",\"AUX\",\"Voice control\",\"Rear seat screens\"]', '[\"All-wheel drive \",\"Rear-wheel drive\",\"Automatic gearboxes\",\"Comfort Drive mode\",\"Air suspension\",\"Hybrid \",\"fixed Tow bar\",\"removable Tow bar\"]', '[\"Alloy wheels\",\"Sport suspension\",\"Lowered ride height\",\"Running boards (for SUVs)\",\"Metallic\",\"matte paint options\",\"Contrasting roof\"]', '[\"Non-smoker vehicle\",\"Full service history\",\"Garage kept\",\"Long-distance vehicle\",\"First owner\",\"Warranty\",\" Used car warranty\",\"Spare tires\",\"Runflats\",\"Emergency kit\"]', '0', 5, '2025-07-01 10:27:51', '2025-07-01 10:27:51'),
(52, 'seller-title', 'Seller title', '2', 0, '1', '1', 2013, 21, 'Good', 110000.00, 0.00, 0.00, 'Diesel ', 'Automatic', 23123, '2', '1', 'test', '6', 'White', '1st', '5 Euro', '551', 'no', '451020', '', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Rear Only', '2025-07', '2025-07', '[\"Heated steering wheel\",\"Power windows\",\"Push Start\"]', '[\"Driver fatigue alert\",\"Reverse cam \",\"360\\u00b0 camera\"]', '[\"Tinted rear windows\",\"Rain sensor wipers \\/ Auto lights\"]', '[\"AUX\",\"Apple CarPlay & Android Auto\",\"Voice control\"]', '[\"Comfort Drive mode\",\"Hybrid \",\"Plug-in Hybrid\"]', '[\"Sport suspension\",\"Lowered ride height\"]', '[\"Long-distance vehicle\",\"First owner\",\"Summer tires\"]', '0', 5, '2025-07-01 10:50:30', '2025-07-01 10:50:30'),
(53, 'gddssdfds', 'gddssdfds', '2', 0, '1', '1', 2013, 21, 'Accident Vehicle', 50998.00, 0.00, 0.00, 'Diesel ', 'Automatic', 250000000, '1', '1', 'dsgsdsfsfsf', '6', 'White', '1st', '5 Euro', '565', 'yes', '451020', '', '', 'Yes', 'Tri-Zone Automatic AC', '', 'Rear Only', '2025-07', '2025-07', '[\"Lumbar support\",\"Ambient lighting\",\"Leather steering\",\"Panoramic roof\",\"Soft-close doors\"]', '[\"Adaptive cruise control\",\"Driver fatigue alert\",\"Reverse cam \",\"Hill assist\",\"Auto parking\"]', '[\"Daytime running lights\",\"Fog lights \\/ Headlight washers\",\"Tinted rear windows\",\"Rain sensor wipers \\/ Auto lights\",\"Auto-dimming rearview \\/ side mirrors\"]', '[\"Standard Built-in navigation system\",\"Digital cockpit\",\"virtual cockpit\",\"Sound system\",\"Apple CarPlay & Android Auto\",\"Voice control\",\"DAB+ \"]', '[\"All-wheel drive \",\"Comfort Drive mode\",\"Adjustable dampers\",\"Mild Hybrid\",\"removable Tow bar\"]', '[\"Alloy wheels\",\"Roof rails\",\"Lowered ride height\",\"Running boards (for SUVs)\",\"matte paint options\"]', '[\"Non-smoker vehicle\",\"Long-distance vehicle\",\"First owner\",\"Leasing available\",\" Used car warranty\",\"Spare tires\",\"Runflats\",\"Winter tires\"]', '0', 5, '2025-07-01 11:02:06', '2025-07-01 11:02:06'),
(54, 'abc-79', 'ABC', '2', 0, '1', '1', 2009, 25, 'Good', 8000.00, 8616.50, 616.50, 'CNG', 'Manual', 50000, '1', '1', 'Test Bulk', '6', 'Red', '2nd', '5 Euro', '123', 'yes', '451020', '1751891482_autokorb2.pdf', '', 'Yes', '', '', 'Rear Only', '01/25', '01/25', '[\"Ambient lighting\",\"Power windows\"]', '[\"Driver fatigue alert\",\"Reverse cam \",\"Hill assist\",\"side airbags\",\"Blind-spot warning\",\"360\\u00b0 camera\",\"Trailer stability\"]', '[\"Tinted rear windows\",\"Rain sensor wipers \\/ Auto lights\",\"Auto-dimming rearview \\/ side mirrors\",\"Power-folding heated mirrors\"]', '[\"AUX\",\"Apple CarPlay & Android Auto\"]', '[\"Comfort Drive mode\",\"Hybrid \",\"Plug-in Hybrid\"]', '[\"Sport suspension\",\"Metallic\",\"matte paint options\"]', '[\"Long-distance vehicle\",\"Leasing available\",\"Warranty\",\" Used car warranty\",\"Spare tires\",\"Runflats\"]', '0', 6, '2025-07-02 07:34:01', '2025-07-02 07:34:01'),
(55, 'tax-check', 'Tax check', '2', 0, '1', '1', 2021, 25, 'Good', 1000.00, 1077.00, 77.00, 'CNG', 'Automatic', 55000, '3', '1', 'For cheack tax', '6', 'Black', '2nd', '5 Euro', '123', 'no', '451020', '', '', 'Yes', 'Automatic AC', '', 'Front and Rear', '2025-07', '2025-07', '[\"AC\",\"Lumbar support\",\"Soft-close doors\",\"Interior filters\"]', '[\"Parking sensors\",\"Reverse cam \",\"Blind-spot warning\"]', '[\"Daytime running lights\",\"Tinted rear windows\",\"Rain sensor wipers \\/ Auto lights\"]', '[\"Sound system\",\"Touchscreen display\",\"Apple CarPlay & Android Auto\"]', '[\"All-wheel drive \",\"Eco Drive mode\",\"Charging cables and fast-charging\",\"Regenerative braking\"]', '[\"Alloy wheels\",\"matte paint options\"]', '[\"Long-distance vehicle\",\"Spare tires\",\"Roof box\"]', '0', 6, '2025-07-07 06:28:34', '2025-07-07 06:28:34'),
(56, 'seller-test', 'seller test', '2', 0, '1', '1', 2024, 22, 'Export', 1000.00, 0.00, 0.00, 'Diesel ', 'Automatic', 6500000, '2', '1', 'seller Tax test', '6', 'Black', '3rd', '6 Euro', '565', 'yes', '451020', '', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Rear Only', '2025-07', '2025-07', '[\"AC\",\"Heated steering wheel\",\"Power windows\"]', '[\"Adaptive cruise control\",\"Driver fatigue alert\",\"Parking sensors\",\"Reverse cam \"]', '[\"Auto-dimming rearview \\/ side mirrors\",\"Power-folding heated mirrors\"]', '[\"Touchscreen display\",\"Bluetooth \",\"Apple CarPlay & Android Auto\",\"Voice control\",\"WiFi hotspot\"]', '[\"Front-wheel drive \",\"Comfort Drive mode\",\"Adjustable dampers\",\"fixed Tow bar\",\"removable Tow bar\"]', '[\"Sports kit \",\"Sport suspension\",\"Running boards (for SUVs)\",\"Metallic\",\"Contrasting roof\"]', '[\"Non-smoker vehicle\",\"First owner\",\"Spare tires\",\"Runflats\",\"Emergency kit\"]', '0', 15, '2025-07-07 06:35:21', '2025-07-07 06:35:21'),
(57, 'hfhhhffd', 'hfhhhffd', '2', 0, '1', '1', 2019, 25, 'Export', 2000.00, 2154.00, 154.00, 'Diesel ', 'Continuously Variable', 55000, '1', '1', 'hhdhggdgdg', '6', 'Black', '2nd', '5 Euro', '554', 'yes', '451010', '', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Rear Only', '2025-07', '2025-07', '[\"Keyless Entry\",\"Heated steering wheel\",\"Power windows\"]', '[\"Adaptive cruise control\",\"Parking sensors\",\"Reverse cam \",\"Hill assist\"]', '[\"LED \\/ Matrix LED \\/ Xenon \\/ Laser lights\",\"Fog lights \\/ Headlight washers\",\"Auto-dimming rearview \\/ side mirrors\"]', '[\"Premium Built-in navigation system\",\"virtual cockpit\",\"Touchscreen display\",\"AUX\",\"Apple CarPlay & Android Auto\",\"Voice control\"]', '[\"Automatic gearboxes\",\"Comfort Drive mode\",\"Sport Drive mode\",\"Adjustable dampers\",\"Hybrid \"]', '[\"Alloy wheels\",\"Chrome or black styling packages\",\"Spoilers\",\"Sport suspension\",\"Lowered ride height\"]', '[\"First owner\",\" Used car warranty\",\"Spare tires\",\"Emergency kit\"]', '0', 6, '2025-07-07 08:55:03', '2025-07-07 08:55:03'),
(58, 'huhjlkjk', 'huhjlkj;k', '2', 0, '1', '1', 2014, 22, 'Accident Vehicle', 1200.00, 1292.40, 92.40, 'CNG', 'Continuously Variable', 6500000, '2', '1', 'dadasaadsasd', '6', 'White', '2nd', '5 Euro', '554', 'yes', '451050', '', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Front Only', '07/25', '07/25', '[\"Ventilated seats \",\"Heated steering wheel\",\"Power windows\",\"Panoramic roof\"]', '[\"ABS, ESP (traction\\/stability control)\",\"Front airbags\",\"Adaptive cruise control\",\"Driver fatigue alert\",\"Parking sensors\",\"Reverse cam \"]', '[]', '[\"Sound system\",\"Bluetooth \",\"USB \",\"Voice control\"]', '[\"Air suspension\",\"Adjustable dampers\",\"Hybrid \",\"Plug-in Hybrid\"]', '[\"Sports kit \",\"Roof rails\",\"Spoilers\",\"Lowered ride height\"]', '[\"Garage kept\",\"Long-distance vehicle\",\"First owner\",\" Used car warranty\",\"Roof box\",\"Summer tires\",\"Jack tools included\"]', '0', 6, '2025-07-07 10:55:35', '2025-07-07 10:55:35'),
(59, 'abc1', 'ABC1', '2', 1, '13', '15', 2009, 25, 'Good', 8000.00, 8616.50, 616.50, 'Diesel ', 'Manual', 50000, '1', '1', 'Test Bulk', '7', 'Red', '2nd', '5 Euro', '123', 'yes', '451020', '', '', 'Yes', '', '', 'Rear Only', '01/25', '01/25', '[\"Ambient lighting\",\"Power windows\"]', '[\"Driver fatigue alert\",\"Reverse cam \",\"Hill assist\",\"side airbags\",\"Blind-spot warning\",\"360\\u00b0 camera\",\"Trailer stability\"]', '[\"Tinted rear windows\",\"Rain sensor wipers \\/ Auto lights\",\"Auto-dimming rearview \\/ side mirrors\",\"Power-folding heated mirrors\"]', '[\"AUX\",\"Apple CarPlay & Android Auto\"]', '[\"Comfort Drive mode\",\"Hybrid \",\"Plug-in Hybrid\"]', '[\"Sport suspension\",\"Metallic\",\"matte paint options\"]', '[\"Long-distance vehicle\",\"Leasing available\",\"Warranty\",\" Used car warranty\",\"Spare tires\",\"Runflats\"]', '0', 6, '2025-07-07 12:36:40', '2025-07-07 12:36:40'),
(60, 'huhjlkjk111', 'huhjlkj;k111', '2', 0, '1', '1', 2014, 22, 'Accident Vehicle', 1200.00, 1292.40, 92.40, 'CNG', 'Continuously Variable', 6500000, '2', '1', 'dadasaadsasd', '6', 'White', '2nd', '5 Euro', '554', 'yes', '451050', '1751892151_autokorb2.pdf', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Front Only', '07/25', '07/25', '[\"Ventilated seats \",\"Heated steering wheel\",\"Power windows\",\"Panoramic roof\"]', '[\"ABS, ESP (traction\\/stability control)\",\"Front airbags\",\"Adaptive cruise control\",\"Driver fatigue alert\",\"Parking sensors\",\"Reverse cam \"]', '[]', '[\"Sound system\",\"Bluetooth \",\"USB \",\"Voice control\"]', '[\"Air suspension\",\"Adjustable dampers\",\"Hybrid \",\"Plug-in Hybrid\"]', '[\"Sports kit \",\"Roof rails\",\"Spoilers\",\"Lowered ride height\"]', '[\"Garage kept\",\"Long-distance vehicle\",\"First owner\",\" Used car warranty\",\"Roof box\",\"Summer tires\",\"Jack tools included\"]', '0', 6, '2025-07-07 12:42:31', '2025-07-07 12:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `name` varchar(150) NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `img`, `name`, `vehicle_type_id`, `created_at`) VALUES
(1, '1752046178_Autokorb_logo_.png', 'SUV', 2, '2025-07-09 07:29:38'),
(2, '1752046782_Autokorb_logo_.png', 'Sedan', 2, '2025-07-09 07:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `state_id`, `is_active`) VALUES
(1, 'Indore', '1', 1),
(2, 'Bhopal', '1', 1),
(3, 'Jabalpur', '1', 1),
(4, 'Gwalior', '1', 1),
(5, 'Ujjain', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comfort_and_interior`
--

CREATE TABLE `comfort_and_interior` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comfort_and_interior`
--

INSERT INTO `comfort_and_interior` (`id`, `name`, `created_at`) VALUES
(1, 'AC', '2025-06-27 11:15:23'),
(2, 'Heated seats (front and back)', '2025-06-27 11:15:23'),
(3, 'Ventilated seats ', '2025-06-27 11:15:23'),
(4, 'Electrically adjustable seats', '2025-06-27 11:15:23'),
(5, 'Lumbar support', '2025-06-27 11:15:23'),
(6, 'Ambient lighting', '2025-06-27 11:15:23'),
(7, 'Keyless Entry', '2025-06-27 11:15:23'),
(8, 'Sunroof', '2025-06-27 11:15:23'),
(9, 'Heated steering wheel', '2025-06-27 11:15:23'),
(10, 'Power windows', '2025-06-27 11:15:23'),
(11, 'Leather steering', '2025-06-27 11:15:23'),
(12, 'Window sunshades', '2025-06-27 11:15:23'),
(13, 'Automatic Climate Control', '2025-06-30 07:07:33'),
(14, 'Massage seats', '2025-06-30 07:07:33'),
(15, 'Push Start', '2025-06-30 07:07:33'),
(16, 'Panoramic roof', '2025-06-30 07:07:33'),
(17, 'Automatic trunk', '2025-06-30 07:07:33'),
(18, 'Soft-close doors', '2025-06-30 07:07:33'),
(19, 'Interior filters', '2025-06-30 07:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'India', '2025-06-13 06:12:13', '2025-06-13 06:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_profile`
--

CREATE TABLE `dealer_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_from` time DEFAULT NULL,
  `open_to` time DEFAULT NULL,
  `opening_hours` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closing_days` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealer_profile`
--

INSERT INTO `dealer_profile` (`id`, `user_id`, `company_name`, `logo`, `address`, `city`, `state`, `pincode`, `country`, `phone_number`, `company_email`, `website`, `open_from`, `open_to`, `opening_hours`, `closing_days`, `contact_name`, `contact_designation`, `contact_email`, `contact_phone`, `contact_image`, `created_at`, `updated_at`) VALUES
(1, 6, 'ABC', '1750072110_logo2.jpeg', 'Indore', NULL, NULL, NULL, NULL, '9632587410', 'com@gmasil.com', 'dfdffdfd', '03:52:00', '22:58:00', NULL, NULL, 'XYZ', 'des', 'contact@gmail.com', '6587943690', '1750072818_dummy_profile.jpg', '2025-06-16 10:28:39', '2025-06-20 13:00:10'),
(2, 16, 'AutoKorb', '1750225203_logo2.jpeg', 'Bangali , Indore', NULL, NULL, NULL, NULL, '9632587410', 'Auto@gmasil.com', 'dfdffdfd', '11:08:00', '17:14:00', NULL, NULL, 'XYZ', 'des', 'contact@gmail.com', '6587943690', '1750225184_dummy_profile2.jpg', '2025-06-18 05:39:44', '2025-06-18 05:40:03'),
(3, 18, 'ABC', '1750253023_logo2.jpeg', 'Bangali, Indore', NULL, NULL, NULL, NULL, '9632587410', 'Auto@gmasil.com', 'https://irisinformatics.net/autodecar/', '10:00:00', '23:00:00', NULL, NULL, 'XYZ', 'Manager', 'contact@gmail.com', '6587943690', '1750253004_dummy_profile2.jpg', '2025-06-18 13:23:24', '2025-06-18 13:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `engine_and_drive_technology`
--

CREATE TABLE `engine_and_drive_technology` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engine_and_drive_technology`
--

INSERT INTO `engine_and_drive_technology` (`id`, `name`, `created_at`) VALUES
(1, 'All-wheel drive ', '2025-06-27 12:32:36'),
(2, 'Front-wheel drive ', '2025-06-27 12:32:36'),
(3, 'Rear-wheel drive', '2025-06-27 12:32:36'),
(4, 'Automatic gearboxes', '2025-06-27 12:32:36'),
(5, 'Eco Drive mode', '2025-06-27 12:32:36'),
(6, 'Comfort Drive mode', '2025-06-27 12:32:36'),
(7, 'Sport Drive mode', '2025-06-27 12:32:36'),
(8, 'Air suspension', '2025-06-27 12:32:36'),
(9, 'Adjustable dampers', '2025-06-27 12:32:36'),
(10, 'Hybrid ', '2025-06-27 12:32:36'),
(11, 'Plug-in Hybrid', '2025-06-27 12:32:36'),
(12, 'Mild Hybrid', '2025-06-27 12:32:36'),
(13, 'Charging cables and fast-charging', '2025-06-27 12:32:36'),
(14, 'Regenerative braking', '2025-06-27 12:32:36'),
(15, 'fixed Tow bar', '2025-06-27 12:32:36'),
(16, 'removable Tow bar', '2025-06-27 12:32:36'),
(17, 'electric foldable Tow bar', '2025-06-27 12:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `exterior_and_design`
--

CREATE TABLE `exterior_and_design` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exterior_and_design`
--

INSERT INTO `exterior_and_design` (`id`, `name`, `created_at`) VALUES
(1, 'Alloy wheels', '2025-06-27 12:18:55'),
(2, 'Sports kit ', '2025-06-27 12:18:55'),
(3, 'Chrome or black styling packages', '2025-06-27 12:18:55'),
(4, 'Roof rails', '2025-06-27 12:18:55'),
(5, 'Spoilers', '2025-06-27 12:18:55'),
(6, 'Sport suspension', '2025-06-27 12:18:55'),
(7, 'Lowered ride height', '2025-06-27 12:18:55'),
(8, 'Running boards (for SUVs)', '2025-06-27 12:18:55'),
(9, 'Metallic', '2025-06-27 12:18:55'),
(10, 'matte paint options', '2025-06-27 12:18:55'),
(11, 'Contrasting roof', '2025-06-27 12:18:55'),
(12, 'Painted bumpers', '2025-06-27 12:18:55'),
(13, ' Underride protection', '2025-06-27 12:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

CREATE TABLE `fuel_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuel_type`
--

INSERT INTO `fuel_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Petrol', '2025-05-29 10:05:48', '2025-05-29 10:05:48'),
(2, 'Diesel ', '2025-05-29 10:05:48', '2025-05-29 10:05:48'),
(3, 'CNG', '2025-05-29 10:05:48', '2025-05-29 10:05:48'),
(10, 'LPG', '2025-06-18 13:13:44', '2025-06-18 13:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `km_range`
--

CREATE TABLE `km_range` (
  `id` int(11) NOT NULL,
  `min` int(150) NOT NULL,
  `max` int(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `km_range`
--

INSERT INTO `km_range` (`id`, `min`, `max`, `created_at`, `updated_at`) VALUES
(1, 300, 1000000, '2025-06-03 07:40:19', '2025-06-03 07:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `lighting_and_visibility`
--

CREATE TABLE `lighting_and_visibility` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lighting_and_visibility`
--

INSERT INTO `lighting_and_visibility` (`id`, `name`, `created_at`) VALUES
(1, 'LED / Matrix LED / Xenon / Laser lights', '2025-06-27 11:24:54'),
(2, 'Daytime running lights', '2025-06-27 11:24:54'),
(3, 'Cornering lights / High beam assist', '2025-06-27 11:24:54'),
(4, 'Fog lights / Headlight washers', '2025-06-27 11:24:54'),
(5, 'Tinted rear windows', '2025-06-27 11:24:54'),
(6, 'Rain sensor wipers / Auto lights', '2025-06-27 11:24:54'),
(7, 'Auto-dimming rearview / side mirrors', '2025-06-27 11:24:54'),
(8, 'Power-folding heated mirrors', '2025-06-27 11:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`id`, `name`, `vehicle_type_id`, `cat_id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', 2, 0, '', '2025-05-29 10:02:36', '2025-05-29 10:02:36'),
(2, 'Honda', 2, 0, '', '2025-05-29 10:02:36', '2025-05-29 10:02:36'),
(9, 'abc', 1, 0, '', '2025-06-20 06:43:04', '2025-06-20 06:43:04'),
(10, 'dfhfhfddf', 1, 0, '', '2025-07-08 08:58:17', '2025-07-08 08:58:17'),
(13, 'dfdfgdfss', 2, 1, '1752129853_auto_korb_logo_resized.png', '2025-07-10 06:44:14', '2025-07-10 06:44:14'),
(14, 'fhdfgf', 2, 1, '1752132601_tblogo_(2).png', '2025-07-10 07:30:01', '2025-07-10 07:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `vehicle_type_id`, `cat_id`, `make_id`, `created_at`, `updated_at`) VALUES
(1, 'Taisor', 2, 0, 1, '2025-05-29 09:56:24', '2025-05-29 09:56:24'),
(2, 'Fortuner', 2, 0, 2, '2025-05-29 09:59:31', '2025-05-29 09:59:31'),
(12, 'Civic', 2, 0, 2, '2025-06-18 13:13:12', '2025-06-18 13:13:12'),
(14, 'bikemodel', 1, 0, 9, '2025-06-20 10:10:04', '2025-06-20 10:10:04'),
(15, 'new Model', 2, 1, 13, '2025-07-10 07:34:15', '2025-07-10 07:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `multimedia_and_navigation`
--

CREATE TABLE `multimedia_and_navigation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multimedia_and_navigation`
--

INSERT INTO `multimedia_and_navigation` (`id`, `name`, `created_at`) VALUES
(1, 'Standard Built-in navigation system', '2025-06-27 11:50:41'),
(2, 'Premium Built-in navigation system', '2025-06-27 11:50:41'),
(3, 'Digital cockpit', '2025-06-27 11:50:41'),
(4, 'virtual cockpit', '2025-06-27 11:50:41'),
(5, 'Sound system', '2025-06-27 11:50:41'),
(6, 'Touchscreen display', '2025-06-27 11:50:41'),
(7, 'Bluetooth ', '2025-06-27 11:50:41'),
(8, 'USB ', '2025-06-27 11:50:41'),
(9, 'AUX', '2025-06-27 11:50:41'),
(10, 'Apple CarPlay & Android Auto', '2025-06-27 11:50:41'),
(11, 'Voice control', '2025-06-27 11:50:41'),
(12, 'DAB+ ', '2025-06-27 11:50:41'),
(13, 'DVD player', '2025-06-27 11:50:41'),
(14, 'Rear seat screens', '2025-06-27 11:50:41'),
(15, ' Wireless phone charging', '2025-06-27 11:50:41'),
(16, 'WiFi hotspot', '2025-06-27 11:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `other_features_and_extras`
--

CREATE TABLE `other_features_and_extras` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_features_and_extras`
--

INSERT INTO `other_features_and_extras` (`id`, `name`, `created_at`) VALUES
(1, 'Non-smoker vehicle', '2025-06-27 12:41:45'),
(2, 'Full service history', '2025-06-27 12:41:45'),
(3, 'Accident-free', '2025-06-27 12:41:45'),
(4, 'Garage kept', '2025-06-27 12:41:45'),
(5, 'Long-distance vehicle', '2025-06-27 12:41:45'),
(6, 'First owner', '2025-06-27 12:41:45'),
(7, 'Leasing available', '2025-06-27 12:41:45'),
(8, 'Warranty', '2025-06-27 12:41:45'),
(9, ' Used car warranty', '2025-06-27 12:41:45'),
(10, 'Spare tires', '2025-06-27 12:41:45'),
(11, 'Runflats', '2025-06-27 12:41:45'),
(12, 'Emergency kit', '2025-06-27 12:41:45'),
(13, 'Roof box', '2025-06-27 12:41:45'),
(14, 'Bike rack', '2025-06-27 12:41:45'),
(15, 'Summer tires', '2025-06-27 12:41:45'),
(16, 'Winter tires', '2025-06-27 12:41:45'),
(17, 'All-season tires', '2025-06-27 12:41:45'),
(18, 'Jack tools included', '2025-06-27 12:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `module`, `name`, `description`) VALUES
(5, '', 'Car List', ''),
(6, '', 'Add Model', ''),
(7, '', 'Add Make', ''),
(8, '', 'Add Transmission', ''),
(9, '', 'Add Fuel Type', ''),
(10, '', 'Dashboard', '');

-- --------------------------------------------------------

--
-- Table structure for table `price_range`
--

CREATE TABLE `price_range` (
  `id` int(11) NOT NULL,
  `min` int(150) NOT NULL,
  `max` int(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_range`
--

INSERT INTO `price_range` (`id`, `min`, `max`, `created_at`, `updated_at`) VALUES
(1, 5000, 400000, '2025-06-03 07:40:47', '2025-06-03 07:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `type`) VALUES
(1, 'Admin', 1),
(2, 'Seller', 2),
(3, 'Dealer', 3),
(4, 'Buyer', 4);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`id`, `role_id`, `permission_id`) VALUES
(14, 5, 8),
(15, 5, 9),
(25, 1, 5),
(26, 1, 6),
(27, 1, 7),
(28, 1, 8),
(29, 1, 9),
(30, 1, 10),
(31, 3, 5),
(32, 3, 7),
(33, 3, 8),
(34, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `safety_and_assistance`
--

CREATE TABLE `safety_and_assistance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `safety_and_assistance`
--

INSERT INTO `safety_and_assistance` (`id`, `name`, `created_at`) VALUES
(1, 'ABS, ESP (traction/stability control)', '2025-06-27 11:20:24'),
(2, 'Front airbags', '2025-06-30 07:11:16'),
(3, 'Lane assist', '2025-06-30 07:11:34'),
(4, 'Emergency brake assist', '2025-06-27 11:20:24'),
(5, 'Adaptive cruise control', '2025-06-27 11:20:24'),
(6, 'Driver fatigue alert', '2025-06-27 11:20:24'),
(7, 'Night vision camera', '2025-06-27 11:20:24'),
(8, 'Head-Up display', '2025-06-27 11:20:24'),
(9, 'Parking sensors', '2025-06-30 07:12:36'),
(10, 'Reverse cam ', '2025-06-30 07:13:09'),
(11, 'Hill assist', '2025-06-30 07:13:41'),
(12, 'side airbags', '2025-06-30 07:14:09'),
(13, 'curtain airbags', '2025-06-30 07:14:09'),
(14, 'Blind-spot warning', '2025-06-30 07:14:09'),
(15, '360° camera', '2025-06-30 07:14:09'),
(16, 'Auto parking', '2025-06-30 07:14:09'),
(17, 'Trailer stability', '2025-06-30 07:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Madhya Pradesh', 1, '2025-06-13 06:26:17', '2025-06-13 06:26:17'),
(2, 'Uttar Pradesh', 1, '2025-06-13 06:26:17', '2025-06-13 06:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `duration_days` int(11) DEFAULT NULL,
  `listing_limit` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `plan_name`, `price`, `duration_days`, `listing_limit`, `created_at`) VALUES
(1, 'Basic', '199.00', 30, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE `transmission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Manual', '2025-05-29 12:30:19', '2025-05-29 12:30:19'),
(2, 'Automatic', '2025-05-29 12:30:19', '2025-05-29 12:30:19'),
(3, 'Continuously Variable', '2025-05-29 12:30:19', '2025-05-29 12:30:19'),
(4, 'Semi-Automatic', '2025-05-29 12:30:19', '2025-05-29 12:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(150) NOT NULL,
  `profile` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `token` varchar(255) NOT NULL,
  `token_expiry` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mobile`, `email`, `password`, `role`, `profile`, `status`, `token`, `token_expiry`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '9934567890', 'admin@gmail.com', '$2y$10$0S0uaz.dX2OaH0QnYckclueuKb18jNOZ2gsyME2M4R6fqgOKBW1g.', '1', '1750316205_dummy_profile.jpg', 1, '619f7e46991a9ecd34da3c86500ed008', '2025-05-23 14:50:50', '2025-05-20 12:17:42', '2025-05-20 12:17:42'),
(2, 'sonam', '9554541230', 'sonamgoswami3898@gmail.com', '$2y$10$PEMzvpsEQPD2g6m2XYx8cOc0lXnqPIicRUpf/2khyn596ZeL9PjuK', '4', '', 1, '7a93a8574a06d7cdd46777aff7698b14', '2025-05-23 14:27:36', '2025-05-20 12:48:37', '2025-05-20 12:48:37'),
(3, 'fsedsdfsd', '', 'manan@gmail.com', '$2y$10$EVnHHNcGVFLlMDvWLeY9peHVgiRznfs58N125291Pbp2bgxjUHMLW', '4', '', 1, '', '0000-00-00 00:00:00', '2025-05-20 12:51:37', '2025-05-20 12:51:37'),
(4, 'test1', '', 'test@gmail.com', '$2y$10$j9mTlIX38iIDYJx7gaa.fO1HGuiiJ9U9gwqR1cxJquv6HKkVHE4xO', '4', '1748242883_dummy_profile.jpg', 1, '', '0000-00-00 00:00:00', '2025-05-20 13:50:02', '2025-05-20 13:50:02'),
(5, 'Seller', '7974046163', 'seller@gmail.com', '$2y$10$YlbM6RwE2O7V18WogFvNi.1k0YHQ6kRU/GVFaIamjGq.Sf3t8Gyv2', '2', '1750146494_dummy_profile.jpg', 1, '', '0000-00-00 00:00:00', '2025-05-23 06:38:18', '2025-05-23 06:38:18'),
(6, 'Demo', '7974046162', 'demo1@gmail.com', '$2y$10$pVHubpiC5ZaPpk4dSAo1p.qcx5bXM1dAQ.tnlXkCCgHOsfBFgHvyO', '3', '1750070916_dummy_profile.jpg', 1, '', '0000-00-00 00:00:00', '2025-05-26 09:38:35', '2025-05-26 09:38:35'),
(7, 'sdsdd', '', 'asdf@gmail.com', '$2y$10$fl2VDoMLng13XPpEUPuIPugAIL8mTWLPMg0vBK3e5FOQuOS60E0oS', '2', '', 1, '', '0000-00-00 00:00:00', '2025-05-26 09:40:38', '2025-05-26 09:40:38'),
(10, 'selller', '', 'sel@gmail.com', '$2y$10$pBPO6Yd3CrRe61exCFLnGOAC3lYy/tfJzZgEwHYqIh2RwzobPTJOy', '2', '', 1, '', '0000-00-00 00:00:00', '2025-06-06 13:44:41', '2025-06-06 13:44:41'),
(11, 'Dealer-Demo', '', 'dealer@gmail.com', '$2y$10$RRCdCOEHiijwIthRgpOz/.YyEfD6Y1A6tacNrn9YWMknYbIU0g8DK', '3', '', 1, '', '0000-00-00 00:00:00', '2025-06-11 13:34:21', '2025-06-11 13:34:21'),
(12, 'addak', '', 'asass@gmail.com', '$2y$10$NV.y.n5Y8J902ecrj4Saye5CGUvqrMqVSiC1n0hFfQB7sZyAsvedy', '2', '', 1, '', '0000-00-00 00:00:00', '2025-06-17 13:29:01', '2025-06-17 13:29:01'),
(15, 'New Seller', '8745691234', 'new_seller@gmail.com', '$2y$10$o3C0viYWHaKlEvuDF5JjDeh7kVWM57qm4Q6cYe/rvvMFlxjzJVhJO', '2', '1750223013_dummy_profile.jpg', 1, '', '0000-00-00 00:00:00', '2025-06-18 04:59:19', '2025-06-18 04:59:19'),
(16, 'New Dealer', '7974046163', 'new_dealer@gmail.com', '$2y$10$bg.mlevQslcP7mU3Glk7LeYCNaKsicKYr7IJQXP2qtEinEV4eAP4m', '3', '1750225184_dummy_profile.jpg', 1, '', '0000-00-00 00:00:00', '2025-06-18 05:08:46', '2025-06-18 05:08:46'),
(17, 'Seller1', '7974046163', 'seller1@gmail.com', '$2y$10$FAZI4K69FTshA/Jsu9ekh.B8PtPxpCrR2bUzMGgbLH3km6YAO9q36', '2', '1750252455_dummy_profile.jpg', 1, '', '0000-00-00 00:00:00', '2025-06-18 13:10:29', '2025-06-18 13:10:29'),
(18, 'Dealer1', '9934567890', 'dealer1@gmail.com', '$2y$10$NPR/kiNKB/JWknpeX9LYdui0RwsSiABj7M0eAtFYAp9gy3RI.rEf2', '3', '1750253004_dummy_profile.jpg', 0, '', '0000-00-00 00:00:00', '2025-06-18 13:15:30', '2025-06-18 13:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `listings_used` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`id`, `user_id`, `plan_id`, `start_date`, `end_date`, `listings_used`) VALUES
(1, 6, 1, '2025-07-01', '2025-07-31', 3),
(2, 5, 1, '2025-07-01', '2025-07-31', 2);

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `name`, `vehicle_type_id`, `cat_id`, `make_id`, `model_id`) VALUES
(6, 'Limousine', 2, 0, 1, 1),
(7, 'New Variant', 2, 1, 13, 15);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_color`
--

CREATE TABLE `vehicle_color` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_color`
--

INSERT INTO `vehicle_color` (`id`, `name`, `created_at`) VALUES
(1, 'Black', '2025-06-21 10:11:20'),
(2, 'White', '2025-06-21 10:11:20'),
(3, 'Red', '2025-06-21 10:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `name`, `created_at`) VALUES
(1, 'Bike ', '2025-06-18 09:22:15'),
(2, 'Car', '2025-06-18 09:22:15'),
(3, 'Commercial', '2025-06-30 13:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `years_range`
--

CREATE TABLE `years_range` (
  `id` int(11) NOT NULL,
  `min` int(150) NOT NULL,
  `max` int(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years_range`
--

INSERT INTO `years_range` (`id`, `min`, `max`, `created_at`, `updated_at`) VALUES
(1, 1999, 2025, '2025-06-02 12:22:31', '2025-06-02 12:22:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_img`
--
ALTER TABLE `car_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_list`
--
ALTER TABLE `car_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comfort_and_interior`
--
ALTER TABLE `comfort_and_interior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealer_profile`
--
ALTER TABLE `dealer_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engine_and_drive_technology`
--
ALTER TABLE `engine_and_drive_technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterior_and_design`
--
ALTER TABLE `exterior_and_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `km_range`
--
ALTER TABLE `km_range`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lighting_and_visibility`
--
ALTER TABLE `lighting_and_visibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multimedia_and_navigation`
--
ALTER TABLE `multimedia_and_navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_features_and_extras`
--
ALTER TABLE `other_features_and_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_range`
--
ALTER TABLE `price_range`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safety_and_assistance`
--
ALTER TABLE `safety_and_assistance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_color`
--
ALTER TABLE `vehicle_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years_range`
--
ALTER TABLE `years_range`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_img`
--
ALTER TABLE `car_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `car_list`
--
ALTER TABLE `car_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comfort_and_interior`
--
ALTER TABLE `comfort_and_interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dealer_profile`
--
ALTER TABLE `dealer_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `engine_and_drive_technology`
--
ALTER TABLE `engine_and_drive_technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exterior_and_design`
--
ALTER TABLE `exterior_and_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fuel_type`
--
ALTER TABLE `fuel_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `km_range`
--
ALTER TABLE `km_range`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lighting_and_visibility`
--
ALTER TABLE `lighting_and_visibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `multimedia_and_navigation`
--
ALTER TABLE `multimedia_and_navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `other_features_and_extras`
--
ALTER TABLE `other_features_and_extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `price_range`
--
ALTER TABLE `price_range`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `safety_and_assistance`
--
ALTER TABLE `safety_and_assistance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transmission`
--
ALTER TABLE `transmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_color`
--
ALTER TABLE `vehicle_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `years_range`
--
ALTER TABLE `years_range`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
