-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 05:19 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `credit_card` varchar(255) NOT NULL,
  `exp_month` varchar(255) NOT NULL,
  `exp_year` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `session`, `fullname`, `email`, `address`, `city`, `state`, `zipcode`, `card_name`, `credit_card`, `exp_month`, `exp_year`, `cvv`) VALUES
(3, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', 'donminick', '1112-3212-2232', 'september', '1999', '232'),
(4, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231', '1313', 'september', '1999', '231'),
(5, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231', '1313', 'september', '1999', '231'),
(6, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231', '1313', 'september', '1999', '231'),
(7, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231', '1313', 'september', '1999', '231'),
(8, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', 'donminick', '123', '131', '1231', '1311'),
(9, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '213', '231', '1313', '1231', '313'),
(10, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', 'donminicl', '123', '232', '3', '13'),
(11, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', 'donminick', '123-23123-21313', 'september', '209', '12i'),
(12, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123', '2313-231-1231', 'september', '2019', '200'),
(13, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '213131', '131', '1231', '13', '31'),
(14, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', 'donmiick', '2313-12331-12313', 'september', '123', '2131'),
(15, 'donminick', 'do', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '2131', '12313', '131', '132', '123'),
(16, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '12313', 'ewf1231', 'd1231', 'q2312', '1313'),
(17, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '12313', '21321', '13', '123', '1231'),
(18, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', 'donminick', '123-1231-1233', 'september', '1999', '332'),
(19, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '221', '123', '123', '123', '123'),
(20, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '221', '123', '123', '123', '123'),
(21, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '221', '123', '123', '123', '123'),
(22, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '221', '123', '123', '123', '123'),
(23, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '221', '123', '123', '123', '123'),
(24, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '221', '123', '123', '123', '123'),
(25, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '221', '123', '123', '123', '123'),
(26, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '23131', '1231', '1313', '1311231', '2131'),
(27, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231', '1231', '1232131', '123', '123'),
(28, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231', '1231', '1232131', '123', '123'),
(29, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '2131', '131', '3213131', '31', '31'),
(30, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-123', '1231', '2131', '31', '1231'),
(31, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-124', '123-231--45-', '21231', '131-123', '3131'),
(32, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(33, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(34, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(35, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(36, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(37, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(38, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(39, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(40, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(41, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(42, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231-1231', '1231-123131', '1231-', '213131', '13131'),
(43, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '12321-', '23131', '3211', '231-'),
(44, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '12321-', '23131', '3211', '231-'),
(45, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-411', '123', '12311', '321', '31'),
(46, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(47, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(48, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(49, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(50, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(51, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(52, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(53, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(54, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(55, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(56, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(57, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(58, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(59, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-1231', '1231-123', '321', '312', '31'),
(60, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123', '321', '31', '31', '321'),
(61, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123', '321', '31', '31', '321'),
(62, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '1231', '31', '32131', '231231'),
(63, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '1231', '31', '32131', '231231'),
(64, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '1231', '31', '32131', '231231'),
(65, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '1231', '31', '32131', '231231'),
(66, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '1231', '31', '32131', '231231'),
(67, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '1231-1231', '1231', '31', '32131', '231231'),
(68, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '2131-123', '321', '31', '31', '3123'),
(69, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123', '31', '31', '31', '3131'),
(70, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123-1231-123', '123-', '31-', '3113', '1231'),
(71, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '2131-21231-123-', '12321-123-131-', '13-', '31-', '31-'),
(72, 'allenjr', 'allen', 'allen@yahoo.com', 'brgy 8 tanga', 'batangas', 'ada', 'ada', 'asda', 'da', 'dsd', 'dssfs', 'sfs'),
(73, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123', '2131', '213', '131', '31231'),
(74, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123--123', '324', '2342', '24', '2424'),
(75, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123', '231', '31', '231', '321'),
(76, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '12331', '1231', '1313', '1231', '3131'),
(77, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '123', '13', '312', '313', '31'),
(78, 'lyewee', 'lyeweleen', 'lyewleen1232@yahoo.com', 'biga ', 'calatagan', 'ad', 'ada', 'ad13', '123123', '1321', 'w2321', '31321'),
(79, 'lyewee', 'lyeweleen', 'lyewleen1232@yahoo.com', 'biga', 'calatagan', 'ad', 'ada', '123', '321', '131', '3131313', '1231'),
(80, 'donminick', 'donminick P. Bautista', 'donminick120@gmail.com', 'cogunan', 'nasugbu', 'batangas', '4231', '12323', '31', '31', '31', '313'),
(81, 'lyewee', 'lyeweleen', 'lyewleen1232@yahoo.com', 'biga', 'calatagan', 'ad', 'ada', '123', '31', '31', '313', '31');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `upload_photo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `product`, `description`, `quantity`, `price`, `upload_photo`, `status`, `date`) VALUES
(139, 'donminick', '7 Buttons LED', '<p>Optical Wireless Gaming Mouse For Win7/8 ME XP, 2400 DPI /1600 DPI /1000 DPI /600 DPI </p>', '4', '1900', 'mosuess.png', 1, '2019-04-09 10:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date_created`) VALUES
(1, 'Electronic', '2019-04-05 06:45:34'),
(2, 'Electronic Tools', '2019-04-05 06:45:34'),
(3, 'Cellphone', '2019-04-05 06:45:34'),
(4, 'Laptops', '2019-04-05 06:45:34'),
(5, 'shampoo', '2019-04-05 06:45:34'),
(8, 'Mouse', '2019-04-05 06:45:34'),
(9, 'Keyboard', '2019-04-09 09:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `upload-photo` varchar(1000) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `quantity`, `price`, `upload-photo`, `date_posted`, `category`) VALUES
(17, 'Gaming Keyboard', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '100', '2000', 'keyboard.png', '2019-04-04 02:09:25', 'Laptops'),
(18, 'Gaming Monitor', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', '100', '2000', 'gamingmonitor.png', '2019-04-04 02:09:25', 'Electronic'),
(21, 'apple 1', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '10', '20000', 'apple1.png', '2019-04-08 09:07:35', 'Cellphone'),
(22, 'motorola', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '10', '15600', 'asus.png', '2019-04-08 09:08:24', 'Cellphone'),
(25, 'linux acer laptop', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '10', '14000', 'linux_acer.png', '2019-04-08 09:13:17', 'Laptops'),
(26, 'hp laptop', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '10', '20300', 'hp.png', '2019-04-08 09:13:41', 'Laptops'),
(27, 'samsung laptop', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '29', '18000', 'samsung.png', '2019-04-08 09:15:02', 'Laptops'),
(28, 'PICTEK Gaming Mouse', '<p>PICTEK Gaming Mouse Wired, 8 Programmable Buttons, Chroma RGB Backlit, 7200 DPI Adjustable</p>\r\n', '12', '2000', 'mouse1.png', '2019-04-09 09:40:15', 'Mouse'),
(29, '7 Buttons LED', '<p>Optical Wireless Gaming Mouse For Win7/8 ME XP, 2400 DPI /1600 DPI /1000 DPI /600 DPI&nbsp;</p>\r\n', '12', '1900', 'mosuess.png', '2019-04-09 09:41:03', 'Mouse'),
(31, 'Sound BlasterX Vanguard K08', '<p>RGB Mechanical Gaming Keyboard</p>\r\n', '9', '3000', 'keyboard.png', '2019-04-09 09:46:06', 'Keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `date_sale` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `product`, `price`, `session`, `date_sale`, `status`, `number`) VALUES
(4, '            Gaming Monitor            Gaming Keyboard            shampoo                        ', '4120', 'donminick', '2019-04-08 04:06:56', '1', ''),
(5, '            Gaming Keyboard            shampoo                        ', '2120', 'donminick', '2019-04-08 05:52:39', '1', ''),
(6, '            Gaming Monitor                        ', '2000', 'donminick', '2019-04-08 07:05:44', '', ''),
(7, '            hp laptop            apple 1                        ', '40300', 'allenjr', '2019-04-08 10:16:29', '', ''),
(8, '            Gaming Keyboard            shampoo            hp laptop            linux_acer laptop                        ', '36420', 'donminick', '2019-04-08 11:05:32', '', ''),
(10, '            hp_laptop            hp_laptop                        ', '60900', 'donminick', '2019-04-09 05:22:04', '1', '09462536385'),
(11, '            hp_laptop                        ', '20300', 'donminick', '2019-04-09 07:56:28', '1', '09272606707'),
(12, '            samsung laptop            motorola                        ', '82800', 'lyewee', '2019-04-09 09:16:56', '1', '09462536385'),
(13, '            samsung laptop            hp laptop                        ', '76600', 'lyewee', '2019-04-09 09:23:43', '1', '09462536385'),
(14, '            linux acer laptop            Sound BlasterX Vanguard K08                        ', '41000', 'donminick', '2019-04-09 09:47:53', '1', '09272606707'),
(15, '            Sound BlasterX Vanguard K08                        ', '9000', 'lyewee', '2019-04-09 09:59:23', '1', '09462536385');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fone` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `type`, `fone`) VALUES
(1, 'butch', '12345', '', '', 'admin', ''),
(2, 'asds', 'fds', 'sdfsf@yahoo.com', 'sdf', 'costumer', ''),
(3, 'donminick', '12345', 'donminick120@gmail.com', 'Cogunan Nasugbu, Batangas', 'costumer', '09272606707'),
(4, 'admin', '12345', '', '', 'admin', ''),
(5, 'allenjr', '12345', 'aj45@yahoo.com', 'brgy 8 nasugbu batangas', 'costumer', ''),
(6, 'lyewee', '12345', 'lyewleen1232@yahoo.com', 'biga calatagan, batangas', 'costumer', '09462536385');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
