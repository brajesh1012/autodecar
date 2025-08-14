-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 12:56 PM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon3` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `subtitle`, `img`, `img2`, `title1`, `description1`, `icon1`, `title2`, `description2`, `icon2`, `title3`, `description3`, `icon3`) VALUES
(1, 'Warum Autokorb wählen?', '<p>Unser erfahrenes Team ist im Autoverkauf führend – mit vielen Jahren erfolgreicher Marktkenntnis, fundierten Entscheidungen und optimalen Ergebnissen.</p>', '1753867256_wcu-1.jpg', '1753867785_wcu-2.png', 'Bewährte Expertise', '<p>Durch unsere langjährige Erfahrung im Autohandel navigieren wir sicher durch den Markt und erzielen präzise Entscheidungen, die zu den besten Resultaten führen.</p>', '', 'Individuelle Lösungen', '<p>Wir entwickeln maßgeschneiderte Strategien, die exakt auf Ihre persönlichen Ziele abgestimmt sind – für einen reibungslosen und erfolgreichen Verkaufsprozess.</p>', '', 'Transparente Partnerschaften', '<p>Transparenz ist das Herzstück unserer Kundenbeziehungen. Wir setzen auf klare Kommunikation und ethische Standards, um Vertrauen und langfristige Zuverlässigkeit zu schaffen.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `description`, `img`, `created_at`) VALUES
(11, '', 'Autokorb.com – Dein Fahrzeugmarkt für die Schweiz, Deutschland und Österreich – bald ganz Europa!', '<p>Der Kauf und Verkauf von Autos wird immer digitaler und internationaler. Genau hier setzt <strong>autokorb.com</strong> an – als moderne, benutzerfreundliche und vor allem <strong>kostenlose Plattform für Fahrzeuginserate</strong> in der Schweiz, Deutschland und Österreich. Doch das ist erst der Anfang: In den kommenden Jahren wird <strong>autokorb.com</strong> zum führenden Online-Automarkt für ganz Europa ausgebaut und mit erweiterten Funktionen ausgestattet, die den grenzüberschreitenden Handel erleichtern.</p>', '', '2025-08-13 08:35:34'),
(12, '', 'Warum autokorb.com? – Der Fahrzeugmarkt für DACH und bald ganz Europa', '<p><strong>autokorb.com</strong> bietet heute schon eine ideale Lösung für alle, die in der Schweiz, Deutschland oder Österreich ein Fahrzeug kaufen oder verkaufen wollen. Unsere Plattform zeichnet sich durch einfache Bedienung, umfangreiche Suchfunktionen und faire Konditionen aus – für Privatpersonen komplett kostenlos.</p><p>&nbsp;</p><h4><strong>Kostenlos inserieren – unkompliziert verkaufen in der DACH-Region&nbsp;</strong></h4><p>&nbsp;</p><p>Für Privatverkäufer aus der Schweiz, Deutschland und Österreich ist das Inserieren auf autokorb.com völlig kostenlos. Mit wenigen Klicks kannst du dein Fahrzeug präsentieren und eine große Reichweite erzielen. So finden auch regionale Käufer aus der DACH-Region schnell und unkompliziert dein Angebot.</p><p>&nbsp;</p><h4><strong>Attraktive Angebote für Händler aus der DACH-Region&nbsp;</strong></h4><p>&nbsp;</p><p>Auch für Händler aus diesen Ländern bietet autokorb.com faire Preise und gezielte Werbemöglichkeiten, um ihre Fahrzeuge optimal sichtbar zu machen. Die Plattform unterstützt Händler dabei, ihre Reichweite zu erweitern und mehr Kunden anzusprechen – egal ob lokal oder grenzüberschreitend.</p><p>&nbsp;</p><h4><strong>Leistungsstarke Suchfilter – finde dein Wunschauto genau dort, wo du willst</strong></h4><p>&nbsp;</p><p>Die Suchfunktionen von autokorb.com sind speziell auf die Bedürfnisse der Nutzer in der Schweiz, Deutschland und Österreich abgestimmt. Mit Filtern nach Marke, Modell, Baujahr, Preis, Kilometerstand und sogar Region findest du dein Traumfahrzeug schnell und bequem.</p><p>&nbsp;</p><h4><strong>24/7 Online – jederzeit für dich da</strong></h4><p>&nbsp;</p><p>Egal ob spätabends, am Wochenende oder an Feiertagen – autokorb.com ist rund um die Uhr erreichbar und bietet dir die Freiheit, Inserate zu erstellen oder zu durchsuchen, wann immer du möchtest.</p>', '', '2025-08-13 07:31:41'),
(13, '', 'Zukunftsvision: Ganz Europa auf autokorb.com', '<p>Die Expansion ist bereits in Planung: In den nächsten Jahren wird <strong>autokorb.com</strong> zur <strong>europäischen Fahrzeugbörse</strong> ausgebaut. Mit entsprechenden Funktionen wie mehrsprachiger Oberfläche, automatischer Währungsumrechnung und grenzüberschreitender Kaufabwicklung wird der Handel in ganz Europa einfacher als je zuvor.<br>Damit wird autokorb.com zur ersten Wahl für alle, die grenzüberschreitend Fahrzeuge suchen oder anbieten wollen – von Skandinavien bis Südeuropa, von Portugal bis Polen.</p>', '', '2025-08-13 07:33:22'),
(14, '', 'Tipps für Verkäufer in der DACH-Region – so nutzt du autokorb.com optimal', '<p>Fotos machen: Hochwertige Bilder von deinem Fahrzeug helfen, mehr Aufmerksamkeit zu bekommen – zeige es von allen Seiten und im besten Licht.</p><p><br>Beschreibung: Sei ehrlich und genau – Käufer schätzen Transparenz bei Zustand und Ausstattung.</p><p><br>Preis setzen: Informiere dich über ähnliche Fahrzeuge auf autokorb.com und setze einen fairen Preis.</p><p><br>Kommunikation: Reagiere schnell auf Anfragen und halte deine Kontaktinformationen aktuell.</p>', '', '2025-08-13 08:28:04'),
(15, '', 'autokorb.com – mehr als nur ein Fahrzeugmarkt', '<p>Unsere Plattform ist eine lebendige Community, die Käufer und Verkäufer aus der gesamten DACH-Region zusammenbringt. Mit wachsender Nutzerzahl entstehen vertrauensvolle Kontakte, die den Handel erleichtern und langfristig stärken.</p>', '', '2025-08-13 08:29:01'),
(16, '', 'Fazit – autokorb.com ist bereit für die Zukunft des europäischen Autohandels', '<p>Ob in der Schweiz, Deutschland oder Österreich – autokorb.com bietet schon heute eine sichere, einfache und kostenlose Möglichkeit, Fahrzeuge online zu kaufen und zu verkaufen. Und dank der geplanten Expansion wird die Plattform bald ganz Europa vernetzen und den grenzüberschreitenden Autohandel revolutionieren.<br>Starte noch heute auf autokorb.com – dein Auto wartet!<br>&nbsp;</p>', '', '2025-08-13 08:30:09');

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
(1, 1, '1752232362_Luxury_SUV.jpg', '2025-07-11 11:12:42', '2025-07-11 11:12:42'),
(2, 2, '1752646414_y2.jpg', '2025-07-16 06:13:35', '2025-07-16 06:13:35'),
(3, 2, '1752646414_y21.jpg', '2025-07-16 06:13:35', '2025-07-16 06:13:35'),
(4, 2, '1752646414_y22.jpg', '2025-07-16 06:13:35', '2025-07-16 06:13:35'),
(5, 2, '1752646414_y23.jpg', '2025-07-16 06:13:35', '2025-07-16 06:13:35'),
(6, 3, '1752648843_cruiser1.jpg', '2025-07-16 06:54:03', '2025-07-16 06:54:03'),
(7, 3, '1752648843_cruiser11.jpg', '2025-07-16 06:54:03', '2025-07-16 06:54:03'),
(8, 4, '1752650000_kia1.jpg', '2025-07-16 07:13:20', '2025-07-16 07:13:20'),
(9, 4, '1752650000_kia11.jpg', '2025-07-16 07:13:20', '2025-07-16 07:13:20'),
(10, 4, '1752650000_kia12.jpg', '2025-07-16 07:13:20', '2025-07-16 07:13:20'),
(11, 5, '1752650936_toyota1.jpg', '2025-07-16 07:28:56', '2025-07-16 07:28:56'),
(12, 5, '1752650936_toyota11.jpg', '2025-07-16 07:28:56', '2025-07-16 07:28:56'),
(13, 5, '1752650936_toyota12.jpg', '2025-07-16 07:28:56', '2025-07-16 07:28:56'),
(14, 6, '1752661660_car1.jpg', '2025-07-16 10:27:40', '2025-07-16 10:27:40'),
(15, 6, '1752661660_car11.jpg', '2025-07-16 10:27:40', '2025-07-16 10:27:40'),
(16, 6, '1752661660_car12.jpg', '2025-07-16 10:27:40', '2025-07-16 10:27:40'),
(17, 7, '1752667874_bus.jpg', '2025-07-16 12:11:14', '2025-07-16 12:11:14'),
(18, 7, '1752667874_bus1.jpg', '2025-07-16 12:11:14', '2025-07-16 12:11:14'),
(19, 8, '1752668253_splender1.jpg', '2025-07-16 12:17:33', '2025-07-16 12:17:33'),
(20, 8, '1752668253_splender11.jpg', '2025-07-16 12:17:33', '2025-07-16 12:17:33'),
(21, 9, '1752670197_Pickup1.jpg', '2025-07-16 12:49:57', '2025-07-16 12:49:57'),
(22, 9, '1752670197_Pickup11.jpg', '2025-07-16 12:49:57', '2025-07-16 12:49:57'),
(23, 10, '1752670392_truck1.jpg', '2025-07-16 12:53:12', '2025-07-16 12:53:12'),
(24, 10, '1752670392_truck11.jpg', '2025-07-16 12:53:12', '2025-07-16 12:53:12'),
(25, 11, '1753262729_car3.jpg', '2025-07-23 09:25:29', '2025-07-23 09:25:29'),
(26, 12, '1753421237_car13.jpg', '2025-07-25 05:27:17', '2025-07-25 05:27:17'),
(27, 12, '1753421237_car131.jpg', '2025-07-25 05:27:17', '2025-07-25 05:27:17'),
(28, 12, '1753421237_car132.jpg', '2025-07-25 05:27:17', '2025-07-25 05:27:17'),
(30, 14, '1753767424_BMW_120d_M_Sport_(F40)_–_f_11042021.jpg', '2025-07-29 05:37:04', '2025-07-29 05:37:04'),
(31, 14, '1753767461_1106588_37410c1d-1f6a-4f15-8b83-e31aea474d53.png', '2025-07-29 05:37:41', '2025-07-29 05:37:41'),
(32, 17, '1753980106_Screenshot_2024-11-17_141237.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(33, 17, '1753980106_Screenshot_2024-11-17_1412371.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(34, 17, '1753980106_Screenshot_2024-11-17_1412372.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(35, 17, '1753980106_Screenshot_2024-11-17_1412373.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(36, 17, '1753980106_Screenshot_2024-11-17_1412374.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(37, 17, '1753980106_Screenshot_2024-11-17_1412375.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(38, 17, '1753980106_Screenshot_2024-11-17_1412376.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(39, 17, '1753980106_Screenshot_2024-11-17_1412377.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(40, 17, '1753980106_Screenshot_2024-11-17_1412378.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(41, 17, '1753980106_Screenshot_2024-11-17_1412379.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(42, 17, '1753980106_Screenshot_2024-11-17_14123710.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(43, 17, '1753980106_Screenshot_2024-11-17_14123711.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(44, 17, '1753980106_Screenshot_2024-11-17_14123712.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(45, 17, '1753980106_Screenshot_2024-11-17_14123713.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(46, 17, '1753980106_Screenshot_2024-11-17_14123714.png', '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(47, 18, '1754556036_download_(1).jpg', '2025-08-07 08:40:36', '2025-08-07 08:40:36'),
(48, 18, '1754556036_download_(1)1.jpg', '2025-08-07 08:40:36', '2025-08-07 08:40:36'),
(49, 18, '1754556036_download_(1)2.jpg', '2025-08-07 08:40:36', '2025-08-07 08:40:36'),
(50, 19, '1754557047_images_(1).jpg', '2025-08-07 08:57:27', '2025-08-07 08:57:27'),
(51, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x683.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(52, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x6831.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(53, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x6832.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(54, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x6833.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(55, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x6834.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(56, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x6835.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(57, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x6836.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(58, 22, '1754590619_2017-BMW-5er-G30-Fahrbericht-530d-Luxury-Line-43-1024x6837.jpg', '2025-08-07 18:16:59', '2025-08-07 18:16:59'),
(59, 24, '1754910690_bus_red.jpg', '2025-08-11 11:11:30', '2025-08-11 11:11:30');

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
(1, 'rang-rover', 'Rang Rover', '2', 8, '8', '9', 2022, 21, 'Good', 1.95, 2.10, 0.15, 'Petrol', 'Manual', 28000, '1', '1', 'Test car', '7', 'Black', '1st', '6 Euro', '147', 'yes', '451020', '', '', 'Yes', '4-Zone Automatic AC', '', 'Front and Rear', '05/25', '05/25', '[\"AC\",\"Heated seats (front and back)\",\"Lumbar support\"]', '[\"ABS, ESP (traction\\/stability control)\",\"Front airbags\",\"Lane assist\"]', '[\"Daytime running lights\",\"Tinted rear windows\"]', '[\"Standard Built-in navigation system\",\"Premium Built-in navigation system\",\"Touchscreen display\"]', '[\"All-wheel drive \",\"Front-wheel drive \"]', '[\"Alloy wheels\",\"Spoilers\"]', '[\"Non-smoker vehicle\",\"Full service history\",\"Accident-free\"]', '1', 6, '2025-07-11 11:12:42', '2025-07-11 11:12:42'),
(2, 'new-sports-bike', 'New Sports Bike', '1', 2, '4', '5', 2023, 21, 'Good', 200000.00, 215400.00, 15400.00, 'Petrol', 'Manual', 2800, '17', '2', 'Test bike', '3', 'White', '1st', '6 Euro', '462', 'no', '451050', '', '', 'Yes', '', '', '', '01/25', '01/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 6, '2025-07-16 06:13:35', '2025-07-16 06:13:35'),
(3, 'new-cruiser-bike', 'New Cruiser Bike', '1', 3, '6', '7', 2020, 20, 'Export', 1500000.00, 1615500.00, 115500.00, 'Petrol', 'Manual', 32000, '16', '2', 'Test Cruiser.', '5', 'Black', '2nd', '6 Euro', '156', 'yes', '451020', '', '', 'Yes', '', '', '', '07/00', '07/00', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 6, '2025-07-16 06:54:03', '2025-07-16 06:54:03'),
(4, 'new-crossover-car', 'New Crossover Car', '2', 9, '9', '10', 2016, 25, 'Accident Vehicle', 1000000.00, 1000000.00, 0.00, 'CNG', 'Continuously Variable', 8000000, '3', '1', 'Kia', '8', 'Red', '2nd', '6 Euro', '955', 'yes', '451010', '1752736443_1751282393_dummy.pdf', '', 'Yes', '4-Zone Automatic AC', '', 'Front and Rear', '06/18', '06/18', '[\"AC\",\"Ambient lighting\",\"Keyless Entry\",\"Sunroof\"]', '[\"Driver fatigue alert\",\"Parking sensors\",\"Reverse cam \",\"Hill assist\"]', '[\"Daytime running lights\",\"Tinted rear windows\"]', '[\"Standard Built-in navigation system\",\"Sound system\",\"Touchscreen display\",\"Bluetooth \",\"USB \",\"Apple CarPlay & Android Auto\",\"Voice control\",\"DAB+ \"]', '[\"All-wheel drive \",\"Eco Drive mode\",\"Hybrid \",\"Plug-in Hybrid\",\"Mild Hybrid\"]', '[\"Alloy wheels\",\"Sport suspension\",\"Lowered ride height\",\"Running boards (for SUVs)\"]', '[\"Long-distance vehicle\",\"Spare tires\",\"Runflats\",\"Emergency kit\"]', '1', 1, '2025-07-16 07:13:20', '2025-07-16 07:13:20'),
(5, 'muv-car', 'MUV car', '2', 10, '10', '11', 2020, 25, 'Export', 110000.00, 110000.00, 0.00, 'Diesel ', 'Automatic', 600, '29', '4', 'Test Toyota', '9', 'White', '2nd', '5 Euro', '565', 'no', '552010', '', '', 'Yes', 'Dual-Zone Automatic AC', '', 'Front Only', '01/24', '01/24', '[\"Window sunshades\",\"Leather steering\",\"Keyless Entry\",\"Ambient lighting\",\"AC\"]', '[\"Trailer stability\",\"Auto parking\",\"curtain airbags\",\"Reverse cam \",\"Night vision camera\"]', '[\"Power-folding heated mirrors\",\"Rain sensor wipers \\/ Auto lights\",\"Tinted rear windows\"]', '[\"Rear seat screens\",\"DAB+ \",\"AUX\",\"USB \",\"Bluetooth \",\"Touchscreen display\"]', '[\"electric foldable Tow bar\",\"Hybrid \",\"Eco Drive mode\",\"All-wheel drive \"]', '[\"Lowered ride height\",\"Sport suspension\",\"Alloy wheels\"]', '[\"Jack tools included\",\"Runflats\",\"Spare tires\",\"Long-distance vehicle\"]', '1', 19, '2025-07-16 07:28:56', '2025-07-16 07:28:56'),
(6, 'alto', 'Alto', '2', 9, '9', '10', 2024, 22, 'Good', 950000.00, 950000.00, 0.00, 'Diesel ', 'Manual', 600000, '20', '3', 'Admin@123', '8', 'Black', '1st', '3 Euro', '123', 'yes', '451010', '', '', 'Yes', 'Manual AC', '', 'Front Only', '07/25', '07/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 1, '2025-07-16 10:27:40', '2025-07-16 10:27:40'),
(7, 'new-commercial-vehicle', 'New Commercial vehicle ', '3', 13, '13', '14', 2023, 30, 'Good', 5000000.00, 5000000.00, 0.00, 'Diesel ', 'Manual', 45000, '23', '3', 'Test Bus', '12', 'White', '1st', '5 Euro', '566', 'no', '552010', '', '', 'Yes', 'Automatic AC', '', 'Front and Rear', '01/24', '01/24', '[\"Leather steering\",\"Ambient lighting\",\"Lumbar support\"]', '[\"Hill assist\",\"Reverse cam \",\"Driver fatigue alert\"]', '[\"Tinted rear windows\",\"Cornering lights \\/ High beam assist\",\"Daytime running lights\"]', '[\"DVD player\",\"AUX\",\"USB \",\"Bluetooth \",\"Touchscreen display\"]', '[\"Regenerative braking\",\"Charging cables and fast-charging\",\"Rear-wheel drive\"]', '[\"Painted bumpers\",\"Sport suspension\",\"Alloy wheels\"]', '[\"Bike rack\",\"Roof box\",\"Runflats\"]', '1', 1, '2025-07-16 12:11:14', '2025-07-16 12:11:14'),
(8, 'new-splender', 'New Splender', '1', 1, '1', '2', 2021, 70, 'Good', 110000.00, 110000.00, 0.00, 'Petrol', 'Manual', 5000000, '24', '3', 'Test Bike', '1', 'Red', '2nd', '5 Euro', '123', 'no', '451030', '', '', 'Yes', '', '', '', '05/24', '05/24', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 19, '2025-07-16 12:17:33', '2025-07-16 12:17:33'),
(9, 'test-pickup', 'Test Pickup', '3', 15, '15', '16', 2019, 25, 'Good', 690000.00, 690000.00, 0.00, 'Diesel ', 'Manual', 50000, '21', '3', 'test Pickup', '14', 'White', '1st', '6 Euro', '147', 'no', '451050', '', '', 'Yes', 'No AC', '', 'None', '01/25', '01/25', '[]', '[\"Front airbags\"]', '[]', '[]', '[\"All-wheel drive \"]', '[]', '[\"Accident-free\",\"Full service history\"]', '1', 1, '2025-07-16 12:49:57', '2025-07-16 12:49:57'),
(10, 'havy-truck', 'Havy Truck', '3', 14, '14', '15', 2019, 22, 'Good', 7800000.00, 7800000.00, 0.00, 'Diesel ', 'Semi-Automatic', 50000, '17', '2', ' Test Havy Truck', '13', 'White', '1st', '6 Euro', '551', 'no', '451020', '', '', 'Yes', 'No AC', '', 'None', '12/25', '12/25', '[]', '[\"Adaptive cruise control\"]', '[]', '[\"USB \",\"Bluetooth \"]', '[\"Comfort Drive mode\"]', '[]', '[\"First owner\",\"Full service history\"]', '1', 19, '2025-07-16 12:53:12', '2025-07-16 12:53:12'),
(11, 'auto', 'Auto', '2', 9, '9', '10', 2020, 21, 'Export', 950000.00, 1023150.00, 73150.00, 'Petrol', 'Automatic', 50000, '18', '2', 'safasfa', '8', 'Black', '1st', '5 Euro', '55', 'yes', '451020', '', '', 'Yes', 'No AC', '', 'Rear Only', '10/25', '10/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 23, '2025-07-23 09:23:28', '2025-07-23 09:23:28'),
(12, 'new-dealer-ckeck', 'New Dealer Ckeck', '2', 8, '8', '9', 2013, 21, 'Good', 25000.00, 26925.00, 1925.00, 'Diesel ', 'Automatic', 870000, '29', '4', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '7', 'Black', '1st', '5 Euro', '133', 'yes', '451020', '', '', 'Yes', 'Automatic AC', '', 'Rear Only', '01/25', '01/25', '[\"Massage seats\",\"Automatic Climate Control\",\"Heated steering wheel\",\"Lumbar support\"]', '[\"curtain airbags\",\"Reverse cam \",\"Parking sensors\",\"Driver fatigue alert\",\"Adaptive cruise control\"]', '[\"Tinted rear windows\",\"Daytime running lights\",\"LED \\/ Matrix LED \\/ Xenon \\/ Laser lights\"]', '[\"AUX\",\"Standard Built-in navigation system\"]', '[\"Regenerative braking\",\"Hybrid \",\"Comfort Drive mode\"]', '[\"Sport suspension\",\"Sports kit \"]', '[\"Runflats\",\"Spare tires\"]', '3', 25, '2025-07-25 05:27:17', '2025-07-25 05:27:17'),
(14, 'citroen-c5-shine-177ps-40', 'Citroen C5 Shine 177PS', '2', 16, '16', '17', 2002, 85000, 'Good', 21900.00, 21900.00, 0.00, 'Diesel ', 'Automatic', 22222, '27', '4', 'im sehr guten Zustand', '15', 'White', '1st', '6 Euro', '122', 'yes', '22222', '', '', 'Yes', 'Manual AC', '', '', '03/21', '03/21', '[]', '[\"360\\u00b0 camera\",\"Blind-spot warning\",\"Reverse cam \",\"Driver fatigue alert\",\"Front airbags\"]', '[\"Auto-dimming rearview \\/ side mirrors\",\"Rain sensor wipers \\/ Auto lights\",\"Cornering lights \\/ High beam assist\",\"Daytime running lights\"]', '[\"WiFi hotspot\",\" Wireless phone charging\",\"DAB+ \",\"Voice control\",\"USB \",\"Bluetooth \",\"Digital cockpit\"]', '[]', '[\"Metallic\",\"Spoilers\",\"Alloy wheels\"]', '[]', '1', 26, '2025-07-29 05:30:41', '2025-07-29 05:30:41'),
(17, 'new-car', 'New Car', '2', 12, '12', '13', 2002, 33455, 'Accident Vehicle', 20998.00, 20998.00, 0.00, 'Diesel ', 'Continuously Variable', 0, '28', '4', '....', '11', 'Black', '2nd', '5 Euro', '122', 'yes', '79536', '', '', 'Yes', 'Automatic AC', '', 'Rear Only', '07/25', '07/25', '[\"Soft-close doors\",\"Massage seats\",\"Power windows\",\"Ambient lighting\",\"Heated seats (front and back)\"]', '[\"Blind-spot warning\",\"Reverse cam \",\"Driver fatigue alert\",\"Front airbags\"]', '[\"Rain sensor wipers \\/ Auto lights\",\"Daytime running lights\"]', '[\"Apple CarPlay & Android Auto\",\"Touchscreen display\"]', '[\"Front-wheel drive \"]', '[\"matte paint options\",\"Sport suspension\",\"Sports kit \"]', '[]', '1', 26, '2025-07-31 16:41:46', '2025-07-31 16:41:46'),
(18, 'testing', 'Testing', '1', 2, '4', '5', 2025, 50, 'Good', 2500000.00, 2500000.00, 0.00, 'Diesel ', 'Automatic', 0, '28', '4', 'Bike for Testing 1', '3', 'Black', '1st', '6 Euro', '123', 'yes', '451050', '', '', 'Yes', '', '', '', '03/25', '03/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 1, '2025-08-07 08:40:36', '2025-08-07 08:40:36'),
(19, 'testing-51', 'Testing', '1', 2, '4', '5', 2025, 50, 'Good', 2500000.00, 2500000.00, 0.00, 'Diesel ', 'Automatic', 0, '19', '2', 'Bike for Testing 1', '3', 'White', '1st', '6 Euro', '123', 'yes', '451050', '', '', 'Yes', '', '', '', '03/25', '03/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 1, '2025-08-07 08:57:27', '2025-08-07 08:57:27'),
(20, 'testing-68', 'Testing', '1', 2, '4', '5', 2025, 50, 'Good', 2500000.00, 2500000.00, 0.00, 'Diesel ', 'Automatic', 0, '2', '1', 'Bike for Testing 1', '3', 'Black', '1st', '6 Euro', '123', 'yes', '451050', '', '', 'Yes', '', '', '', '03/25', '03/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '0', 1, '2025-08-07 09:05:16', '2025-08-07 09:05:16'),
(21, 'porsche-cayenne-30d', 'Porsche Cayenne 3.0d', '2', 9, '9', '10', 2002, 85000, 'Good', 21900.00, 23586.30, 1686.30, 'CNG', 'Manual', 0, '28', '4', 'dsgsagsg', '8', 'Black', '1st', '4 Euro', '676', 'yes', '22222', '', '', 'Yes', 'Manual AC', '', 'Rear Only', '02/25', '02/25', '[\"Interior filters\",\"Push Start\"]', '[\"Trailer stability\",\"curtain airbags\"]', '[]', '[]', '[]', '[]', '[]', '1', 27, '2025-08-07 17:32:17', '2025-08-07 17:32:17'),
(22, 'bmw-530xd', 'BMW 530xd', '2', 11, '17', '18', 2002, 33455, 'Good', 28889.00, 28889.00, 0.00, 'Diesel ', 'Continuously Variable', 0, '26', '4', 'sdfasdfa', '16', 'Black', '1st', '4 Euro', '676', 'yes', '79536', '', '', 'Yes', 'Manual AC', '', 'Front Only', '06/25', '06/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '1', 1, '2025-08-07 18:16:40', '2025-08-07 18:16:40'),
(23, 'bmw-530xd-90', 'BMW 530xd', '2', 11, '17', '18', 2002, 33455, 'Good', 28889.00, 28889.00, 0.00, '', 'Continuously Variable', 0, '25', '4', 'sdfasdfa', '16', 'Black', '1st', '4 Euro', '676', 'yes', '79536', '', '', 'Yes', 'Manual AC', '', 'Front Only', '06/25', '06/25', '[]', '[]', '[]', '[]', '[]', '[]', '[]', '0', 1, '2025-08-11 08:58:46', '2025-08-11 08:58:46'),
(24, 'check', 'check', '3', 13, '13', '14', 2019, 21, 'Good', 100.00, 107.70, 7.70, 'Diesel ', 'Automatic', 0, '22', '3', 'testing', '12', 'Red', '2nd', '5 Euro', '', 'yes', '451010', '', '', 'Yes', 'Manual AC', '', 'Rear Only', '01/25', '01/25', '[\"Push Start\",\"Leather steering\",\"Power windows\"]', '[]', '[]', '[]', '[\"Charging cables and fast-charging\",\"Mild Hybrid\"]', '[]', '[]', '1', 6, '2025-08-11 11:11:30', '2025-08-11 11:11:30');

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
(1, '1752223578_Commuter.jpg', 'Commuter', 1, '2025-07-11 08:46:18'),
(2, '1752223605_ducati_super_sport.jpg', 'Sports Bike', 1, '2025-07-11 08:46:45'),
(3, '1752223626_cruiser.jpg', 'Cruiser ', 1, '2025-07-11 08:47:06'),
(4, '1752223650_Off-road.jpg', 'Off-road', 1, '2025-07-11 08:47:30'),
(5, '1752223673_Tourer.jpg', 'Tourer ', 1, '2025-07-11 08:47:53'),
(6, '1752223700_Scooter.jpg', 'Scooter ', 1, '2025-07-11 08:48:20'),
(8, '1752228524_Luxury_SUV.jpg', ' Luxury SUV', 2, '2025-07-11 10:08:44'),
(9, '1752228649_Crossover.jpg', 'Crossover', 2, '2025-07-11 10:10:49'),
(10, '1752228694_download.jpg', 'MUV', 2, '2025-07-11 10:11:34'),
(11, '1752228755_Sedan.jpg', 'Sedan', 2, '2025-07-11 10:12:35'),
(12, '1752228818_Hatchback.jpg', 'Hatchback', 2, '2025-07-11 10:13:38'),
(13, '1752667289_bus.jpg', 'Bus', 3, '2025-07-16 12:01:29'),
(14, '1752668727_truck1.jpg', 'Truck', 3, '2025-07-16 12:25:27'),
(15, '1752669240_Pickup1.jpg', 'Pickup', 3, '2025-07-16 12:34:00'),
(16, '', 'SUV', 2, '2025-07-29 05:17:34');

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
(5, 'Ujjain', '1', 1),
(16, 'Vienna ', '2', 1),
(17, 'Salzburg ', '2', 1),
(18, 'Innsbruck ', '2', 1),
(19, 'Graz', '2', 1),
(20, 'Berlin', '3', 1),
(21, 'Munich ', '3', 1),
(22, 'Frankfurt ', '3', 1),
(23, 'Hamburg ', '3', 1),
(24, 'Cologne ', '3', 1),
(25, 'Bern', '4', 1),
(26, 'Zurich', '4', 1),
(27, 'Geneva ', '4', 1),
(28, 'Lucerne', '4', 1),
(29, 'Interlaken ', '4', 1);

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
-- Table structure for table `contectus`
--

CREATE TABLE `contectus` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contectus`
--

