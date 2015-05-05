-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 01:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spar`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfront_recipes`
--

CREATE TABLE IF NOT EXISTS `addfront_recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(200) NOT NULL,
  `ingred` text NOT NULL,
  `cook_time` varchar(100) NOT NULL,
  `method` text NOT NULL,
  `recipe_image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `addfront_recipes`
--

INSERT INTO `addfront_recipes` (`id`, `recipe_name`, `ingred`, `cook_time`, `method`, `recipe_image`) VALUES
(1, 'pizza', ' jdfuefi, dfehwfiu ey8iw, jfweugfi', '56 min', 'a jhgjugu7 ti tggf  hytfyhfrjfykt u\r\nnm hkiyhli rdtfyj', 'b1.jpg'),
(2, 'new recipe', 'b erbyg, ftguetf87tw, fyusgfuigi', '60 min', 'a  gugfiefieyf ei8fye8wyf ew\r\n djgeudjg wegd\r\ne dhuweh', 'd4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_image`, `priority`, `updated_at`) VALUES
(4, 'aa', 'ad.jpg', 3, '2015-04-30 05:39:53'),
(5, 'fsdf', '980-x-500-B-1.jpg', 2, '2015-04-30 05:39:53'),
(6, 'gdfg', '980X500.png', 1, '2015-04-30 05:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) NOT NULL,
  `brand_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `updated_at`) VALUES
(2, 'fd gjildfjgo245132', '', '0000-00-00 00:00:00'),
(3, 'v gvugivgei8feo', '', '0000-00-00 00:00:00'),
(4, 'j ukyioy', '', '0000-00-00 00:00:00'),
(5, ' guiygilyol u', '', '0000-00-00 00:00:00'),
(6, 'xklc hio', 'DSC_1914.jpg', '2015-03-19 17:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `deal_name` varchar(200) NOT NULL,
  `deal_content` text NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `product_id`, `deal_name`, `deal_content`, `updated_at`) VALUES
(1, 2, ' uiyhr8ige221', 'rge wuiry38oieo1212', '2015-03-20 09:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE IF NOT EXISTS `kids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `kids_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `title`, `content`, `kids_image`, `updated_at`) VALUES
(2, 'fkfdjil geroiww1222', 'dkf eilfhoew11222', '', '0000-00-00 00:00:00'),
(3, 'c sdhwo121', 'dfk herif  oe8', '', '2015-03-19 12:45:26'),
(4, ' iudfidf fie', ' fdsgfiuey rfi8eprw', '', '0000-00-00 00:00:00'),
(5, 'hgu hgihir', 'jhf fdhilveof', '', '2015-03-19 12:04:52'),
(6, 'h f;ods9', ' hvfdkirohfi sdyfoiew', 'DSC_2255.jpg', '2015-03-19 17:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `mid_banner`
--

CREATE TABLE IF NOT EXISTS `mid_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid_banner_name` varchar(200) NOT NULL,
  `mid_banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mid_banner`
--

INSERT INTO `mid_banner` (`id`, `mid_banner_name`, `mid_banner_image`, `priority`, `updated_at`) VALUES
(3, 'dfdsfv', 'DW3-External.jpg', 2, '2015-04-30 10:31:34'),
(4, 'fgfdge', 'win3.jpg', 1, '2015-04-30 10:31:34'),
(5, 'tretg4t', 'XMAS-BANNER.jpg', 3, '2015-04-30 10:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(200) NOT NULL,
  `page_content` text NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_content`, `updated_at`) VALUES
(2, 'vtre ', 'ui hiyo up ', '0000-00-00 00:00:00'),
(4, 'new page1', '111page content', '2015-03-19 17:24:10'),
(5, 'new page dcbj', '<p><strong>dfe hfueh rh&nbsp;</strong>&nbsp;&nbsp;<u>hri83yr 98i3y9 hd uwehi</u></p>\r\n\r\n<ol>\r\n	<li>Retail forms the core business</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>activity at Artee Group and most of</li>\r\n	<li>its businesses in the consumption space are built around retail. Artee Group&#39;s retail network touches the lives of millions of Nigerians. The group currently operates around several stores spread over large retail space.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', '2015-05-02 18:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `page_side_banner`
--

CREATE TABLE IF NOT EXISTS `page_side_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `side_banner_name` varchar(200) NOT NULL,
  `side_banner_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `page_side_banner`
--

INSERT INTO `page_side_banner` (`id`, `side_banner_name`, `side_banner_image`, `updated_at`) VALUES
(1, 'ftheiurht i8', 'ad.jpg', '0000-00-00 00:00:00'),
(2, 'ghrgtod', 'b1.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_detail` varchar(400) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `brand_id`, `product_price`, `product_detail`, `product_image`, `updated_at`) VALUES
(1, 0, 'h 8irtgy981111', 4, 'h ihiyl', 'hjgjglkhlukhli', 'DSC_2282.jpg', '2015-03-20 11:04:51'),
(2, 0, 'hr g8iyr', 0, 'grtig', 'rgtn4ritgnt4', 'DSC_2016.jpg', '0000-00-00 00:00:00'),
(3, 0, 'djhewfiow', 2, 'du f8yer 9fi', 'dkwejh ouw', 'DSC_2016.jpg', '2015-03-20 05:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `preparation_time` varchar(100) NOT NULL,
  `recipe_image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `ingredient` varchar(500) NOT NULL,
  `cook_time` varchar(100) NOT NULL,
  `to_serve` varchar(200) NOT NULL,
  `method` text NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `recipe_name`, `category_id`, `preparation_time`, `recipe_image`, `description`, `ingredient`, `cook_time`, `to_serve`, `method`, `updated_at`, `created_at`) VALUES
(13, ' bvhukfdhi', 0, '54 min', '', ' fhsdkfhowowe ', 'das vjydgasida, hdsiw', '35 min', ' hudcgodwdo', 'cb ucgisucg is', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'ih jo', 0, ' hiyit', '', 'io houp0', ' juo9u 9ou', 'iojiou', 'uj 9 uioyhil', 'ioh oup9u ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'asdasdsad', 1, 'asdasd', 'ad1.jpg', 'kjlkjlkjl', 'jlkjlkjlkj', 'llkjlkjlk', '', '', '2015-04-30 10:24:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE IF NOT EXISTS `recipe_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `recipe_categories`
--

INSERT INTO `recipe_categories` (`id`, `recipe_category`) VALUES
(1, 'Chinese'),
(2, 'Mughlai');

-- --------------------------------------------------------

--
-- Table structure for table `related_products`
--

CREATE TABLE IF NOT EXISTS `related_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `related_product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `related_products`
--

INSERT INTO `related_products` (`id`, `product_id`, `recipe_id`, `related_product_id`) VALUES
(8, 15, 0, 2),
(9, 15, 0, 3),
(10, 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `related_recipes`
--

CREATE TABLE IF NOT EXISTS `related_recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_id` int(11) NOT NULL,
  `related_recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `related_recipes`
--

INSERT INTO `related_recipes` (`id`, `recipe_id`, `related_recipe_id`) VALUES
(2, 15, 17),
(3, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `side_banner`
--

CREATE TABLE IF NOT EXISTS `side_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `side_banner_name` varchar(200) NOT NULL,
  `side_banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `side_banner`
--

INSERT INTO `side_banner` (`id`, `side_banner_name`, `side_banner_image`, `priority`, `updated_at`) VALUES
(1, 'grtg', 'b1.jpg', 3, '2015-04-30 10:23:26'),
(2, 'FGFRG', '980-x-500-b.jpg', 1, '2015-04-30 10:23:26'),
(3, 'edfwe', 'd7.jpg', 2, '2015-04-30 10:23:26'),
(4, 'jfhukerh ie', 'ad1.jpg', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `priviledge` int(1) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `priviledge`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'drc euwi 121', 'abcd@gmail.com', '$2y$10$Tc0.nU6itR.inQZhKOKmqu.L5fCOPM0IGYGuXTHxyQdv2diD.aJbe', 'abcd@gmail.com', 2147483647, 1, '', '2015-04-29 12:38:16', '2015-04-29 12:38:16'),
(5, 'arti', 'chauhan', '123456789', 'arti@gmail.com', 356565651, 0, '', '2015-04-29 16:53:56', '2015-04-29 16:53:56'),
(6, 'f djgeriul', '', '$2y$10$Z.C3FWFggMduFcpeGWaXk.Sjd0oO7UX92tKbsihmu.cWf0riIrTVm', 'abcd@gmail.com', 32564865, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
