-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 02:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allforums`
--

CREATE TABLE `allforums` (
  `forum_ID` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `date_posted` datetime DEFAULT current_timestamp(),
  `replyTo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allforums`
--

INSERT INTO `allforums` (`forum_ID`, `user_ID`, `category`, `title`, `content`, `date_posted`, `replyTo`) VALUES
(57, 3, 'General Discussion', 'General Discussion', NULL, '2024-05-07 11:27:13', NULL),
(58, 3, 'Green Initiatives', 'Green Initiatives', NULL, '2024-05-07 11:27:32', NULL),
(59, 1, 'Tips & Tricks', 'Tips & Tricks\r\n\r\n ', NULL, '2024-05-07 11:34:46', NULL),
(60, 1, 'Green Technology', 'Green Technology\r\n\r\n', NULL, '2024-05-07 11:34:59', NULL),
(61, 1, NULL, '', 'hi', '2024-05-07 11:35:19', '57'),
(62, 1, NULL, '', 'hello', '2024-05-07 11:35:38', '58'),
(63, 19, 'Gardening & Agriculture', 'Gardening & Agriculture\r\n\r\n', NULL, '2024-05-07 11:48:54', NULL),
(64, 19, 'Wildlife Conservation', 'Wildlife Conservation\r\n\r\n', NULL, '2024-05-07 11:49:07', NULL),
(65, 19, NULL, '', 'hi', '2024-05-07 11:49:25', '63'),
(66, 19, NULL, '', 'hello', '2024-05-07 11:49:49', '60'),
(67, 19, NULL, '', 'wow', '2024-05-07 11:50:14', '59');

-- --------------------------------------------------------

--
-- Table structure for table `community groups`
--

CREATE TABLE `community groups` (
  `group_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `group_Name` varchar(300) NOT NULL,
  `group_Type` varchar(300) NOT NULL,
  `member_Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educational_resource`
--

