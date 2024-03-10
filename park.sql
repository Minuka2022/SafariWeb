-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 08:56 PM
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
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `national_parks`
--

CREATE TABLE `national_parks` (
  `id` int(11) NOT NULL,
  `park_name` varchar(100) NOT NULL,
  `details` text DEFAULT NULL,
  `image_urls` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `national_parks`
--

INSERT INTO `national_parks` (`id`, `park_name`, `details`, `image_urls`) VALUES
(1, 'Wilpattu National Park', 'Wilpattu National Park is a park located on the island of Sri Lanka. It is the largest national park in the country, spanning over 1,300 square kilometers. The park is known for its diverse wildlife, including leopards, elephants, sloth bears, and a variety of bird species.', 'img-10-2.jpg,img-11-2.jpg,img-12-2.jpg,img-13-2.jpg'),
(2, 'Minneriya National Park', 'Minneriya National Park is located in the North Central Province of Sri Lanka. It is famous for its large population of wild elephants, which can often be seen gathering around the Minneriya Tank during the dry season. The park is also home to many other species of mammals, birds, and reptiles.', 'image4.jpg,image5.jpg,image6.jpg'),
(3, 'Kaudulla National Park', 'Kaudulla National Park is situated in the Polonnaruwa district of Sri Lanka. It is known for its large herds of elephants, which migrate to the park during the dry season. In addition to elephants, the park is home to a variety of other wildlife, including sambar deer, leopards, and sloth bears.', 'image7.jpg,image8.jpg,image9.jpg'),
(4, 'Eco Park', 'Eco Park is a popular tourist destination located in Dambulla, Sri Lanka. The park is known for its beautiful landscapes, which include lush forests, meandering rivers, and picturesque waterfalls. Visitors to Eco Park can enjoy activities such as hiking, birdwatching, and picnicking.', 'image10.jpg,image11.jpg,image12.jpg'),
(5, 'Yala National Park', 'Yala National Park is the most visited and second largest national park in Sri Lanka. It is located in the southeast region of the country and is renowned for its diverse range of wildlife, including leopards, elephants, and crocodiles. Yala also boasts a variety of ecosystems, including forests, grasslands, and coastal lagoons.', 'image13.jpg,image14.jpg,image15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_details`
--

CREATE TABLE `tour_details` (
  `id` int(11) NOT NULL,
  `park_id` int(11) DEFAULT NULL,
  `tour_name` text DEFAULT NULL,
  `tour_price` text DEFAULT NULL,
  `tour_time` varchar(100) NOT NULL,
  `tour_details` text DEFAULT NULL,
  `tour_price1` text DEFAULT NULL,
  `tour_price2` text DEFAULT NULL,
  `tour_price3` text DEFAULT NULL,
  `tour_price4` text DEFAULT NULL,
  `tour_price5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_details`
--

INSERT INTO `tour_details` (`id`, `park_id`, `tour_name`, `tour_price`, `tour_time`, `tour_details`, `tour_price1`, `tour_price2`, `tour_price3`, `tour_price4`, `tour_price5`) VALUES
(1, 3, 'Elephant Safari', '$45', 'Morning Tour', 'Experience the thrill of an elephant safari at Kaudulla National Park. Get up close to these magnificent creatures as you explore their natural habitat in the early morning hours.', NULL, NULL, NULL, NULL, NULL),
(2, 3, 'Jeep Safari', '$55', 'Evening Tour', 'Embark on an exciting jeep safari through the wilderness of Kaudulla National Park. Encounter a variety of wildlife, including elephants, deer, and exotic bird species, as you navigate through the park.', NULL, NULL, NULL, NULL, NULL),
(3, 4, 'Nature Walk', '$25', 'Morning Tour', 'Take a leisurely nature walk through the Eco Park and immerse yourself in the beauty of nature. Learn about the park\'s flora and fauna from our knowledgeable guides as you explore the tranquil surroundings.', NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Waterfall Excursion', '$35', 'Afternoon Tour', 'Join us for a thrilling waterfall excursion in Eco Park. Swim in crystal-clear pools, slide down natural water slides, and marvel at the breathtaking beauty of the park\'s waterfalls.', NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Leopard Safari', '$70', 'Morning Tour', 'Embark on a safari adventure in search of the elusive leopard at Yala National Park. Our experienced guides will take you deep into the heart of the park, where you\'ll have the best chance of spotting this majestic big cat.', NULL, NULL, NULL, NULL, NULL),
(6, 5, 'Coastal Tour', '$50', 'Afternoon Tour', 'Explore the coastal areas of Yala National Park on a guided tour. Discover pristine beaches, mangrove forests, and hidden coves as you soak in the beauty of Sri Lanka\'s southern coastline.', NULL, NULL, NULL, NULL, NULL),
(7, 1, 'Morning Safari', '$50', 'Morning Tour', 'Join us for an exciting morning safari at Wilpattu National Park. Experience the thrill of spotting leopards, elephants, and other wildlife as you explore the park in the early hours of the day.', '$100', '$150', '$200', '$250', '$300'),
(8, 1, 'Evening Safari', '$60', 'Evening Tour', 'Experience the magic of Wilpattu National Park at dusk with our evening safari. Watch as the park comes alive with activity and witness the stunning sunset over the wilderness.', NULL, NULL, NULL, NULL, NULL),
(9, 1, 'Lunch Safari', '$70', 'Afternoon Tour', 'Enjoy a delicious lunch in the wilderness during our lunch safari at Wilpattu National Park. After your meal, explore the park and encounter its diverse wildlife in their natural habitat.', NULL, NULL, NULL, NULL, NULL),
(10, 2, 'Elephant Gathering Tour', '$40', 'Morning Tour', 'Embark on a morning tour of Minneriya National Park to witness the famous elephant gathering. Marvel at the sight of hundreds of elephants as they congregate around the Minneriya Tank in search of water and food.', NULL, NULL, NULL, NULL, NULL),
(11, 2, 'Birdwatching Tour', '$30', 'Evening Tour', 'Join our expert guides for an evening birdwatching tour of Minneriya National Park. Explore the park\'s diverse ecosystems and spot a wide variety of bird species in their natural habitat.', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `national_parks`
--
ALTER TABLE `national_parks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `park_name` (`park_name`);

--
-- Indexes for table `tour_details`
--
ALTER TABLE `tour_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `park_id` (`park_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `national_parks`
--
ALTER TABLE `national_parks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_details`
--
ALTER TABLE `tour_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour_details`
--
ALTER TABLE `tour_details`
  ADD CONSTRAINT `tour_details_ibfk_1` FOREIGN KEY (`park_id`) REFERENCES `national_parks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
