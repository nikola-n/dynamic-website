-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2019 at 02:35 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.3.10-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover` varchar(1000) DEFAULT NULL,
  `heading` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `subheading` varchar(32) CHARACTER SET ucs2 DEFAULT NULL,
  `about` text,
  `phone` varchar(32) DEFAULT NULL,
  `location` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `url_img` varchar(1000) CHARACTER SET geostd8 DEFAULT NULL,
  `about_img` text,
  `url_img1` varchar(1000) CHARACTER SET geostd8 DEFAULT NULL,
  `about_img1` text,
  `url_img2` varchar(1000) CHARACTER SET geostd8 DEFAULT NULL,
  `about_img2` text,
  `description` text,
  `linkedin` varchar(128) DEFAULT NULL,
  `facebook` varchar(128) DEFAULT NULL,
  `twitter` varchar(128) DEFAULT NULL,
  `googleplus` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `cover`, `heading`, `subheading`, `about`, `phone`, `location`, `type`, `url_img`, `about_img`, `url_img1`, `about_img1`, `url_img2`, `about_img2`, `description`, `linkedin`, `facebook`, `twitter`, `googleplus`) VALUES
(9, 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'ÐÐ°ÑÐ»Ð¾Ð²', 'ÐŸÐ¾Ð´Ð½Ð°ÑÐ»Ð¾Ð²', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar eros id eleifend semper. Duis vel facilisis sapien. Vivamus tincidunt dapibus congue. Quisque metus arcu, gravida quis ex at, condimentum gravida ante. Quisque elementum sapien nibh, quis tempor justo ullamcorper eget. Duis suscipit lacus eget mi aliquam venenatis. Pellentesque vel massa sed purus dapibus laoreet vel id eros. Nam ornare lorem est, vel commodo purus interdum ac. Pellentesque a pellentesque lacus.\r\n', '+38970264995', 'Ð’ÐµÐ»ÐµÑ, ÐœÐ°ÐºÐµÐ´Ð¾Ð½Ð¸Ñ˜Ð°', 'ÐŸÑ€Ð¾Ð´ÑƒÐºÑ‚Ð¸', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar eros id eleifend semper. Duis vel facilisis sapien. Vivamus tincidunt dapibus congue. Quisque metus arcu, gravida quis ex at, condimentum gravida ante. Quisque elementum sapien nibh, quis tempor justo ullamcorper eget. Duis suscipit lacus eget mi aliquam venenatis. Pellentesque vel massa sed purus dapibus laoreet vel id eros. Nam ornare lorem est, vel commodo purus interdum ac. Pellentesque a pellentesque lacus.\r\n', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar eros id eleifend semper. Duis vel facilisis sapien. Vivamus tincidunt dapibus congue. Quisque metus arcu, gravida quis ex at, condimentum gravida ante. Quisque elementum sapien nibh, quis tempor justo ullamcorper eget. Duis suscipit lacus eget mi aliquam venenatis. Pellentesque vel massa sed purus dapibus laoreet vel id eros. Nam ornare lorem est, vel commodo purus interdum ac. Pellentesque a pellentesque lacus.\r\n', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar eros id eleifend semper. Duis vel facilisis sapien. Vivamus tincidunt dapibus congue. Quisque metus arcu, gravida quis ex at, condimentum gravida ante. Quisque elementum sapien nibh, quis tempor justo ullamcorper eget. Duis suscipit lacus eget mi aliquam venenatis. Pellentesque vel massa sed purus dapibus laoreet vel id eros. Nam ornare lorem est, vel commodo purus interdum ac. Pellentesque a pellentesque lacus.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar eros id eleifend semper. Duis vel facilisis sapien. Vivamus tincidunt dapibus congue. Quisque metus arcu, gravida quis ex at, condimentum gravida ante. Quisque elementum sapien nibh, quis tempor justo ullamcorper eget. Duis suscipit lacus eget mi aliquam venenatis. Pellentesque vel massa sed purus dapibus laoreet vel id eros. Nam ornare lorem est, vel commodo purus interdum ac. Pellentesque a pellentesque lacus.\r\n', 'https://www.linkedin.com/in/nikola-najdov-b90a54182/', 'https://www.facebook.com/nikola.najdov1', NULL, 'https://myaccount.google.com/?utm_source=OGB&utm_medium=act'),
(10, 'fda', 'ffas', 'kj', 'dasdasfsasdf', 'Ñ†Ð·ÑŸÑ†Ð·ÑŸÑ†', 'fsafasf', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', NULL, 'fadfadfadf', NULL, 'fadfdfdfdf', NULL, 'fadfdf', 'fadfadsfasf', 'fas', 'fadfd', NULL, 'fadfdaf'),
(11, 'fda', 'ffas', 'kj', 'dasdasfsasdf', 'Ñ†Ð·ÑŸÑ†Ð·ÑŸÑ†', 'fsafasf', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', NULL, 'fadfadfadf', NULL, 'fadfdfdfdf', NULL, 'fadfdf', 'fadfadsfasf', 'fas', 'fadfd', NULL, 'fadfdaf'),
(12, 'fda', 'ffas', 'kj', 'dasdasfsasdf', 'Ñ†Ð·ÑŸÑ†Ð·ÑŸÑ†', 'fsafasf', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', NULL, 'fadfadfadf', NULL, 'fadfdfdfdf', NULL, 'fadfdf', 'fadfadsfasf', 'fas', 'fadfd', NULL, 'fadfdaf'),
(13, 'https://cdn.pixabay.com/photo/2017/11/07/00/07/fantasy-2925250_960_720.jpg', 'ÐÐ°ÑÐ»Ð¾Ð²1', 'ÐŸÐ¾Ð´Ð½Ð°ÑÐ»Ð¾Ð²1', 'sfkafsklfasjfasasfjkfasljksfjkl', '91237921731', 'sfajksafjlasfjklfsajfjas', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', NULL, 'ksda;daskdas;lak', NULL, 'dsajkldsajjadskl', NULL, 'jkldsajkldsjklads', 'djksljldksjkl', 'dasdsakldasj', 'kjladsalkdasjk', NULL, 'alksadjklladsk'),
(14, 'https://cdn.pixabay.com/photo/2017/11/07/00/07/fantasy-2925250_960_720.jpgsasdadsas', 'ÐÐ°ÑÐ»Ð¾Ð²1fraaer', 'ÐŸÐ¾Ð´Ð½Ð°ÑÐ»Ð¾Ð²1', 'sfkafsklfasjfasasfjkfasljksfjkldsadsdasdsdsasad', '91237921731321312', 'sfajksafjlasfjklfsajfjasdssadads', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', NULL, 'ksda;daskdas;laksm,sdan,dad', NULL, 'dsajkldsajjadskldsajdsaldasjk', NULL, 'jkldsajkldsjkladssdaljadskjdsak', 'djksljldksjklsadjkdsajkldsajkl', 'dasdsakldasjdaskl;dasdas;l', 'sdaljkdsaljkaslk', NULL, 'daskladsdaskl;adskl'),
(15, 'fafasfsfas', 'fassaffsa', 'fassaffas', 'fsasaffsafasfas', 'safsaffassaf', 'fsafasfsa', 'ÐŸÑ€Ð¾Ð´ÑƒÐºÑ‚Ð¸', 'fsfasfasfaq', 'fafasfsafas', 'fsasafsaf', 'fsfsasfa', 'ffasfsafsa', 'fsfsafsa', 'fsafasfsa', 'fadfasfsafas', 'fsasaffasfas', 'fsfsafsa', 'sfasaffsafas'),
(16, 'fafasfsfas', 'fassaffsa', 'fassaffas', 'fsasaffsafasfas', 'safsaffassaf', 'fsafasfsa', 'ÐŸÑ€Ð¾Ð´ÑƒÐºÑ‚Ð¸', 'fsfasfasfaq', 'fafasfsafas', 'fsasafsaf', 'fsfsasfa', 'ffasfsafsa', 'fsfsafsa', 'fsafasfsa', 'fadfasfsafas', 'fsasaffasfas', 'fsfsafsa', 'sfasaffsafas'),
(17, 'fafasfsfas', 'fassaffsa', 'fassaffas', 'fsasaffsafasfas', 'safsaffassaf', 'fsafasfsa', 'ÐŸÑ€Ð¾Ð´ÑƒÐºÑ‚Ð¸', 'fsfasfasfaq', 'fafasfsafas', 'fsasafsaf', 'fsfsasfa', 'ffasfsafsa', 'fsfsafsa', 'fsafasfsa', 'fadfasfsafas', 'fsasaffasfas', 'fsfsafsa', 'sfasaffsafas'),
(18, 'sdkjsadkadsjlajlkds', 'fasjlksafjfkajasfljkf', 'fasjljlsaflsafjfas', 'fsjklfasljkfasjlasfj', 'fasljkfaslljsafjl2121213', 'safjksaljksaj', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', 'jashkhfshkafk', 'fasjkfsaljksafjkal', 'fadkjsaffasjklasjkl', 'fasjklsafjfsajkljks', 'fdkjlfjklfsajklfsjk', 'fasjkfsajklsafjjasfkl', 'fasjksafjfsajljasfk', 'fajklfasjfsajlljk', 'fsajkljasfkjkasfl', 'fsajklfasjklfasjlj', 'fajklfsajkljask'),
(19, 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjlksafjfkajasfljkf', 'fasjljlsaflsafjfas', 'fsjklfasljkfasjlasfj', 'fasljkfaslljsafjl2121213', 'safjksaljksaj', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', 'jashkhfshkafk', 'fasjkfsaljksafjkal', 'fadkjsaffasjklasjkl', 'fasjklsafjfsajkljks', 'fdkjlfjklfsajklfsjk', 'fasjkfsajklsafjjasfkl', 'fasjksafjfsajljasfk', 'fajklfasjfsajlljk', 'fsajkljasfkjkasfl', 'fsajklfasjklfasjlj', 'fajklfsajkljask'),
(20, 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjlksafjfkajasfljkf', 'fasjljlsaflsafjfas', 'fsjklfasljkfasjlasfj', 'fasljkfaslljsafjl2121213', 'safjksaljksaj', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjkfsaljksafjkal', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjklsafjfsajkljks', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjkfsajklsafjjasfkl', 'fasjksafjfsajljasfk', 'fajklfasjfsajlljk', 'fsajkljasfkjkasfl', 'fsajklfasjklfasjlj', 'fajklfsajkljask'),
(21, 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjlksafjfkajasfljkf', 'fasjljlsaflsafjfas', 'fsjklfasljkfasjlasfj', 'fasljkfaslljsafjl2121213', 'safjksaljksaj', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjkfsaljksafjkal', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjklsafjfsajkljks', 'https://images.pexels.com/photos/269370/pexels-photo-269370.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fasjkfsajklsafjjasfkl', 'fasjksafjfsajljasfk', 'fajklfasjfsajlljk', 'fsajkljasfkjkasfl', 'fsajklfasjklfasjlj', 'fajklfsajkljask'),
(22, 'https://img.freepik.com/free-vector/hand-drawn-christmas-background_23-2148294250.jpg?size=626&ext=jpg', 'fasjlksafjfkajasfljkf', 'fasjljlsaflsafjfas', 'fsjklfasljkfasjlasfj', 'fasljkfaslljsafjl2121213', 'safjksaljksaj', 'Ð¡ÐµÑ€Ð²Ð¸ÑÐ¸', 'https://img.freepik.com/free-vector/hand-drawn-christmas-background_23-2148294250.jpg?size=626&ext=jpg', 'fasjkfsaljksafjkal', 'https://img.freepik.com/free-vector/hand-drawn-christmas-background_23-2148294250.jpg?size=626&ext=jpg', 'fasjklsafjfsajkljks', 'https://img.freepik.com/free-vector/hand-drawn-christmas-background_23-2148294250.jpg?size=626&ext=jpg', 'fasjkfsajklsafjjasfkl', 'fasjksafjfsajljasfk', 'fajklfasjfsajlljk', 'fsajkljasfkjkasfl', 'fsajklfasjklfasjlj', 'fajklfsajkljask');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
