-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 05:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `cartId` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `count` int(11) NOT NULL,
  `total` float NOT NULL,
  `timeNow` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`cartId`, `image`, `name`, `price`, `count`, `total`, `timeNow`) VALUES
(1, '', 'Tunic', 459, 4, 1836, '2023-08-23 17:32:50.535690'),
(2, '', 'Oxford', 1200, 2, 2400, '2023-08-23 17:32:50.535690'),
(3, '', 'titan', 459, 3, 1377, '2023-08-23 17:32:50.535690'),
(4, '', 'Tunic', 459, 6, 2754, '2023-08-23 17:32:50.535690'),
(5, '', 'Oxford', 1200, 2, 2400, '2023-08-23 17:32:50.535690'),
(6, '', 'titan', 459, 4, 1836, '2023-08-23 17:32:50.535690'),
(7, '', 'Tunic', 459, 4, 1836, '2023-08-23 17:32:50.535690'),
(8, '', 'Oxford', 1200, 2, 2400, '2023-08-23 17:32:50.535690'),
(9, '', 'titan', 459, 5, 2295, '2023-08-23 17:32:50.535690'),
(10, '', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(11, '', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(12, '', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(13, '', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(14, '', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(15, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(16, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(17, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(18, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(19, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(20, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(21, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(22, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(23, 'img/women-1.jpg', 'Tunic', 459, 4, 1836, '2023-08-23 17:32:50.535690'),
(24, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(25, 'img/women-1.jpg', 'Tunic', 459, 4, 1836, '2023-08-23 17:32:50.535690'),
(26, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(27, 'img/women-1.jpg', 'Tunic', 459, 4, 1836, '2023-08-23 17:32:50.535690'),
(28, 'images/Bulidings/building.jpg', 'Building', 2000, 1, 2000, '2023-08-23 17:32:50.535690'),
(29, 'img/women-1.jpg', 'Tunic', 459, 8, 3672, '2023-08-23 17:32:50.535690'),
(30, 'Categories/1.Building/sand/dust-filling-sand.jpg', 'dust-filling-sand.(cube1)', 15000, 6, 90000, '2023-08-23 17:32:50.535690'),
(31, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-23 17:32:50.535690'),
(32, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-23 17:34:07.978247'),
(33, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-23 17:43:55.476053'),
(34, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-23 18:23:17.609487'),
(35, 'img/men-1.jpg', 'Oxford', 1200, 4, 4800, '2023-08-23 18:23:17.633781'),
(36, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-23 18:23:53.637044'),
(37, 'img/men-1.jpg', 'Oxford', 1200, 5, 6000, '2023-08-23 18:23:53.661399'),
(38, 'img/women-1.jpg', 'Tunic', 459, 1, 459, '2023-08-23 18:23:53.666287'),
(39, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:23:53.670454'),
(40, '', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-23 18:25:31.283614'),
(41, '', 'Oxford', 1200, 5, 6000, '2023-08-23 18:25:31.307702'),
(42, '', 'Tunic', 459, 1, 459, '2023-08-23 18:25:31.313328'),
(43, '', 'dust-filling-sand.(cube1)', 15000, 1, 15000, '2023-08-23 18:25:31.317263'),
(44, '', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:25:31.321408'),
(45, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 18:45:37.066321'),
(46, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:45:37.087577'),
(47, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 18:46:43.490487'),
(48, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:46:43.513133'),
(49, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-23 18:46:43.516397'),
(50, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 18:47:42.629546'),
(51, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:47:42.651385'),
(52, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-23 18:47:42.656492'),
(53, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 18:48:21.279424'),
(54, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:48:21.301966'),
(55, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-23 18:48:21.306291'),
(56, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 18:48:43.147631'),
(57, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:48:43.169172'),
(58, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-23 18:48:43.172711'),
(59, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-23 18:48:43.176294'),
(60, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 18:49:32.598644'),
(61, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 18:49:32.620914'),
(62, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-23 18:49:32.624730'),
(63, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-23 18:49:32.629055'),
(64, 'Categories/1.Building/soil/red-soil.jpg', 'red-soil(cube1)', 9000, 2, 18000, '2023-08-23 18:49:32.633450'),
(65, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 19:02:46.885662'),
(66, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 19:02:46.889792'),
(67, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 19:04:17.960024'),
(68, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 19:04:17.964138'),
(69, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-23 20:21:06.075274'),
(70, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-23 20:21:06.081829'),
(71, 'Categories/2.Tools/Power Tools/Grinders/dsm125a-angle-grinder_1.jpg', 'dsm125a-angle-grinder_1', 8550, 2, 17100, '2023-08-24 01:52:24.651034'),
(72, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 02:59:25.345896'),
(73, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 02:59:53.795415'),
(74, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-24 02:59:53.797753'),
(75, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 03:01:47.547526'),
(76, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-24 03:01:47.552088'),
(77, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 03:03:47.411503'),
(78, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-24 03:03:47.416123'),
(79, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 04:13:07.286944'),
(80, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 2, 40000, '2023-08-24 04:13:07.324830'),
(81, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 04:51:20.067030'),
(82, 'img/women-1.jpg', 'Tunic', 459, 1, 459, '2023-08-24 04:51:20.073297'),
(83, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 04:58:54.555658'),
(84, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 04:58:54.579770'),
(85, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:07:04.161749'),
(86, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:07:04.184827'),
(87, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:08:50.393320'),
(88, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:08:50.420634'),
(89, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:13:39.112760'),
(90, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:13:39.118155'),
(91, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:14:05.553313'),
(92, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:14:05.556784'),
(93, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:22:12.503564'),
(94, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:22:12.508762'),
(95, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:24:38.893172'),
(96, 'Categories/1.Building/soil/Loam-Soil.jpg', 'Loam-Soil (1 cube)', 12000, 1, 12000, '2023-08-24 05:24:38.896793'),
(97, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:32:06.970261'),
(98, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:32:06.992895'),
(99, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:37:53.632463'),
(100, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:37:53.655326'),
(101, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:49:29.731010'),
(102, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:49:29.735631'),
(103, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:52:00.354897'),
(104, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:52:00.379241'),
(105, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 05:54:36.441017'),
(106, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 05:54:36.447200'),
(107, 'img/men-1.jpg', 'Oxford', 1200, 3, 3600, '2023-08-24 05:54:36.455848'),
(108, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:03:03.149878'),
(109, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:03:03.173626'),
(110, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:03:03.178359'),
(111, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:13:03.698552'),
(112, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:13:03.707068'),
(113, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:13:03.713192'),
(114, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:14:47.266632'),
(115, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:14:47.288921'),
(116, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:14:47.294078'),
(117, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:18:38.146630'),
(118, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:18:38.168743'),
(119, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:18:38.172144'),
(120, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:20:45.333983'),
(121, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:20:45.357084'),
(122, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:20:45.360726'),
(123, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:23:03.571348'),
(124, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:23:03.592710'),
(125, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:23:03.595379'),
(126, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:24:25.534963'),
(127, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:24:25.558161'),
(128, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:24:25.563056'),
(129, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 1, 20000, '2023-08-24 06:24:36.877096'),
(130, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 06:24:36.899678'),
(131, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 06:24:36.903808'),
(132, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 3, 60000, '2023-08-24 07:47:53.185614'),
(133, 'img/women-1.jpg', 'Tunic', 459, 2, 918, '2023-08-24 07:47:53.188017'),
(134, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 07:47:53.190321'),
(135, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 3, 60000, '2023-08-24 15:54:16.080800'),
(136, 'img/women-1.jpg', 'Tunic', 459, 8, 3672, '2023-08-24 15:54:16.084583'),
(137, 'img/men-1.jpg', 'Oxford', 1200, 2, 2400, '2023-08-24 15:54:16.087013'),
(138, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 3, 60000, '2023-08-25 03:59:18.659441'),
(139, 'Categories/1.Building/sand/dust-filling-sand.jpg', 'dust-filling-sand.(cube1)', 15000, 4, 60000, '2023-08-25 03:59:18.742719'),
(140, 'Categories/1.Building/sand/River sand.png', 'River sand 4.5 cube', 20000, 5, 100000, '2023-08-25 10:12:35.382272'),
(141, 'Categories/1.Building/sand/dust-filling-sand.jpg', 'dust-filling-sand.(cube1)', 15000, 4, 60000, '2023-08-25 10:12:35.386833'),
(142, 'Categories/2.Tools/Hand & Electrical Tools/Hammer & Striking tools/2.jpg', 'Rubber Mallet Hammer', 780, 2, 1560, '2023-08-25 10:12:35.390435'),
(143, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 4, 32000, '2023-08-25 10:12:35.394967'),
(144, 'Categories/3.Paints/paint tool/Ladders/12 Feet Fibreglass Ladder.png', '12 Feet Fibreglass Ladder.', 7599, 2, 15198, '2023-08-26 05:22:42.225114'),
(145, 'Categories/4.Electrical/home appliance/ac/Sd8e9c5077bf64c7c8c0824a6b49c3a8d9.jpg', 'Astro', 169999, 2, 339998, '2023-08-26 05:22:42.232887'),
(146, 'Categories/3.Paints/paint tool/Ladders/12 Feet Fibreglass Ladder.png', '12 Feet Fibreglass Ladder.', 7599, 1, 7599, '2023-08-26 08:45:33.604035'),
(147, 'Categories/4.Electrical/home appliance/ac/Sd8e9c5077bf64c7c8c0824a6b49c3a8d9.jpg', 'Astro', 169999, 2, 339998, '2023-08-26 08:45:33.608493'),
(148, 'Categories/2.Tools/Power Tools/Grinders/dsm125a-angle-grinder_1.jpg', 'dsm125a-angle-grinder_1', 8550, 2, 17100, '2023-08-26 08:45:33.610339'),
(149, 'Categories/4.Electrical/Accessories/Batteries/5373eda4eff151d22465d45e2a4f4186.jpg', 'Heavy-duty-battery', 60, 2, 120, '2023-08-26 09:07:15.762783'),
(150, 'Categories/4.Electrical/Accessories/Batteries/5373eda4eff151d22465d45e2a4f4186.jpg', 'Heavy-duty-battery', 60, 2, 120, '2023-08-26 09:17:36.152914'),
(151, 'Categories/4.Electrical/Accessories/Batteries/5373eda4eff151d22465d45e2a4f4186.jpg', 'Heavy-duty-battery', 60, 2, 120, '2023-08-26 09:34:53.709046'),
(152, 'Categories/4.Electrical/Accessories/Batteries/5373eda4eff151d22465d45e2a4f4186.jpg', 'Heavy-duty-battery', 60, 2, 120, '2023-08-26 10:38:59.010276'),
(153, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 10:50:34.705023'),
(154, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 11:35:05.854524'),
(155, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 12:54:51.519303'),
(156, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 13:02:11.469983'),
(157, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 13:59:08.766781'),
(158, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 14:55:47.017080'),
(159, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 15:02:01.730809'),
(160, 'Categories/1.Building/sand/soft-pit-sand.jpg', 'soft-pit-sand 1 cube', 8000, 2, 16000, '2023-08-26 15:03:49.504423');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceID` varchar(20) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_detail`
--

CREATE TABLE `login_detail` (
  `customer_ID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNumber` int(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_detail`
--

INSERT INTO `login_detail` (`customer_ID`, `username`, `fullname`, `email`, `mobileNumber`, `password`) VALUES
(1, 'gg', '', 'wimukthiudana789@gmail.com', 1234555, '1212'),
(3, 'shaz', '', 'wergbn@gmail.com', 12221, '122'),
(4, 'f', '', 'shaz@gmail.com', 12221, 'Aa123456'),
(15, 'ggj', '', 'wimukthiudana789@gmail.com', 12345677, 'Aa123456'),
(16, 'shaz', '', 'shaz@gmail.com', 1234567799, 'Aa123456'),
(17, 'kk', '', 'h@.com', 1234567700, 'Aa121212'),
(18, 'bbb', '', 'ks@gmail.com', 1234567799, 'Aa111111'),
(23, 'kudse221f-004', 'hjgfiywegfiydsbb', 'shaaz@gmail.com', 1234555022, 'Aa123456');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `star` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `image`, `price`, `star`) VALUES
('sand', 'dust-filling-sand.(cube1)', 'Categories/1.Building/sand/dust-filling-sand.jpg', 15000, 3.5),
('sand', 'River sand 4.5 cube', 'Categories/1.Building/sand/River sand.png', 20000, 4.2),
('sand', 'soft-pit-sand 1 cube', 'Categories/1.Building/sand/soft-pit-sand.jpg', 8000, 3),
('gravel', 'Loam-Soil (1 cube)', 'Categories/1.Building/soil/Loam-Soil.jpg', 12000, 4.6),
('gravel', 'red-soil(cube1)', 'Categories/1.Building/soil/red-soil.jpg', 9000, 4),
('cement', 'Ordinary Portland Cement', 'Categories/1.Building/cement/Ordinary Portland Cement.png', 2600, 4.1),
('cement', 'Portland Pozzolana Cement', 'Categories/1.Building/cement/Portland Pozzolana Cement.jpg', 4800, 4.1),
('bricks', 'burnt clay bricks 1pc', 'Categories/1.Building/Bricks/burnt clay bricks.jpg', 20, 3.1),
('bricks', 'Fly-Ash-Brick', 'Categories/1.Building/Bricks/Fly-Ash-Brick.jpg', 40, 4.5),
('aircomp', 'portable-air-compressors', 'Categories/2.Tools/Power Tools/Air Compressors/portable-air-compressors.jpg', 25000, 2.6),
('grinders', 'dsm125a-angle-grinder_1', 'Categories/2.Tools/Power Tools/Grinders/dsm125a-angle-grinder_1.jpg', 8550, 3.2),
('tapes', 'Masking Tape ', 'Categories/3.Paints/paint accessories/Adhesives and taps/71ClzrMycOL.AC_UF1000,1000_QL80.jpg', 60, 1.2),
('tapes', 'Washable-room-Kitchen', 'Categories/3.Paints/paint accessories/Adhesives and taps/Washable-room-Kitchen.jpg', 100, 1.2),
('thinner', 'Low Odour Thinners', 'Categories/3.Paints/paint accessories/thinner/Low Odour Thinners.jpg', 175, 1.5),
('thinner', 'nippolac-nc-thinner', 'Categories/3.Paints/paint accessories/thinner/nippolac-nc-thinner.png', 600, 2.2),
('thinner', 'super_nc_thinner', 'Categories/3.Paints/paint accessories/thinner/super_nc_thinner.png', 224, 1.2),
('waterproof', 'Shower-Waterproofing-Membrane', 'Categories/3.Paints/paint accessories/waterproofing materials/Shower-Waterproofing-Membrane.jpg', 2450, 2.5),
('waterproof', 'Waterproof-Roof-Sheet', 'Categories/3.Paints/paint accessories/waterproofing materials/Waterproof-Roof-Sheet.jpg', 3999, 3.5),
('hammer', 'Rubber Mallet Hammer', 'Categories/2.Tools/Hand & Electrical Tools/Hammer & Striking tools/2.jpg', 780, 3),
('hammer', 'Ball Pane Hammer', 'Categories/2.Tools/Hand & Electrical Tools/Hammer & Striking tools/3.jpg', 1560, 3.9),
('masonry', 'Wodden Mason Trowel', 'Categories/2.Tools/Hand & Electrical Tools/Masonry tools/1.jpg', 250, 3.1),
('masonry', 'Scrapper', 'Categories/2.Tools/Hand & Electrical Tools/Masonry tools/3.jpeg', 200, 3.1),
('screw', 'Screw Driver Flat', 'Categories/2.Tools/Hand & Electrical Tools/Screw drivers & Nut drivers/1.jpeg', 120, 3.2),
('screw', 'Screw Driver Phillips', 'Categories/2.Tools/Hand & Electrical Tools/Screw drivers & Nut drivers/2.jpg', 100, 2.6),
('causeway', 'ACRYLIC WALL FILLER', 'Categories/3.Paints/paint list/causeway/Untitled-16.png', 1250, 4.5),
('causeway', 'Causeway Luxury Shield', 'Categories/3.Paints/paint list/causeway/Untitled-17.png', 2548, 4.1),
('causeway', 'causeway luxury shield', 'Categories/3.Paints/paint list/causeway/Untitled-18.png', 1549, 4.5),
('multilac', 'Emulsion', 'Categories/3.Paints/paint list/multilac/emulsion.jpg', 1999, 3.6),
('multilac', 'floor-paint-waterbase', 'Categories/3.Paints/paint list/multilac/floor-paint-waterbase.jpg', 3575, 4.5),
('multilac', 'roof-water', 'Categories/3.Paints/paint list/multilac/roof-water.jpg', 1652, 3.5),
('nippolac', 'Nippon Paint Super gloss enamel', 'Categories/3.Paints/paint list/nippolac/09c870b81626e205c1df7d9f952005a089b9bb65.jpg', 1650, 3.7),
('nippolac', 'Nippon Paint Roofing paint', 'Categories/3.Paints/paint list/nippolac/687a5697b8e83b558af6f2347e7d8856754c4668.jpg', 2700, 4.5),
('nippolac', 'Nippon wall filler', 'Categories/3.Paints/paint list/nippolac/caa9a974cf714ab4408c0b86e6f00ebe16245b25.jpg', 2400, 4.1),
('sayerlack', 'innovative wood solution', 'Categories/3.Paints/paint list/sayerlack/61esG8drBBL.jpg', 1650, 4.5),
('brush', 'Brush Master sur Range', 'Categories/3.Paints/paint tool/Brushes and Rollers/61grKAuVUAL.jpg', 680, 3.1),
('brush', 'fiber white roller', 'Categories/3.Paints/paint tool/Brushes and Rollers/b277102cb8047a31a796ee78b0657169.jpeg', 950, 1.2),
('ladder', '12 Feet Fibreglass Ladder.', 'Categories/3.Paints/paint tool/Ladders/12 Feet Fibreglass Ladder.png', 7599, 3),
('sandpaper', '12 Feet Fibreglass Ladder.', 'Categories/3.Paints/paint tool/Sand Papers/71-09-MIgLL.jpg', 40, 2.3),
('battery', 'Heavy-duty-battery', 'Categories/4.Electrical/Accessories/Batteries/5373eda4eff151d22465d45e2a4f4186.jpg', 60, 4),
('battery', 'Everedy 1.5 V', 'Categories/4.Electrical/Accessories/Batteries/c360aaabbab736772e7d0adbe374586c.jpg', 90, 4.5),
('switch', 'Socket', 'Categories/4.Electrical/Accessories/switches & sockets/f807b1860746c5fdcfd8b849659539cf.jpg', 259, 4),
('wires', 'Cable Pair 100m', 'Categories/4.Electrical/Accessories/wires & cables/94c7f207abf4207339c1aa8e4fa014f5.jpg', 350, 4.5),
('ac', 'Astro', 'Categories/4.Electrical/home appliance/ac/Sd8e9c5077bf64c7c8c0824a6b49c3a8d9.jpg', 169999, 4.5),
('ac', 'Midea', 'Categories/4.Electrical/home appliance/ac/74d86fc751601fa7c2088865c4b420a2.jpg', 79999, 4.1),
('fan', 'Portable mini usb fan', 'Categories/4.Electrical/home appliance/fan/portable-mini-usb-fan.jpg', 2000, 3.5),
('fan', 'Rechargeble Fan', 'Categories/4.Electrical/home appliance/fan/rechargeble-fan.png', 5000, 4.2),
('fan', 'Bright', 'Categories/4.Electrical/home appliance/fan/ba44364ba1c6919228bc19914515f2cb.jpg', 10000, 4.5),
('kelani', '30w LED Blub(2 years warranty)', 'Categories/4.Electrical/lighting/kelani/0cdd74a2e0dace0cffbb5dd148ce2cb0.png', 425, 4.1),
('kelani', 'LED Blub', 'Categories/4.Electrical/lighting/kelani/82e88fa56e62b4c34c8a3322029b3bd0.jpg', 150, 1.6),
('laxapane', 'LED UFO 18w (long life)', 'Categories/4.Electrical/lighting/laxapana/4c6e9d303857c320e66a94ca368bdcad.jpg', 1550, 4.5),
('laxapane', 'LED Emergency Blub (10w)', 'Categories/4.Electrical/lighting/laxapana/IMG_20220506_151020.png', 3575, 4.5),
('orange', 'Orange 8w Blub', 'Categories/4.Electrical/lighting/orange/43bbc262f43b27787e6808294dd4e705.jpg', 200, 3.2),
('bath', 'PVC Shower set', 'Categories/5.Plumbing/Bathware/Bath & shower/a68af2d5724b0f518bdb7ea431744443.jpg', 525, 3),
('bath', 'Spring Shower Sliver', 'Categories/5.Plumbing/Bathware/Bath & shower/f1bbdcb6d53fba68a9e9ae4bf885395a.jpg', 2500, 4.5),
('bidets', 'Bidet Shower ', 'Categories/5.Plumbing/Bathware/Bidets/b074db1002e382a4f2426028bbe13bc2.jpg', 510, 3.1),
('bidets', 'Bidet Shower  full set sliver', 'Categories/5.Plumbing/Bathware/Bidets/ba5aac07c085226dbc80fc4aa1f8b3e2.jpg', 2540, 4.5),
('heater', 'Singer Water Heater', 'Categories/5.Plumbing/Bathware/water Heaters/551d8cd745e09e7992bd2833da050b8f.jpg', 16500, 3.2),
('heater', 'Delmege Water Heater', 'Categories/5.Plumbing/Bathware/water Heaters/7d9ad980e553ca2f481e85178e8fcdd6.jpg', 15000, 4.1),
('sinks', 'Black sink (Best Quality)', 'Categories/5.Plumbing/Plumbing Accessories/sinks/7ba1264faa1d986a2a9a09b965f148fb.jpg', 52000, 4.5),
('sinks', 'Silver Sink', 'Categories/5.Plumbing/Plumbing Accessories/sinks/33c700d566915e5bd3fed29581533dce.jpg', 35000, 4.2),
('taps', 'Swan Neck Tap', 'Categories/5.Plumbing/Plumbing Accessories/water taps/0d8f2662c97e71509dcfe890cc700439.jpg', 1560, 4.5),
('taps', 'Water tec BIB Tap', 'Categories/5.Plumbing/Plumbing Accessories/water taps/255c42920ee51f00a8c119fbad6aee64.jpg', 800, 2.5),
('hose', 'Garden Hose(Roll)', 'Categories/5.Plumbing/plumbing tools/hose/f975eb4e1d6ba60b3374d134ce3d9ff9.png', 3770, 4.5),
('hose', 'Clear hose', 'Categories/5.Plumbing/plumbing tools/hose/bfd751aa356c2728569c7adbe064db73.jpg', 2940, 3.2),
('pipes', 'Air-pipes', 'Categories/5.Plumbing/plumbing tools/pipes/Air-pipes.jpg', 840, 2.3),
('pipes', 'cooling-pipes', 'Categories/5.Plumbing/plumbing tools/pipes/cooling-pipes.jpg', 2600, 4.5),
('pipes', 'Exhaust Pipes', 'Categories/5.Plumbing/plumbing tools/pipes/Exhaust Pipes.jpg', 1250, 3.9),
('pumps', 'mini-water-pump', 'Categories/5.Plumbing/plumbing tools/pumps/mini-water-pump.jpg', 9600, 4.5),
('pumps', 'solex-water-pump', 'Categories/5.Plumbing/plumbing tools/pumps/solex-water-pump.jpg', 12000, 4.1),
('tanks', 'pe+_bluetech_tank', 'Categories/5.Plumbing/plumbing tools/tanks/pe+_bluetech_tank.png', 22000, 4.5),
('asbascel', 'celling sheets (4*4)', 'Categories/6.Roofing/Ceiling Sheets/Asbestos ceiling sheet/8512a65e6cbd47b033d3ecc6eae0a803.jpg', 1475, 4.1),
('nonasbas', 'eltoro-design-ceiling4.2', 'Categories/6.Roofing/Ceiling Sheets/Non Asbestos ceiling sheet/eltoro-design-ceiling4.2.jpg', 1350, 3.2),
('foil', 'Aluminium-foil', 'Categories/6.Roofing/Roofing Accessories/Foil/Aluminium-foil.jpg', 600, 4.5),
('foil', 'Baking-tin-foil', 'Categories/6.Roofing/Roofing Accessories/Foil/Baking-tin-foil.jpg', 625, 3.2),
('gutter', 'Anti-Leaf Filter Roof Gutter', 'Categories/6.Roofing/Roofing Accessories/Gutters/Anti-Leaf Filter Roof Gutter.jpg', 500, 4.1),
('gutter', 'rain-gutter', 'Categories/6.Roofing/Roofing Accessories/Gutters/rain-gutter.jpeg', 450, 1.5),
('roofpaint', 'nippolac-roofing-paint-water-base-colors', 'Categories/6.Roofing/Roofing Accessories/Roofing paint/nippolac-roofing-paint-water-base-colors.jpg', 3675, 4.2),
('roofpaint', 'roof-water', 'Categories/6.Roofing/Roofing Accessories/Roofing paint/roof-water.jpg', 3500, 4.5),
('roofpaint', 'pink', 'Categories/6.Roofing/Roofing Accessories/Roofing paint/252ca17c2c9a1539e736fe27a4de30e8.png', 2999, 4.5),
('lanwa', 'Stainless-Steel-Square-Pipe', 'Categories/7.Steel/Box Bars/Lanwa/Stainless-Steel-Square-Pipe_027e3e22-c02a-4bc9-a104-0aae9face2c0_470x509_crop_top.jpg', 6000, 4.2),
('melwa', 'Box Bar', 'Categories/7.Steel/Box Bars/Melwa/png_20211126_155832_0000.png', 5650, 3.9),
('taian', 'box bar', 'Categories/7.Steel/Box Bars/Taian/download.jpeg', 5999, 4.5),
('impbrand', 'gi-pipes', 'Categories/7.Steel/GUI Pipes/Imported brands/gi-pipes.jpg', 1650, 4.6),
('localbrand', 'gi-pipes', 'Categories/7.Steel/GUI Pipes/local brands/gi-pipes-4.jpg', 1500, 3.2),
('clean', 'palmolive', 'Categories/9.Home & Kitchen/Cleaning/palmolive.jpg', 1680, 2.6),
('clean', 'vileda-easy-spin-mop-and-bucket', 'Categories/9.Home & Kitchen/Cleaning/vileda-easy-spin-mop-and-bucket-a6a134b2-228b-427b-8879-b1dcf115f194.png', 1200, 3.5),
('clean', 'Windex-Origional', 'Categories/9.Home & Kitchen/Cleaning/Windex-Origional.jpg', 1700, 4.5),
('houseit', 'Rice cooker', 'Categories/9.Home & Kitchen/Household item/bc495993e486edce6e6948c77be18fe2.jpg', 12000, 3.2),
('houseit', 'blender', 'Categories/9.Home & Kitchen/Household item/292c6c2d9a52e1f0d9b99b5a6f0eaaed.jpg', 6500, 4.5),
('houseit', 'oven', 'Categories/9.Home & Kitchen/Household item/4dc912a6c8e2a7aef8a1331de1b63b51.jpg', 15550, 2.5),
('kitchenware', '6pcs plastic kitchenware nonsick coolware set', 'Categories/9.Home & Kitchen/Kitchenware/1c44d91020e77021bb4442edfcb59952.jpg', 1500, 3.5),
('kitchenware', '5pcs silicone kichenware', 'Categories/9.Home & Kitchen/Kitchenware/5ec9798053b3615096d11b3224c5959c.jpg', 1675, 3.2),
('kitchenware', '5pcs baking set', 'Categories/9.Home & Kitchen/Kitchenware/7ac95641c71cfaf98d6aae31f1bb6ea0.jpg', 1680, 4.5),
('brassit', 'oil lap ', 'Categories/11.General/Brass items/8167b64d4f963d9b5f9fd3a739870c94.jpg', 150, 4.1),
('ccrope', 'rope buddle', 'Categories/11.General/Chains, Cables, Ropes/62dcc365c9c2bf02a61d134ab97c5fa6.jpg', 6000, 1.6),
('door', 'Door handler', 'Categories/11.General/Doors & Window/98cb9804728a85fba9ca999904199640.jpg', 1999, 3.5),
('door', 'Door Fixer', 'Categories/11.General/Doors & Window/f35066377368a5c72b18e72c25b7a8ae.jpg', 655, 1.5),
('floor', 'brick-wall-sticker', 'Categories/11.General/Floors & walls/brick-wall-sticker.jpg', 4690, 4.5),
('floor', 'floor-sticker', 'Categories/11.General/Floors & walls/floor-sticker.jpg', 5680, 4.1),
('floor', 'wall-panel', 'Categories/11.General/Floors & walls/wall-panel.jpeg', 4900, 4.5),
('homesec', 'cctv camera HIKVISION', 'Categories/11.General/Home security/1-10.jpg', 16000, 4.2),
('homesec', 'cctv camera', 'Categories/11.General/Home security/b0cc4bafd0663c0b42d8b5a4d225f3bf.jpg', 12500, 3.2),
('padlock', 'lock (ibba)', 'Categories/11.General/Padlocks/9785721926066cdc4005a933c7aeeae4.jpg', 60, 2.7),
('padlock', 'password lock', 'Categories/11.General/Padlocks/5396bf06bebc7c175a320a5f0ea9894e.jpg', 150, 2.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `login_detail`
--
ALTER TABLE `login_detail`
  ADD PRIMARY KEY (`customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cartId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `login_detail`
--
ALTER TABLE `login_detail`
  MODIFY `customer_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
