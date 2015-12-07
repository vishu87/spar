-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2015 at 11:14 AM
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
  `link` text NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_image`, `link`, `priority`, `updated_at`) VALUES
(24, 'theme', '1-SPAR-LP.png', '', 3, '2015-11-14 06:51:06'),
(18, 'SPAR-Gift-Card', 'SPAR-Gift-Card.png', 'http://websites.naijagosocial.com/spar/gift-card', 4, '2015-11-20 04:15:03'),
(19, 'MMA2-SPAR-NOW-OPEN', 'MMA2-SPAR-NOW-OPEN.png', '', 5, '2015-11-14 06:51:06'),
(20, 'SPAR-Opening-Soon-Ilupeju', 'SPAR-Opening-Soon-Ilupeju.png', '', 6, '2015-11-14 06:51:06'),
(28, 'SPAR-Reward-Card', '1-SPAR-Reward-Card.png', 'http://websites.naijagosocial.com/spar/reward-card', 7, '2015-11-20 04:16:22'),
(26, 'Christmas Hamper SB', 'Christmas-Hamper-SB.png', '', 2, '2015-11-14 06:51:06'),
(29, 'Christmas Theme SB', 'Christmas-Theme-SB.png', 'http://www.sparnigeria.com/promotions/xmaspromo/', 1, '2015-11-20 04:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) NOT NULL,
  `brand_image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `description`, `priority`, `updated_at`) VALUES
(15, 'Wines & Spirits', '1-Product-Range---Wines-&-Spirits.gif', 'Choose International Still and Sparkling Wine brands from across the  globe. Wide choice of local and international Spirit brands are also available.', 6, '2015-10-12 02:57:34'),
(12, 'Bakery', 'Product-Range---Bakery-1.png', 'Baked fresh every day in our in house bakery. SPAR offers a wide range of bakery  products apart from a wide variety of bread.', 2, '2015-10-12 02:56:38'),
(13, 'Butchery', '1-Product-Range---Butchery.gif', 'SPAR offers the best in fine butchery, whether it is Beef, Goat, Lamb, Pork,  Poultry, Fish or Sausage. Get the best quality at best prices.', 4, '2015-10-12 02:57:05'),
(19, 'Electronics', '1-Product-Range---Electronics.gif', 'Major international brands from valued range to premium products are available  in select SPAR stores.', 7, '2015-10-12 02:57:48'),
(16, 'Grocery', 'Grocery.png', 'Get the widest choice of grocery items – Food, Non-food as well as General  Merchandise', 1, '2015-10-25 02:44:05'),
(17, 'Laptop & Printers', '2-Product-Range---Laptops-and-accessories.gif', 'SPAR offers a wide variety of laptops, printers and accessories from  major international brands from across the globe.', 10, '2015-10-12 02:58:52'),
(18, 'Mobile Phone', 'Mobile-Phones.png', 'Latest mobile phones and tablets from International brands are available at  the best prices.', 8, '2015-10-25 02:42:23'),
(20, 'Furniture', '1-Product-Range---Furniture.jpg', 'From living to office sets, we provide a broad range of products and services for  our customers in select SPAR stores. We also provide Made to Order furniture for home and office use to suit your taste.', 13, '2015-10-12 03:00:11'),
(21, 'Meals & Snacks', 'Meals-&-Snacks.png', 'Ready to eat, Nigerian cuisines and snacks freshly made every day in our  kitchen.', 5, '2015-10-25 02:40:43'),
(22, 'Watches', 'watches.png', 'Casio, Citizen and Titan Watches available in select SPAR stores', 12, '2015-10-25 02:39:24'),
(23, 'Fruits & Vegetable', 'FruitsnVegetable.jpg', 'SPAR offers a wide variety of fruits & vegetable sourced directly from  local farmers and international markets.', 3, '2015-10-12 02:56:52'),
(24, 'Perfumes', 'Perfumes.jpg', 'Major International perfume brands are available in select SPAR stores', 11, '2015-10-12 02:59:07'),
(25, 'Home Appliance', 'Home-Appliance.jpg', 'Fridge, Freezer, Cookers, Washing Machine, Generators, Microwave – we  got it all in SPAR', 9, '2015-10-12 02:58:32'),
(26, 'Airtime', 'Product-Range-Airtime.jpg', 'Now you can buy Airtime of any denomination for MTN, Airtel, Glo and Etisalat from  the Check–out points', 16, '2015-10-12 03:08:26'),
(27, 'Jewelry', 'Jewelry.png', 'Swarovski Jewelry and Crystal are available in select stores', 14, '2015-10-25 02:32:45'),
(28, 'Clothing’s', 'clothing.jpg', 'Men, Women & kids clothing from International fashion brands available in select  SPAR stores', 15, '2015-10-12 07:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE IF NOT EXISTS `carousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `name`) VALUES
(2, 'Name1'),
(5, 'nEW CARSOUSEL');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_items`
--

CREATE TABLE IF NOT EXISTS `carousel_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carousel_id` int(11) NOT NULL,
  `caption` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `carousel_items`
--

INSERT INTO `carousel_items` (`id`, `carousel_id`, `caption`, `image`, `priority`) VALUES
(3, 2, 'ui', '3-Chrysanthemum.jpg', 3),
(8, 5, 'asd asd', '1-Jellyfish.jpg', 3),
(5, 2, 'sadasd', 'Hydrangeas.jpg', 1),
(6, 2, 'sdadsad', 'Penguins.jpg', 2),
(7, 2, 'asdasd', 'Jellyfish.jpg', 4),
(11, 5, 'asdsadsadasd asdsad', 'Lighthouse.jpg', 1),
(12, 5, 'asd', '1-Koala.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`) VALUES
(1, 'Lagos'),
(2, 'Port Harcourt'),
(3, 'Abuja'),
(4, 'Calabar');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `deal_name` varchar(200) NOT NULL,
  `deal_content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` int(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `category_id`, `deal_name`, `deal_content`, `image`, `type`, `updated_at`) VALUES