INSERT INTO `contectus` (`id`, `mobile`, `email`, `address`) VALUES
(1, '0787465210', 'info@autokorb.com', '<p>Schwandgasse 26, 3414 Oberburg</p><p> Schweiz</p>');

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
(1, 'India', '2025-06-13 06:12:13', '2025-06-13 06:12:13'),
(2, 'Austria', '2025-08-11 11:58:36', '2025-08-11 11:58:36'),
(3, 'Germany', '2025-08-11 11:58:36', '2025-08-11 11:58:36'),
(4, 'Switzerland', '2025-08-11 11:58:36', '2025-08-11 11:58:36');

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
(1, 6, 'ABC', '1750072110_logo2.jpeg', 'Indore', NULL, NULL, NULL, NULL, '9632587410', 'com@gmasil.com', 'dfdffdfd', '03:52:00', '22:58:00', NULL, NULL, 'XYZ', 'des', 'contact@gmail.com', '6587943690', '1753788357_dummy_profile1.jpg', '2025-06-16 10:28:39', '2025-07-29 11:25:57'),
(2, 16, 'AutoKorb', '1750225203_logo2.jpeg', 'Bangali , Indore', NULL, NULL, NULL, NULL, '9632587410', 'Auto@gmasil.com', 'dfdffdfd', '11:08:00', '17:14:00', NULL, NULL, 'XYZ', 'des', 'contact@gmail.com', '6587943690', '1750225184_dummy_profile2.jpg', '2025-06-18 05:39:44', '2025-06-18 05:40:03'),
(3, 18, 'ABC', '1750253023_logo2.jpeg', 'Bangali, Indore', NULL, NULL, NULL, NULL, '9632587410', 'Auto@gmasil.com', 'https://irisinformatics.net/autodecar/', '10:00:00', '23:00:00', NULL, NULL, 'XYZ', 'Manager', 'contact@gmail.com', '6587943690', '1750253004_dummy_profile2.jpg', '2025-06-18 13:23:24', '2025-06-18 13:23:43'),
(4, 27, 'Autoslim GMBH', '1754587817_Autokorb.jpg', 'Zürichstrasse 1\r\n8117 Fällanden', NULL, NULL, NULL, NULL, '078455445', 'yasin@gmail.com', 'www.a', '09:00:00', '18:00:00', NULL, NULL, 'Yasin CALIK', 'Geschäftsführer', 'yasincalik1986@hotmail.com', '078455445', '1754587817_Autokorb1.jpg', '2025-08-07 17:30:17', '2025-08-07 17:30:17');

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
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `login_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `login_name`, `login_role`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, '', '', 'sonam', 's@gmail.com', '9874563210', 'Enquiry', 'Test for Enquiry'),
(2, '', '', 'sonam', 'decbmo1@gmail.com', '9874563210', 'Enquiry', 'dzcxbcxxcvcx'),
(3, '', '', 'sonam', 'demfdfsfdddo1@gmail.com', '9874563244', 'dffdfs', 'dsvdsdsffds'),
(4, '', '', ' zzxccxz', 'xzvs@gmail.com', '9874563244', 'xxxzzz', 'vzxvvzxz'),
(5, '', '', 'sonam', 'dgs@gmail.com', '9874563244', 'dffdfs65kjxfb', 'cxcbcncvv'),
(6, '', '', 'ewgds', 'sfsffsffdss@gmail.com', '9874563244', 'Enquiry', 'sdfsggdsgdg'),
(7, 'Admin', 'Admin', 'vvxcx', 'svxcvvx@gmail.com', '9874563259', 'Enquiry', 'xcbxcbbcxbxc'),
(8, 'Unknown', 'Visitor', 'safsfsf', 'dsfds@gmail.com', '9874563244', 'ggdsdf', 'sdfdsdssd'),
(9, 'Admin', 'Admin', 'sonam', 'sonamgoswami3898@gmail.com', '9874563244', 'Enquiry', 'poihnpn'),
(10, 'Admin', 'Admin', 'sonam12', 'manan@gmail.com', '9874563210', 'ggdsdf', 'kljhblkj');

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
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `vehicle_id`, `created_at`) VALUES
(9, 19, 5, '2025-07-17 11:47:56'),
(10, 19, 8, '2025-07-17 11:58:28'),
(11, 19, 10, '2025-07-17 11:58:46'),
(13, 6, 2, '2025-07-18 07:00:48'),
(22, 6, 6, '2025-07-21 13:30:01'),
(23, 24, 12, '2025-07-25 05:33:25'),
(32, 25, 6, '2025-07-25 06:29:36'),
(59, 1, 12, '2025-07-31 12:21:46'),
(60, 1, 17, '2025-08-04 12:29:23');

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
(1, 'Splendor', 1, 1, '1752223931_Splendor.jpg', '2025-07-11 08:52:11', '2025-07-11 08:52:11'),
(3, 'Platina', 1, 1, '1752224216_Platina1.png', '2025-07-11 08:56:56', '2025-07-11 08:56:56'),
(4, 'Yamaha', 1, 2, '1752224276_Yamaha_R15.png', '2025-07-11 08:57:56', '2025-07-11 08:57:56'),
(5, 'KTM RC', 1, 2, '1752224372_KTM_RC.png', '2025-07-11 08:59:32', '2025-07-11 08:59:32'),
(6, 'Royal Enfield Classic', 1, 3, '1752224472_Royal_Enfield_Classic.png', '2025-07-11 09:01:12', '2025-07-11 09:01:12'),
(8, 'Land Rover', 2, 8, '1752228867_logo2.png', '2025-07-11 10:14:27', '2025-07-11 10:14:27'),
(9, 'Kia', 2, 9, '1752229152_partner2.png', '2025-07-11 10:19:12', '2025-07-11 10:19:12'),
(10, 'Toyota', 2, 10, '1752229199_partner3.png', '2025-07-11 10:19:59', '2025-07-11 10:19:59'),
(11, 'Nissan', 2, 11, '1752229240_partner5.png', '2025-07-11 10:20:40', '2025-07-11 10:20:40'),
(12, 'Ford ', 2, 12, '1752229271_partner6.png', '2025-07-11 10:21:11', '2025-07-11 10:21:11'),
(13, 'Eicher', 3, 13, '1752667405_download.png', '2025-07-16 12:03:25', '2025-07-16 12:03:25'),
(14, 'TATA', 3, 14, '1752668846_tata.png', '2025-07-16 12:27:26', '2025-07-16 12:27:26'),
(15, 'Ashok Leyland', 3, 15, '1752669454_Ashok_Leyland.png', '2025-07-16 12:37:34', '2025-07-16 12:37:34'),
(16, 'Citroen', 2, 16, '', '2025-07-29 05:17:48', '2025-07-29 05:17:48'),
(17, 'BMW', 2, 11, '', '2025-08-07 18:11:49', '2025-08-07 18:11:49');

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
(1, 'Plus', 1, 1, 1, '2025-07-11 09:11:48', '2025-07-11 09:11:48'),
(2, 'iSmart 110', 1, 1, 1, '2025-07-11 09:12:12', '2025-07-11 09:12:12'),
(3, 'Platina 100 ES Drum', 1, 1, 3, '2025-07-11 09:12:57', '2025-07-11 09:12:57'),
(4, 'Platina 110 Drum', 1, 1, 3, '2025-07-11 09:13:22', '2025-07-11 09:13:22'),
(5, 'R15 ', 1, 2, 4, '2025-07-11 09:13:45', '2025-07-11 09:13:45'),
(6, 'KTM RC 125', 1, 2, 5, '2025-07-11 09:15:01', '2025-07-11 09:15:01'),
(7, 'Classic 350', 1, 3, 6, '2025-07-11 09:15:39', '2025-07-11 09:15:39'),
(8, 'Hero XPulse 200 4V', 1, 4, 7, '2025-07-11 09:16:48', '2025-07-11 09:16:48'),
(9, 'Range Rover', 2, 8, 8, '2025-07-11 10:21:47', '2025-07-11 10:21:47'),
(10, 'Seltos', 2, 9, 9, '2025-07-11 10:22:14', '2025-07-11 10:22:14'),
(11, 'Fortuner', 2, 10, 10, '2025-07-11 10:22:45', '2025-07-11 10:22:45'),
(12, 'Magnite', 2, 11, 11, '2025-07-11 10:23:08', '2025-07-11 10:23:08'),
(13, 'Endeavour', 2, 12, 12, '2025-07-11 10:24:04', '2025-07-11 10:24:04'),
(14, 'Pro 2049', 3, 13, 13, '2025-07-16 12:05:41', '2025-07-16 12:05:41'),
(15, 'Ace', 3, 14, 14, '2025-07-16 12:28:40', '2025-07-16 12:28:40'),
(16, 'Dost', 3, 15, 15, '2025-07-16 12:38:08', '2025-07-16 12:38:08'),
(17, 'C5 Aircross', 2, 16, 16, '2025-07-29 05:18:09', '2025-07-29 05:18:09'),
(18, '530xd M-Sport', 2, 11, 17, '2025-08-07 18:12:18', '2025-08-07 18:12:18'),
(19, '530xd Luxury Line', 2, 11, 17, '2025-08-07 18:12:38', '2025-08-07 18:12:38');

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL CHECK (`rating` between 1 and 5),
  `review_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `vehicle_id`, `rating`, `review_text`, `created_at`, `updated_at`) VALUES
