-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 10:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `city` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`, `city`) VALUES
(2, 'Haidry', 2),
(3, 'Hanna', 386),
(4, 'Gulberg', 3),
(5, 'Gulshan', 2),
(6, 'Industrial_Sector', 1),
(7, 'Shahrah_e_faisal', 2),
(8, 'Ichhra', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cities_pk`
--

CREATE TABLE `cities_pk` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities_pk`
--

INSERT INTO `cities_pk` (`id`, `name`) VALUES
(1, 'Islamabad'),
(2, 'Karachi'),
(3, 'Lahore'),
(4, 'Abbaspur'),
(5, 'Abbottabad'),
(6, 'Abdul Hakim'),
(7, 'Adda Jahan Khan'),
(8, 'Adda Shaiwala'),
(9, 'Ahmadpur East'),
(10, 'Ahmed pur Sial'),
(11, 'Akhora Khattak'),
(12, 'Ali Chak'),
(13, 'Alipur'),
(14, 'Allahabad'),
(15, 'Amangarh'),
(16, 'Ambela'),
(17, 'Arifwala'),
(18, 'Astore'),
(19, 'Attock'),
(20, 'Babri Banda'),
(21, 'Badin'),
(22, 'Bagh'),
(23, 'Bahawalnagar'),
(24, 'Bahawalpur'),
(25, 'Bajaur'),
(26, 'Balakot'),
(27, 'Bannu'),
(28, 'Barbar Loi'),
(29, 'Barkhan'),
(30, 'Baroute'),
(31, 'Bat Khela'),
(32, 'Battagram'),
(33, 'Besham'),
(34, 'Bewal'),
(35, 'Bhakkar'),
(36, 'Bhalwal'),
(37, 'Bhan Saeedabad'),
(38, 'Bhara Kahu'),
(39, 'Bhera'),
(40, 'Bhimbar'),
(41, 'Bhirya Road'),
(42, 'Bhuawana'),
(43, 'Bisham'),
(44, 'Blitang'),
(45, 'Bolan'),
(46, 'Buchay Key'),
(47, 'Bunner'),
(48, 'Burewala'),
(49, 'Chacklala'),
(50, 'Chaghi'),
(51, 'Chaininda'),
(52, 'Chak 4 b c'),
(53, 'Chak 46'),
(54, 'Chak Jamal'),
(55, 'Chak Jhumra'),
(56, 'Chak Sawara'),
(57, 'Chak Sheza'),
(58, 'Chakwal'),
(59, 'Chaman'),
(60, 'Charsada'),
(61, 'Chashma'),
(62, 'Chawinda'),
(63, 'Cherat'),
(64, 'Chicha watni'),
(65, 'Chilas'),
(66, 'Chiniot'),
(67, 'Chishtian'),
(68, 'Chitral'),
(69, 'Choa Saiden Shah'),
(70, 'Chohar Jamali'),
(71, 'Choppar Hatta'),
(72, 'Chowk Azam'),
(73, 'Chowk Maitla'),
(74, 'Chowk Munda'),
(75, 'Chunian'),
(76, 'Dadakhel'),
(77, 'Dadu'),
(78, 'Daharki'),
(79, 'Dandot'),
(80, 'Dargai'),
(81, 'Darra Pezu'),
(82, 'Darya Khan'),
(83, 'Daska'),
(84, 'Dassu'),
(85, 'Daud Khel'),
(86, 'Daulat Pur'),
(87, 'Daur'),
(88, 'Deh Pathaan'),
(89, 'Depal Pur'),
(90, 'Dera Bugti'),
(91, 'Dera Ghazi Khan'),
(92, 'Dera Ismail Khan'),
(93, 'Dera Murad Jamali'),
(94, 'Dera Nawab Sahib'),
(95, 'Dhatmal'),
(96, 'Dhirkot'),
(97, 'Dhoun Kal'),
(98, 'Diamer'),
(99, 'Digri'),
(100, 'Dijkot'),
(101, 'Dina'),
(102, 'Dinga'),
(103, 'Dir'),
(104, 'Doaaba'),
(105, 'Doltala'),
(106, 'Domeli'),
(107, 'Dudial'),
(108, 'Dunyapur'),
(109, 'Eminabad'),
(110, 'Faisalabad'),
(111, 'Farooqabad'),
(112, 'Fateh Jang'),
(113, 'Fateh Pur'),
(114, 'Feroz Walla'),
(115, 'Feroz Watan'),
(116, 'Fizagat'),
(117, 'Fort Abbas'),
(118, 'FR Bannu'),
(119, 'FR Bannu / Lakki'),
(120, 'FR DI Khan'),
(121, 'FR Kohat'),
(122, 'FR Peshawar'),
(123, 'FR Peshawar / Kohat'),
(124, 'FR Tank / DI Khan'),
(125, 'Gadoon Amazai'),
(126, 'Gaggo Mandi'),
(127, 'Gakhar Mandi'),
(128, 'Gambet'),
(129, 'Garh Maharaja'),
(130, 'Garh More'),
(131, 'Gari Habibullah'),
(132, 'Gari Mori'),
(133, 'Ghari Dupatta'),
(134, 'Gharo'),
(135, 'Ghazi'),
(136, 'Ghizer'),
(137, 'Ghotki'),
(138, 'Ghuzdar'),
(139, 'Gilgit'),
(140, 'Gohar Ghoushti'),
(141, 'Gojra'),
(142, 'Goular Khel'),
(143, 'Guddu'),
(144, 'Gujar Khan'),
(145, 'Gujranwala'),
(146, 'Gujrat'),
(147, 'Gwadar'),
(148, 'Hafizabad'),
(149, 'Hala'),
(150, 'Hangu'),
(151, 'Hari Pur'),
(152, 'Hariwala'),
(153, 'Harnai'),
(154, 'Haroonabad'),
(155, 'Hasilpur'),
(156, 'Hassan Abdal'),
(157, 'Hattar'),
(158, 'Hattian'),
(159, 'Haveli Kahuta'),
(160, 'Haveli Lakha'),
(161, 'Havelian'),
(162, 'Hayatabad'),
(163, 'Hazro'),
(164, 'Head Marala'),
(165, 'Hub Chowki'),
(166, 'Hub Inds Estate'),
(167, 'Hujra Shah Muqeem'),
(168, 'Hunza Nagar'),
(169, 'Hyderabad'),
(170, 'Issa Khel'),
(171, 'Jacobabad'),
(172, 'Jaffarabad'),
(173, 'Jaja Abasian'),
(174, 'Jalal Pur Jatan'),
(175, 'Jalal Pur Priwala'),
(176, 'Jalozai'),
(177, 'Jampur'),
(178, 'Jamrud Road'),
(179, 'Jamshoro'),
(180, 'Jandanwala'),
(181, 'Jaranwala'),
(182, 'Jatoi'),
(183, 'Jauharabad'),
(184, 'Jehangira'),
(185, 'Jehanian'),
(186, 'Jhal Magsi'),
(187, 'Jhand'),
(188, 'Jhang'),
(189, 'Jhatta Bhutta'),
(190, 'Jhelum'),
(191, 'Jhudo'),
(192, 'Kabir Wala'),
(193, 'Kacha Khooh'),
(194, 'Kachhi/Bolan'),
(195, 'Kahror Pacca'),
(196, 'Kahuta'),
(197, 'Kakul'),
(198, 'Kakur Town'),
(199, 'Kala Bagh'),
(200, 'Kala Shah Kaku'),
(201, 'Kalam'),
(202, 'Kalar Syedian'),
(203, 'Kalaswala'),
(204, 'Kallat'),
(205, 'Kallur Kot'),
(206, 'Kamalia'),
(207, 'Kamalia Musa'),
(208, 'Kamber Ali Khan'),
(209, 'Kamokey'),
(210, 'Kamra'),
(211, 'Kandhkot'),
(212, 'Kandiaro'),
(213, 'Karak'),
(214, 'Karore Lalisan'),
(215, 'Kashmir'),
(216, 'Kashmore'),
(217, 'Kasur'),
(218, 'Kazi Ahmed'),
(219, 'Kech'),
(220, 'Khair Pur'),
(221, 'Khair Pur Mir'),
(222, 'Khairpur Nathan Shah'),
(223, 'Khanbela'),
(224, 'Khandabad'),
(225, 'Khanewal'),
(226, 'Khangarh'),
(227, 'Khanpur'),
(228, 'Khanqah Dogran'),
(229, 'Khanqah Sharif'),
(230, 'Kharan'),
(231, 'Kharian'),
(232, 'Khewra'),
(233, 'Khoski'),
(234, 'Khuiratta'),
(235, 'Khurian wala'),
(236, 'Khushab'),
(237, 'Khushal Kot'),
(238, 'Khuzdar'),
(239, 'Khyber Agency'),
(240, 'Killa Abdullah'),
(241, 'Killa Saifullah'),
(242, 'Kohat'),
(243, 'Kohistan'),
(244, 'Kohlu'),
(245, 'Kot Addu'),
(246, 'Kot Bunglow'),
(247, 'Kot Ghulam Mohd'),
(248, 'Kot Mithan'),
(249, 'Kot Radha Kishan'),
(250, 'Kotla'),
(251, 'Kotla Arab Ali Khan'),
(252, 'Kotla Jam'),
(253, 'Kotla Pathan'),
(254, 'Kotli'),
(255, 'Kotli Loharan'),
(256, 'Kotmomin'),
(257, 'Kotri'),
(258, 'Kumbh'),
(259, 'Kundina'),
(260, 'Kunjah'),
(261, 'Kunri'),
(262, 'Kurram'),
(263, 'Kurram Agency'),
(264, 'Lakimarwat'),
(265, 'Lakki Marwat'),
(266, 'Lala rukh'),
(267, 'Lalamusa'),
(268, 'Laliah'),
(269, 'Lalshanra'),
(270, 'Landi Kotal'),
(271, 'Larkana'),
(272, 'Lasbela'),
(273, 'Lawrence pur'),
(274, 'Layyah'),
(275, 'Leepa'),
(276, 'Liaquat Pur'),
(277, 'Lodhran'),
(278, 'Loralai'),
(279, 'Lower Dir'),
(280, 'Ludhan'),
(281, 'Machh'),
(282, 'Machi Goth'),
(283, 'Madinah'),
(284, 'Mailsi'),
(285, 'Makli'),
(286, 'Makran'),
(287, 'Malakand'),
(288, 'Malakwal'),
(289, 'Mamu kunjan'),
(290, 'Mandi Bahauddin'),
(291, 'Mandi Faizabad'),
(292, 'Mandra'),
(293, 'Manga Mandi'),
(294, 'Mangal Sada'),
(295, 'Mangi'),
(296, 'Mangla'),
(297, 'Mangowal'),
(298, 'Manoabad'),
(299, 'Mansehra'),
(300, 'Mardan'),
(301, 'Mari Indus'),
(302, 'Mastoi'),
(303, 'Matiari'),
(304, 'Matli'),
(305, 'Mehar'),
(306, 'Mehmood Kot'),
(307, 'Mehrab Pur'),
(308, 'Mian Chunnu'),
(309, 'Mian Walli'),
(310, 'Minchanabad'),
(311, 'Mingora'),
(312, 'Mir Ali'),
(313, 'Miran Shah'),
(314, 'Mirpur  (AJK)'),
(315, 'Mirpur Khas'),
(316, 'Mirpur Mathelo'),
(317, 'Mithi'),
(318, 'Mohen Jo Daro'),
(319, 'Mohmand'),
(320, 'More kunda'),
(321, 'Morgah'),
(322, 'Moro'),
(323, 'Mubarik Pur'),
(324, 'Multan'),
(325, 'Muridkay'),
(326, 'Murree'),
(327, 'Musafir Khana'),
(328, 'Musakhel'),
(329, 'Mustang'),
(330, 'Muzaffarabad'),
(331, 'Muzaffargarh'),
(332, 'Nankana Sahib'),
(333, 'Narang Mandi'),
(334, 'Narowal'),
(335, 'Naseerabad'),
(336, 'Naudero'),
(337, 'Naukot'),
(338, 'Naukundi'),
(339, 'Nawab Shah'),
(340, 'Neelam'),
(341, 'New Saeedabad'),
(342, 'Nilam'),
(343, 'Nilore'),
(344, 'Noor kot'),
(345, 'Nooriabad'),
(346, 'Noorpur nooranga'),
(347, 'North Wazirstan'),
(348, 'Noshki'),
(349, 'Nowshera'),
(350, 'Nowshera Cantt'),
(351, 'Nowshero Feroz'),
(352, 'Okara'),
(353, 'Orakzai'),
(354, 'Padidan'),
(355, 'Pak Pattan Sharif'),
(356, 'Panjan Kisan'),
(357, 'Panjgur'),
(358, 'Pannu aqil'),
(359, 'Parachinar'),
(360, 'Pasni'),
(361, 'Pasroor'),
(362, 'Patika'),
(363, 'Patoki'),
(364, 'Peshawar'),
(365, 'Phagwar'),
(366, 'Phalia'),
(367, 'Phool nagar'),
(368, 'Phoolnagar (Bhai Pheru)'),
(369, 'Piaro goth'),
(370, 'Pind Dadan Khan'),
(371, 'Pindi Bhattian'),
(372, 'Pindi bhohri'),
(373, 'Pindi gheb'),
(374, 'Piplan'),
(375, 'Pir Mahal'),
(376, 'Pirpai'),
(377, 'Pishin'),
(378, 'Poonch'),
(379, 'Punch'),
(380, 'Qalandarabad'),
(381, 'Qambar'),
(382, 'Qambar Shahdatkot'),
(383, 'Qasba Gujrat'),
(384, 'Qazi Ahmed'),
(385, 'Quaidabad'),
(386, 'Quetta'),
(387, 'Rabwah'),
(388, 'Rahimyar Khan'),
(389, 'Rahwali'),
(390, 'Raiwind'),
(391, 'Rajana'),
(392, 'Rajanpur'),
(393, 'Rangoo'),
(394, 'Ranipur'),
(395, 'Rashidabad'),
(396, 'Ratto Dero'),
(397, 'Rawala Kot'),
(398, 'Rawalpindi'),
(399, 'Rawat'),
(400, 'Renala Khurd'),
(401, 'Risalpur'),
(402, 'Rohri'),
(403, 'Sadiqabad'),
(404, 'Sagri'),
(405, 'Sahiwal'),
(406, 'Saidu Sharif'),
(407, 'Sajawal'),
(408, 'Sakardu'),
(409, 'Sakrand'),
(410, 'Sambrial'),
(411, 'Samma Satta'),
(412, 'Samundri'),
(413, 'Sanghar'),
(414, 'Sanghi'),
(415, 'Sangla Hill'),
(416, 'Sangote'),
(417, 'Sanjwal'),
(418, 'Sara e Naurang'),
(419, 'Sarai Alamgir'),
(420, 'Sargodha'),
(421, 'Satyana Bangla'),
(422, 'Sehar Baqlas'),
(423, 'Sehwan'),
(424, 'Shadiwal'),
(425, 'Shahdad Kot'),
(426, 'Shahdad Pur'),
(427, 'Shaheed Benazirabad'),
(428, 'Shahkot'),
(429, 'Shahpur Chakar'),
(430, 'Shakargarh'),
(431, 'Shamsabad'),
(432, 'Shangla'),
(433, 'Shankiari'),
(434, 'Shedani sharif'),
(435, 'Sheikhupura'),
(436, 'Shemier'),
(437, 'Sherani'),
(438, 'Shikarpur'),
(439, 'Shogram'),
(440, 'Shorkot'),
(441, 'Shujabad'),
(442, 'Sialkot'),
(443, 'Sibi'),
(444, 'Sidhnoti'),
(445, 'Sihala'),
(446, 'Sikandarabad'),
(447, 'Silanwala'),
(448, 'Sita Road'),
(449, 'Skardu'),
(450, 'Sohawa District Daska'),
(451, 'Sohawa District Jelum'),
(452, 'Sohbatpur'),
(453, 'South Wazirstan'),
(454, 'Sudhnoti'),
(455, 'Sukkur'),
(456, 'Swabi'),
(457, 'Swat'),
(458, 'Swatmingora'),
(459, 'Takhtbai'),
(460, 'Talagang'),
(461, 'Talamba'),
(462, 'Talhur'),
(463, 'Tall'),
(464, 'Tando Adam'),
(465, 'Tando Allahyar'),
(466, 'Tando Jam'),
(467, 'Tando Mohd Khan'),
(468, 'Tank'),
(469, 'Tarbela'),
(470, 'Tarmatan'),
(471, 'Tarnol'),
(472, 'Taunsa sharif'),
(473, 'Taxila'),
(474, 'Thana Bula Khan'),
(475, 'Thari Mirwah'),
(476, 'Tharo Shah'),
(477, 'Tharparkar'),
(478, 'Thatta'),
(479, 'Theing Jattan More'),
(480, 'Thul'),
(481, 'Tibba Sultanpur'),
(482, 'Timergara'),
(483, 'Tobatek Singh'),
(484, 'Topi'),
(485, 'Toru'),
(486, 'Trinda Mohd Pannah'),
(487, 'Turbat'),
(488, 'Ubaro'),
(489, 'Ugoki'),
(490, 'Ukba'),
(491, 'Umer Kot'),
(492, 'Upper Deval'),
(493, 'Upper Dir'),
(494, 'Usta Mohammad'),
(495, 'Utror'),
(496, 'Vehari'),
(497, 'Village Sunder'),
(498, 'Wah Cantt'),
(499, 'Wahi hassain'),
(500, 'Wan Radha Ram'),
(501, 'Wana'),
(502, 'Warah'),
(503, 'Warburton'),
(504, 'Washuk'),
(505, 'Wazirabad'),
(506, 'Yazman Mandi'),
(507, 'Zahir Pir'),
(508, 'Zhob'),
(509, 'Ziarat');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `discount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `name`, `discount`) VALUES
(2, '787B09B8-C12B-2FE491C8', 40),
(4, '77908D51-E143-CB904F6F', 40),
(5, '9BC57DEC-916D-3C8E1EBB', 40);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `branch` int(255) NOT NULL,
  `roles` int(255) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `profile`, `branch`, `roles`) VALUES
