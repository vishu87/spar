-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2015 at 08:02 AM
-- Server version: 5.1.46
-- PHP Version: 5.4.36

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_image`, `priority`, `updated_at`) VALUES
(6, 'gdfg', '980X500.png', 3, '2015-05-06 19:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) NOT NULL,
  `brand_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `updated_at`) VALUES
(5, ' guiygilyol u', '', '0000-00-00 00:00:00'),
(6, 'xklc hio', 'DSC_1914.jpg', '2015-03-19 22:39:46'),
(7, 'asdasdsa', 'a 004.jpg', '2015-05-08 10:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `deal_name` varchar(200) NOT NULL,
  `deal_content` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `category_id`, `deal_name`, `deal_content`, `updated_at`) VALUES
(2, 1, 'asdas', 'dasdasd', '2015-05-08 10:07:16'),
(3, 3, 'asdasd', 'asdasdasd asd asd', '2015-05-08 10:07:21'),
(4, 1, 'asd asd sad', 'as dasd asdsad', '2015-05-08 10:07:25'),
(5, 3, 'New Deal', '<p>asd asd asd 1111</p>\r\n', '2015-05-08 11:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_deals`
--

CREATE TABLE IF NOT EXISTS `homepage_deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `homepage_deals`
--

INSERT INTO `homepage_deals` (`id`, `deal_id`, `priority`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 3, 2),
(5, 4, 3),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE IF NOT EXISTS `kids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `kids_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `title`, `content`, `kids_image`, `updated_at`) VALUES
(8, 'asda', '<p>sdasd</p>\r\n', 'a 004.jpg', '2015-05-08 10:31:33'),
(4, ' iudfidf fie', '<p>fdsgfiuey rfi8eprw</p>\r\n', '', '2015-05-08 10:31:39'),
(5, 'hgu hgihir', 'jhf fdhilveof', '', '2015-03-19 17:34:52'),
(6, 'h f;ods9', ' hvfdkirohfi sdyfoiew', 'DSC_2255.jpg', '2015-03-19 22:47:15'),
(7, 'asdas', '<p>dasdasd</p>\r\n', '', '2015-05-07 13:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `caption`) VALUES
(7, 'event (1).jpg', 'heyhey'),
(6, '_DSC5674.jpg', 'sadasd'),
(8, 'event (5).jpg', 'dsf dsf');

-- --------------------------------------------------------

--
-- Table structure for table `mid_banner`
--

CREATE TABLE IF NOT EXISTS `mid_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid_banner_name` varchar(200) NOT NULL,
  `mid_banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mid_banner`
--

INSERT INTO `mid_banner` (`id`, `mid_banner_name`, `mid_banner_image`, `priority`, `updated_at`) VALUES
(3, 'dfdsfv', 'DW3-External.jpg', 3, '2015-05-07 18:50:04'),
(4, 'fgfdge', 'win3.jpg', 1, '2015-05-07 18:50:04'),
(5, 'tretg4t', 'XMAS-BANNER.jpg', 4, '2015-05-07 18:50:04'),
(6, 'kjnjkl', '_DSC5674.jpg', 2, '2015-05-07 18:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(200) NOT NULL,
  `page_content` text NOT NULL,
  `left_sidebar` int(11) NOT NULL,
  `right_sidebar` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_content`, `left_sidebar`, `right_sidebar`, `updated_at`) VALUES