CREATE TABLE `educational_resource` (
  `resourceID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `date_posted` date DEFAULT current_timestamp(),
  `user_ID` int(11) DEFAULT NULL,
  `img` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_resource`
--

INSERT INTO `educational_resource` (`resourceID`, `title`, `content`, `date_posted`, `user_ID`, `img`, `status`, `admin_id`) VALUES
(52, 'Climate Change', 'Climate change refers to long-term shifts in temperatures and weather patterns. Such shifts can be natural, due to changes in the sun’s activity or large volcanic eruptions. But since the 1800s, human activities have been the main driver of climate change, primarily due to the burning of fossil fuels like coal, oil and gas.\r\n\r\nBurning fossil fuels generates greenhouse gas emissions that act like a blanket wrapped around the Earth, trapping the sun’s heat and raising temperatures.\r\n\r\nThe main greenhouse gases that are causing climate change include carbon dioxide and methane. These come from using gasoline for driving a car or coal for heating a building, for example. Clearing land and cutting down forests can also release carbon dioxide. Agriculture, oil and gas operations are major sources of methane emissions. Energy, industry, transport, buildings, agriculture and land use are among the main sectors causing greenhouse gases.\r\n', '2024-05-09', 1, 'climate.jpg', 'approved', NULL),
(53, 'Afforestation', 'Afforestation is the establishment of a forest or stand of trees (forestation) in an area where there was no recent tree cover.In comparison, reforestation means re-establishing forest that have either been cut down or lost due to natural causes, such as fire, storm, etc. There are three types of afforestation: Natural regeneration, agroforestry and tree plantations.Afforestation has many benefits. In the context of climate change, afforestation can be helpful for climate change mitigation through the route of carbon sequestration. Afforestation can also improve the local climate through increased rainfall and by being a barrier against high winds. The additional trees can also prevent or reduce topsoil erosion (from water and wind), floods and landslides. Finally, additional trees can be a habitat for wildlife, and provide employment and wood products.', '2024-05-07', 3, 'afforestation.jpg', 'approved', NULL),
(54, 'Reforestation', 'Reforestation can be defined as the process of replanting trees in areas that have been affected by natural disturbances like wildfires, drought, and insect and disease infestations — and unnatural ones like logging, mining, agricultural clearing, and development. This can mean anything from supporting natural regeneration in an area that has been degraded to planting ecologically appropriate tree seedlings after forest fires.\r\n\r\nBy planting trees in areas that have been degraded or deforested, reforestation helps the environment by guaranteeing, or accelerating the re-establishment of healthy forest structure by regrowing the forest canopy and preserving biodiversity within the ecosystem.', '2024-05-10', 1, '212122.jfif', 'approved', NULL),
(55, 'Tree Planting', 'Forests play a critical part to keep our environment healthy. But our forests need us more than ever – more than 1 million acres of National Forests are in need of reforestation. To bring awareness to this incredible need and the NFF’s 50 Million for our Forests campaign, we are excited to share 30 facts about reforestation.\r\n\r\nEcological & Environmental Value: Trees contribute to their environment by providing oxygen, improving air quality, climate enhancement, conserving water, preserving soil, and supporting wildlife. Personal & Spiritual Value: Most of us react to the presence of trees with a pleasant, relaxed, comfortable feeling.', '2024-05-07', 19, 'planting.jpg', 'pending', NULL),
(86, 'Cleaning', 'Quis blandit turpis cursus in hac habitasse platea dictumst quisque. In egestas erat imperdiet sed euismod nisi porta lorem.', '2024-05-09', NULL, '663cfae09c113.jfif', 'approved', NULL),
(94, 'Tank Cleaner', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque egestas diam in arcu cursus euismod quis viverra nibh. ', '2024-05-09', NULL, '663cff50587f0.png', 'approved', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `month` varchar(3) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `timing` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `year`, `month`, `day`, `title`, `description`, `timing`) VALUES
(1, '2023-10-10', '2023', 'Oct', 10, 'Exciting Announcement: Launch of New Product Line', '', '01:00 am'),
(2, '2023-12-22', '2023', 'Dec', 22, 'Forestry 101: Sustainable Practices Workshop', 'Dive into the world of forestry with this informative workshop. Learn about sustainable forest management practices, the importance of biodiversity, and how you can help protect our precious forests for future generations.', '10:45 am'),
(3, '2022-01-08', '2022', 'Jan', 8, 'Seed Gathering Expedition', 'Calling all nature lovers! Join us on a seed gathering adventure as we collect native tree seeds to support reforestation efforts. Learn how to identify different tree species and contribute to the preservation of our natural heritage.', '10:00 am'),
(4, '2024-03-09', '2024', 'Mar', 9, 'Reforesting Minds: Awareness Campaign', 'Get involved in our mission to raise awareness about the importance of reforestation and the devastating effects of deforestation. Help spread the word through social media, educational materials, and community outreach events.', '10:30 am'),
(5, '2024-04-04', '2024', 'Apr', 4, 'Nature\'s Harmony Festival', 'Immerse yourself in the beauty of nature at our art and music festival celebrating reforestation. Enjoy live music, art installations, and outdoor activities while supporting our mission to restore and protect forests.', '10:00 am'),
(6, '2024-06-08', '2024', 'Jun', 8, 'Schools for Trees Program', 'Partner with us to engage students in hands-on reforestation projects and environmental education. Together, we can inspire the next generation of conservationists and create a brighter future for our forests.', '10:00 am');

-- --------------------------------------------------------

--
-- Table structure for table `forum posts`
--

CREATE TABLE `forum posts` (
  `forumPost_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `forum_Category` varchar(300) NOT NULL,
  `date_Posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `join_users`
--

CREATE TABLE `join_users` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join_users`
--

INSERT INTO `join_users` (`id`, `event_id`, `user_id`, `registration_date`) VALUES
(1, 4, 19, '2024-05-10 11:55:46'),
(2, 4, 19, '2024-05-10 12:01:52'),
(3, 2, 3, '2024-05-10 12:03:29'),
(4, 6, 3, '2024-05-10 12:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `year` varchar(4) DEFAULT NULL,
  `month` varchar(3) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `timing` varchar(20) DEFAULT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `year`, `month`, `day`, `title`, `description`, `timing`, `image`) VALUES
(22, '2024', 'May', 10, 'Deforestation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '07:10 am', 'images (7).jfif'),
(23, '2024', 'May', 11, 'Nature drip', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '07:12 pm', 'images (8).jfif'),
(24, '2024', 'May', 10, 'Forest', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '07:12 am', 'images (9).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partner_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `partner_Name` varchar(300) NOT NULL,
  `contact_Email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resource posts`
--

CREATE TABLE `resource posts` (
  `resourcePost_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `resource_Category` varchar(300) NOT NULL,
  `date_Posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shared_clicks`
--

CREATE TABLE `shared_clicks` (
  `click_id` int(11) NOT NULL,
  `resourceID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `click_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shared_clicks`
--

INSERT INTO `shared_clicks` (`click_id`, `resourceID`, `user_ID`, `click_time`) VALUES
(12, 53, 3, '2024-05-09 10:06:02'),
(13, 53, 3, '2024-05-09 10:08:14'),
(16, 53, 3, '2024-05-09 17:02:38'),
(22, 54, 1, '2024-05-09 17:10:15'),
(29, 53, 3, '2024-05-09 17:23:36'),
(30, 54, 1, '2024-05-09 17:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `user_img` varchar(255) NOT NULL DEFAULT 'uploadUserImg/newlogo.jpg',
  `user_name` varchar(300) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `user_img`, `user_name`, `user_email`, `password`, `status`) VALUES
(1, 'uploadUserImg/download20240404003738.png', 'cheyene', 'cheyeneuy@gmail.com', '1234', 'approved'),
(2, 'uploadUserImg/R.jpg', '1', 'elai2ne@gmail.com', '1', 'approved'),
(3, 'uploadUserImg/Car.jpg', 'elaine', 'elaine@gmail.com', '123', 'approved'),
(4, 'uploadUserImg/newlogo.jpg	', 'daphne', 'daphne@gmail.com', '123', 'Suspended'),
(19, 'uploadUserImg/079ed13f9f319ac714983765d6f98de9.jpg', 'kim', 'kim@gmail.com', '123', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allforums`
--
ALTER TABLE `allforums`
  ADD PRIMARY KEY (`forum_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `community groups`
--
ALTER TABLE `community groups`
  ADD PRIMARY KEY (`group_ID`);

--
-- Indexes for table `educational_resource`
--
ALTER TABLE `educational_resource`
  ADD PRIMARY KEY (`resourceID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `fk_admin_id` (`admin_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum posts`
--
ALTER TABLE `forum posts`
  ADD PRIMARY KEY (`forumPost_ID`);

--
-- Indexes for table `join_users`
--
ALTER TABLE `join_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_ID`);

--
-- Indexes for table `resource posts`
--
ALTER TABLE `resource posts`
  ADD PRIMARY KEY (`resourcePost_ID`);

--
-- Indexes for table `shared_clicks`
--
ALTER TABLE `shared_clicks`
  ADD PRIMARY KEY (`click_id`),
  ADD KEY `resourceID` (`resourceID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allforums`
--
ALTER TABLE `allforums`
  MODIFY `forum_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `community groups`
--
ALTER TABLE `community groups`
  MODIFY `group_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educational_resource`
--
ALTER TABLE `educational_resource`
  MODIFY `resourceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `forum posts`
--
ALTER TABLE `forum posts`
  MODIFY `forumPost_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `join_users`
--
ALTER TABLE `join_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resource posts`
--
ALTER TABLE `resource posts`
  MODIFY `resourcePost_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shared_clicks`
--
ALTER TABLE `shared_clicks`
  MODIFY `click_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allforums`
--
ALTER TABLE `allforums`
  ADD CONSTRAINT `allforums_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`);

--
-- Constraints for table `educational_resource`
--
ALTER TABLE `educational_resource`
  ADD CONSTRAINT `educational_resource_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`),
  ADD CONSTRAINT `fk_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin_account` (`id`);

--
-- Constraints for table `join_users`
--
ALTER TABLE `join_users`
  ADD CONSTRAINT `join_users_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `join_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_ID`);

--
-- Constraints for table `shared_clicks`
--
ALTER TABLE `shared_clicks`
  ADD CONSTRAINT `shared_clicks_ibfk_1` FOREIGN KEY (`resourceID`) REFERENCES `educational_resource` (`resourceID`),
  ADD CONSTRAINT `shared_clicks_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
