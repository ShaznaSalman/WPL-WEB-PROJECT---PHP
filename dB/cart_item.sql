-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 05:55 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cartId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cartId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