(7, 'vdsf', '', 0, 0, '0000-00-00 00:00:00'),
(8, 'sada sd asd', '', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_sidebar_items`
--

CREATE TABLE IF NOT EXISTS `page_sidebar_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `page_sidebar_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `page_side_banner`
--

CREATE TABLE IF NOT EXISTS `page_side_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `side_banner_name` varchar(200) NOT NULL,
  `side_banner_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `product_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_detail` varchar(400) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `product_price`, `product_detail`, `product_image`, `updated_at`) VALUES
(4, 'asdasdasd', 4, 'asdas', 'dasd', 'PHOTO - Copy.png', '2015-05-08 11:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(200) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_category`, `image`) VALUES
(4, '1111111111', ''),
(3, 'asd asd asdas', 'a 001.jpg');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `recipe_name`, `category_id`, `preparation_time`, `recipe_image`, `description`, `ingredient`, `cook_time`, `to_serve`, `method`, `updated_at`, `created_at`) VALUES
(13, ' bvhukfdhi', 2, '54 min', '', '<p>fhsdkfhowowe</p>\r\n', '<p>das vjydgasida, hdsiw</p>\r\n', '35 min', ' hudcgodwdo', '<p>cb ucgisucg is</p>\r\n', '2015-05-08 10:21:15', '0000-00-00 00:00:00'),
(14, 'ih jo', 3, ' hiyit', '', 'io houp0', ' juo9u 9ou', 'iojiou', 'uj 9 uioyhil', 'ioh oup9u ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'asdasdsad', 1, 'asdasd', 'ad1.jpg', 'kjlkjlkjl', 'jlkjlkjlkj', 'llkjlkjlk', '', '', '2015-04-30 15:54:39', '0000-00-00 00:00:00'),
(19, ' Chicken Alfresco', 1, '30 mins', 'chicken-alfresco-big.jpg', '<p>Its a grilled marinated chicken breast in Parmesan cream sauce best served with saute vegetables and meshed potatoes.</p>\r\n', '<ul>\r\n	<li>2 breast pieces&nbsp;Chicken</li>\r\n	<li>1 tbsp Oil</li>\r\n	<li>2 cloves Garlic</li>\r\n	<li>1 tsp Salt</li>\r\n	<li>1 tsp Pepper Powder</li>\r\n	<li>1 pc Lemon</li>\r\n	<li>1 tsp Butter</li>\r\n	<li>2 tbsp Parmesan Cream Sauce</li>\r\n</ul>\r\n', '25 mins', '2 people', '<p>yahooooa sd asd asd</p>\r\n', '2015-05-06 19:10:24', '0000-00-00 00:00:00'),
(20, 'asd asd sad', 1, 'asdasd', '', '<p>asdas dasd as</p>\r\n', '<p>sdasdasd</p>\r\n', '', '', '<p>asda</p>\r\n', '2015-05-08 10:21:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE IF NOT EXISTS `recipe_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `recipe_id` int(11) NOT NULL,
  `related_product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `related_products`
--

INSERT INTO `related_products` (`id`, `recipe_id`, `related_product_id`) VALUES
(13, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `related_recipes`
--

CREATE TABLE IF NOT EXISTS `related_recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_id` int(11) NOT NULL,
  `related_recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `related_recipes`
--

INSERT INTO `related_recipes` (`id`, `recipe_id`, `related_recipe_id`) VALUES
(5, 13, 14);

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE IF NOT EXISTS `sidebars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`id`, `sidebar`) VALUES
(2, 'Sidebar1'),
(3, 'Sidebar2'),
(4, 'Sidebar11'),
(5, 'f gj');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_items`
--

CREATE TABLE IF NOT EXISTS `sidebar_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL,
  `sidebar_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `custom_html` text NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sidebar_items`
--

INSERT INTO `sidebar_items` (`id`, `type`, `sidebar_id`, `page_id`, `media_id`, `title`, `custom_html`, `priority`) VALUES
(1, 2, 2, 0, 0, 'Hey', '', 1),
(2, 1, 2, 5, 0, '', '', 2),
(3, 3, 2, 0, 6, '', '', 3),
(4, 4, 2, 0, 0, '', '<ul>\r\n	<li>asd asd asd asdasd asd asd</li>\r\n</ul>\r\n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `side_banner`
--

CREATE TABLE IF NOT EXISTS `side_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `side_banner_name` varchar(200) NOT NULL,
  `side_banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `side_banner`
--

INSERT INTO `side_banner` (`id`, `side_banner_name`, `side_banner_image`, `priority`, `updated_at`) VALUES
(1, 'grtg', 'b1.jpg', 3, '2015-04-30 15:53:26'),
(3, 'edfwe', 'd7.jpg', 2, '2015-04-30 15:53:26');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `priviledge`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Editor SPAR Nigeria', 'editor@spar.com', '$2y$10$OgnriE06VWGyHAaqgoOMjekDmmUOBhVapEhIKEveVStOTn13.crE.', 'editor@spar.com', 2147483647, 0, '', '2015-05-08 11:31:03', '0000-00-00 00:00:00'),
(6, 'Admin SPAR Nigeria', 'admin@spar.com', '$2y$10$Tc0.nU6itR.inQZhKOKmqu.L5fCOPM0IGYGuXTHxyQdv2diD.aJbe', 'admin@spar.com', 1234567891, 1, '', '2015-05-08 11:31:19', '2015-05-08 11:31:19');