(7, 'Usman123', 'usman123@ecEmployee.com', 'Usman123', '00000016903801573707pm7_1.png', 2, 3),
(8, 'Usman12', 'usman2123@ecEmployee.com', 'Usman123', '00000016908053864607pm7_23-modified.PNG', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `epage`
--

CREATE TABLE `epage` (
  `id` int(255) NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `epage`
--

INSERT INTO `epage` (`id`, `page`) VALUES
(1, 'index.php'),
(2, 'status.php'),
(3, 'manage.php'),
(4, 'vbranch.php'),
(5, 'vorder.php'),
(6, 'vuser.php'),
(7, 'vjewelry.php'),
(8, 'vfashion.php'),
(9, 'velectronic.php');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Usman', 'usman@gmail.com', 'aadsdsdsa'),
(2, 'usman', 'usman67483@gmail.com', 'jjsjfkjhkfsdkj'),
(3, 'usman', 'usman67483@gmail.com', 'jjsjfkjhkfsdkj');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(255) NOT NULL,
  `tracking_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `coupan` varchar(255) NOT NULL DEFAULT 'no applied',
  `coupan discount` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `total_qtn` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `tracking_id`, `user_name`, `email`, `contact`, `branch`, `address`, `status`, `coupan`, `coupan discount`, `date`, `month`, `total_qtn`, `total`) VALUES
(35, 56969, 'Usman Ahmed', 'usmantss2004@gmail.com', '0331-1288350', '2', 'b404-Karachi', 'complete', 'no applied', 0, '2023', 'August', 1, 4250),
(37, 21016, 'Usman Ahmed', 'hamza1234.aptechnn@gmail.com', '0331-1288350', '2', 'b404-Karachi', 'complete', 'no applied', 0, '2023', 'August', 7, 571420),
(39, 36944, 'hamza123', 'hamza1234.aptechnn@gmail.com', '0312-8864566', '3', 'q776-Quetta', 'complete', 'no applied', 0, '2023', 'August', 5, 544775),
(40, 27882, 'Usman Ahmed', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 84000),
(41, 24510, 'Usman Ahmed', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'complete', 'no applied', 0, '2023', 'August', 1, 145000),
(42, 23469, 'Usman Ahmed', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 200000),
(44, 23131, 'Usman Ahmed', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 198000),
(45, 3276, 'Usman Ahmed', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 145000),
(46, 62460, 'Usman Ahmed', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 2, 147700),
(47, 58163, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'complete', 'applied', 40, '2023', 'August', 1, 3600),
(48, 61301, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'complete', 'applied', 40, '2023', 'August', 1, 4500),
(49, 9307, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'applied', 40, '2023', 'August', 1, 4500),
(50, 42785, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 4500),
(51, 4327, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 1740),
(52, 39823, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'applied', 40, '2023', 'August', 1, 1620),
(53, 2538, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'applied', 40, '2023', 'August', 1, 1044),
(54, 1412, 'hamza123', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 6000),
(55, 6250, 'Usman Ahmed', 'usman67483@gmail.com', '0331-1284090', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'August', 1, 198000),
(56, 11210, 'usm789', 'usman67483@gmail.com', '0331-1288350', '2', 'b404-karachi', 'pending', 'applied', 40, '2023', 'August', 6, 334332),
(57, 44149, 'Usman Ahmed', 'usman67483@gmail.com', '0000-0000000', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'September', 1, 1740),
(58, 37893, 'Usman Ahmed', 'usman67483@gmail.com', '0000-0000000', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'September', 1, 7199),
(59, 17460, 'Usman Ahmed', 'usman67483@gmail.com', '0000-0000000', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'September', 1, 7199),
(60, 3027, 'Usman Ahmed', 'usman67483@gmail.com', '0000-0000000', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'September', 1, 4500),
(61, 22819, 'Usman Ahmed', 'usman67483@gmail.com', '0000-0000000', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'September', 2, 392000),
(62, 28408, 'Usman Ahmed', 'usman67483@gmail.com', '0000-0000000', '2', 'b404-karachi', 'pending', 'no applied', 0, '2023', 'September', 1, 678);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `qtn` int(255) NOT NULL,
  `tracking_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `branch` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `item_name`, `price`, `qtn`, `tracking_id`, `status`, `branch`) VALUES
(1, 'boot [4]', 4250, 1, 56969, 'complete', 2),
(4, 'baby dress [4]', 3420, 2, 21016, 'complete', 2),
(5, 'ear Diamond ring[1]', 435000, 3, 21016, 'complete', 2),
(6, 'Gold Bangle [3]', 133000, 2, 21016, 'complete', 2),
(9, 'ear Diamond ring[1]', 145000, 1, 36944, 'complete', 3),
(10, 'boot [2]', 4675, 1, 36944, 'complete', 3),
(11, 'boot [6]', 5100, 1, 36944, 'complete', 3),
(12, 'Gold Bangle [1]', 120000, 1, 36944, 'complete', 3),
(13, 'Gaming PC [2] ', 270000, 1, 36944, 'complete', 3),
(14, 'ear ring[3]', 84000, 1, 27882, 'pending', 2),
(15, 'ear Diamond ring[1]', 145000, 1, 24510, 'complete', 2),
(16, 'gold set[1] ', 200000, 1, 23469, 'pending', 2),
(17, 'Diamond necklace[2]', 198000, 1, 23131, 'pending', 2),
(18, 'ear Diamond ring[1]', 145000, 1, 3276, 'pending', 2),
(19, 'Jacket', 2700, 1, 62460, 'pending', 2),
(20, 'ear Diamond ring[1]', 145000, 1, 62460, 'pending', 2),
(21, 'jacket [3]', 6000, 1, 58163, 'complete', 2),
(22, 'girl dress [2]', 7500, 1, 42785, 'pending', 2),
(23, 'belt [1]', 1740, 1, 4327, 'pending', 2),
(24, 'Jacket', 2700, 1, 39823, 'pending', 2),
(25, 'belt [1]', 1740, 1, 2538, 'pending', 2),
(26, 'jacket [3]', 6000, 1, 1412, 'pending', 2),
(27, 'Diamond necklace[2]', 198000, 1, 6250, 'pending', 2),
(28, 'Diamond Necklace[1]', 192000, 1, 11210, 'pending', 2),
(29, 'belt [1]', 5220, 3, 11210, 'pending', 2),
(30, 'gold set[1] ', 200000, 1, 11210, 'pending', 2),
(31, 'Necklace [4]', 160000, 1, 11210, 'pending', 2),
(32, 'belt [1]', 1740, 1, 44149, 'pending', 2),
(33, 'jacket [4]', 7199, 1, 37893, 'pending', 2),
(34, 'jacket [4]', 7199, 1, 17460, 'pending', 2),
(35, 'shirt [3]', 4500, 1, 3027, 'pending', 2),
(36, 'Diamond Necklace[1]', 192000, 1, 22819, 'pending', 2),
(37, 'gold set[1] ', 200000, 1, 22819, 'pending', 2),
(38, 'gold set[1] ', 678, 1, 28408, 'pending', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page`, `key`) VALUES
(1, 'index.php', 'index home'),
(2, 'branch.php', 'branch'),
(3, 'employee.php', 'employee'),
(4, 'status.php', 'status'),
(5, 'manage.php', 'manage'),
(6, 'vbranch.php', 'view branch'),
(7, 'vorder.php', 'view orders'),
(8, 'vuser.php', 'view user'),
(9, 'vemployee.php', 'view employee'),
(10, 'pfashion.php', 'fashion products'),
(11, 'pjewelry.php', 'jewelry'),
(12, 'pelectronic.php', 'electronic'),
(13, 'vfashion.php', 'view fashion'),
(14, 'vjewelry.php', 'view jewelry'),
(15, 'velectronic.php', 'view electronic');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `original_price` int(255) NOT NULL,
  `p_price` int(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `p_type` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_image`, `discount`, `original_price`, `p_price`, `stock`, `description`, `keyword`, `p_type`, `status`) VALUES
(1, 'Sun Glasses   ', '00000016898664323207pm7_pngwing.com (1).png', 20, 4, 3, 41, 'quality h bhai   ', 'sun glasses , chashma , spectacles', 1, 'on'),
(3, 'boot [1] ', '00000016897097460607pm7_shoes.png', 50, 34, 17, 52, 'nice quality shoes  ', 'shoe , boot , joota , shoes ,boots', 1, 'on'),
(5, 'Jacket (red)', '00000016894079632307am7_8-red-jacket-png-image.png', 25, 24, 18, 47, 'nice quality jacket', 'jacket , winter cloth ', 1, 'on'),
(6, 'Home Appliance [1]   ', '00000016895116175707pm7_pngwing.com (2).png', 8, 373, 343, 49, '10 year warranty    ', 'Home Appliances ,Home Appliance , ghar ka saman , house things', 3, 'on'),
(7, 'Home Appliance [2]   ', '00000016895060143407pm7_pngwing.com (3).png', 8, 305, 281, 50, '7 year warranty   ', 'Home Appliances ,home Appliance , ghar ka saman , house things', 3, 'on'),
(8, 'Kitchen Appliance [1] ', '00000016894267573707pm7_pngwing.com (4).png', 25, 508, 381, 50, '12 year warranty ', 'Kitchen Appliances ,kitchen  Appliance , ghar ka saman , house things', 3, 'on'),
(9, 'Engagement ring [1]', '00000016894247824207pm7_pngwing.com (6).png', 5, 373, 354, 80, 'Engagement ring', 'ring , engagement ring , nikah , gold , gold set , jewelry', 2, 'on'),
(10, 'Necklace [1]', '00000016894248620207pm7_pngwing.com (5).png', 20, 441, 353, 90, 'Necklace', 'necklace , gold , gold set , jewelry', 2, 'on'),
(11, 'Engagement ring [2]', '00000016894250612107pm7_pngwing.com (7).png', 5, 380, 361, 76, 'Engagement ring', 'ring , engagement ring , nikah , gold , gold set , jewelry', 2, 'on'),
(12, 'Blender Set [1]', '00000016895134472707pm7_pngwing.com (8).png', 5, 24, 23, 350, '5 year warranty', 'kitchen ,Kitchen , blender , set , machine ', 3, 'on'),
(13, 'Gold Bangle [1]', '00000016895159244407pm7_pngwing.com (9).png', 20, 508, 407, 190, 'one of the nice item of ecMarket', 'bangle , gold , gold set , jewelry', 2, 'on'),
(14, 'shirt [1]    ', '00000016896160634307pm7_pngegg (1).png', 30, 10, 7, 16, 'thing of quality    ', 'shirt , quality , gents shirt', 1, 'on'),
(15, 'Girl Dress [1]', '00000016896227783807pm7_pngwing.com (15).png', 45, 51, 28, 43, 'dress for Girl', 'dress, quality , girl dress', 1, 'on'),
(16, 'baby dress[1]', '00000016897092535307pm7_baby dress.png', 5, 5, 5, 30, 'Baby suit 1', 'baby dress , munna , bacha party , sweet', 1, 'on'),
(17, 'baby dress [2]', '00000016897093105007pm7_baby dress (1).png', 5, 5, 5, 20, 'baby suit [2]', 'baby dress , munna , bacha party , sweet', 1, 'on'),
(18, 'baby dress [3]', '00000016897093462607pm7_baby dress (2).png', 5, 7, 6, 19, 'baby suit [3]', 'baby dress , munna , bacha party , sweet', 1, 'on'),
(19, 'baby dress [4]', '00000016897093901007pm7_baby dress (3).png', 5, 6, 6, 80, 'baby suit [4]', 'baby dress , munna , bacha party , sweet', 1, 'on'),
(21, 'boot [2]', '00000016897098050507pm7_shoes (1).png', 15, 19, 16, 16, 'nice quality bro', 'shoe , boot , joota , shoes ,boots', 1, 'on'),
(23, 'boot [4]', '00000016897099260607pm7_shoes (3).png', 15, 17, 14, 39, 'ecMarket se saman acha hi log', 'shoe , boot , joota , shoes ,boots', 1, 'on'),
(24, 'boot [5]', '00000016897099795907pm7_shoes (4).png', 15, 19, 16, 24, 'ecMarket se chez loge achi hi lo ge', 'shoe , boot , joota , shoes ,boots', 1, 'on'),
(25, 'boot [6]', '00000016897101292907pm7_shoes (5).png', 15, 20, 17, 44, 'vip quality h dost', 'shoe , boot , joota , shoes ,boots', 1, 'on'),
(26, 'Necklace [2]', '00000016899661553507pm7_pngwing.com (18).png', 10, 475, 427, 90, 'necklace item 2', 'necklace , gold , gold set , jewelry', 2, 'on'),
(27, 'Diamond Necklace[1]', '00000016899662460607pm7_pngwing.com (19).png', 40, 1085, 651, 98, 'diamond or kia chahiye', 'diamond necklace , gold , gold set , jewelry', 2, 'on'),
(28, 'gold set[1] ', '00000016899663535307pm7_pngwing.com (20).png', 50, 1356, 678, 46, 'necklace   ear ring ', 'gold , gold set , jewelry', 2, 'on'),
(29, 'Diamond necklace[2]', '00000016899664044407pm7_pngwing.com (21).png', 45, 1220, 671, 16, 'diamond h or kia chaiye', 'diamond necklace , gold , gold set , jewelry', 2, 'on'),
(30, 'ear ring[1]', '00000016899664513107pm7_pngwing.com (22).png', 50, 407, 203, 49, '50% off', 'ear ring , gold , gold set , jewelry', 2, 'on'),
(31, 'Gold Bangle [2]', '00000016899665612107pm7_pngwing.com (23).png', 20, 508, 407, 10, 'item of gold', 'bangle , gold , gold set , jewelry', 2, 'on'),
(32, 'Engagement ring [3]', '00000016899666545407pm7_pngwing.com (24).png', 10, 441, 397, 20, 'Engagement ring item 3', 'engagement ring , nikah , gold , gold set , jewelry', 2, 'on'),
(33, 'ear ring[2]', '00000016899667024207pm7_pngwing.com (25).png', 40, 373, 224, 50, 'item of gold', 'ear ring, gold , gold set , jewelry', 2, 'on'),
(34, 'gold set[2]', '00000016899667482807pm7_pngwing.com (26).png', 20, 949, 759, 50, 'necklace + ear ring', ' gold , gold set , jewelry', 2, 'on'),
(35, 'Engagement ring [4]', '00000016899677103007pm7_pngwing.com (24).png', 5, 407, 386, 48, 'item 4', 'engagement ring , nikah , gold , gold set , jewelry', 2, 'on'),
(36, 'Necklace [3]', '00000016899677905007pm7_pngwing.com (18).png', 10, 508, 458, 100, 'item 3', 'necklace, gold , gold set , jewelry', 2, 'on'),
(37, 'ear ring[3]', '00000016899678721207pm7_pngwing.com (19).png', 30, 407, 285, 19, 'item of gold', 'ear ring , gold , gold set , jewelry', 2, 'on'),
(38, 'ear Diamond ring[1]', '00000016899679280807pm7_pngwing.com (20).png', 42, 847, 492, 40, 'item of diamond', 'ear ring , diamond, gold , gold set , jewelry', 2, 'on'),
(39, 'Gold Bangle [3]', '00000016899680062607pm7_pngwing.com (21).png', 5, 237, 225, 130, 'is pe bhi discount lo ge kia', 'bangle, gold , gold set , jewelry', 2, 'on'),
(40, 'Necklace [4]', '00000016899680713107pm7_pngwing.com (22).png', 20, 678, 542, 29, 'item of gold', 'necklace, gold , gold set , jewelry', 2, 'on'),
(41, 'Bracelet[1]', '00000016899681333307pm7_pngwing.com (23).png', 10, 407, 366, 45, 'item 1', 'bracelet , gold , gold set , jewelry', 2, 'on'),
(42, 'Gaming PC [1]', '00000016908716894908am8_electronic (6).png', 10, 678, 610, 100, 'graphics h dost', 'computer , pc , gaming , working , personal', 3, 'on'),
(43, 'Gaming PC [2] ', '00000016908717262608am8_electronic (5).png', 10, 1017, 915, 50, 'gaming pc [2] ', 'computer , pc , gaming , working , personal', 3, 'on'),
(44, 'PC [1]', '00000016908718290908am8_electronic (8).png', 50, 678, 339, 200, 'pc for working', 'computer , pc , gaming , working , personal', 3, 'on'),
(45, 'Washing Machine [1]', '00000016908719163608am8_electronic (10).png', 20, 271, 217, 50, 'Washing Machine [1]', 'washing machine washer ', 3, 'on'),
(46, 'Washing Machine [2]', '00000016908719501008am8_electronic (9).png', 20, 237, 190, 50, 'Washing Machine [2]', 'washing machine washer ', 3, 'on'),
(47, 'PC [2]', '00000016908722682808am8_electronic (1).png', 40, 847, 508, 200, 'PC [2]', 'computer , pc , gaming , working , personal', 3, 'on'),
(48, 'PC [3]', '00000016908723404008am8_electronic (7).png', 5, 508, 483, 80, 'PC [3]', 'computer , pc , gaming , working , personal', 3, 'on'),
(50, 'Labtop[1]', '00000016908724634308am8_electronic (2).png', 20, 508, 407, 20, 'Labtop[1]', 'labtop , PL , gaming , working', 3, 'on'),
(51, 'Gaming PC [3]', '00000016908725460608am8_electronic (4).png', 20, 847, 678, 100, 'Gaming PC [3]', 'computer , pc , gaming , working , personal', 3, 'on'),
(52, 'Gaming Labtop[1]', '00000016908729862608am8_pngwing.com (18).png', 50, 1017, 508, 30, 'Gaming Labtop[1]', 'labtop , PL , gaming , working', 3, 'on'),
(53, 'Refrigerator [1]', '00000016908736135308am8_pngwing.com (18).png', 30, 1017, 712, 28, 'Refrigerator [1]', 'Refrigerator ,refrigerator ,Fridge ,fridge ,cooler', 3, 'on'),
(54, 'Refrigerator [2]', '00000016908736432308am8_pngwing.com (20).png', 40, 508, 305, 29, 'Refrigerator [2]', 'Refrigerator ,refrigerator ,Fridge ,fridge ,cooler', 3, 'on'),
(55, 'Refrigerator [3]', '00000016908736715108am8_pngwing.com (19).png', 35, 678, 441, 90, 'Refrigerator [3]', 'Refrigerator ,refrigerator ,Fridge ,fridge ,cooler', 3, 'on'),
(56, 'Refrigerator [4]', '00000016908736941408am8_pngwing.com (21).png', 30, 1017, 712, 90, 'Refrigerator [4]', 'Refrigerator ,refrigerator ,Fridge ,fridge ,cooler', 3, 'on'),
(57, 'Microwave [1]', '00000016908737703008am8_pngwing.com (22).png', 20, 136, 108, 40, 'Microwave [1]', 'microwave , kitchen , electric ', 3, 'on'),
(58, 'Microwave [2]', '00000016908738000008am8_pngwing.com (23).png', 20, 169, 136, 40, 'Microwave [2]', 'microwave , kitchen , electric ', 3, 'on'),
(59, 'Electric Oven [1]', '00000016908738454508am8_pngwing.com (25).png', 10, 237, 214, 30, 'Electric Oven [1]', 'oven , electric , kitchen ', 3, 'on'),
(60, 'Electric Oven [2]', '00000016908738650508am8_pngwing.com (26).png', 10, 237, 214, 30, 'Electric Oven [2]', 'oven , electric , kitchen ', 3, 'on'),
(62, 'Kitchen Machine Set [1]', '00000016908740743408am8_pngwing.com (28).png', 10, 68, 61, 20, 'Kitchen Machine Set [1]', 'machine , juice , kitchen , tasty', 3, 'on'),
(65, 'Jacket', '00000016926039923208am8_pngegg (1).png', 10, 10, 9, 48, 'nice quality', 'army , fojj , jacket , winter , cold', 1, 'on'),
(66, 'girl dress [2]', '00000016926040921208am8_pngegg.png', 50, 51, 25, 49, 'dress ecMarket ka h to acha h', 'girl , dress , woman , girl dress ', 1, 'on'),
(67, 'jacket [3]', '00000016926041713108am8_pngegg (2).png', 40, 34, 20, 48, 'nice quality h bro', 'cold , winter , jacket , winter cloth', 1, 'on'),
(68, 'belt [1]', '00000016926042535308am8_pngegg (3).png', 42, 10, 6, 64, 'weapon of mother and father', 'belt , weapon ', 1, 'on'),
(69, 'jacket [4]', '00000016926043125208am8_pngegg (4).png', 20, 31, 24, 88, 'nice quality h bro', 'cold , winter , jacket , winter cloth', 1, 'on'),
(70, 'shirt [3]', '00000016926043820208am8_pngegg (5).png', 10, 17, 15, 999, 'thing of quality', 'shirt , gents shirt , boy shirt', 1, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(255) NOT NULL,
  `product_names` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `product_names`) VALUES
(1, 'Fashion'),
(2, 'Jewelry'),
(3, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `roles_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `roles_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sign_in_up`
--

CREATE TABLE `sign_in_up` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `role` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_in_up`
--

INSERT INTO `sign_in_up` (`id`, `user_name`, `email`, `password`, `profile`, `role`, `status`) VALUES
(1, 'Usman', 'usman67483@gmail.com', 'usman123', '00000016904709212107pm7_unamed.png', 1, 'enable'),
(2, 'Haider', '8008297@gmail.com', 'haider123', '00000016887379004007pm7_WhatsApp Image 2023-01-10 at 3.48.57 AM.jpeg', 1, 'enable'),
(5, 'Usman123', 'usman123@ecMarket.com', 'Usman123', '00000016932981191908am8_pexels-photo-334978.jpeg', 2, 'enable'),
(6, 'hamza123', 'hamza123@ecMarket.com', 'Hamza123', '00000016911564383808pm8_00000016898651440407pm7_WhatsApp Image 2023-01-10 at 3.48.57 AM.jpeg', 2, 'enable'),
(7, 'faizan123', 'faizan123@ecMarket.com', 'Faizan123', '00000016904038800007pm7_6.PNG', 2, 'enable'),
(8, 'zeeshan123', 'zeeshan123@ecMarket.com', 'Zeeshan123', '00000016904464870707am7_41234.PNG', 2, 'enable'),
(9, 'haider123', 'haider123@ecMarket.com', 'Haider123', '00000016908691941408am8_user design.PNG', 2, 'enable'),
(11, 'Usman1231', 'usman1231@ecMarket.com', 'Usman123', '00000016911719470708pm8_00000016898361454507am7_shoes (1).png', 2, 'enable'),
(12, 'usm789', 'us3245@STG.com', 'Usman123', '00000016934080402008pm8_13.jpg', 2, 'enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `cities_pk`
--
ALTER TABLE `cities_pk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `epage`
--
ALTER TABLE `epage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_id` (`tracking_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key` (`tracking_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_type` (`p_type`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_in_up`
--
ALTER TABLE `sign_in_up`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities_pk`
--
ALTER TABLE `cities_pk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `epage`
--
ALTER TABLE `epage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sign_in_up`
--
ALTER TABLE `sign_in_up`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `city` FOREIGN KEY (`city`) REFERENCES `cities_pk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `branch` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `key` FOREIGN KEY (`tracking_id`) REFERENCES `order_details` (`tracking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `p_type` FOREIGN KEY (`p_type`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `sign_in_up`
--
ALTER TABLE `sign_in_up`
  ADD CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