(34, 16, 'non-food1', '', 'non-food4.png', 0, '2015-11-09 23:15:59'),
(35, 16, 'non-food2', '', 'non-food2.png', 0, '2015-11-09 23:16:24'),
(31, 14, 'xmasdecor2', '', '2-xmasdecor2.png', 0, '2015-11-07 08:06:32'),
(30, 14, 'xmasdecor1', '', '2-xmasdecor1.png', 0, '2015-11-07 08:06:02'),
(25, 7, 'grocery1', '', '1-grocery1.png', 0, '2015-11-07 08:28:43'),
(7, 9, 'Wines & Spirits', '<p>Wines and Spirits</p>\r\n', '1-wines&spirits4.png', 0, '2015-11-07 07:45:38'),
(37, 16, 'non-food4', '', 'non-food1.png', 0, '2015-11-09 23:17:03'),
(38, 17, 'perfume1', '', '1-perfume1.png', 0, '2015-11-09 23:33:42'),
(13, 6, 'Electronics', '<p>Electronic</p>\r\n', '1-consumer-electronics-1.png', 0, '2015-11-06 08:03:55'),
(32, 14, 'xmasdecor3', '', '2-xmasdecor3.png', 0, '2015-11-07 08:06:47'),
(33, 14, 'xmasdecor4', '', '2-xmasdecor4.png', 0, '2015-11-07 08:07:06'),
(28, 7, 'grocery4', '', '1-grocery4.png', 0, '2015-11-07 08:29:31'),
(26, 7, 'grocery2', '', '1-grocery2.png', 0, '2015-11-07 08:29:02'),
(27, 7, 'grocery3', '', '1-grocery3.png', 0, '2015-11-07 08:29:49'),
(18, 6, 'Electronics2', '', '3-consumer-electronics-2.png', 0, '2015-11-06 07:53:24'),
(19, 6, 'Electronics3', '', '1-consumer-electronics-3.png', 0, '2015-11-06 08:04:19'),
(20, 6, 'Electronics4', '', '2-consumer-electronics-4.png', 0, '2015-11-06 08:04:49'),
(36, 16, 'non-food3', '', '1-non-food3.png', 0, '2015-11-09 23:16:43'),
(22, 9, 'Wines & Spirits 2', '', '1-wines&spirits1.png', 0, '2015-11-07 08:02:22'),
(23, 9, 'Wines & Spirits 3', '', '1-wines&spirits2.png', 0, '2015-11-07 08:02:46'),
(24, 9, 'Wines & Spirits 4', '', '1-wines&spirits3.png', 0, '2015-11-07 08:03:12'),
(39, 17, 'perfume2', '', 'perfume4.png', 0, '2015-11-09 23:34:03'),
(40, 17, 'perfume3', '', 'perfume3.png', 0, '2015-11-09 23:34:20'),
(41, 17, 'perfume4', '', 'perfume2.png', 0, '2015-11-09 23:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `message` text COLLATE latin1_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `type`, `message`, `created_at`) VALUES
(2, 1, 'name: sadsa<br>address: sadasdsa<br>', '2015-11-18 20:53:06'),
(3, 1, 'name: asdsad<br>email: asdasd221@asdsa.comasdas<br>mobile: sdad<br>', '2015-11-18 20:53:45'),
(4, 1, 'name: sadsad<br>email: vishu.iitd@gmail.com<br>mobile: 233432<br>', '2015-11-18 20:54:30'),
(5, 1, 'name: sadasd<br>email: vishu.iitd@gmail.com<br>mobile: 32432432423<br>', '2015-11-18 20:55:47'),
(6, 1, 'name: eewewrr<br>email: ewrewr@sadsa.com<br>mobile: 3232342<br>', '2015-11-18 20:56:04'),
(7, 1, 'name: sadsad<br>email: vashi@bhelhwr.co.in<br>mobile: 9756481682<br>', '2015-11-18 20:57:01'),
(8, 1, 'name: MUKESH  KUMAR<br>email: vashi@bhelhwr.co.in<br>mobile: 8787878111s<br>', '2015-11-18 20:57:52'),
(9, 2, 'Name: MUKESH  KUMAR<br>Email: vashi@bhelhwr.co.in<br>Mobile: 9756481682<br>', '2015-11-18 21:02:09'),
(10, 2, 'Name: MUKESH  KUMAR<br>Email: vashi@bhelhwr.co.in<br>Mobile: 9756481682<br>', '2015-11-18 11:39:22'),
(11, 1, 'Name: wsdsad<br>Email: vashi@bhelhwr.co.in<br>Mobile: 9756481682<br>', '2015-11-18 11:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_deals`
--

CREATE TABLE IF NOT EXISTS `homepage_deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `homepage_deals`
--

INSERT INTO `homepage_deals` (`id`, `deal_id`, `priority`) VALUES
(20, 39, 6),
(16, 13, 2),
(17, 25, 3),
(18, 30, 4),
(19, 34, 5),
(10, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `homepage_parameters`
--

CREATE TABLE IF NOT EXISTS `homepage_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `homepage_parameters`
--

INSERT INTO `homepage_parameters` (`id`, `parameter`, `value`) VALUES
(1, 'flyer_big', 'flyer strip.png'),
(2, 'flyer_mobile', 'flyer-mobile.jpg'),
(3, 'flyer', ''),
(4, 'left_creative', 'Middle-Banner-(Slidder)---Reward-Card-3.png'),
(5, 'left_creative_link', 'http://www.google.com'),
(6, 'homepage_video', '<iframe src="https://www.youtube.com/embed/A2Pgk_9PiLA" frameborder="0" allowfullscreen></iframe>'),
(7, 'background_image', 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_type` int(11) NOT NULL,
  `job_id` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `specifications` text COLLATE latin1_general_ci NOT NULL,
  `qualification` text COLLATE latin1_general_ci NOT NULL,
  `work_ex` text COLLATE latin1_general_ci NOT NULL,
  `skills` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `jobs`
--


-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE IF NOT EXISTS `job_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_type` varchar(200) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `job_types`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `title`, `content`, `kids_image`, `updated_at`) VALUES
(8, 'asda', '<p>sdasd</p>\r\n', 'a 004.jpg', '2015-05-08 20:01:33'),
(4, ' iudfidf fie', '<p>fdsgfiuey rfi8eprw</p>\r\n', '', '2015-05-08 20:01:39'),
(5, 'hgu hgihir', 'jhf fdhilveof', '', '2015-03-20 03:04:52'),
(6, 'h f;ods9', ' hvfdkirohfi sdyfoiew', 'DSC_2255.jpg', '2015-03-20 08:17:15'),
(7, 'asdas', '<p>dasdasd</p>\r\n', '', '2015-05-07 22:53:23'),
(9, 'asd1111', '<p>asdasdsad</p>\r\n', '10-a-002-001-00.jpg', '2015-05-09 01:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `caption`) VALUES
(19, 'Gift-card-front.png', 'Gift Card'),
(12, 'RewardCard1.png', 'Reward Card'),
(11, 'upcoming-store.jpg', 'Upcoming Store'),
(14, 'new.jpg', 'Contact Us'),
(16, 'spar_nigeria.jpg', 'SPAR Nigeria contact us'),
(20, 'Gift-card-back.png', 'Gift Card Back'),
(21, 'Reward-card-back.png', 'Reward Card Back'),
(23, 'CreditCard.png', 'Credit Card Image');

-- --------------------------------------------------------

--
-- Table structure for table `mid_banner`
--

CREATE TABLE IF NOT EXISTS `mid_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid_banner_name` varchar(200) NOT NULL,
  `mid_banner_image` varchar(200) NOT NULL,
  `link` text NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `mid_banner`
--

INSERT INTO `mid_banner` (`id`, `mid_banner_name`, `mid_banner_image`, `link`, `priority`, `updated_at`) VALUES
(12, 'Now Hiring', 'Now-Hiring.png', '', 3, '2015-11-14 08:24:50'),
(15, 'SPAR Corn Beef', 'SPAR-Corn-Beef.png', '', 1, '2015-11-14 08:24:50'),
(14, 'theme 2', 'SPAR-Instant-Airtime1.png', '', 2, '2015-11-14 08:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(200) NOT NULL,
  `page_slug` varchar(200) NOT NULL,
  `page_content` text NOT NULL,
  `left_sidebar` int(11) NOT NULL,
  `right_sidebar` int(11) NOT NULL,
  `top_active` int(11) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `meta_keywords` varchar(500) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_content`, `left_sidebar`, `right_sidebar`, `top_active`, `meta_title`, `meta_description`, `meta_keywords`, `updated_at`) VALUES
(1, 'About Spar', 'about-spar', '<p>SPAR in Nigeria is operated by Artee Industries Limited popularly known as Artee Group. SPAR stores in Nigeria are built on hypermarket retail format and offers a wide range of product categories namely; Grocery, Bakery, Butchery, Fruits &amp; Vegetables, Hot Meals, Wine &amp; Spirits, Fast Moving Consumer Goods, Small Home Appliances, Consumer Electronics, Mobile Phones, Laptops &amp; Tablets, Perfumes, Watches and Jewelry.</p>\r\n\r\n<p>SPAR is a part of the global retail chain originating from Holland. SPAR international has given the Master Franchiseof the SPAR brand to Artee Group for its operations in Nigeria. Unlike across many countries, where SPAR operates on sub-franchise model to independent retailers, in Nigeria, SPAR operates their own stores.</p>\r\n\r\n<p>Today, SPAR is operating 7 stores across Lagos, Abuja &amp; Port Harcourt aggregating over 20,000 m2 of retail space, thus making it the largest chain of hypermarket stores in Nigeria. Presently, SPAR stores are located in Victoria Island, Lekki, Maryland Ikeja, MMA2 Terminal Campus, Abuja and Port Harcourt.</p>\r\n\r\n<p>The latest SPAR store was launched in Murtala Muhammed Airport Domestic Terminal II, commonly known as MMA2 Terminal. SPAR store in MM2 was conceived and designed to cater to the air traffic passengers and employees working in and around the airport terminals and the residential areas adjacent to the airport terminals. SPAR has also added new items to its product offering like: ready-to-drink Tea, Coffee and Chocolate, as well as Hot Beverages, Pop Corn and Fresh Juice to cater to the people on the move.</p>\r\n\r\n<p>SPAR as a hypermarket brand, takes cognizance of the various kinds of shopping missions and adapts its products and services in respect of Choice, Quality, Service and Value to translate the entire shopping experience in to a World Class One.</p>\r\n\r\n<p>Artee Group is working on an aggressive roll out plan of SPAR stores across Nigeria. By the end of 2016, SPAR will be a 6 city operator with over 29,000 m<sup>2</sup> of retail space from 12 stores. Apart from strengthening the presence in the existing cities of Lagos, Abuja and Port Harcourt, SPAR stores will also penetrate new geographies like Calabar, Abia, Enugu, Asaba to name a few.</p>\r\n\r\n<p>Artee Group&rsquo;s belief in innovation in the retail space was manifested with the launch of the first retail co-branded credit card under the Park n Shop Diamond Bank Credit Card, followed by the Plastic Gift Card.</p>\r\n\r\n<p>SPAR is the only retail chain in Nigeria to offer Loyalty scheme to its customers under the SPAR Reward Card program. To know more about, SPAR Reward Card Program, visit the Reward Card Page.</p>\r\n', 8, 6, 1, '', '', '', '2015-10-11 20:10:09'),
(2, 'Reward Card', 'reward-card', '<p>Frequent visits to the stores, SPAR network is not only an opportunity to buy excellent products at best prices. Our loyal customers win prizes by joining a loyalty program. How do you do? First of all, you should go to the nearest SPAR!</p>\r\n\r\n<p>Upon request, the SPAR will support you with a simple form that must be carefully filled in, not skipping the required fields. Also very please carefully read the terms of our program. &nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Receive a green card Loyalty, which is activated in the SPAR system within 72 hours of submitting the form. From the moment of activation of every purchase in stores with the logo of our network will result in the increase in the number of points on your account.</p>\r\n\r\n<p>After some time, using the Charter of the number of accumulated points reach a level capable of receiving first prizes in kind. Will belong to you decide whether you will be satisfied with a more modest reward (which requires a smaller number of points on your account), or please wait for an opportunity to receive more great items from our catalog.</p>\r\n', 7, 9, 2, '', '', '', '2015-06-03 08:05:37'),
(3, 'Did you know? ', 'did-you-know-trivia', '<ul>\r\n	<li>SPAR has over 1200 stores world wide</li>\r\n	<li>SPAR has its presence in 41 countries across 4 continents</li>\r\n	<li>SPAR serves over 10 million customers daily across the globe</li>\r\n	<li>SPAR has been providing goods and services for over 80 years</li>\r\n	<li>SPAR provides employment to over 180,000 people worldwide</li>\r\n	<li>SPAR has the largest chain of hypermarket stores in Nigeria</li>\r\n	<li>SPAR serves over 5 million customers annually in Nigeria</li>\r\n	<li>SPAR employs&nbsp;over 1000 people in Nigeria</li>\r\n</ul>\r\n', 8, 6, 1, '', '', '', '2015-10-11 20:14:08'),
(25, '4 Days Unbeatable Sale', '4-days-unbeatable-sale', '', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(26, 'Under Construction', 'under-construction', '<p>This page is under construction. Please visit this page after some time.</p>\r\n\r\n<p>Thanks.</p>\r\n', 0, 0, 0, '', '', '', '2015-10-30 17:43:10'),
(4, 'Customer Review ', 'customer-review', '', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(5, 'Definitions', 'definitions', '<ol>\r\n	<li>ORGANISER means the entity organizing the program, which is the SPAR Poland SA with its seat in Rzesz&oacute;w at ul. Twardowski 9, registered in the District Court in Rzesz&oacute;w, XII Commercial Department of National Court Register, under number&nbsp; 509,372 , NIP 526-11-62-514, share capital: 2 141 450 zl</li>\r\n	<li>RULES OF THE PROGRAMME means this Terms Loyalty Program &quot;Loyalty Card&quot;, which defines the terms and conditions of the Participant, Partner and Organizer in particular rules for granting, issuing, subtraction, advertise and cancellation of Points and rules for the exchange Points for Prizes;</li>\r\n	<li>PROGRAM means loyalty program &quot;Loyalty Card&quot; organized by SPAR Poland SA, and led by Partner;</li>\r\n	<li>PARTNER is a party to the agreement concluded with the organizer s based on whom the license to operate a store SPAR trademark. Partner is an entity in which you can collect and exchange Points for Prizes. The organizer reserves the right to exclude some of the Partners of the program temporarily or permanently. Partner institutions in which will be conducted Loyalty program will be marked accordingly;</li>\r\n	<li>FACILITY PARTNER means a place of retail sales of Goods or Services by Partner in the Programme;</li>\r\n	<li>PRODUCTS OR SERVICES means those goods or services, whose acquisition in accordance with the Regulations shall apply a points;</li>\r\n	<li>POINTS represent accrued on the Participant&#39;s Account units (points) in connection with the acquisition by the Participant Goods or Services in accordance with the Regulations, which entitle the participant to receive the Prize. Number of points needed to exchange them for a given award is given to the currently applicable Poster that;</li>\r\n	<li>PARTICIPANT an adult person who has been registered by the Partner as such is based on the Registration Form submitted in accordance with the Regulations and joined the program;</li>\r\n	<li>ACCESSION TO THE receive the Charter by the Programme Participant based on his application, in order to accumulate points under the terms of the Regulations;</li>\r\n	<li>REGISTRATION FORM (poll) means an application to join the Programme according to the formula established by the Organizer, who after completing the personal data and consent to the processing of personal data in accordance with the Act and the deposit of the personal legible signature by a specific individual, an application for participation in the Program;</li>\r\n	<li>The Act - the Act of 29 August 1997. Personal Data Protection (Dz. U. of 2002, no. 101, pos. 926 as. d.);</li>\r\n	<li>CARD means the card provided by the Organizer Partner and the Partner&#39;s issued to the Participant pursuant to the Rules, identified by the number on the Charter (barcode), intended to collect the points accrued on the Participant&#39;s Account under the Programme;</li>\r\n	<li>ACTIVE SAFETY- card on which points the recording was made during the last twelve months from the date of the last entry;</li>\r\n	<li>Participant&#39;s account is an account established for data (your name) Participant in accordance with the Regulations. Assigned to the Participant&#39;s Account Card is issued to the Participant;</li>\r\n	<li>PER ACCOUNT means the current number of important points accrued on the Participant Participant&#39;s Account;</li>\r\n	<li>REGISTRATION - assign an identification number given to the Charter Participant&#39;s personal data;</li>\r\n	<li>AWARD is a prize in kind or vouchers specified in the currently applicable poster, this award is issued to the Participant in exchange for accumulated points;</li>\r\n	<li>POSTER - is currently applicable poster setting out a list of prizes offered in the program and the number of points that are required to collect by Participant Participant&#39;s Account in order to obtain Awards;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:49:22'),
(6, 'General Provisions', 'general-Provisions', '<ol>\r\n	<li>Loyalty program SPAR&nbsp;&#39;Loyalty Card&#39;&nbsp;is a program that runs on Polish territory;</li>\r\n	<li>Program Participant may be only adult natural person with full legal capacity and having a place of residence on Polish territory; Partner other than an employee;</li>\r\n	<li>In the outlet Partner Participant may have at any given time only one active Participant&#39;s Account;</li>\r\n	<li>Partner shall not be entitled either directly or by implication, to represent the Organizer or to submit on behalf of any assurances, representations or commitments, except for the granting and issuing Rewards Points and distribution of information materials on behalf of the organizer of the Programme, subject to the provisions of points 6.3 and 6.4;</li>\r\n	<li>Infringement by the Participant terms of these Regulations, in particular through the inappropriate use of Charter may lead to the withdrawal of some or all acquired because of the participation in the delegation;</li>\r\n	<li>The cost associated with the purchase of cards and prizes lies with the Partner;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-05-29 22:25:39'),
(7, 'Terms of Accession', 'terms-of-accession-to-the-program', '<ol>\r\n	<li>The condition of the SPAR program &quot;Loyalty Card&quot; is to fill in a complete, clear and truthful Registration Form and submitting it to the Partner outlet;</li>\r\n	<li>Participation in the Program and provide related to the participation of personal data is voluntary;</li>\r\n	<li>&nbsp;Providing personal data is voluntary but necessary for participation in the Program;</li>\r\n	<li>Participants may join the program at any time of its duration;</li>\r\n	<li>Prior to the Programme Participant is obliged to refer to the Rules of the available along with the registration form. Signature submitted on the registration form participant confirms acquainted with the Rules of the Programme and accepts its provisions;</li>\r\n	<li>By submitting signature on the registration form participant agrees to the storage and processing by the Organizer and partner indicated in the Registration Form, for the Program, your personal information appearing on the registration form; The participant also authorizes Partner to share their personal data to and allow them to store and process personal data for the purposes of the Programme;</li>\r\n	<li>The registration form is available at Outlets Partners and on the www.spar.pl;</li>\r\n	<li>Registration forms filled illegible or incomplete and unsigned forms or without registration Loyalty Card number will not be recorded;</li>\r\n	<li>Participant&#39;s personal data processing takes place in accordance with the Law on Personal Data Protection;</li>\r\n	<li>The participant has a right to inspect the contents of their data and request their update or delete through a written request to the Partner;</li>\r\n	<li>The participant shall immediately notify the Partner of any change of their personal data and shall bear all the consequences of the absence of such notice;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-08-24 14:00:24'),
(8, 'Spar Loyalty Card', 'spar-loyalty-card', '<ol>\r\n	<li>Loyalty Card SPAR used to identify the participant in the Program and registration points earned by the Participant. Each card has a number assigned to a particular Programme Participant;</li>\r\n	<li>of the Charter submitted by the Participants for registration in the register are assigned to the names of individual Participants Partner within 72 hours of submission of the relevant participant correctly completed Registration Form;</li>\r\n	<li>The card is valid until further notice, throughout the duration of the program SPAR &#39;Loyalty Card&#39;;</li>\r\n	<li>Each participant in the Partner outlet may have only one active card entitling to calculate points and exchange them for awards. In case the Participant in the Partner outlet has more than one card active registered, the Partner is entitled to revoke all cards that participant in the Affiliate Branch, which means canceling stored on the Tabbed SPAR Point Programme &#39;Loyalty Card&#39;;</li>\r\n	<li>Released Participant card is not transferable and remains the property of the Partner;</li>\r\n	<li>SPAR Loyalty Card is not a credit card, ATM or payment;</li>\r\n	<li>SPAR Loyalty Card is issued to the Participant without downloading from this fee. Charter can handle any participant or a person who is authorized by him (excluding employees working in the Outlets Partners). It is presumed that the person presenting the card Loyalty Program Participant SPAR is or has been authorized by the Participant to use the Card. By providing a Customer Card SPAR another person, the Participant undertakes to inform her about the conditions of the Program and these Rules;</li>\r\n	<li>It is unacceptable to transfer the Participant points from their cards on the Charter of another Participant;</li>\r\n	<li>In the case of adoption by the personnel facility Partner doubt as to the use by the Participant of the Charter, it can be stopped. In this case, use of the card during the transaction will be withheld until the clarification of doubts. If the doubt will concern registered cards, Partner shall notify this fact to the participant, asking for their explanation. In other cases, doubts will be clarified after the personal notification to the Participant that owns the card;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:51:35'),
(9, 'Loss and Replacement Card', 'loss-and-replacement-card', '<ol>\r\n	<li>In case of damage, loss or theft Loyalty Card SPAR please tell employees partner establishments where the card has been registered;</li>\r\n	<li>In the case of destruction, loss or theft of the registered cards, it is possible to read previously accumulated points. The participant will be issued a new card, which will be assigned collected points. In the period of waiting for a new Card Loyalty Points SPAR they are not charged;</li>\r\n	<li>Principles of issuing a new Loyalty Card SPAR in the case referred to in paragraph 2 are the same as when joining the Programme;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:52:33'),
(10, 'Collection Points', 'collection-points', '<ol>\r\n	<li>Partner acknowledges Points Participant for the purchase of goods or services covered by the Programme Participant made ??by using the Loyalty Card registered only in a given partner;&nbsp;</li>\r\n	<li>The exercise of rights arising from the points collected by the Participant is only possible with the use of active cards. Points can be exchanged for awards only by the holder of the registered cards;&nbsp;</li>\r\n	<li>Partners have the exclusive right to determine which goods or services are the goods or services covered by the Programme, and determining the number of points awarded to the Participant&#39;s Account for their acquisition;&nbsp;</li>\r\n	<li>Principles of awarding points for the purchase of certain goods and establishes Partner Services;&nbsp;</li>\r\n	<li>Information about the rules for granting Points, goods or services covered by the Programme is available at Outlets Partners;&nbsp;</li>\r\n	<li>In the case of extending opportunities to earn Points in accordance with the provisions of these Regulations Partner shall notify the Participants via the information material relating to such programs available in Partner institutions;&nbsp;</li>\r\n	<li>points a condition for granting the ceremony by its Charter Program Participant employee in the Partner outlet before Participant will acquire the product or service covered by the program (prior to closing). A later entry points on the basis of receipts or other evidence of the transaction is not possible;&nbsp;</li>\r\n	<li>Points will be awarded to the Participant&#39;s Account in time, as far as possible, 24 hours after the purchase of goods or services covered by the Programme;&nbsp;</li>\r\n	<li>Points are awarded only on condition that Participant in the Partner outlet full payment for goods or services only in the following ways: cash, bank payment card;&nbsp;</li>\r\n	<li>&nbsp;Points will not be awarded if the participant uses the purchase discount other than that provided in the program, unless the Rules of the Programme, which provided This is a discount, provides otherwise;&nbsp;</li>\r\n	<li>&nbsp;When it is confirmed that the points have not been validly issued or granted, the Partner will be entitled to cancel the appropriate number of points in a given Participant&#39;s Account. A partner may also withhold awards for a period not exceeding 30 calendar days if there is a presumption that the points have been issued or granted by mistake or without making a purchase of goods or services covered by the Programme;&nbsp;</li>\r\n	<li>&nbsp;Points cannot be exchanged for cash;&nbsp;</li>\r\n	<li>&nbsp;Points will be deducted from the Account Participant by the Partner if the participant returns the Partner acquired goods or services covered by the Programme for which were awarded points and will receive a refund of the value of those goods or services. In this case, the participant is obliged to hand Card Loyalty Partner Sites SPAR employee to deduct from the Participant&#39;s Account of the previously authorized points;&nbsp;</li>\r\n	<li>&nbsp;Participant is entitled to receive the outlet Partner status information Participant&#39;s Account and information on points awarded or deducted from your Account Participant;&nbsp;</li>\r\n	<li>&nbsp;Points collected by the Participant shall be valid for a period of 12 months from the date of granting the Participant&#39;s Account. After this date, any points not exchanged for awards under these Rules, expired;&nbsp;</li>\r\n	<li>&nbsp;Any objections to the amount of accumulated points (added or subtracted) participant is obliged to report in the Partner outlet where purchased for. Complaints will be dealt with on the basis of cash receipt or invoice proving the transaction with the Charter of the Participant;&nbsp;</li>\r\n	<li>&nbsp;does not represent the Goods within the meaning of the Rules of tobacco products and alcoholic beverages.</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:53:03'),
(11, 'Awards', 'awards', '<ol>\r\n	<li>List of prizes available in the Program is published in the respective posters, which Partners are required to expose in his Outlets;</li>\r\n	<li>&nbsp;Principles for the exchange Punks for Prizes and rules for the provision Prizes are subject to such conditions and restrictions which are contained in the materials Outlets Partners presented in accordance with these Regulations;</li>\r\n	<li>&nbsp;Duties and Responsibilities of Partner associated with Prizes are limited to ensuring the delivery or the possibility of receiving awards on the principles laid down in the Regulations of the Programme;</li>\r\n	<li>&nbsp;Prizes information (including photos, descriptions and parameters) presented on the poster, only indicate the type of Prizes and does not constitute an offer within the meaning of the provisions of the Civil Code;</li>\r\n	<li>&nbsp;In the event that lack ordered by the Participant Award revealed only after placing an order at a particular prize, the Participant will be informed of this fact and may decide whether to choose another prize with an approximate point value;</li>\r\n	<li>&nbsp;Point values??Similar Prizes offered participants in subsequent editions poster &amp; may differ from each other. At the time of emergence of a new edition of the Poster, we offer prizes with the previous poster expires while in period of 30 days from the date of publication of the new version of the poster at the partners, the Participant has the right to redeem Rewards Points at appropriate under the existing rules;</li>\r\n	<li>&nbsp;If the prize is made to a Participant who is a natural person not engaged business, the Partner will charge a flat-rate tax for the benefit of the person in accordance with the Law on income tax from individuals before issuing awards (pursuant to Art. 21 paragraph. 1 pkt.68 Act on income tax from individuals, tax-free winnings value - if the individual value of these prizes or prizes does not exceed 760 zl). Tax payment by the Participant to the account of the Partner as a tax payer is a condition for granting Awards Participant. Failure to pay the tax within 10 days from the date of your choice awards will be considered as resigned from receiving the Prize. In the event of Awards Participant, who is an entrepreneur running a business, the Partner will not charge flat-rate tax. The entrepreneur takes into account the value of the awards in income to taxation in respect of their activities;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:54:17'),
(12, 'Changing the Points', 'changing-the-points-on-the-nations', '<ol>\r\n	<li>The prize can be received only by a registered participant. The exercise of rights arising from the accumulated points is possible only with the use of active cards;</li>\r\n	<li>The participant is entitled to exchange accumulated points for Prizes, since the granting of points on the Participant&#39;s Account unless he has accumulated enough points needed to receive his choice awards;</li>\r\n	<li>Points collected by the Participant may be replaced by a registered participant solely on the awards presented on the current Poster that, under the conditions specified therein;</li>\r\n	<li>To replace the points on the Prize, the registered participant should indicate Award and collect it directly in the outlet Partner, in which it was registered card of a participant;</li>\r\n	<li>In order to identify the participant, the employee facility Partner has the right to ask while receiving the awards have questions about Participant&#39;s personal data contained in the database. If the Participant refuses to provide the requested information or the information did not agree with the information contained in the database, Partner may refuse to perform the contract award;</li>\r\n	<li>Partner reserves the right to verify the participant&#39;s identity document when receiving by the Participant Prize. Employee facility Partner may make the issue of the compatibility Awards name and date of birth contained in an identity document with the above data indicated Participant in accordance with clause VIII.1 hereof;</li>\r\n	<li>Acceptance of the Prize to the Participant, the number of points corresponding to the collected Prize, indicated on the poster, will be deducted from the state of the Participant&#39;s Account;</li>\r\n	<li>Prizes cannot be exchanged for cash;</li>\r\n	<li>Points cannot be exchanged for awards in conjunction with a premium in cash;</li>\r\n	<li>&nbsp;Upon receipt Awards Participant shall sign the acknowledgment of receipt Awards;</li>\r\n	<li>&nbsp;When receiving the Awards Participant is obliged to check whether the delivered Award for visible damage, whether it&rsquo;s quantitative and qualitative parameters comply with the product specifications (eg. The number of elements that make up the product). The participant is also obliged to check when receiving awards completeness of the documents (manuals, warranty cards, especially for the Awards, which were issued to the Participant with the card manufacturer&#39;s warranty - should pay attention to whether the annexed documents are written in Polish; if not, should be reported immediately to the employee Partner). Participants shall also check whether he agrees to the quantity Award by him;</li>\r\n	<li>&nbsp;In case of visible damage awards or qualitative or quantitative non-compliance, the Participant shall promptly (during reception) report this fact to the issuing employee Partner Award. In such a situation, the client has the right not accept Awards;&nbsp;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 7, 9, 2, '', '', '', '2015-08-24 14:00:41'),
(13, 'Complaints', 'complaints', '<ol>\r\n	<li>The basis for the complaint received Awards is the Participant&#39;s acknowledgment of receipt of the employee facility Partner Awards; consequently, the participant is obliged to keep this document for the duration of the warranty period Awards;</li>\r\n	<li>&nbsp;In the case of the Awards, which were issued to the Participant with the manufacturer&#39;s warranty, the Participant shall report the complaint awards to the service by providing it with the card manufacturer&#39;s warranty conquered by Outpost Partner, which gave rise to this Prize and Prize Acceptance Confirmation (must be correct and complete fulfillment of the above documents - data store, store stamp, data Participant, date of the prize, specifications Awards: make, model, serial number and description of the damage). Conditions for handling complaints w / the Prize are described in detail in the express warranty manufacturers. The list of authorized service centers is indicated for the manufacturer&rsquo;s warranty cards;</li>\r\n	<li>&nbsp;In the case of defects of other prizes, the participant declares complaint Partner Branch, which received the award.</li>\r\n	<li>&nbsp;The participant is obliged to provide defective Partner Award to the facility or service manufacturer in original packaging with all safety components; Advertised goods should be clean;</li>\r\n	<li>&nbsp;Partner Award spending Participant having a warranty card manufacturer is obliged to raise the stamp of your facility. On the warranty card, you must enter the date of the Awards;&nbsp;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:55:40'),
(14, 'Termination / Exclusion', 'Termination-of-the-Programme-the-exclusion-from-the-program', '<ol>\r\n	<li>The program is valid for an indefinite period, program begins with the announcement of its launch. The organizer reserves the right to suspend or terminate the program at any time with prior notice Partners and Participants, effective following the 30 calendar days from the announcement of the suspension or termination of the Programme;</li>\r\n	<li>In case of suspension or termination of the Program:\r\n	<ol>\r\n		<li>Partner is required to include information about the suspension or cessation of the Program in your outlet. The information must include specific conditions for the termination of the Programme and the date deadline for the exchange Points for Prizes;</li>\r\n		<li>The participant will be notified of the suspension or termination of the Program on valid e-mail address provided by the Participant Registration Form, or information referred to in point. 3.11, if you change your e-mail address by Participant.</li>\r\n		<li>The participant will be entitled to exchange the collected points for prizes within 30 calendar days from the date of notification by the Partner of the suspension or termination of the Programme. After this date the Participant shall not be entitled to exchange accumulated points for prizes, and Partner shall not be obliged to exchange for Reward Points unused by the Participant, after this deadline;.</li>\r\n	</ol>\r\n	</li>\r\n	<li>In case of cancellation of the Participant from participation in the Program, the Participant shall submit a written statement of resignation from the outlet Partner Program, which was given Participant registration card. The participant confirms his resignation from the Programme signature on the statement. All gathered so far points Participant&#39;s account, the Participant has the right to be exchanged for awards within 30 days of the cancellation of participation in the Program;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-08-24 14:00:07'),
(15, 'Final Provisions', 'final-provisions', '<ol>\r\n	<li>In case of violation of the provisions of these Regulations by the Participant, the Partner is entitled to exclude from participation in the Program. Exclusion from the program causes a loss of (cancel) collected points and the loss of validity of the Charter;</li>\r\n	<li>Regulations are available for Participants at the headquarters of the Organizer, Outlets Partners and on the www.spar.pl.</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:56:43'),
(16, 'Gift Card', 'gift-card', '<div class="row">\r\n<div class="col-md-6">\r\n<h3>About The Co-branded&nbsp;Gift Card</h3>\r\n\r\n<p>Continuing with the legacy of introducing innovation in the retail industry over the past 27 years, SPAR feels privileged to introduce the Plastic Gift Card. The Plastic Gift Card is very similar to a debit / credit card in terms of look and feel. SPAR Plastic Gift Card can be used in POS of any SPAR Park n Shop store across Nigeria.</p>\r\n\r\n<p>Non Co-branded Gift Cards are readily available across all SPAR Park n Shop stores, whereas customization of Gift Cards with Logo / Company name requires 3 - 7 days from the date of placing confirmed orders.</p>\r\n\r\n<p>Walk-in to any SPAR Park n Shop store to purchase SPAR Gift Cards</p>\r\n\r\n<h3>Better Than Traditional Gifting</h3>\r\n\r\n<p>Traditional Gifting practices involve selecting gift items, procured from various sources and also spending on logistic cost in terms manpower, money &amp; time. All of these can be quite a hassle for any organization or individual.</p>\r\n\r\n<p>Secondly, the receiver may or may not actually appreciate the gift item. Picking up a relevant gift which matches with the liking, requirement or need of the receiver is actually a big challenge.</p>\r\n\r\n<p>Whereas, &quot;Park n Shop SPAR Gift Card&quot; gives a hassle free Gifting solution with the built in flexibility for the receiver to choose from a wide variety of products namely Electronics, White Goods, Laptop, Printers, Furniture, Supermarket, Bakery, Butchery, Fresh and Lifestyle products like Watches, Perfumes and Jewellery etc.</p>\r\n</div>\r\n\r\n<div class="col-md-6">\r\n<h3>Benefits of the Gift Card</h3>\r\n\r\n<div style="padding-left:10px; margin-bottom:40px;">\r\n<ul>\r\n	<li>Can be customized with your Brand/ Company Logo</li>\r\n	<li>Can be loaded with any amount</li>\r\n	<li>Can be used across all SPAR Park n Shop stores</li>\r\n	<li>Can be used against any kind of purchase in SPAR Park n Shop stores</li>\r\n	<li>Can be used for multiple transactions</li>\r\n	<li>More secured than the Paper Gift Vouchers</li>\r\n	<li>No Extra Charge</li>\r\n</ul>\r\n</div>\r\n\r\n<p>For further clarification / presentation, please get in touch with us at <a href="#">sales@arteegroup.com</a> or call us at 080 5749 5243</p>\r\n</div>\r\n</div>\r\n', 10, 0, 16, '', '', '', '2015-11-03 15:05:11'),
(17, 'Contact Us', 'contact-us', '<div class="row">\r\n<div class="col-md-8">\r\n<div class="row">\r\n<div class="col-md-6">\r\n<h3>Corporate Office</h3>\r\n\r\n<p><strong>58, Town Planning Way, Ilupeju, Lagos, Nigeria<br />\r\nTel: +234 (0) 1 761 6186</strong></p>\r\n\r\n<p>Call us on our hotline number Tel<br><b>+234 70 8065 3800</b></p>\r\n\r\n<p>Or write to us at <a href="mailto:feedback@sparnigeria.com">feedback@sparnigeria.com</a> or <a href="mailto:sales@arteegroup.com">sales@arteegroup.com</a></p>\r\n</div>\r\n\r\n<div class="col-md-6">\r\n<h3>Contacts</h3>\r\n\r\n<p><strong>For Supply of Products, please contact the Buying Team:</strong></p>\r\n\r\n<p>Supermarket: <a href="mailto:piku@arteegroup.com">piku@arteegroup.com</a><br />\r\nElectronics: <a href="mailto:martin@arteegroup.com">martin@arteegroup.com</a><br />\r\nMobile Phones: <a href="mailto:reba@arteegroup.com">reba@arteegroup.com</a><br />\r\nI.T.: <a href="mailto:anand.s@arteegroup.com">anand.s@arteegroup.com</a><br />\r\nFresh: <a href="mailto:imrankhan.z@arteegroup.com">imrankhan.z@arteegroup.com</a></p>\r\n\r\n<p><strong>Marketing</strong> &ndash; <a href="mailto:salesmarketing@arteegroup.com">salesmarketing@arteegroup.com</a></p>\r\n\r\n<p><span style="line-height: 20.8px;"><strong>Career</strong> -&nbsp;</span>For career opportunities and job inquiries, please contact:&nbsp;<a href="mailto:careers@arteegroup.com">careers@arteegroup.com</a> | Tel: +234 805 749 5210</p>\r\n\r\n<p><strong>Investor Relations -&nbsp;</strong><a href="mailto:vasu@arteegroup.com">vasu@arteegroup.com</a> | Tel: +234 805 749 5206</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4" style="text-align:center; padding-left:30px">\r\n<div id="googleMap" style="width:100%;height:380px;">&nbsp;</div>\r\n\r\n<p><strong>Artee Group Head Office</strong><br />\r\n<strong>58, Town Planning Way Ilupeju, Lagos, Nigeria</strong></p>\r\n</div>\r\n</div>\r\n', 0, 0, 17, '', '', '', '2015-11-10 10:00:53'),
(19, 'Store Locator', 'store-locator', '-1', 0, 0, 19, '', '', '', '2015-06-03 10:35:55'),
(20, 'Product Range', 'product-range', '-1', 0, 0, 0, '', '', '', '2015-10-11 17:13:31'),
(18, 'Deals', 'deals', '-1', 0, 0, 0, '', '', '', '2015-06-03 15:41:53'),
(21, 'Kids Corner', 'kids-corner', '-1', 0, 0, 1, '', '', '', '2015-06-03 15:45:00'),
(22, 'Recipes', 'recipes', '-1', 0, 0, 0, '', '', '', '2015-09-20 15:03:08'),
(23, 'About Artee Group', 'about-artee-group', '<p>Over the past 27 years, Artee Group has grown from a very humble beginning to become one of the fastest growing business conglomerate in Nigeria. Today, Artee Groups&rsquo; business spreads from retail to real estate to shopping malls to manufacturing. With a wide portfolio of brands such as <em>Park n Shop, SPAR, Port Harcourt Mall, Calabar Mall, Enugu Mall</em> under the retail space and <em>Cascade Table Water as well asMillennium Interiors</em> under the Manufacturing space, Artee Group caters to the various needs &amp; aspirations of Nigerian consumers</p>\r\n', 8, 6, 1, '', '', '', '2015-10-11 20:11:12'),
(24, 'SPAR International', 'spar-international', '<p>SPAR, a Dutch multinational retail chain has global presence in 41 countries across 4 continents with over 12,000 stores. Apart from Nigeria, SPAR boast of its presence in Angola, Australia, Austria, Belgium, Botswana, China, Croatia, Czech Republic, Denmark, France, Germany, Georgia, Greece, Hungary, Ireland, Italy, Japan, Lebanon, Mauritius, Mozambique. Namibia, Netherlands, Norway, Oman, Poland, Portugal, Qatar, Russia, Slovenia, South Africa, Spain, Switzerland, Ukraine, United Arab Emirates, United kingdom, Zambia, Zimbabwe to name a few.</p>\r\n\r\n<p>The word SPAR means &quot;to save [money]&quot; in some Germanic (among them German) and Scandinavian languages.</p>\r\n\r\n<p>SPAR was originally called DE SPAR, an acronym of the Dutch phrase Door Eendrachtig Samenwerken Profiteren Allen Regelmatig (English: through united co-operation everyone regularly profits). De Spar is Dutch for &quot;The spruce&quot;, hence Spar&#39;s logo. As the organisation expanded across Europe, the name was abbreviated by dropping &quot;DE&quot;.</p>\r\n\r\n<p>In Italy, the name is still Despar, though in keeping with the international branding, the &quot;SPAR&quot; section of the logo is highlighted, and the larger stores are still called Eurospar and Interspar.</p>\r\n\r\n<p>In Japan some stores operate under the name Hotspar, although the store logo colouring remains unchanged.</p>\r\n', 8, 6, 1, '', '', '', '2015-10-11 20:11:54'),
(27, 'Credit Card', 'credit-card', '<div class="col-md-6" style="line-height: 20.8px;">\r\n<h3>About The Co-branded&nbsp;Credit Card</h3>\r\n\r\n<p>The first retail company to introduce co-branded credit card in collaboration with Diamond Bank, a leading financial institution in Nigeria.</p>\r\n\r\n<p>Park n Shop Diamond Bank Credit Card enables you to spend at home in Nigeria and all over the world, including the internet &ndash; wherever the VISA sign is displayed. With a line of credit attached to the card, you can choose to repay in full every month at zero interest charge, or borrow over a time period that suits you.</p>\r\n\r\n<p>With our Park n Shop Diamond Bank Credit Card, we reward you with a 2% Cash Back for every ?100 you spend with the card at all SPAR Park &#39;n&#39; Shop stores and 1% at every other outlet across the world. This means that everything you make a purchase with the card you get Money Back!</p>\r\n</div>\r\n\r\n<div class="col-md-6" style="line-height: 20.8px;">\r\n<h3>Benefits of the Credit Card</h3>\r\n\r\n<div style="padding-left: 10px;">\r\n<ul>\r\n	<li>Smart buying for card holders, they save 2% when purchases are made at SPAR Park N Shop; 1% for any purchase made anywhere in the world.</li>\r\n	<li>Interest free credit up to 45 days.</li>\r\n	<li>Credit based on eligibility up to Naira 750,000.</li>\r\n	<li>Secure transaction with Chip and Pin (this is more secure than many cards issued in the U.S.A. who have not yet adopted chip and pin)</li>\r\n	<li>Carrying cash is more susceptible to theft and loss, not our credit card.</li>\r\n	<li>Easy, fast and accurate transaction at the point of sale.</li>\r\n	<li>Truly better than Cash</li>\r\n</ul>\r\n</div>\r\n\r\n<form action="http://websites.naijagosocial.com/spar/form-submit/1" class="message_form cc_form">\r\n<p>&nbsp;</p>\r\n\r\n<p><label>Name</label><input name="Name" required="true" type="text" /><br />\r\n<label>Email</label><input name="Email" required="true" type="email" /><br />\r\n<label>Mobile No</label><input name="Mobile" required="true" type="text" /></p>\r\n\r\n<p><button type="submit">Submit</button></p>\r\n</form>\r\n\r\n<p>Alternatively you can walk in to any SPAR Park &#39;n&#39; Shop store and visit the customer service desk.</p>\r\n</div>\r\n', 13, 0, 0, '', '', '', '2015-11-18 11:35:22');
INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_content`, `left_sidebar`, `right_sidebar`, `top_active`, `meta_title`, `meta_description`, `meta_keywords`, `updated_at`) VALUES
(28, 'Terms and Conditions', 'terms-and-conditions', '<p>The following terms apply to your use of and access to this website. By accessing or using our website, you accept, without limitation or qualification, these Terms and Conditions. If you do not agree to accept and comply with these Terms and Conditions do not access or use our website.</p>\r\n\r\n<p><strong>1. Website Terms and Conditions</strong></p>\r\n\r\n<p>1.1&nbsp;The content of the pages of this website is for your general information and use only. It is subject to change without notice.</p>\r\n\r\n<p>1.2 Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose.</p>\r\n\r\n<p>1.3 You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</p>\r\n\r\n<p>1.4 Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable.</p>\r\n\r\n<p>1.5 It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</p>\r\n\r\n<p>1.6 This website contains material which is owned by or licensed to us.</p>\r\n\r\n<p>1.7 This material includes, but is not limited to, the design, layout, look, appearance and graphics.</p>\r\n\r\n<p>1.8 Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</p>\r\n\r\n<p>1.9 All trademarks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</p>\r\n\r\n<p>1.10 Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offence.</p>\r\n\r\n<p>1.11 From time to time this website may also include links to other websites.</p>\r\n\r\n<p>1.12 These links are provided for your convenience to provide further information.</p>\r\n\r\n<p>1.13 They do not signify that we endorse the website(s).</p>\r\n\r\n<p>1.14&nbsp;We have no responsibility for the content of the linked website(s).</p>\r\n\r\n<p>1.15 Your use of this website and any dispute arising out of such use of the website is subject to the laws of the Nigeria.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>2.&nbsp; Trademarks</strong></p>\r\n\r\n<p>2.1 SPAR and the SPAR logo are registered trademarks of SPAR International and cannot be used by anyone for any purpose without the express written agreement of SPAR International.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>3.&nbsp;Copyright notice </strong></p>\r\n\r\n<p>3.1&nbsp;This website and its content is the copyright of SPAR &copy; SPAR Nigeria 2015. All rights reserved.</p>\r\n\r\n<p>3.2&nbsp;Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following: You may print or download to a local hard disk extracts for your personal and non-commercial&nbsp;use only.</p>\r\n\r\n<p>3.3&nbsp;You may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material.</p>\r\n\r\n<p>3.4&nbsp;You may not, except with our express written permission, distribute or commercially exploit the content.</p>\r\n\r\n<p>3.5&nbsp;Nor may you transmit it or store it in any other website or other form of electronic retrieval system.</p>\r\n\r\n<p><strong>4. Privacy and Confidentiality</strong></p>\r\n\r\n<p>4.1&nbsp;Thank you for accessing the sparnigeria.com website (&quot;Site&quot;). We respect your privacy and want to protect your personal information. To learn more, please read this Privacy Policy.</p>\r\n\r\n<p>4.2 This Privacy Policy explains how we collect, use and (under certain conditions) disclose your personal information. This Privacy Policy also explains the steps we have taken to secure your personal information. Finally, this Privacy Policy explains your options regarding the collection, use and disclosure of your personal information. By visiting the Site directly or through another site, you accept the practices described in this Policy.</p>\r\n\r\n<p>4.3&nbsp;Data protection is a matter of trust and your privacy is important to us. We shall therefore only use your name and other information which relates to you in the manner set out in this Privacy Policy. We will only collect information where it is necessary for us to do so and we will only collect information if it is relevant to our dealings with you.</p>\r\n\r\n<p>4.4&nbsp;We will only keep your information for as long as we are either required to by law or as is relevant for the purposes for which it was collected. You can visit the Site and browse without having to provide personal details. During your visit to the Site you remain anonymous and at no time can we identify you unless you have an account on the Site and log on with your user name and password.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>5. Virus protection</strong></p>\r\n\r\n<p>5.1 We make reasonable efforts to check and test material at all stages of production and to exclude viruses from the website.</p>\r\n\r\n<p>5.2 You must take your own precautions to ensure that the process which you employ for accessing the website does not expose you to the risk of viruses, malicious computer code or other forms of interference which may damage your own computer system.</p>\r\n\r\n<p>5.3 It is always wise to run an anti-virus program on all material downloaded from the internet. We cannot accept any liability regarding (computer) viruses or other damage of your computer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>6. How we use cookies</strong></p>\r\n\r\n<p>6.1 A cookie is a small file which asks permission to be placed on your computer&#39;s hard drive.</p>\r\n\r\n<p>6.2 Once you agree, the file is added and the cookie helps analyze web traffic or lets you know when you visit a particular site.</p>\r\n\r\n<p>6.3 Cookies allow web applications to respond to you as an individual.</p>\r\n\r\n<p>6.4 The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.</p>\r\n\r\n<p>6.5&nbsp;We use traffic log cookies to identify which pages are being used.</p>\r\n\r\n<p>6.6 This helps us analyze data about web page traffic and improve our website in order to tailor it to customer needs.</p>\r\n\r\n<p>6.7 We only use this information for statistical analysis purposes and then the data is removed from the system.</p>\r\n\r\n<p>6.8 Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not.</p>\r\n\r\n<p>6.9 A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>\r\n\r\n<p>6.10&nbsp;You can choose to accept or decline cookies.</p>\r\n\r\n<p>6.11 Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer.</p>\r\n\r\n<p>6.12 This may prevent you from taking full advantage of the website. In addition, we use a third-party web analysis service.</p>\r\n\r\n<p>6.13 This third party uses &ldquo;performance cookies&rdquo; to analyze how you use the website.</p>\r\n\r\n<p>6.14 The information generated by the cookie about your use of the website will be transmitted to and stored by this third party on its servers.</p>\r\n\r\n<p>6.15&nbsp;Under these services only abbreviated IP addresses will be further processed, so that a direct connection to the individual user is eliminated and not available.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>7. Links to other websites</strong></p>\r\n\r\n<p>7.1 Our website may contain links to other websites of interest.</p>\r\n\r\n<p>7.2 However, once you have used these links to leave our site, you should note that we do not have any control over that other website, therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by these Terms and Conditions.</p>\r\n\r\n<p>7.3 You should exercise caution and look at the privacy statement applicable to the website in question<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>8. Payment And Pricing</strong></p>\r\n\r\n<p>8.1 We are determined to provide the most accurate pricing information on the Site to our users; however, errors may still occur, such as cases when the price of an item is not displayed correctly on the website. As such, we reserve the right to refuse or cancel any order. In the event that an item is mispriced, we may, at our own discretion, either contact you for instructions or cancel your order and notify you of such cancellation.</p>\r\n\r\n<p>8.2 We shall have the right to refuse or cancel any such orders whether or not the order has been confirmed and your credit/debit card charged. In the event that we are unable to provide the services, we will inform you of this as soon as possible. A full refund will be given where you have already paid for the products.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>9. About Our Returns Policies</strong></p>\r\n\r\n<p style="margin-left:22.5pt;">The following returns policy applies to items purchased on the SPAR website.</p>\r\n\r\n<p>9.1 Damaged/ Defective items must be returned in the original condition they were received in with all the accompanying accessories.</p>\r\n\r\n<p>9.2 For men&#39;s innerwear, returns accepted within 7 days only on unused products and in original packaging condition.</p>\r\n\r\n<p>9.3 Intimate apparel (lingerie, shapewear and nightwear) can be returned only when the original packaging and tags are intact. Returns on underwear is conditional due to hygiene reasons.</p>\r\n\r\n<p>9.4 Any luggage items with locks must be returned unlocked.</p>\r\n\r\n<p>9.5 Returns are not accepted for edible items and some consumable items. Non-returnable items are marked on the product detail page. If a received item is damaged/defective, you may choose to dispose it at your convenience. The 10 day time-frame listed above is for customers to contact us and request for a refund on their order.</p>\r\n\r\n<p>9.6 Precious jewelry items have to be returned in tamper free packaging. Any additional cost incurred for tamper free packaging will be reimbursed.</p>\r\n\r\n<p>9.7 Return facility available only via self-returns. Return Pick Up facility is not available on items.</p>\r\n\r\n<p>9.8 Items that you no longer need must be returned in new and unopened condition with all the original packing, tags, inbox literature, warranty/ guarantee card, freebies and accessories including keys, straps and locks intact.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>10. Data that we collect</strong></p>\r\n\r\n<p>10.1&nbsp;We may collect various pieces of information if you seek to place an order for a product with us on the Site.</p>\r\n\r\n<p>10.2 We collect, store and process your data for processing your purchase on the Site and any possible later claims, and to provide you with our services.</p>\r\n\r\n<p>10.3 We may collect personal information including, but not limited to, your title, name, gender, date of birth, email address, postal address, delivery address (if different), telephone number, mobile number, fax number, payment details, payment card details or bank account details.</p>\r\n\r\n<p>10.4 We will use the information you provide to enable us to process your orders and to provide you with the services and information offered through our website and which you request. Further, we will use the information you provide to administer your account with us; verify and carry out financial transactions in relation to payments you make online; audit the downloading of data from our website; improve the.<br />\r\n<br />\r\n10.5 layout and/or content of the pages of our website and customize them for users; identify visitors on our website; carry out research on our users&#39; demographics; send you information we think you may find useful or which you have requested from us, including information about our products and services, provided you have indicated that you have not objected to being contacted for these purposes. Subject to obtaining your consent we may contact you by email with details of other products and services.&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>10.6 If you prefer not to receive any marketing communications from us, you can opt out at any time. We may pass your name and address on to a third party in order to make delivery of the product to you (for example to our courier or supplier).</p>\r\n\r\n<p>10.7 Payments that you make through the Site will be processed by our payment agents. You must only submit to us or our Agent or the Site information which is accurate and not misleading and you must keep it up to date and inform us of changes.</p>\r\n\r\n<p>10.8 Your actual order details may be stored with us but for security reasons cannot be retrieved directly by us. However, you may access this information by logging into your account on the Site. Here you can view the details of your orders that have been completed, those which are open and those which are shortly to be dispatched and administer your address details, bank details and any newsletter to which you may have subscribed. You undertake to treat the personal access data confidentially and not make it available to unauthorized third parties. We cannot assume any liability for misuse of passwords unless this misuse is our fault.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>11. Other uses of your Personal Information</strong></p>\r\n\r\n<p>11.1 We may use your personal information for opinion and market research. Your details are anonymous and will only be used for statistical purposes. You can choose to opt out of this at any time.</p>\r\n\r\n<p>11.2 Any answers to surveys or opinion polls we may ask you to complete will not be forwarded on to third parties. Disclosing your email address is only necessary if you would like to take part in competitions. We save the answers to our surveys separately from your email address.</p>\r\n\r\n<p>11.3 We may also send you other information about us, the Site, our other websites, our products, sales promotions, our newsletters, anything relating to other companies in our group or our business partners.</p>\r\n\r\n<p>11.4 If you would prefer not to receive any of this additional information as detailed in this paragraph (or any part of it) please click the &#39;unsubscribe&#39; link in any email that we send to you. Within 7 working days (days which are neither (i) a Saturday nor Sunday, nor (ii) a public holiday anywhere in Nigeria) of receipt of your instruction we will cease to send you information as requested.</p>\r\n\r\n<p>11.5 If your instruction is unclear we will contact you for clarification.</p>\r\n\r\n<p>11.6 We may further anonymize data about users of the Site generally and use it for various purposes, including ascertaining the general location of the users and usage of certain aspects of the Site or a link contained in an email to those registered to receive them, and supplying that anonymized data to third parties such as publishers. However, that anonymized data will not be capable of identifying you personally.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>12. Your rights</strong></p>\r\n\r\n<p>12.1 If you are concerned about your data you have the right to request access to the personal data which we may hold or process about you. You have the right to require us to correct any inaccuracies in your data free of charge. At any stage you also have the right to ask us to stop using your personal data for direct marketing purposes.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>13. Miscellaneous Provisions</strong></p>\r\n\r\n<p>13.1 You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</p>\r\n\r\n<p>13.2 Assigning or sub-contracting any of your rights or obligations under these Terms and Conditions of Sale to any third party is prohibited unless agreed upon in writing by the seller.</p>\r\n\r\n<p>13.3 We reserve the right to transfer, assign or sub-contract the benefit of the whole or part of any rights or obligations under these Terms and Conditions of Sale to any third party.</p>\r\n', 0, 0, 0, '', '', '', '2015-11-03 18:40:53'),
(29, 'Career', 'career', '', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(30, 'Sign Up', 'sign-up', '<div class="col-md-3" style="line-height: 20.8px;">&nbsp;</div>\r\n\r\n<div class="col-md-6" style="line-height: 20.8px;">\r\n<h3>Sign Up for Newsletters and Offers</h3>\r\n\r\n<form action="http://websites.naijagosocial.com/spar/form-submit/2" class="message_form cc_form" method="post">\r\n<p><label>Name</label><input name="Name" required="true" type="text" /><br />\r\n<label>Email</label><input name="Email" required="true" type="email" /><br />\r\n<label>Mobile No</label><input name="Mobile" required="true" type="text" /></p>\r\n\r\n<p><button type="submit">Submit</button></p>\r\n</form>\r\n</div>\r\n', 0, 0, 0, '', '', '', '2015-11-18 11:38:00');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `page_side_banner`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_detail` text NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--


-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `color` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_category`, `image`, `color`, `type`) VALUES
(6, 'Electronics', 'Product-Range---Electronics.gif', 'FF0000', 0),
(7, 'Grocery', 'Product-Range--Fruits-&-Vegetable.gif', '47c5ff', 0),
(8, 'Bakery', 'Product-Range---Bakery-1.gif', 'EDA757', 0),
(9, 'Wines & Spirits', 'Product-Range---Wines-&-Spirits.gif', 'e8217a', 0),
(10, 'Butchery', 'Product-Range---Butchery.gif', 'CF4848', 0),
(11, 'Laptop & Accessories', '1-Product-Range---Laptops-and-accessories.gif', '6765e0', 0),
(12, 'Mobile Phone & Accessories', 'Product-Range---Airtime.gif', '871d8f', 0),
(13, 'Furniture', 'Product-Range---Furniture.jpg', '', 0),
(14, 'Christmas Decoration', '', '01796F', 0),
(15, 'Kitchen Appliances', '', '0011FF', 0),
(16, 'Non-Food', 'non-food3.png', 'FF0000', 0),
(17, 'Perfume', 'perfume1.png', '00FF00', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `recipe_name`, `category_id`, `preparation_time`, `recipe_image`, `description`, `ingredient`, `cook_time`, `to_serve`, `method`, `updated_at`, `created_at`) VALUES
(13, ' bvhukfdhi', 2, '54 min', '20140305_095949.jpg', '<p>fhsdkfhowowe</p>\r\n', '<p>das vjydgasida, hdsiw</p>\r\n', '35 min', ' hudcgodwdo', '<p>cb ucgisucg is</p>\r\n', '2015-05-09 01:23:27', '0000-00-00 00:00:00'),
(14, 'ih jo', 3, ' hiyit', '', 'io houp0', ' juo9u 9ou', 'iojiou', 'uj 9 uioyhil', 'ioh oup9u ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'asdasdsad', 1, 'asdasd', 'ad1.jpg', 'kjlkjlkjl', 'jlkjlkjlkj', 'llkjlkjlk', '', '', '2015-05-01 01:24:39', '0000-00-00 00:00:00'),
(19, ' Chicken Alfresco', 1, '30 mins', 'chicken-alfresco-big.jpg', '<p>Its a grilled marinated chicken breast in Parmesan cream sauce best served with saute vegetables and meshed potatoes.</p>\r\n', '<ul>\r\n	<li>2 breast pieces&nbsp;Chicken</li>\r\n	<li>1 tbsp Oil</li>\r\n	<li>2 cloves Garlic</li>\r\n	<li>1 tsp Salt</li>\r\n	<li>1 tsp Pepper Powder</li>\r\n	<li>1 pc Lemon</li>\r\n	<li>1 tsp Butter</li>\r\n	<li>2 tbsp Parmesan Cream Sauce</li>\r\n</ul>\r\n', '25 mins', '2 people', '<p>yahooooa sd asd asd</p>\r\n', '2015-05-07 04:40:24', '0000-00-00 00:00:00'),
(20, 'asd asd sad', 1, 'asdasd', '', '<p>asdas dasd as</p>\r\n', '<p>sdasdasd</p>\r\n', '', '', '<p>asda</p>\r\n', '2015-05-08 19:51:05', '0000-00-00 00:00:00'),
(21, 'asdasd', 1, 'asd sad', '6-a-002-001-00.jpg', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'asd', 'asd', '<p>asdasd</p>\r\n', '2015-05-09 01:02:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE IF NOT EXISTS `recipe_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_category` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `recipe_categories`
--

INSERT INTO `recipe_categories` (`id`, `recipe_category`, `image`) VALUES
(1, 'Chinese1', 'Wedding-card-3.jpg'),
(2, 'Mughlai', ''),
(3, 'Recipe Category', '1-yamuna-expr2-1.jpg');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `related_recipes`
--

INSERT INTO `related_recipes` (`id`, `recipe_id`, `related_recipe_id`) VALUES
(5, 13, 14);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(500) NOT NULL,
  `service_description` varchar(500) NOT NULL,
  `service_image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_description`, `service_image`) VALUES
(1, 'Home Delivery', 'A convenient and affordable way to get your purchases made at the store delivered to your home. It’s more than just a delivery, you can expect a professional and courteous service from our esteemed SPAR staffs. Ask store staffs for further assistance.', 'Delivery1.png'),
(2, 'Made to Order Furniture', 'Need customized home & office furniture to suit your need and taste. With our made to order furniture service, you can be the proud owner of something original and unique. Ask floor staff for assistance with made to order furniture.', 'Furniture1.png'),
(3, 'Made to Order Cake', 'At SPAR we make cakes for every occasion ~ Weddings, Birthdays, Christenings. We will be glad to make Cakes to your preference and taste. Ask staff at bakery counter for assistance.', 'Cake1.png'),
(4, 'Private Catering', 'Whether you’re looking for a small, intimate dinner party or a large catered reception, SPAR private catering service is happy to assist you in creating the perfect event. Our professional staffs would be delighted to work with you on everything from the menu to the table layout. Ask staffs at ready meals counter for assistance.', 'Catering1.png');

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE IF NOT EXISTS `sidebars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sidebar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`id`, `sidebar`) VALUES
(6, 'About Sidebar'),
(7, 'Reward Card'),
(8, 'About Left Sidebar'),
(9, 'Reward Card Right'),
(10, 'Gift Card Sidebar'),
(11, 'Gift Card Right'),
(12, 'Contact Us'),
(13, 'Credit Card Left');

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
  `carousel_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `custom_html` text NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `sidebar_items`
--

INSERT INTO `sidebar_items` (`id`, `type`, `sidebar_id`, `page_id`, `media_id`, `carousel_id`, `title`, `custom_html`, `priority`) VALUES
(1, 2, 2, 0, 0, 0, 'Hey', '', 1),
(2, 1, 2, 5, 0, 0, '', '', 2),
(3, 3, 2, 0, 6, 0, '', '', 3),
(11, 4, 2, 0, 0, 0, '', '', 6),
(12, 5, 2, 0, 0, 5, '', '', 7),
(6, 4, 2, 0, 0, 0, '', '<p>&nbsp;jfyjhvbknkjbhvgfdghjkljhgcfhjk</p>\r\n', 5),
(13, 2, 2, 0, 0, 0, 'yuftdgh', '', 8),
(10, 5, 2, 0, 0, 5, '', '', 4),
(14, 3, 6, 0, 11, 0, '', '', 1),
(15, 1, 8, 1, 0, 0, '', '', 1),
(16, 3, 7, 0, 12, 0, '', '', 1),
(17, 1, 8, 3, 0, 0, '', '', 4),
(18, 1, 9, 5, 0, 0, '', '', 2),
(20, 1, 9, 6, 0, 0, '', '', 3),
(21, 1, 9, 7, 0, 0, '', '', 4),
(22, 1, 9, 8, 0, 0, '', '', 5),
(23, 1, 9, 9, 0, 0, '', '', 6),
(24, 1, 9, 10, 0, 0, '', '', 7),
(25, 1, 9, 11, 0, 0, '', '', 8),
(26, 1, 9, 12, 0, 0, '', '', 9),
(27, 1, 9, 13, 0, 0, '', '', 10),
(28, 1, 9, 14, 0, 0, '', '', 11),
(29, 1, 9, 15, 0, 0, '', '', 12),
(46, 3, 10, 0, 20, 0, '', '', 2),
(33, 4, 6, 0, 0, 0, '', '<p><strong>Upcoming SPAR outlet in Lagos</strong></p>\r\n', 2),
(35, 3, 12, 0, 16, 0, '', '', 1),
(45, 3, 10, 0, 19, 0, '', '', 1),
(48, 3, 13, 0, 23, 0, '', '', 1),
(39, 1, 9, 2, 0, 0, '', '', 1),
(43, 1, 8, 23, 0, 0, '', '', 2),
(44, 1, 8, 24, 0, 0, '', '', 3),
(47, 3, 7, 0, 21, 0, '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `side_banner`
--

CREATE TABLE IF NOT EXISTS `side_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `side_banner_name` varchar(200) NOT NULL,
  `side_banner_image` varchar(200) NOT NULL,
  `link` text NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `side_banner`
--

INSERT INTO `side_banner` (`id`, `side_banner_name`, `side_banner_image`, `link`, `priority`, `updated_at`) VALUES
(21, 'Black Friday', 'SPAR BLACK FRIDAY 2015.png', 'http://www.sparnigeria.com/blackfriday', 1, '2015-11-20 00:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `lat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `lng` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telephone` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `upcoming` enum('0','1') COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `city_id`, `name`, `address`, `lat`, `lng`, `telephone`, `upcoming`) VALUES
(1, 1, 'Maryland, Ikeja', 'Lofom House, 21, Mobolaji Bank Anthony Way,  By Leventis Bus-Stop', '6.576421', '3.365344', '08034658112', '0'),
(3, 1, 'Lekki', 'Behind Nicon Town & Total Filling Station, Ikate Elegushi Layout, In between 4th & 5th Round About on Lekki Express Way', '6.438510', '3.517466', '08057495246', '0'),
(9, 2, 'Port Harcourt Mall', 'Next to Govt House, Former Supabod, Azikiwe Road, Port Harcourt', '4.8207294', '7.014277', '08129937283', '0'),
(4, 2, 'Garrison Junction', 'Garrison Junction - 97, Aba Road, Garrison Bus Stop', '4.817569', '7.009336', '08057495261', '0'),
(5, 3, 'Wuse II', '740, Aminu Kano Crescent, Wuse II, Abuja', '9.066667', '7.483333', '08129937328', '0'),
(11, 3, 'Abuja CBD', 'Ceddi Plaza Mall, Plot 264, Central Business District, Abuja', '9.0542452', '7.4876507', '', '1'),
(7, 1, 'Victoria Island', 'Adeola Odeku Street, Victoria Island', '6.4301398', '3.4206564', '08058699755', '0'),
(8, 1, 'MMA2', 'Murtala Mohammed Domestic Airport Terminal 2, Airport Road, Ikeja', '6.5753627', '3.3277259', '08129936927', '0'),
(10, 1, 'Ilupeju', 'No 31-33, Town Planning Way, Opp GT Bank, Ilupeju', '6.5558144', '3.3545409', '', '1'),
(12, 4, 'Mary Slessor Avenue', 'Next to Cultural Centre, Mary Slessor Avenue, Calabar', '4.9611701', '8.3248509', '', '1');

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
(9, 'Editor SPAR Nigeria', 'editor@spar.com', '$2y$10$OgnriE06VWGyHAaqgoOMjekDmmUOBhVapEhIKEveVStOTn13.crE.', 'editor@spar.com', 2147483647, 0, '', '2015-05-08 21:01:03', '0000-00-00 00:00:00'),
(6, 'Admin SPAR Nigeria', 'admin@spar.com', '$2y$10$Tc0.nU6itR.inQZhKOKmqu.L5fCOPM0IGYGuXTHxyQdv2diD.aJbe', 'admin@spar.com', 1234567891, 1, '', '2015-05-08 21:01:19', '2015-05-08 21:01:19');