(4, 3, 9, 2, 'I am very happy with this.', '2025-07-22 10:10:00', NULL),
(16, 6, 9, 5, 'hello', '2025-07-22 12:05:55', NULL),
(17, 6, 9, 4, '4 hello', '2025-07-22 12:06:16', NULL),
(18, 6, 9, 3, '3 hello', '2025-07-22 12:06:39', NULL),
(19, 6, 9, 2, '2 hello', '2025-07-22 12:06:58', NULL),
(20, 6, 9, 1, 'heelo', '2025-07-22 12:07:18', NULL),
(21, 1, 14, 5, 'Good', '2025-08-02 06:25:17', NULL),
(22, 1, 21, 5, 'afafa', '2025-08-07 17:33:28', NULL),
(23, 1, 22, 5, 'yes', '2025-08-07 18:18:45', NULL);

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
  `created_at` datetime DEFAULT current_timestamp()
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
  `country` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `token_expiry` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mobile`, `email`, `password`, `role`, `profile`, `status`, `country`, `token`, `token_expiry`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '9934567890', 'admin@gmail.com', '$2y$10$0S0uaz.dX2OaH0QnYckclueuKb18jNOZ2gsyME2M4R6fqgOKBW1g.', '1', '1753788216_dummy_profile.jpg', 1, '3', '619f7e46991a9ecd34da3c86500ed008', '2025-05-23 14:50:50', '2025-05-20 12:17:42', '2025-05-20 12:17:42'),
(2, 'sonam', '9554541230', 'sonamgoswami38981@gmail.com', '$2y$10$PEMzvpsEQPD2g6m2XYx8cOc0lXnqPIicRUpf/2khyn596ZeL9PjuK', '4', '', 1, '', '7a93a8574a06d7cdd46777aff7698b14', '2025-05-23 14:27:36', '2025-05-20 12:48:37', '2025-05-20 12:48:37'),
(3, 'fsedsdfsd', '', 'manan@gmail.com', '$2y$10$EVnHHNcGVFLlMDvWLeY9peHVgiRznfs58N125291Pbp2bgxjUHMLW', '4', '', 1, '', '', '0000-00-00 00:00:00', '2025-05-20 12:51:37', '2025-05-20 12:51:37'),
(4, 'test1', '', 'test@gmail.com', '$2y$10$j9mTlIX38iIDYJx7gaa.fO1HGuiiJ9U9gwqR1cxJquv6HKkVHE4xO', '4', '1748242883_dummy_profile.jpg', 1, '', '', '0000-00-00 00:00:00', '2025-05-20 13:50:02', '2025-05-20 13:50:02'),
(5, 'Seller', '7974046163', 'seller@gmail.com', '$2y$10$YlbM6RwE2O7V18WogFvNi.1k0YHQ6kRU/GVFaIamjGq.Sf3t8Gyv2', '2', '1750146494_dummy_profile.jpg', 1, '', '', '0000-00-00 00:00:00', '2025-05-23 06:38:18', '2025-05-23 06:38:18'),
(6, 'Demo', '7974046162', 'demo1@gmail.com', '$2y$10$pVHubpiC5ZaPpk4dSAo1p.qcx5bXM1dAQ.tnlXkCCgHOsfBFgHvyO', '3', '1753788357_dummy_profile.jpg', 1, '2', '', '0000-00-00 00:00:00', '2025-05-26 09:38:35', '2025-05-26 09:38:35'),
(7, 'sdsdd', '', 'asdf@gmail.com', '$2y$10$fl2VDoMLng13XPpEUPuIPugAIL8mTWLPMg0vBK3e5FOQuOS60E0oS', '2', '', 1, '', '', '0000-00-00 00:00:00', '2025-05-26 09:40:38', '2025-05-26 09:40:38'),
(10, 'selller', '', 'sel@gmail.com', '$2y$10$pBPO6Yd3CrRe61exCFLnGOAC3lYy/tfJzZgEwHYqIh2RwzobPTJOy', '2', '', 1, '', '', '0000-00-00 00:00:00', '2025-06-06 13:44:41', '2025-06-06 13:44:41'),
(11, 'Dealer-Demo', '', 'dealer@gmail.com', '$2y$10$RRCdCOEHiijwIthRgpOz/.YyEfD6Y1A6tacNrn9YWMknYbIU0g8DK', '3', '', 1, '', '', '0000-00-00 00:00:00', '2025-06-11 13:34:21', '2025-06-11 13:34:21'),
(12, 'addak', '', 'asass@gmail.com', '$2y$10$NV.y.n5Y8J902ecrj4Saye5CGUvqrMqVSiC1n0hFfQB7sZyAsvedy', '2', '', 1, '', '', '0000-00-00 00:00:00', '2025-06-17 13:29:01', '2025-06-17 13:29:01'),
(15, 'New Seller', '8745691234', 'new_seller@gmail.com', '$2y$10$o3C0viYWHaKlEvuDF5JjDeh7kVWM57qm4Q6cYe/rvvMFlxjzJVhJO', '2', '1750223013_dummy_profile.jpg', 1, '', '', '0000-00-00 00:00:00', '2025-06-18 04:59:19', '2025-06-18 04:59:19'),
(16, 'New Dealer', '7974046163', 'new_dealer@gmail.com', '$2y$10$bg.mlevQslcP7mU3Glk7LeYCNaKsicKYr7IJQXP2qtEinEV4eAP4m', '3', '1750225184_dummy_profile.jpg', 1, '', '', '0000-00-00 00:00:00', '2025-06-18 05:08:46', '2025-06-18 05:08:46'),
(17, 'Seller1', '7974046163', 'seller1@gmail.com', '$2y$10$FAZI4K69FTshA/Jsu9ekh.B8PtPxpCrR2bUzMGgbLH3km6YAO9q36', '2', '1750252455_dummy_profile.jpg', 1, '', '', '0000-00-00 00:00:00', '2025-06-18 13:10:29', '2025-06-18 13:10:29'),
(18, 'Dealer1', '9934567890', 'dealer1@gmail.com', '$2y$10$NPR/kiNKB/JWknpeX9LYdui0RwsSiABj7M0eAtFYAp9gy3RI.rEf2', '3', '1750253004_dummy_profile.jpg', 0, '', '', '0000-00-00 00:00:00', '2025-06-18 13:15:30', '2025-06-18 13:15:30'),
(19, 'Manish', '8269838737', 'manish@gmail.com', '$2y$10$owHzyH1giz7qw3vC87oXFOVkYQl8ekcxAj59FnMdCb1cbsmuqz0I2', '2', '1752748324_dummy_profile.jpg', 1, '', '', '0000-00-00 00:00:00', '2025-07-16 10:21:23', '2025-07-16 10:21:23'),
(20, 'Prerna ', '97556654666', 'prerna@gmail.com', '$2y$10$oitnKFSE/TG1DeT5ZpwteehFX08rQrAf9YHz.cEPDc8KHPCnvyy4K', '4', '', 1, '', '', '0000-00-00 00:00:00', '2025-07-16 10:37:45', '2025-07-16 10:37:45'),
(21, 'checkdealer', '9638527410', 'irisinformatics3@gmail.com', '$2y$10$cvrMDCh4BhGmYGI0wQ3st.zGW.6Yd7Q69zlIYa8Mj6BkEGyVdLEAS', '3', '', 1, '', '', '0000-00-00 00:00:00', '2025-07-21 09:23:45', '2025-07-21 09:23:45'),
(22, 'checkbuyer@gmail.com', '7418529630', 'checkbuyer@gmail.com', '$2y$10$UfbaBZ/Ro8Q4VSd81OCKz.Q3skGcMdJ5VrUAb3Dx5kwpR7uW/XxMe', '4', '', 1, '', '', '0000-00-00 00:00:00', '2025-07-21 09:25:05', '2025-07-21 09:25:05'),
(23, 'Raj', '9632587410', 'raj@gmail.com', '$2y$10$I5FkPnJIUTUmFYaRO1/ZiO8D3B.3H8ArfRd9i4jfs1kC2EgLEO5Ee', '3', '', 1, '', '', '0000-00-00 00:00:00', '2025-07-23 09:16:02', '2025-07-23 09:16:02'),
(24, 'gecim', '4545454545', 'vybyveh@mailinator.com', '$2y$10$7Q3IiOcOnPSTg5BiSD83s.heJeQn9pereiJ2teo/9CHoGGY.7V/SG', '4', '', 1, '', '', '0000-00-00 00:00:00', '2025-07-25 05:21:06', '2025-07-25 05:21:06'),
(25, 'Sonam', '9873216540', 'sonamgoswami3898@gmail.com', '$2y$10$YCxb/F4cvfdS28WfziBmaOX9Has8Q9qBW1toEAH2Xrnk7Q8ravHSy', '3', '', 1, '', '', '0000-00-00 00:00:00', '2025-07-25 05:21:58', '2025-07-25 05:21:58'),
(26, 'yasincalik1986', '0787465210', 'yasincalik1986@gmail.com', '$2y$10$5VmfPMknZPLMs9yWBVDJgeYRvuwIKAUnlNNTjZQnDCyMr8LbFn6Sq', '2', '1753765820_8a8f3d05-c2cb-4019-8377-c2a57ae62dde.jpg', 1, '', '', '0000-00-00 00:00:00', '2025-07-29 05:06:57', '2025-07-29 05:06:57'),
(27, 'Autoslim', '0783883838', 'yasincalik1986@hotmail.com', '$2y$10$P3zbNhpLpgtW9RmtgeGvkedvqyCAe8dwciZXdTZiVWcHYKHGhm83q', '3', '1754587840_WhatsApp_Image_2025-06-03_at_18_34_25.jpeg', 1, '', '', '0000-00-00 00:00:00', '2025-08-07 17:21:52', '2025-08-07 17:21:52'),
(28, 'njnnjk', '9898978521', 'klkkl@gmail.com', '$2y$10$7K1h3eXyicUELGcQWGjJ8uePabkfgCuVRlP3zb9WZjLjykLlC3Xvy', '3', '', 1, '', '', '0000-00-00 00:00:00', '2025-08-08 06:58:28', '2025-08-08 06:58:28'),
(29, 'seffdsfsd', '4789652310', 'u98iojoi@gmail.com', '$2y$10$rIblviKCuZIUCvH5oLyB2uIA5KJ.xie28IwTyClujGI5eMvHX0U0O', '3', '', 1, '3', '', '0000-00-00 00:00:00', '2025-08-08 07:14:35', '2025-08-08 07:14:35'),
(30, 'Sumit', '6558978965', 'sumit@gmail.com', '$2y$10$gc.vqffEVcESuGabdBpxZelx4Hirxyn06JAoOfNW1oNGCR.c12n4a', '3', '', 1, '4', '', '0000-00-00 00:00:00', '2025-08-14 08:03:27', '2025-08-14 08:03:27'),
(31, 'Buyer', '9894878965', 'buyer@gmail.com', '$2y$10$mZZMmmmpxILolYHgN5M3ee7mxTYrPMSWe4uTCVKrVEaL1.oZoa.8K', '4', '1755162473_Autokorb_logo_.png', 1, '4', '', '0000-00-00 00:00:00', '2025-08-14 09:07:09', '2025-08-14 09:07:09');

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
(1, 6, 1, '2025-07-01', '2025-07-31', 7),
(2, 5, 1, '2025-07-01', '2025-07-31', 2),
(3, 19, 1, '2025-07-16', '2025-08-15', 4),
(5, 26, 1, '2025-07-29', '2025-08-28', 2),
(6, 25, 1, '2025-07-04', '2025-08-03', 0),
(7, 21, 1, '2025-07-05', '2025-08-04', 0),
(8, 6, 1, '2025-08-11', '2025-09-10', 1),
(9, 27, 1, '2025-08-12', '2025-09-11', 0);

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
(1, 'XPulse 200T 4V', 1, 1, 1, 2),
(2, 'Platina 110 Drum', 1, 1, 3, 0),
(3, 'R15 V3', 1, 2, 4, 5),
(4, 'BS6', 1, 2, 5, 6),
(5, 'Halcyon', 1, 3, 6, 7),
(6, 'Pro', 1, 4, 7, 8),
(7, 'HSE', 2, 8, 8, 9),
(8, 'GTX+', 2, 9, 9, 10),
(9, 'Legender', 2, 10, 10, 11),
(10, 'Premium', 2, 11, 11, 12),
(11, 'Titanium+', 2, 12, 12, 13),
(12, 'Cabin + Cargo', 3, 13, 13, 14),
(13, 'Ace Gold Diesel', 3, 14, 14, 15),
(14, 'Dost Lite', 3, 15, 15, 16),
(15, 'Shine', 2, 16, 16, 17),
(16, 'Limousine', 2, 11, 17, 18);

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
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contectus`
--
ALTER TABLE `contectus`
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
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterior_and_design`
--
ALTER TABLE `exterior_and_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `car_img`
--
ALTER TABLE `car_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `car_list`
--
ALTER TABLE `car_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comfort_and_interior`
--
ALTER TABLE `comfort_and_interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contectus`
--
ALTER TABLE `contectus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dealer_profile`
--
ALTER TABLE `dealer_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `engine_and_drive_technology`
--
ALTER TABLE `engine_and_drive_technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exterior_and_design`
--
ALTER TABLE `exterior_and_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
